<?php
require_once('db.config.php');

$coupons = $mysqli->query('SELECT * FROM coupon ORDER BY id DESC');

while ($coupon = $coupons->fetch_array()) {
  echo '<br />';
  echo '<a href="coupon.php?id=' . $coupon['id'] . '">';
  echo '<div class="coupon">';
  echo '<img src="' . $coupon['url'] . '" width="100px" />';
  echo '<br />';
  echo 'Retailer: ' . $coupon['vendor'];
  echo '<br />';
  echo 'Title: ' . $coupon['title'];
  echo '<br />';
  echo 'Description: ' . $coupon['description'];
  echo '<br />';
  $user = $facebook->api('/' . $coupon['author']);
  echo 'Posted by ' . $user['name'];
  echo "<img src='http://graph.facebook.com/" . $coupon['author'] . "/picture' style='padding-left:10px'/>";
  echo '<br />';
  $datetime = strtotime($coupon['createDate']);
  echo 'Date Added: ' . date('m/d/y g:i A', $datetime);
  echo '</div>';
  echo '</a>';
  echo '<a href="saveToDropbox.php?id=' . $coupon['id'] . '&return_url=browse.php">Save to Dropbox</a>';
  echo '<br />';
}

$mysqli->close();
?>
