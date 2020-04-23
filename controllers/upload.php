<?php



if(isset($_POST["submit"])){
    $target_dir = "storage/uploads/" ;
    $target_dirs = "storage/images/";
    
    $target_file =$target_dir .basename($_FILES["fileToUpload"]["name"]);
    $target_files =$target_dirs . basename($_FILES["fileToUploads"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imageFileTypes = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));

    var_dump("$imageFileType");
      
    if(isset($_FILES["fileToUpload"]) && isset($_FILES["fileToUploads"])) {
        $check = getimagesize($_FILES['fileToUpload']['tmp_name'] );
        $checks =getimagesize($_FILES['fileToUploads']['tmp_name']);

    }

        if($uploadOk){
            if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file) && move_uploaded_file($_FILES['fileToUploads']['tmp_name'], $target_files)){
                    
                $data =[
                    'table' => 'form',
                    'columns' => [
                        'firstname',
                        'lastname',
                        'class',
                        'file_path',
                        'file_paths'
                    ],
                    'firstname' => $_POST["fname"],
                    'lastname'  => $_POST["lname"],
                    'class'     => $_POST["class"],
                    'file_path' => $target_file,
                    'file_paths' => $target_files
                    
                
                ]; 

                $res = $query->insert($data);

                if($res){
                    header("Location /");
                }
            }
        }
    }






$data = $query->select("form");




require "views/upload.view.php";


