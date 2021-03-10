<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../../images/assets/icon.png'>
    <title>Dashboard</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./adminheader.php'); ?>
    <fieldset>
    <br>
        <nav>
            <a href="./dashboard.php">Dashboard</a> ||
            <a href="./profile.php"><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./addtype.php">Add New User</a> ||
            <a href="./search.php">Search</a> ||
            <a href="../../controller/logout.php">Log Out</a>
        </nav>
        <br>
    </fieldset>
    
    <table border="1px solid black" width='100%'>
        <tr>
            <th>
                Messages
            </th>
            <th>
                Posts
            </th>
            <th>
                Notifications
            </th>
        </tr>
        <tr>
            <td width='17%'>
                
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "BOOKS"; ?>
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "BOOKS"; ?>
            </td>
        </tr>
    </table>
    <?php include('../footer.php');?>
</body>
</html>