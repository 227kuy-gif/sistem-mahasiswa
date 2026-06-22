

<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-xl shadow-md border mt-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">
        <?php echo e($student ? '✏️ Edit Data Mahasiswa' : '✨ Tambah Mahasiswa Baru'); ?>

    </h2>
    
    <?php if($errors->has('error')): ?>
        <div class="mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded text-sm"><?php echo e($errors->first('error')); ?></div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e($student ? route('mahasiswa.update', $student['slug']) : route('mahasiswa.store')); ?>" class="space-y-4">
        <?php echo csrf_field(); ?>
        <?php if($student): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" name="nama" value="<?php echo e(old('nama', $student['nama'] ?? '')); ?>" class="w-full px-3 py-2 border rounded focus:ring focus:ring-indigo-200 text-sm" required />
            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="w-full px-3 py-2 border rounded bg-white text-sm">
                <option value="Laki-laki" <?php echo e(old('jenis_kelamin', $student['jenis_kelamin'] ?? '') === 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo e(old('jenis_kelamin', $student['jenis_kelamin'] ?? '') === 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
            </select>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Angkatan</label>
                <input type="number" name="angkatan" value="<?php echo e(old('angkatan', $student['angkatan'] ?? '')); ?>" class="w-full px-3 py-2 border rounded text-sm" required />
                <?php $__errorArgs = ['angkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">NIM</label>
                <input type="text" name="nim" value="<?php echo e(old('nim', $student['nim'] ?? '')); ?>" class="w-full px-3 py-2 border rounded font-mono text-sm" required />
                <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
            <input type="text" name="jurusan" value="<?php echo e(old('jurusan', $student['jurusan'] ?? '')); ?>" class="w-full px-3 py-2 border rounded text-sm" required />
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">IPK (Maks 4.00)</label>
            <input type="number" step="0.01" name="ipk" value="<?php echo e(old('ipk', $student['ipk'] ?? '')); ?>" class="w-full px-3 py-2 border rounded text-sm" required />
            <?php $__errorArgs = ['ipk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="flex justify-between items-center pt-4">
            <a href="<?php echo e(route('mahasiswa.index')); ?>" class="text-gray-600 hover:text-gray-800 text-sm flex items-center gap-1">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            <button type="submit" class="bg-indigo-600 text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700 transition cursor-pointer">
                <i class="fa fa-save mr-1"></i> Simpan Data
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH Z:\WengDev\sistem-mahasiswa\resources\views/mahasiswa/form.blade.php ENDPATH**/ ?>