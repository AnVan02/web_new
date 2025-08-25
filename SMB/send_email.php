<?php
// Bật hiển thị lỗi để debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Tên file lưu danh sách đăng ký
$emailFile = 'email.txt';

// Danh sách email nhận thông báo
// $email_list = ['tvdell789@gmail.com']


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';

    // Kiểm tra thông tin nhập vào
    if (empty($name) || empty($email) || empty($phone)) {
        echo "❌ Vui lòng nhập đầy đủ thông tin!";
        exit;
    }
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Email không hợp lệ!";
        exit;
    }

    if (emailExists($email, $emailFile)) {
        echo "❌ Email này đã được đăng ký trước đó!";
    } else {
        if (sendEmailToRecipients($name, $email, $phone, $emailFile, $email_list)) {
            saveEmail($name, $email, $phone, $emailFile);
            echo "✅ Đăng ký thành công! Thông tin của bạn đã được gửi.";
        } else {
            echo "❌ Gửi email thất bại!";
        }
    }
}

// ========================= HÀM HỖ TRỢ =========================

// Kiểm tra email đã tồn tại chưa
function emailExists($email, $emailFile) {
    if (!file_exists($emailFile)) return false;
    $emails = file($emailFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($emails as $entry) {
        list($savedEmail) = explode("|", trim($entry));
        if ($savedEmail === $email) return true;
    }
    return false;
}

// Lưu thông tin vào file
function saveEmail($email, $name, $phone, $website, $likechat, $face, $zalo ) {
    $entry = "$name | $name | $phone | $website | $likechat, $face, $zalo" . PHP_EOL;
    file_put_contents($emailFile, $entry, FILE_APPEND | LOCK_EX);
}

// Gửi email đến tất cả email trong danh sách
function sendEmailToRecipients($email, $name, $phong, $website, $likechat, $face, $zalo) {
    foreach ($email_list as $receiverEmail) {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'tvdell789@gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'tvdell789@gmail.com';
            $mail->Password = '';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';

            $mail->setFrom('tvdell789@gmail.com', 'ROSA COMPUTER AI');
            $mail->addAddress($receiverEmail);

            $mail->isHTML(true);
            $mail->Subject = "📩 Đăng ky triên khai chatbot ";
            $mail->Body = "
               <body style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;'>
                   <div style='max-width: 70%; margin: auto; background: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);'>
                        <!-- Icons ở góc trên cùng bên phải -->
                    <div style='display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;'>
                        <!-- Logo bên trái -->
                        <img src='https://rosacomputer.vn/assets/images/rosa.png' alt='ROSA Computer AI' style='max-width: 150px; margin-bottom: 10px; display: block;'>
        
                        <!-- Các icon mạng xã hội bên phải -->
                        <div style='text-align: right;'>
                            <a href='https://rosacomputer.vn/' style='padding: 5px; text-decoration: none; display: inline-block;'>
                                <img src='https://img.icons8.com/material-rounded/24/ff0000/domain.png' alt='Website' style='height: 24px; vertical-align: middle;'>
                            </a>
                            <a href='https://www.facebook.com/people/ROSA-AI-Computer/61559427752479/' style='padding: 5px; text-decoration: none; display: inline-block;'>
                                <img src='https://img.icons8.com/material-rounded/24/1877f2/facebook-f.png' alt='Facebook' style='height: 24px; vertical-align: middle;'>
                            </a>
                            <a href='https://www.linkedin.com/in/rosa-ai-computer-20980b352/' style='padding: 5px; text-decoration: none; display: inline-block;'>
                                <img src='https://img.icons8.com/material-rounded/24/0a66c2/linkedin--v1.png' alt='LinkedIn' style='height: 24px; vertical-align: middle;'>
                            </a>
                        </div>
                    </div>
                 <hr style='border: 1px solid rgb(187, 187, 238); margin: 10px 0;'>
                <div style='max-width: 70%; margin: auto; background: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);'>
                    <div style='text-align: center;'>
                        <h2 style='color: #ff1d1d;'>📢 THÔNG TIN EMAIL ĐĂNG KÝ MỚI</h2>
                        <p style='color: #4CAF50; font-size: 16px;'><strong>Mail được đăng ký nhận thông tin mới nhất tại web https://rosacomputer.vn</strong></p>
                    </div>
                    <table style='width: 100%; font-size: 16px; border-collapse: collapse;'>
                        <tr><td><strong>📧 Email:</strong></td><td style='color:#ff4136;'>$email</td></tr>
                        <tr><td><strong>👤 Tên:</strong></td><td style='color: #333;'>$name</td></tr>
                        <tr><td><strong>📞 Số điện thoại:</strong></td><td style='color: #333;'>$phone</td></tr>
                    </table>
                    <table style='width: 100%; font-siza:16px; border-collapase: collapse;'>
                        <tr><td><strong>Tích hợp vao website có sẵn</strong></td><td style='color: #FF4136;'>$website</td></tr>
                        <tr><td><strong>Tăng số lượng câu tra lời </strong></td><td style='color: #FF4136;'>$soluong</td></tr>
                        <tr><td><strong>tích hợp like chat </strong></td><td style='color: #FF4136;'>$likechat</td></tr>
                        <tr><td><strong>Tích hợp chatbot lêm facbook </strong></td><td style='color: #FF4136'>$face</td></tr>
                        <tr><td><strong>Tích hợp chatbot lên zalo OA </strong></td><td style='color: #FF4136'>$zalo</td></tr>

                     <p style='text-align: center; font-size: 15px; color:rgb(6, 63, 150);'>Thông báo thông tin mới nhất đến với khách hàng! 🚀</p>
               
                <p style='text-align: center; font-size: 15px; color: #ff1d1d;'>Đội ngũ hỗ trợ - ROSA COMPUTER<br>Email: support@rosacomputer.ai | Hotline: (028) 39260996 - (028) 39293765</p>
            </div>
        </body>";
             
            // Đính kèm file danh sách nếu tồn tại
            if (file_exists($emailFile)) {
                $mail->addAttachment($emailFile);
            }

            $mail->send();
        } catch (Exception $e) {
            continue; // Bỏ qua nếu có lỗi, tiếp tục gửi email tiếp theo
        }
    }
    return true;
}
?>
