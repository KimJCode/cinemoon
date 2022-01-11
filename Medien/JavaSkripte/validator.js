var form = document.getElementById("form")  //var declarations are globally scoped or function scoped while let and const are block scoped.
var vorNachname = document.getElementById("vor-nachname")
var email = document.getElementById("id-email")
var textareaQuestion = document.getElementById("textarea-question")
var messageContainer = document.getElementById("message-container")

// Hier wird gewartet bis submit gedrückt wurde
form.addEventListener("submit", (s) =>{     //"=>" Wenn etwas ankommt tritt folgendes ein: 
    //Variablen
    var VorNachname = vorNachname.value     //hier sollte die Value der String sein, welcher angegeben wird
    var Email = email.value 
    var TextareaQuestion = textareaQuestion.value 

    var c = checkboxCount()
    var errors = findErrors(VorNachname, Email, c, TextareaQuestion)

    //Wenn Fehler gefunden wurden, wird errors.length > 0,
    if(errors.length > 0) {
        s.preventDefault()      //Es wird nix weitergeleitet an den Server/Datenbank
        messageContainer.innerText = errors.join(" ")
        messageContainer.classList.add("red-message")
        if(VorNachname === '' || VorNachname === null) {
            vorNachname.classList.add("red-box")
        }
        if(Email === '' || Email === null) {
            email.classList.add("red-box")
        }
        if(TextareaQuestion === '' || TextareaQuestion === null) {
            textareaQuestion.classList.add("red-box")
        }
    }
    vorNachname.addEventListener("input", () =>{
        vorNachname.classList.remove("red-box")
    })
    email.addEventListener("input", () =>{
        email.classList.remove("red-box")
    })
    textareaQuestion.addEventListener("input", () =>{
        textareaQuestion.classList.remove("red-box")
    })
})

//Diese Funktion schaut wie viele Checkboxen angeklickt wurden
//https://www.javascripttutorial.net/javascript-dom/javascript-checkbox/
function checkboxCount() {
    const cb1 = document.querySelector('#checkbox-work')    //man könnte auch die ".getElementById" Methode benutzen
    const cb2 = document.querySelector('#checkbox-security')
    const cb3 = document.querySelector('#checkbox-costs')
    const cb4 = document.querySelector('#checkbox-others')

    let i = 0 

    if(cb1.checked) {
        i += 1
    }

    if(cb2.checked) {
        i += 1
    }

    if(cb3.checked) {
        i += 1
    }

    if(cb4.checked) {
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
