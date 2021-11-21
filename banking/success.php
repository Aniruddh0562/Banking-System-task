<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Global Banking</title>
    <link  rel="Stylesheet"  type="text/css" href="style/bootstrap.min.css"/>
    <link  rel="Stylesheet"  type="text/css" href="style/bootstrap.css"/>
    
    <link rel="icon" type="image/x-icon" href="assets/rupee-indian.png" />
        <!-- Bootstrap icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes )-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="container">
   <!--Nav bar start-->
   <?php include 'navbar.php';?>
   <!--Nav bar ends-->
    <!-- section-->
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder"> Thank You </h2>
                   
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                   
                     <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">

                                <div class="mb-3">
                                    <span class="display-6 fw-bold">Money Transfer Successfull</span>
                                </div>
                                
                                <div class="d-grid"><a class="btn btn-outline-primary" href="view_customer.php">Click Here To View Balance</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <!--footer start-->
 <?php include 'footer.php';?>
 <!--footer end-->
</body>
</html>
