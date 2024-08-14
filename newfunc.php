<?php
include('connect.php');



function display_specs() {
  global $con;
  $query="select distinct(spec) from doctb";
  $result=$GLOBALS['conn']->query($query);
  while($row=$result->fetch_array())
  {
    $spec=$row['spec'];
    echo '<option data-value="'.$spec.'">'.$spec.'</option>';
  }
}

function display_docs()
{
 global $con;
 $query = "select * from doctb";
 $result=$GLOBALS['conn']->query($query);
 while( $row=$result->fetch_array() )
 {
  $username = $row['username'];
  $price = $row['docFees'];
  $spec = $row['spec'];
  echo '<option value="' .$username. '" data-value="'.$price.'" data-spec="'.$spec.'">'.$username.'</option>';
 }
}


?>