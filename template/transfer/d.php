<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

        require_once("../conn/dbconn.php");

    
         
?>
        <form action="#" method="post" >
            <select name="sel" id="">

            <?php

$qui = "SELECT id FROM product ";
$res = $conn ->query($res);

if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        $id = $row["id"];
?>
                <option value=" <?php echo $id; ?>"> <?php echo $id ; ?></option>

                <?php
                             
                            }
                        }
                ?>
            </select>
        </form>
</body>
</html>