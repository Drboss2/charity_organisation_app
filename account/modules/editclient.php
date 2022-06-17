<?php
    include_once "../config/db.php";
    include_once "script.php";

    // instantiate database
    $database = new Database();
    $db = $database->connect();

    //instantiate user object
    $user = new User($db);

    if(isset($_POST['client'])){
        $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
        $id                     = $post['id'];
        $user->full_name        = $post['full_name'];
        $user->email            = $post['email'];
        $user->country          =  $post['country'];
        $user->state            =  $post['state'];
        $user->city             =  $post['city'];
        $user->home_address     = $post['home_address'];
        $user->dob              = $post['dob'];
        $user->phone            = $post['phone'];
        $user->sex              = $post['sex'];

        $user->id_type          = $post['id_type'];
        $user->doi              = $post['doi'];
        $user->doe              = $post['doe'];
        $user->issue_auth  = $post['issue_auth'];

        $user->job       = $post['job'];
        $user->income           = $post['income'];

        $user->muslim           = $post['muslim'];
        $user->support          = $post['support'];
        $user->volunteer        = $post['volunteer'];

        $user->work_with_charity = $post['work_with_charity'];
        $user->charity_experience= $post['charity_experience'];
        $user->muslim_with       = $post['muslim_with'];
        $user->non_muslim_with   = $post['non_muslim_with'];

        
        $user->muslim_without    = $post['muslim_without'];
        $user->just_need         = $post['just_need'];
        $user->religion_purpose  = $post['religion_purpose'];


        $user->only_allowance   = $post['only_allowance'];
        $user->estimated_value_of_apps = $post['estimated_value_of_apps'];
        
        $user->purpose          = $post['purpose'];
        $user->persons          = $post['persons'];

        $user->month_allw       = $post['month_allw'];
        $user->yearly_allw      = $post['yearly_allw'];
        $user->audit            = $post['audit'];
        $user->store            = $post['store'];

        
        $user->sell             = $post['sell'];
        $user->converying       = $post['converying'];
        $user->info             = $post['info'];
        $user->guarantee        = $post['guarantee'];

        $user->progress         = $post['progress'];
        $user->method           = $post['method'];
        $user->hear             = $post['hear'];

        $image                  =$_FILES['file']['name'];
        $tmp                    =$_FILES['file']['tmp_name'];

        $explode                 = explode('.',$image);

        $allowedExts = array("jpeg", "jpg", "png");
        $file_ext    = end($explode);

        if(in_array($file_ext, $allowedExts)){
            $user->image = time(). '.' .$file_ext;

            move_uploaded_file($tmp, "../images/" . $user->image);

            $user->editClientsInfo($id); 

            header("location:../home?account=edit");
        }
    }

?>