<?php

namespace App\Repositories;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use App\Staff;
use DB;

class PostDoneRepository extends Repository {


    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\PostDone';
    }
    public function DoMonth()
    {
    $data=	DB::table("post_done")
		->select(DB::raw("(YEAR(created_at)) as year,(MONTH(created_at)) as month,(COUNT(*)) as total_do"))
        ->orderBy('month')
        ->groupBy(DB::raw("MONTH(created_at),YEAR(created_at)"))
        ->get();
        return $data;
    }
    public function nhanvien()
    {
    	$data=	DB::table("post_done")
		->select(DB::raw("(staff_id),(YEAR(created_at)) as year,(MONTH(created_at)) as month,(COUNT(*)) as total_do"))
        ->orderBy('year','month','total_do')
        ->groupBy(DB::raw("staff_id,MONTH(created_at),YEAR(created_at)"))
        ->get();
        foreach ($data as $value) {
        	$value->staff=Staff::with('file')->find($value->staff_id);
        }
        return $data;
    }

}