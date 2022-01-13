var form = document.getElementById("form")  //var declarations are globally scoped or function scoped while let and const are block scoped.
var vorNachname = document.getElementById("vor-nachname")
var email = document.getElementById("id-email")
var textareaQuestion = document.getElementById("textarea-question")
var messageContainer = document.getElementById("message-container")

// Wird ausgelöst sobald "submit" (Abschicken) gedrückt wird
form.addEventListener("submit", (s) =>{     //"=>" Wenn etwas ankommt tritt folgendes ein: 
    //Variablen:
    var VorNachname = vorNachname.value     //hier sollte die Value der String sein, welcher angegeben wird
    var Email = email.value 
    var TextareaQuestion = textareaQuestion.value 

    //var c = checkboxCount() Wie bei der Funktion beschrieben war keine Zeit mehr und wir mussten unsere Prioritäten verlegen, vielleicht bleibt am Ende noch genug Zeit um das Projekt Checkboxen zu beenden
    var errors = findErrors(VorNachname, Email, TextareaQuestion) //hier müsste man für checkboxen das "c" noch mitgeben

    //Wenn Fehler gefunden wurden, wird errors.length > 0,
    if(errors.length > 0) {
        s.preventDefault()      //Es wird nix weitergeleitet an den Server/Datenbank
        messageContainer.innerText = errors.join(" ")
        messageContainer.classList.add("red-message")
        //Für die Barrierefreiheit!
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

/*
Diese Funktion schaut wie viele Checkboxen angeklickt wurden
https://www.javascripttutorial.net/javascript-dom/javascript-checkbox/

function checkboxCount() {
    var cb1 = document.querySelector('#checkbox-work')    //man könnte auch die ".getElementById" Methode benutzen
    var cb2 = document.querySelector('#checkbox-security')
    var cb3 = document.querySelector('#checkbox-costs')
    var cb4 = document.querySelector('#checkbox-others')

    let i = 0   //let ermöglicht es Variablen zu deklarieren, deren Gültigkeitsbereich auf den Block, den Befehl oder den Ausdruck beschränkt ist, in dem sie deklariert sind. Der Unterschied zum var (en-US) Schlüsselwort ist, dass der Gültigkeitsbereich auf Blöcke und nicht auf Funktionen bzw. Global beschränkt ist.

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

Diese Funktion hätte man benutzen können für Checkboxen, leider konnte ich aufgrund der Zeit einen Bug im php Skript nicht mehr fixen und wir mussten auf ein select wechseln
*/

function findErrors(VorNachname, Email, TextareaQuestion){
    let errorMessages = []

    //Vor- Nachname validieren:
    if(VorNachname === '' || VorNachname === null){ //Fall: falls nix eingegeben wurde
        errorMessages.push("Bitte geben Sie Ihren Vor- und Nachnamen ein.\n") //Hier wird dem Array folgende Fehlermeldung übergeben falls die If-Anweisung erfüllt ist
    }

    //E-Mail validieren:
    if(Email === '' || Email === null) { 
        errorMessages.push("Bitte geben Sie eine E-Mail an.\n") 
    }

    //Hier könnte man noch nach einem "@" in der E-Mail suchen / Leider keine Zeit mehr gehabt

    /*
    Checkboxen validieren: (Hier wird geschaut das mindestens eine Box angeklickt wurde)

    if(c == 0) {
        errorMessages.push("Bitte wählen Sie mindestens eine Kategorie aus.\n") //".push" Appends new elements to the end of an array, and returns the new length of the array.
    }
    */

    //Frage validieren:
    if(TextareaQuestion === '' || TextareaQuestion === null) {
        errorMessages.push("Bitte geben Sie Ihre Frage an.\n")
    }

    //Hier könnte man noch einen Zeitbuffer machen / Leider keine Zeit mehr gehabt
    return errorMessages
}