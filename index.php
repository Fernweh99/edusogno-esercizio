<?php
    session_start();
    include 'db_conn.php';
    // Migrate tables
    $sql = file_get_contents('assets/db/Migrations.sql');
    $sql_verification = "SELECT * FROM utenti";
    if ($conn->query($sql_verification) === FALSE){
        if ($conn->multi_query($sql) === TRUE) {
            echo "Tables created successfully";
        } else {
            echo "Error creating tables: " . $conn->error;
        }
    }

    //Validate and redirect if is Log in
    if (isset($_SESSION['log']) && $_SESSION['log']) {
        header('Location: pages/personal.php');
    } else {
        header('Location: pages/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAw -->
    <script src="https://kit.fontawesome.com/7ff5ce46be.js" crossorigin="anonymous"></script>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>

</body>

</html>