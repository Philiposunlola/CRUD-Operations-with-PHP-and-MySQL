<?php
    if (isset($_GET["id"])  ) {
        $id = $_GET["id"];

        $servername = "sql202.infinityfree.com";
        $username = "if0_34940709";
        $password = "B7z9pY1Oz9LgFkV";
        $database = "if0_34940709_myshop";

        // create cconnection
        $conn = new mysqli($servername, $username, $password, $database);

        $sql = "DELETE FROM clients WHERE id=$id";
        $conn->query($sql);
    }

    header("location: /Myshop/index.php");
    exit;

?>