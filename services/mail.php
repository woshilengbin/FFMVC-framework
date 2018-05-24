<?php
/**
 * Created by PhpStorm.
 * User: PeterLeng
 * Date: 2018/5/18
 * Time: 20:27
 */

use Nette\Mail\Message;


class mail extends Message
{
    public $config;
    protected $from;
    protected $to;
    protected $title;
    protected $body;

    function __construct($to)
    {
        $this->config = require BASE_PATH . '/config/mail.php';
        $this->setFrom($this->config['username']);
        if (is_array($to)) {
            foreach ($to as $email) {
                $this->addTo($email);
            }
        } else {
            $this->addTo($to);
        }
    }


    public function from($from = null)
    {
        if (!$from) {
            throw new InvalidArgumentException("邮件地址不能为空");
        }
        $this->setFrom($from);
        return $this;
    }


    public static function to($to = null)
    {
        if (!$to) {
            throw new InvalidArgumentException("接受地址不能为空");
        }
        return new mail($to);
    }


    public function title($title = null)
    {
        if (!$title) {
            throw new InvalidArgumentException("标题蹦年为空");
        }
        $this->setSubject($title);
        return $this;
    }


    public function content($content = null)
    {
        if (!$content) {
            throw new InvalidArgumentException("内容布恩那个为空");
        }
        $this->setHtmlBody($content);
        return $this;
    }


}