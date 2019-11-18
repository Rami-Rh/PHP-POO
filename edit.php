<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".\bootstrap-4.3.1-dist\css\bootstrap.css">
    <script src="https://kit.fontawesome.com/7f1324c4ec.js" crossorigin="anonymous"></script>
    <script src=".\bootstrap-4.3.1-dist\js\bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include 'stds.class.php';
    $std= new stds;
    $req=$std->readonestd();
    $data=$req->fetch();
    ?>
    <div class="container">
        <fieldset>
            <legend>modify Student</legend>
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="fn">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?=$data['firstname']?>">
                </div>
                <div class="form-group">
                    <label for="ln">Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="<?=$data['lastname']?>">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" value="<?=$data['email']?>">
                </div>
                <div class="form-group">
                    <label for="ph">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?=$data['phone']?>">
                </div>
                <input type="number" name="id" id='id' value="<?=$_GET['id']?>" hidden>
                <button type="submit" class="btn btn-outline-success"><i class="fas fa-check"></i> Change</button>
            </form>
        </fieldset>
    </div>
</body>
</html>