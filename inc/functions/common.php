<?php

function getMsg($type, $content) {
	$output = "<div class=\"notification ".$type." png_bg\">";
	$output .= "<div>".$content."</div>";
	$output .= "</div>";
	return $output;
}
	?>
