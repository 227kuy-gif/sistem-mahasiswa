

<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto p-6 bg-white rounded-2xl shadow-xl border mt-12">
    <div class="flex flex-col items-center border-b pb-6">
        <div class="bg-indigo-100 p-4 rounded-full text-indigo-600 mb-3">
            <i class="fa fa-id-card text-4xl"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-800"><?php echo e($student['nama']); ?></h2>
        <p class="text-sm font-mono text-indigo-600 mt-1 font-bold"><?php echo e($student['nim']); ?></p>
    </div>
    <div class="py-4 space-y-3 text-sm text-gray-700">
        <div class="flex justify-between border-b pb-1"><strong>Angkatan:</strong> <span><?php echo e($student['angkatan']); ?></span></div>
        <div class="flex justify-between border-b pb-1"><strong>Jurusan:</strong> <span><?php echo e($student['jurusan']); ?></span></div>
        <div class="flex justify-between border-b pb-1"><strong>Jenis Kelamin:</strong> <span><?php echo e($student['jenis_kelamin']); ?></span></div>
        <div class="flex justify-between border-b pb-1"><strong>IPK Kumulatif:</strong> <span class="font-bold text-emerald-600 text-base"><?php echo e(number_format($student['ipk'], 2)); ?></span></div>
        <div class="flex justify-between border-b pb-1 text-xs text-gray-400"><strong>URL Slug:</strong> <span class="font-mono text-gray-500"><?php echo e($student['slug']); ?></span></div>
    </div>
    <div class="mt-6 text-center">
        <a href="<?php echo e(route('mahasiswa.index')); ?>" class="inline-flex items-center gap-2 bg-gray-100 px-4 py-2 rounded-full text-sm text-gray-600 hover:bg-gray-200 transition">
            <i class="fa fa-arrow-left"></i> Kembali ke Dashboard
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/mahasiswa/show.blade.php ENDPATH**/ ?>