<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by www.creative-tim.com & www.updivision.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['bodyClass','alert']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['bodyClass','alert']); ?>
<?php foreach (array_filter((['bodyClass','alert']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- <script src="<?php echo e(asset('js/app.js')); ?>" defer></script> -->

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets')); ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets')); ?>/img/favicon.ico">
    <title>
        Sistem Rekomendasi Program Studi | PNP
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('assets')); ?>/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo e(asset('assets')); ?>/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('assets')); ?>/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <script src="<?php echo e(asset('assets')); ?>/js/plugins/ckeditor.js"></script>
    <style>
        figure.image > img{
            width:"100%" !important;
            height:"auto" !important;
        }
    </style>
</head>
<body class="<?php echo e($bodyClass); ?>">

<?php if(isset($alert)): ?>
        <div class="position-fixed top-1 start-50 translate-middle-x z-index-2">
            <div class="toast fade hide p-2 bg-gradient-<?php echo e($alert['status']); ?>" data-bs-autohide="true" role="alert" aria-live="assertive" id="toastEl"
                aria-atomic="true">
                <div class="toast-header bg-transparent border-0">
                        <i class="material-icons text-white me-2">
                            notifications
                        </i>
                        <span class="me-auto text-white font-weight-bold"><?php echo e($alert['title']); ?></span>
                        <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast"
                            aria-label="Close"></i>
                    </div>
                    <hr class="horizontal light m-0">
                    <div class="toast-body text-white">
                       <?php echo e($alert['message']); ?>

                    </div>
            </div>
        </div>
<?php endif; ?>

<?php echo e($slot); ?>




<script src="<?php echo e(asset('assets')); ?>/js/core/popper.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/core/bootstrap.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/plugins/axios.min.js"></script>

<script type="text/javascript">
            let toastEl = document.getElementById("toastEl")
            if(toastEl){
                let toast = bootstrap.Toast.getOrCreateInstance(toastEl) 
                toast.show()
            }
</script>
<script type="text/javascript">
    axios.defaults.headers.common = {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };
</script>
<script>
    let textEditor = document.querySelector('#text-editor')
    if(textEditor)
        ClassicEditor
            .create(textEditor)
            .catch( error => {
                console.error( error );
            } );
</script>
<?php echo $__env->yieldPushContent('js'); ?>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

</script>
<!-- Github buttons -->
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo e(asset('assets')); ?>/js/material-dashboard.min.js?v=3.0.0"></script>
</body>
</html>
<?php /**PATH C:\Users\Asus\Desktop\spk-jimmy\resources\views/components/layout.blade.php ENDPATH**/ ?>