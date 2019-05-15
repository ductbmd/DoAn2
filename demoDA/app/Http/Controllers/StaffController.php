<?php

namespace App\Http\Controllers;
use App\Staff;
use Illuminate\Http\Request;
use App\Repositories\StaffRepository;
use App\Services\UploadFileService;
use App\Department;
use App\Location;
use App\PostDo;
class StaffController extends Controller
{
	private $model;

    public function __construct(StaffRepository $model)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        
    }
    public function index()
    {
        return view('staff.index')->with('datas',$this->model->with('department')->with('file')->orderBy('position', 'desc')->paginate(8));
    }
    public function create()
    {
        $department=Department::select('id','name')->get();
        $department_id=array();
        foreach ($department as $value) {
            $department_id[$value->id]=$value->name;
        }
    	return view('staff.create')->with('department_ids',$department_id);
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
    	$this->model->create($input);

    	return redirect()->route('staff.index');
    }
    public function edit($id)
    {
        $department=Department::select('id','name')->get();
        $department_id=array();
        foreach ($department as $value) {
            $department_id[$value->id]=$value->name;
        }
       return view('staff.edit')->with('staff',$this->model->findBy('id',$id))->with('department_ids',$department_id);
    }
    public function update($id,Request $request)
    {
        $input=$request->except(['file','_token','_method']);
        if ( $request->file('file') ) {
                $file_id=UploadFileService::uploadImage($request->file('file'));
                //Tao file
               $input['file_id']=$file_id;
                //Tao staff
            }
        $this->model->update($input, $id);
        return redirect()->route('staff.index');
    }
    public function destroy($id)
    {
        $staff=$this->model->findBy('id',$id);
        $staff->delete();
        return redirect()->route('staff.index');
    }
    public function search(Request $request)
    {
        return view('staff.index')->with('datas',$this->model->search($request->search));
    }
    public function Notification()
    {
        $listLocation=array();
        $locations=Location::where('staff_id',\Auth::guard()->user()->id )->get(['name']);
        foreach ($locations as $location) {
            array_push($listLocation, $location->name);
        }
        $postDo=PostDo::whereIn('localtion',$listLocation)->paginate(8);
        return view('Notification')->with('postDo',$postDo);
    }
}
