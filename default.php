<?php include('database/db.php'); ?>
<?php include('pages/header.php'); ?>
<style><?php include('css/menuqr.css') ?></style>
</head>
<body>

<div class="visually-hidden mobileView">
    <div class="mainBackgroundContainer"><img class="mainBackground b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/background2final.png"/></div>
    <div class="otherMainContainer">
        <h3 class="mainH3">BARILOCHE - PATAGONIA ARGENTINA</h3>
        <h1 class="mainH1">Bienvenidos<br>a Quiven</h1>
        <div class="mainAwardContainer"><img class="b-lazy mainAward" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/award.png"></div>
    </div>
    <h6 class="indicator">swipe up</h6>
    <div class="boxSwipeDown">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div class="visually-hidden desktopView">
    <div class="mainBackgroundContainer"><img class="mainBackground b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/background1final.jpg"/></div>
    <div class=" otherMainContainer">
        <h3 class="mainH3">BARILOCHE - PATAGONIA ARGENTINA</h3>
        <h1 class="mainH1">Bienvenidos<br>a Quiven</h1>
        <div class="mainAwardContainer"><img class="b-lazy mainAward" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/award.png"></div>
    </div>
    <h6 class="indicator">swipe up</h6>
    <div class="boxSwipeDown">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="mainContainer">
    
    <h4 class="subMenu" id="menu">::MENÚ::</h4>

    <button type="button" class="collapsible"><h4>MENÚ DE 5 PASOS</h4></button>
    <div class="content menu">
            <ul>
                <li><p>Nuestra modalidad es menú de pasos sorpresa. ¡Dejate sorprender!</p></li>
                <li><p>Recordá informar tus restricciones al realizar tu reserva </p></li>
            </ul>
    </div> 
    <button type="button" class="collapsible"><h4>MENÚ DE 8 PASOS</h4></button>
    <div class="content menu">
            <ul>
                <li><p>Nuestra modalidad es menú de pasos sorpresa. ¡Dejate sorprender!</p></li>
                <li><p>Recordá informar tus restricciones al realizar tu reserva </p></li>
            </ul>
    </div> 

    <h4 class="subMenu">::VINOS::</h4>

    <button type="button" class="collapsible"><h4>CEPA - STRAIN</h4></button>
    <div class="content">
        <div class="collapsableContentInner">
                    <ul class="listOfWines">
                        <?php
                            $query = 'SELECT * FROM wines WHERE strain = "option1" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Tintos</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE strain = "option2" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Blancos</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE strain = "option3" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Dulce</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }$query = 'SELECT * FROM wines WHERE strain = "option4" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Rosados</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }$query = 'SELECT * FROM wines WHERE strain = "option5" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Organicos</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }$query = 'SELECT * FROM wines WHERE strain = "option6" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Espumantes</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            } ?>
                    </ul>
                </div>   
    </div> 
        <button type="button" class="collapsible"><h4>ORIGEN - FROM</h4></button>
    <div class="content">
        <div class="collapsableContentInner">
                    <ul class="listOfWines">
                        <?php
                            $query = 'SELECT * FROM wines WHERE origin = "option1" AND stock > 0 ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Mendoza</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                               | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE origin = "option2" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Patagonia</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE origin = "option3" AND stock > 0  ORDER BY price DESC';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Salta</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [<?php echo $row['winery']; ?>]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }?>
                    </ul>
        </div>
    </div> 
               
    <button type="button" class="collapsible"><h4>MARIDAJE - PAIRING</h4></button>
    <div class="content">
        <div class="collapsableContentInner">
                    <ul class="listOfWines">
                        <?php
                            $query = 'SELECT * FROM others WHERE name = "Maridaje"';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Propuesta</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?> ( 4 copas )
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            } ?>
                    </ul>
                </div>
    </div>

    <h4 class="subMenu">::VARIOS::</h4>

    <button type="button" class="collapsible"><h4>BEBIDAS</h4></button>
    <div class="content">
        <div class="collapsableContentInner">
                <ul class="listOfWines" style="padding-top: 20px">
                        <?php
                            $query = 'SELECT * FROM others WHERE name != "Maridaje"';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            } ?>
                    </ul>
                </div>
    </div>
</div>

<script>
    const mobileElement = document.querySelector(".mobileView");
    const desktopElement = document.querySelector(".desktopView");
    const desktopView = window.matchMedia('(min-width: 643px)');
    
    if(window.innerWidth >= 643){
        console.log("toggle");
        mobileElement.classList.add("visually-hidden");
        desktopElement.classList.remove("visually-hidden");
    }else{
        console.log("toggle2");
        mobileElement.classList.remove("visually-hidden");
        desktopElement.classList.add("visually-hidden");
    }
    
    desktopView.addListener(handleDeviceChange);
    function handleDeviceChange(e) {
        if (e.matches){
            console.log("toggle");
            mobileElement.classList.add("visually-hidden");
            desktopElement.classList.remove("visually-hidden");
        }
        else{
            console.log("toggle2");
            mobileElement.classList.remove("visually-hidden");
            desktopElement.classList.add("visually-hidden");
        }
    }
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        }else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
    }
</script>

<?php include('pages/footer.php'); ?>