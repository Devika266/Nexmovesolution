<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function send_mail()
    {
        $name          = $this->input->post('name');
        $company_name  = $this->input->post('company_name');
        $phone         = $this->input->post('phone');
        $email         = $this->input->post('email');
        $services      = $this->input->post('services');
        $products      = $this->input->post('products');
        $message       = $this->input->post('message');

        $services = !empty($services) ? implode(", ", $services) : "Not Selected";
        $products = !empty($products) ? implode(", ", $products) : "Not Selected";

        $body = "
        <h2>New Website Enquiry</h2>

        <table cellpadding='8' cellspacing='0' border='1' width='100%'>
            <tr>
                <td><strong>Name</strong></td>
                <td>{$name}</td>
            </tr>

            <tr>
                <td><strong>Company Name</strong></td>
                <td>{$company_name}</td>
            </tr>

            <tr>
                <td><strong>Phone</strong></td>
                <td>{$phone}</td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td>{$email}</td>
            </tr>

            <tr>
                <td><strong>Services</strong></td>
                <td>{$services}</td>
            </tr>

            <tr>
                <td><strong>Products</strong></td>
                <td>{$products}</td>
            </tr>

            <tr>
                <td><strong>Message</strong></td>
                <td>{$message}</td>
            </tr>
        </table>
        ";

        $this->load->library('email');

        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'smtp.hostinger.com';   // Change if using another provider
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'devika@nexmoves.in';
        $config['smtp_pass'] = 'Nex-devika@15';
        $config['smtp_crypto'] = 'ssl';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        $this->email->from('devika@nexmoves.in', 'NexMove Solutions');
        $this->email->to('sales@nexmoves.in');

        // Send copy to customer
        $this->email->cc($email);

        $this->email->subject('New Website Enquiry');
        $this->email->message($body);
        

       if ($this->email->send()) {

    redirect('welcome/thank_you');

} else {

    echo $this->email->print_debugger();
    exit;

}
    }

}