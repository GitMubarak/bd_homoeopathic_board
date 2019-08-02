<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/images/favicon.png">


        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/slicknav.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
        <script src="<?php echo base_url(); ?>asset/js/modernizr-2.8.3.min.js"></script>

        <!--        for college profile page-->

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/custom.css">

    </head>

    <body>
        <!--HEADER SECTION-->
        <section class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>Welcome">Home</a>
                    </li>
                </ul>
                <?php //if ($this->session->userdata('id')) { ?>
<!--                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                                    
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>College/college_profile/<?php echo $this->session->userdata('id'); ?>">Profile</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>College/logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <?php //} else { ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url(); ?>College/college_registration">Registration</a>
                            </li>
                            <li class="navbar-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>College/college_login" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                    Login
                                </a>
                            </li>
                        </ul>
                    <?php //} ?>
                </div>
            </nav>
        </section>

        <?php
        $message = $this->session->userdata('message');
        if ($message) {
            ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong></strong> 
                <?php
                echo $message;
                $this->session->unset_userdata('message');
                ?>
            </div>
        <?php } ?>

        <!--CONTENT SECTION-->
        <section class="content">
            <?php echo $content; ?>
        </section>

        <!--FOOTER SECTION-->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Copyright &copy; <a href="http://www.amarsoftbd.com/">AmarSoft Solution</a> 2018.
                    </div>
                </div>
            </div>
        </section>


        <script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>asset/js/jquery.slicknav.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/main.js"></script>

    </body>

</html>