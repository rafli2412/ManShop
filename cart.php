<?php

session_start();

require_once('./php/creatDb.php');
require_once('./php/component.php');
require_once('config.php');

$db = new CreateDb("manshop", "product");

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
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


<!--------------Cart Items details--------------->
<div class="small-container cart-page">

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php
        $total = 0;
        if (isset($_SESSION['cart'])) {
            $product_id = array_column($_SESSION['cart'], 'product_id');

            $result = $db->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($product_id as $id) {
                    $value = 0;
                    if ($row['item_id'] == $id) {
                        cartElement($row['item_cart'], $row['item_name'], $row['item_price'], $row['item_id']);
                        echo '  
                        <td><input type="number" value="1"></td>
                                <td>'.$row["item_price"].'</td>
                            </tr>';
                        $total = $total + (int)$row['item_price'];
                    }
                }
            }
        } else {
            echo "<tr>
            <th></th>
            <th>Product Kosong</th>
            <th></th>
        </tr>";
        }
        ?>
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td><?php
                    echo "$$total";
                    ?></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td><?php
                    $tax = $total * 0.1;
                    echo "$$tax";
                    ?></td>
                </td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?php
                    $hasil = $total + $tax;
                    echo "$$hasil";
                    ?></td>
                </td>
            </tr>

        </table>
    </div>
    <div class="total-price">
        <a href="#" class="btn">Proceed to checkout &#8594;</a>
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
</script>



</body>

</html>