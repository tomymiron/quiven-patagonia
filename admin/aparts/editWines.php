<?php
    include('../../database/db.php');

    if(isset($_POST['savePriceButton'])){
        $newPrice = $_POST['price'];
        $id = $_POST['id'];
        $query = "UPDATE wines SET price = '$newPrice' WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = "Vino Editado Correctamente";
        $_SESSION['message_type'] = "success";

        header("Location: ../index.php");
    }
    if(isset($_POST['savePriceButton2'])){
        $newPrice = $_POST['price'];
        $id = $_POST['id'];
        $query = "UPDATE others SET price = '$newPrice' WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = "Vario Editado Correctamente";
        $_SESSION['message_type'] = "success";

        header("Location: ../index.php");
    }

    if(isset($_POST['addStockButton'])){
        $addNewStock = $_POST['stock'];
        $id = $_POST['id'];
        $actualStock = $_POST['actualStock'];
        $newStock = $actualStock + $addNewStock;

        $query = "UPDATE wines SET stock = '$newStock' WHERE id = $id";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = "Stock de Vino Actualizado";
        $_SESSION['message_type'] = "success";

        header("Location: ../index.php");
    }

    if(isset($_POST['removeStockButton'])){
        $removeNewStock = $_POST['stock'];
        $id = $_POST['id'];
        $actualStock = $_POST['actualStock'];

        if($actualStock >= $removeNewStock){
            $newStock = $actualStock - $removeNewStock;
            $query = "UPDATE wines SET stock = '$newStock' WHERE id = $id";
            $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed");
            }

            $_SESSION['message'] = "Vino Editado Correctamente";
            $_SESSION['message_type'] = "success";
        }else{
            $_SESSION['message'] = "Stock de Vino Insuficiente";
            $_SESSION['message_type'] = "danger";
        }

        header("Location: ../index.php");
    }
?>