let permission = prompt("What is your Age?");

if (permission < 18) {
    console.log("You cannot enter the venue");
}
else if(permission >= 18 && permission <= 21) {
    console.log("You can enter but cannot drink");
} 
else {
    console.log("You can enter and drink")
}