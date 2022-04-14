
<!--section specific slider-->
<div class="section w-100">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <a class="section-title text-warning">
                   {{ $title }}
                </a>
            </div>
        </div>
        <div class="post-slider row" id="slider" >
            @foreach($posts as $p)

                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/post/{{$p->id}}" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    @switch($p->category_name)
                                        @case('for_sold')
                                        <span class="badge bg-success">{{$p->category_description}}</span> @break
                                        @case('for_rent')
                                        <span class="badge bg-info">{{$p->category_description}}</span> @break
                                        @case('find_room')
                                        <span class="badge bg-danger">{{$p->category_description}}</span> @break
                                        @case('find_shared_room')
                                        <span class="badge bg-success">{{$p->category_description}}</span> @break
                                        @default
                                        <span class="badge bg-primary">{{$p->category_description}}</span>
                                    @endswitch
{{--                                    <span class="badge bg-primary">Ở ghép</span>--}}
{{--                                    <span class="badge bg-info">cho thuê chung cư</span>--}}
{{--                                    <span class="badge bg-danger">Bán nhà</span>--}}
{{--                                    <span class="badge bg-primary">Ở ghép</span>--}}


                                </div>
                                <p class="post-name">{{$p->title}}</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">{{$p->price}} vnd/tháng </p>
                                <p class="text-secondary post-date">{{($p->diffInDate)}}   </p>

                            </div>
                        </a>
                    </div>

                </div>
            @endforeach



        </div>
    </div>
</div>

<!--end section specific slider-->
