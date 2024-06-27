<?php $__env->startSection('content'); ?>
<div class="container pt-4">
    <div class="row">
        <?php echo $__env->make('layouts.sidebar-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main content -->
        <div class="col-8 col-lg-8 col-xs-8">

            <div class="mt-3">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="card">
                    <div class="px-3 pt-4 pb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                <div>
                                    <h5 class="card-title mb-0"><a href="<?php echo env('APP_URL'); ?>/&#64;<?php echo $post->USER_NICKNAME; ?>"> <?php echo $post->USER_NAME; ?>

                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fs-6 fw-light text-muted">
                            <?php echo $post->USER_POST_BODY; ?>

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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <!-- /Main content -->
        <?php echo $__env->make('layouts.sidebar-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\server7\htdocs\publicala\resources\views/followers.blade.php ENDPATH**/ ?>