

<?php



// require_once("./conn/dbconn.php");
require_once("./conn/dbconn.php");

if (isset($_POST["submit"])) {
   // 
   // echo"Hello";


   $Company_Name = $_POST['Company_Name'];
   $Name = $_POST['Name'];
   $GSTIN_Number = $_POST['GSTIN_Number'];
   $Email = $_POST['Email'];
   $Phone_Number = $_POST['Phone_Number'];
   $Address = $_POST['Address'];
   $City = $_POST['City'];
   $State = $_POST['State'];
   $Postal_Code = $_POST['Postal_Code'];
   $Country = $_POST['Country'];
   $f1 = $_POST['f1'];
   $f2 = $_POST['f2'];
   $f3 = $_POST['f3'];
   $f4 = $_POST['f4'];
   $f5 = $_POST['f5'];


   $query = "SELECT * FROM client_info WHERE gstin_no = '" . $GSTIN_Number . "' ";

   $result = $conn->query($query);

   if ($result) {
      if (mysqli_num_rows($result) > 0) {

         echo "<script>alert('This item is already available');
      window.location.href=' ./Addclients.php';
      </script>";
      } else {




         $sql1 = "INSERT INTO client_info (company_name , gstin_no , email_id  , phone_no  , city , state , postal_code , country , f1 , f2 , f3 , f4 , f5 , name  ,addr_comp)
                            VALUES ('$Company_Name','$GSTIN_Number','$Email','$Phone_Number','$City','$State','$Postal_Code' , '$Country' , '$f1', '$f2' , '$f3', '$f4' , '$f5' , '$Name' ,'$Address') ";
         // , product_code , product_type , product_category , purchese_price , product_price , gstret , kg , img , product_info 

         // $result = $conn->query($sql);
         if ($conn->query($sql1) === TRUE) {

            echo "<script>alert('New record created successfully');
                 window.location.href=' ./Addclients.php';
                 </script>";
         } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
         }
      }
   }
}


?>