<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

$upload_dir = "../../assets/uploadedpics"; 				// The directory for the images to be saved in
$upload_path = $upload_dir."/";				// The path to where the image will be saved
$max_file = "1148576"; 						// Approx 1MB
$max_width = "700";							// Max width allowed for the large image
$thumb_width = "174";						// Width of thumbnail image
$thumb_height = "94";						// Height of thumbnail image


//Create the upload directory with the right permissions if it doesn't exist
if(!is_dir($upload_dir)) {
	$error = "Something went wrong. Check your permissions to the folder at: ".$upload_dir;
	echo $error;
	exit();
}
if(!is_dir($upload_dir)){
	mkdir($upload_dir, 0777);
	chmod($upload_dir, 0777);
}

//Image Locations
$large_image_location = $upload_path.$_SERVER['HTTP_HOST']."_".$_FILES['image']['name']; 		// New name of the large image
//$thumb_image_location = $upload_path.$thumb_image_name;

if (isset($_POST["photoupload"])) { 
	//Get the file information
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$filename = basename($_FILES['image']['name']);
	$file_ext = substr($filename, strrpos($filename, '.') + 1);
	
	//Only process if the file is a JPG and below the allowed limit
	if((!empty($_FILES["image"])) && ($_FILES['image']['error'] == 0)) {
		if (($file_ext!="jpg") && ($userfile_size > $max_file)) {
			$error= "ONLY jpeg images under 1MB are accepted for upload";
		}
	}else{
		$error= "Select a jpeg image, that is less than approx 1MB for upload. Your file was ".$_FILES['image']['size'];
		$error .= "<br /><pre>";
		$error .= print_r($_FILES);
		$error .= "</pre>";
	}
	//Everything is ok, so we can upload the image.
	if (strlen($error)==0){
		
		if (isset($_FILES['image']['name'])){
			
			move_uploaded_file($userfile_tmp, $large_image_location);
			chmod($large_image_location, 0777);
			
			$width = getWidth($large_image_location);
			$height = getHeight($large_image_location);
			//Scale the image if it is greater than the width set above
			if ($width > $max_width){
				$scale = $max_width/$width;
				$uploaded = resizeImage($large_image_location,$width,$height,$scale);
			}else{
				$scale = 1;
				$uploaded = resizeImage($large_image_location,$width,$height,$scale);
			}
			//Delete the thumbnail file so the user can create a new one
			if (file_exists($thumb_image_location)) {
				unlink($thumb_image_location);
			}
		}
		//Refresh the page to show the new uploaded image
		header("location: ../index.php?page=images");
		exit();
	}
}
 echo $error;


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
function resizeImage($image,$width,$height,$scale) {
	$newImageWidth = ceil($width * $scale);
	$newImageHeight = ceil($height * $scale);
	$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
	$source = imagecreatefromjpeg($image);
	imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
	imagejpeg($newImage,$image,90);
	chmod($image, 0777);
	return $image;
}
?>
