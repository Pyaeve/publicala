@extends('layouts.base')
@section('content')
<div class="container pt-4">
    <div class="row">
        @include('layouts.sidebar-left')
        <!-- Main content -->
        <div class="col-8 col-lg-8 col-xs-8">

            <div class="mt-3">
                @foreach ($posts as $post )

                <div class="card">
                    <div class="px-3 pt-4 pb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                <div>
                                    <h5 class="card-title mb-0"><a href="{!! env('APP_URL')!!}/&#64;{!! $post->USER_NICKNAME  !!}"> {!! $post->USER_NAME !!}
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
