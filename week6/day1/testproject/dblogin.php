<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dblogin
 *
 * @author mis hacker
 */
class dblogin {
    private $conn;
    function __construct() {
        include_once 'dbconnect.php';
        $db=new dbconnect();
        $this->conn=$db->connect();
        
        
    }
    public function userlogin($user,$pass){
        $stm=$this->conn->prepare("select * from login where username=? and password=?");
        $stm->bind_param("ss",$user,$pass);
        $stm->execute();
        $stm->store_result();
        if($stm->num_rows>0){
        return 1;
        }
            else{
                return 2;
            }
          
             }
              
            public function signup($full_name,$age,$phone,$email){
                $stm= $this->conn->prepare("insert into signup(Full_name,age,phone,email)values(?,?,?,?);");
                $stm->bind_param("ssss",$full_name,$age,$phone,$email);
                if($stm->execute()){
                    return 1;
                }else{
                    return;
                }
                
            }
        }
        
    


        
    

