<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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

<?php require 'require/cabezera.php' ?>
<body>
<div id="factions" class="uk-card uk-card-default uk-width-1-2@m animate__animated animate__backInLeft">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="https://vignette.wikia.nocookie.net/spearhead/images/5/55/Icons_factions_faction_german_192.png/revision/latest?cb=20190501040619">
            </div>
            
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Ostheer</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Axis</time></p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>The Wehrmacht is the original Axis faction featured in Company of Heroes 2. It is sometimes called Ostheer to avoid confusion with the original Company of Heroes Wehrmacht. It is paired with the Oberkommando West against the allies.</p>
    </div>
    <div class="uk-card-footer">
        <a href="ostheer.php" class="uk-button uk-button-text">Read more</a>
    </div>
</div>
</div>
</body>
</html>


<style>

#factions {
    margin-top: 100px;
    margin-left: 50px;
    width:700px;
    height: 320px;
}

</style>