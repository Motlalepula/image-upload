<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Posts";

$connect = mysqli_connect("$servername","$username","$password","$dbname");
if(!$connect){
    echo 'No connection';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Posts</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        
        <style>
            .br-bdr{
               background-color: rgb(240,240,240);
                border-radius: 10px 10px 0px 0px;
                padding:20px;
            }
            label{
                float: left;
                text-decoration: underline;
            }
            .centered{
                margin:50px auto;
                width: 60%;
            }
            .content img{
                width: 300px;
                height:200px;
            }
            .top-row{
                border:1px solid gray;
                margin-top:10px; 
            }
        </style>
    </head>
    <body>
        <div class="container-fluid centered">
            <div class="br-bdr">
                <h3 class="text-center"><strong>Your uploaded images and comments</strong></h3><br><br>
                <a href="index.php">Upload new image</a>
            </div>
                   <?php
                        $qry_select = "select * from `post`";
                        $result = mysqli_query($connect,$qry_select);
                        $rows = mysqli_num_rows($result);
                    if($rows>0){
                
                    while ($row = mysqli_fetch_array($result)){
                    ?>
            <div class="row top-row">
                <div class="col-md-5 content">
                    <a href="images/<?php echo $row['image']?>"><img src="images/<?php echo $row['image']?>"></a>
                </div>
                <div class="col-md-7 content">
                    <p><?php echo $row['message'];?></p>
                </div>
            </div>
            <div class="row btns">
            </div>
                    <?php
                        }
                    }else{
                        echo "No images uploaded";
                    }
                    ?>
        </div>
    </body>
</html>