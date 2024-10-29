<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['titlePage','page_ref']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['titlePage','page_ref']); ?>
<?php foreach (array_filter((['titlePage','page_ref']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"> 
            <?php if(isset($page_ref)): ?>
                <?php $__currentLoopData = $page_ref; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($ref['params'])): ?>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="<?php echo e(route($ref['route'],$ref['params'],false)); ?>"><?php echo e($ref['title']); ?></a></li>
                    <?php else: ?>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="<?php echo e(route($ref['route'])); ?>"><?php echo e($ref['title']); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><b><?php echo e($titlePage); ?></b></li>
            <?php endif; ?>    
            </ol>
            
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
   
            </div>
            <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-none" id="logout-form">
                <?php echo csrf_field(); ?>
            </form>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="<?php echo e(route('user-profile')); ?>" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none"><?php echo e(auth()->user()->name); ?></span>
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center ps-3">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                   
                        <span class="d-sm-inline d-none"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out me-sm-1"></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <!-- <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\Downloads\spk-jimmy\resources\views/components/navbars/navs/auth.blade.php ENDPATH**/ ?>