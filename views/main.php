<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>
    <link href="<?php echo ROOT_URL?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-target" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Shareboard</a>
            </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['is_logged_in'])){?>
                        <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']["name"];?></a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
                        <?php
                    }?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <?php 
            Messages::display();
            require($view); ?>
        </div>
    </div>
</body>
</html>