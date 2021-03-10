<?php
        session_start();
    ?>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
        <img style="width:5%; height:5%;" src="img/footer1.png">&nbsp;&nbsp;
            <a class="navbar-brand" href="index.php">Save a life</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <?php
                    if(isset($_SESSION['auname'])){
                        echo '<ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a href="#" class="nav-link adv">Welcome '.$_SESSION["auname"].'!</a>
                        </li>
                        </ul>';
                    }
                ?>
                <ul class="navbar-nav ml-auto">
                <?php
                if(isset($_SESSION['auname'])){ 

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