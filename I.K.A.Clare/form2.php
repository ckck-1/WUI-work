<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            width: 60%;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: inline-block;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"],
        input[type="file"],
        input[type="date"],
        input[type="time"],
        input[type="color"],
        input[type="range"],
        input[type="checkbox"],
        input[type="radio"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .gender-options {
            display: flex;
            justify-content: space-evenly;
        }

        .gender-options label {
            margin: 0 10px;
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

        .form-container {
            max-width: 1200px;
            margin: 0 auto;
        }
       
    </style>
</head>

<body>
    <h1>Please enter your product info</h1>

    <div class="form-container">
        <form action="formu.php" method="POST" >
            <label for="Name">product name</label>
            <input type="text" id="text" name="name" placeholder="Enter name of product"><br><br>

            <label for="number">Quantity:</label>
            <input type="number" id="number" name="number" placeholder="Enter number"><br><br>

            <label for="email">Email of client:</label>
            <input type="email" id="email" name="email" placeholder="Enter client email"><br><br>

            <label for="password"> Client Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password"><br><br>

            <label for="file"> Upload serial number </label>
            <input type="file" id="file" name="file"><br><br>

            <label for="date">Date bought:</label>
            <input type="date" id="date" name="date"><br><br>

            <label for="time">Time bought:</label>
            <input type="time" id="time" name="time"><br><br>

            <label for="color">Object color:</label>
            <input type="color" id="color" name="color"><br><br>

            <label for="range">Mass range:</label>
            <input type="range" id="range" name="age" min="0" max="100" step="1"><br><br>

            <label for="checkbox">Agree all terms of service:</label>
            <input type="checkbox" id="checkbox" name="policy" value="agree"><br><br>

            <div class="MOP">
            <label>Mode of payment</label>
            <input type="radio" id="MOP" name="MOP" value="CREDIT">
            <label for="CREDIT">CREDIT</label>
            <input type="radio" id="DEBIT" name="MOP" value="DEBIT">
            <label for="DEBIT">DEBIT</label><br><br>
        </div>

        <input type="submit" value="Submit">
        </form>
      