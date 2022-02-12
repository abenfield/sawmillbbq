
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form

var bP=14.29;
 var pP=13.19;
 var tP=15.39;
 var sP=12.09;
var hP=12.09;



 var filling_prices= new Array();
 filling_prices["None"]=bP*0;
 filling_prices["1"]=bP*1;
 filling_prices["2"]=bP*2;
 filling_prices["3"]=bP*3;
 filling_prices["4"]=bP*4;
 filling_prices["5"]=bP*5;
 filling_prices["10"]=bP*10;
 filling_prices["20"]=bP*20;

  var filling_prices2= new Array();
 filling_prices2["None"]=0.00;
 filling_prices2["1"]=pP*1;
 filling_prices2["2"]=pP*2;
 filling_prices2["3"]=pP*3;
 filling_prices2["4"]=pP*4;
 filling_prices2["5"]=pP*5;
 filling_prices2["10"]=pP*10;
 filling_prices2["20"]=pP*20;

   var filling_prices3= new Array();
 filling_prices3["None"]=sP*0;
 filling_prices3["1"]=sP*1;
 filling_prices3["2"]=sP*2;
 filling_prices3["3"]=sP*3;
 filling_prices3["4"]=sP*4;
 filling_prices3["5"]=sP*5;
 filling_prices3["10"]=sP*10;
 filling_prices3["20"]=sP*20;
	 
  var filling_prices4= new Array();
 filling_prices4["None"]=tP*0;
 filling_prices4["1"]=tP*1;
 filling_prices4["2"]=tP*2;
 filling_prices4["3"]=tP*3;
 filling_prices4["4"]=tP*4;
 filling_prices4["5"]=tP*5;
 filling_prices4["10"]=tP*10;
 filling_prices4["20"]=tP*20;	 
 
   var filling_prices5= new Array();
 filling_prices5["None"]=hP*0;
 filling_prices5["1"]=hP*1;
 filling_prices5["2"]=hP*2;
 filling_prices5["3"]=hP*3;
 filling_prices5["4"]=hP*4;
 filling_prices5["5"]=hP*5;
 filling_prices5["10"]=hP*10;
 filling_prices5["20"]=hP*20;
 
 //Sides Below
 rS = 30;
 sS = 35;
 
 
 
   var filling_prices6= new Array();
 filling_prices6["None"]=rS*0;
 filling_prices6["1"]=rS*1;
 filling_prices6["2"]=rS*2;
 filling_prices6["3"]=rS*3;
 filling_prices6["4"]=rS*4;
 filling_prices6["5"]=rS*5;
 filling_prices6["10"]=rS*6;
 filling_prices6["20"]=rS*7;
 
 
   var filling_prices7= new Array();
filling_prices7["None"]=rS*0;
 filling_prices7["1"]=rS*1;
 filling_prices7["2"]=rS*2;
 filling_prices7["3"]=rS*3;
 filling_prices7["4"]=rS*4;
 filling_prices7["5"]=rS*5;
 filling_prices7["10"]=rS*6;
 filling_prices7["20"]=rS*7;
 
   var filling_prices8= new Array();
 filling_prices8["None"]=rS*0;
 filling_prices8["1"]=rS*1;
 filling_prices8["2"]=rS*2;
 filling_prices8["3"]=rS*3;
 filling_prices8["4"]=rS*4;
 filling_prices8["5"]=rS*5;
 filling_prices8["10"]=rS*6;
 filling_prices8["20"]=rS*7;
 
   var filling_prices9= new Array();
filling_prices9["None"]=rS*0;
 filling_prices9["1"]=rS*1;
 filling_prices9["2"]=rS*2;
 filling_prices9["3"]=rS*3;
 filling_prices9["4"]=rS*4;
 filling_prices9["5"]=rS*5;
 filling_prices9["10"]=rS*6;
 filling_prices9["20"]=rS*7;
 
   var filling_prices10= new Array();
filling_prices10["None"]=rS*0;
 filling_prices10["1"]=rS*1;
 filling_prices10["2"]=rS*2;
 filling_prices10["3"]=rS*3;
 filling_prices10["4"]=rS*4;
 filling_prices10["5"]=rS*5;
 filling_prices10["10"]=rS*6;
 filling_prices10["20"]=rS*7;
 
   var filling_prices11= new Array();
