<?php

namespace App\Http\Controllers\address;

use App\Http\Controllers\Controller;
use App\Repository\address\district\DistrictRepositoryInterface;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    //
    protected $repo;
    public function __construct(DistrictRepositoryInterface $districtRepository)
    {
        $this->repo = $districtRepository;
    }
    public function index(){
        return view('admin.layout.mainLayout');
    }
    public function getAll() {
        return $this->repo->getAll();

    }
    public function getById($id) {
        return $this->repo->get($id);
    }
}
