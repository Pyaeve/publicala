@extends('layouts.base')
@section('content')
<div class="container pt-4">
    <div class="row">
        @include('layouts.sidebar-left')
        <!-- Main content -->

                <div class="col-8 col-lg-8 col-xs-8">
                    <div class="card">
                        <div class="px-3 pt-4 pb-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                    <div>
                                        <h3 class="card-title mb-0"><a  href="{!! env('APP_URL') !!}/&#64;{!! $host[0]['nickname']  !!}">{!! $host[0]['name']  !!} {!! $host[0]['sername']  !!}</a>
                                        </h3>
                                        <span class="fs-6 text-muted">&#64;{!! $host[0]['nickname']  !!}</span>

                                    </div>
                                </div>
                            </div>
                            <div class="px-2 mt-4">
                               <!-- <h5 class="fs-5"> About : </h5>
                                <p class="fs-6 fw-light">
                                    This book is a treatise on the theory of ethics, very popular during the
                                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                                    from a line in section 1.10.32.
                                </p>-->
                                <div class="d-flex justify-content-start">
                                    <a href="{!! env('APP_URL') !!}/&#64;{!! $host[0]['nickname']  !!}/followers" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                                        </span> Seguidores ({!! count($followers)!!}) </a>
                                    <a href="{!! env('APP_URL') !!}/&#64;{!! $host[0]['nickname']  !!}/followings" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                                        </span> Seguiendo ({!! count($followings)!!}) </a>

                                        @if(Auth::user()->id!=$host[0]['id'] ):
                                        <button class="btn btn-primary btn-sm btn-start-follow"> Seguir </button>
                                        @endif
                                </div>
                                <div class="mt-3">

                                </div>
                            </div>
                        </div>
                    </div>
                    <h4> Comparte alguna idea.. </h4>
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
                        @foreach ($posts as $post ):

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
                            @endforeach
                    </div>
                </div>
        <!-- /Main content -->
        @include('layouts.sidebar-right')

    </div>
</div>
@endsection
