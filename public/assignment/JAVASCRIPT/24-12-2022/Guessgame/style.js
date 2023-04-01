var guess = Number(prompt("Guess a number"));
var snumber = 10;
if (guess == snumber) {
    alert("You got it right!");
}
else if (guess > snumber) {
    alert("Too high. Guess Another Number!");
}
else {
    alert("Too low. Guess Another Number!")
}