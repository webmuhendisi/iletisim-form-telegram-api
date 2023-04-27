<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$text = "Ad: $name\nE-posta: $email\nTelefon: $phone\nMesaj: $message";

// Telegram API ayarları
$chat_id = "your_chat_id"; // Telegram hesap ID'si
$token = "your_bot_token"; // Telegram bot API anahtarı
$url = "https://api.telegram.org/bot" . $token . "/sendMessage";
$post_fields = array(
    'chat_id' => $chat_id,
    'text' => $text
);

// Telegram API'yi kullanarak mesaj gönderme
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// Başarılı gönderim mesajı
echo "Mesajınız gönderildi!";
?>