filling_prices11["None"]=sS*0;
 filling_prices11["1"]=sS*1;
 filling_prices11["2"]=sS*2;
 filling_prices11["3"]=sS*3;
 filling_prices11["4"]=sS*4;
 filling_prices11["5"]=sS*5;
 filling_prices11["10"]=sS*6;
 filling_prices11["20"]=sS*7;
 
   var filling_prices12= new Array();
filling_prices12["None"]=sS*0;
 filling_prices12["1"]=sS*1;
 filling_prices12["2"]=sS*2;
 filling_prices12["3"]=sS*3;
 filling_prices12["4"]=sS*4;
 filling_prices12["5"]=sS*5;
 filling_prices12["10"]=sS*6;
 filling_prices12["20"]=sS*7;
 
   var filling_prices13= new Array();
filling_prices13["None"]=sS*0;
 filling_prices13["1"]=sS*1;
 filling_prices13["2"]=sS*2;
 filling_prices13["3"]=sS*3;
 filling_prices13["4"]=sS*4;
 filling_prices13["5"]=sS*5;
 filling_prices13["10"]=sS*6;
 filling_prices13["20"]=sS*7;
   
	 
// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection


//This function finds the filling price based on the 
//drop down selection
function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}


function getFillingPrice2()
{
    var cakeFillingPrice2=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling2 = theForm.elements["filling2"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice2 = filling_prices2[selectedFilling2.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice2;
}

function getFillingPrice3()
{
    var cakeFillingPrice3=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling3 = theForm.elements["filling3"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice3 = filling_prices3[selectedFilling3.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice3;
}
function getFillingPrice4()
{
    var cakeFillingPrice4=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling4 = theForm.elements["filling4"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice4 = filling_prices4[selectedFilling4.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice4;
}
function getFillingPrice5()
{
    var cakeFillingPrice5=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling5 = theForm.elements["filling5"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice5 = filling_prices5[selectedFilling5.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice5;
}

function getFillingPrice6()
{
    var cakeFillingPrice6=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling6 = theForm.elements["filling6"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice6 = filling_prices6[selectedFilling6.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice6;
}
function getFillingPrice7()
{
    var cakeFillingPrice7=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling7 = theForm.elements["filling7"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice7 = filling_prices7[selectedFilling7.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice7;
}
function getFillingPrice8()
{
    var cakeFillingPrice8=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling8 = theForm.elements["filling8"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice8 = filling_prices8[selectedFilling8.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice8;
}
function getFillingPrice9()
{
    var cakeFillingPrice9=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling9 = theForm.elements["filling9"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice9 = filling_prices9[selectedFilling9.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice9;
}
function getFillingPrice10()
{
    var cakeFillingPrice10=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling10 = theForm.elements["filling10"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice10 = filling_prices10[selectedFilling10.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice10;
}
function getFillingPrice11()
{
    var cakeFillingPrice11=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling11 = theForm.elements["filling11"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice11 = filling_prices11[selectedFilling11.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice11;
}
function getFillingPrice12()
{
    var cakeFillingPrice12=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling12 = theForm.elements["filling12"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice12 = filling_prices12[selectedFilling12.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice12;
}
function getFillingPrice13()
{
    var cakeFillingPrice13=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling13= theForm.elements["filling13"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice13 = filling_prices13[selectedFilling13.value];
	
    //finally we return cakeFillingPrice
    return cakeFillingPrice13;
}



//candlesPrice() finds the candles price based on a check box selection


        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together



    var cakePrice =  getFillingPrice() + getFillingPrice2() + getFillingPrice3() +
	getFillingPrice4() + getFillingPrice5() + getFillingPrice6() + getFillingPrice7() +
	getFillingPrice8() + getFillingPrice10() + getFillingPrice11() + getFillingPrice12() +
	getFillingPrice13();
	totalPrice = parseFloat(cakePrice).toFixed(2);


var salesTax = .07825;
    //display the result
var nicePrice = (cakePrice * salesTax);
	taxPrice = parseFloat(nicePrice).toFixed(2);

	
	var finalPrice = (nicePrice + cakePrice)
	
finalPrice = parseFloat(finalPrice).toFixed(2);


	var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "$"+cakePrice;
	
	var divobj = document.getElementById('taxPrice');
    divobj.style.display='block';
    divobj.innerHTML = "$"+taxPrice;




var divobj = document.getElementById('finalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "$" + finalPrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
	
}