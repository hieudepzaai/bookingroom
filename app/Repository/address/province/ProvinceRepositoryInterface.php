<?php

namespace App\Repository\address\province;

interface ProvinceRepositoryInterface
{
//    public function create($data);
    public function get($id);
    public function getAll();
    public function getByName($name);
}
