<?php

    if ( 0 < $_FILES['myfile']['error'] ) {
        echo 'Error: ' . $_FILES['myfile']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['myfile']['tmp_name'], 'uploads/' . $_FILES['myfile']['name']);
		echo "success";
    }

?>