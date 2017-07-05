
<!DOCTYPE html>
<script src="src/js/jquery.js"></script>
<link rel="stylesheet" href="src/css/main.css">
<link rel="stylesheet" href="src/css/bubbles.css">
<script src="src/js/main.js"></script>
<script src="src/js/title.js"></script>

<html>
<body>
<title>Fille</title>
<div id="bubbles">
<div id="text">
<h1>Fille</h1>
</div>
<div id="text">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
</div>
<div id="files">

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
<br>
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


</div>
<div class="credits">
Thanks to Codefox for file uploader code

Contact me (Domenic Waterdash) at admin@dtool.cf
<button onclick="$('.credits').remove()">&times;</button>
</div>
</body>
</html>
   <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>

</div>
