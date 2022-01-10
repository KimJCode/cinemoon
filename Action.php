<!DOCTYPE html>
<html lang = "de">
    <head>
        <title>cinemoon-supportticket</title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-action">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit, Support">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/style1.css">
        <link rel = "stylesheet" type = "text/css" href = "Medien/CSS/action.css">
        <link rel = "icon" href = "Medien/Bilder/icon.png">
    </head>

    <body>
        <?php
            include("Medien/phpSkripte/header.php");
        ?>

        <main>
            <article>
                <h1> Vielen Dank! </h1>
                <p>
                    Hallo <span><?php echo htmlspecialchars($_POST['anrede']); ?> <?php echo htmlspecialchars($_POST['name']); ?></span>, Ihr Anliegen wurde an unsere Mitarbeiter weitergeleitet, wir werden uns so schnell wie möglich um ihr Anliegen kümmern. <br>
                    Hier sind nocheinmal Ihre angegebenen Daten: <br><br>
                    
                    <span>Vor- und Nachname: </span><?php echo htmlspecialchars($_POST['anrede']); ?> <?php echo htmlspecialchars($_POST['name']); ?> <br>
                    <span>E-Mail: </span><?php echo htmlspecialchars($_POST['email']); ?> <br><br>
                    <!-- Hier muss angegeben werden was der User unter den Checkboxen angeklickt hat -->
                    <span>Ihre Frage:</span> <?php echo htmlspecialchars($_POST['question']); ?> <br>
                </p>
            </article>
        </main>

        <?php
            extract($_POST);
            $file=fopen("supportfile.txt", "a"); // "a" Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
            fwrite($file, "Name: ");
            fwrite($file, $name ."\n");
            fwrite($file, "E-Mail: ");
            fwrite($file, $email ."\n");
            fwrite($file, "Frage: ");
            fwrite($file, $question ."\n");
            fwrite($file, "--------------------------------\n");
            fclose($file);
        ?>
        
        <?php
            include("Medien/phpSkripte/footer.php");
        ?>
        
    </body>
</html>