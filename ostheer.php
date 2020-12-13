<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NobOfHeroes2</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.16/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.16/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.16/dist/js/uikit-icons.min.js"></script>



<body>
<div class="cabeza"><?php require 'require/cabezera.php' ?></div>

<div class="infoprincipal">
    <button id="botfac" class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-slide">Faction Info</button>
    <div id="offcanvas-slide" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h3> Ostheer</h3>

        <p>Like the Wehrmacht faction in Company of Heroes 1, The Ostheer have a well-trained and more organized troop composition when compared to the allies. Many of their units also lack versatility. Instead, each unit has a specific role on the battlefield. Many of their units scale better into later phases of the match and they have some of the strongest support weapons in the game.</p>

    </div>
    </div>
</div>
<hr id="divisor" class="uk-divider-small">
    <!--FIN DIVITSION-->

<div class="axis">
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
<h3 class="uk-card-title">KampfGruppe Headquarters</h3>
<ul uk-accordion="multiple: true">
    <li >
        <a class="uk-accordion-title" href="#"> Pioneers</a>
        <div class="uk-accordion-content">
            <p>The Wehrmacht starts the game with a single pioneer squad. They can construct buildings and can be effective at close range, particularly when upgraded with a flamethrower.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">MG42 Heavy Machine Gun</a>
        <div class="uk-accordion-content">
            <p>The MG42 team is a four-man squad, operating a heavy machine gun. Can suppress and pin enemy squads.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Panzergrenadiers (Requires Battle Phase 1)</a>
        <div class="uk-accordion-content">
            <p>Panzergrenadiers can be built upon researching battle phase 1. They are heavy infantry that can be repurposed to tank hunters.</p>
        </div>
    </li>
</ul>
</div>
<div id="tes" class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
<h3 class="uk-card-title">Infanterie Kompanie</h3>
<ul uk-accordion="multiple: true">
    <li>
        <a class="uk-accordion-title" href="#">Grenadiers</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">GrW 34 Mortar Team</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Sniper</a>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
</div>

<div id="tes" class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
<h3 class="uk-card-title">Leichtie Support Kompanie</h3>
<ul uk-accordion="multiple: true">
    <li>
        <a class="uk-accordion-title" href="#">Pak 40 7.5cm Anti-tank Gun</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">SdKfz 251 Halftrack</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">SdKfz 221/222 Scout Car</a>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
</div>

<div id="tes" class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
<h3 class="uk-card-title">Support Armoured Korps</h3>
<ul uk-accordion="multiple: true">
    <li>
        <a class="uk-accordion-title" href="#">StuG III Ausf.G Assault Gun</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Panzer IV</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Ostwind</a>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
</div>

<div id="tes" class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
<h3 class="uk-card-title">Heavy Panzer Korps</h3>
<ul uk-accordion="multiple: true">
    <li>
        <a class="uk-accordion-title" href="#">Brummbar</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Panzerwerfer Rocket</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Panther</a>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
</div>

</div>



</body>
</html>


<style>
body {
    margin: 0;
    padding: 0;
   
    
}

.infoprincipal {
    margin-top: 70px;
    margin-left: 800px;
    
}

#divisor {
    margin-left: 825px;
}

#listaunidades {
    display:inline-block;
    padding-left:1px;
    padding-right:1px;
    margin-left: 00px;
    text-align: left;
}

.axis {
    margin-left: 570px;
}

#tes {
    margin-top: 20px;
}

</style>