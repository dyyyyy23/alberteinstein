<!DOCTYPE html>
<html>
<head>
    <title>Pesan Kontak Baru</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #f8f9fa; padding: 15px; text-align: center; }
        .content { padding: 20px; }
        .footer { margin-top: 20px; font-size: 0.9em; color: #6c757d; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Pesan Kontak Baru dari Website</h2>
        </div>
        
        <div class="content">
            <p><strong>Nama:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Subjek:</strong> {{ $data['subject'] }}</p>
            <p><strong>Pesan:</strong></p>
            <p>{{ $data['message'] }}</p>
        </div>
        
        <div class="footer">
            <p>Pesan ini dikirim melalui form kontak website Anda.</p>
        </div>
    </div>
</body>
</html>