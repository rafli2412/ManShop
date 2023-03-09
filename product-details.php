<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
//start session
session_start();

require_once('./php/creatDb.php');
require_once('./php/component.php');
require_once('config.php');
$database = new createDb("manshop", "product");
$result = $database->getDatawithId($id);

if (isset($_POST['add'])) {
    /// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $id = $_POST['product_id'];
            $item_array = array(
                'product_id' => $id
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    } else {

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}


?>
<?php
if (!isset($_SESSION['username'])) {
    require_once('./template/header.php');
} else {
    require_once('./template/headerLG.php');
}
?>
<!--------------single-product--------------->
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="<?php echo $row["item_image"] ?>" width="100%" id="ProductImg">

                </div>
                <div class="col-2">
                    <p>Home / <?php echo $row["item_brand"] ?></p>
                    <h1><?php echo $row["item_name"] ?></h1>
                    <h4>$<?php echo $row["item_price"] ?></h4>

                    <select>
                        <option>Select Size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>Large</option>
                        <option>Midium</option>
                        <option>Small</option>
                    </select>
                    <form action="" method="POST">
                        <input type="number" value="1">
                        <button class="btn" name="add">Add To Cart</button>
                        <input type="hidden" name='product_id' value='<?php echo $row["item_id"] ?>'>

                    </form>
                    <h3>PRODUCT DETAILS <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of shorts for your morning workout or a denims for an evening out with the guys.</p>
                </div>
            </div>
        </div>
<?php
    }
}
?>


<!----------------- title -------------->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>

</div>

<!-------------- Our Products -------------->
<div class="small-container">

    <div class="row">
        <?php
        $result = $database->getData();
        for ($x = 0; $x <= 11; $x++) {
            $row[$x] = mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
        shuffle($row);
        for ($x = 0; $x <= 3; $x++) {
            component($row[$x]['item_id'], $row[$x]['item_name'], $row[$x]['item_price'], $row[$x]['item_image']);
        }
        ?>
    </div>

</div>



<!----------Footer--------------->

<?php
require_once('./template/footer.php');
?>



<!-------------js for toggle menu-------------->

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px"
        }
    }

    //-------------Produc Gallery------------

    var ProductImg = document.getElementById("ProductImg");

    var SmallImg = document.getElementsByClassName("small-img");


    SmallImg[0].onclick = function() {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function() {
        ProductImg.src = SmallImg[1].src;

    }
    SmallImg[2].onclick = function() {
        ProductImg.src = SmallImg[2].src;

    }
    SmallImg[3].onclick = function() {
        ProductImg.src = SmallImg[3].src;

    }

    //-------------End Produc Gallery------------  
</script>



</body>

</html>