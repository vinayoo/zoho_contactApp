
<?php
session_start();
include_once("dbconnection.php");
if(isset($_POST['login']))
{
$email=$_POST['email'];
$pwd=$_POST['password'];
$username=$_POST['username'];

$query="SELECT * from users where email='$email' AND password='$pwd'";
$q=mysqli_query($conn,$query);
$rows=mysqli_num_rows($q);
if($rows>0)
{
    $_SESSION['username']=$username;
    header("location:index.php");
}
else{
    echo "<script>alert(\"Invalid details\")</script>";
    

}
}
?>
<head>

<meta name="veiwport" content=" width:device-widht initial-scale=1.0">
 
<link rel="stylesheet"  type="text/css" href="bootstrap.css"></link>

</head>
    <body>
    <div class="container vh-100">
            <div class="row justify-content-center h-100">
                <div class="card w-50 my-auto shadow"> 
                <div class="card-header text-center bg-primary text-white ">
                <h2>Login form</h2>
               </div>
               <div class="card-body ">
                <form   method="post">
                    <table >
                        <tr>
                            <td>
                                <label for="email"><strong>email:</strong></label>
                            </br>
                            <input type="email" style="width:500px" name="email" id="email" placeholder="zoho@gmail.com"  class=" flow-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="username"><strong>username:</strong></label>
                            </br>
                            <input type="text" name="username"  style="width:500px" id="username" placeholder="zoho"  class=" flow-control" required>
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <label for="password"><strong>password:</strong></label>
                        </br>
                        <input type="text" name="password"  id="password"  style="width:500px" placeholder="*********" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:center"><br>

                            <input type="submit" class="btn btn-primary " style="width: 300px;" value="Login" name="login">
                        </td>
                    </tr>
                    </table>
                </form>

            </div>
            <div class="card-footer">
                <table class="center">
                    <tr>
                   <td style="text-align: right;">Dont't have an account <a href=registration.php> <b>register </b></a> &nbsp;&nbsp;&nbsp;
                   </td>
                    <td style="text-align:left"><small>
                        &nbsp;
                        &copy;Zoho company
                    </small>
                    </td>
            </div>
               </div>
                
           </div>

       </div>
    </body>