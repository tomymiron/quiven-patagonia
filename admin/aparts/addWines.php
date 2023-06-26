<?php
    include('../../database/db.php');

    if(isset($_POST['addWine'])){
        $name = $_POST['name'];
        $stock = $_POST['stock'];
        $strain = $_POST['strain'];
        $origin = $_POST['origin'];
        $winery = $_POST['winery'];
        $price = $_POST['price'];
        $strain2 = $_POST['strain2'];

        $query = "INSERT INTO wines(name, stock, strain, strain2, origin, winery, price) VALUES('$name', '$stock', '$strain', '$strain2', '$origin', '$winery', '$price')";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = "Vino Agregado Correctamente";
        $_SESSION['message_type'] = "success";

        header("Location: ../index.php");
    }
    if(isset($_POST['addOther'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $query = "INSERT INTO others(name, price, description) VALUES('$name', '$price', '$description')";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = "Vario Agregado Correctamente";
        $_SESSION['message_type'] = "success";

        header("Location: ../index.php");
    }
?>