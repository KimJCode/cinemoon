<!DOCTYPE html>
<html lang = "de">
    <head>
        <title>cinemoon-supportticket</title>
        <meta charset = "UTF-8">
        <meta name = "description" content = "cinemoon-action">
        <meta name = "keywords" content = "Kino, Filme, Entertainment, Freizeit, Support">
        <meta name = "autor" content = "Daniele Amore, Philipp Le, Julius Steinbach">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
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
                    Hallo 
                    <span>
                        <!-- Da man Menschen die "Divers" angegeben hat mit verschiedensten Anreden asprechen kann/sollte, haben wir uns dazu entschieden einfach nur den Namen ohne Anrede auszugebenen, falls "Divers" angeklickt wurde -->
                        <?php 
                            if($_POST['salutation'] == "Herr") {
                                echo htmlspecialchars($_POST['salutation']);
                        } 
                        ?>
                        <?php                         
                            if($_POST['salutation'] == "Frau") {
                                echo htmlspecialchars($_POST['salutation']);
                        } 
                        ?>
                        <?php echo htmlspecialchars($_POST['name']);?></span>, Ihr Anliegen wurde an unsere Mitarbeiter weitergeleitet, wir werden uns so schnell wie möglich um ihr Anliegen kümmern. <br>Hier sind nocheinmal Ihre angegebenen Daten: <br><br>
                    
                    <span>Vor- und Nachname: </span>
                    <?php 
                        if($_POST['salutation'] == "Herr") {
                        echo htmlspecialchars($_POST['salutation']);
                        }
                        if($_POST['salutation'] == "Frau") {
                            echo htmlspecialchars($_POST['salutation']);
                        }
                    ?> 
                    <?php echo htmlspecialchars($_POST['name']); ?> <br>
                    <span>E-Mail: </span>
                        <?php echo htmlspecialchars($_POST['email']); ?> <br>
                    <span>Kategorie: </span>
                        <?php echo htmlspecialchars($_POST['category']); ?> <br><br>
                    <span>Ihre Frage:</span> 
                        <?php echo htmlspecialchars($_POST['question']); ?> <br>
                </p>
            </article>
        </main>

        <?php
            extract($_POST); //Import variables into the current symbol table from an array
            $file=fopen("supportfile.txt", "a"); // "a" Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
            fwrite($file, "Name: ");
            fwrite($file, $salutation ." ");
            fwrite($file, $name ."\n");
            fwrite($file, "E-Mail: ");
            fwrite($file, $email ."\n");
            fwrite($file, "Kategorie: ");
            fwrite($file, $category ."\n");
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