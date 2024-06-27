<!-- sidebar right -->
<div class="col-3 col-lg-3 col-xs-3">
    <div class="card mt-3">
        <div class="card-header pb-0 border-0">
            <h5 class="">Seguidores ({!! count($followers)!!}) </h5>
        </div>
        <div class="card-body">
        @if(count($followers)==0)

        @else
            @foreach ( $followers as $follower )


            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="{!! env('APP_URL') !!}/&#64;{!! $follower->USER_NICKNAME  !!}"><img class="avatar-img rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="{!! env('APP_URL') !!}/&#64;{!! $follower->USER_NICKNAME  !!}">{!! $follower->USER_NAME  !!} {!! $follower->USER_SERNAME  !!}</a>
                    <p class="mb-0 small text-truncate">&#64;{!! $follower->USER_NICKNAME  !!}</p>
                </div>
              </div>
            @endforeach

        @endif
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header pb-0 border-0">
            <h5 class="">Seguiendo ({!! count($followings)!!}) </h5>
        </div>
        <div class="card-body">
            @foreach ( $followings as $follower )


            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="{!! env('APP_URL') !!}/&#64;{!! $follower->USER_NICKNAME  !!}"><img class="avatar-img rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="{!! env('APP_URL') !!}/&#64;{!! $follower->USER_NICKNAME  !!}">{!! $follower->USER_NAME  !!} {!! $follower->USER_SERNAME  !!}</a>
                    <p class="mb-0 small text-truncate">&#64;{!! $follower->USER_NICKNAME  !!}</p>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto btn-stop-follow" data-user="{!! $follower->USER_ID  !!}" href="#"><i
                        class="fa-solid fa-minus"> </i></a>
            </div>
            @endforeach

        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header pb-0 border-0">
            <h5 class="">A quien seguir  </h5>
        </div>
        <div class="card-body">
            @foreach ( $followto as $follower )


            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="{!! env('APP_URL') !!}/&#64;{!! $follower->USER_NICKNAME  !!}"><img class="avatar-img rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="{!! env('APP_URL') !!}/&#64;{!! $follower->USER_NICKNAME  !!}">{!! $follower->USER_NAME  !!} {!! $follower->USER_SERNAME  !!}</a>
                    <p class="mb-0 small text-truncate">&#64;{!! $follower->USER_NICKNAME  !!}</p>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto btn-start-follow" data-user="{!! $follower->USER_ID  !!}" href="#"><i
                        class="fa-solid fa-plus"> </i></a>
            </div>
            @endforeach

        </div>
    </div>


</div>
<!-- /sidebar right -->
