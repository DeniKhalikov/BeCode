// asking player to choose
playerChoice = prompt("Choose rock, paper or scissors please");

// randomly generate a number for computer choice
computerChoice = Math.random();

// to see computer choice
console.log(computerChoice);

if(computerChoice <=0.33)
{   
    computerChoice = "rock"
}
else if(computerChoice >= 0.33 && computerChoice <= 0.67)
{
    computerChoice = "paper"
}
else(computerChoice < 0.68)
{
    computerChoice = "scissors"
}

var compare = function(choice1, choice2)
{
    if(choice1 == choice2)
    {
        return "it's a tie!";
    }
    else if(choice1 === "rock")
    {
        if(choice2 === "scissors")
        {
            return "rock wins";
        }
        else
        {
                return "paper wins";
        }
    }
    else if(choice2 === "paper")
    {
        if(choice2 === "rock")
        {
            return "paper wins!";
        }
        else
        {
            return "scissors win";
        }
    }


}

compare(playerChoice, computerChoice);
