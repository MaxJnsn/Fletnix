<?php
  $titel = "Spongebob SquarePants Seizoen 1";
  $duur = "20 minuten";
  $regisseur = "Micheal Bay";
  $hoofdrolspelers = ['Nicholas Cage, ', 'Tom Cruise, ', 'Amber Heard'];
  $releaseDate = "29 april 2003";
?>
<!-- Hieronder komt dan weer het oude HTML-document. -->
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>FLETNIX</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/stylesheet.spongebill.css">
</head>

<body>
    <header>
        <h1><a href="index.html">FLETNIX</a></h1>
        <p><a href="serieoverzicht.html">Series</a></p>
        <p><a href="filmoverzicht.html">Films</a></p>
        <p><a href="overons.html">Over ons</a></p>
        <h2> <a href="aanmeldformulier.html">Mijn account</a></h2><img src="images/user-icon-png-6.png" alt="avatar">
    </header>
    <main>
        <h1><?php echo $titel ?></h1>
        <div class="slider-holder">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <div class="image-holder">
                <img src="images/slider/spongebob.jpg" alt="Spongebob1" class="slider-image" />
                <div class="slider-image">
                    <iframe width="800" height="400" src="https://www.youtube.com/embed/HfiH_526qhY"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <img src="images/slider/SpongeBob-Netflix.jpg" alt="Spongebob2" class="slider-image" />
            </div>
            <div class="button-holder">
                <a href="#slider-image-1" class="slider-change"></a>
                <a href="#slider-image-2" class="slider-change"></a>
                <a href="#slider-image-3" class="slider-change"></a>
            </div>
        </div>
        <div class="flexcontainer">
            <div class="AfleveringContainer">
                <div class="dropdownSeizoen">
                    <button class="drop">Seizoen</button>
                    <div class="dropdown-content">
                        <a href="spongebillseiz1.php">Seizoen 1</a>
                        <a href="spongebillseiz2.php">Seizoen 2</a>
                        <a href="spongebillseiz3.php">Seizoen 3</a>
                    </div>
                </div>
                <p>1. Hulp gevraagd 27:00</p>
                <p>2. Bellenkraam 20:00</p>
                <p>3. Kwallenvissen 30:00</p>
                <p>4. Vaarschool 24:00</p>
                <p>5. Pizza bezorging 38:00</p>
            </div>
            <div class="TextContainerMid">
                <p>Op de bodem van de oceaan, in het stadje Bikinibroek woont een zeespons met de naam SpongeBob
                    SquarePants.
                    Hij heeft de vorm van een spons, is felgeel van kleur en heeft gaten over zijn gehele lichaam.
                    Samen met zijn vrienden beleeft hij knotsgekke avonturen.</p>
            </div>
            <div class="TextContainerRechts">
                <p>Regiseur:<br><?php echo $regisseur ?></p>
                <p>Cast:<br><?php foreach($hoofdrolspelers as $hoofdrolspeler) {
                                    echo $hoofdrolspeler; 
                                } ?></p>
                <p>Released:<br><?php echo $releaseDate ?></p>
            </div>
        </div>
    </main>
</body>

</html>