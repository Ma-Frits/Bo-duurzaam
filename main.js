// Datum
var today = new Date();
var date = today.getDate() + "-" + (today.getMonth() + 1) + "-" + today.getFullYear();

// tijd
`use strict`
var datetime = new Date();
console.log(datetime);
document.getElementById("js--tijd").textContent = datetime; //it will print on html page

`use strict`;
function refreshTime() {
    const timeDisplay = document.getElementById("js--tijd");
    const dateString = new Date().toLocaleString();
    const formattedString = dateString.replace(", ", " - ");
    timeDisplay.textContent = formattedString;
}
setInterval(refreshTime, 1000);

// de grafriek Daniel

var ctx = document.getElementById('myChart');



var stars = [135850, 112122, 148825, 96939, 59763, 8080, 78900];
var frameworks = ['week 1', 'week2', 'week 3', 'week4 ', 'week5', 'week 6', 'week 7'];
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: frameworks,
        datasets: [{
            label: "stroom verbruik per 1 week",
            data: stars,
            backgroundColor: [
                "rgba(102, 255, 102, 0.2)",
                "rgba(255, 102, 255, 0.2)",
                "rgba(102, 204, 255, 0.2)",
                "rgba(255, 0, 0, 0.2)",
                "rgba(0, 51, 102, 0.2)",
            ],
            borderColor: [
                "rgba(102, 255, 102, 1)",
                "rgba(255, 102, 255, 1)",
                "rgba(102, 204, 255, 1)",
                "rgba(255, 0, 0, 1)",
                "rgba(0, 51, 102, 1)",
            ],
            borderWidth: 2,
        }]
    },
});
// eind grafriek Daniel


//zonnenpanelen grafiek Nick
var ctx = document.getElementById('js--zonnepanelen');
var stars = [120000, 80000, 60000, 80000, 9000, 80000, 60000];
var frameworks = ['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', ' Vrijdag', 'zaterdag', 'zondag'];

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: frameworks,
        datasets: [{
            label: 'Zonnepanelen opbrengst in kWh (dummy cijfers)',
            data: stars,
            backgroundColor: [
                "rgba(128,0,128)",
                "rgba(128,0,128)",
                "rgba(128,0,128)",
                "rgba(128,0,128)",
                "rgba(128,0,128)"
            ],
            borderColor: [
                "rgba(128,0,128)",
                "rgba(128,0,128)",
                "rgba(128,0,128)",
                "rgba(128,0,128)",
                "rgba(128,0,128)",
            ],
            borderWidth: 2,
            borderRadius: 5
        }]
    },
})
//eind grafiek Nick
