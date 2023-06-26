    <?php include("../database/db.php"); ?>
    
    <script>
        try{
            let user = localStorage.getItem('user'), password = localStorage.getItem('password')
            $.POST('aparts/validation.php'), {'user': user, 'pass': password}
        }
    </script>
    <?php include('../pages/header.php'); ?>
    <style> <?php include('../css/login.css') ?> </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="mainContainer">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <strong><?= $_SESSION['message'] ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>

                <div class="admin-form shadow p-2 ">
                        <form action="aparts/validation.php" class="card card-body" method="POST">
                            <div class="form-group p-2 formMultipleChoice">
                                <label>Select the user</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user" value="admin1" checked>
                                    <label class="form-check-label">admin 1</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user" value="admin2">
                                    <label class="form-check-label">admin 2</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="pass" value="" class="form-control" autocomplete="off">
                            </div>
                            <input type="submit" class="btn btn-success" value="LogIn" name="submit" >
                    </form>
                </div>
    </div>



<?php include('../pages/footer.php'); ?>