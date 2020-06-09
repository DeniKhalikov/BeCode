

(function question() {

    let age = prompt("how old are you?");
    let gender = prompt("whats your gender?");
    let town = prompt("what town are you from?");

    if (confirm("so you are " + age + " years old " + gender + " and live in " + town))
    {
        alert("thank you for confirming")
    }
    else
    {
        question()
    }
    
})();
