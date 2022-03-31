<?php

namespace App\Http\Controllers\BackEnd\post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ICrudController;
use App\Http\Requests\Post\CreatePostRequest;
use App\Repository\post\PostRepositoryInterface;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;


class PostController extends Controller
{
    protected $repo;
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repo = $postRepository;
    }

    public function index() {

        return view('post.index');
    }
    public function Create(CreatePostRequest $request) {
        if($request->all() != []) return $request->all();

        return view('backend.page.post.create');
    }


    public function GetById($id)
    {

    }


    public function GetAll()
    {

    }

    public function Delete($id)
    {

    }

    public function Update($id)
    {

    }
}
