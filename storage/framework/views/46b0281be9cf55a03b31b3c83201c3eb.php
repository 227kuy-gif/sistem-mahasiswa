<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto p-6 bg-white rounded-xl shadow-md border mt-10">
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Verifikasi OTP</h2>
        <p class="text-sm text-gray-500">Kode OTP telah dikirim ke: <strong class="text-indigo-600"><?php echo e($email); ?></strong></p>
    </div>

    <?php if(session('success')): ?>
        <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded text-sm">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded text-sm">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('auth.otp.verify')); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="email" value="<?php echo e($email); ?>">
        
        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Kode OTP 6 Digit</label>
            <input type="text" name="otp_code" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 text-center text-xl tracking-[0.5em] font-mono" maxlength="6" placeholder="------" required autofocus>
        </div>
        
        <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-200 cursor-pointer">
            Verifikasi & Login
        </button>
    </form>
    
    <div class="mt-4 text-center">
        <a href="<?php echo e(route('login')); ?>" class="text-sm text-indigo-600 hover:underline">Ganti Email</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/auth/otp.blade.php ENDPATH**/ ?>