<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>NobOfHeroes2</title>
</head>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.16/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.16/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.16/dist/js/uikit-icons.min.js"></script>
<body>
<div class="uk-position-relative">
    <img src="images/light.jpg" alt="">
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="index.php">NobOfHeroes2</a></li>
                    <li><a href="about.php"><span uk-icon="icon: info; ratio: 0.8"></span>About</a></li>
                    <li>
                        <a href="#"><span uk-icon="icon: users; ratio: 0.8"></span>FACTIONS</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-nav-header">Axis</li>
                                <li><a href="ostheer.php">Ostheer</a></li>
                                <li><a href="#">Oberkommando West</a></li>
                                <li class="uk-nav-header">Aliados</li>
                                <li><a href="#">proximamente</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</body>
</html>