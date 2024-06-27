<!-- sidebar right -->
<div class="col-3 col-lg-3 col-xs-3">
    <div class="card mt-3">
        <div class="card-header pb-0 border-0">
            <h5 class="">Seguidores (<?php echo count($followers); ?>) </h5>
        </div>
        <div class="card-body">
        <?php if(count($followers)==0): ?>

        <?php else: ?>
            <?php $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="<?php echo env('APP_URL'); ?>/&#64;<?php echo $follower->USER_NICKNAME; ?>"><img class="avatar-img rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="<?php echo env('APP_URL'); ?>/&#64;<?php echo $follower->USER_NICKNAME; ?>"><?php echo $follower->USER_NAME; ?> <?php echo $follower->USER_SERNAME; ?></a>
                    <p class="mb-0 small text-truncate">&#64;<?php echo $follower->USER_NICKNAME; ?></p>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header pb-0 border-0">
            <h5 class="">Seguiendo (<?php echo count($followings); ?>) </h5>
        </div>
        <div class="card-body">
            <?php $__currentLoopData = $followings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="<?php echo env('APP_URL'); ?>/&#64;<?php echo $follower->USER_NICKNAME; ?>"><img class="avatar-img rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="<?php echo env('APP_URL'); ?>/&#64;<?php echo $follower->USER_NICKNAME; ?>"><?php echo $follower->USER_NAME; ?> <?php echo $follower->USER_SERNAME; ?></a>
                    <p class="mb-0 small text-truncate">&#64;<?php echo $follower->USER_NICKNAME; ?></p>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto btn-stop-follow" data-user="<?php echo $follower->USER_ID; ?>" href="#"><i
                        class="fa-solid fa-minus"> </i></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header pb-0 border-0">
            <h5 class="">A quien seguir  </h5>
        </div>
        <div class="card-body">
            <?php $__currentLoopData = $followto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="<?php echo env('APP_URL'); ?>/&#64;<?php echo $follower->USER_NICKNAME; ?>"><img class="avatar-img rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="<?php echo env('APP_URL'); ?>/&#64;<?php echo $follower->USER_NICKNAME; ?>"><?php echo $follower->USER_NAME; ?> <?php echo $follower->USER_SERNAME; ?></a>
                    <p class="mb-0 small text-truncate">&#64;<?php echo $follower->USER_NICKNAME; ?></p>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto btn-start-follow" data-user="<?php echo $follower->USER_ID; ?>" href="#"><i
                        class="fa-solid fa-plus"> </i></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>


</div>
<!-- /sidebar right -->
<?php /**PATH C:\server7\htdocs\publicala\resources\views/layouts/sidebar-right.blade.php ENDPATH**/ ?>