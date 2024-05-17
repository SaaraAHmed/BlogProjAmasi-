
<?php

require_once "config.php";

$edit = $_GET["edit"]; 

$sql ="select * from blogdb where id = '$edit'";

$result= mysqli_query($connection,$sql);

while ($row = $result->fetch_array()) 
    {
       $uid = $row['id'];
       $blogTitle = $row['blogTitle'];
       $content = $row['content'];
       $created_at = $row['created_at'];

    }


?>

<?php

if(isset($_POST['sbmit']))  
        {
            $edit = $_GET["edit"]; 
            $blogTitle = $_POST["blogTitle"];
            $content = $_POST["content"];

            $sql ="update blogdb set blogTitle '$blogTitle' ,content  '$content' where id = '$edit'";

            
            if(mysqli_query($connection,$sql)){
                echo '<script> location.replace("index.php") </script>';
            }
            else{
                echo "connection error .$connection->error";
               
            } 
       
        

 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Crud BlogApp</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card-header mt-5 mb-3 clearfix">
                    <h1> BlogApp</h1>                  
                </div>
                <div class="card-body">
                    <form  action="create.php" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-7"><label for="exampleFormControlTextarea1">title </label>
                                    <label for="exampleFormControlTextarea1">name </label>
                                <input type="text" class="form-control" placeholder="blogTitle"   name="blogTitle"  value="<?php echo $blogTitle; ?>">
                                </div>   
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">posts content</label>
                                <textarea  type="text" class="form-control" id="content" rows="3" name="content" ><?php echo $content; ?></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" name="Submit"  value="edit">
                            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        </form>
                </div>
                
          </div>
       </div>
    </div>
</body>
</html>

