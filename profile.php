<?php
    //for some strange reaasons, you might need data to access this page
    session_start();
    require_once "SARS.php";
    require_once "classes/Update.php";
    require_once "classes/Payment.php";

    // Fetch bank data
    $b = new Payment;
    $banksResponse = $b->fetchBanks();

    //checking to be sure
    // echo "<pre>";
    //     print_r($banksResponse);
    // echo "</pre>";


    //print_r($_SESSION);
    if (isset($banksResponse['status']) && $banksResponse['status'] === true) {
        $banks = $banksResponse['data'];
    } else {
        $banks = [];
        $error = 'Unable to fetch banks';
        return 'error';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dash.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">

   
    <!-- <div class="container"> -->
        <!-- <div class="row">
            <div class="col-md-3 mt-4 mb-3"><a href="products.php" class=>View products</a></div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3"><a href="customers.php">View Customers</a></div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3"><a href="waste.php">View Wastes</a></div>
        </div> -->
        <?php
            require_once "partials/login_navbar.php";
        ?>
       
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;height: 100vh;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link active" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#waste"></use></svg>
                            Update Profile
                            </a>
                        </li>
                        <li>
                        <a href="logout.php?id=<?php echo $_SESSION['cust_id'];?>" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Log out
                            </a>
                        </li>
                        <li>
                            <a href="custom_waste.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Dispose waste
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            View History
                            </a>
                        </li>
                        <li>
                            <a href="admin/custom_view_product.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Waste Calculator
                            </a>
                        </li>
                    
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <h2>Welcome</h2>
                <h3>Update Profile</h3>
                <h4 class='alert alert-info'>You need data to acccess this page!</h4>
                <?php
                    if(isset($_SESSION['success'])){
                        echo '<p class="alert alert-success">'. $_SESSION['success']. '</p>';
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['error'])){
                        echo '<p class="alert alert-warning">'. $_SESSION['error']. '</p>';
                        unset($_SESSION['warning']);
                    }
                ?>
                <form action="process/update_process.php" method="post">
                    <div class="mb-3">
                        <label>First name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control"> 
                    </div>
                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Account number</label>
                        <input type="text" name="account_no" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="banks">Select a bank</label>
                        <select name="bank_code" id="banks">Select A Bank
                            <option value="">--Select a Bank--</option>
                            <?php foreach($banks as $bank){ 
                            ?>
                                <option value="<?php echo $bank['code']; ?>">
                                    <?php echo ($bank['name']) ?>
                                </option>
                            <?php
                            }
                            ?>

                    </select>
                    </div>
                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input type= 'number' name='phone' class='form-control'>
                    </div>

                    <p class="text-center text-uppercase"><button name='btn_update' class="btn btn-warning" >Update</button></p>
                </form>
            </div>
            

            
            </div>
        </div>


    <?php
        require_once "partials/footer.php";
    ?>

    </div>
</body>
</html>