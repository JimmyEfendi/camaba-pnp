<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['list_kriteria']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['list_kriteria']); ?>
<?php foreach (array_filter((['list_kriteria']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="progress my-2">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"></div>
</div>

<form id="mainForm" method='POST' action='<?php echo e(route('spk-perhitungan')); ?>'  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row " id="form-umum" active>
        <h2 class="h5">Pertanyaan umum</h2>
        <p>Jawab beberapa pertanyaan berikut dan segera ketahui program studi yang cocok dengan mu</p>
        <div class="mb-3 col-12">
            <label class="form-label text-md mb-2">Siapa nama mu ?</label>
            <input type="text" class="form-control border border-2 p-2 " name="nama" value="<?php echo e(auth()->user()->name ?? ''); ?>"/>
        </div>
        <?php $__currentLoopData = $list_kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($kriteria->tipe_bobot_pertanyaan != "Penilaian"): ?>
        <div class="mb-3 col-12">
            <label class="form-label text-md mb-2"><?php echo e($kriteria->pertanyaan); ?></label>
            <select class="form-control border border-2 p-2 select-nilai" name="bobot[<?php echo e($kriteria->kode); ?>]" data-tipe="<?php echo e($kriteria->tipe_bobot_pertanyaan); ?>" >
            </select>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="row d-none" id="form-nilai">
        <h2 class="h5">Nilai rata-rata mata pelajaran</h2>
        <p>Masukan nilai rata-rata mata pelajaran mu dalam rentang 0-100 pada form dibawah.</p>
        <?php $__currentLoopData = $list_kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($kriteria->tipe_bobot_pertanyaan == "Penilaian"): ?>
        <div class="mb-3 col-12 d-flex">
            <label class="form-label text-md mb-2 w-50 flex-wrap"><?php echo e($kriteria->pertanyaan); ?></label>
            <select class="form-control border border-2 p-2 select-nilai" name="bobot[<?php echo e($kriteria->kode); ?>]" data-tipe="<?php echo e($kriteria->tipe_bobot_pertanyaan); ?>" >
            </select>
        </div>
        
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="text-center mt-2">
        <button class="btn bg-gradient-dark" id="btnForm">Selanjutnya</button>
    </div>   
 
</form>


<?php $__env->startPush('js'); ?>
<script type="text/javascript">
    const nilaiEl = document.querySelectorAll('.select-nilai');
    const mainFormEl = document.querySelector("#mainForm");
    const allFormEl = document.querySelectorAll('[id^="form-"]')
    const btnFormEl =  document.querySelector("#btnForm");
    const progressBarEl = document.querySelector(".progress-bar");

    function loadBobot(tipe,selectEl){
        const selectedTipe = tipe
        axios.get(`/api/bobot/getByTipe/${selectedTipe}`).then((res)=>{
            const list_bobot = res.data;
                let optionBobot = list_bobot.map((bobot)=>{
                    let newOption = document.createElement("option");
                    newOption.value = bobot.nilai;
                    newOption.innerText = bobot.keterangan;
                    return newOption;
                })
                selectEl.append(...optionBobot)
        }).catch((err)=>{
            console.log(err)
        })
    }
    nilaiEl.forEach((el)=>{
        const tipe = el.dataset.tipe;
        loadBobot(tipe,el)
    })

    function activateForm(event){
        event.preventDefault()
        let nextFormIndex = 0
        const activeForm = allFormEl.forEach((el,index)=>{
          if(el.hasAttribute("active"))   {
            nextFormIndex = index+1
            el.classList.add("d-none")
            el.removeAttribute("active")
        }
        })

        const nextForm = allFormEl[nextFormIndex]
        if(nextForm){
            nextForm.setAttribute("active",'')
            nextForm.classList.remove("d-none")
            const isLastForm = allFormEl[nextFormIndex+1] ? false : true;
            if(isLastForm){
                btnFormEl.innerText = "Ketahui Sekarang !"
            }
            progressBarEl.style.width = `${(nextFormIndex+1)/allFormEl.length * 90}%`
        }   
        else{
            mainFormEl.submit();
        } 
    };

    btnFormEl.addEventListener("click",activateForm)

</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\Asus\Desktop\spk-jimmy\resources\views/components/perhitungan/form.blade.php ENDPATH**/ ?>