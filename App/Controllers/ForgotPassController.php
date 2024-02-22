<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ForgotPassController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    function ForgotPassController()
    {
        $this->viewPass();
    }

    public function viewPass()
    {
        $this->load->render('client/forgot_password');
    }

    public function forgotPassword()
    {
        // Xử lý khi form gửi đi
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Kiểm tra xem email đã được gửi chưa
            if (isset($_POST['email'])) {
                $email = $_POST['email'];

                // Kiểm tra xem email có tồn tại trong CSDL không
                $userModel = new UserModel(); // Giả sử bạn có một model để làm việc với người dùng

                // Kiểm tra xem email có được nhập vào không
                if (empty($email)) {
                    $_SESSION['forgot_error'] = "Vui lòng nhập địa chỉ email.";
                } else {
                    $user = $userModel->checkForgot($email);
                    if ($user) {
                        // Tạo token reset mật khẩu
                        $token = random_int(100000, 999999); // Tạo số ngẫu nhiên từ 100000 đến 999999 (bao gồm cả hai số này)
                        // Gửi email chứa link reset mật khẩu
                        $_SESSION['reset_token'] = $token;
                        $_SESSION['reset_email'] = $email;
                        if ($this->sendResetEmail($email, $token)) {
                            // Lưu token vào CSDL hoặc session
                            header('Location: /?url=CodePassController/loadViewCode');
                            exit();
                        } else {
                            $_SESSION['forgot_error'] = "Gửi Email lỗi!";
                        }
                    } else {
                        $_SESSION['forgot_error'] = "Email không tồn tại!";
                    }
                }
            }
        }

    }

    function sendResetEmail($email, $token)
    {
        // $dotenv = Dotenv::createImmutable(__DIR__);
        // $dotenv->load();
        $mail = new PHPMailer(true);
        try {
            $_SESSION['reset_token'] = $token;
            $_SESSION['email'] = $email;
            // Cấu hình SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // SMTP server
            $mail->CharSet = 'utf-8';
            $mail->SMTPAuth = true;
            $mail->Username = 'thaitoan230204@gmail.com'; // SMTP username
            $mail->Password = 'cxiasxrstxykwwni'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = '465';

            // Thiết lập các thông tin email
            $mail->setFrom('thaitoan230204@gmail.com', 'Bảo trì thiết bị');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Đặt lại mật khẩu';
            // $mail->Body    = 'Mã xác nhận của bạn là: ' . $token;
            //$token = "mã của bạn ở đây"; // Giả sử bạn đã có mã token từ hàm random_int hoặc bất kỳ nguồn nào khác
// Tạo đường link kèm mã token
            // $resetLink = 'http://localhost:8000/ResetPasswordController?token=' . $token;
            $resetLink = $token;


            // Thiết lập nội dung email với đường link
            $mail->Body = 'Mã code để nhập lại mật khẩu:' . $resetLink;

            // Gửi email
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}