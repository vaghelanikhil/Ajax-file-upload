<?php
if(count($_FILES['myfile']['name']) > 0){
foreach($_FILES['myfile']['name'] as $key=>$val){
        //upload and stored images
        $target_dir = "uploads/";
        $target_file = $target_dir.$_FILES['myfile']['name'][$key];
        if(move_uploaded_file($_FILES['myfile']['tmp_name'][$key],$target_file)){
            $images_arr[] = $target_file;
        }
    }
	}
?>
