<?php
/**
 * Created by PhpStorm.
 * User: PeterLeng
 * Date: 2018/5/18
 * Time: 18:03
 */

use Illuminate\Database\Capsule\Manager as Capsule;

define('PUBLIC_PAHT',__DIR__);
require PUBLIC_PAHT.'/../bootstrap.php';

//路由配置
require '../config/routes.php';