<form method="post">
    Product Description: <input type="text" name="product" placeholder="name"><br>
    List Price: <input type="number" placeholder="VND" name="value"><br>
    Discount Percent: <input type="number" name="discount" placeholder="%"><br>
    <input type="submit" name="result" value="Calculate">
</form>
<?php
include "display_discount.php";