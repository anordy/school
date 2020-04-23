<?php



if(isset($_POST["submit"])){
    $target_dir = "storage/uploads";
    $target_file =$target_dir .basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    var_dump($imageFileType);
      
    if(isset($_FILES["fileToUpload"])) {
        $check = getimagesize($_FILES["fileToupload"]["tmp_name"]);
        if(true){
            echo "file is an image -" . $check["mime"] . ".";
            $uploadOk =1;
        } else {
            echo "file is not an image" ;
            $uploadOk = 0;
        }

    }
        if($uploadOk){
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp-name"],$target_file)){
                $data =[
                    'table' => 'form',
                    'columns' => [
                        'firstname','lastname','class','file_path'
                    ],
                    'firstname' => $_POST["fname"],
                    'lastname'  => $_POST["lname"],
                    'class'     => $_POST["class"],
                    'file_path' => $target_file
                    
                
                ];

                $res = $query->insert($data);

                if($res){
                    header: 'Location: /';
                }
            }
        }
    }






$data = $query->select("form");




require "views/upload.view.php";


