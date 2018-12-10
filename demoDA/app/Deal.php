<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
	//Hoa don
     protected $table = 'deal';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'staff_id','customer_id','deposit','discout','description','created_at'
    ];
    
    public function staff()
    {
    	return $this->hasOne(Staff::class,'id','staff_id');
    }
    public function customer()
    {
    	return $this->hasOne(Customer::class,'id','customer_id');
    }
    public function detail()
    {
    	return $this->hasMany(DealDetail::class,'deal_id','id');
    }
}
