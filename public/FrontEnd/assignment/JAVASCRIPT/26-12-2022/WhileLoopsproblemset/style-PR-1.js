console.log("Print All number between -10 and 19.");
count = -10 ; 
while (count < 19) {
    console.log(count);
    count ++;
}

console.log("Print All even number between 10 and 40.");
count = 10;
while (count <= 40){
    if (count % 2 == 0){
        console.log(count);
    }
    count++;
}


console.log("Print All Odd number between 300 and 333.");
count = 300;
while (count < 333){
    if (count % 2 !== 0){
        console.log(count);
    }
    count++;
}

console.log("Print All number  are divisible by 5 and 3 between 5 and 50.");
num = 5;
while(num < 50) {
    if (num % 5 == 0 && num % 3 == 0) {
        console.log(num);
    }
    num++;
}