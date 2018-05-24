<?php
/**
 * Created by PhpStorm.
 * User: PeterLeng
 * Date: 2018/5/18
 * Time: 18:49
 */
class Article extends Illuminate\Database\Eloquent\Model {

//    public $timestamps = false;

//    public static function first(){
//        $mysqli = new mysqli("localhost", "root", "", "test");
//        $sql = "SELECT * FROM articles";
//        $result = $mysqli->query($sql);
//        $row = $result->fetch_assoc(); // 从结果集中取得一行作为关联数组
//       if($row){
//           return $row;
//       }
//        /* free result set */
//        $result->free();
//
//
////        $connection = mysqli_connect('localhost','root','') or die('could not connect'.mysqli_error());
////
////        mysqli_set_charset('UTF8',$connection);
////
////        mysqli_select_db('test');
////
////        $result = mysqli_query('select * from articles');
////
////        if($row = mysqli_fetch_array($result)){
////            echo '<h1>'.$row['article'].'</h1>';
////        }
//
//        $mysqli->close();
//    }
}