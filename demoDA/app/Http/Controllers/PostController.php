<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostDoRepository;
use App\Repositories\PostDoneRepository;
use App\Services\UploadFileService;
class PostController extends Controller
{
    private $modelDo;
    private $modelDone;
    public function __construct(PostDoRepository $modelDo,PostDoneRepository $modelDone)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->modelDo = $modelDo;
        $this->modelDone = $modelDone;
        
    }
    public function index()
    {
    	$postDo=$this->modelDo->with('file')->with('staff')->with('item')->paginate(6);
    	$postDone=$this->modelDone->with('file')->with('staff')->paginate(6);
    	return view('post.index')->with('postDo',$postDo)->with('postDone',$postDone);
    }
    public function create()
    {
    	return view('post.create');
    }
    public function store(Request $request)
    {
    	$input=$request->except(['file','_token']);
        if ( $request->file('file') ) {
                $file_id=UploadFileService::uploadImage($request->file('file'));
                //Tao file
               $input['file_id']=$file_id;
                //Tao staff
            }
    	$this->modelDo->create($input);

    	return redirect()->route('post.index');
    }
    //chi tiet vao 1 bai to do
    public function show($id)
    {
        
        return view('post.show')->with('post',$this->modelDo->with('file')->with('staff.file')->with('item.itemown.staff.file','item.itemgoc')->find($id));
    }
    //return view accep, tien hanh post anh va nhan vien
    public function accept($id)
    {
        return view('post.accept')->with('post_do_id',$id);
    }

    public function accepted(Request $request)
    {
        $input=$request->except(['file','_token']);
        if ( $request->file('file') ) {
                $file_id=UploadFileService::uploadImage($request->file('file'));
                //Tao file
               $input['file_id']=$file_id;
                
            }
            $this->modelDo->find($request->post_do_id)->delete();
        $this->modelDone->create($input);

        return redirect()->route('post.index')->with('message', 'Done, you will see your work bellow WORKS HAVE DONE');
    }
}
