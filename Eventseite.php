<!DOCTYPE html>
<html lang = "de">
    <head>
        <title> cinemoon-Events </title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-Eventseite">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit, Events">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/style1.css">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/styleEvent.css">
        <link rel = "icon" href = "Medien/Bilder/icon.png">
    </head>

    <body>
    <?php
            include("Medien/phpSkripte/header.php");
        ?>

        <main>
            <article>
                <h1>Events</h1>
                <section class="event">
                    <div class = "eventitem">
                        <div class="imgcon">
                            <h2>Ladies Night</h2>
                            <img src="Medien/Bilder/woman.jpg" alt="Ladies Night Poster">
                        </div>
                        <div class="seitenelemente">
                            <p id="paevent1">
                                Ladies Night bei cinemoon! Genießen Sie eine atemberaubende Nacht unter Frauen mit vergünstigten Wein, Snacks und Ticketpreisen zu den ausgewählten Filmen  
                            </p>
                            <a class="button" href="Eventseiten/LadiesNightEvent.php">Weitere Infos</a>
                        </div>
                    </div>

                    <div class = "eventitem"> 
                        <div class="imgcon">
                        <h2>Anime Night</h2>
                            <img src="Medien/Bilder/AnimeNight.jpg" alt="Anime Night Poster">
                        </div>
                        <div class="seitenelemente">
                            <p id="paevent2">
                                Otakus, versammelt euch! Jedes Jahr veranstaltet cinemoon eine Anime Night, mit jeweils 3 Animes pro Nacht. Von Neuerscheinungen bis zu Klassikern findet man bei uns alles in bester Qualität. Damit wir auch eine japanische Stimmung erzeugen, wird nach Möglichkeit auch Merch zur Verfügung gestellt.
                            </p>
                            <a class="button" href="Eventseiten/AnimeNightEvent.php">Weitere Infos</a>
                        </div>
                    </div>
                
                    <div class = "eventitem">
                        <div class="imgcon">
                            <h2>Childhood Classics</h2>
                            <img src="Medien/Bilder/childhoodclassics.jpg" alt="Childhood Classics Poster">
                        </div>
                        <div class="seitenelemente">
                            <p>
                                Sie wollen Nostalgie wieder aufleben lassen oder einfach den Kindheitsfilm anschauen, den jeder kennt, außer Sie? Dann haben Sie bei uns die Möglichkeit alte Kindheitsklassiker anzuschauen.
                            </p>
                            <a class="button" href="Eventseiten/ChildHoodClassics.php">Weitere Infos</a>
                        </div>
                    </div>
                </section>  
            </article>
        </main>

        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
    </body>
</html>