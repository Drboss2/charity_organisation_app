<?php
class User{
  private $con;
  public $full_name;
  public $country;
  public $state;
  public $city;
  public $home_address;
  public $dob;
  public $phone;
  public $sex;
  public $id_type;
  public $doi;
  public $doe;
  public $issue_auth;
  public $job;
  public $income;
  public $muslim;
  public $support;
  public $persons;
  public $volunteer;
  public $work_with_charity;
  public $charity_experience;
  public $muslim_with;
  public $non_muslim_with;
  public $just_need;
  public $religion_purpose;
  public $only_allowance;
  public $estimated_value_of_apps;
  public $purpose;
  public $month_allw;
  public $yearly_allw;
  public $audit;
  public $store;
  public $sell;
  public $converying;
  public $info;
  public $method;
  public $hear;
  public $email;
  public $password;
  public $crsf;
  public $tracking_number;
  public $date;
  public $id;
  public $details;
  public $other_details;
  public $progress;
  public $guarantee;
  public $image;

  public $url = 'http://localhost/charity';
    // constructor
    public function __construct($db){
        $this->con = $db;
    }
    //login account
    public function AdminLogin(){
        $stmt  = $this->con->prepare("select email,password,admin_id from admin where email=:email");
        $stmt->bindParam(":email",$this->email);
        $stmt->execute(); 

        if($stmt->rowCount() > 0){
            $result = $stmt->fetch(PDO::FETCH_OBJ);
                if($result->password == $this->password){
                    $_SESSION['email'] = $result->email;
                    $_SESSION['admin_id'] = $result->admin_id;

                    return 'true';
            }else{
                   return 'invalid password';
            }

         }else{
             return 'not found';
         }
    }

    public function addClient(){ // addclient shipping information
        if($this->checkCsrf()){
            return 1;
        }else{
            $stmt = $this->con->prepare("insert into tracking(crsf,full_name,email,country,state,city,image,home_address,dob,phone,sex,id_type,doi,doe,issue_auth,job,income,muslim,support,volunteer,work_with_charity,charity_experience,muslim_with,non_muslim_with,muslim_without,just_need,religion_purpose,only_allowance,estimated_value_of_apps,purpose,persons,month_allw,yearly_allw,audit,store,sell,converying,info,guarantee,method,hear,tracking_number,progress)values(:crsf,:full_name,:email,:country,:state,:city,:image,:home_address,:dob,:phone,:sex,:id_type,:doi,:doe,:issue_auth,:job,:income,:muslim,:support,:volunteer,:work_with_charity,:charity_experience,:muslim_with,:non_muslim_with,:muslim_without,:just_need,:religion_purpose,:only_allowance,:estimated_value_of_apps,:purpose,:persons,:month_allw,:yearly_allw,:audit,:store,:sell,:converying,:info,:guarantee,:method,:hear,:tracking_number,:progress)");
            
            $stmt->bindParam(":crsf",$this->crsf);
            $stmt->bindParam(":full_name",$this->full_name);
            $stmt->bindParam(":email",$this->email);
            $stmt->bindParam(":country",$this->country);
            $stmt->bindParam(":state",$this->state);
            $stmt->bindParam(":city",$this->city);
            $stmt->bindParam(":image",$this->image);
            $stmt->bindParam(":home_address",$this->home_address);
            $stmt->bindParam(":dob",$this->dob);
            $stmt->bindParam(":phone",$this->phone);
            $stmt->bindParam(":sex",$this->sex);
            $stmt->bindParam(":id_type",$this->id_type);
            $stmt->bindParam(":doi",$this->doi);
            $stmt->bindParam(":doe",$this->doe);
            $stmt->bindParam(":issue_auth",$this->issue_auth);
            $stmt->bindParam(":job",$this->job);
            $stmt->bindParam(":income",$this->income);
            $stmt->bindParam(":muslim",$this->muslim);
            $stmt->bindParam(":support",$this->support);
            $stmt->bindParam(":volunteer",$this->volunteer);
            $stmt->bindParam(":work_with_charity",$this->work_with_charity);
            $stmt->bindParam(":charity_experience",$this->charity_experience);
            $stmt->bindParam(":muslim_with",$this->muslim_with);
            $stmt->bindParam(":non_muslim_with",$this->non_muslim_with);
            $stmt->bindParam(":muslim_without",$this->muslim_without);

            $stmt->bindParam(":just_need",$this->just_need);
            $stmt->bindParam(":religion_purpose",$this->religion_purpose);
            $stmt->bindParam(":only_allowance",$this->only_allowance);
            $stmt->bindParam(":estimated_value_of_apps",$this->estimated_value_of_apps);
            $stmt->bindParam(":persons",$this->persons);

            $stmt->bindParam(":purpose",$this->purpose);
            $stmt->bindParam(":month_allw",$this->month_allw);
            $stmt->bindParam(":yearly_allw",$this->yearly_allw);
            $stmt->bindParam(":audit",$this->audit);
            $stmt->bindParam(":store",$this->store);
            $stmt->bindParam(":sell",$this->sell);
            $stmt->bindParam(":converying",$this->converying);
            $stmt->bindParam(":info",$this->info);
            $stmt->bindParam(":guarantee",$this->guarantee);

            $stmt->bindParam(":method",$this->method);
            $stmt->bindParam(":hear",$this->hear);
            $stmt->bindParam(":tracking_number",$this->tracking_number);
            $stmt->bindParam(":progress",$this->progress);

            if($stmt->execute()){
                return "inserted";
            }else{
                echo $this->con->error;
            }
        }
    }
    private function checkCsrf(){ // check for crsf
        $stmt = $this->con->prepare("select crsf from tracking where crsf=:crsf");
        $stmt->bindParam(":crsf",$this->crsf);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
    }

