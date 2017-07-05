<!DOCTYPE html>
<html>
<body>
<title>Fille</title>
<h1>Fille</h1>
<hr>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
<br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<hr>
<?php
$directory = "i/";
$filecount = 0;
$files = glob($directory . "*");
if ($files){
 $filecount = count($files);
}
echo "There are $filecount uploaded files :)";
?>
<br>
<?php
$directory = "i/";
$filecount = 0;
$files = glob($directory . "*.{jpg,png,gif,jpeg,bmp}",GLOB_BRACE);
if ($files){
 $filecount = count($files);
}
echo "$filecount of them are images :)";
?>
<br
<?php
$directory = "i/";
$filecount = 0;
$files = glob($directory . "*.{html,css,js}",GLOB_BRACE);
if ($files){
 $filecount = count($files);
}
echo "$filecount of them are either html,css,or js :)";
?>
<br>
<?php
$directory = "i/";
$filecount = 0;
$files = glob($directory . "*.{exe,msi}",GLOB_BRACE);
if ($files){
 $filecount = count($files);
}
echo "$filecount of them are exes or msis :)";
?>
<hr>
Credits:
<br>
Thanks to Codefox for file uploader code
<hr>
Contact me (Domenic Waterdash) at admin@dtool.cf
</body>
</html>