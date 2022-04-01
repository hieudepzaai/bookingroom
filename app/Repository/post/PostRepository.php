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

    public function create($data): Model|Post
    {
        return $this->model->create($data);
    }

    public function get($id)
    {
        return $this->model
            ->PostDetail()
            ->where('post.id' , '=', $id)->first();
    }

    public function getAll()
    {
//        return $this->model->paginate(\Config::get("AppConstant.items_per_page"));
        return $this->model
            ->PostDetail()->latest()
            ->paginate(\Config::get("AppConstant.items_per_page"));

    }

    public function delete($id): int
    {
        return $this->model->destroy($id);
    }

    public function update($id, $data)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    public function paginate()
    {
        return $this->model->paginate(\Config::get("AppConstant.items_per_page"));
    }
}
