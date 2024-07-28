

<form action="#" method="post" >
            <input type="text" name="text1">
            <input type="submit" name="submit" >
</form>


<?php
    
    if(isset($_POST['submit']) === true ){
        $name = $_POST["text1"];
    echo"".$name."";
    }

?>