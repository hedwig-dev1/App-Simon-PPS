<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email'); // Load email library
    }

    public function index()
    {
        try {
            require FCPATH.'vendor/autoload.php'; // Load Composer's autoloader

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'alul.akhri@gmail.com';
            $mail->Password   = 'ysfnvwpdghqtkzzw';
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Change this to ENCRYPTION_SMTPS if needed
            $mail->Port       = 587;

            $mail->setFrom('admin@google.com', 'Pengirim Email');
            $mail->addAddress('shfdell@gmail.com', 'TESTING');

            $mail->isHTML(true);
            $mail->Subject = 'Notifikasi ! Status Permohonan [Sudah Terkirim]';
            $mail->Body    = '<p>Permohonan Anda telah dikirimkan ke Bagian PPS. Harap melakukan pantauan ke aplikasi untuk melihat aktivitas</p>';

            if ($mail->send()) {
                echo "Email berhasil dikirim.";
            } else {
                echo "Gagal mengirim email.";
                echo $mail->ErrorInfo; // Output error information for debugging
            }
        } catch (Exception $e) {
            echo "Gagal mengirim email. Pesan kesalahan: {$mail->ErrorInfo}";
        }
    }
}
