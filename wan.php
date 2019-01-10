<html class="" lang="en"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><script src="//static.codepen.io/assets/editor/live/console_runner-1df7d3399bdc1f40995a35209755dcfd8c7547da127f6469fd81e5fba982f6af.js"></script><script src="//static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/DigitalReligion/pen/jpwNVp">


<style class="cp-pen-styles">body {
  padding-top: 75px;
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/Supermarket-shopping-cart-1.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

h1 {
  text-align: center;
  font-weight: 600;
  color: white;
}

table {
  border: 0;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

tr {
  background: #f8f8f8;
  border-bottom: 1px solid #ddd;
  padding: 35px;
  cursor: pointer;
}

tr:hover, tr:nth-child(2n+0):hover {
  background: #f8fbeb;
  cursor: pointer;
}

tr:nth-child(2n+0) {
  background: white;
}

td {
  padding: .625em;
  line-height: 2.8;
}

th {
  padding: .625em;
  background-color: #142029;
  color: white;
  padding: 1.35em .68rem;
  font-size: 1.0em;
  font-weight: 600;
  letter-spacing: .1em;
  text-transform: uppercase;
  text-align: left;
}

@media screen and (max-width: 768px) {
  h1 {
    margin: 40px 0;
  }

  body {
    padding-top: 95px !important;
  }

  table {
    border: 0;
  }

  tr {
    border-bottom: 3px solid #142029;
    display: block;
    margin-bottom: .625em;
    margin: 10px 10px 45px 10px;
  }

  tr:last-of-type {
    margin-bottom: 45px;
  }

  td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .9em;
    text-align: right;
  }

  td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }

  td:last-child {
    border-bottom: 0;
  }

  thead {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }

  .box {
    background: transparent !important;
    -webkit-box-shadow: 0px 0px 8px 3px transparent !important;
    -moz-box-shadow: 0px 0px 8px 3px transparent !important;
    box-shadow: 0px 0px 8px 3px transparent !important;
  }
}
.box {
  max-width: 800px;
  margin: 0 auto;
  color: #142029;
  background: white;
  border-radius: 3px;
  -webkit-box-shadow: 0px 0px 8px 3px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0px 0px 8px 3px rgba(0, 0, 0, 0.25);
  box-shadow: 0px 0px 8px 3px rgba(0, 0, 0, 0.25);
}

.fruit {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/fruit.svg");
  display: block;
  float: left;
  text-indent: -9999px;
  margin-right: 15px;
  width: 42px;
  height: 38px;
  background-size: 42px 42px;
}

.beverage {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/beverage.svg");
  display: block;
  float: left;
  text-indent: -9999px;
  margin-right: 15px;
  width: 42px;
  height: 38px;
  background-size: 42px 42px;
}

.pasta {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/pasta.svg");
  display: block;
  float: left;
  text-indent: -9999px;
  margin-right: 15px;
  width: 42px;
  height: 38px;
  background-size: 42px 42px;
}

.dessert {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/dessert.svg");
  display: block;
  float: left;
  text-indent: -9999px;
  margin-right: 15px;
  width: 42px;
  height: 38px;
  background-size: 42px 42px;
}

.dairy {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/dairy.svg");
  display: block;
  float: left;
  text-indent: -9999px;
  margin-right: 15px;
  width: 42px;
  height: 38px;
  background-size: 42px 42px;
}

@media only screen and (max-width: 768px) {
  .fruit {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/fruit.svg");
    width: 62px;
    height: 62px;
    background-size: 62px 72px;
    position: absolute;
    background-color: #f8f8f8;
    border-radius: 4px;
    margin: -35px auto;
    left: 0;
    right: 0;
  }

  .beverage {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/beverage.svg");
    width: 62px;
    height: 62px;
    background-size: 62px 72px;
    position: absolute;
    background-color: #f8f8f8;
    border-radius: 4px;
    margin: -35px auto;
    left: 0;
    right: 0;
  }

  .pasta {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/pasta.svg");
    width: 62px;
    height: 62px;
    background-size: 62px 72px;
    position: absolute;
    background-color: #f8f8f8;
    border-radius: 4px;
    margin: -35px auto;
    left: 0;
    right: 0;
  }

  .dessert {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/dessert.svg");
    width: 62px;
    height: 62px;
    background-size: 62px 72px;
    position: absolute;
    background-color: #f8f8f8;
    border-radius: 4px;
    margin: -35px auto;
    left: 0;
    right: 0;
  }

  .dairy {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/dairy.svg");
    width: 62px;
    height: 62px;
    background-size: 62px 72px;
    position: absolute;
    background-color: #f8f8f8;
    border-radius: 4px;
    margin: -35px auto;
    left: 0;
    right: 0;
  }
}
</style></head><body>


<base href="/">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/905237/bonsaiUI-custombuild.css">


