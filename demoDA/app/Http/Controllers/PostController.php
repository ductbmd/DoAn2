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
    	$postDone=$this->modelDone->paginate(6);
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
}
