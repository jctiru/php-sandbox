<?php
session_start();
$_SESSION['cart'] = $_POST['cart'];
$totalItems       = 0;
// print_r($_SESSION['cart']);
foreach ($_SESSION['cart'] as $key => $value) {
    if (isset($value)) {
        $totalItems += (int) $value;
    }
}
$_SESSION['cartTotalItems'] = $totalItems;
echo json_encode($_SESSION['cart']);
