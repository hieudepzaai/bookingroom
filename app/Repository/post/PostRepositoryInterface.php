<?php

namespace App\Repository\post;

use App\Repository\CrudRepositoryInterface;

interface PostRepositoryInterface
{
    public function create($data);
    public function get($id);
    public function getAll();
    public function delete($id);
    public function update($id ,  $data);

}
