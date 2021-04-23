<?php
    session_start();
    include('../model/bpageModel.php');
    $bpagePosts = getMyPostsByID($_SESSION['id']);
    if(mysqli_num_rows($bpagePosts) > 0)
    {
        //$bpagePosts = mysqli_fetch_assoc($bpagePosts);
    }
    else
    {
        $bpagePosts = false;
    }
    //print_r($bpagePosts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>My Posts</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class="bookproduct">
            <?php
                foreach($bpagePosts as $books)
                {
                    echo 
                        "<table border='1'>  
                            <tr>
                                <td class='title'>Title:</td>
                                <td>".$books['title']."</td>
                                <td rowspan='3'><img src='../../assets/books/".$books['photo']."' height='200'></td>
                            </tr>
                            <tr>
                                <td class='author'>Author:</td>
                                <td>".$books['author']."</td>
                            </tr>
                            <tr>
                                <td class='price'>Price:</td>
                                <td>".$books['price']."</td>
                            </tr>
                            <tr>
                                <td class='description' colspan='3'>Description:</td>
                            </tr>
                            <tr>
                                <td colspan='3'>".$books['post_text']."</td>
                            </tr>
                        </table><br>";
                }
            ?>
        
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>