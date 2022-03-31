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

        $view_data = [
            "posts" => $this->repo->getAll()
        ];
        return view('backend.page.post.index' , $view_data);
    }
    public function Create(CreatePostRequest $request) {
        if($request->all() != []) return $request->all();

        return view('backend.page.post.create');
    }


    public function GetById($id)
    {
        return $this->repo->get($id);

    }


    public function getAll(Request $request)
    {
        $item_per_page = $request->per_page ;
        return $this->repo->getAll($item_per_page);

    }

    public function Delete($id)
    {

    }

    public function edit($id)
    {

        $view_data = [
            "post" => $this->repo->get($id)
        ];

        return view('backend.page.post.edit' , $view_data);

    }
}
