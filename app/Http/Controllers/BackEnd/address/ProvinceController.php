<?php

namespace App\Http\Controllers\BackEnd\address;

use App\Http\Controllers\Controller;
use App\Repository\address\province\ProvinceRepository;
use App\Repository\address\province\ProvinceRepositoryInterface;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    //
    protected $repo;
    public function __construct(ProvinceRepositoryInterface $provinceRepository)
    {
        $this->repo = $provinceRepository;
    }
    public function getAll() {
        return $this->repo->getAll();
    }
    public function getByName(Request $request) {
//        dd($this->repo->getByName($request->name));
//        $request->name = trim($request->name);
        $provinces = $this->repo->getByName($request->name);
        $last_query = end($provinces);

        return $provinces;
    }
    public function getDistrictByProvinceId($id) {
//        return $this->repo->
    }
}
