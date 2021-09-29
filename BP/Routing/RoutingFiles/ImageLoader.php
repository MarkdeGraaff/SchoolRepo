<?php
class ImageLoad {
  public static function load($imagePath) {
    $path = base64_encode(file_get_contents("./".$imagePath));
    $fullpath = "<img src='data:image/png;base64,".$path."' alt='image'>";
        echo $fullpath;
    }
}
?>
