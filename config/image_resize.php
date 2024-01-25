<?php

class image_resize{

    private $image;
    private $extension;
    private $image_width;
    private $image_height;
    private $resized_width;
    private $resized_height;
    private $resized_image;

    function __construct($image,$image_name){
        list($width,$height) = getimagesize($image);
        $this->extension = strtolower(pathinfo($image_name,PATHINFO_EXTENSION));
        $this->image = imagecreatefromstring(file_get_contents($image));
        $this->image_width = $width;
        $this->image_height = $height;

    }

    public function resize_image($new_width,$new_height,$crop = false){
        $ratio = [];

        switch(true){
            // If uploaded image is landscape keep new width and calculate new height
            case ($this->image_width > $this->image_height):
                $this->resized_width = $new_width;
                $this->resized_height = $this->get_image_height_ratio($new_width,$new_height);
                // If crop is true set height to new height and calculate width again.
                if($this->resized_height < $new_height && $crop){
                    $this->resized_height = $new_height;
                    $this->resized_width = $this->get_image_width_ratio($new_width,$new_height);
                }
            break;
            // If uploaded image is portrait keep new height and calculate new width
            case ($this->image_height > $this->image_width):
                $this->resized_width = $this->get_image_width_ratio($new_width,$new_height);
                $this->resized_height = $new_height;
                // If crop is true set width to new width and calculate height again.
                if($this->resized_width < $new_width && $crop){
                    $this->resized_width = $new_width;
                    $this->resized_height = $this->get_image_height_ratio($new_width,$new_height);
                }
            break;
            // If uploaded image is square keep new width and new height. calculate nothing.
            default:
                $this->resized_width = $new_width;
                $this->resized_height = $new_height;
            break;
        }

        $this->resized_image = imagecreatetruecolor($new_width, $new_height);

        $color = imagecolorallocate($this->resized_image, 255, 255, 255);
        imagefill($this->resized_image, 0, 0, $color);

        $cropX = ($this->resized_width - $new_width) / 2;
        $cropY = ($this->resized_height - $new_height) / 2;
        imagecopyresampled($this->resized_image, $this->image, -$cropX, -$cropY, 0, 0, $this->resized_width, $this->resized_height, $this->image_width, $this->image_height);
    }

    private function get_image_height_ratio($new_width,$new_height){
        $ratio = $new_width / $this->image_width;
        $height = ceil($ratio * $this->image_height);
        return $height;
    }

    private function get_image_width_ratio($new_width,$new_height){
        $ratio = $new_height / $this->image_height;
        $width = ceil($ratio * $this->image_width);
        return $width;
    }

    public function show_image(){
        // Start output buffering in case headers were already sent.
        ob_start();
        header("content-type: image/jpg");
        imagejpeg($this->resized_image, NULL, 100);
        header("content-type: text/html");
        $result = ob_get_clean();

        return $result;
    }

    public function save_image($path){

         switch($this->extension){

            case "jpeg":
            case "jpg":
               imagejpeg($this->resized_image, $path, 100);
            break;

            case "gif":
               imagegif($this->resized_image, $path, 100);
            break;

            case "png":
               imagepng($this->resized_image, $path, 9);
            break;

            default:
                $img = NULL;
            break;

        }
    }

}