<!DOCTYPE html>
<html lang = "de">
    <head>
        <title>cinemoon</title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-Homepage">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
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
                <h1> Highlights </h1>
                <section class = "highlights">
                    <a href = "Filmseite1.html" title = "James-Bond: No Time to Die">
                        <img class = "leftpicture" src = "Medien/Bilder/JamesBond.jpg" alt = "Titelbild von James Bond: No Time to Die">
                    </a>
                    <a href = "Filmseite3.html" title = "Tenet">
                        <img class = "middlepicture" src = "Medien/Bilder/Tenet.jpg" title = "Bild für die AnimeNight">
                    </a>
                </section>  <!-- Der Grund für zwei Boxen ist, dass wenn man die Seite minimiert immer mindestens zwei Bilder nebeneinander sind -->
                <section class = "highlights">
                    <a href = "Filmseite4.html" title = "Starwars: Der Aufstieg der Skywalker">
                        <img class = "rightpicture" src = "Medien/Bilder/Starwars.jpg" title = "Titelbild für Starwars">
                    </a>
                    <a href = "Gastroseite.html" title = "Rabattaktion">
                        <img class = "middlepicture" src = "Medien/Bilder/Rabatt.jpeg" alt = "Rabatt-Bild">
                    </a>
                </section>

                <h1> Neuigkeiten bei cinemoon </h1>
                <section class = "news">
                    <img src = "Medien/Bilder/mouth-nose-protection.png" alt = "Mund-Nasen-Maskenpflicht"> <!-- alt wird dem Nutzer angezeigt, falls das Bild nicht lädt -->
                    <p> In all unseren Kinos gelten die vom Staat verhängten <strong>Coronagesetze</strong> (darunter 3G, Abstandsregel als auch Maskenpflicht), wir bitten
                    Sie, sich an die Regeln zu halten. <br> Eine nicht Einhaltung ist eine <strong>Straftat</strong>. Aufgrund der Abstandsregel, sind unsere Säle angepasst.</p>
                    <br><br>
                    <img src = "Medien/Bilder/we-are-hiring.jpeg" alt = "Wir stellen neues Personal ein"> <!-- title wiederum wird dem Nutzer beim über dem Bild hovern angezeigt -->
                    <p> Du möchtest in modernsten Kinos, im modernsten Arbeitsklima mit bester Work-Life-Balance arbeiten? <br> Dann ist heute dein Glückstag! <br> Wir suchen neues motiviertes
                    Personal für mehrere Kinostandorten, sei es ein Vollzeitjob, Nebenjob oder einfach nur ein Ferienjob.<br> (melde dich einfach bei der zuständigen Person unter <a href = "Seiten/Kontaktseite.html" title = "Verlinkung zur Kontaktseite" > Kontakt</a>)</p>
                </section>

                <h1> Anstehende Events </h1>
                <section class = "events">
                    <img src = "Medien/Bilder/sorry.jpeg" alt = "Es tut uns Leid">
                    <p> Die Gesundheit unserer Besucher ist unsere oberste Priorität. <br> Aufgrund <strong>Ihrer eigenen Sicherheit</strong> und der momentanen Lage der Coronapandemie haben wir uns dazu entschieden <strong>keine Events</strong> zu hosten, wir bitten um Entschuldigung</p>
                    <br><br>
                </section>
            </article>
        </main>

        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
        
    </body>
</html>