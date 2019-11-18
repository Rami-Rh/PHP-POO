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
    <div class="container">
        <fieldset>
            <legend>ADD Student</legend>
            <form action="store.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fn">First Name</label>
                            <input type="text" class="form-control" name="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ln">Last Name</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ph">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success"><i class="fas fa-check"></i> Create</button>
                <button type="reset" class="btn btn-outline-danger"><i class="fas fa-redo-alt"></i> Reset</button>
            </form>
        </fieldset>
    </div>
</body>
</html>