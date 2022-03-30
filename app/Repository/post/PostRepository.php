<?php

namespace App\Repository\post;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class PostRepository implements PostRepositoryInterface
{
    protected $model;
    public function __construct(Post $model)
    {
        $this->model =  $model;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function get($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }

    public function delete($id): int
    {
        return $this->model->destroy($id);
    }

    public function update($id, $data)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    public function paginate($per_page = 15)
    {
        return $this->model->paginate($per_page);
    }
}
