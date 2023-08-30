<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($to, $body, $subject)
{
    $CI =& get_instance();
    $CI->load->library('email'); // Load email library

    try {
        require FCPATH.'vendor/autoload.php'; // Load Composer's autoloader

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'alul.akhri@gmail.com';
        $mail->Password   = 'ysfnvwpdghqtkzzw';
        $mail->Port       = 587;

        $mail->setFrom('alul.akhri@gmail.com', 'SIMON PPS');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        if ($mail->send()) {
            return true;
        } else {
            return false; // Output error information for debugging
        }
    } catch (Exception $e) {
        return false;
    }
}
