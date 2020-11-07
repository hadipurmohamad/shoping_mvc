var canavas = document.getElementById("canvas");
var c=canavas.getContext("2d");
canavas.Width = window.innerWidth;
canavas.Height =window.innerHeight;

var mouse=false;
c.lineJoin="round";
c.lineCap="round";
var positionX,positionY;
var brush = document.getElementById("brush");
var erase = document.getElementById("erase");
var myColor = document.getElementById("myColor");
var myRange = document.getElementById("myRange");
var reset = document.getElementById("reset");
var save = document.getElementById("save");
var savelink = document.getElementById("savelink");


function getCoordinates(canavas, e) {
    var rect = canavas.getBoundingClientRect();
    return{
        x:e.clientX -rect.left,
        y: e.clientY - rect.top 
    }

}
function brushDraw(canavas, positionX, positionY) {
    if (mouse) {
       c.lineTo(positionX, positionY);
       c.stroke();
       canavas.style.cursor = "crosshair";
   }
}
function brushMove(e) {
    
var coordinates = getCoordinates(canavas, e);
positionX = coordinates.x;
positionY = coordinates.y;

brushDraw(canavas, positionX, positionY);
}
function brushDown(e) {
    mouse = true;
     canavas.style.cursor = "crosshair";
    var coordinates=getCoordinates(canavas,e);
    positionX=coordinates.x;
    positionY=coordinates.y;
    c.beginPath();
    c.moveTo(positionX, positionY);
    c.lineTo(positionX, positionY);
    c.stroke();
}
function brushUp(e) {
    mouse = false;
    canavas.style.cursor = "default";
}
function brushClick(params) {
    erase.style.border = "none";
    var brushColor = document.getElementById("myColor");
    c.strokeStyle=brushColor.value;
    brush.style.border = "2px solid red" ;
    canavas.addEventListener("mousedown",brushDown,false);
    canavas.addEventListener("mousemove",brushMove,false);
    canavas.addEventListener("mouseup",brushUp,false);
}
function eraseClick() {
     c.strokeStyle = "white";
     brush.style.border = "none";
       erase.style.border = "2px solid red";
}
function myColorClick() {
    c.strokeStyle = myColor.value;
}
function myRangeClick() {
   c.lineWidth = myRange.value;
}
function resetClick() {
    c.clearRect(0, 0, canavas.width, canavas.height);
}
function saveClick() {
  var image = canavas.toDataURL();
 
  var savelink = document.getElementById("savelink");
  var inputname = document.getElementById("name");
var name = inputname.value;
  var url = "index.php?c=saveimage";
//   var url = "index.php?c=saveimage&name="+name+"&url=" + image;
// console.log(canavas);
// savelink.href=url;
}

brush.addEventListener("click",brushClick);
erase.addEventListener("click",eraseClick);
reset.addEventListener("click",resetClick);
save.addEventListener("click",saveClick);
myColor.addEventListener("change", myColorClick);
myRange.addEventListener("change", myRangeClick);





















//--------------------------------------------------
var button1 =document.getElementById("save");
var button2 =document.getElementById("reset");
function click1(params) {
    document.getElementById("save").style.background = "#900C3F";
}
function click2(params) {
    document.getElementById("save").style.background = "";
}
function click3(params) {
    document.getElementById("reset").style.background = "#900C3F";
}
function click4(params) {
    document.getElementById("reset").style.background = "";
}
button1.addEventListener("mousedown",click1);
button1.addEventListener("mouseup",click2);
button2.addEventListener("mousedown",click3);
button2.addEventListener("mouseup",click4);
//-------------------------------------------------