
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-4-21
 * Time: 下午4:51
 */

//$name=array([  "Name"=> "菜鸟教程",
//            "Url"=> "www.runoob.com",
//            "Country"=>  "CN"],
//            [
//                "Name"=> "Google",
//            "Url"=> "www.google.com",
//            "Country"=> "USA"],
//            ["Name"=> "Facebook",
//            "Url"=> "www.facebook.com",
//            "Country"=>"USA"],
//            [ "Name"=> "微博",
//            "Url"=> "www.weibo.com",
//            "Country"=> "CN"]
//            );


//$name=array(  "Name"=> "菜鸟教程",
//            "Url"=> "www.runoob.com",
//            "Country"=>  "CN");
//
//$obj=array(
//            ["Name"=> "菜鸟教程",
//             "Url"=> "www.runoob.com",
//             "Country"=>  "CN"],
//            [ "Name"=> "Google",
//            "Url"=> "www.google.com",
//            "Country"=> "USA"],
//             [ "Name"=> "Facebook",
//            "Url"=> "www.facebook.com",
//            "Country"=> "USA"],
//            [ "Name"=> "微博",
//            "Url"=> "www.weibo.com",
//            "Country"=> "CN"]
//            )
//           ;




$name=array("sites"=>array(
            array( "Name"=> "菜鸟教程",
            "Url"=> "www.runoob.com",
            "Country"=> "CN"),
            array( "Name"=> "Google",
            "Url"=> "www.google.com",
            "Country"=> "USA"),
            array( "Name"=> "Facebook",
            "Url"=> "www.facebook.com",
            "Country"=> "USA"),
            array( "Name"=> "微博",
            "Url"=> "www.weibo.com",
            "Country"=> "CN")
        )
);





//"headers":{"Accept":"application/json, text/plain, */*"}}
print_r(json_encode($name)) ;

//echo json_encode($name);