    public function getClientRowCount($table){ // get all client Count
        $stmt = $this->con->prepare("select * from $table");
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return $stmt->rowCount();
        }else{
            return "0";
        }
    }
    public function getRecodesWithPagination($table,$where=null, $wheres =null, $equal= null, $data= null){ // get all client
      $per_page = 7;
      if(isset($_GET['page'])){
          $page = $_GET['page'];
      }else{
          $page = 1;
      }

      $start_from = ($page -1) * $per_page;

      $stmt = $this->con->prepare("select * from $table $where $wheres $equal $data order by 1 desc limit $start_from, $per_page ");
      $stmt->execute();

      if($stmt->rowCount() > 0){
           $result = $stmt->fetchALL(PDO::FETCH_OBJ);

           return $result;
       }else{
           return "nill";
       }
    }

    public function pagination($table){ // client pagination
        if(isset($_GET['page'])){
          $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $per_page = 7;
        $stmt = $this->con->prepare("select * from $table");
        $stmt->execute();
        $total_records =  $stmt->rowCount();
        $total_pages = ceil($total_records/$per_page);

        $pagination ="<ul class='pagination'>";
        if($page > 1 ){
              $pagination .= "<li class='page-item active'> <a class='page-link' href='../account/home?client=true&page=".($page-1)."'>Prevous</a><span class='sr-only'>(current)</span> </a>  </li>";
             $pagination .= "<li class='page-item disabled'> <a class='page-link' href=#>Next</a><span class='sr-only'>(current)</span> </a></li>";
                    
         }
        for($i = 1; $i < $total_pages; $i++):
        endfor;
        if($i > $page){
            $pagination .= "<li class='page-item disabled'><a class='page-link' href=#>Previous</a><span class='sr-only'>(current)</span> </a></li>";
            $pagination .= "<li class='page-item active'><a class='page-link' href='../account/home?client=true&page=".($page+1)."'>Next</a><span class='sr-only'>(current)</span> </a></li>";               
        }
        $pagination .=   "</ul>";

        echo $pagination; 
    }
        public function paginationfOR($table,$id){ // client pagination
        if(isset($_GET['page'])){
          $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $per_page = 7;
        $stmt = $this->con->prepare("select * from $table");
        $stmt->execute();
        $total_records =  $stmt->rowCount();
        $total_pages = ceil($total_records/$per_page);

        $pagination ="<ul class='pagination'>";
        if($page > 1 ){
              $pagination .= "<li class='page-item active'> <a class='page-link' href='../account/home?view=$id&page=".($page-1)."'>Prevous</a><span class='sr-only'>(current)</span> </a>  </li>";
             $pagination .= "<li class='page-item disabled'> <a class='page-link' href=#>Next</a><span class='sr-only'>(current)</span> </a></li>";
                    
         }
        for($i = 1; $i < $total_pages; $i++):
        endfor;
        if($i > $page){
            $pagination .= "<li class='page-item disabled'><a class='page-link' href=#>Previous</a><span class='sr-only'>(current)</span> </a></li>";
            $pagination .= "<li class='page-item active'><a class='page-link' href='../account/home?view=$id&page=".($page+1)."'>Next</a><span class='sr-only'>(current)</span> </a></li>";               
        }
        $pagination .=   "</ul>";

        echo $pagination; 
    }


    public function singleClient($table,$id){ // get single client details
        $stmt  = $this->con->prepare("select * from $table where id=$id");
        $stmt->execute(); 

         if($stmt->rowCount() > 0){
             $result = $stmt->fetch(PDO::FETCH_OBJ);

             return $result;
         }else{
             return 'not found';
         }
    }
    public function deleteClient($table,$id){ // delete clients
        $stmt  = $this->con->prepare("delete from $table where id='$id'");
        $stmt->execute(); 

        return true;
    }

    public function editClientsInfo($id){ // edit clients details 
        $stmt  = $this->con->prepare("UPDATE `tracking` 
        SET 
        `full_name` =:full_name,
        `email`     =:email,
        `country`   =:country,
        `state`     =:state,
        `city`      =:city,
        `image`     =:image,
        `home_address`=:home_address,
        `dob`      =:dob,
        `phone`    =:phone,
        `sex`      =:sex,
        `id_type`  =:id_type,
        `doi`      =:doi,
        `doe`      =:doe,
        `issue_auth` =:issue_auth,
        `job`        =:job,
        `income`     =:income,
        `muslim`     =:muslim,
        `support`    =:support,
        `volunteer`  =:volunteer,
        `work_with_charity` =:work_with_charity,
        `charity_experience`=:charity_experience,
        `muslim_with`       =:muslim_with,
        `non_muslim_with`   =:non_muslim_with,
        `muslim_without`    =:muslim_without,
        `just_need`         =:just_need,
        `religion_purpose`  =:religion_purpose,
        `only_allowance`    =:only_allowance,
        `estimated_value_of_apps`  =:estimated_value_of_apps,
        `persons`           =:persons,
        `purpose`           =:purpose,
        `month_allw`        =:month_allw,
        `yearly_allw`       =:yearly_allw,
        `audit`             =:audit,
        `store`             =:store,
        `sell`              =:sell,
        `converying`        =:converying,
        `info`              =:info,
        `guarantee`         =:guarantee,
        `method`            =:method,
        `hear`              =:hear,
        `progress`          =:progress

        WHERE id            =$id");

        $stmt->bindParam(":full_name",$this->full_name);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":country",$this->country);
        $stmt->bindParam(":state",$this->state);
        $stmt->bindParam(":city",$this->city);
        $stmt->bindParam(":image",$this->image);

        $stmt->bindParam(":home_address",$this->home_address);
        $stmt->bindParam(":dob",$this->dob);
        $stmt->bindParam(":phone",$this->phone);
        $stmt->bindParam(":sex",$this->sex);
        $stmt->bindParam(":id_type",$this->id_type);
        $stmt->bindParam(":doi",$this->doi);
        $stmt->bindParam(":doe",$this->doe);
        $stmt->bindParam(":issue_auth",$this->issue_auth);
        $stmt->bindParam(":job",$this->job);
        $stmt->bindParam(":income",$this->income);
        $stmt->bindParam(":muslim",$this->muslim);
        $stmt->bindParam(":support",$this->support);
        $stmt->bindParam(":volunteer",$this->volunteer);
        $stmt->bindParam(":work_with_charity",$this->work_with_charity);
        $stmt->bindParam(":charity_experience",$this->charity_experience);
        $stmt->bindParam(":muslim_with",$this->muslim_with);
        $stmt->bindParam(":non_muslim_with",$this->non_muslim_with);
        $stmt->bindParam(":muslim_without",$this->muslim_without);
        $stmt->bindParam(":just_need",$this->just_need);
        $stmt->bindParam(":religion_purpose",$this->religion_purpose);
        $stmt->bindParam(":only_allowance",$this->only_allowance);
        $stmt->bindParam(":estimated_value_of_apps",$this->estimated_value_of_apps);
        $stmt->bindParam(":persons",$this->persons);
        $stmt->bindParam(":purpose",$this->purpose);
        $stmt->bindParam(":month_allw",$this->month_allw);
        $stmt->bindParam(":yearly_allw",$this->yearly_allw);
        $stmt->bindParam(":audit",$this->audit);
        $stmt->bindParam(":store",$this->store);
        $stmt->bindParam(":sell",$this->sell);
        $stmt->bindParam(":converying",$this->converying);
        $stmt->bindParam(":info",$this->info);
        $stmt->bindParam(":guarantee",$this->guarantee);
        $stmt->bindParam(":method",$this->method);
        $stmt->bindParam(":hear",$this->hear);
        $stmt->bindParam(":progress",$this->progress);

        $stmt->execute();

        return true;
    }
    public function addShippingHistory(){ // addclient shipping history
     
        $stmt = $this->con->prepare("insert into shipping_history(client_id,location,tracking_number,details,other_details)values(:client_id,:location,:tracking_number,:details,:other_details)");
        $stmt->bindParam(":client_id",$this->id);
        $stmt->bindParam(":location",$this->delivery_country);

        $stmt->bindParam(":tracking_number",$this->tracking_number);
        $stmt->bindParam(":details",$this->details);
        $stmt->bindParam(":other_details",$this->other_details);
    
        if($stmt->execute()){
            return "inserted";
        }else{
            echo $this->con->error;
        }
    }

    public function editShippingDetails($id){ //edit shipping history
        $stmt = $this->con->prepare("UPDATE `shipping_history` SET
        `details` =:details
        WHERE id= $id");

        $stmt->bindParam(':details',$this->details);
        if($stmt->execute()){
             return "updated";
        }
    }

    public function getShippingHistory($table,$data){ // get shipping history on track
        $stmt  = $this->con->prepare("select * from $table where tracking_number =:tracking_number order by 1 desc limit 7");
        $stmt->bindParam(':tracking_number',$data);
        $stmt->execute(); 

         if($stmt->rowCount() > 0){
             $result = $stmt->fetchAll(PDO::FETCH_OBJ);

             return $result;
         }else{
             return 'not found';
         }
    }

     public function singleClientTrack($table,$num){ // get single client tracking info
        $stmt  = $this->con->prepare("select * from $table where tracking_number=:tracking_number");
        $stmt->bindParam(":tracking_number",$num);
        $stmt->execute(); 

         if($stmt->rowCount() > 0){
             $result = $stmt->fetch(PDO::FETCH_OBJ);

             return $result;
         }else{
             return 'not found';
         }
    }
       
    public function __destruct(){
        $this->con  = null;
    }

    // escape strings
    private function cleanString($data){
       $data = htmlspecialchars($data);
       $data = trim($data);
       $data = stripslashes($data);
       $data = strip_tags($data);

       return $data;
    }
}

?>