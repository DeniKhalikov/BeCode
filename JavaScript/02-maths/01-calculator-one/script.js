/* becode/javascript
 *
 * /02-maths/01-calculator-one/script.js - 2.1: calculatrice
 *
 * coded by leny@BeCode
 * started at 26/10/2018
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(function() {
    // to get the value of an input: document.getElementById("element-id").value

    document.getElementById("addition").addEventListener("click", function() {
        // perform an addition
      
        let firstInput = document.getElementById("op-one").value;
        let secondInput = document.getElementById("op-two").value;
        let equals = parseInt(firstInput) + parseInt(secondInput);
        alert(equals);


    });

    document.getElementById("substraction").addEventListener("click", function() {
        // perform an substraction

        let firstInput = document.getElementById("op-one").value;
        let secondInput = document.getElementById("op-two").value;
        let equals = parseInt(firstInput) - parseInt(secondInput);
        alert(equals);
    });

    document.getElementById("multiplication").addEventListener("click", function() {
        // perform an multiplication
        let firstInput = document.getElementById("op-one").value;
        let secondInput = document.getElementById("op-two").value;
        let equals = parseInt(firstInput) * parseInt(secondInput);
        alert(equals);
    });

    document.getElementById("division").addEventListener("click", function() {
        // perform an division
        let firstInput = document.getElementById("op-one").value;
        let secondInput = document.getElementById("op-two").value;
        let equals = parseInt(firstInput) / parseInt(secondInput);
        alert(equals);
    });
})();
