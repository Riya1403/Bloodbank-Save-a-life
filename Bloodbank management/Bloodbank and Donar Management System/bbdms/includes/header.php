    <!-- <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse" style="color:white;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container" >
            <img class="img-responsive" style="height:5%;width:5%;" src="images/footer1.png">&nbsp;&nbsp;
            <a class="navbar-brand" href="index.php">Save a life</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="page.php?type=aboutus">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page.php?type=donor">Why Become Donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="become-donar.php">Become a Donor</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                 
                 
                </ul>
            </div>
        </div>
    </nav> -->
    <?php
        session_start();
    ?>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
        <img style="width:5%; height:5%;" src="images/footer1.png">&nbsp;&nbsp;
            <a class="navbar-brand" href="index.php">Save a life</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <?php
                    if(isset($_SESSION['uname'])){
                        echo '<ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a href="#" class="nav-link adv">Welcome '.$_SESSION["uname"].'!</a>
                        </li>
                        </ul>';
                    }
                ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <?php
                    if(!(isset($_SESSION['uname']))){
                    echo '<li class="nav-item">
                        <a class="nav-link" href="become-donar.php">Become a Donor</a>
                    </li>';}
                    ?>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <?php
                
                if(isset($_SESSION['uname'])){ 

                echo '<li class="nav-item">
                        <a class="nav-link adv" href="logout.php" >Logout</a>
                    </li>';
            }
            else{
              echo '<li class="nav-item">
                        <a class="nav-link adv" href="login.php">Login</a>
                    </li>';
            }
            
            ?>
                </ul>
            </div>
        </div>
    </nav>
