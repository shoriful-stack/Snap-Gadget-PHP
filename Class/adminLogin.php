<?php 
include "./Library/session.php";
Session :: checkSession();
include "./Library/database.php";
include "./admin/helpers/format.php";
class AdminLogin{
    private $db;
    private $format;
    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }
    public function adminLogin($adminUsername, $adminPass){
        $adminUsername = $this->format->validation($adminUsername);
        $adminPass = $this->format->validation($adminPass);

        $adminUsername = mysqli_real_escape_string($this->db->link, $adminUsername);
        $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

        if(empty($adminUsername) || empty($adminPass)){
            $errormsg = "Username and pass should be filled up";
            return $errormsg;
        }else{

        }
    }
}

?>