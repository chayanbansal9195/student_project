<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
</head>

<body>
    <h3 align="right"><a href="login.php">Admin Login</a></h5>
        <h1 align="center">Welcome to Student Management System</h1>

        <!-- form -->
        <form action="index.php" method="post">
        <table style="width:30%" align="center" border="1">
            <tr>
                <td colspan="2" align="center">Student Information</td>
            </tr>
            <tr>
                <td align="left">Choose Standard</td>
                <td>
                    <select name="standard" id="">
                        <option value="1">
                            1st
                        </option>
                        <option value="2">
                            2nd
                        </option>
                        <option value="3">
                            3rd
                        </option>
                        <option value="4">
                            4rth
                        </option>
                        <option value="5">
                            5th
                        </option>
                        <option value="6">
                            6th
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left">Enter Roll No</td>
                <td><input type="text" name="rollno"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="submit" value="Show Info"></td>
            </tr>

        </table>
        </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $standard = $_POST['standard'];
    $rollno = $_POST['rollno'];
    include('dbcon.php');
    include('function.php');

    showdetails($standard, $rollno);
}
?> 