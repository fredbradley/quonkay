<?php
$thumb_width = "174";                                           // Width of thumbnail image
$thumb_height = "94";                                           // Height of thumbnail image
$large_image_name = $_POST['thumb'];
$upload_path = $SITE_PATH.'assets/uploadedpics/thumbs/';
$thumb_image_location = $upload_path.$large_image_name;
$smarty->assign('large_image', $large_image_name);

$large_image_location = $SITE_PATH.'assets/uploadedpics/'.$large_image_name;

if (isset($_POST["upload_thumbnail"]) ){
        //Get the new coordinates to crop the image.
        $x1 = $_POST["x1"];
        $y1 = $_POST["y1"];
        $x2 = $_POST["x2"];
        $y2 = $_POST["y2"];
        $w = $_POST["w"];
        $h = $_POST["h"];
        //Scale the image to the thumb_width set above
        $scale = $thumb_width/$w;
        $cropped = resizeThumbnailImage($thumb_image_location, $large_image_location,$w,$h,$x1,$y1,$scale);
        //Reload the page again to view the thumbnail
//        header("location:".$_SERVER["PHP_SELF"]);
  //      exit();
	$smarty->assign('message', 'That thumbnail version is now saved. You can rewrite over it again any time!');
}




 if ($handle = opendir('../assets/uploadedpics')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {
          	$thelist .= '<option value="'.$file.'">'.$file.'</option>';
          }
       }
  closedir($handle);
  }

$smarty->assign('options', $thelist);

       
$large_width = getWidth($large_image_location);
$large_height = getHeight($large_image_location);

$smarty->assign('large_image_width', $large_width);
$smarty->assign('large_image_height', $large_height);

//You do not need to alter these functions
function resizeThumbnailImage($thumb_image_name, $image, $width, $height, $start_width, $start_height, $scale){
        $newImageWidth = ceil($width * $scale);
        $newImageHeight = ceil($height * $scale);
        $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
        $source = imagecreatefromjpeg($image);
        imagecopyresampled($newImage,$source,0,0,$start_width,$start_height,$newImageWidth,$newImageHeight,$width,$height);
        imagejpeg($newImage,$thumb_image_name,90);
        chmod($thumb_image_name, 0777);
        return $thumb_image_name;
}
//You do not need to alter these functions
function getHeight($image) {
        $sizes = getimagesize($image);
        $height = $sizes[1];
        return $height;
}
//You do not need to alter these functions
function getWidth($image) {
        $sizes = getimagesize($image);
        $width = $sizes[0];
        return $width;
}

?>
