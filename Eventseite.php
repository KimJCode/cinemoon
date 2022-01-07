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
                <section class = "event">
                    <h2>Ladies Night</h2>
                    
                    <div id="womanimgcon">
                        <img src="Medien/Bilder/woman.jpg" alt="Ladies Night Poster">
                    </div>
                    <p id="paevent1">
                        Ladies Night bei cinemoon! Genießen Sie eine atemberaubende Nacht unter Frauen mit vergünstigten Wein, Snacks und Ticketpreisen zu den ausgewählten Filmen  
                    </p>

                    <a id="button1" href="Eventseiten/LadiesNightEvent.html">Weitere Infos</a>
                </section>

                <section class = "event">
                    <h2>Anime Night</h2>
                    
                    <div id="animeimgcon">
                        <img src="Medien/Bilder/AnimeNight.jpg" alt="Anime Night Poster">
                    </div>
                    
                    <p id="paevent2">
                        Otakus, versammelt euch! Jedes Jahr veranstaltet cinemoon eine Anime Night, mit jeweils 3 Animes pro Nacht. Von Neuerscheinungen bis zu Klassikern findet man bei uns alles in bester Qualität. Damit wir auch eine japanische Stimmung erzeugen, wird nach Möglichkeit auch Merch zur Verfügung gestellt.
                    </p>

                    <a id="button2" href="Eventseiten/AnimeNightEvent.html">Weitere Infos</a>
                </section>

                <section class = "event">
                    <h2>Childhood Classics</h2>
                    
                    <div id="ccimgcon">
                        <img src="Medien/Bilder/childhoodclassics.jpg" alt="Childhood Classics Poster">
                    </div>
                    
                    <p id="paevent3">
                        Sie wollen Nostalgie wieder aufleben lassen oder einfach den Kindheitsfilm anschauen, den jeder kennt, außer Sie? Dann haben Sie bei uns die Möglichkeit alte Kindheitsklassiker anzuschauen, vielleicht sogar mit Ihren Kindern, damit diese sehen, mit welchen wunderbaren Filmen ihre Eltern aufgewachsen sind.
                    </p>

                    <a id="button3" href="Eventseiten/ChildHoodClassics.html">Weitere Infos</a>
                    <br><br>
                </section>
            </article>
        </main>

        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
    </body>
</html>