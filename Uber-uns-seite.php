<!DOCTYPE html>
<html lang = "de">
    <head>
        <title> cinemoon-Über uns </title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-Über uns">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit, Über uns, Über-uns">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="old stylesheet" type = "text/css" href = "Medien/CSS/style1.css">
        <link rel ="new stylesheet" type = "text/css" href = "Medien/CSS/styleUeberUnsSeite.css">
        <link rel = "icon" href = "Medien/Bilder/icon.png">
    </head>

    <body>
        <?php
            include("Medien/phpSkripte/header.php");
        ?>
        <main>
            <article>
               <h1> Über uns </h1>
               <div class = "Gridcontainer">
                   <div class = "bildcontainer" id="eins">
                        <img src ="Medien/Bilder/pexels-clem-onojeghuo-375885.jpg" alt="bild vom kino">
                   </div>
                   <div class = "textcontainer" id="zwei">
                        <h2>Geschichte</h2>
                        <p>
                            Angefangen haben wir Oktober 2021, wo wir noch wenig Ahnung, aber eine große Vision hatten, 
                            wie ein modernes Kino der Gegenwart aussehen muss. Dazu haben wir als wahre Trierer ein Kinokonzept
                            entwickelt und dann auch in Trier umgesetzt. 
                        </p>
                   </div>
                    <div class = "textcontainer" id="drei">
                        <h2>Mitarbeiter</h2>
                        <p>
                            Daniele Amore <br>
                            Philipp Le <br>
                            Julius Steinbach <br>
                        </p>
                    </div>
                    <div class = "bildcontainer" id="vier">
                        <img src ="Medien/Bilder/pexels-clem-onojeghuo-375885.jpg" alt="bild vom kino">
                    </div>
                    <div class = "bildcontainer" id = "fünf">
                            <img src ="Medien/Bilder/giammarco-zeH-ljawHtg-unsplash.jpg" alt="bild vom kino" width="650" height="450"> 
                    </div>
                    <div class = "textcontainer" id="sechs">
                        <h2>Philosophie</h2>
                        <p>
                            Unsere Philosophie ist simpel, wir wollen Kinos an die moderne Welt wieder anbinden und gegenüber Online Streaming Anbietern eine wirkliche Alternative sein.
                        </p>
                    </div>
                    <div class = "textcontainer" id ="sieben">
                        <h2>Adresse</h2>
                        <p>
                            Schneidershof <br>
                            54293 Trier <br>
                            Deutschland <br>
                        </p>
                    </div>
                    <div id= "acht">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Hochschule%20Trier&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
               </div>
            </article>
        </main>
        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
    </body>
</html>