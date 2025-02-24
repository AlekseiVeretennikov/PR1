<?php

require_once 'conf/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `Orders` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubdate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="col-6 col-md-12">
<nav class="navbar bg-body-tertiary">
        </nav>
</div>
</div>
<div class="row">
<div class="col-6 col-md-4">
</div>
<div class="col-6 col-md-4">
<form action="vend/updateord.php" method="post">
<input type="hidden" name="id" value="<?= $product['id']?>">
    <div class="form-floating mb-3">
        <input type="date" name="date" value="<?= $product['date']?>" class="form-control"  >
        <label for="floatingInput">Дата</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Status" value="<?= $product['Status']?>" class="form-control"  >
        <label for="floatingPassword">Статус</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Client_name" value="<?= $product['Client name']?>" class="form-control" >
        <label for="floatingPassword">Имя Клиента</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="Delivery_address" value="<?= $product['Delivery address']?>" class="form-control" >
        <label for="floatingPassword">Адрес</label>
    </div>

<button type="submit" class="btn btn-outline-dark btn-lg">Изменить запись в бд</button>

</form>
</div>
<div class="col-6 col-md-4">
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>