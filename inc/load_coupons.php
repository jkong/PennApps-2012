<?php
require_once('db.config.php');

$coupons = $mysqli->query('SELECT * FROM coupon');

while ($coupon = $coupons->fetch_array()) {
  echo '<br />';
  echo '<a href="coupon.php?id=' . $coupon['id'] . '">';
  echo '<div class="coupon">';
  echo 'Title: ' . $coupon['title'];
  echo '<br />';
  echo 'Description: ' . $coupon['description'];
  echo '</div>';
  echo '</a>';
}

$mysqli->close();
?>
