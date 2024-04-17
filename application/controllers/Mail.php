<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function send_email_function()
    {
        $prospectName = $this->input->post('prospectName');
        $insurerTypeName = $this->input->post('insurerTypeName');
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
        $prospect_email = $this->input->post('email');
        $tableData = $this->input->post('tableData'); // Retrieve table data from POST request

        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();

        //SMTP configuration for live server
        $mail->isSMTP();
        $mail->Host = 'bom1plzcpnl493960.prod.bom1.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@fedeltainsurance.com';
        $mail->Password = 'o?i[yOr;!,am';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('no-reply@fedeltainsurance.com', 'Fedelta Insurance');
        $mail->addReplyTo('no-reply@fedeltainsurance.com', 'Fedelta Insurance');

        /* Add a recipient */
        $mail->addAddress($prospect_email);

        // Add CC recipients if any
        $cc_email = $this->input->post('cc_email');
        if (!empty($cc_email)) {
            $mail->addCC($cc_email);
        }

        // Add BCC recipients if any
        $bcc_email = $this->input->post('bcc_email');
        if (!empty($bcc_email)) {
            $mail->addBCC($bcc_email);
        }

        // Email subject
        $mail->Subject = 'Quotation Details';

        // Construct email body with HTML
        $mailContent = '<!doctype html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quotation Email</title>
        <style media="all" type="text/css">
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f5f6;
                -webkit-font-smoothing: antialiased;
                font-size: 16px;
                line-height: 1.3;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #dddddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            /* Header style */
            .header {
                background-color: #2065D0;
                color: white;
                padding: 20px;
                text-align: center;
            }

            /* Footer style */
            .footer {
                background-color: #2065D0;
                color: white;
                padding: 10px;
                text-align: center;
            }

            /* Responsive styles */
            @media screen and (max-width: 600px) {
                .container {
                    width: 100% !important;
                    padding: 0 10px;
                }

                .header,
                .footer {
                    padding: 10px;
                }
            }
        </style>

    </head>

    <body style="font-family: Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-size: 16px; line-height: 1.3; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f4f5f6; margin: 0; padding: 0;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f4f5f6; width: 100%;" width="100%" bgcolor="#f4f5f6">
            <tr>
                <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top;" valign="top">&nbsp;</td>
                <td class="container" style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; max-width: 600px; padding: 0; padding-top: 24px; width: 600px; margin: 0 auto;" width="600" valign="top">
                    <div class="content" style="box-sizing: border-box; display: block; margin: 10px; max-width: 600px; padding: 0;">
                        <!-- Header -->
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="header" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; margin-bottom: 24px;">
                            <tr>
                                <td style="font-family: Helvetica, sans-serif; font-size: 24px; vertical-align: top; padding-bottom: 16px;" valign="top">
                                    Fedelta Insurance Marketing and Service Private Limited
                                </td>
                            </tr>
                        </table>
                        <!-- Subheading -->
                        <p style="font-family: Helvetica, sans-serif; font-size: 20px; font-weight: bold; margin: 0; margin-bottom: 16px;">Hi ' . $prospectName . ',</p>
                        <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 24px;">Please find the attached ' . $insurerTypeName . ' Quotation From Harish R:</p>
                        <!-- Table with responsive design -->
                        <div style="overflow-x:auto;">
                            <table>
                                <tbody>' . $tableData . '</tbody>
                            </table>
                        </div><br>
                        <!-- Footer with contact information -->
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="header" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; margin-bottom: 24px;">
                            <tr>
                                <td style="font-family: Helvetica, sans-serif; font-size: 24px; vertical-align: top; padding-bottom: 16px;" valign="top">
                                    <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 24px;">Thank you,<br>Harish R<br>9884170160<br><a href="mailto:harish@fedeltainsurance.com" style="text-decoration: underline; color: #ffffff;">harish@fedeltainsurance.com</a><br>Fedelta Insurance Marketing and Service Private Limited</p>
                                </td>
                            </tr>
                        </table>
                       
                    </div>
                </td>
                <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top;" valign="top">&nbsp;</td>
            </tr>
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