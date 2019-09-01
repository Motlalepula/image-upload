<!DOCTYPE html>
<html>
    <head>
        <title>Posts</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        
        <style>
            .br-bdr{
                border: 2px solid brown;
                border-radius: 10px;
                padding:20px;
                margin: 50px 0px 0px 50px;
            }
            label{
                float: left;
                text-decoration: underline;
            }
            .error{
                background-color: firebrick;
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid text-center">

            <div class="col-md-6 br-bdr">
                <h1>Upload your pic here</h1><br><br>
                <div class="error">
                <p><?php include('errors.php');?></p>
                </div><br>
                <form action="server.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="image"><br>
                    <div class="input-group">
                        <label>Enter you message here</label>
                        <textarea class="form-control" type="text" name="message" cols=20 rows=10></textarea>
                    </div><br>
                    <div>
                        <button class="btn btn-success btn-lg" name="upload">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>