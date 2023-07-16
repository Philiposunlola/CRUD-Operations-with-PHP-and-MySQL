<?php
$name = "";
$email ="";
$phone = "";
$address = "";

if ($_SERVER['$REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    do{
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
           $errorMessage = "All the fields are required";
           break;
        }
    } while (false);
           
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X UA Compatible" content="IE-edge">
        <meta name="viewpoint" content="width-device-width", initial-scale-1.0>
        <title>My Shop</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    </head>
    <body>
        <div class="container my-5">
            <h2>New Client</h2>
            <form method="POST">
                <div class="col-mb-3">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                    </div>
                </div>
                <div class="col-mb-3">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>
         ;       <div class="col-mb-3">
                    <label class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="<?php echo $phone; ?>">
                    </div>
                </div>
                <div class="col-mb-3">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="<?php echo $Address; ?>">
                    </div>
                </div>
                <div class="rol-mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="/CRUD Operations-with-PHP-and-MySQL/index.php" role="button">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>  