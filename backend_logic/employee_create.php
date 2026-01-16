<?php

require_once '../config/database.php';

if (isset($_POST['create-employee'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $sex = $_POST['sex'];
    $birth_date = $_POST['birth_date'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $home_num = $_POST['home_num'];
    $flat_num = $_POST['flat_num'];

    try {
        $stmt = $conn->prepare('INSERT INTO employees (name, surname, sex, birth_date, country, city, street, home_num, flat_num)
                                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('sssssssss', $name, $surname, $sex, $birth_date, $country, $city, $street, $home_num, $flat_num);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    } catch (mysqli_sql_exception $e) {
        header('Location: ../subpages/panel.php?error=create');
        exit();
    }

    header('Location: ../subpages/panel.php?action=create');
    exit();
}

?>