<?php

namespace App\Repository\address\district;

use App\Models\Address\District;
use Illuminate\Database\Eloquent\Model;

class DistrictRepository implements DistrictRepositoryInterface
{

    protected $model;
    public function __construct(District $model)
    {
        $this->model =  $model;
    }

    public function create($data): Model|District
    {
        return $this->model->create($data);
    }

    public function get($id): Model|\Illuminate\Database\Eloquent\Collection|array|District
    {
        return $this->model->findOrFail($id);
    }

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }


}
