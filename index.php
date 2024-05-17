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
                    <table class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">ID </th>
                            <th scope="col">BLOG NAME</th>
                            <th scope="col">CONTENT</th>
                            <th scope="col">CREATED AT</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        
                            <tbody>
                            <?php
                                 require_once "config.php";
                                // Attempt select query execution
                                $sql = "SELECT * from blogdb ";
                                $result= mysqli_query($connection,$sql);
                                $id=1;
                                while ($row = $result->fetch_array()) 
                                    {
                                       $uid = $row['id'];
                                       $blogTitle = $row['blogTitle'];
                                       $content = $row['content'];
                                       $created_at = $row['created_at'];

                               


                                ?>
                                    <tr>
                                         <td> <?php echo $id ?> </td>
                                         <td> <?php echo $blogTitle ?> </td>
                                         <td> <?php echo $content ?> </td>
                                         <td> <?php echo $created_at ?> </td>

                                         <td> <button class="btn btn-success pull-right"> <a href="edit.php?edit=<?php echo $uid?>" class="text-light"> Edit</a> </button></td>
                                         <td> <button class="btn btn-danger pull-right"> <a href="delete.php?delete=<?php echo $uid?>" class="text-light"> Delete</a> </button></td>
                                       
                              
                                    </tr>
                             <?php $id++;} ?>

                            </tbody>
                    </table>
                </div>
                <div class=" mt-5 mb-3 clearfix ">
                   
                    <a href="create.php" class="btn btn-success center"><i class="fa fa-plus"></i> Add New Post</a>
                </div>
          </div>
       </div>
    </div>
</body>
</html>

