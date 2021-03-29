<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Record Documents</title>
<h3> Listed Data</h3>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">

<style>
table {
/* width:100%; */
width:100%;
}
table, th, td {
border: 1px solid black;
border-collapse: collapse;
}
th, td {
/* padding: 15px; */
text-align: center;
}
table tr:nth-child(even) {
background-color: #eee;
}
table tr:nth-child(odd) {
background-color: #fff;
}
table th {
background-color: black;
color: white;
}
body {
    /* margin:25px 0px; padding:0px; */
    text-align:center;
    align:center;
}
input {text-align: center;}

</style>
</head>

<body>

<form name="form1" action="" method="post" >

<div id="disp_data" ></div>
<p><b>Please fill up the form to do your operation:</b></p>
<input type="text" id="txtnameins" placeholder="name">
<input align="center"; type="text" id="txtcityins" placeholder="city">



<table>
  <tr>
      <td colspan="2">
          <input type="button" id="b1" value="Insert" onclick="ins();" />
          <input type="button" id="b2" value="Delete" onclick="dlt();" />
          <input type="button" id="b3" value="Update" onclick="upd();" />
          <input type="button" value="Refresh" onClick="window.location.reload()">


      </td>
  </tr>
  </table>

</form>

<script type="text/javascript">


disp_data();
function disp_data()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data").innerHTML=xmlhttp.responseText;

}


function aa(a)
{
nameid="name"+a;
txtnameid="txtname"+a;
var name=document.getElementById(nameid).innerHTML;
document.getElementById(nameid).innerHTML="<input type='text' value='"+name+"' id='"+txtnameid+"'>";

cityid="city"+a;
txtcityid="txtcity"+a;
var city=document.getElementById(cityid).innerHTML;
document.getElementById(cityid).innerHTML="<input type='text' value='"+city+"' id='"+txtcityid+"'>";


updateid="update"+a;
document.getElementById(a).style.visibility="hidden";
document.getElementById(updateid).style.visibility="visible";


}


function bb(b)
{
var nameid="txtname"+b;
var name=document.getElementById(nameid).value;

var cityid="txtcity"+b;
var city=document.getElementById(cityid).value;



update_value(b,name,city);


document.getElementById(b).style.visibility="visible";
document.getElementById("update"+b).style.visibility="hidden";


document.getElementById("name"+b).innerHTML=name;
document.getElementById("city"+b).innerHTML=city;


}


function update_value(id,name,city)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&name="+name+"&city="+city+"&status=update",false);
  xmlhttp.send(null);

}


function delete1(id)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&status=delete",false);
  xmlhttp.send(null);
  disp_data();
}

function ins()
{

var nm=document.getElementById("txtnameins").value;
var ct=document.getElementById("txtcityins").value;

var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?nm="+nm+"&ct="+ct+"&status=ins",false);
  xmlhttp.send(null);


disp_data();

document.getElementById("txtnameins").value="";
document.getElementById("txtcityins").value="";

}

function dlt(name)
{
  var nm1=document.getElementById("txtnameins").value;
  var ct1=document.getElementById("txtcityins").value;

  var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","update.php?nm1="+nm1+"&status=dlt",false);
    xmlhttp.send(null);


  disp_data();

  document.getElementById("txtnameins").value="";
  document.getElementById("txtcityins").value="";
}

function upd(name)
{
  var nm2=document.getElementById("txtnameins").value;
  var ct2=document.getElementById("txtcityins").value;

var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?nm2="+nm2+"&ct2="+ct2+"&status=upd",false);
  xmlhttp.send(null);

  disp_data();

  document.getElementById("txtnameins").value="";
  document.getElementById("txtcityins").value="";

}




</script>
</body>
</html>
