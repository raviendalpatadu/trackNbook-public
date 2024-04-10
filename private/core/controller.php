<?php

/**
 * main home controller
 */

class Controller
{
    public function view($view, $data = array())
    {
        if (is_array($data) && count($data) > 0)
            extract($data);

        if (file_exists("../private/views/" . $view . ".view.php")) {
            require("../private/views/" . $view . ".view.php");
        } else {
            require("../private/views/error404.view.php");
        }
    }
    public function load_model($model)
    {
        if (file_exists("../private/models/". ucfirst($model) .".php")) {
            require("../private/models/". ucfirst($model) .".php");
            return $model = new $model();
        }
        return false;
    }
    public function redirect($link)
    {
        header("Location:" . ROOT . trim($link, "/"));
        die;
    }

    function getPrivateImage($folder, $file)
    {
        $mediapath = '../private/private_assets/imgs/'.$folder.'/' . $file;
        if (file_exists($mediapath)) {
            readfile($mediapath);
        }else{
            echo "File not found!";
        }
    }

    public function setPrivateImage($folder, $file, $old_image = 'default.jpg')
    {
      
        $target_file = '../private/private_assets/imgs/';

        // Move the uploaded file
        $image_name = generate_unique_filename($file);
        $image_tmp = $file['tmp_name'];
        $image_size = $file['size'];
        $image_type = $file['type'];

       
        $image_path =  $target_file . $folder . "/" . $image_name;

        $folder_path = $target_file . $folder;

        
        
        if(!file_exists($folder_path)){
            mkdir($folder_path, 0777, true);
        }

        // // if there is an exixting imgae delete it
        $image_old_path = $target_file . $old_image;
        if (file_exists($image_old_path) and strpos($old_image, 'default.jpg') === false) {
            unlink($image_old_path);
        }
        
        move_uploaded_file($image_tmp, $image_path);
        
        $image = [
            'image_name' => $image_name,
            'image_path' => $folder . "/" . $image_name,
            'image_type' => $image_type,
            'image_size' => $image_size,
        ];
        return $image;    
    }
}
