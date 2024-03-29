// Datum
function refreshTime() {
  const timeDisplay = document.getElementById("js--tijd");
  const dateString = new Date().toLocaleString();
  const formattedString = dateString.replace(",", "-");
  timeDisplay.textContent = formattedString;
}
setInterval(refreshTime, 1000);

//weerbericht text
var weerberichtText = document.getElementById("js--weer").innerHTML = ["Weer van vandaag"];
var weerberichtText = document.getElementById("js--weer").innerHTML = ["Weer van vandaag"];

// de grafriek Daniel
var options = {
  series: [{
    name: 'Daniel',
    data: [2903.23, 3176.87, 3143, 3190.90,]
  }, {
    name: 'nick',
    data: [2335.25, 3141.50, 3157.00, 3173.29,]
  }, {
    name: 'Frits',
    data: [1100, 1700, 1500, 1500,]
  }, {
    name: 'Milou',
    data: [2100, 2500, 2500, 1300,]
  }],
  chart: {
    type: 'bar',
    height: 350,
    stacked: true,
    toolbar: {
      show: true
    },
    zoom: {
      enabled: true
    }
  },
  responsive: [{
    breakpoint: 480,
    options: {
      legend: {
        position: 'bottom',
        offsetX: -10,
        offsetY: 0
      }
    }
  }],
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 10
    },
  },
  xaxis: {
    type: 'datetime',
    categories: ['week 1', 'week2', 'week3', 'week4',
    ],
  },
  legend: {
    position: 'right',
    offsetY: 40
  },
  fill: {
    opacity: 1
  }
};

var chart = new ApexCharts(document.getElementById("chart-zonnepanelen"), options);
chart.render();

// // eind grafriek Daniel

// //zonnenpanelen grafiek Nick
var ctx = document.getElementById('js--zonnepanelen');
var stars = [211, 184.98, 202.45, 206, 15];
var frameworks = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: frameworks,
    datasets: [{
      label: 'Zonnepanelen opbrengst in kWh',
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

// Waterverbuik Milou
var ctx = document.getElementById('js--waterVerbruik');
var stars = [69.7, 185.7, 129.7, 245.7, 129.7, 305.7, 189.7];
var frameworks = ['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', ' Vrijdag', 'zaterdag', 'zondag'];

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: frameworks,
    datasets: [{
      label: 'Schatting van de hoeveelheid waterverbruik van 1 persoon per week',
      data: stars,
      backgroundColor: "rgba(54, 162, 235, 0.2)",
      borderColor: "rgba(54, 162, 235, 1)",
      borderWidth: 1,
      fill: true,
      lineTension: 0
    }],
  },
})
// einde grafiek Milou

// Weerbericht ophalen Nick
const paragraph = document.getElementById("js--showname");
const tekst = document.getElementById("js--showtekst");
const graden = document.getElementById("js--graden");
const wind = document.getElementById("js--wind");
const iconcode = document.getElementById("js--weercode");
const deweerimage = document.getElementById("js--image");


let data = fetch("https://api.openweathermap.org/data/2.5/weather?q=amsterdam,nl&APPID=b9ec424d25dece5f7dc9b2cd374f5806")
  .then(
    function (response) {
      console.log("we got a response");
      console.log(response);
      return response.json();

    })
  .then(
    function (realData) {
      paragraph.innerHTML = realData.name;
      tekst.innerHTML = realData.weather[0].main;
      graden.innerHTML = Math.round(realData.main.temp - 272, 15) + '&deg;' + "C";
      wind.innerHTML = realData.wind.speed + " km/u"; 
      iconcode.innerText = realData.weather[0].icon;
      deweerimage.src = "http://openweathermap.org/img/w/" + iconcode.innerHTML + ".png";
    }
  );

// einde weerbericht Nick
