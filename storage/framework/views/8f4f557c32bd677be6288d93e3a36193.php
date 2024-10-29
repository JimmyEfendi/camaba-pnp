<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['signin', 'signup','list_jurusan']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['signin', 'signup','list_jurusan']); ?>
<?php foreach (array_filter((['signin', 'signup','list_jurusan']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<nav
    class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-1 py-2 start-0 end-0 mx-4">
    <div class="ps-2 pe-0" style="display:flex;flex:1">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 d-flex flex-column" href="<?php echo e(route('welcome')); ?>">
            <span>Rekomendasi Program Studi PNP</span>
        </a>
        <div class="flex-fill"></div>
        <div id="navigation">
            <ul class="navbar-nav">
                <li class="dropdown">
                    <a class="nav-link me-2 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-graduation-cap opacity-6 text-dark me-1"></i>
                            Jurusan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php $__currentLoopData = $list_jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="dropdown-item" href="<?php echo e(route('show-jurusan',['id_jurusan'=>$jurusan->id],false)); ?>"><?php echo e($jurusan->nama); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <?php if(auth()->user()): ?>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo e(route('dashboard')); ?>">
                        <i class="fas fa-house opacity-6 text-dark me-1"></i>
                        Dashboard
                    </a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo e(route($signup)); ?>">
                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                        Daftar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo e(route($signin)); ?>">
                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                        Login
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</nav>
<?php /**PATH C:\Users\Asus\Desktop\spk-jimmy\resources\views/components/navbars/navs/guest.blade.php ENDPATH**/ ?>