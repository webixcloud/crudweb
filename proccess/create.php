<?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $name       = $_POST['name'];
        $position   = $_POST['position'];
        $office     = $_POST['office'];
        $age        = $_POST['age'];
        $salary     = $_POST['salary'];

        $sql = "INSERT INTO data (name, position, office, age, salary) VALUES ('$name', '$position', '$office', '$age', '$salary')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil ditambahkan.";
            header("Location: http://localhost:8080/crudweb/");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>