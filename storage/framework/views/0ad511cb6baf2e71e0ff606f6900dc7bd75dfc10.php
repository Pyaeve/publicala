 <!-- sidebar left -->
 <div class="col-2 col-lg-1 col-xs-2 col-sm-2 col-md-2">
            <div class="card ">
                <div class="card-body ">
                    <ul class="nav nav-link-secondary justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo route('home'); ?>">
                                <span class="fa fa-2x fa-home"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo env('APP_URL'); ?>/&#64;<?php echo Auth::user()->nickname; ?>/followers">
                                <span class="fa fa-2x fa-users "></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="fa fa-2x fa-user"></span></a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <!-- /sidebar left -->
<?php /**PATH C:\server7\htdocs\publicala\resources\views/layouts/sidebar-left.blade.php ENDPATH**/ ?>