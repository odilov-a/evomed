<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") 
  {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $botToken = '6240498551:AAEjBf0as1wnND22hKGwii5udTM7b_fDhfQ';
    $chatID = '-1001936206921';
    $text = "Имя и фамилия :  $name\nНомер телефона :  $phone\nСообщение :  $message";
    $telegramURL = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($text);
    $response = file_get_contents($telegramURL);
  }
?>
<?php
  function showAlert($message) {
    echo "<script> alert('$message'); window.location.href = 'contact.html'; </script>";
  }
  showAlert("Ваше сообщение было отправлено!");
?>
