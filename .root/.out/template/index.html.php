<?php ob_start();
$title='index';
?>

index<br>
<p style="font-size:12px;">index is used as a placement for one pinned post</p>


<?php
$content=ob_get_clean();
require "t/layout.html.php";
?>
