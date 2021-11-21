<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Global Banking</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/rupee-indian.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            table{
                border: 5px solid black;
            }
        </style>
    </head>
    <body>
      <?php include 'database/connection.php';?>
      <?php include 'navbar.php';?>
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                      
                    <div class="m-4 m-lg-5">

                    <?php
                      $query= "select * from customers";
                      $query_result= mysqli_query($con,$query);
                      $rows= mysqli_num_rows($query_result);         
                    ?>

                    <form action="reciver.php" method="POST">
                       <div class="table-responsive">
                        <h2>Select Sender Customer To Transfer Money</h2>
                       <table class="table table-hover table-condensed" >
                                <tr>
                                     <th>S_no</th>
                                     <th>Acccount No</th>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Balance</th>
                                     <th>Select User</th>
                                </tr>
                                <?php 
                                      for($i=0;$i<$rows;$i++)
                                      {
                                          $row= mysqli_fetch_array($query_result);                
                                ?>
                               <tr>
                                    <td><?php echo $row['s_no'];?></td>
                                    <td><?php echo $row['account_no']?></td>
                                    <td><?php echo $row['customer_name']?></td>
                                    <td><?php echo $row['email_id']?></td>
                                    <td><?php echo $row['balance']?></td>
                                    <td> <input type="radio" name="acc_sen" value="<?php echo $row['account_no']; ?>" required></td>
                               </tr>        
                               <?php } 
                               ?>              
                      </table>
                      </div>
                       <?php
                      $query= "select * from customers";
                      $query_result= mysqli_query($con,$query);
                      $rows= mysqli_num_rows($query_result);         
                    ?>

                       <div class="table-responsive">
                        <h2>Select Receiver Customer To Transfer Money</h2>
                       <table class="table table-hover table-condensed" >
                                <tr>
                                     <th>S_no</th>
                                     <th>Acccount No</th>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Balance</th>
                                     <th>Select User</th>
                                </tr>
                                <?php 
                                      for($i=0;$i<$rows;$i++)
                                      {
                                          $row= mysqli_fetch_array($query_result);                
                                ?>
                               <tr>
                                    <td><?php echo $row['s_no'];?></td>
                                    <td><?php echo $row['account_no']?></td>
                                    <td><?php echo $row['customer_name']?></td>
                                    <td><?php echo $row['email_id']?></td>
                                    <td><?php echo $row['balance']?></td>
                                    <td> <input type="radio" name="acc_rec" value="<?php echo $row['account_no']; ?>" required></td>
                               </tr>        
                               <?php } 
                               ?>              
                      </table>
                      </div>
                      <label>Enter Amount:</label>
                      <input type="number" name="amount" placeholder="0.0" require/>
                       <input type="submit" value="Continue" onclick="myFunction()">
                       <script>
                            function myFunction() {
                              alert("You are sending money to another account!");
                            }
                        </script>
                   </form>
                  </div>
                </div>
            </div>
        </header>
       
      
       <?php include 'footer.php';?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
