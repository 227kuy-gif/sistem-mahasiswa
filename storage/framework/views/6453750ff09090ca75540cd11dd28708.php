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
    <div class="container mx-auto p-6">
        <?php if(session('success')): ?>
            <div class="max-w-6xl mx-auto mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded shadow-sm text-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH Z:\WengDev\sistem-mahasiswa\resources\views/layouts/app.blade.php ENDPATH**/ ?>