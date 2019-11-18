<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".\bootstrap-4.3.1-dist\css\bootstrap.css">
    <script src="https://kit.fontawesome.com/7f1324c4ec.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container py-3">

    <?php
        if ((!empty($_GET['alerte']))){ 
    ?>
   <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php
            if($_GET['alerte']=='add'){echo 'NEW STUDENT ADDED';}
            elseif(($_GET['alerte']=='edit')){echo "STUDENT EDITED";}
            elseif(($_GET['alerte']=='delete')){echo "STUDENT DELETED";}
            ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php } ?>

        <div class="jumbotron">
            <h1 style="text-align: center" class="align-middle ">students liste</h1>
        </div>
            <table class="table table-primary">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                </tr>
                <?php
                    include 'stds.class.php';
                    $std= new stds;
                    $liststds=$std->readstds();
                    while($data = $liststds->fetch())
                    {
                        echo '<tr>';
                        echo '<td>'.$data['id'].'</td>';
                        echo '<td>'.$data['firstname'].'</td>';
                        echo '<td>'.$data['lastname'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        echo '<td>'.$data['phone'].'</td>';
                        echo '<td> <a href="edit.php?id='.$data['id'].'" class="btn btn-outline-info"><i class="fas fa-user-edit"></i> Edit</a> <a href="delete.php?id='.$data['id'].'" class="btn btn-danger"><i class="fas fa-user-times"></i> Delete</a></td>';
                        echo '</tr>';
                    };
                ?>
            </table>
            
            <a href="create.php" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i> Add student</a>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
</body>
</html>