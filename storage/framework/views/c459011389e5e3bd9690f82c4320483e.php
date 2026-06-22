<!DOCTYPE html>
<html>
<head>
    <title>Kode OTP Anda</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; color: #333;">Kode OTP Login</h2>
        <p>Gunakan kode OTP berikut untuk masuk ke Sistem Mahasiswa:</p>
        <div style="text-align: center; margin: 20px 0;">
            <span style="display: inline-block; padding: 10px 20px; font-size: 24px; font-weight: bold; background: #4f46e5; color: #fff; letter-spacing: 5px; border-radius: 5px;"><?php echo e($otpCode); ?></span>
        </div>
        <p>Kode ini hanya berlaku selama 5 menit. Jangan berikan kode ini kepada siapa pun.</p>
        <p>Jika Anda tidak meminta kode ini, abaikan email ini.</p>
        <br>
        <p>Terima kasih,<br>Sistem Mahasiswa</p>
    </div>
</body>
</html>
<?php /**PATH E:\Kuliah\semester 3\algoritma\project akhir\sistem-mahasiswa\resources\views/emails/otp.blade.php ENDPATH**/ ?>