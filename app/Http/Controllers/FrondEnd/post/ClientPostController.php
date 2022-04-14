<?php

namespace App\Http\Controllers\FrondEnd\post;

use App\Http\Controllers\Controller;
use App\Repository\post\PostRepositoryInterface;

class ClientPostController extends Controller
{
    protected $repo;
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repo = $postRepository;
    }
    public function home() {

        return view('frontend.page.home.index'  , [
            'for_sold_posts' => $this->repo->getForSoldPost() ,
            'for_rent_posts' => $this->repo->getForRentRoomPost() ,

        ]);
    }


}
