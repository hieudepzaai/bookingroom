<?php

namespace App\Repository\address\ward;

use App\Models\Ward;

class WardRepository implements  WardRepositoryInterface
{
    protected  $model ;
    public function __construct(Ward $model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
       return $this->model->findOrFail($id);

    }

    public function getWardByDistrictId($id)
    {
        return $this->model->whereDistrictId($id)->get();
    }
}
