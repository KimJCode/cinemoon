<!DOCTYPE html>
<html lang = "de">
    <head>
        <title> cinemoon-Über uns </title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-Über uns">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit, Über uns, Über-uns">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/style1.css">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/styleUeberUnsSeite.css">
        <link rel = "icon" href = "Medien/Bilder/icon.png">
    </head>

    <body>
        <?php
            include("Medien/phpSkripte/header.php");
        ?>
        <main>
            <article>
               <h1> Über uns </h1>
               <div class = "Gridcontainer"> <!--CSS GRID CONTAINER Start-->
                   <div class = "bildcontainer" id="eins"> <!--Geschichte Start-->
                        <img src ="Medien/Bilder/pexels-clem-onojeghuo-375885.jpg" alt="bild vom kino">
                        <!-- https://www.pexels.com/photo/orange-central-cinema-led-signage-375885/ -->
                   </div>
                   <div class = "textcontainer" id="zwei">
                        <h2>Geschichte</h2>
                        <p>
                            Angefangen haben wir Oktober 2021, wo wir noch wenig Ahnung, aber eine große Vision hatten, 
                            wie ein modernes Kino der Gegenwart aussehen muss. Dazu haben wir als wahre Trierer ein Kinokonzept
                            entwickelt und dann auch in Trier umgesetzt. 
                        </p>
                   </div> <!--Geschichte Ende-->
                    <div class = "textcontainer" id="drei">  
                        <h2>Mitarbeiter</h2><!--Mitarbeiter Start-->
                        <p>
                            Daniele Amore <br>
                            Philipp Le <br>
                            Julius Steinbach <br>
                        </p>
                    </div>
                    <div class = "bildcontainer" id="vier"> 
                        <img src ="Medien/Bilder/pexels-clem-onojeghuo-375885.jpg" alt="bild vom kino">
                    </div> <!--Mitarbeiter Ende-->
                    <div class = "bildcontainer" id = "fünf"> <!--Philosophie Start-->
                            <img src ="Medien/Bilder/giammarco-zeH-ljawHtg-unsplash.jpg" alt="bild vom kino">
                            <!-- https://unsplash.com/photos/zeH-ljawHtg--> 
                    </div>
                    <div class = "textcontainer" id="sechs"> 
                        <h2>Philosophie</h2>
                        <p>
                            Unsere Philosophie ist simpel, wir wollen Kinos an die moderne Welt wieder anbinden und gegenüber Online Streaming Anbietern eine wirkliche Alternative sein.
                        </p>
                    </div> <!--Philosophie Ende-->
                    <div class = "textcontainer" id ="sieben"> <!--Adresse Start-->
                        <h2>Adresse</h2>
                        <p>
                            Schneidershof <br>
                            54293 Trier <br>
                            Deutschland <br>
                        </p>
                    </div>
                    <div id= "acht">
                        <iframe class="map_canvas" src="https://www.openstreetmap.org/export/embed.html?bbox=6.6224613780579755%2C49.765276699520996%2C6.6347458953461835%2C49.77102823729162&amp;layer=mapnik&amp;marker=49.768152553711474%2C6.62860363670211"></iframe>
                    </div>
               </div>><!--Adresse Ende-->
            </article><!--CSS GRID CONTAINER Ende-->
            
        </main>
        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
    </body>
</html>