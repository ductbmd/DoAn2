<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemWare extends Model
{
    protected $table = 'item_ware';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id','ware_id','description'
    ];
    public function item()
    {
    	return $this->hasOne(ItemDetail::class,'id','item_id');
    }

    public function ware()
    {
    	return $this->hasOne(Warehouse::class,'id','ware_id');
    }
}
