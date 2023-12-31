<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA Compatible" content="IE-edge">
        <meta name="viewpoint" content="width-device-width", initial-scale-1.0>
        <title>My Store</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
    </head>
    <body>
        <div class="container my-5">
            <h2>List of Clients</h2>
            <a class="btn btn-primary" href="/Myshop/create.php" role="button">New Client</a>
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
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "test_db";                   

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $database);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed " . $conn->connect_error);
                        }

                        // read all row from database table
                        $sql = "SELECT * from clients";
                        $result = $conn->query($sql);

                        if (!$result) {
                            die("invalid query: " . $conn->error);
                        }

                        // read data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                                <td>$row[created_at]</td>
                                <td>
                                    <a class='btn btn-primary btn-sm' href='../Myshop/edit.php?id=$row[id]'>Edit</a>
                                    <button class='btn btn-danger btn-sm' onclick='confirmDelete($row[id])'>Delete</button>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <script>
            function confirmDelete(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this client's data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success", 
                    
            });
                } else {
                    swal("Your imaginary file is safe!");
                }
                window.location.href = `../Myshop/delete.php?id=${id}`;
            });
        }
        </script>
    </body>
</html>