

<nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MOTTANAI</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php" class="text-light">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                  <li class="nav-item align-right">
                    <a class="nav-link" href="portal.php">Portal</a>
                  </li>
                </ul>
                <form action="process/logout_process.php" method="post"class="d-flex" role="search">
                  <a class="btn btn-danger" href="dashboard.php?id=<?php echo $_SESSION['cust_id'];?>">My Profile</a>
                  <button class="btn btn-outline-success" name="btn_logout">Logout</button>
                </form>
              </div>
            </div>
              
            
          </nav>