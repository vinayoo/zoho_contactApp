<?php
session_start();
include_once("Dbconnection.php");
if(isset($_post['submit']))
{

$phone_number=$_POST['phone_number'];
$contact=$_POST['contact'];
    $query="SELECT * from contacts where phone ='$phone_number'";
    $q=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($q);
    if($rows>0)
    {
        echo "<script> alert(\"contact already saved\") </script>";   
    }
    else{

        $query="INSERT into contacts values('$contact','$phone_number')";
        $q=mysqli_query($conn,$query);
        echo "<script> alert(\"u have saved this contact\") </script>"; 
        
    }
}
?>
    
    <head>
    <meta name="view port" contet="width:device-width initial-scale:1.0">
    <link rel="stylesheet"  type="text/css" href="bootstrap.css"></link>
    </head>
    <body>
    <div class="container vh-100">
            <div class="row justify-content-center h-100">
                <div class="card w-50 my-auto shadow"> 
                <div class="card-header text-center bg-primary text-white ">
                <h2><?php 
        if(isset($_SESSION['username'])>0)  ?>

        <h2 >
        Welcome  <strong>
            <?php echo $_SESSION['username']; ?>
        </strong>
</p>
        </h2>
               </div>
               <div class="card-body text-center  text-white">
                <form   method="post">
                    <table class="form-group">
                        <tr>
                            <td>
                                <label for="contact"><strong>contact:</strong></label>
                            </br>
                            <input type="text" name="contact" id="contact" placeholder="vinay"  style="width:500px" class=" flow-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="phone number"><strong>phone number:</strong></label>
                            </br>
                            <input type="phone number" name="phone_number" id="phone number"  style="width:500px" placeholder="123456789"  class=" flow-control" required>
                            </td>
                        </tr>
      <tr>
                        <td style="text-align:center"><br>

                            <input type="submit" class="btn btn-primary "  style="width:300px" value="save" name="submit">
                        </td>
</tr>
                        
                       <tr>
                           <br>
                       <td style="text-align:center;"> <a href=contacts.php> <h6>My contacts </h6></a> &nbsp;&nbsp;&nbsp;
                           </td>
                       </tr>
</td>
                    </table>
                </form>

            </div>
            <div class="card-footer">
                        <table>
                            <tr>
                           <td style="text-align: right;">Do u want to  <a href=logout.php> <b>log out </b></a> &nbsp;&nbsp;&nbsp;
                           </td>
                            </table>

                    </div>
           
               </div>
                
           </div>

</div>   
</body>