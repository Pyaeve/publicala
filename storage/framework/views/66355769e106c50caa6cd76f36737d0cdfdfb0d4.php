<!DOCTYPE html>
<html lang="es_PY">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Twitter Clone Bootstrap 5 Example</title>

    <link href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/material-icons.css')); ?>" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>Ideas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>        </div>
    </nav>
   <?php echo $__env->yieldContent('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
         <!-- Scripts -->
         <script src="<?php echo e(asset('js/jquery.min.js')); ?>" ></script>
         <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" ></script>

      <script src="<?php echo e(asset('js/theme.min.js')); ?>" ></script>
      <script type="text/javascript">
         $(document).ready(function() {
            <?php echo $__env->yieldContent('scripts'); ?>
            $('#idea').on('keyup',function() {

$('#limit_count').html("("+$(this).val().length+" / 280)");

if($(this).val().length > 280) {

  $(this).val($(this).val().substring(0, 280));

  $('#limit_count').html("(280 / 280)");

}


});


$('.btn-start-follow').click(function(){

var user_id = $(this).data('user');

$.ajax({
url: "<?php echo route('frontend.ajax.follow.start'); ?>",
type: "get",
header: {'csrf-token':'<?php echo csrf_token(); ?>'},
data: {'user_id': user_id},
success: function(d) {
alert(d);
}
});

});

$('.btn-stop-follow').click(function(){

var user_id = $(this).data('user');

$.ajax({
url: "<?php echo route('frontend.ajax.follow.stop'); ?>",
type: "get",
header: {'csrf-token':'<?php echo csrf_token(); ?>'},
data: {'user_id': user_id},
success: function(d) {
alert(d);
}
});

});



         });
      </script>
</body>

</html>
<?php /**PATH C:\server7\htdocs\publicala\resources\views/layouts/base.blade.php ENDPATH**/ ?>