<p>
    Sie haben eine Frage die wir Ihnen über unsere Website nicht erklären konnten? <br>
    Kein Problem, füllen Sie bitte einfach das unten aufgeführte Formular aus, unsere Mitarbeiter werden sich so schnell wie möglich um Ihr Anlegen kümmern.
</p>

<form id = "form" action = "Action.php" method = "post"> <!-- Bei method Post sieht man anders als bei "GET" die Parameter nicht in der URL -->
    <p class = "special">
        Anrede: <br>
        <select name = "salutation"> 
            <option id = "salutation-sir">Herr</option>
            <option id = "salutation-madame">Frau</option>
            <option id = "salutation-divers">Divers</option>
        </select>
    </p>
    <p class = "special">
        Ihr Vor- und Nachname: <br><input id = "vor-nachname" type = "text" name = "name">
        <!-- <label for ="">Max Mustermann</label> --> <!-- Hier nachschauen wieso es nicht klappt mit dem label-->
    </p>
    <p class = "special">
        Ihre E-Mail: <br><input id = "id-email" type= "email" name = "email">
    </p>
    <p class = "special">
        Bitte geben Sie eine Kategorie an: <br>
        <select name = "category">
            <option id = "category-work">Arbeit</option>
            <option id = "category-security">Sicherheit</option>
            <option id = "category-costs">Kosten</option>
            <option id = "category-others">Sonstiges</option>
        </select>
    </p>
    <p class = "special">
        <!-- Hier sollte man noch ein limit an Wörtern festsetzen -->
        Bitte stellen Sie Ihre Frage: <br>
        <textarea id = "textarea-question" name = "question" cols = "100" rows = "10"></textarea>
    </p>
    <p class = "special">
        <input type = "submit" value = "Abschicken"> <input type = "reset" value = "Abbrechen">
    </p>
    <div id = "message-container"> <!-- Hier kommt die Fehlermeldung rein falls man zum Beispiel das "@" bei der E-Mail vergessen hat --> 
    
    </div>
</form>