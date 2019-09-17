<?php
session_start();


function loginvalidation(){
  include 'db.php';
  $email    = $_REQUEST['userEmail'];
  $password = $_REQUEST['userPassword'];

  if((isset($email) && !empty($email)) && (isset($password)&&!empty($email)) )
  {
    $query = "SELECT * FROM users WHERE email = '$email' ";
    $run = mysqli_query($connect, $query);
    $result = mysqli_fetch_assoc($run);
    //print("<pre>".print_r($result,true)."</pre>");die;
    // get result
    $pwd = $result['password'];
    $id  = $result['id'];

    //print("<pre>".print_r($result,true)."</pre>");die;
    if (mysqli_num_rows($run) == 1  && password_verify($password, $pwd)) 
    {
        $_SESSION['firstName'] = $result['firstname'];
        $_SESSION['lastName'] = $result['lastname'];
        $_SESSION['email'] = $email;
        $_SESSION['userId'] = $id;
        $_SESSION['isLogin'] = true;
        mysqli_close($connect);
        header('location: welcome.php'); 
        //mysqli_error($conn)
    } 
    else if (!empty($email) || !empty($password)) 
    {
        mysqli_close($connect);
        return "Error! Enter valid password or email.";  
    } 
    else 
    {
        mysqli_close($connect);
        return "Error! Enter your credentials.";
    }
  }
}

// Validate a admin user login
function validateuser()
{
    if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] != TRUE) 
    {
      header('Location: index.php');die();
    }
}

function logout(){
  unset($_SESSION['firstName']);
  unset($_SESSION['lastName']);
  unset($_SESSION['email']);
  unset($_SESSION['userId']);
  unset($_SESSION['isLogin']);
}

?>