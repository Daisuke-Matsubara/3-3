<?php
  $my_name = $_POST['my_name'];
  $number = $_POST['number'];
  $omikuji = $_POST['number'] * mt_rand(1,6);
  ?>
  <?php
    echo date("Y-m-d H:i:s",time());  
  ?>
  <p>名前は <?php echo $my_name; ?>です。</p>
  <p>番号は <?php echo $number; ?>です。 </p>
  <p>おみくじは <?php if($omikuji >=1 & $omikuji <= 10) {
    echo "結果は凶";
  } elseif($omikuji >=11 & $omikuji <= 15) {
    echo "結果は小吉";
  } elseif($omikuji >=16 & $omikuji <= 20) {
    echo "結果は中吉";
  } elseif($omikuji >=21 & $omikuji <= 25) {
    echo "結果は吉";
  } elseif($omikuji >=26 & $omikuji <= 36) {
    echo "結果は大吉";
  } else {
    echo "結果は残念";
  } ?>です。</p>
