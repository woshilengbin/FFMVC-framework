<?php
/**
 * Created by PhpStorm.
 * User: PeterLeng
 * Date: 2018/5/18
 * Time: 18:02
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('', 'HomeController@home');
Macaw::get('index.php/all', 'HomeController@articleAll');
Macaw::get('index.php/save', 'HomeController@articleSave');
Macaw::get('index.php/update', 'HomeController@articleUpdate');
Macaw::get('index.php/delete', 'HomeController@articleDelete');

Macaw::get('fuck', function() {

    echo "成功！";

});

Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};

Macaw::dispatch();