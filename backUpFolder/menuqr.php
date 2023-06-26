<?php include('database/db.php'); ?>
<?php include('pages/header.php'); ?>
<style> <?php include('css/menuqr.css') ?> </style>

<div class="visually-hidden mobileView">
    <div class="mainBackgroundContainer"><img class="mainBackground b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/background2final.png"/></div>
    <h3 class="mainH3">BARILOCHE - PATAGONIA ARGENTINA</h3>
    <h1 class="mainH1">Bienvenidos<br>a Quiven</h1>
    <div class="mainAwardContainer"><img class="b-lazy mainAward" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/award.png"></div>
    <h6 class="indicator">swipe up</h6>
    <div class="boxSwipeDown">
        <span></span>
        <span></span>
        <span></span>
    </div>

</div>
<div class="visually-hidden desktopView">
    <div class="mainBackgroundContainer"><img class="mainBackground b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/background1final.jpg"/></div>
    <div class="container-xxl otherMainContainer">
        <h3 class="mainH3">BARILOCHE - PATAGONIA ARGENTINA</h3>
        <h1 class="mainH1">Bienvenidos<br>a Quiven</h1>
        <div class="mainAwardContainer"><img class="b-lazy mainAward" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/award.png"></div>
    </div>
</div>

<div class="swipeable">
    <div class="mainContainer">
        <div class="container-fluid">
            <h4 class="subMenu" id="menu">::Menu::</h4>
            <div class="collapsableBox" type="button" data-bs-toggle="collapse" data-bs-target="#collapsable1"><h4>MENU DE 5 PASOS</h4></div>
            <div class="collapse multi-collapse collapsableContent" id="collapsable1">
                <div class="collapsableContentInner">
                    <ul>
                        <li><p>Nuestra modalidad es menú de pasos sorpresa. ¡Dejate sorprender!</p></li>
                        <li><p>Recordá informar tus restricciones al realizar tu reserva </p></li>
                    </ul>
                </div>
            </div>
            <div class="collapsableBox" type="button" data-bs-toggle="collapse" data-bs-target="#collapsable2"><h4>MENU DE 8 PASOS</h4></div>
            <div class="collapse multi-collapse collapsableContent" id="collapsable2">
                <div class="collapsableContentInner">
                    <ul>
                        <li><p>Nuestra modalidad es menú de pasos sorpresa. ¡Dejate sorprender!</p></li>
                        <li><p>Recordá informar tus restricciones al realizar tu reserva </p></li>
                    </ul>
                </div>
            </div>
            <h4 class="subMenu">::Vinos::</h4>
            <div class="collapsableBox" type="button" data-bs-toggle="collapse" data-bs-target="#collapsable3"><h4>SEGUN SU ORIGEN</h4></div>
            <div class="collapse multi-collapse collapsableContent" id="collapsable3">
                <div class="collapsableContentInner">
                <ul class="listOfWines">
                        <?php
                            $query = 'SELECT * FROM wines WHERE origin = "option1" AND stock > 0';
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
                                               | <?php echo $row['strain2']?> [ by <?php echo $row['winery']; ?> ]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE origin = "option2" AND stock > 0';
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
                                            | <?php echo $row['strain2']?> [ by <?php echo $row['winery']; ?> ]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE origin = "option3" AND stock > 0';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Argentina</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [ by <?php echo $row['winery']; ?> ]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE origin = "option4"  AND stock > 0';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Exterior</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [ by <?php echo $row['winery']; ?> ]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            } ?>
                    </ul>
                </div>
            </div>
            <div class="collapsableBox" type="button" data-bs-toggle="collapse" data-bs-target="#collapsable4"><h4>SEGUN SU COSECHA</h4></div>
            <div class="collapse multi-collapse collapsableContent" id="collapsable4">
                <div class="collapsableContentInner">
                    <ul class="listOfWines">
                        <?php
                            $query = 'SELECT * FROM wines WHERE strain = "option1" AND stock > 0';
                            $result_wines = mysqli_query($connection, $query);
                            $numRows = mysqli_num_rows($result_wines);
                            if($numRows > 0){ ?>
                                <h3 class="winesListHeader"><li>Dulces</li></h3>
                                <?php
                                while($row = mysqli_fetch_array($result_wines)){ ?>
                                    <li class="winesList">
                                        <p class="name">
                                            <?php echo $row['name']; ?>
                                            <span class="winery">
                                            | <?php echo $row['strain2']?> [ by <?php echo $row['winery']; ?> ]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE strain = "option2" AND stock > 0';
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
                                            | <?php echo $row['strain2']?> [ by <?php echo $row['winery']; ?> ]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            }
                            $query = 'SELECT * FROM wines WHERE strain = "option3" AND stock > 0';
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
                                            | <?php echo $row['strain2']?> [ by <?php echo $row['winery']; ?> ]
                                            </span>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            } ?>
                    </ul>
                </div>
            </div>
            <div class="collapsableBox" type="button" data-bs-toggle="collapse" data-bs-target="#collapsable5"><h4>MARIDAJE</h4></div>
            <div class="collapse multi-collapse collapsableContent" id="collapsable5">
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
                                            <?php echo $row['name']; ?>
                                        </p>
                                        <p class="price">$<?php echo $row['price']; ?></p>
                                    </li>
                            <?php }
                            } ?>
                    </ul>
                </div>
            </div>
            <h4 class="subMenu">::Varios::</h4>
            <div class="collapsableBox" type="button" data-bs-toggle="collapse" data-bs-target="#collapsable6"><h4>BEBIDAS</h4></div>
            <div class="collapse multi-collapse collapsableContent" id="collapsable6">
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
</script>
<?php include('pages/footer.php'); ?>