<?php

//start session
session_start();

require_once('./php/creatDb.php');
require_once('./php/component.php');
require_once('config.php');
$database = new createDb("manshop", "product");


?>
<?php
if (!isset($_SESSION['username'])) {
    require_once('./template/header.php');
} else {
    require_once('./template/headerLG.php');
}
?>

<!----------------- title -------------->
<div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
    </div>
    <?php
    $batas = 12;
    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

    $previous = $halaman - 1;
    $next = $halaman + 1;

    $result = $database->getData();
    $data = $result;
    $jumlah_data = mysqli_num_rows($data);
    $total_halaman = ceil($jumlah_data / $batas);

    $data_product = mysqli_query($conn, "select * from product limit $halaman_awal, $batas");
    $nomor = $halaman_awal + 1;
    echo '<div class="row">';
    for ($x = 0; $x <= 1; $x++) {
        while ($d = mysqli_fetch_array($data_product)) {
            product($d['item_id'], $d['item_name'], $d['item_price'], $d['item_image']);
        }
    }
    echo '</div>';
    ?>

    <div class="page-btn">
        <span>

            <a class="page-link" <?php if ($halaman > 1) {
                                        echo "href='?halaman=$previous'";
                                    } ?>>&#8592;</a>

        </span>

        <?php
        for ($x = 1; $x <= $total_halaman; $x++) {
        ?>
            <span>
                <a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
            </span>
        <?php
        }
        ?>

        <span>
            <a class="page-link" <?php if ($halaman < $total_halaman) {
                                        echo "href='?halaman=$next'";
                                    } ?>>&#8594;</a>
        </span>
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