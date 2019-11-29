<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BIOSKOP XXI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <style>
            .jam-tayang:hover {
                background-color : rgb(121, 118, 118)
            }

            .film-menu {
                text-align: center;
            }
            .film-menu:hover {
                opacity: 0.9;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                
            }
            .judul_film {
                font-weight: bold;
                font-size: large;
            }
            .gambar-theater{
                width: 90%
            }
		</style>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo site_url(); ?>Beranda">Bioskop XXI</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active nav-item"><a class="nav-link" href="<?php echo site_url(); ?>Film">Film</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>Theater">Theater</a></li>
                    <li class="dropdown nav-item"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">E-Ticket<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="upcomingshow.html">Upcoming Show</a></li>
                            <li class="dropdown-item"><a href="alltransaction.html">All Transaction</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Top-Up Saldo</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if($status == TRUE) { ?>
                        <li class="dropdown nav-item"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?= $username ?></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="upcomingshow.html">profile</a></li>
                                <li class="dropdown-item"><a href="<?php echo site_url(); ?>Customer/Log_Out">logout</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#signin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php }  ?>
                </ul>
            </div>
        </nav>
        <br><br><br><br>
