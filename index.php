<!DOCTYPE html>
<html>
<head>
    <title>İletişim Formu</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>İletişim Formu</h1>
        <form method="POST" action="send.php">
            <div class="form-group">
                <label for="name">Ad Soyad</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Adınız Soyadınız" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta Adresi</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-posta Adresiniz" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefon Numarası</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefon Numaranız" required>
            </div>
            <div class="form-group">
                <label for="message">Mesajınız</label>
                <textarea class="form-control" id="message" name="message" placeholder="Mesajınız" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
