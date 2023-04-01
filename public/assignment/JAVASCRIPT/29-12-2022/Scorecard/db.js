var P1Buttton = document.querySelector("#p1");
var P2Buttton = document.querySelector("#p2");
var p1s = document.querySelector("#p1s");
var p2s = document.querySelector("#p2s");
var num = document.querySelector("input");
var TSoutput = document.querySelector("p span");
var RButtton = document.querySelector("#r");
var P1Score = 0;
var P2Score = 0;
var gameover = false;
var TS = 5;

alert("Default score point is 5")
P1Buttton.addEventListener("click", function () {
    if (!gameover) {
        P1Score++;
        if (P1Score === TS) {            
            p1s.classList.add("won");
            gameover = true;
        }
        p1s.textContent = P1Score;
    }
});


P2Buttton.addEventListener("click", function () {
    if (!gameover) {
        P2Score++;
        if (P2Score === TS) {
            p2s.classList.add("won");
            gameover = true;
            
        }
        p2s.textContent = P2Score;
    }
});


RButtton.addEventListener("click", function () {
    reset();

});
num.addEventListener("change",function(){
    TSoutput.textContent = this.value;
    TS = Number(this.value);
    reset();
});
function reset(){
    P1Score = 0;
    P2Score = 0;
    p1s.textContent = 0;
    p2s.textContent = 0;
    p1s.classList.remove("won");
    p2s.classList.remove("won");
    gameover = false;
}