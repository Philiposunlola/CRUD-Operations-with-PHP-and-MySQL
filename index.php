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
        <div class="container">
            <h2>List of Clients</h2>
            <a class="btn btn-primary" href="/CRUD Operations-with-PHP-and-MySQL/create.php" role="button">New curl_multi_getcontent</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10</td>
                        <td>Bill Gate</td>
                        <td>bill.gates@microsoft.com</td>
                        <td>+123456789</td>
                        <td>New York, USA</td>
                        <td>18/05/2022</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="CRUD Operations-with-PHP-and-MySQL/edit.php">Edit</a>
                            <a class="btn btn-danger btn-sm" href="CRUD Operations-with-PHP-and-MySQL/delete.php">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>