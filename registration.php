
<?php
include_once("dbconnection.php");
if(isset($_POST['reg']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];
    $query="SELECT * from users where email='$email'";
    $q=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($q);
    if($rows>0)
    {
        echo "<script> alert(\" details already exist\")</script>"; 
           
    }
    else{
        $query= "INSERT into users values('$email','$username','$password')";
        $q=mysqli_query($conn,$query);
         echo "<script> alert(\" registered\")</script>"; 
         header("loaction:login.php");
          
    } 
}
?>



    <head>
        <meta name="veiw port" content="width:device-width initial-scale:1.0">
    <title>
register
    </title>
    <link rel="stylesheet" type="text/css"  href="bootstrap.css"></link>
    <body>
        <div class="container vh-100">
            <div class="row justify-content-center h-100">
                <div class="card w-50 my-auto shadow"> 
                <div class="card-header text-center bg-primary text-white ">
                        <h2>Sign in</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <table class="form-group">
                                <tr>
                                    <td>
                                        <label for="email"><strong>email:</strong></label>
                                    </br>
                                    <input type="email"   style="width:500px"name="email" id="email" placeholder="zoho"  class=" flow-control" required>
                                    </td>
                                </tr>
                            <tr>
                                <td>
                                    <label for="username"><strong>username:</strong></label>
                                </br>
                                <input type="text" name="username" id="username" style="width:500px" placeholder="zoho"  class=" flow-control" required>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <label for="password"><strong>password:</strong></label>
                            </br>
                            <input type="text" name="password"  id="password" style="width:500px" placeholder="*********" required>
                            </td>
                        </tr>
                        
        
                        <tr>
                            <td style="text-align:center"><br>
    
                                <input type="submit" class="btn btn-primary "  style="width:300px" value="register" name="reg">
                            </td>
                        </tr>
                        </table>

                    </div>
                    <div class="card-footer">
                        <table>
                            <tr>
                           <td style="text-align: right;">Already have an account <a href=login.php> <b>login </b></a> &nbsp;&nbsp;&nbsp;
                           </td>
                            <td style="text-align:left"><small>
                            &nbsp;   
                            &copy;Zoho company
                            </small>
                            </td>
                            </tr>
                            </table>

                    </div>

                </div>
            </div>
        </div>
    </body>
</html>