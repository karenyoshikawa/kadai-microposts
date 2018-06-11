<?php
function display_hello($num){
    for($i=0;$i<$num;$i++){
    print ($i+1)."回目のこんにちは".PHP_EOL;
    }
}

display_hello(4)
?>

<?php

function clapGame() {
  for($i=1;$i<= 50; $i++) {
    if($i % 7 == 0) {
      print "clap!,";
    } else if($i % 10 == 7) {
      print "clap!,";
    } else {
      print $i.",";
    }
  }
}
clapGame();
?>
