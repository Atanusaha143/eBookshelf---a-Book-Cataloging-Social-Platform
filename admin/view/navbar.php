<div class='navbar'>
    <br>
        <nav>
            <a href="./dashboard.php" id='dashboard'>Dashboard</a> ||
            <a href="./profile.php" id='profile'><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./allusers.php" id='allusers'>View Users</a> ||
            <a href="./addtype.php" id='addtype'>Add New User</a> ||
            <a href="./messages.php" id='messages'>Messages</a> ||
            <a href="./search.php" id='search'>Search</a> ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
    <br>
</div>