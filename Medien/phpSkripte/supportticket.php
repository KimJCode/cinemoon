<p>
    Sie haben eine Frage die wir Ihnen über unsere Website nicht erklären konnten? <br>
    Kein Problem, füllen Sie bitte einfach das unten aufgeführte Formular aus, unsere Mitarbeiter werden sich so schnell wie möglich um Ihr Anlegen kümmern.
</p>

<form action = "Action.php" method = "post"> <!-- Bei method Post sieht man anders als bei "GET" die Parameter nicht in der URL -->
    <p class = "special">
        Anrede:
        <select name = "anrede"> 
            <option value = "Herr">Herr</option>
            <option value = "Frau">Frau</option>
            <option value = "Divers">Divers</option>
        </select>
    </p>
    <p class = "special">
        Ihr Vor- und Nachname: <input type = "text" name = "name" />
    </p>
    <p class = "special">
        Ihre E-Mail: <input type= "text" name = "e-mail" />
    </p>
    <p class = "special">
        Bitte klicken Sie die Art von Anliegen an, welche zu Ihrer Frage passt: <br>
        <span>Arbeit</span> <input type = "checkbox" name = "work"> <br>
        <span>Sicherheit</span> <input type = "checkbox" name = "security"> <br>
        <span>Kosten</span> <input type = "checkbox" name = "costs"> <br>
        <span>Sonstiges</span> <input type = "checkbox" name = "others"> <br>
    </p>
    <p class = "special">
        <!-- Hier sollte man noch ein limit an Wörtern festsetzen -->
        Bitte stellen Sie Ihre Frage: <br>
        <textarea name = "question" cols = "100" rows = "10"></textarea>
    </p>
    <p class = "special">
        <input type = "submit" value = "Abschicken"> <input type = "reset" value = "Abbrechen">
    </p>
</form>

<!-- Hier muss jetzt mit den angegebenen Daten selektiert werden an welche E-Mail die Anfrage geschickt werden soll --> 