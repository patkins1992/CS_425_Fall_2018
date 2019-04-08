/*
    Coder: Preston Whittaker
 Modified: 4/7/2019 by preston Whittaker
     Page: reportSearch.js ajax function
*/

// search function using ajax to ask for query from reportSearch.php
function reportSearch() {
   
   var company = document.getElementById('company').value;
   var year = document.getElementById('date').value; 
   var xhttp;
   var str;
   xhttp = new XMLHttpRequest();

  //year only search
  // if the company field is blank sends year in url led by the number 1 to indicate what was sent to the js function
  if (company == "allCompanys" && year != "allYears"){
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("results").innerHTML = this.responseText;
    document.getElementById("fileContent").innerHTML = " ";
    }
  };
  xhttp.open("GET", "../php/reportSearch.php?q="+"1"+year, true);
  xhttp.send();
  }

  //company only search
  // if the year field is blank sends company in url led by the number 2 to indicate what was sent to the js function
  else if(company != "allCompanys" && year == "allYears"){
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("results").innerHTML = this.responseText;
    document.getElementById("fileContent").innerHTML = " ";
    }
  };
  xhttp.open("GET", "../php/reportSearch.php?q="+"2"+company, true);
  xhttp.send();
  }

  //company and year search
  // if the year field is blank sends company in url led by the number 3 to indicate what was sent to the js function
  else if(company != "allCompanys" && year != "allYears"){
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("results").innerHTML = this.responseText;
    document.getElementById("fileContent").innerHTML = " ";
    }
  };
  xhttp.open("GET", "../php/reportSearch.php?q="+"3"+year+company, true);
  xhttp.send();
  }

  //else it is an all company and year search
  else{
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("results").innerHTML = this.responseText;
    document.getElementById("fileContent").innerHTML = " ";
    }
  };
  xhttp.open("GET", "../php/reportSearch.php?q="+"4", true);
  xhttp.send();
  }

  }


  //function that displays textfile content
  function displayRes(path){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("fileContent").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET",path, true);
    xhttp.send();
    }