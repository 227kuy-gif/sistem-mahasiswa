<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; color: #333; }
        h2 { text-align: center; color: #444; }
        .footer { margin-top: 30px; text-align: right; font-size: 10px; color: #777; }
    </style>
</head>
<body>
    <h2>Laporan Data Mahasiswa</h2>
    <p>Tanggal Cetak: <?php echo e(\Carbon\Carbon::now()->format('d M Y H:i')); ?></p>
    
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($m['nim']); ?></td>
                    <td><?php echo e($m['nama']); ?></td>
                    <td><?php echo e($m['jenis_kelamin']); ?></td>
                    <td><?php echo e($m['angkatan']); ?></td>
                    <td><?php echo e($m['jurusan']); ?></td>
                    <td><?php echo e(number_format($m['ipk'], 2)); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="footer">
        Dicetak dari Sistem Mahasiswa
    </div>
</body>
</html>
<?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/mahasiswa/pdf.blade.php ENDPATH**/ ?>