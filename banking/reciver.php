 <?php include 'database/connection.php';

$acc_sen = $_POST['acc_sen'];
$acc_rec = $_POST['acc_rec'];
$amount  = $_POST['amount'];

if($acc_sen==$acc_rec){

     mysqli_close($con);
    
     header('location:http://localhost/banking/warning.php');

}
else{

 $query1 = "select balance from customers where account_no = '" . $acc_sen . "' ";
 $query_result1= mysqli_query($con,$query1);
 $rows1= mysqli_num_rows($query_result1); 
 $row1= mysqli_fetch_array($query_result1);  
 $sender_balance = $row1['balance'];


 $query2 = "select balance from customers where account_no = '" . $acc_rec . "' ";
 $query_result2= mysqli_query($con,$query2);
 $rows2= mysqli_num_rows($query_result2);
 $row2= mysqli_fetch_array($query_result2);  
 $receiver_balance = $row2['balance'];

if($amount>$sender_balance){
 	mysqli_close($con);
 	?> <script>
       
          alert("No Sufficient Balance!");
     
    </script>
    <?php
    header('location:http://localhost/banking/transfer_money.php');
 }


 	$sender_balance =$sender_balance-$amount;
 	$receiver_balance=$receiver_balance+$amount;
 
      $q1 = "UPDATE customers SET balance = '" . $sender_balance . "' WHERE account_no = '" . $acc_sen . "' ";
      mysqli_query($con,$q1);

      $q2 = "UPDATE customers SET balance = '" . $receiver_balance . "' WHERE account_no = '" . $acc_rec . "' ";
      mysqli_query($con,$q2);
		mysqli_close($con);
 header('location:http://localhost/banking/success.php');
}
?>
