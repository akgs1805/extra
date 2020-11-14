<?php
class distance{
 public $link='';
 function __construct($distance1, $distance2){
  $this->connect();
  $this->storeInDB($distance1, $distance2);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'minor') or die('Cannot select the DB');
 }
 
 function storeInDB($distance1, $distance2){
  $query = "insert into distance set module1='".$distance1."', module2='".$distance2."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['distance1'] != '' and  $_GET['distance2'] != ''){
 $distance=new distance($_GET['distance1'],$_GET['distance2']);
}
?>