<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $b = $_POST['value'];
    $c = $_POST['discount'];
}
$result =  $b * $c/100 * 0.1;
echo $result." VND";