<?php  
    $dataString = file_get_contents('../../model/messages.json');
    $dataJSON = json_decode($dataString, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../images/assets/icon.png'>
    <link rel='stylesheet' href="../../assets/style.css">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="1px solid black" width='80%'>
            <?php 
                foreach($dataJSON as $message)
                {
                    echo
                    "<tr>
                        <td>
                            ".$message['from']."
                            <br>
                            ".$message['time']."
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            ".$message['content']."
                        </td>
                    </tr>";
                }
            ?>
        </table>
    </center>
</body>
</html>