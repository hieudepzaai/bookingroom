<?php

namespace App\Http\Controllers\post\post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ICrudController;

class PostController extends Controller implements ICrudController
{
    //

    public function __construct()
    {
    }


    /**
     * @return void
     *
     */
    public function Create() {

    }


    /**
     * @param $id
     * @return mixed
     */
    public function GetById($id)
    {
        // TODO: Implement GetById() method.
    }

    /**
     * @return mixed
     */
    public function GetAll()
    {
        // TODO: Implement GetAll() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function Delete($id)
    {
        // TODO: Implement Delete() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function Update($id)
    {
        // TODO: Implement Update() method.
    }
}
