<?php
    session_start();
    require_once "classes/Customer.php";
    //print_r($_SESSION);

    $v = new Customer;
    $vw = $v->view_product();
    // echo "<pre>";
    //     print_r($vw);
    // echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dash.css">
    <title>Document</title>
    <style>
        input[type]{
            border: 1px solid black;
        }

       textarea:hover{
        color: lightblue;
       }

    </style>
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
                            My Profile
                            </a>
                        </li>
                        <li>
                        <a href="logout.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Log out
                            </a>
                        </li>
                        <li>
                            <a href="dispose_waste.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Dispose waste
                            </a>
                        </li>
                        <li>
                            <a href="custom_history.php" class="nav-link text-white">
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
                <?php
                    if(isset($_SESSION['waste_added_success'])){
                        echo "<div class='alert alert-success'>".$_SESSION['waste_added_success']."</div>";
                        unset($_SESSION['waste_added_success']);
                    }
                ?>

                <!-- <h3>Profile</h3> -->
                <form action="process/waste_process.php" method="post">
                    <div class="mb-3">
                        <label for="type">Waste Type</label>
                        <select name = "pro_id" class="form-select">
                            <option value="">-- SELECT WASTE TYPE --</option>
                            <?php 
                                foreach($vw as $vi){
                            ?>       
                                    <option value="<?php echo $vi['pro_id']; ?>"><?php echo $vi['pro_name']; ?></option> 
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                <div class="mb-3">
                    <label for="">Enter waste description</label>
                    <textarea name="wastedesc" id="wastedesc" class="form-control border-black"></textarea>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <select name="location" id="location" class="form-select border-black">
                        <option value="selected">Select a location for pickup</option>
                        <option value="Berger">Berger</option>
                        <option value="Ojota">Ojota</option>
                        <option value="Ibafo">Ibafo</option>
                        <option value="Surulere">Surulere</option>
                        <option value="Mushin">Mushin</option>
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Waste(kg)</label><br>
                    <input type="text" name="mass" class="form-control border-black">
                </div>
                <div class="mb-3">
                    <label for="pknote" class="form-label">Pick up Note</label>
                    <textarea name="picknote" id="pknote" class="form-control"></textarea>
                </div>
                <div class="mb-3"></div>
                <p class="text-center"><button name="btn_req" class="btn btn-warning">Send Request</button></p>
            </div>
            
                
            </form>
            </div>
        </div>


    <?php
        require_once "partials/footer.php";
    ?>

    </div>
</body>
</html>