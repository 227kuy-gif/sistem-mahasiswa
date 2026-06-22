<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">
    <nav class="bg-white shadow-sm border-b mb-6">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="<?php echo e(route('mahasiswa.index')); ?>" class="font-bold text-xl text-indigo-600">
                <i class="fa fa-graduation-cap mr-2"></i>Sistem Mahasiswa
            </a>
            
            <?php if(auth()->guard()->check()): ?>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-600">Halo, <strong><?php echo e(Auth::user()->name); ?></strong></span>
                    <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="text-sm bg-red-50 hover:bg-red-100 text-red-600 px-3 py-1.5 rounded border border-red-200 transition">
                            <i class="fa fa-sign-out-alt mr-1"></i> Keluar
                        </button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        <?php if(session('success')): ?>
            <div class="max-w-6xl mx-auto mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded shadow-sm text-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/layouts/app.blade.php ENDPATH**/ ?>