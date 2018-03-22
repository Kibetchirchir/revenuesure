<?php

  include 'connect.php';

  $ReceiptNo=$_POST['ReceiptNo'];
  $Amount=$_POST['Amount'];
  $Revenue_type=$_POST['Revenue'];
 


  if($Revenue_type==1){

      $sql="INSERT INTO Transaction(`ReceiptNo`,`Amount`)VALUES ('$ReceiptNo','$Amount')";
      DB::instance()->executeSQL($sql);


  }
  elseif ($Revenue_type==2){


      $sql="INSERT INTO TRANSACTION(`ReceiptNo`,`Amount`)VALUES ('$ReceiptNo','$Amount')";
      DB::instance()->executeSQL($sql);


  }
  else{
      $sql="INSERT INTO TRANSACTION(`ReceiptNo`,)VALUES ('$ReceiptNo')";
      DB::instance()->executeSQL($sql);

  }
    ?>


<form action="scratch.php" Method="POST">
    <Input type="text"   name="ReceiptNo">
    <Input type="text"   name="Amount">
    <Input type="text"   name="Revenue">
</form>

