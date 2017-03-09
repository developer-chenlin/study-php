<?php
/**
 * Created by PhpStorm.
 * User: chenlin
 * Date: 2017/3/8
 * Time: 上午10:42
 */

 include 'dbclass.php';
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);


$db=ConnectMysqli::getIntance();



/*
$sql = "select * from reader";
$list = $db->getAll($sql);
$list = $db->getRow($sql);
$db->p($list);
*/

/*
 * 插入数据
 * */
$list = $db->insert("reader",array('readerface'=>'http://yahoo.com','readerid'=>'GDE12292','readername'=>'雅虎','tel'=>'140'));
 if ($list ) {
    echo  "asdasdsa";
} else {
    echo "234234325345";
}

/*
 * 删除数据
 * */
$del=$db->deleteOne("reader","readerid ='GDEK1842'");

/*
 * 修改数据
 * */

 $attefctrownums = $db->update("reader",array('readername'=>'wanda'),"readerid ='GDEK1842'");

 /*
  * 查数据
  * */
$sql="select * from reader ";
$list=$db->getRow($sql);
$db->p($list);

