<?php
error_reporting(0);

require_once("./conn/dbconn.php");

$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;

    // $db = mysqli_connect("localhost", "root", "", "geeksforgeeks");

    // Get all the submitted data from the form
    $sql = "INSERT INTO product (img) VALUES ('$filename')";

    // Execute query
    mysqli_query($conn, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    } else {
        echo "<h3>&nbsp; Failed to upload image!</h3>";
    }
}
?>

<div id="display-image">
    <?php
    $query = " select * from product ";
    $result = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <img src="./image/<?php echo $data['filename']; ?>">

    <?php
    }
    ?>
</div>