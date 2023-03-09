<?php
function component($itemId, $productname, $productprice, $productimg)
{
    $element = "
    <div class=\"col-4\">
        <a href=\"product-details.php?id=$itemId\"><img src=\"$productimg\"></a>
        <h4><a href=\"product-details.php\">$productname</a></h4>
        <p>Rp $productprice</p>
    </div>
    ";
    echo $element;
}
function cartElement($productimg, $productname, $productprice, $productid)
{
    $element = "

        <tr>
            <td>
                <div class=\"cart-info\">
                    <img src=\"$productimg\">
                    <div>
                        <p>$productname</p>
                        <small>Price: Rp $productprice</small><br>
                        <form action=\"cart.php?action=remove&id=$productid\" method=\"POST\">
                        <button class=\"btn btn-danger\" name=\"remove\">Hapus</button>
                        </form>
                    </div>
                </div>
            </td>

    ";
    echo $element;
}
function product($itemId, $productname, $productprice, $productimg)
{
    $element = "

    <div class=\"col-4\">
        <a href=\"product-details.php?id=$itemId\"><img src=\"$productimg\"></a>
        <h4><a href=\"product-details.php\">$productname</a></h4>
        <div class=\"rating\">
        </div>
        <p>Rp $productprice</p>
    </div>

    ";
    echo $element;
}
