<?php
    if (isset($_GET["id"])  ) {
        $id = $_GET["id"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "myshop";

        // create cconnection
        $conn = new mysqli($servername, $username, $password, $database);

        $sql = "DELETE FROM clients WHERE id=$id";
        $conn->query($sql);
    }

    header("location: /Myshop/index.php");
    exit;

?>

<?php
    if(isset($_SESSION['id']) && $_SESSION['id'] !='') {
        echo $_SESSION['id'];
        unset($_SESSION['id']);
        
        <script>
            swal("Hello world!");
        </script>
   } 
?>