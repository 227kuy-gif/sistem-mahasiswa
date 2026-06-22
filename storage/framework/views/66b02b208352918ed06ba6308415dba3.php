<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto p-6 bg-white rounded-xl shadow-md border mt-10">
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Akun Baru</h2>
        <p class="text-sm text-gray-500">Silakan masukkan nama dan email Anda untuk pendaftaran.</p>
    </div>

    <?php if($errors->any()): ?>
        <div class="mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded text-sm">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('register.post')); ?>">
        <?php echo csrf_field(); ?>
        
        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
            <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="John Doe" required autofocus>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
            <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="anda@example.com" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
            <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Minimal 8 karakter" required>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ketik ulang password" required>
        </div>
        
        <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-200 cursor-pointer mb-4">
            Daftar Sekarang
        </button>
    </form>
    
    <div class="text-center">
        <a href="<?php echo e(route('login')); ?>" class="text-sm text-indigo-600 hover:underline">Sudah punya akun? Login di sini</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/auth/register.blade.php ENDPATH**/ ?>