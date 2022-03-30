<?php

namespace App\Http\Controllers\BackEnd\PostCategory;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Repository\PostCategoryRepository\PostCategoryRepositoryInterface;

class PostCategoryController extends Controller
{
    protected $repo;
    public function __construct(PostCategoryRepositoryInterface $repository)
    {
        $this->repo = $repository;
    }
    public function getAll() {
        return $this->repo->getAll();
    }

}
