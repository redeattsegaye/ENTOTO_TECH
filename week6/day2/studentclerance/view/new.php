<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> this is php </title>
    </head>
    <body>
         <form action="../model/login.php" method="post">
        <?php
       echo $user;
   echo $pass;
   $db=new dblogin();
   $result=$db->userlogin($user,$pass);
   if($result =='1'){
       echo 'this is my php sample ';
       }else{
       echo'incorrect usernsme or password';}
        ?>
    </body>
</html>
