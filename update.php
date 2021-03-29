<?php
$status=$_GET["status"];
if($status=="disp")
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"select * from table1");



echo "<table>";
echo "<tr>";
echo "<th>"; echo "Id"; echo "</th>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "City"; echo "</th>";
echo "<th>"; echo "Delete"; echo "</th>";
echo "<th>"; echo "Update"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res))
{



echo "<tr>";
echo "<td>"; echo $row["id"];  echo "</td>";
//echo "<tr ><td><div id='$sid' style=\"display:inline\" onclick=display_detail($row["id"])> + </div> $row["name"]</td></tr>";
echo "<td>"; ?><div id="name<?php echo $row["id"]; ?>"> <?php echo $row["name"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="city<?php echo $row["id"]; ?>"> <?php echo $row["city"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?> <input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="delete" onClick="delete1(this.id)"> <?php echo "</td>";
echo "<td>"; ?>
  <input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="edit" onClick="aa(this.id)">
  <input type="button" id="update<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="save" style="visibility:hidden " onClick="bb(this.name)">


<?php echo "</td>";


echo "</tr>";


}
echo "</table>";
echo "</br>";

}


if($status=="update")
{
$id=$_GET["id"];
$name=$_GET["name"];
$city=$_GET["city"];

$name=trim($name);
$city=trim($city);


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"update table1 set name='$name',city='$city' where id=$id");



}


if($status=="delete")
{
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"delete from table1 where id=$id");

}


if($status=="ins")
{
$nm=$_GET["nm"];
$ct=$_GET["ct"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"insert into table1 values('','$nm','$ct')");



}

if($status=="dlt")
{
$nm1=$_GET["nm1"];
$ct1=$_GET["ct1"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"delete from table1 where name='$nm1'");



}

if($status=="upd")
{
//$id=$_GET["id"];
$nm2=$_GET["nm2"];
$ct2=$_GET["ct2"];

//$nm2=trim($nm2);
//$ct2=trim($ct2);


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"checkbox");
$res=mysqli_query($link,"update table1 set name='$nm2',city='$ct2' where name='$nm2' or city='$ct2'");



}




?>
