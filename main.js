// Datum
var today = new Date();
var date = today.getDate() +"-"+(today.getMonth()+1)+"-"+ today.getFullYear();

// tijd
`use strict`
var datetime = new Date();
console.log(datetime);
document.getElementById("js--tijd").textContent = datetime; //it will print on html page

`use strict`;
function refreshTime() {
  const timeDisplay = document.getElementById("js--tijd");
  const dateString = new Date().toLocaleString();
  const formattedString = dateString.replace(", "," - ");
  timeDisplay.textContent = formattedString;
}
  setInterval(refreshTime, 1000);
