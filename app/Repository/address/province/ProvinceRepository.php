<?php

namespace App\Repository\address\province;

use App\Models\Province;

class ProvinceRepository implements  ProvinceRepositoryInterface
{
    protected Province $model ;
    public function __construct(Province $model)
    {
        $this->model = $model;
    }

    public function get($id)
    {
        // TODO: Implement get() method.
        return $this->model->findOrFail($id);
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->model->limit(20)->get();
    }

    public function getByName($name)
    {
        // TODO: Implement getByName() method.
        return $this->model->where('name' , 'like' , '%'.$name.'%')->get();
//        $queries = DB::getQueryLog();
    }

}
