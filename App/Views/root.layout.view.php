<!DOCTYPE html>
<html lang="sk">
<head>
    <title>FFTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/controlform.js"></script>
    <script src="public/username.js"></script>
</head>
<body>
<div class="title">
    <a href="?c=home&a=index">
        <img src="img/logo2.png" class="logo" alt="logo">
    </a>
</div>
<nav class="navbar navbar-expand-sm navbar-dark justify-content-start">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-start row" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?c=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=forum&page=1">Forum</a>
                </li>
                <?php if (\App\Auth::isLogged()) { ?>
                    <li class="nav-item ml-0">
                        <a class="nav-link" href="?c=home&a=post">Pridanie fotky</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=home&a=profile">Profile</a>
                    </li>
                <?php if (\App\Auth::isAdmin()==1) { ?>
                        <li class="nav-item justify-content-end mr-0">
                            <a class="nav-link" href="?c=auth&a=adminMenu">Admin menu</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item justify-content-end mr-0">
                        <a class="nav-link" href="?c=auth&a=logout">Logout</a>
                    </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Login</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-2">
        <div class="col">
            <?= $contentHTML ?>
        </div>
    </div>
</div>
<div class="foot">
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia
    deserunt mollit anim id est laborum."
    <p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
                 src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                 alt="Ověřit CSS!" />
        </a>
    </p>
</div>
</body>
</html>

