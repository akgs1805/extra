<?php
class distance{
 public $link='';
 function __construct($distance){
  $this->connect();
  $this->storeInDB($distance);
 }
 
 function connect(){
  $this->link = mysqli_connect('192.168.43.177','admin_anil','admin','minor') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'minor') or die('Cannot select the DB');
 }
 
 function storeInDB($distance){
  $query = "insert into distance set module2='".$distance."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['distance'] != ''){
 $distance=new distance($_GET['distance']);
}
?>