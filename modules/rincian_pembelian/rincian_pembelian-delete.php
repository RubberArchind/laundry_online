<?php
require_once('database.php');
$db=new Database();
$id = $_GET['id'];

$db->delete('rincian_pembelian',"id=$id");
$res = $db->getResult();
  if($res){
    header('Location: /laundry2/index.php?module=rincian_pembelian');
   }else{
    echo "Upss Something wrong..";
   }
  
?>