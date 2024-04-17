<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mail extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function send_email_function()
    {
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');

        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();

        /* SMTP configuration  for live server
        $mail->isSMTP();
        $mail->Host = 'bom1plzcpnl493960.prod.bom1.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@fedeltainsurance.com';
        $mail->Password = 'o?i[yOr;!,am';
        $mail->SMTPSecure = 'ssl'; // Use 'tls' or 'ssl' depending on your server configuration
        $mail->Port = 465; */ // TCP port to connect to

         // SMTP configuration for local server 
         $mail->isSMTP();
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'rajkumaraguru@gmail.com';
         $mail->Password = 'rflk xhum vugw iasr'; // Your Gmail password here
         $mail->SMTPSecure = 'tls';
         $mail->Port = 587;

        $mail->setFrom('no-reply@fedeltainsurance.com', 'Fedelta Insurance');
        $mail->addReplyTo('no-reply@fedeltainsurance.com', 'Mail testing');

        /* Add a recipient */
        $mail->addAddress('kumaragururaj2k@gmail.com');

        // Email subject
        $mail->Subject = 'Quotation Details';

        // Construct email body with HTML
        $mailContent = '
   <!DOCTYPE html>
   <html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quotation Details</title>
   <style>
       /* Basic styling */
       body { font-family: Arial, sans-serif; }
       table { width: 100%; border-collapse: collapse; }
       th, td { border: 1px solid #dddddd; padding: 8px; text-align: left; }
       th { background-color: #f2f2f2; }
   </style>
   </head>
   <body>
       <h2>Quotation Details</h2>
       <table>
           
           <tbody>' . $this->input->post('tableData') . '</tbody>
       </table>
   </body>
   </html>';

        // Set email body format to HTML
        $mail->IsHTML(true);

        // Assign email body content
        $mail->Body = $mailContent;

        /* Send email */
        if (!$mail->send()) {
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            // Log the error somewhere for debugging
        } else {
            echo 'Mail has been sent';
        }
    }

}