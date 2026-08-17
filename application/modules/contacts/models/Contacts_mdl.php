<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacts_mdl extends CI_Model
{
    private $config;

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->config = array(
            'protocol'    => 'smtp',
            'smtp_host'   => 'server.groveus.org',
            'smtp_port'   => 587,
            'smtp_crypto' => 'tls',
            'smtp_user'   => 'info@vrlpackersmovers.co',
            'smtp_pass'   => 'fV(G65LA2vdW{)OP',
            'smtp_timeout'=> 30,
            'mailtype'    => 'html',
            'charset'     => 'utf-8',
            'newline'     => "\r\n",
            'crlf'        => "\r\n"
        );
    }

    public function bookings()
    {
        $this->load->library('email');
        $this->email->initialize($this->config);
        $this->email->clear(TRUE);

        $name  = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $mfrom = $this->input->post('mfrom');
        $mto   = $this->input->post('mto');
        $msg   = $this->input->post('message');

        // Insert booking data into the database
        $this->db->insert('bookings', array(
            "name"  => $name,
            "email" => $email,
            "phone" => $phone,
            "mfrom" => $mfrom,
            "mto"   => $mto,
            "msg"   => $msg
        ));

        // Admin notification email
        $msgd = "Services Needed";
        $adminMessage = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>$name</b><br><br>From: <b>$mfrom</b><br><br>To: <b>$mto</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b><br><br>Client Msg: <b>$msg</b></div>";

        $this->email->from('info@vrlpackersmovers.co', 'VRL Packers Movers');
        $this->email->to('vrlpackersandmovers9925@gmail.com');
        $this->email->subject('New Booking Enquiry Received');
        $this->email->message($adminMessage);

        if (!$this->email->send()) {
            log_message('error', $this->email->print_debugger());
            return false;
        }

        return true;
    }

    public function contact()
    {
        $this->load->library('email');
        $this->email->initialize($this->config);
        $this->email->clear(TRUE);

        $name  = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $qry   = $this->input->post('message');

        $this->db->insert('contacts', array("name" => $name, "phone" => $phone, "message" => $qry, "email" => $email));

        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$qry</q></b><br><br>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b></div>";

        $this->email->from('info@vrlpackersmovers.co', 'VRL Packers Movers');
        $this->email->to('vrlpackersandmovers9925@gmail.com');
        $this->email->subject('New Contacts Enquiry Received');
        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', $this->email->print_debugger());
            return false;
        }

        return true;
    }
}

