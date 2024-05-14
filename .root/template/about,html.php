<?php ob_start();
$title='index - about';
?>

about
<p style="font-size:12px;">about is used as a placement for contact information</p>
<h2>connectedwizzard</h2>
<img src="https://66.media.tumblr.com/a2557dd3c56d0284e119852333c7d0ca/tumblr_p57j98DEeu1uiavy2o6_400.png" alt="picture" height="360" width="360">
<p style="font-size:12px;">a picture of engineer from tumblr & tf comic</p>
<p style="font-size:12px;">iconic profile picture</p><br>
<p>EMAIL:</p>
<p>connectedwizzard@gmail.com</p>

<?php
$content=ob_get_clean();
require "t/layout.html.php";
?>
