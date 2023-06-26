<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location: loginPanel.php');
}?>



<?php

$connection = mysqli_connect(
    'localhost', 
    'root', 
    '', 
    'quivendb'
);

?>

<?php include('../pages/header.php'); ?>
<style> <?php include('../css/adminPanel.css') ?> </style>

<div class="container-fluid mainContainer">
    <div class="container-fluid">
        <h4 class="mainTitle">Panel De Administrador</h4>
		<a href="aparts/logout.php" class="logoutButton btn btn-danger">  Logout</a>

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <strong><?= $_SESSION['message'] ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <!-- AGREGAR NUEVOS VINOS -->
        <button type="button" class="collapsible"><h4>AGREGAR NUEVOS VINOS</h4></button>
        <div class="content a"> 
            <div class="collapsablecontentInner">
                <form class="mainContent" action="aparts/addWines.php" method="POST">
                    <div class="form-group input">
                        <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre" required autofocus>
                    </div>
                    <div class="form-group input">
                        <input type="number" name="stock" class="form-control" required placeholder="Ingrese el stock">
                    </div>
                    <div class="form-group input formMultipleChoice">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strain" value="option1" checked>
                            <label class="form-check-label">Tinto</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strain" value="option2">
                            <label class="form-check-label">Blanco</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strain" value="option3">
                            <label class="form-check-label">Dulce</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strain" value="option4">
                            <label class="form-check-label">Rosado</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strain" value="option5">
                            <label class="form-check-label">Organico</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strain" value="option6">
                            <label class="form-check-label">Espumante</label>
                        </div>
                    </div>
                    <div class="form-group input formMultipleChoice">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="origin" value="option1" checked>
                            <label class="form-check-label">Mendoza</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="origin" value="option2">
                            <label class="form-check-label">Patagonia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="origin" value="option3">
                            <label class="form-check-label">Salta</label>
                        </div>
                    </div>
                    <div class="form-group input">
                        <input type="text" name="strain2" required class="form-control" placeholder="Ingrese la cepa">
                    </div>
                    <div class="form-group input">
                        <input type="text" name="winery" required class="form-control" placeholder="Ingrese la bodega">
                    </div>
                    <div class="form-group input">
                        <input type="number" name="price" class="form-control" placeholder="Ingrese el precio">
                    </div>
                    <div class="form-group input input">
                        <input action="" type="submit" style="width: 100%;" class="btn btn-success btn-block" name="addWine" value="Ingresar Nuevo Vino"></input>
                    </div>
                </form>
            </div>   
        </div> 

        <!-- MODIFICAR VINOS -->
        <div class="editWinesContainer " style="border: none !important; border-radius: none !important"  role="button" data-bs-toggle="collapse" data-bs-target="#collapsableB"><h4>MODIFICAR VINOS</h4></div>
        <div class="collapse editCollapsableContent" id="collapsableB">
            <div class="collapsablecontentInner">
                <div class="body">
                    <?php
                    $query = "SELECT * FROM wines ORDER BY name ASC";
                    $result_wines = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_array($result_wines)) { ?>
                        <div class="collapsableBox rowWinesContainer" role="button" data-bs-toggle="collapse" data-bs-target="#collapsable<?= $row['id']?>">
                            <h3 class="num1"><?php echo $row['name']?></h3>
                            <h3 class="num2">Stock:<?php echo $row['stock']?></h3>
                            <h3 class="num3">$<?php echo $row['price']?></h3>
                        </div>
                        <div class="collapse multi-collapse rowCollapsableContent" id="collapsable<?= $row['id']?>">
                            <div class="helper">
                                <form class="cont1 cont" action="aparts/editWines.php" method="POST">
                                    <input type="number" min="0" value="1" placeholder="Ingrese Candtidad" name="stock" class="form-control">
                                    <input value="<?= $row['id']?>" type="hidden" name="id"></input>
                                    <input value="<?= $row['stock']?>" type="hidden" name="actualStock"></input>
                                    <div>
                                        <input type="submit" value="add" name="addStockButton" class="form-control btn btn-success">
                                        <input type="submit" value="remove" name="removeStockButton" class="form-control btn btn-danger">
                                    </div>    
                                </form>
                                <form class="cont2 cont" action="aparts/editWines.php" method="POST">
                                    <input type="number" name="price" placeholder="Nuevo precio" value="<?= $row['price']?>" min="0" class="form-control">
                                    <input value="<?= $row['id']?>" type="hidden" name="id"></input>
                                    <span style="width:20px"></span>
                                    <input action="" type="submit" value="save" name="savePriceButton" class="form-control btn btn-success">
                                </form>
                                <div class="cont3 cont">
                                    <a href="aparts/removeWines.php?id=<?php echo $row['id']?>" class="form-control btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- AGREGAR NUEVOS VARIOS -->
        <button type="button" class="collapsible"><h4>AGREGAR NUEVOS VARIOS</h4></button>
        <div class="content a"> 
            <div class="collapsablecontentInner">
                    <form class="mainContent" action="aparts/addWines.php" method="POST">
                        <div class="form-group p-2">
                            <input type="text" name="name" required class="form-control" placeholder="Ingrese el nombre" autofocus>
                        </div>
                        <div class="form-group p-2">
                            <input type="number" name="price" required class="form-control" placeholder="Ingrese el precio">
                        </div>
                        <div class="form-group p-2">
                            <input type="text" name="description" class="form-control" placeholder="Ingrese opcionalmente una descripcion">
                        </div>
                        <div class="form-group p-2">
                            <input action="" type="submit" style="width: 100%;" class="btn btn-success btn-block" name="addOther" value="Ingresar Nuevo Vario"></input>
                        </div>
                    </form>
            </div>
        </div>

        <!-- MODIFICAR VARIOS -->
        <div class="collapsableBox editWinesContainer" role="button" data-bs-toggle="collapse" data-bs-target="#collapsableD"><h4>MODIFICAR VARIOS</h4></div>
        <div class="collapse multi-collapse editCollapsableContent" id="collapsableD">
            <div class="collapsablecontentInner">
            
            <div class="body">
                <?php
                $query = "SELECT * FROM others ORDER BY name ASC";
                $result_others = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_array($result_others)) { ?>
                    <div class="collapsableBox rowWinesContainer" role="button" data-bs-toggle="collapse" data-bs-target="#collapsable<?= $row['id']?>">
                        <h3 class="num1"><?php echo $row['name']?></h3>
                        <h3 class="num3">$<?php echo $row['strain2']?></h3>
                        <h3 class="num3">$<?php echo $row['price']?></h3>
                    </div>
                    <div class="collapse multi-collapse rowCollapsableContent" id="collapsable<?= $row['id']?>">
                        <div class="helper">
                            <form class="cont2 cont" action="aparts/editWines.php" method="POST">
                                <input type="number" name="price" placeholder="Nuevo precio" value="<?= $row['price']?>" min="0" class="form-control">
                                <input value="<?= $row['id']?>" type="hidden" name="id"></input>
                                <span style="width:20px"></span>
                                <input action="" type="submit" value="save" name="savePriceButton2" class="form-control btn btn-success">
                            </form>
                            <div class="cont3 cont">
                                <a href="aparts/removeOthers.php?id=<?php echo $row['id']?>" class="form-control btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
    var coll = document.getElementsByClassName("collapsible");
    const mainCollapse = document.querySelector(".mainCollapse");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
        
    });
    }

</script>

<?php include('../pages/footer.php'); ?>