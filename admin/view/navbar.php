<?php 
    if(isset($_SESSION['fullname']))
    {
        
    }
    else
    {
        $_SESSION['fullname'] = 'Invalid User';
    }
?>
<div class='navbar'>
    <br>
        <nav>
            <a href="./dashboard.php" id='dashboard' onclick="higlight()">Dashboard</a> ||
            <a href="./profile.php" id='profile' onclick="higlight()"><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./allusers.php" id='allusers' onclick="higlight()">View Users</a> ||
            <a href="./addtype.php" id='addtype' onclick="higlight()">Add New User</a> ||
            <a href="./messages.php" id='messages' onclick="higlight()">Messages</a> ||
            <a href="./search.php" id='search' onclick="higlight()">Search</a> ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
    <br>
</div>