<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 20px;
  text-align: center;
  background-color:lightgreen;
  color: black;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}
.image
{
  margin-left:5px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding:30px;
  text-align: center;
  background:brown;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.mera{
  background-color: lightyellow;
  width:339px;
  height: 300px;
}
</style>
</head>
<body>

<div class="header">
  <img class="image" src="h1.jpg" width="250px" height="150px" align="left" >
  <h1 color="black" align="center">FARMING ASSISTANT</h1>
  <p>I AM A FARMER.</p>
   <marquee>Wheat : 147 Average Max Price: 2140 Min Price: 1650   |  	Wheat : 2189 No. 2 Max Price: 2375 Min Price: 1850   |  	Wheat : Dara Max Price: 2450 Min Price: 1650   |  	Wheat : Kalyan Max Price: 2130 Min Price: 1180   |  	Wheat : Lok -1 (Nilami Rate) Max Price: 1946 Min Price: 1850   |  	Wheat : Lok-1 Max Price: 1950 Min Price: 1600   |  	Wheat : Lokwan Max Price: 2300 Min Price: 1061   |  	Wheat : Lokwan Gujrat Max Price: 1915 Min Price: 1915   |  	Wheat : Lokwan MP No. 1 Max Price: 1920 Min Price: 1800   |  	Wheat : Maharashtra 2189 Max Price: 2630 Min Price: 1650   |  	Wheat : Milbar Max Price: 2125 Min Price: 1850   |  	Wheat : Mill Quality Max Price: 1889 Min Price: 1690   |  	Wheat : MP Sharbati Max Price: 2100 Min Price: 1850   |  	Wheat : Rajasthan Tukdi Max Price: 2205 Min Price: 1800   |  	Wheat : Sechor No. 1 Max Price: 2310 Min Price: 1960   |  	Wheat : Sharbati Max Price: 2800 Min Price: 1780   |  	Wheat : Deshi Max Price: 2345 Min Price: 1650   |  	Wheat : Red Max Price: 2800 Min Price: 2200   |  	Wheat : White Max Price: 2600 Min Price: 2050   |  	Wheat : H.D. Max Price: 2301 Min Price: 2150   |  	Wheat : Local Max Price: 3000 Min Price: 1600   |  	Wheat : Medium Fine Max Price: 3000 Min Price: 1857   |  	Wheat : Medium Max Price: 2500 Min Price: 1720   |  	Wheat : Sonalika Max Price: 2225 Min Price: 1650   |  	Wheat : Hybrid Max Price: 2285 Min Price: 1900   |  	Paddy(Dhan)(Common) : Paddy Max Price: 2700 Min Price: 1200   |  	Paddy(Dhan)(Common) : Ponni Max Price: 2616 Min Price: 1580   |  	Paddy(Dhan)(Common) : Sinna Ponni Max Price: 1345 Min Price: 1345   |  	Paddy(Dhan)(Common) : White Ponni Max Price: 2039 Min Price: 1612   |  	Paddy(Dhan)(Common) : I.R. 36 Max Price: 1600 Min Price: 1400   |  	Paddy(Dhan)(Common) : I.R. 64 Max Price: 1850 Min Price: 1586   |  	Paddy(Dhan)(Common) : ADT 36 Max Price: 1850 Min Price: 1775   |  	Paddy(Dhan)(Common) : ADT 37 Max Price: 1750 Min Price: 1315   |  	Paddy(Dhan)(Common) : ADT 39 Max Price: 1540 Min Price: 1212   |  	Paddy(Dhan)(Common) : ADT 43 Max Price: 1900 Min Price: 1320   |  	Paddy(Dhan)(Common) : AST 16 Max Price: 1800 Min Price: 1400   |  	Paddy(Dhan)(Common) : A. Ponni Max Price: 1681 Min Price: 1395   |  	Paddy(Dhan)(Common) : Pommani Max Price: 1583 Min Price: 1583   |  	Paddy(Dhan)(Common) : TY 01 Max Price: 1145 Min Price: 1145   |  	Paddy(Dhan)(Common) : 1001 Max Price: 2100 Min Price: 1300   |  	Paddy(Dhan)(Common) : Sona Max Price: 2100 Min Price: 1600   |  	Paddy(Dhan)(Common) : Sona Mahsuri Max Price: 1959 Min Price: 1319   |  	Paddy(Dhan)(Common) : Paddy Dappa Max Price: 1850 Min Price: 1425   |  	Paddy(Dhan)(Common) : Paddy Jyoti Max Price: 1750 Min Price: 1750   |  	Paddy(Dhan)(Common) : Paddy fine Max Price: 3000 Min Price: 1460   |  	Paddy(Dhan)(Common) : Paddy Medium Max Price: 2000 Min Price: 1300   |  	Paddy(Dhan)(Common) : Paddy Coarse Max Price: 1850 Min Price: 1425   |  	Paddy(Dhan)(Common) : I.R.-64 Max Price: 1626 Min Price: 1551   |  	Paddy(Dhan)(Common) : G. R. 11 Max Price: 1550 Min Price: 1475   |  	Paddy(Dhan)(Common) : B P T Max Price: 2300 Min Price: 1385   |  	Paddy(Dhan)(Common) : MTU-1001 Max Price: 1520 Min Price: 1505   |  	Paddy(Dhan)(Common) : MTU-1010 Max Price: 1850 Min Price: 1585   |  	Paddy(Dhan)(Common) : Masuri Max Price: 1700 Min Price: 1550   |  	Paddy(Dhan)(Common) : Swarna Masuri (New) Max Price: 1800 Min Price: 1500   |  	Paddy(Dhan)(Common) : HMT Max Price: 2000 Min Price: 1851   |  	Paddy(Dhan)(Common) : Sarvati Max Price: 2150 Min Price: 1800   |  	Paddy(Dhan)(Common) : Common Max Price: 1900 Min Price: 1350   |  	Paddy(Dhan)(Common) : Fine Max Price: 2540 Min Price: 1583   |  	Rice : 1009 Kar Max Price: 4865 Min Price: 1800   |  	Rice : Coarse Max Price: 4400 Min Price: 1860   |  	Rice : CR 1009 (Coarse) Boiled Max Price: 5400 Min Price: 4000   |  	Rice : Fine Max Price: 6500 Min Price: 2250   |  	Rice : Fine(Basmati) Max Price: 3800 Min Price: 3500   |  	Rice : H.Y.V. Max Price: 2750 Min Price: 2650   |  	Rice : III Max Price: 2900 Min Price: 1800   |  	Rice : IR-8 Max Price: 3000 Min Price: 2800   |  	Rice : Masuri Max Price: 3050 Min Price: 2300   |  	Rice : Medium Max Price: 5000 Min Price: 1800   |  	Rice : Sona Mansoori Non Basmati Max Price: 3000 Min Price: 2800   |  	Rice : Super Fine Max Price: 6400 Min Price: 3800   |  	Rice : Jaya Max Price: 3100 Min Price: 2500   |  	Rice : Sona Max Price: 5300 Min Price: 2200   |  	Rice : Ratnachudi (718 5-749) Max Price: 3100 Min Price: 2900   |  	Rice : Broken Rice Max Price: 2700 Min Price: 1800   |  	Rice : Hansa Max Price: 2300 Min Price: 2200   |  	Rice : Mataa Parboiled Max Price: 3700 Min Price: 3500   |  	Rice : Common Max Price: 7000 Min Price: 2150   |  	Maize : Deshi Red Max Price: 2085 Min Price: 1600   |  	Maize : Deshi White Max Price: 2025 Min Price: 1800   |  	Maize : Hybrid Red (Cattle Feed) Max Price: 2115 Min Price: 1950   |  	Maize : Hybrid Yellow (Cattle Feed) Max Price: 1500 Min Price: 1400   |  	Maize : Hybrid/Local Max Price: 2200 Min Price: 1400   |  	Maize : Local Max Price: 2350 Min Price: 1600   |  	Maize : Red Max Price: 2090 Min Price: 1860   |  	Maize : White (SAFED) Max Price: 2100 Min Price: 1800   |  	Maize : Yellow Max Price: 2205 Min Price: 1260   |  	Maize : Hybrid Max Price: 2285 Min Price: 1480   |  	Maize : Medium Max Price: 1700 Min Price: 1500   |  	Jowar(Sorghum) : Jowar ( White) Max Price: 4850 Min Price: 1500   |  	Jowar(Sorghum) : Jowar (Yellow) Max Price: 3851 Min Price: 1925   |  	Jowar(Sorghum) : Local Max Price: 2000 Min Price: 1800   |  	Jowar(Sorghum) : Jowar Hybrid Max Price: 2066 Min Price: 1326   |  	Jowar(Sorghum) : Red Max Price: 4250 Min Price: 1820   |  	Jowar(Sorghum) : Annigeri Max Price: 1400 Min Price: 1300   |  	Jowar(Sorghum) : Hybrid Max Price: 2691 Min Price: 1721   |  	Bengal Gram(Gram)(Whole) : Average (Whole) Max Price: 5800 Min Price: 2312   |  	Bengal Gram(Gram)(Whole) : Desi (F.A.Q. Split) Max Price: 4000 Min Price: 3300   |  	Bengal Gram(Gram)(Whole) : Desi (Whole) Max Price: 5650 Min Price: 2600   |  	Bengal Gram(Gram)(Whole) : White (Whole) Max Price: 5290 Min Price: 4075   |  	Bengal Gram(Gram)(Whole) : Gulabi Max Price: 3666 Min Price: 3360   |  	Bengal Gram(Gram)(Whole) : Jawari/Local Max Price: 4900 Min Price: 3069   |  	Bengal Gram(Gram)(Whole) : Kabul Small Max Price: 4105 Min Price: 3708   |  	Bengal Gram(Gram)(Whole) : Kanta Max Price: 4900 Min Price: 2901   |  	Bengal Gram(Gram)(Whole) : Bengal Gram (Split) Max Price: 4920 Min Price: 3100   |  	Bengal Gram(Gram)(Whole) : Bengal Gram Dal Max Price: 6500 Min Price: 6000   |  	Bengal Gram(Gram)(Whole) : 999 Max Price: 4100 Min Price: 3780   |  	Bengal Gram(Gram)(Whole) : Bold Max Price: 7000 Min Price: 6900   |  	Bengal Gram(Gram)(Whole) : Medium Max Price: 3863 Min Price: 2930   |  	Black Gram (Urd Beans)(Whole) : Desi Max Price: 5800 Min Price: 1601   |  	Black Gram (Urd Beans)(Whole) : Black Gram (Whole) Max Price: 9800 Min Price: 1503   |  	Black Gram (Urd Beans)(Whole) : Black Gram Dal Max Price: 7600 Min Price: 2000   |  	Black Gram (Urd Beans)(Whole) : Local Max Price: 8000 Min Price: 3250   |  	Green Gram (Moong)(Whole) : Green (Whole) Max Price: 8800 Min Price: 3030   |  	Green Gram (Moong)(Whole) : Green Gram Dhall-I Max Price: 7700 Min Price: 2500   |  	Green Gram (Moong)(Whole) : Local (Whole) Max Price: 6350 Min Price: 6250   |  	Green Gram (Moong)(Whole) : Small (Split) Max Price: 7600 Min Price: 4100   |  	Green Gram (Moong)(Whole) : Bold Max Price: 7000 Min Price: 6900   |  	Green Gram (Moong)(Whole) : Hybrid Max Price: 10000 Min Price: 4005   |  	Green Gram (Moong)(Whole) : Local Max Price: 5052 Min Price: 2400   |  	Green Gram (Moong)(Whole) : Ankola Max Price: 6550 Min Price: 5500   |  	Groundnut : Big (With Shell) Max Price: 5139 Min Price: 3325   |  	Groundnut : Bold Kernel Max Price: 5005 Min Price: 3530   |  	Groundnut : F.A.Q Max Price: 6000 Min Price: 5700   |  	Groundnut : Gungri (With Shell) Max Price: 5029 Min Price: 2000   |  	Groundnut : DMV-7 Max Price: 5340 Min Price: 5000   |  	Groundnut : JL-24 Max Price: 4855 Min Price: 3900   |  	Groundnut : Balli/Habbu Max Price: 3738 Min Price: 2455   |  	Groundnut : Gejje Max Price: 5324 Min Price: 2019   |  	Groundnut : Natte Max Price: 5554 Min Price: 3009   |  	Groundnut : Hybrid Max Price: 5150 Min Price: 4800   |  	Groundnut : Bold Max Price: 4500 Min Price: 3425   |  	Groundnut : Groundnut seed Max Price: 5000 Min Price: 4870   |  	Groundnut : Local Max Price: 5200 Min Price: 1850   |  	Groundnut : G20 Max Price: 4800 Min Price: 3000   |  	Sesamum(Sesame,Gingelly,Til) : 95/5 Max Price: 11486 Min Price: 10000   |  	Sesamum(Sesame,Gingelly,Til) : Gajjar Max Price: 12100 Min Price: 10500   |  	Sesamum(Sesame,Gingelly,Til) : Red Max Price: 16130 Min Price: 8400   |  	Sesamum(Sesame,Gingelly,Til) : White Max Price: 14550 Min Price: 6049   |  	Sesamum(Sesame,Gingelly,Til) : Black Max Price: 19560 Min Price: 6200   |  	Sesamum(Sesame,Gingelly,Til) : Sesame Max Price: 12760 Min Price: 10000   |  	Mustard : Laha(Sarsib) Max Price: 3600 Min Price: 3580   |  	Mustard : Lohi Black Max Price: 4250 Min Price: 2900   |  	Mustard : Rai UP Max Price: 4015 Min Price: 3055   |  	Mustard : Sarson(Black) Max Price: 4450 Min Price: 2895   |  	Mustard : Yellow (Black) Max Price: 4200 Min Price: 3200   |  	Mustard : Mustard Max Price: 4400 Min Price: 2600   |  	Mustard : Big 100 Kg Max Price: 4100 Min Price: 3200   |  	Soyabean : Yellow Max Price: 3800 Min Price: 2400   |  	Soyabean : Soyabeen Max Price: 4500 Min Price: 2679   |  	Sunflower : Sunflower Max Price: 3930 Min Price: 2830   |  	Sunflower : Local Max Price: 5403 Min Price: 4150   |  	Sunflower : Hybrid Max Price: 4759 Min Price: 3229   |  	Cotton : H-4(A) 27mm FIne Max Price: 5440 Min Price: 5000   |  	Cotton : Shanker 6 (B) 30mm FIne Max Price: 5665 Min Price: 4795   |  	Cotton : LD-327 Max Price: 4809 Min Price: 3779   |  	Cotton : LH-1556 Max Price: 5626 Min Price: 3965   |  	Cotton : F-1054 Max Price: 5350 Min Price: 4600   |  	Cotton : Desi Max Price: 5500 Min Price: 4700   |  	Cotton : American Max Price: 5655 Min Price: 4200   |  	Cotton : Jayadhar Max Price: 5301 Min Price: 5201   |  	Cotton : Cotton (Unginned) Max Price: 5535 Min Price: 3800   |  	Cotton : DCH-32(Unginned) Max Price: 6025 Min Price: 5000   |  	Cotton : 170-CO2 (Unginned) Max Price: 5450 Min Price: 5450   |  	Cotton : H.B (Unginned) Max Price: 5510 Min Price: 4855   |  	Cotton : H.Y.4 (Unginned) Max Price: 5530 Min Price: 4750   |  	Cotton : Varalakshmi (Ginned) Max Price: 6419 Min Price: 3500   |  	Cotton : MCU 5 Max Price: 5151 Min Price: 4150   |  	Cotton : GCH Max Price: 5700 Min Price: 3500   |  	Cotton : LRA Max Price: 5400 Min Price: 4850   |  	Cotton : H4 Max Price: 5500 Min Price: 4500   |  	Cotton : Bunny Max Price: 5000 Min Price: 4000   |  	Cotton : Local Max Price: 5525 Min Price: 5205   |  	Cotton : RCH-2 Max Price: 5450 Min Price: 4750   |  	Cotton : Narma BT Cotton Max Price: 5550 Min Price: 4900   |  	Jute : TD-5 Max Price: 4700 Min Price: 3600   |  	Apple : American Max Price: 4300 Min Price: 3100   |  	Apple : Delicious Max Price: 7600 Min Price: 1120   |  	Apple : Golden Max Price: 6350 Min Price: 6150   |  	Apple : Kasmir/Shimla - II Max Price: 7400 Min Price: 2500   |  	Apple : Royal Delicious Max Price: 5800 Min Price: 2400   |  	Apple : Simla Max Price: 13000 Min Price: 3000   |  	Apple : Apple Max Price: 13500 Min Price: 2000   |  	Orange : Darjeeling Max Price: 11000 Min Price: 1600   |  	Orange : Medium Max Price: 3000 Min Price: 2600   |  	Orange : Nagpuri Max Price: 7500 Min Price: 1640   |  	Orange : Orange Max Price: 5300 Min Price: 1700   |  	Banana : Champa Max Price: 4500 Min Price: 1350   |  	Banana : Harichal Max Price: 1000 Min Price: 975   |  	Banana : Khandesh Max Price: 1300 Min Price: 280   |  	Banana : Medium Max Price: 2400 Min Price: 500   |  	Banana : Nendra Bale Max Price: 5900 Min Price: 1000   |  	Banana : Banana - Ripe Max Price: 4400 Min Price: 800   |  	Banana : Pachha Bale Max Price: 1200 Min Price: 600   |  	Banana : Elakki Bale Max Price: 2800 Min Price: 1000   |  	Banana : Nauti Bale Max Price: 1400 Min Price: 700   |  	Banana : Red Banana Max Price: 4900 Min Price: 4000   |  	Banana : Rasakathai Max Price: 3600 Min Price: 3200   |  	Banana : Poovan Max Price: 5900 Min Price: 2400   |  	Banana : Robusta Max Price: 3000 Min Price: 1200   |  	Banana : Palayamthodan Max Price: 3500 Min Price: 1400   |  	Banana : Amruthapani Max Price: 1950 Min Price: 700   |  	Banana : Desi(Bontha) Max Price: 1200 Min Price: 520   |  	Mango : Hapus(Alphaso) Max Price: 8000 Min Price: 2000   |  	Pineapple : Pine Apple Max Price: 4200 Min Price: 800   |  	Grapes : Annabesahai Max Price: 9000 Min Price: 2200   |  	Grapes : Black Max Price: 8000 Min Price: 1429   |  	Grapes : Green Max Price: 9150 Min Price: 1500   |  	Grapes : White Max Price: 5714 Min Price: 1429   |  	Grapes : Indian Max Price: 6000 Min Price: 4000   |  	Grapes : Natal Max Price: 3000 Min Price: 1500   |  	Onion : Bombay (U.P.) Max Price: 1500 Min Price: 1400   |  	Onion : Nasik Max Price: 1410 Min Price: 400   |  	Onion : Pole Max Price: 631 Min Price: 100   |  	Onion : Red Max Price: 1460 Min Price: 50   |  	Onion : Beelary-Red Max Price: 1150 Min Price: 810   |  	Onion : White Max Price: 1605 Min Price: 205   |  	Onion : Pusa-Red Max Price: 770 Min Price: 730   |  	Onion : Local Max Price: 1000 Min Price: 100   |  	Onion : Onion Max Price: 3852 Min Price: 100   |  	Onion : Puna Max Price: 900 Min Price: 200   |  	Onion : Telagi Max Price: 450 Min Price: 100   |  	Onion : Big Max Price: 2000 Min Price: 700   |  	Onion : Medium Max Price: 1100 Min Price: 136   |  	Onion : Small Max Price: 3000 Min Price: 1800   |  	Onion : 1st Sort Max Price: 1400 Min Price: 200   |  	Potato : (Red Nanital) Max Price: 1500 Min Price: 100   |  	Potato : Desi Max Price: 1200 Min Price: 300   |  	Potato : F.A.Q. Max Price: 600 Min Price: 440   |  	Potato : Red Max Price: 3250 Min Price: 550   |  	Potato : Jalander Max Price: 1500 Min Price: 200   |  	Potato : Jyoti Max Price: 1500 Min Price: 300   |  	Potato : Badshah Max Price: 700 Min Price: 100   |  	Potato : Local Max Price: 1700 Min Price: 200   |  	Potato : Potato Max Price: 2800 Min Price: 180   |  	Potato : Chips Max Price: 700 Min Price: 600   |  	Potato : Kufri Megha Max Price: 670 Min Price: 500   |  	Potato : Kufri Giriraj Max Price: 400 Min Price: 300   |  	Garlic : Average Max Price: 4500 Min Price: 500   |  	Garlic : Desi Max Price: 5240 Min Price: 300   |  	Garlic : Garlic Max Price: 7800 Min Price: 350   |  	Chili Red : Bold Max Price: 6300 Min Price: 6200   |  	Ginger(Dry) : Dry Max Price: 25000 Min Price: 7500   |  	Ginger(Dry) : Hybrid Max Price: 7000 Min Price: 3000   |  	Ginger(Dry) : Vegitable-fresh Max Price: 9000 Min Price: 7500   |  	Ginger(Dry) : Big/Thick Max Price: 7100 Min Price: 6900   |  	Bajra(Pearl Millet/Cumbu) : Bold Max Price: 2000 Min Price: 1900   |  	Bajra(Pearl Millet/Cumbu) : Deshi Max Price: 2320 Min Price: 1035   |  	Bajra(Pearl Millet/Cumbu) : Hybrid Max Price: 2400 Min Price: 1550   |  	Bajra(Pearl Millet/Cumbu) : Local Max Price: 2315 Min Price: 1650   |  	Bajra(Pearl Millet/Cumbu) : Small Max Price: 2150 Min Price: 2050   |  	Barley (Jau) : Dara Max Price: 2135 Min Price: 1300   |  	Barley (Jau) : Deshi Max Price: 1946 Min Price: 1300   |  	Ragi (Finger Millet) : Fine Max Price: 3000 Min Price: 2800   |  	Ragi (Finger Millet) : Local Max Price: 2850 Min Price: 1800   |  	Cauliflower : African Sarson Max Price: 2000 Min Price: 475   |  	Cauliflower : Local Max Price: 2000 Min Price: 300   |  	Cauliflower : Cauliflower Max Price: 5000 Min Price: 100   |  	Brinjal : Round Max Price: 1800 Min Price: 300   |  	Brinjal : Round/Long Max Price: 4200 Min Price: 300   |  	Brinjal : Arkasheela Mattigulla Max Price: 3000 Min Price: 340   |  	Brinjal : Brinjal Max Price: 4400 Min Price: 250   |  	Cashewnuts : Local(Raw) Max Price: 13100 Min Price: 8500   |  	Black pepper : Malabar Max Price: 32599 Min Price: 27299   |  	Black pepper : Ungrabled Max Price: 34000 Min Price: 29000   |  	Black pepper : Garbled Max Price: 34000 Min Price: 32000   |  	Turmeric : Finger Max Price: 8239 Min Price: 5009   |  	Turmeric : Local Max Price: 7200 Min Price: 5252   |  	Turmeric : Turmeric Stick Max Price: 12000 Min Price: 7000   |  	Turmeric : Finger Max Price: 7375 Min Price: 5606   |  	Turmeric : Bulb Max Price: 8000 Min Price: 3000   |  	Turmeric : Dry Max Price: 12000 Min Price: 11500   |  	Cummin Seed(Jeera) : Cummin Seed(Jeera) Max Price: 18900 Min Price: 8750   |  	Cummin Seed(Jeera) : Medium Max Price: 15000 Min Price: 12255   |  	Coriander(Leaves) : Local Max Price: 10000 Min Price: 5032   |  	Coriander(Leaves) : Coriander Max Price: 3500 Min Price: 200   |  	Methi(Leaves) : Methi Max Price: 2000 Min Price: 500   |  	Methi Seeds : Methiseeds Max Price: 8000 Min Price: 2250   |  	Methi Seeds : Best Max Price: 3650 Min Price: 3450   |  	Arhar (Tur/Red Gram)(Whole) : Arhar (Whole) Max Price: 5675 Min Price: 1612   |  	Arhar (Tur/Red Gram)(Whole) : Arhar Dal(Tur) Max Price: 8100 Min Price: 3535   |  	Arhar (Tur/Red Gram)(Whole) : 777 New Ind Max Price: 5681 Min Price: 3801   |  	Arhar (Tur/Red Gram)(Whole) : Medium Max Price: 7300 Min Price: 3000   |  	Arhar (Tur/Red Gram)(Whole) : Desi(Whole) Max Price: 5675 Min Price: 3400   |  	Arhar (Tur/Red Gram)(Whole) : F.A.Q. (Whole) Max Price: 4400 Min Price: 4300   |  	Arhar (Tur/Red Gram)(Whole) : Small (Whole) Max Price: 4600 Min Price: 4200   |  	Arhar (Tur/Red Gram)(Whole) : Local Max Price: 5675 Min Price: 3522   |  	Arhar (Tur/Red Gram)(Whole) : Red Max Price: 5269 Min Price: 3030   |  	Green Peas : Green Peas Max Price: 8000 Min Price: 400   |  	Green Peas : Gemin Peas Dal Max Price: 900 Min Price: 850   |  	Green Peas : White Fozi Max Price: 6500 Min Price: 3131   |  	Safflower : F.A.Q. Bold Max Price: 3950 Min Price: 3950   |  	Safflower : Safflower Max Price: 4149 Min Price: 3500   |  	Lentil (Masur)(Whole) : Masur Dal Max Price: 7850 Min Price: 3000   |  	Lentil (Masur)(Whole) : Kala Masoor New Max Price: 5300 Min Price: 3435   |  	Lentil (Masur)(Whole) : Masoor Gola Max Price: 5200 Min Price: 3201   |  	Field Pea : Field Pea Max Price: 3500 Min Price: 400   |  	Linseed : Linseed Max Price: 10500 Min Price: 4000   |  	Chikoos(Sapota) : Sapota Max Price: 4800 Min Price: 1500   |  	Papaya : Papaya Max Price: 4200 Min Price: 500   |  	Water Melon : Water Melon Max Price: 2000 Min Price: 500   |  	Guar : Gwar Max Price: 8000 Min Price: 700   |  	Taramira : Taramira Max Price: 3601 Min Price: 3575   |  	Mousambi(Sweet Lime) : Mousambi Max Price: 4000 Min Price: 500   |  	Tomato : Deshi Max Price: 2600 Min Price: 100   |  	Tomato : Local Max Price: 2200 Min Price: 180   |  	Tomato : Hybrid Max Price: 2700 Min Price: 400   |  	Tomato : Tomato Max Price: 3400 Min Price: 200   |  	Cluster beans : Cluster Beans Max Price: 6000 Min Price: 1500   |  	Bitter gourd : Bitter Gourd Max Price: 9000 Min Price: 600   |  	Bottle gourd : Bottle Gourd Max Price: 3500 Min Price: 275   |  	Ashgourd : Ashgourd Max Price: 5600 Min Price: 600   |  	Pumpkin : Pumpkin Max Price: 3000 Min Price: 360   |  	Bhindi(Ladies Finger) : Bhindi Max Price: 7000 Min Price: 550   |  	Amaranthus : Amaranthus Max Price: 5000 Min Price: 1200   |  	Green Chilli : Green Chilly Max Price: 8800 Min Price: 400   |  	Chilly Capsicum : Chilly Capsicum Max Price: 3600 Min Price: 2500   |  	Cowpea(Veg) : Cowpea (Veg) Max Price: 6400 Min Price: 1700   |  	Banana - Green : Banana - Green Max Price: 7000 Min Price: 360   |  	Cowpea (Lobia/Karamani) : Cowpea (Whole) Max Price: 4300 Min Price: 2612   |  	Cowpea (Lobia/Karamani) : Cowpea (W-S) Max Price: 4521 Min Price: 2502   |  	Beans : Beans (Whole) Max Price: 5500 Min Price: 2400   |  	Lak(Teora) : Lak (Whole) Max Price: 2752 Min Price: 2430   |  	Tapioca : Tapioca Max Price: 3000 Min Price: 1300   |  	Amphophalus : Amphophalus Max Price: 3500 Min Price: 2200   |  	Ginger(Green) : Green Ginger Max Price: 11000 Min Price: 1200   |  	Corriander seed : Coriander Seed Max Price: 12000 Min Price: 3200   |  	Corriander seed : Badami Steam Max Price: 7600 Min Price: 3600   |  	Corriander seed : Medium Green Max Price: 5380 Min Price: 4130   |  	Kulthi(Horse Gram) : Horse gram (Whole) Max Price: 4500 Min Price: 2900   |  	Foxtail Millet(Navane) : Navane Hybrid Max Price: 3521 Min Price: 2689   |  	Same/Savi : Same/Savi Local Max Price: 2800 Min Price: 2800   |  	Castor Seed : Castor seed Max Price: 5150 Min Price: 4125   |  	Castor Seed : Caster Max Price: 5155 Min Price: 4755   |  	Honge seed : Honge Seed Max Price: 2800 Min Price: 2400   |  	Copra : Copra Max Price: 19800 Min Price: 5210   |  	Copra : Ball Max Price: 10300 Min Price: 8200   |  	Dry Chillies : Byadgi Max Price: 11500 Min Price: 10000   |  	Dry Chillies : Dabbi Max Price: 13659 Min Price: 1010   |  	Dry Chillies : Kaddi Max Price: 11209 Min Price: 609   |  	Dry Chillies : Guntur Max Price: 9500 Min Price: 600   |  	Dry Chillies : Bold 1 Max Price: 8255 Min Price: 3505   |  	Dry Chillies : Red Max Price: 16500 Min Price: 2700   |  	Dry Chillies : White Max Price: 8700 Min Price: 2000   |  	Dry Chillies : 1st Sort Max Price: 9050 Min Price: 6000   |  	Dry Chillies : 2nd Sort Max Price: 9700 Min Price: 2000   |  	Dry Chillies : Red New Max Price: 12100 Min Price: 2500   |  	Dry Chillies : Talu Max Price: 4000 Min Price: 1200   |  	Dry Chillies : Desi Max Price: 10411 Min Price: 8700   |  	Dry Chillies : Dry Chillies Max Price: 8875 Min Price: 8800   |  	Soanf : Soanf Max Price: 17305 Min Price: 5300   |  	Ajwan : Ajwan Max Price: 12750 Min Price: 2500   |  	Coconut : Coconut Max Price: 4300 Min Price: 2000   |  	Coconut : Big Max Price: 3365 Min Price: 1600   |  	Coconut : Medium Max Price: 2200 Min Price: 1100   |  	Coconut : Grade-I Max Price: 22398 Min Price: 6000   |  	Coconut : Grade-III Max Price: 20000 Min Price: 20000   |  	Coconut : Imported Max Price: 10000 Min Price: 9000   |  	Sweet Potato : Hosur Red Max Price: 1400 Min Price: 1400   |  	Sweet Potato : Hosur Green Max Price: 2100 Min Price: 300   |  	Sweet Potato : Sweet Potato Max Price: 4200 Min Price: 500   |  	Carrot : Carrot Max Price: 6200 Min Price: 200   |  	Cabbage : Cabbage Max Price: 3200 Min Price: 100   |  	Snakeguard : Snakeguard Max Price: 4000 Min Price: 600   |  	Beetroot : Beetroot Max Price: 4200 Min Price: 500   |  	White Pumpkin : White Pumpkin Max Price: 1200 Min Price: 800   |  	Cucumbar(Kheera) : Cucumbar Max Price: 4500 Min Price: 150   |  	Ridgeguard(Tori) : Ridgeguard(Tori) Max Price: 6000 Min Price: 1800   |  	Raddish : Raddish Max Price: 1800 Min Price: 120   |  	Thondekai : Thondekai Max Price: 1500 Min Price: 1000   |  	Capsicum : Capsicum Max Price: 9000 Min Price: 912   |  	Green Avare (W) : Green Avare (W) Max Price: 2800 Min Price: 2000   |  	Alsandikai : Alsandikai Max Price: 2800 Min Price: 2400   |  	Chow Chow : Chow Chow Max Price: 1200 Min Price: 800   |  	Drumstick : Drumstick Max Price: 8100 Min Price: 1300   |  	Chapparad Avare : Chapparada Avarekai Max Price: 2400 Min Price: 1800   |  	Leafy Vegetable : Leafy Vegetables Max Price: 1100 Min Price: 500   |  	Mango (Raw-Ripe) : Mango - Raw-Ripe Max Price: 6000 Min Price: 2000   |  	Sweet Pumpkin : Sweet Pumpkin Max Price: 1500 Min Price: 500   |  	Peas Wet : Peas Wet Max Price: 2400 Min Price: 100   |  	Seemebadnekai : Seemebadanekai Max Price: 1600 Min Price: 1200   |  	Knool Khol : Knool Khol Max Price: 2000 Min Price: 300   |  	Suvarna Gadde : Suvarnagadde Max Price: 2800 Min Price: 777   |  	Lime : Lime Max Price: 7851 Min Price: 7800   |  	Jack Fruit : Jack Fruit Max Price: 2300 Min Price: 1100   |  	Guava : Guava Alahabad Max Price: 1820 Min Price: 1775   |  	Guava : Guava Max Price: 5000 Min Price: 667   |  	Karbuja(Musk Melon) : Karbhuja Max Price: 6667 Min Price: 400   |  	Pomegranate : Pomogranate Max Price: 9000 Min Price: 1500   |  	Tender Coconut : Tender Coconut Max Price: 20000 Min Price: 6000   |  	Suva (Dill Seed) : Suva (Dill Seed) Max Price: 3611 Min Price: 3611   |  	Moath Dal : Moath Dal Max Price: 7400 Min Price: 7300   |  	Moath Dal : Moath (W) Max Price: 5630 Min Price: 4650   |  	Masur Dal : Masur Dal Max Price: 8600 Min Price: 4800   |  	Masur Dal : Kala Masoor New Max Price: 6000 Min Price: 5000   |  	Masur Dal : Masoor Gola Max Price: 5130 Min Price: 3046   |  	Arhar Dal(Tur Dal) : Arhar Dal(Tur) Max Price: 9000 Min Price: 4000   |  	Arhar Dal(Tur Dal) : U.P. (Split) Max Price: 7075 Min Price: 6200   |  	Bengal Gram Dal (Chana Dal) : Bengal Gram Dal Max Price: 8500 Min Price: 5050   |  	Bengal Gram Dal (Chana Dal) : Desi (F.A.Q. Split) Max Price: 3770 Min Price: 3465   |  	Bengal Gram Dal (Chana Dal) : Bengal Gram (Split) Max Price: 5535 Min Price: 2500   |  	Black Gram Dal (Urd Dal) : Black Gram Dal Max Price: 10100 Min Price: 4600   |  	Green Gram Dal (Moong Dal) : Green Gram Dal Max Price: 8000 Min Price: 6000   |  	Ground Nut Seed : Ground Nut Seed Max Price: 9400 Min Price: 5300   |  	Avare Dal : Avare (Whole) Max Price: 4250 Min Price: 2950   |  	Sajje : Sajje Max Price: 1601 Min Price: 1601   |  	Season Leaves : Season Leaves Max Price: 1000 Min Price: 600   |  	Lint : Jaydhar Max Price: 8500 Min Price: 8500   |  	Alasande Gram : Alasande Gram Max Price: 4352 Min Price: 2010   |  	Soji : Soji Max Price: 4600 Min Price: 4600   |  	Chennangi Dal : Chennangi Dal Max Price: 5600 Min Price: 5400   |  	Elephant Yam (Suran) : Elephant Yam (Suran) Max Price: 3500 Min Price: 1200   |  	Yam (Ratalu) : Yam (Ratalu) Max Price: 2500 Min Price: 2000   |  	French Beans (Frasbean) : French Beans (Frasbean) Max Price: 5000 Min Price: 500   |  	Indian Beans (Seam) : Indian Beans (Seam) Max Price: 3000 Min Price: 1000   |  	Surat Beans (Papadi) : Surat Beans (Papadi) Max Price: 2800 Min Price: 1900   |  	Pegeon Pea (Arhar Fali) : Pigeon Pea (Arhar Fali) Max Price: 3600 Min Price: 2150   |  	Little gourd (Kundru) : Little gourd (Kundru) Max Price: 3758 Min Price: 3700   |  	Rat Tail Radish (Mogari) : Rat Tail Radish (Mogari) Max Price: 800 Min Price: 500   |  	Peas cod : Peas cod Max Price: 1750 Min Price: 500   |  	Lemon : Lemon Max Price: 5330 Min Price: 1000   |  	Sponge gourd : Sponge gourd Max Price: 1875 Min Price: 1100   |  	Papaya (Raw) : Papaya (Raw) Max Price: 1800 Min Price: 800   |  	Colacasia : Colacasia Max Price: 5500 Min Price: 1000   |  	Squash(Chappal Kadoo) : Squash(Chappal Kadoo) Max Price: 1300 Min Price: 1000   |  	Kinnow : Kinnow Max Price: 2700 Min Price: 600   |  	Mashrooms : Mashrooms Max Price: 10500 Min Price: 8200   |  	Turnip : Turnip Max Price: 1200 Min Price: 300   |  	Spinach : Spinach Max Price: 1500 Min Price: 180   |  	Indian Colza(Sarson) : Indian Colza(Sarson) Max Price: 700 Min Price: 400   |  	Peas(Dry) : Peas(Dry) Max Price: 5300 Min Price: 1101   |  	Tinda : Tinda Max Price: 1400 Min Price: 500   |  	Amla(Nelli Kai) : Amla Max Price: 4750 Min Price: 1000   |  	Ber(Zizyphus/Borehannu) : Ber(Zizyphus) Max Price: 3200 Min Price: 700   |  	Onion Green : Onion Green Max Price: 1200 Min Price: 300   |  	Mint(Pudina) : Mint(Pudina) Max Price: 3000 Min Price: 2000   |  	Kabuli Chana(Chickpeas-White) : Kabuli Chana(Chickpeas-white) Max Price: 6300 Min Price: 2800   |  	Kabuli Chana(Chickpeas-White) : Kabul Max Price: 5741 Min Price: 3201   |  	Kabuli Chana(Chickpeas-White) : Kabul Small Max Price: 5040 Min Price: 4950   |  	Kabuli Chana(Chickpeas-White) : White (whole) Max Price: 5200 Min Price: 3593   |  	White Peas : White Peas Max Price: 6205 Min Price: 1765   |  	Guar Seed(Cluster Beans Seed) : Whole Max Price: 4065 Min Price: 3500   |  	Guar Seed(Cluster Beans Seed) : Split Max Price: 3990 Min Price: 3875   |  	Paddy(Dhan)(Basmati) : 1121 Max Price: 3601 Min Price: 1770   |  	Paddy(Dhan)(Basmati) : SuperFine(Basmati) Max Price: 1780 Min Price: 1780   |  	Paddy(Dhan)(Basmati) : Sugandha Max Price: 2681 Min Price: 2280   |  	Paddy(Dhan)(Basmati) : Basmati 1509 Max Price: 3321 Min Price: 2160   |  </marquee>

</div>

<div class="navbar">
	<a href="index.php">HOME</a>
  <a href="f_login.php">FARMER LOGIN</a>
  <a href="m_login.php">MERCHANT LOGIN</a>
  <a href="becomefarmer.php">BECOME A FARMER</a>
  <a href="#">TOP NEWS </a>
  <a href="stateAnalysis.php">STATE-WISE ANALYSIS</a>
  <a href="about.php">ABOUT US</a>
  
  <a href="adminlogin.php" class="right">ADMIN LOGIN</a>
</div>

<div class="row">
  <div class="side">
    <h2>Important Updates</h2><hr>
    <br>
    <video width="300"  height="200px"  controls>
  <source src="mov__bb.mp4" type="video/mp4">
  
  
</video>
    <p>MOTIVATIONAL VIDEO FOR FARMER</p>
    <br>
    <h3>LIVE UPDATES</h3>
    <br>
    <div class="mera">
      <marquee direction="up" height="280px">1.Modi govt keen to hand out up to Rs 4,000 to farmers before polls.<br><br>

      2.Chhattisgarh govt to write off Rs 207 crore of irrigation tax; to benefit 15 lakh farmers.<br><br>
      
      3.Modi govt to announce Rs 4,000 per acre direct transfer, crop loan at 0% in two-fold farm relief; to cost Centre Rs 2.3 lakh crore.<br><br>

      4.Centre doubles export incentive for onion farmers to 10%.<br><br>

      5.Year 2018 in review: Protests and promises mark agriculture economy.<br><br>
      6.Modi govt to announce Rs 4,000 per acre direct transfer, crop loan at 0% in two-fold farm relief; to cost Centre Rs 2.3 lakh crore.
   </marquee>
   <br><br>
      
    </div>
    <p>Calculate Weight of Crop</p>

<p>
    <p>
  <label>Pounds</label>
  <input id="inputPounds" type="number" placeholder="Enter in Pounds" oninput="weightConverter(this.value)" onchange="weightConverter(this.value)">
</p>
<p>Kilograms: <span id="outputKilograms"></span></p>
<script>
function weightConverter(valNum) {
  document.getElementById("outputKilograms").innerHTML=valNum/2.2046;
}
</script>
<button class="open-button" onclick="openForm()">HELP DESK</button>

<div class="chat-popup" id="myForm">
  <form  method="POST" action="chatmessage.php" class="form-container">
    <h1>MESSAGE</h1>

    <label for="msg"><b></b></label>
    <textarea placeholder="Send message......To Admin" name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<div></div>

  </div>
  <div class="main">
    <h2>NEWS and POSTS</h2>
    <h5>Feb 27, 2019</h5>
    <img src="f1.jpg" height="180px" width="300px">
    <h3>Grains maintain trading range as deadlines loom</h3>
    <p>A grain is a small, hard, dry seed, with or without an attached hull or fruit layer, harvested for human or animal consumption.[1] A grain crop is a grain-producing plant. The two main types of commercial grain crops are cereals and legumes.</p>
    <br>
    <hr>
    <h5>Feb 28, 2019</h5>
    <img src="f2.jpg" height="180px" width="300px">
    
    <h3>Madhya Pradesh to produce organic fertilizer from human hair</h3>
    <p>The Madhya Pradesh government will soon start production of amino acid from human hair and provide it to farmers at one-third of the market price to be used as organic fertilizer, government officials said.</p>
    <br>
    <hr>

    <h5>Mar 1, 2019</h5>
    <img src="f3.jpg" height="180px" width="300px">
    
    <h3>Why Thousands Of Farmers Marched To Delhi, Kolkata And Mumbai: Answers And Anger In India’s Fastest-Growing Farm Economy</h3>
    <p>At the core of the farm protests sweeping MP lies a deeper crisis-- a fractured farm economy, where 46% of households are indebted. As many as 1,321 farmers committed suicide in MP in 2016, the highest since 2013, according to the government data presented in Lok Sabha on March 20, 2018. While farm suicides dropped by 10% elsewhere in the country in two years to 2016, MP saw a 21% jump.</p>
    <br>
    <hr>

    <h5>Mar 2, 2019</h5>
    <img src="f4.jpg" height="180px" width="300px">
    <h3>Farmer finds diamond worth Rs 30 lakh after 2-year dig in MP village</h3>
    <p>A marginal farmer in Panna district, 413 km north of Bhopal, found a diamond worth Rs 30 lakh, said a government official on Friday.</p>
    <br>
    <hr>

    <h5>Mar 3, 2019</h5>
    <img src="f5.jpg" height="180px" width="300px">
    <h3>Congress farm loan waivers Part IV: Farmers in Madhya Pradesh are committing suicide despite scheme; here's why</h3>
    <p>Under the burden of a loan of Rs 4 lakh, a failed crop and a parched farm, Juban Singh was elated when he heard the Madhya Pradesh government announced a loan waiver scheme for distressed farmers like him. His happiness was, however, momentary. Singh retreated into depression once again after hearing the terms and conditions of the 'Jai Kishan Rin Maafi Yojana'. Days later, the 45-year-old’s body was found hanging at his farm in Pandhana</p>
    <br>
  </div>
</div>

<div class="footer">
  <footer>
  <address>
    Design by-harshit.code  Copyright @ 2019 All rights reserved.
    <hr>
  </address>
 
</footer>
</div>

</body>
</html>
