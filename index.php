<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-12-02
 * Time: 10:27
 */

$arr = array(array('mode'=>'404 47'),array('mode'=>'200 47'),array('mode'=>'404 47'));
$i = 0;
$x = 0;
$y = 0;
while($i<count($arr)){
    $a = explode(' ',$arr[$i]['mode']);
    if($a[0]=='404'){
        $x = $x + 1 ;
    }elseif($a[0]=='200'){
        $y = $y + 1;
    }
    $i++;
}
echo '404:'.$x,',200:'.$y;


echo 'version 2.0';
?>