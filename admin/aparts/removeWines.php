<?php
    include("../../database/db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM wines WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed");
        }
        $_SESSION['message'] = "Vino eliminado correctamente";
        $_SESSION['message_type'] = "danger";
        header("Location: ../index.php");
    }
?>