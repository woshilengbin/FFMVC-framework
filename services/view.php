<?php

/**
 * Created by PhpStorm.
 * User: PeterLeng
 * Date: 2018/5/18
 * Time: 20:02
 */
class view
{

    const VIEW_BASE_PATH = '/app/view/';

    public $view;
    public $data;

    function __construct($view)
    {
        $this->view = $view;
    }

    public static function make($viewName = null)
    {
        if (!$viewName) {
            throw new InvalidArgumentException('视图名称蹦年为空');
        } else {
            $viewFilePath = self::getFilePath($viewName);
            if (is_file($viewFilePath)) {
                return new view($viewFilePath);
            } else {
                throw new UnexpectedValueException("试图文件不存在");
            }
        }
    }


    public function with($key, $value = null)
    {
        $this->data[$key] = $value;
        return $this;
    }


    private static function getFilePath($viewName)
    {
        $filePath = str_replace('.', '/', $viewName);
        return BASE_PATH.self::VIEW_BASE_PATH.$filePath.'.php';
    }


    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        if (starts_with($name, 'with')) {
            return $this->with(snake_case(substr($name, 4)), $arguments[0]);
        }
        throw new BadMethodCallException('方法【' . $name . '】不存在！');


    }


}