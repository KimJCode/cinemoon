<!DOCTYPE html>
<html lang = "de">
    <head>
        <title>cinemoon</title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-Homepage">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/styleIndex.css">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/style1.css">
        <link rel = "icon" href = "Medien/Bilder/icon.png">
    </head>
    <body>
        <?php
            include("Medien/phpSkripte/header.php");
        ?>
        <main>
            <article>
                <h1>Homepage</h1>
                <section>
                    <h2> Highlights </h2>
                    <div class = "highlights">
                        <a href = "Filmseite1.php" title = "James-Bond: No Time to Die">
                            <img class = "leftpicture" src = "Medien/Bilder/JamesBond.jpg" alt = "Titelbild von James Bond: No Time to Die">
                        </a>
                        <a href = "Filmseite3.php" title = "Tenet">
                            <img class = "middlepicture" src = "Medien/Bilder/Tenet.jpg" title = "Bild für die AnimeNight">
                        </a>
                        <a href = "Filmseite4.php" title = "Starwars: Der Aufstieg der Skywalker">
                            <img class = "rightpicture" src = "Medien/Bilder/Starwars.jpg" title = "Titelbild für Starwars">
                        </a>
                        <a href = "Gastroseite.php" title = "Rabattaktion">
                            <img class = "middlepicture" src = "Medien/Bilder/Rabatt.jpeg" alt = "Rabatt-Bild">
                        </a>
                    </div>
                </section>
                <section>
                    <h2>Neuigkeiten</h2>
                    <div class = "news">
                        <div class="imagecontainer">
                            <img src = "Medien/Bilder/mouth-nose-protection.png" alt = "Mund-Nasen-Maskenpflicht"> <!-- alt wird dem Nutzer angezeigt, falls das Bild nicht lädt -->
                        </div>
                        <p> In all unseren Kinos gelten die vom Staat verhängten <strong>Coronagesetze</strong> (darunter 3G, Abstandsregel als auch Maskenpflicht), wir bitten
                        Sie, sich an die Regeln zu halten. <br> Eine nicht Einhaltung ist eine <strong>Straftat</strong>. Aufgrund der Abstandsregel, sind unsere Säle angepasst.</p>
                        <div class="imagecontainer">
                        <img src = "Medien/Bilder/we-are-hiring.jpeg" alt = "Wir stellen neues Personal ein"> <!-- title wiederum wird dem Nutzer beim über dem Bild hovern angezeigt -->
                        </div>
                        <p> Du möchtest in modernsten Kinos, im modernsten Arbeitsklima mit bester Work-Life-Balance arbeiten? <br> Dann ist heute dein Glückstag! <br> Wir suchen neues motiviertes
                        Personal für mehrere Kinostandorten, sei es ein Vollzeitjob, Nebenjob oder einfach nur ein Ferienjob.<br> (melde dich einfach bei der zuständigen Person unter <a href = "Kontaktseite.php" title = "Verlinkung zur Kontaktseite" > Kontakt</a>)</p>
                    </div>
                </section>
                <section>
                    <h2> Anstehende Events </h2>
                    <div class = "events">
                        <div class = "imagecontainer">
                            <img src = "Medien/Bilder/sorry.jpeg" alt = "Es tut uns Leid">
                        </div>
                        <p> Die Gesundheit unserer Besucher ist unsere oberste Priorität. <br> Aufgrund <strong>Ihrer eigenen Sicherheit</strong> und der momentanen Lage der Coronapandemie haben wir uns dazu entschieden <strong>keine Events</strong> zu hosten, wir bitten um Entschuldigung</p>
                    </div>
                </section>
            </article>
        </main>
        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
    </body>
</html>