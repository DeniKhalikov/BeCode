/* becode/javascript
 *
 * /01-base/03-prompt-if/script.js - 1.3: promp & if
 *
 * coded by leny@BeCode
 * started at 26/10/2018
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(function() {

  // your code here
  var question = prompt("do you want some cake? Please enter yes or no");
  if (question == "no")
  {
    alert("okay")
  }
  else if (question == "yes")
  {
    alert("there you go");
  }
  else{
    alert("try again");
  }

})();