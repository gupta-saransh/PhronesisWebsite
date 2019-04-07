var deadline = new Date("march 28, 2019 23:59:59").getTime(); 

var x = setInterval(function() {

var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML =0;//days ;
document.getElementById("hour").innerHTML =0;//hours;
document.getElementById("minute").innerHTML =0;// minutes;
document.getElementById("second").innerHTML =0;//seconds;
var percent = Math.round(((365-days)/365)*100);
var element = document.getElementById("myprogressBar");
   var width = percent;
       element.style.width = width+ '%';
       element.innerHTML = width * 1  + '%';
if (t < 0) {
        clearInterval(x);
        document.getElementById("day").innerHTML ='0';
        document.getElementById("hour").innerHTML ='0';
        document.getElementById("minute").innerHTML ='0' ;
        document.getElementById("second").innerHTML = '0'; }
}, 1000);