<header class="navbar fixed-top" role="navigation">
  <div class="brand"> <a target="_blank" href="https://github.com/DrkDevil/bankoa">ORAN BUYS YOUR STUFF</a> </div>
  <ul>
    <li><a href="https://codepen.io/challenges/2018/july">100% Customer Satisfaction</a></li>
  </ul>
  <ul class="flt-right">
    <li><a class="btn-outlined hidden-md" target="_blank" href="https://github.com/DrkDevil/bankoa">Profile</a></li>
  <li><a class="btn-outlined hidden-md" target="_blank" href="https://github.com/DrkDevil/bankoa">Forum Thread</a></li>
  <li><a class="btn-outlined hidden-md" target="_blank" href="https://github.com/DrkDevil/bankoa">Start Trade</a></li>
  </ul>
</header>
<section>
  <h1>ORAN's Price List</h1>
  <div class="box">
    <table>
      <thead>
        <tr>
          <th scope="col">Category</th>
          <th scope="col">Item</th>
          <th scope="col">Type</th>
          <th scope="col">Brand</th>
		      <th scope="col">Quantiy</th>
        </tr>
      </thead>
      <tbody id="groceryList"><tr><td data-label="Category"><div class="fruit"></div>fruit</td><td data-label="Item">apples</td><td data-label="Type">Honey Crisp</td><td data-label="Brand">Little cuties</td><td data-label="Quantity">10</td></tr><tr><td data-label="Category"><div class="beverage"></div>beverage</td><td data-label="Item">milk</td><td data-label="Type">2%</td><td data-label="Brand">generic</td><td data-label="Quantity">1 gallon</td></tr><tr><td data-label="Category"><div class="pasta"></div>pasta</td><td data-label="Item">Pasta</td><td data-label="Type">Penne</td><td data-label="Brand">Barilla</td><td data-label="Quantity">3</td></tr><tr><td data-label="Category"><div class="dessert"></div>dessert</td><td data-label="Item">Gelatin dessert</td><td data-label="Type">Green</td><td data-label="Brand">Jello</td><td data-label="Quantity">3</td></tr><tr><td data-label="Category"><div class="dairy"></div>dairy</td><td data-label="Item">Yogurt</td><td data-label="Type">Assorted flavors</td><td data-label="Brand">Chobani</td><td data-label="Quantity">12</td></tr><tr><td data-label="Category"><div class="pasta"></div>pasta</td><td data-label="Item">Pasta</td><td data-label="Type">Linguini</td><td data-label="Brand">Barilla</td><td data-label="Quantity">3</td></tr><tr><td data-label="Category"><div class="beverage"></div>beverage</td><td data-label="Item">Apple juice</td><td data-label="Type">regular</td><td data-label="Brand">Happy Farms</td><td data-label="Quantity">2</td></tr><tr><td data-label="Category"><div class="beverage"></div>beverage</td><td data-label="Item">Vodka</td><td data-label="Type">Tangerine</td><td data-label="Brand">Grey Goose</td><td data-label="Quantity">1</td></tr></tbody>
    </table>
  </div>
</section>
<footer class="fixed-bottom">
  <div class="flt-left">Copyright, MIT License</div>
  <div class="flt-right">Created by: <a target="_blank" href="http://dev.digitalreligion.net">Digital Religion</a></div>
</footer>
<!-- Jquery Library files -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>



<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.min.js"></script>
<script>//Json Object
var groceryList = [
{
  Category: "fruit",
  Item: "apples",
  Type: "Honey Crisp",
  Brand: "Little cuties",
  Qty: 10 },

{
  Category: "beverage",
  Item: "milk",
  Type: "2%",
  Brand: "generic",
  Qty: "1 gallon" },

{ Category: "pasta", Item: "Pasta", Type: "Penne", Brand: "Barilla", Qty: 3 },
{
  Category: "dessert",
  Item: "Gelatin dessert",
  Type: "Green",
  Brand: "Jello",
  Qty: 3 },

{
  Category: "dairy",
  Item: "Yogurt",
  Type: "Assorted flavors",
  Brand: "Chobani",
  Qty: 12 },

{
  Category: "pasta",
  Item: "Pasta",
  Type: "Linguini",
  Brand: "Barilla",
  Qty: 3 },

{
  Category: "beverage",
  Item: "Apple juice",
  Type: "regular",
  Brand: "Happy Farms",
  Qty: 2 },

{
  Category: "beverage",
  Item: "Vodka",
  Type: "Tangerine",
  Brand: "Grey Goose",
  Qty: 1 }];


// loop through the array and get each item
for (i = 0; i < groceryList.length; i++) {if (window.CP.shouldStopExecution(0)) break;
  // Create variables for Json Values
  var Category = groceryList[i].Category;
  var Item = groceryList[i].Item;
  var Type = groceryList[i].Type;
  var Brand = groceryList[i].Brand;
  var Qty = groceryList[i].Qty;
  // Create HTML Output
  $("#groceryList").append(
  "<tr>" +
  '<td data-label="Category"><div class="' +
  Category +
  '"></div>' +
  Category +
  "</td>" +
  '<td data-label="Item">' +
  Item +
  "</td>" +
  '<td data-label="Type">' +
  Type +
  "</td>" +
  '<td data-label="Brand">' +
  Brand +
  "</td>" +
  '<td data-label="Quantity">' +
  Qty +
  "</td>" +
  "</tr>");

}window.CP.exitedLoop(0);
//# sourceURL=pen.js
</script>
</body></html>
