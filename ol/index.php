<?php
  include "../config.php";
  if(isset($_GET['block'])){
      $blockref = $_GET['block'];
    header("Location: $appWebPath?m=online&a=CustomerLogin&block=$blockref");
  exit();
  }else{
      header("Location: $appWebPath?m=online&a=CustomerLogin");
  }
?>