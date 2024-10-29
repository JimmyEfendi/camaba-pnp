<?php
        $alert = $alert ?? null;
        $page_ref = [
            array("title"=>"Kriteria","route"=>"kriteria"),
        ];
?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['bodyClass' => 'g-sidenav-show bg-gray-200','alert' => $alert]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bodyClass' => 'g-sidenav-show bg-gray-200','alert' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($alert)]); ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.sidebar','data' => ['activePage' => 'Kriteria']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['activePage' => 'Kriteria']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.navs.auth','data' => ['titlePage' => 'Tambah Kriteria','pageRef' => $page_ref]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.navs.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titlePage' => 'Tambah Kriteria','page_ref' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($page_ref)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div> -->
            <div class="card card-body mx-3 mx-md-4 mt-6">
                <h6>Data Kriteria</h6>
                <form method='POST' action='<?php echo e(route('create-kriteria')); ?>' enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Nama Kriteria</label>
                                <input type="text" name="nama" class="form-control border border-2 p-2"   value="<?php echo e(old('nama')); ?>">
                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class='text-danger inputerror'><?php echo e($message); ?> </p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Kode Kriteria</label>
                                <input type="text" name="kode" class="form-control border border-2 p-2" value="<?php echo e(old('kode')); ?>">
                                <?php $__errorArgs = ['kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class='text-danger inputerror'><?php echo e($message); ?> </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Tipe Bobot</label>
                                <select class="form-control border border-2 p-2" name="tipe_bobot" id="tipe-bobot" >
                                    <?php $__currentLoopData = $list_tipe_bobot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($bobot->tipe); ?>"><?php echo e($bobot->tipe); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['bobot'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class='text-danger inputerror'><?php echo e($message); ?> </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <hr>
                        <h6>Bobot Kriteria Terhadap Program Studi</h6>
                        <?php $__currentLoopData = $list_prodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-3 col-12">
                                <label class="form-label"><?php echo e($prodi->nama); ?></label>
                                <select class="form-control border border-2 p-2 select-bobot" name="bobot[<?php echo e($prodi->id); ?>]">
                                </select>
                                <?php $__errorArgs = ['bobot'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class='text-danger inputerror'><?php echo e($message); ?> </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <hr>
                        <h6>Pertanyaan</h6>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Pertanyaan untuk kriteria</label>
                                <textarea class="form-control border border-2 p-2" name="pertanyaan" rows="5" placeholder="Tulis pertanyaan ...." spellcheck="false" required><?php echo e(old('pertanyaan')); ?></textarea>
                                <?php $__errorArgs = ['pertanyaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class='text-danger inputerror'><?php echo e($message); ?> </p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 col-12">
                                <label class="form-label">Tipe Bobot Pertanyaan</label>
                                <select class="form-control border border-2 p-2" name="tipe_bobot_pertanyaan" id="tipe_bobot_pertanyaan">
                                    <?php $__currentLoopData = $list_tipe_bobot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($bobot->tipe); ?>"><?php echo e($bobot->tipe); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['bobot'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class='text-danger inputerror'><?php echo e($message); ?> </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                            </div>
                        </div>
                        <button type="submit" class="btn bg-gradient-dark">Tambahkan</button>
                </form>
            </div>

            
        </div>
    </div>
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
<?php $__env->startPush('js'); ?>
<script type="text/javascript">
    const tipeBobotEl = document.getElementById("tipe-bobot");

    // axios.get(`/api/bobot/getAllTipe`).then((res)=>{
    //     const list_tipe_bobot = res.data;
    //     list_tipe_bobot.forEach((item)=>{
    //         let newOption = document.createElement("option");
    //         newOption.value = item.tipe
    //         newOption.innerText = item.tipe;
    //         tipeBobotEl.appendChild(newOption)
    //     })

    //     const event = new Event('change');
    //     tipeBobotEl.dispatchEvent(event)

    // }).catch((err)=>{
    //     console.log(err)
    // })

    function loadBobot(event){
        const selectedTipe = event.target.value;
        axios.get(`/api/bobot/getByTipe/${selectedTipe}`).then((res)=>{
            const list_bobot = res.data;
            const selectBobotEls = document.querySelectorAll('.select-bobot')
            selectBobotEls.forEach((bobotEls)=>{
                bobotEls.innerHTML = ""
                let optionBobot = list_bobot.map((bobot)=>{
                    let newOption = document.createElement("option");
                    newOption.value = bobot.nilai;
                    newOption.innerText = bobot.keterangan;
                    return newOption;
                })
                bobotEls.append(...optionBobot)
            })
        }).catch((err)=>{
            console.log(err)
        })
    }

    tipeBobotEl.addEventListener("change",loadBobot)

    const event = new Event('change');
    tipeBobotEl.dispatchEvent(event)
</script>
<?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH E:\@BISMILLAH WISUDAH\spk-jimmy\resources\views/pages/kriteria/create.blade.php ENDPATH**/ ?>