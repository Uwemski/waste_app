<?php
    session_start();
    require "classes/ViewMessage.php";

    $view = new ViewMessage();

    $view_all = $view->view_message();
?>

<?php
    @include_once "../partials/header.php";
?>
<body>
    <div class="container-fluid">
        <?php
          @include_once "../partials/navbar.php";
        ?>
            
          </nav>

        <div class="row">
            <?php
            @include_once "../partials/menu.php";
            ?>
            <div class="col-md-9">
                <h1>All Messages goes here</h1>
                
                <table border='1' class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   <tbody>
                        <?php 
                            $serial_no = 1;
                            
                            foreach($view_all as $vw){
                        ?>
                        <tr>
                            <td><?php   echo $serial_no ?></td>
                            <td><?php echo $vw['Name']?></td>
                            <td><?php echo $vw['email']?></td>
                            <td><?php echo $vw['phone_number']?></td>
                            <td><?php echo $vw['msg']?></td>
                            <td><?php echo $vw['date_created']?></td>
                        </tr>

                        <?php
                            }
                        ?>
                   </tbody>



                </table>
                
        </div>
            
        </div>
        
        
    </div>
    </div>
</body>
</html>