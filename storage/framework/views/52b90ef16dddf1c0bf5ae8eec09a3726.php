<!DOCTYPE html>
<html>
<head>
    <title>Perubahan Data Mahasiswa</title>
</head>
<body style="font-family: sans-serif; color: #333;">
    <h2 style="color: #4f46e5;">Halo Admin,</h2>
    <p>Informasi mahasiswa berikut ini telah berhasil diperbarui:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>NIM:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo e($studentData['nim']); ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>Nama:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo e($studentData['nama']); ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>Jurusan:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo e($studentData['jurusan']); ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><strong>IPK:</strong></td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;"><?php echo e(number_format($studentData['ipk'], 2)); ?></td>
        </tr>
    </table>

    <p style="margin-top: 20px; font-size: 12px; color: #666;">Sistem Otomatis Mahasiswa v10</p>
</body>
</html><?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/emails/mahasiswa_updated.blade.php ENDPATH**/ ?>