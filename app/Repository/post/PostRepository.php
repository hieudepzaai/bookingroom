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
        return $this->model
            ->join("post_category" , "post.category_id" , "=" , "post_category.id")
            ->join("province" , "post.province_id" , "=" , "province.id")
            ->join("district" , "post.district_id" , "=" , "district.id")
            ->join("ward" , "post.ward_id" , "=" , "ward.id")
            ->join("post_premium_type" , "post.price_type_id" , "=" , "post_premium_type.id")
            ->join("users" , "post.created_by" , "=" , "users.id")
            ->selectRaw("post.* , post_category.name as category_name ,
                                province.name as province_name ,district.name as district_name ,  ward.name as ward_name ,
                                post_premium_type.premium_type as post_premium_type  , post_premium_type.unit  ,users.name as  user_name  ")
            ->where('post.id' , '=', $id)->first();
    }

    public function getAll()
    {
//        return $this->model->paginate(\Config::get("AppConstant.items_per_page"));
        return $this->model
            ->join("post_category" , "post.category_id" , "=" , "post_category.id")
            ->join("province" , "post.province_id" , "=" , "province.id")
            ->join("district" , "post.district_id" , "=" , "district.id")
            ->join("ward" , "post.ward_id" , "=" , "ward.id")
            ->join("post_premium_type" , "post.price_type_id" , "=" , "post_premium_type.id")
            ->join("users" , "post.created_by" , "=" , "users.id")
            ->selectRaw("post.* , post_category.name as category_name ,
                                province.name as province_name ,district.name as district_name ,  ward.name as ward_name ,
                                post_premium_type.premium_type as post_premium_type  , post_premium_type.unit  ,users.name as  user_name  ")
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
