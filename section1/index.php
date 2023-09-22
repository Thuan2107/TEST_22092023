<?php
function writeMsg($arr) {
    $total = 0;
  for($i = 0; $i < count($arr); $i++){
    if(is_string($arr[$i])){
        echo "String: $arr[$i] - Length:" . strlen($arr[$i]) . "\n";
    }
    if(is_numeric($arr[$i])){
        if($arr[$i]%2==0){
            $total += $arr[$i];
        }
    }
  }

  echo "\n Tổng số chẵn: " . $total;
}

echo writeMsg([1,"123","abvss",4]); // call the function
?>