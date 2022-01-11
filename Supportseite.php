<!DOCTYPE html>
<html lang = "de">
    <head>
        <title> cinemoon-Support </title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-Supportseite">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit, Hilfe, Support, Fragen">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/style1.css">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/styleSupportseite.css">
        <script src = "Medien/JavaSkripte/validator.js" defer></script> <!-- Scripts with the defer attribute will prevent the DOMContentLoaded event from firing until the script has loaded and finished evaluating. -->
        <link rel = "icon" href = "Medien/Bilder/icon.png">
    </head>

    <body>
    <?php
        include("Medien/phpSkripte/header.php");
    ?>

        <main>
            <article>
               <h1>Supportseite</h1>
               <h2>FAQ</h2>
               <div class="faqcontainer">
                    <div class="accordion">
                        <div class="accordionitem" id=frage1>
                            <a class="fragetitel" href=#frage1>Wie erreiche ich den Kundenservice?</a>
                            <div class="antwort">
                                <p>
                                    Falls Sie irgendwelche Fragen haben, dann erreichen Sie uns über diese E-Mail: <br>
                                    cinemoon.support@gmail.com <br>
                                    Auch können Sie uns natürlich telefonisch erreichen unter dieser Telefonnummer von 08:00 - 20:00 : <br>
                                    +49 176 59092582 <br>
                                    Nähere Details gibt es auf der <a href = "Kontaktseite.php">Kontaktseite</a>.
                                    Ansonsten können Sie im letzten Reiter auch Kontakt über unser <a href="#userQuestion">Supportticketsystem</a> nehmen.
                                </p>
                            </div>
                        </div>
                    <div class="accordionitem" id=frage2>
                        <a class="fragetitel" href=#frage2>Wie kauft man eine Karte?</a>
                        <div class="antwort">
                            <p>Sie können sich entweder eine Karte in allen zugehörigen cinemoon Kinos erwerben
                                oder einfach auf unserer Website unter Programme, wo sie einfach für Ihren gewünschten 
                                Film eine Karte kaufen können
                            </p>
                        </div>
                    </div>
                    <div class="accordionitem" id=frage3>
                        <a class="fragetitel" href=#frage3>Kann ich mein Ticket umtauschen?</a>
                        <div class="antwort">
                            <p>Selbstverständlich genießen Sie bei cinemoon ein Umtauschrecht, falls Sie doch einen anderen Film schauen wollen.
                                Dies können Sie in jedem cinemoon Kino vor Ort machen.
                                Nutzen Sie Ihr Umtauschrecht vor der Vorstellungszeit des Filmes, den Sie sich nicht anschauen wollen, ansonsten verfällt ihr Umtauschrecht.
                            </p>
                        </div>
                    </div>
                    <div class="accordionitem" id=frage4>
                        <a class="fragetitel" href=#frage4>Was für Zahlungsmöglichkeiten gibt es?</a>
                        <div class="antwort">
                            <p>
                                Bei cinemoon werden Paypal, Debit-, Giro-, Visa- und Mastecard als Online Zahlungsmittel genommen. Sonst können Sie auch vor Ort mit allen genannten Zahlungsmitteln, sonst natürlich auch mit Bargeld.
                            </p>
                        </div>
                    </div>
                    <div class="accordionitem" id=frage5>
                        <a class="fragetitel" href=#frage5>Wie barrierefrei ist cinemoon?</a>
                        <div class="antwort">
                            <p>
                                Wir bei cinemoon versuchen allen Menschen unserer Gesellschaft eine Möglichkeit zu geben, Filme zu genießem. Dies gewährleisten wir mit barrierefreien Eingängen, Fahrstühlen und behindertengerechten Toiletten.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class = "accordionitem" id = "userQuestion">   <!-- Hier soll man eine E-Mail verschicken können (man soll hier ein Formular ausfüllen können) -->
                    <a class = "fragetitel" href = #userQuestion> Sie haben eine andere Frage? </a>
                    <div class = "antwort">
                        <?php
                            include("Medien/phpSkripte/supportticket.php")
                        ?>
                        <br>
                    </div>
                </div>
            </article>
        </main>
        
        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
    </body>
</html>