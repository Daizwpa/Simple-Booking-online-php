<?php 
include 'company.php';
include 'user.php';

function check_auth(){
    session_start();
    
    if(isset($_SESSION["type"])) {
        if(!empty($_SESSION['type'])){
    
        }
        
    }else{
    
       echo "<script>alert('you can not access to this page'); window.location='./../index.php'</script>";
       die();
    
    }

}
function check_is_user(){
    check_auth();
    if($_SESSION['type'] == "user"){
        $user = new User();
        $is_there = $user->look_for_undefined("id", $_SESSION['id']);
        
        if($is_there){
            return $user;
        }else{
            echo "<script>alert('unfound user'); window.location='./../index.php'</script>";
            die();
        }
        return $user;

    }else{
        echo "<script>alert('you can not access to this page'); window.location='./../index.php'</script>";
        die();

    }

}

function check_is_company(){
    check_auth();
    if($_SESSION['type'] == "company"){
        $company = new Company();

        $is_there = $company->look_for_undefined('id', $_SESSION['id']);

        if($is_there){
            return $company;
        }else{
            
            echo "<script>alert('unfound company'); window.location='./../index.php'</script>";
            die();

        }
        

    }else{
        echo "<script>alert('you can not access to this page'); window.location='./../index.php'</script>";
        die();

    }

}
function is_login(){
    session_start();
    if(isset($_SESSION["type"])) {
        if(!empty($_SESSION['type'])){

            if($_SESSION['type'] == "user"){
                echo "<script>window.location='./../view/DashBoordUser.php'</script>";
                die();

            }else if($_SESSION['type'] == "company"){
                echo "<script>window.location='./../view/DashBoordCompany.php'</script>";
                die();

            }
        }
    
    }
        

}
function is_login_for_index(){
    session_start();
    if(isset($_SESSION["type"])) {
        if(!empty($_SESSION['type'])){

            if($_SESSION['type'] == "user"){
                echo "<script>window.location='./view/DashBoordUser.php'</script>";
                die();

            }else if($_SESSION['type'] == "company"){
                echo "<script>window.location='./view/DashBoordCompany.php'</script>";
                die();

            }
        }
    
    }
        

}





?>