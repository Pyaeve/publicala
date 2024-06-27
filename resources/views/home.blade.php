@extends('layouts.base')
@section('content')
<div class="container pt-4">
    <div class="row">
        @include('layouts.sidebar-left')
        <!-- Main content -->
        <div class="col-8 col-lg-8 col-xs-8">

            <h4> Comparte alguna idea </h4>
            <form action="{!! route('frontend.post.save')!!}" type="post">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <textarea class="form-control" name="post" id="idea" rows="3"></textarea>

                </div>

            </div>
            <div class="row mt-1">

                  <div class="col-lg-4 col-md-4 col-sm-4  col-xs-5 ">
                    <button class="btn btn-sm btn-dark btn-send btn-sm  btn-md btn-sx "><i class="fa fa-paper-plane" aria-hidden="true"></i> Publicar
                    </button>
                    <i class="pe-1 text-end" id="limit_count">(280/280)</i>
                  </div>
            </div>
        </form>
            <hr>
            <div class="mt-3">
            @foreach ($posts as $post )

                <div class="card">
                    <div class="px-3 pt-4 pb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                <div>
                                    <h5 class="card-title mb-0"><a href="{!! env('APP_URL') !!}/&#64;{!! $post->USER_NICKNAME  !!}"> {!! $post->USER_NAME !!}
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fs-6 fw-light text-muted">
                            {!! $post->USER_POST_BODY !!}
                        </p>
                        <!-- <div class="d-flex justify-content-between">
                            <div>
                                <a href="{!! env('APP_URL') !!}/&#64;{!! $post->USER_NICKNAME  !!}/followers" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                    </span> {!! count($followers) !!} seguidores </a>
                            </div>
                            <div>
                                <a href="{!! env('APP_URL') !!}/&#64;{!! $post->USER_NICKNAME  !!}/followings" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                    </span>siguiendo  {!! count($followings) !!}  </a>
                            </div>
                            <div>
                                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                    {!! $post->USER_POST_TS!!} </span>
                            </div>
                        </div>-->
                <!-- Posts Comment
                        <div>
                            <div class="mb-3">
                                <textarea class="fs-6 form-control" rows="1"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-sm"> Post Comment </button>
                            </div>

                            <hr>
                            <div class="d-flex align-items-start">
                                <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                                    alt="Luigi Avatar">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="">Luigi
                                        </h6>
                                        <small class="fs-6 fw-light text-muted"> 3 hour
                                            ago</small>
                                    </div>
                                    <p class="fs-6 mt-3 fw-light">
                                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                        Evil)
                                        by
                                        Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                                        very
                                        popular during the Renaissan
                                    </p>
                                </div>
                            </div>
                        </div>

                    -->
                    </div>
                </div>
                <br>
                    @endforeach
            </div>
        </div>
        <!-- /Main content -->
        @include('layouts.sidebar-right')

    </div>
</div>
@endsection
