<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Department;
use App\ItemOwned;
use App\Repositories\ItemOwnRepository;
use App\ItemDetail;
use App\Staff;
class ItemOwnController extends Controller
{
    private $model;

    public function __construct(ItemOwnRepository $model)
    {
        $this->middleware('auth', ['except'=>[]]);
        $this->model = $model;
        
    }
    public function index()
    {
        $itemOwn=ItemOwned::orderBy('staff_id','desc')->with('item.itemgoc.file.file')->with('staff')->with('department')->paginate(16);
        // dd($itemOwn);
        /*dd($itemOwn);*/
        return view('itemown.index')->with('itemOwn',$itemOwn);
    }
    public function create()
    {
        $staff=Staff::select('id','name')->get();
        $staff_id=array();
        foreach ($staff as $value) {
            $staff_id[$value->id]=$value->name;
        }
    	$items=Item::select('id','name')->where('type',1)->get();
    	$itemIds = array();
    	foreach ($items as $item ) {
    		$itemIds[$item->id]=$item->name;
    	}
    	$departments=Department::select('id','name')->get();
    	$department_id = array();
    	foreach ($departments as $department ) {
    		$department_id[$department->id]=$department->name;
    	}
    	return view('itemown.create')->with('itemIds',$itemIds)->with('department_ids',$department_id)->with('staff_ids',$staff_id);
    }
    public function store(Request $request)
    {
    	
    	$input=$request->except(['_token','item_id']);
    	$itemdetail=ItemDetail::where('item_id','=',$request->input('item_id'))->where('owned',0)->first();
    	if(!empty($itemdetail)){
    		$input['item_id']=$itemdetail->id;
    		$this->model->create($input);
    		$itemdetail->owned=1;
    		$itemdetail->save();
    	}
    	return redirect()->route('itemown.index');
    }

}
