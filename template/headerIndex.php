<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="./img/logo1.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">All Products</a></li>
                        <li><a href="">About</a></li>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <li><a href="accountLG.php">Account</a></li>
                        <?php } else { ?>
                            <li><a href="account.php">Account</a></li>
                        <?php } ?>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <li><a href="php/logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar?')">Logout</a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"><?php
                                                                                            if (isset($_SESSION['cart'])) {
                                                                                                $count = count($_SESSION['cart']);
                                                                                                echo $count;
                                                                                            } else {
                                                                                                echo "0";
                                                                                            }
                                                                                            ?></a>
                <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
            </div>
            <div class="row">
                <div class="col-2">

                    <h1>Arduino<br>A Microcontroller!</h1>
                    <p>Our shop sells various kinds of microcontrollers and various<br>kinds of the cheapest sensors throughout Indonesia.</p>
                </div>
                <div class="col-2">
                    <img src="./img/arduinoIndex.png">
                </div>

            </div>

        </div>
    </div>