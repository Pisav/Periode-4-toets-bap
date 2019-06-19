<?php
function get_latest_sneakers(){
  $pdo = dbConnect();
  $sql       = "SELECT * FROM `sneakers` LIMIT 4";
  $statement = $pdo->query( $sql );

 return $statement;
}
?>

<?php
function get_all_sneakers(){
  $pdo = dbConnect();
  $sql       = "SELECT * FROM `sneakers`";
  $statement = $pdo->query( $sql );

 return $statement;
}
?>
