<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $file = /*$_FILES['file']['name']; */$_POST['file'];
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $color = htmlspecialchars($_POST['color']);
    $age = htmlspecialchars($_POST['age']);
    $policy = isset($_POST['policy']) ? "Yes" : "No"; 
    $MOP = htmlspecialchars($_POST['MOP']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <h1>Product info</h1>

    
    <table>
        <thead>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Number</td>
                <td><?php echo $number; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo $password; ?></td>
            </tr>
            <tr>
                <td>Uploaded File</td>
                <td><?php echo $file; ?></td>
            </tr>
            <tr>
                <td>Date bought</td>
                <td><?php echo $date; ?></td>
            </tr>
            <tr>
                <td>Time bought</td>
                <td><?php echo $time; ?></td>
            </tr>
            <tr>
                <td>Product Color</td>
                <td><?php echo $color; ?></td>
            </tr>
            <tr>
                <td>Mass Range</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>Agreed to all terms of service</td>
                <td><?php echo $policy; ?></td>
            </tr>
            <tr>
                <td>MOP</td>
                <td><?php echo $MOP; ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>
