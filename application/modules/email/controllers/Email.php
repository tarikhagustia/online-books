<?php
class Email extends MY_Controller
{
    public function __constuct()
    {
      parent::__constuct();
    }
    public function send($email, $subject , $body)
    {
      $this->load->library('email');
      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'mail.hidayatkampai.com';
      $config['smtp_user'] = 'noreply@hidayatkampai.com';
      $config['smtp_pass'] = 'ecIadXuzI#aJ';
      $config['smtp_port'] = 587;
      $config['mailtype'] = "html";
      $config['smtp_crypto'] = 'tls';
      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = TRUE;

      $this->email->initialize($config);
      $this->email->from($config['smtp_user'], $this->config->item('clinet_name'));
      $this->email->to($email);
      $this->email->subject($subject);
      $this->email->message($body);

      if(!$this->email->send())
      {
        return false;
      }
      return true;
    }
}
