<?php
function  latest_sneakers() {
  $statement =  get_latest_sneakers();
  include __DIR__ . '/views/latest-sneakers.php';
}

 function all_sneakers(){
   $statement = get_all_sneakers();
   include __DIR__ . '/views/all-sneakers.php';
 }

  ?>
