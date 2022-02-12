
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var bP = 14.29;
 var filling_prices= new Array();
 filling_prices["None"]=bP*0;
 filling_prices["1"]=bP*1;
 filling_prices["2"]=bP*2;
 filling_prices["3"]=bP*3;
 filling_prices["4"]=bP*4;
 filling_prices["5"]=bP*5;
 filling_prices["10"]=bP*10;
 filling_prices["20"]=bP*20;

 
	var pB = 13.19;
  var filling_prices2= new Array();
 filling_prices2["None"]=pB*0;
 filling_prices2["1"]=pB*1;
 filling_prices2["2"]=pB*2;
 filling_prices2["3"]=pB*3;
 filling_prices2["4"]=pB*4;
 filling_prices2["5"]=pB*5;
 filling_prices2["10"]=pB*10;
 filling_prices2["20"]=pB*20;

 
	var Sp = 12.09;
   var filling_prices3= new Array();
 filling_prices3["None"]=Sp * 0;
 filling_prices3["1"]=Sp * 1;
 filling_prices3["2"]=Sp * 2
 filling_prices3["3"]=Sp * 3;
 filling_prices3["4"]=Sp * 4;
 filling_prices3["5"]=Sp * 5;
 filling_prices3["10"]=Sp * 10;
 filling_prices3["20"]=Sp * 20;
	 
	 tP = 15.39;
  var filling_prices4= new Array();
 filling_prices4["None"]=tP*0;
 filling_prices4["1"]=tP*1;
 filling_prices4["2"]=tP*2;
 filling_prices4["3"]=tP*3;
 filling_prices4["4"]=tP*4;
 filling_prices4["5"]=tP*5;
 filling_prices4["10"]=tP*10;
 filling_prices4["20"]=tP*20;	 
 
 
 hP = 12.09;
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
 np = 30;
 sp = 35;
 
 
   var filling_prices6= new Array();
  filling_prices6["None"]=np*0;
 filling_prices6["1"]=np*1;
 filling_prices6["2"]=np*2;
 filling_prices6["3"]=np*3;
 filling_prices6["4"]=np*4;
 filling_prices6["5"]=np*5;
 filling_prices6["6"]=np*6;
 filling_prices6["7"]=np*7;
 
 
   var filling_prices7= new Array();
  filling_prices7["None"]=np*0;
 filling_prices7["1"]=np*1;
 filling_prices7["2"]=np*2;
 filling_prices7["3"]=np*3;
 filling_prices7["4"]=np*4;
 filling_prices7["5"]=np*5;
 filling_prices7["6"]=np*6;
 filling_prices7["7"]=np*7;
 
   var filling_prices8= new Array();
  filling_prices8["None"]=np*0;
 filling_prices8["1"]=np*1;
 filling_prices8["2"]=np*2;
 filling_prices8["3"]=np*3;
 filling_prices8["4"]=np*4;
 filling_prices8["5"]=np*5;
 filling_prices8["6"]=np*6;
 filling_prices8["7"]=np*7;
 
   var filling_prices9= new Array();
  filling_prices9["None"]=np*0;
 filling_prices9["1"]=np*1;
 filling_prices9["2"]=np*2;
 filling_prices9["3"]=np*3;
 filling_prices9["4"]=np*4;
 filling_prices9["5"]=np*5;
 filling_prices9["6"]=np*6;
 filling_prices9["7"]=np*7;
 
   var filling_prices10= new Array();
  filling_prices10["None"]=np*0;
 filling_prices10["1"]=np*1;
 filling_prices10["2"]=np*2;
 filling_prices10["3"]=np*3;
 filling_prices10["4"]=np*4;
 filling_prices10["5"]=np*5;
 filling_prices10["6"]=np*6;
 filling_prices10["7"]=np*7;
 
   var filling_prices11= new Array();
 filling_prices11["None"]=sp*0;
 filling_prices11["1"]=sp*1;
 filling_prices11["2"]=sp*2;
 filling_prices11["3"]=sp*3;
 filling_prices11["4"]=sp*4;
 filling_prices11["5"]=sp*5;
 filling_prices11["6"]=sp*6;
 filling_prices11["7"]=sp*7;
 
   var filling_prices12= new Array();
  filling_prices12["None"]=sp*0;
 filling_prices12["1"]=sp*1;
 filling_prices12["2"]=sp*2;
 filling_prices12["3"]=sp*3;
 filling_prices12["4"]=sp*4;
 filling_prices12["5"]=sp*5;
 filling_prices12["6"]=sp*6;
 filling_prices12["7"]=sp*7;
 
   var filling_prices13= new Array();
  filling_prices13["None"]=sp*0;
 filling_prices13["1"]=sp*1;
 filling_prices13["2"]=sp*2;
 filling_prices13["3"]=sp*3;
 filling_prices13["4"]=sp*4;
 filling_prices13["5"]=sp*5;
 filling_prices13["6"]=sp*6;
 filling_prices13["7"]=sp*7;
 
   
	 // test
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
	getFillingPrice8() + getFillingPrice9() + getFillingPrice10() + getFillingPrice11() + getFillingPrice12() +
	getFillingPrice13();



var salesTax = .078;
    //display the result

var nicePrice = (cakePrice * salesTax);
      nicePrice2 = parseFloat(nicePrice).toFixed(2);

    
var finalPrice = nicePrice  + cakePrice;
    finalPrice = parseFloat(finalPrice).toFixed(2);
 




	var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "$"+cakePrice;

    var divobj = document.getElementById('taxPrice');
    divobj.style.display='block';
    divobj.innerHTML = "$"+nicePrice2;



var divobj = document.getElementById('finalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "$" + finalPrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
	
}