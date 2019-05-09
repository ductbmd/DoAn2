<?php

namespace App\Repositories;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use App\ItemDetail;
use DB;

class ItemRepository extends Repository {


    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Item';
    }
    public function createDetail($id)
    {
    	$item=$this->model->find($id);
    		for ($i=1; $i <=$item->quantity ; $i++) {
    			$input=array('item_id' => $item->id,'description'=>'Chi tiet '.$item->name );
    			ItemDetail::create($input);
    	}
    }
    public function findDetail($value)
    {
        if(isset($value)){
           return $this->model->where('type',3)->where(function($q) use ($value) {
          $q->where('name', 'like', "%".$value."%")
          ->orWhere('id',$value)
          ->orWhere('price','<',$value);
        })->with('file.file')->paginate(5); 
        }
       return $this->model->where('type',3)->with('file.file')->paginate(5); 
    }
    public function searchAll($value)
    {
        return $this->model->where('name', 'like', "%".$value."%")->orWhere('id','=',$value)->with('file.file')->paginate(8);
    }

}