<?php
    //session_start();
    require_once "classes/ViewHistory.php";
    require_once "SARS.php";

    $obj= new ViewHistory;
    $var= $obj->view_wastes_byId($_SESSION['cust_id']);

    echo "<pre>";
        print_r($var);
    echo"</pre>";

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
                            <a href="custom_waste.php" class="nav-link text-white">
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

                <!-- <h3>Profile</h3> -->
                <table border=1 class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Waste Name</th>
                            <th>Weight(kg)</th>
                            <th>Points</th>
                            <th>Amount</th>
                            <th>Waste Status</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $serialNo= 1; 
                            foreach($var as $v){
                                $amount = $v['waste_weight'] * $v['pro_pointsperkg'] * $v['pro_priceperpoints'];
                                $pointsEarned = $v['waste_weight'] * $v['pro_pointsperkg'];
                        ?>
                        <tr>
                            <td><?php echo $serialNo?></td>
                            <td><?php echo $v['cust_firstname']. " ". $v['cust_lastname']?></td>
                            <td><?php echo $v['pro_name'] ?></td>
                            <td><?php echo $v['waste_weight']?></td>
                            <td><?php echo $pointsEarned?></td>
                            <td><?php echo $amount ?></td>
                            <td><?php echo $v['waste_status']?></td>
                            <td><?php echo $formattedDate= date("d M Y, h:i A", strtotime($v['waste_date_added'])) ; ?></td>
                        </tr>
                        <?php
                            $serialNo++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    <?php
        require_once "partials/footer.php";
    ?>

    </div>
</body>
</html>