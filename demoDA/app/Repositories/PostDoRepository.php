<?php

namespace App\Repositories;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;

use DB;

class PostDoRepository extends Repository {


    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\PostDo';
    }
    
    public function DoMonth()
    {
    $data=	DB::table("post_do")
		->select(DB::raw("(YEAR(created_at)) as year,(MONTH(created_at)) as month,(COUNT(*)) as total_do"))
        ->orderBy('month')
        ->groupBy(DB::raw("MONTH(created_at),YEAR(created_at)"))
        ->get();
        return $data;
    }
}