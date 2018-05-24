<?php
/**
 * Created by PhpStorm.
 * User: PeterLeng
 * Date: 2018/5/18
 * Time: 18:37
 */
class BaseController{

    protected $view;
    protected $mail;
    public function __construct()
    {
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $view = $this->view;
        if($view instanceof view){
            extract($view->data);
            require $view->view;
        }

        $mail = $this->mail;
        if($mail instanceof mail){
            $mailer = new Nette\Mail\SmtpMailer($mail->config);
            $mailer->send($mail);
        }
    }
}