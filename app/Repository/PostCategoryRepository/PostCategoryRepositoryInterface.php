<?php

namespace App\Repository\PostCategoryRepository;

interface PostCategoryRepositoryInterface
{
    public function getById($id);
    public function getAll();
    public function create($data);
    public function delete($id);
}
