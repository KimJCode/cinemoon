var form = document.getElementById("form")
var vorNachname = document.getElementById("vor-nachname")
var email = document.getElementById("id-email")
var checkboxWork = document.getElementById("checkbox-work")
var checkboxSecurity = document.getElementById("checkbox-security")
var checkboxCosts = document.getElementById("checkbox-costs")
var checkboxOthers = document.getElementById("checkbox-others")
var textareaQuestion = document.getElementById("textarea-question")
var messageContainer = document.getElementById("message-container")

// Hier wird gewartet bis submit gedrückt wurde
form.addEventListener("submit", (s) =>{     //"=>" Wenn etwas ankommt tritt folgendes ein: 
    //Variablen
    var VorNachname = vorNachname.value     //hier sollte die Value der String sein, welcher angegeben wird
    var Email = email.value 
    var CheckboxWork = checkboxWork.value   //auch hier sollte die value = true sein, wenn es ausgewählt ist
    var CheckboxSecurity = checkboxSecurity.value
    var CheckboxCosts = checkboxCosts.value
    var CheckboxOthers = checkboxOthers.value
    var TextareaQuestion = textareaQuestion.value 

    var c = checkboxCount(CheckboxWork, CheckboxSecurity, CheckboxCosts, CheckboxOthers)
    var errors = findErrors(VorNachname, Email, c, TextareaQuestion)

    //Wenn Fehler gefunden wurden, wird errors.length > 0,
    if(errors.length > 0) {
        s.preventDefault()      //Es wird nix weitergeleitet an den Server/Datenbank
        messageContainer.innerText = errors.join(" ")
        messageContainer.classList.add("red-message")
    }
})

//Diese Funktion schaut wie viele Checkboxen angeklickt wurden
function checkboxCount(CheckboxWork, CheckboxSecurity, CheckboxCosts, CheckboxOthers) {
    let i = 0 

    if(CheckboxWork == "1") {
        i += 1
    }

    if(CheckboxSecurity == "2") {
        i += 1
    }

    if(CheckboxCosts == "3") {
        i += 1
    }

    if(CheckboxOthers == "4") {
        i += 1
    }
    
    return i
}

function findErrors(VorNachname, Email, c, TextareaQuestion){
    let errorMessages = []

    //Vor- Nachname validieren:
    if(VorNachname === '' || VorNachname === null){ //Fall: falls nix eingegeben wurde
        errorMessages.push("Bitte geben Sie Ihren Vor- und Nachnamen ein.\n") //Hier wird dem Array folgende Fehlermeldung übergeben
    }

    //E-Mail validieren:
    if(Email === '' || Email === null) { //Fall: falls nix eingegeben wurde
        errorMessages.push("Bitte geben Sie eine E-Mail an.\n") //Hier wird dem Array folgende Fehlermeldung übergeben
    }

    //Hier könnte man noch nach einem "@" in der E-Mail suchen

    //Checkboxen validieren: (Hier wird geschaut das mindestens eine Box angeklickt wurde)
    if(c == 0) {
        errorMessages.push("Bitte wählen Sie mindestens eine Kategorie aus.\n")
    }

    //Frage validieren:
    if(TextareaQuestion === '' || TextareaQuestion === null) {
        errorMessages.push("Bitte geben Sie Ihre Frage an.\n")
    }

    //Hier könnte man noch einen Zeitbuffer machen
    return errorMessages
}
