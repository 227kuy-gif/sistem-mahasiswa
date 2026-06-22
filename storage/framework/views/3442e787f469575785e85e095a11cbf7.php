

<?php $__env->startSection('content'); ?>
<div class="max-w-6xl mx-auto p-6 bg-white rounded-xl shadow-md border">
    
    <?php if($errors->any()): ?>
        <div class="mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded text-sm">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded text-sm">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(isset($executionTime) || session('time_execution')): ?>
        <div class="mb-4 bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-3 rounded text-sm flex items-center justify-between">
            <span><i class="fa fa-clock-o mr-2"></i> Waktu Eksekusi: <strong><?php echo e(session('time_execution') ?? $executionTime); ?> ms</strong></span>
        </div>
    <?php endif; ?>

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Daftar Mahasiswa</h1>
            <p class="text-sm text-gray-500">Tipe Pencarian Aktif: <strong class="text-indigo-600"><?php echo e($searchType); ?></strong></p>
        </div>
        
        <div class="flex flex-wrap gap-2">
            <a href="<?php echo e(route('mahasiswa.create')); ?>" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700 transition">
                <i class="fa fa-plus mr-1"></i> Tambah Mahasiswa
            </a>
            <a href="<?php echo e(route('mahasiswa.export')); ?>" class="bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-emerald-700 transition">
                <i class="fa fa-download mr-1"></i> Ekspor JSON
            </a>
            <a href="<?php echo e(route('mahasiswa.email')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition">
                <i class="fa fa-envelope mr-1"></i> Kirim ke Email
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
        
        <form method="GET" action="<?php echo e(route('mahasiswa.index')); ?>" class="lg:col-span-2 grid grid-cols-1 md:grid-cols-4 gap-2 bg-gray-50 p-4 rounded-lg border">
            <input type="text" name="search" value="<?php echo e($filters['search'] ?? ''); ?>" placeholder="Cari nama atau NIM..." class="px-3 py-2 border rounded bg-white text-sm">
            <select name="algo" class="px-3 py-2 border rounded bg-white text-sm">
                <option value="linear" <?php echo e(($filters['algo'] ?? '') === 'linear' ? 'selected' : ''); ?>>Linear Search</option>
                <option value="binary" <?php echo e(($filters['algo'] ?? '') === 'binary' ? 'selected' : ''); ?>>Binary Search (Sorted)</option>
            </select>
            <select name="sort" class="px-3 py-2 border rounded bg-white text-sm">
                <option value="">Tanpa Urutan</option>
                <option value="nama" <?php echo e(($filters['sort'] ?? '') === 'nama' ? 'selected' : ''); ?>>Urut Nama (A-Z)</option>
                <option value="ipk" <?php echo e(($filters['sort'] ?? '') === 'ipk' ? 'selected' : ''); ?>>Urut IPK (Tertinggi)</option>
            </select>
            <button type="submit" class="bg-gray-800 text-white rounded text-sm font-medium hover:bg-gray-900 transition cursor-pointer py-2">Filter</button>
        </form>

        <form method="POST" action="<?php echo e(route('mahasiswa.import')); ?>" enctype="multipart/form-data" class="bg-gray-50 p-4 rounded-lg border flex flex-col justify-between gap-2">
            <?php echo csrf_field(); ?>
            <label class="block text-xs font-semibold text-gray-500 uppercase">Impor Data Cadangan (.json)</label>
            <div class="flex gap-2 items-center">
                <input type="file" name="json_file" accept=".json" class="text-xs w-full block" required>
                <button type="submit" class="bg-blue-600 text-white px-3 py-1.5 rounded text-xs font-medium hover:bg-blue-700 transition cursor-pointer">Unggah</button>
            </div>
        </form>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 border-b border-gray-200 text-gray-700 text-sm font-semibold">
                    <th class="p-3">NIM</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Jurusan</th>
                    <th class="p-3">IPK</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-600">
                <?php if(count($students) > 0): ?>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3 font-mono"><?php echo e($mahasiswa['nim']); ?></td>
                            <td class="p-3 font-medium text-gray-900"><?php echo e($mahasiswa['nama']); ?></td>
                            <td class="p-3"><?php echo e($mahasiswa['jurusan']); ?></td>
                            <td class="p-3 font-bold text-emerald-600"><?php echo e(number_format($mahasiswa['ipk'], 2)); ?></td>
                            <td class="p-3 flex justify-center gap-4">
                                <a href="<?php echo e(route('mahasiswa.show', $mahasiswa['slug'])); ?>" class="text-blue-600 hover:text-blue-800"><i class="fa fa-eye"></i></a>
                                <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa['slug'])); ?>" class="text-amber-600 hover:text-amber-800"><i class="fa fa-edit"></i></a>
                                <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa['slug'])); ?>" method="POST" onsubmit="return confirm('Hapus data ini?')" class="inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-600 hover:text-red-800 cursor-pointer"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colSpan="5" class="p-8 text-center text-gray-400">Tidak ada data mahasiswa ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>