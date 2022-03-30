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

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getAll()
    {
        return $this->model->select(['id' , 'name'])->get();
    }

    public function getByName($name)
    {
        return $this->model->where('name' , 'like' , '%'.$name.'%')->get();
//        $queries = DB::getQueryLog();
    }

}
