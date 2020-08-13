//Exercise 1
function sayHello(){
	var input = document.getElementById("userInput").value;
	
	alert("Hello " + input);
}
//Exercies 2
function add(){
	var input1 = document.getElementById("userInput1").value;
	var input2 = document.getElementById("userInput2").value;
	
	var result = parseInt(input1)+parseInt(input2);

	document.getElementById("demo").innerHTML = "Result: " + result;
}

function subtract(){
	var input1 = document.getElementById("userInput1").value;
	var input2 = document.getElementById("userInput2").value;
	
	var result = parseInt(input1)-parseInt(input2);

	document.getElementById("demo").innerHTML = "Result: " + result;
	
}

function multiply(){
	var input1 = document.getElementById("userInput1").value;
	var input2 = document.getElementById("userInput2").value;
	
	var result = parseInt(input1)*parseInt(input2);

	document.getElementById("demo").innerHTML = "Result: " + result;
	
}

function quotient(){
	var input1 = document.getElementById("userInput1").value;
	var input2 = document.getElementById("userInput2").value;
	
	var result = parseInt(input1)/parseInt(input2);

	document.getElementById("demo").innerHTML = "Result: " + result;
	
}

//Exercise 3
function sKey(letter){
	var out = '';
	if(letter.value == "space"){
		document.getElementById("output").innerHTML += out + " ";
	}else {
		document.getElementById("output").innerHTML += out + letter.value;
	}
}

//Exercise 4
function checkList(){
  var items=document.getElementsByName('item');
  var selectedItems="";
  for(var i=0; i<items.length; i++){
    if(items[i].type=='checkbox' && items[i].checked==true)
      selectedItems+=items[i].value+", ";
  }
  alert(selectedItems + "are in your cart");
}

//Exercise 5
var students= [
{name:"Andy",id:001,major:"ComputerScience"},
{name:"Ben",id:002,major:"Biology"},
{name:"Hari",id:003,major:"ComputerScience"},
{name:"Lisa",id:004,major:"Physics"},
{name:"Wendy",id:005,major:"Math"}];

var iD = "ID";
var n = "Name";
var m = "Major";
function arrayTable(){
  document.write("<table border='1'>");  
  document.write("<tr>");
  document.write("<td>"+iD.bold()+"</td>");
  document.write("<td>"+n.bold()+"</td>");
  document.write("<td>"+m.bold()+"</td>");
  document.write("</tr>");

  for (var i =0; i< students.length; i++){
    document.write("<tr>");
    document.write("<td>"+students[i].id+"</td>"); 
    document.write("<td>"+students[i].name+"</td>");
    document.write("<td>"+students[i].major+"</td>");
    document.write("</tr>");
  }
  document.write("</table>");
}

//Exercise 6
function pass(){
  var username= ["user1","user2","user3"];
  var password= ["user1-111","user2-222","user3-333"];
  var user = document.getElementById("username").value;
  var passwd = document.getElementById("password").value;
  var userStatus = 0;
  var passwdStatus = 0;
  for(var i=0;i<3;i++){
    if(username[i]==user){
      userStatus=1;
    }
    if(password[i]==passwd && username[i]==user){
      passwdStatus=1;
    }
  }
  if(userStatus==0){
    alert("The username does not exist");
  }else if(passwdStatus==0){
    alert("Incorrect password");
  }else{
    alert("Login successful!");
  }
}