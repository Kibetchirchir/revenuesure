<?php
/**
 * Created by PhpStorm.
 * User: chirchir
 * Date: 3/28/18
 * Time: 8:54 AM
 */
include 'connect.php';


$function= $_GET['function'];

if($function=="Businesspermit"){

$sql = "SELECT `payments`.`Date`, `businesspermit`.`BusinessNo`, `payments`.`Amount`, `transaction_type`.`TransactionType`\n"

    . "FROM `businesspermit`\n"

    . "    LEFT JOIN `payments` ON `businesspermit`.`ReceiptNo` = `payments`.`ReceiptNo`\n"

    . "    LEFT JOIN `transaction_type` ON `payments`.`TransactionID` = `transaction_type`.`TransactionID`\n"

    . "WHERE (`businesspermit`.`BusinessNo` IS NOT NULL)";

   $deep=$conn->query($sql);
 $result=  $conn->query($sql);

      $Row= array();
      $Row = $result->fetch_all(MYSQLI_ASSOC);
 
  $myJSONBusinesspermit= json_encode($Row);
 echo  $myJSONBusinesspermit;

}  
 
if($function=='Landrates'){


$sql = "SELECT `payments`.`Date`, `landrates`.`LandNo`, `payments`.`Amount`, `transaction_type`.`TransactionType`\n"

    . "FROM `landrates`\n"

    . "    LEFT JOIN `payments` ON `landrates`.`ReceiptNo` = `payments`.`ReceiptNo`\n"

    . "    LEFT JOIN `transaction_type` ON `payments`.`TransactionID` = `transaction_type`.`TransactionID`\n"

    . "WHERE (`landrates`.`LandNo` IS NOT NULL)\n"

    . "ORDER BY `payments`.`Date` ASC";
   $result= $conn->query($sql);

      $Row= array();
      $Row = $result->fetch_all(MYSQLI_ASSOC);
 
  $myJSONlandrates = json_encode($Row);

  
 echo $myJSONlandrates;
}

if($function=='parking'){
$sql = "SELECT `payments`.`Date`, `parking`.`RegNo`, `payments`.`Amount`, `transaction_type`.`TransactionType`\n"

    . "FROM `parking`\n"

    . "    LEFT JOIN `payments` ON `parking`.`ReceiptNo` = `payments`.`ReceiptNo`\n"

    . "    LEFT JOIN `transaction_type` ON `payments`.`TransactionID` = `transaction_type`.`TransactionID`\n"

    . "WHERE (`parking`.`RegNo` IS NOT NULL)";
     

        $result=  $conn->query($sql);

      $Row= array();
      $Row = $result->fetch_all(MYSQLI_ASSOC);
      
 $myJSONparking = json_encode($Row); 

   echo $myJSONparking = json_encode($Row);

}

?>
