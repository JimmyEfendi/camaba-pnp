<?php
        $alert = $alert ?? null;
        $page_ref = [
            array("title"=>"Riwayat Rekomendasi","route"=>"perhitungan"),
            array("title"=>"Hasil Rekomendasi","route"=> "result-perhitungan","params"=>['id_perhitungan'=>$perhitungan->id])
        ];
?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['bodyClass' => 'g-sidenav-show  bg-gray-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bodyClass' => 'g-sidenav-show  bg-gray-200']); ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.sidebar','data' => ['activePage' => 'riwayat_rekomendasi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['activePage' => 'riwayat_rekomendasi']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.navs.auth','data' => ['titlePage' => 'Detail Perhitungan Rekomendasi','pageRef' => $page_ref]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.navs.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titlePage' => 'Detail Perhitungan Rekomendasi','page_ref' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($page_ref)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="mb-0">Rekomendasi Program Studi</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex text-center justify-content-center align-items-center">
                                <img src="<?php echo e(asset('assets')); ?>/img/logos/prodi/<?php echo e($perhitungan->hasil_prodi['logo']); ?>"
                                    class="avatar avatar-md me-3 border-radius-lg"
                                    alt="logo_prodi">
                                <p class="text-lg text-bold text-success mb-0"><?php echo e($perhitungan->hasil_prodi['nama']); ?></p>
                            </div>
                        </div>
                        <div class="card-footer pb-1 d-flex justify-content-between">
                            <p class="text-xs mb-1"><?php echo e($perhitungan->nama); ?></p>
                            <p class="text-xs text-bold"><?php echo e($perhitungan->created_at); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <div class="card-body d-grid p-3">
                            <a class="btn btn-primary btn-link"
                                href="<?php echo e(route('result-perhitungan',['id_perhitungan'=>$perhitungan->id],false)); ?>">
                                <div class="ripple-container">
                                    <i class="material-icons">keyboard_return</i>
                                    Hasil
                                </div>
                            </a>
                            <a class="btn btn-secondary btn-link"href="https://www.pnp.ac.id"target="_blank">
                                <div class="ripple-container">
                                    <i class="material-icons">language</i>
                                    Website Jurusan
                                </div>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-23 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Input Pengguna</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div>
                                <hr>
                                <p class="text-dark text-sm">Bobot Prefrensi</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Kode Kriteria</td>
                                            <?php $__currentLoopData = $perhitungan->bobot_prefrensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $bp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td><?php echo e($kode_kriteria); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nama Kriteria</td>
                                            <?php $__currentLoopData = $perhitungan->bobot_prefrensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $bp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td><?php echo e($perhitungan->data_kriteria[$kode_kriteria]['nama']); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                        <tr>
                                            <td>Bobot Preferensi</td>
                                        <?php $__currentLoopData = $perhitungan->bobot_prefrensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $bp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td><?php echo e($bp); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
      
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-23 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Alternatif Program Studi</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div>
                                <hr>
                                <p class="text-dark text-sm">Program Studi</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Kode</td>
                                            <td>Nama</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $perhitungan->data_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi=> $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_prodi); ?></td>
                                            <td><?php echo e($prodi['nama']); ?></td>
                                        </tr>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Perhitungan Metode Electre</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div>
                                <hr>
                                <p class="text-dark text-sm">Matrix Bobot Kriteria</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <?php $__currentLoopData = $perhitungan->matrix_bobot_kriteria[array_key_first($perhitungan->matrix_bobot_kriteria)]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td><?php echo e($kode_kriteria); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $perhitungan->matrix_bobot_kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $mbk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_kriteria); ?></td>
                                            <?php $__currentLoopData = $mbk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td style="border:1px solid black"><?php echo e($bobot); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div>
                                <p class="text-dark text-sm">Matrix Normalisasi Bobot Kriteria</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <?php $__currentLoopData = $perhitungan->matrix_normalisasi[array_key_first($perhitungan->matrix_normalisasi)]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td><?php echo e($kode_kriteria); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $perhitungan->matrix_normalisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $mbk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_kriteria); ?></td>
                                            <?php $__currentLoopData = $mbk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td style="border:1px solid black"><?php echo e(number_format($bobot,2)); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div>
                                <p class="text-dark text-sm">Matrix Pembobotan Ternormalisasi</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <?php $__currentLoopData = $perhitungan->matrix_pembobotan_normalisasi[array_key_first($perhitungan->matrix_pembobotan_normalisasi)]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td><?php echo e($kode_kriteria); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $perhitungan->matrix_pembobotan_normalisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $mbk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_kriteria); ?></td>
                                            <?php $__currentLoopData = $mbk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td style="border:1px solid black"><?php echo e(number_format($bobot,2)); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-dark text-sm">Himpunan Concordance</p>
                                    <table class="table table-sm text-xs">
                                        <thead>
                                            <tr>
                                                <td>Alternatif</td>
                                                <td>Kriteria</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $perhitungan-> himpunan_concordance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_1 => $hp_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $hp_p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_2 => $hp_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(count($hp_c) > 0): ?>
                                                    <tr>
                                                        <td><?php echo e($kode_prodi_1); ?> >= <?php echo e($kode_prodi_2); ?> </td>
                                                        <td>
                                                            {
                                                            <?php $__currentLoopData = $hp_c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($kode_kriteria); ?>,
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            }
                                                        </td>
                                                    </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-dark text-sm">Himpunan Discordance</p>
                                    <table class="table table-sm text-xs">
                                        <thead>
                                            <tr>
                                                <td>Alternatif</td>
                                                <td>Kriteria</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $perhitungan-> himpunan_discordance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_1 => $hp_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $hp_p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_2 => $hp_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(count($hp_c) > 0): ?>
                                                    <tr>
                                                        <td><?php echo e($kode_prodi_1); ?> < <?php echo e($kode_prodi_2); ?> </td>
                                                        <td>
                                                            {
                                                            <?php $__currentLoopData = $hp_c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($kode_kriteria); ?>,
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            }
                                                        </td>
                                                    </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <p class="text-dark text-sm">Matrix Concordance</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <?php $__currentLoopData = $perhitungan->data_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi => $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td>
                                                    <?php echo e($kode_prodi); ?>

                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $perhitungan->data_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_1 => $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_prodi_1); ?></td>
                                            <?php $__currentLoopData = $perhitungan->matrix_concordance[$kode_prodi_1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_2 => $concordance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($kode_prodi_1 !== $kode_prodi_2): ?>
                                                    <td><?php echo e($concordance); ?></td>
                                                <?php else: ?>
                                                    <td>-</td>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div>
                                <p class="text-dark text-sm">Matrix Discordance</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <?php $__currentLoopData = $perhitungan->data_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi => $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td>
                                                    <?php echo e($kode_prodi); ?>

                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $perhitungan->data_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_1 => $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_prodi_1); ?></td>
                                            <?php $__currentLoopData = $perhitungan->matrix_discordance[$kode_prodi_1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_2 => $concordance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($kode_prodi_1 !== $kode_prodi_2): ?>
                                                    <td><?php echo e($concordance); ?></td>
                                                <?php else: ?>
                                                    <td>-</td>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div>
                                <hr>
                                <p class="text-dark text-sm">Dominasi Concordance</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <td>Perhitungan Nilai Dominasi</td>
                                            <td>Nilai Dominasi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $perhitungan->matrix_dominasi_concordance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_1 => $nilai_dominasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_prodi_1); ?></td>
                                            <td>
                                                <?php $__currentLoopData = $perhitungan->matrix_concordance[$kode_prodi_1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_2 => $nilai_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($kode_prodi_1 !==  $kode_prodi_2): ?>
                                                        <span><?php echo e($nilai_c); ?></span>
                                                        <?php if($kode_prodi_2 != array_key_last($perhitungan->matrix_concordance[$kode_prodi_1])): ?>
                                                        <span>+</span>
                                                        <?php endif; ?>
                                                    <?php endif; ?>    
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td><?php echo e($nilai_dominasi); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div>
                                <hr>
                                <p class="text-dark text-sm">Dominasi Discordance</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <td>Perhitungan Nilai Dominasi</td>
                                            <td>Nilai Dominasi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $perhitungan->matrix_dominasi_discordance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_1 => $nilai_dominasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_prodi_1); ?></td>
                                            <td>
                                                <?php $__currentLoopData = $perhitungan->matrix_discordance[$kode_prodi_1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi_2 => $nilai_c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($kode_prodi_1 !==  $kode_prodi_2): ?>
                                                        <span><?php echo e($nilai_c); ?></span>
                                                        <?php if($kode_prodi_2 != array_key_last($perhitungan->matrix_discordance[$kode_prodi_1])): ?>
                                                        <span>+</span>
                                                        <?php endif; ?>
                                                    <?php endif; ?>    
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td><?php echo e($nilai_dominasi); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div>
                                <hr>
                                <p class="text-dark text-sm">Dominasi Akhir</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <td>Nilai Dominasi</td>
                                            <td>Peringkat</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $perhitungan->matrix_dominasi_akhir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi => $nilai_dominasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_prodi); ?></td>
                                            <td><?php echo e($nilai_dominasi); ?></td>
                                            <td><?php echo e($perhitungan->matrix_rank[$kode_prodi]['peringkat']); ?>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div>
                                <hr>
                                <p class="text-dark text-sm">Peringkat Dominasi</p>
                                <table class="table table-bordered table-sm text-xs">
                                    <thead>
                                        <tr>
                                            <td>Alternatif</td>
                                            <td>Nilai Dominasi</td>
                                            <td>Peringkat</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $perhitungan->matrix_rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi => $dominasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($kode_prodi); ?></td>
                                            <td><?php echo e($dominasi['nilai']); ?></td>
                                            <td><?php echo e($dominasi['peringkat']); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-23 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Rekomendasi Prodi Berdasarkan Perhitungan</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                        <div>
                            <table class="table table-bordered table-sm text-xs">
                                <thead>
                                    <tr>
                                        <td>Peringkat</td>
                                        <td>Kode Prodi</td>
                                        <td>Nama Prodi</td>
                                        <td>Jurusan</td>
                                        <td>Nilai Dominasi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $perhitungan->matrix_rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_prodi => $dominasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr <?php if($kode_prodi == array_key_first($perhitungan->matrix_rank)): ?> class="text-success text-bold" <?php endif; ?> >
                                        <td><?php echo e($dominasi['peringkat']); ?></td>
                                        <td><?php echo e($kode_prodi); ?></td>
                                        <td><?php echo e($perhitungan->data_prodi[$kode_prodi]['nama']); ?></td>
                                        <td><?php echo e($perhitungan->data_jurusan[$perhitungan->data_prodi[$kode_prodi]['id_jurusan']]['nama']); ?></td>
                                        <td><?php echo e($dominasi['nilai']); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.plugins','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('plugins'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH E:\@BISMILLAH WISUDAH\spk-jimmy\resources\views/pages/perhitungan/result-detail.blade.php ENDPATH**/ ?>