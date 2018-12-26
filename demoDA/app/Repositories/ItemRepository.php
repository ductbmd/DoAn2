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
    public function createDetail()
    {
    	$dung_cu=$this->model->where('type','=',1)->get();
    	foreach ($dung_cu as $item) {
    		for ($i=1; $i <$item->quantity ; $i++) {
    			$input=array('item_id' => $item->id,'description'=>'Chi tiet '.$item->name );
    			ItemDetail::create($input);
    		} 
    	}
    	dd("success");
    }

}