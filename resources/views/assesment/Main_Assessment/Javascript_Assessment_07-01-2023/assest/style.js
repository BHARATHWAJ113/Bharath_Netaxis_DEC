var rgbcolor = [];
var arr = [];
var bha = [];
var correctarr = [];
var wrongarr =[];
var display = document.querySelector("#display");
var correct = document.querySelector("#correct");
var wrong = document.querySelector("#wrong");
var attempt = document.querySelector("#attempt");
var percent = document.querySelector("#percent");
for (var i = 0; i < 10; i++) {
    for (var j = 0; j < 3; j++) {
        var a = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        var c = Math.floor(Math.random() * 256);
        rgbcolor[j] = "rgb(" + a + ", " + b + ", " + c + ")"
    }
    var color = {
        color1: rgbcolor[0],
        color2: rgbcolor[1],
        color3: rgbcolor[2],
        correctcolor: rgbcolor[Math.floor(Math.random() * 3)],
        pick: false,
    }
    arr.push(color)

    display.innerHTML = colorrow;

    var colorrow = "";
    arr.forEach(function (color, i) {
        colorrow += `<tr>
        <td class="td"><b>${color.correctcolor}</b></td>
        <td><input type='radio' name=${i} onclick ="checkRadio('${color.correctcolor}','${color.color1}','${i}')"></td><td class="td"><label style ="background:${color.color1};width:200px;height:50px;border-radius: 25px;"></label></td>
        <td><input type='radio' name=${i} onclick ="checkRadio('${color.correctcolor}','${color.color2}','${i}')"></td><td class="td"><label style ="background:${color.color2};width:200px;height:50px;border-radius: 25px;"></label></td>
        <td><input type='radio' name=${i} onclick ="checkRadio('${color.correctcolor}','${color.color3}','${i}')"></td><td class="td"><label style ="background:${color.color3};width:200px;height:50px;border-radius: 25px;"></label></td>
        </tr>`


    })

}

function checkRadio(correctcolor, picked, i) {
    if (correctcolor == picked) {
        arr[i].pick = true;
        console.log("Correct");
    }
    else {
        console.log("wrong");
    }
}

function submit() {
    percent.classList.remove('hide');
    attempt.textContent = 1;
    var newattempt = [];
    arr.forEach(function (color, i) {

        if (arr[i].pick == false) {
            newattempt.push(arr[i])
        }




        var colorrow = "";

        newattempt.forEach(function (color, i) {

            colorrow += `<tr>
                <td class="td"><b>${color.correctcolor}</b></td>
                 <td><input type='radio' name=${i} onclick="checkRadio('${color.correctcolor}','${color.color1}','${i}')"></td><td class="td"><label style ="background:${color.color1};width:200px;height:50px;border-radius: 25px;"></label><td>
                 <td><input type='radio' name=${i} onclick="checkRadio('${color.correctcolor}','${color.color2}','${i}')" ></td><td class="td"><label style ="background:${color.color2};width:200px;height:50px;border-radius: 25px;"></label><td>
                 <td><input type='radio' name=${i} onclick="checkRadio('${color.correctcolor}','${color.color3}','${i}')"></td><td class="td"><label style ="background:${color.color3};width:200px;height:50px;border-radius: 25px;"></label><td>
    
                <tr>`

        })

        display.innerHTML = colorrow;
        if (arr[i].pick == true) {
           bha.push(arr[i].pick == true);
            document.querySelector("#percentage").textContent = ' ' + (bha.length / 10 * 100) + '%';
            correctarr.push(arr[i]);
        }
        else{
            wrongarr.push(arr[i]);
        }

    })
    var correctprint = "";
    correctarr.forEach(function(item){
        
        correctprint += `<li> ${item.correctcolor} </li>`
    })
    correct.innerHTML = correctprint;
    var wrongprint ="";
    wrongarr.forEach(function(itemb){

        wrongprint += `<li> ${itemb.correctcolor} </li>`
       lastpage.classList.remove('hide');
    })
    wrong.innerHTML = wrongprint;
    
}