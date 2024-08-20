
    <?php 
    
    // require_once("");
    // require_once("/wamp64/www/project/conn/dbconn.php");
    require_once("./conn/dbconn.php");
    require_once("./navbar/nav.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
    <!-- <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type"> -->
    <title>AUE</title>
</head>
<body><br><br><h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"  ></i> 
/ Dashboard / Add Product</h5>
    
<div style="position: relative; bottom: 1.8cm; " >
            <div class="search">
                     <div class="col-lg">
                     <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-block" onclick="myFunc()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
</svg> Add Product</button></div>

<script>
      function myFunc() {
        window.location.href=' ./Addproduct.php';
        }
</script>
<input class="form-control" type="text" id="searchInput" onkeyup="mypay()" placeholder="Search for names.." title="Type in a name">
</div><!-- col -->
            </div>


            <script>

function mypay(){
  /** script.js **/
let input = document.getElementById('searchInput');
let table = document.getElementById('myTable');
let rows = table.getElementsByTagName('tr');
let noMatchMessage = document.getElementById('noMatch');

input.addEventListener('input', function () {
    let filter = input
        .value
        .toLowerCase();
    let matchFound = false;

    for (let i = 1; i < rows.length; i++) {
        let row = rows[i];
        let cells = row
            .getElementsByTagName('td');
        let found = false;

        for (let j = 0; j < cells.length; j++) {
            let cell = cells[j];
            if (cell.textContent.toLowerCase().indexOf(filter) > -1) {
                found = true;
                matchFound = true;
                break;
            }
        }

        if (found) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }

    if (!matchFound) {
        noMatchMessage.style.display = 'block';
    } else {
        noMatchMessage.style.display = 'none';
    }
});
}

</script>
            <div class="box ">
                <style>
                    .btn-success{
                        width: 4cm;
                        text-align: left;
                        border-radius: 10px;
                        position: relative;
                        left: 5cm;
                        top: 3.6cm;
                        
                    }
                    .form-control{
                        width: 8cm;
                        border-radius: 20px;
                        position: relative;
                        left: 35cm;
                        top: 2.5cm;
                    }
                    .box{
                        margin: 5cm;
                        position: relative;
                        bottom: 1.5cm;
                    }
                </style>
                <style>
    .ex4 {
  /* background-color: lightblue; */
  width: 108.8%;
  height: 15.5cm;
  overflow: auto;
}
td{
  width: 5cm;
  text-align: center;
}
body{
  overflow-y: hidden;
  overflow-x: hidden;
}
.l1{

  /* background-color: red; */
  /* border: 1px solid; */
  text-align: left;
  width: 2px;
}
</style>

<table class="table table-striped mg-b-0  " >
              <thead  >
                <tr>
                  
                  <th class="l1" >ID</th>
                  <th class="l1" >product_name</th>
                  <th class="l1" >product_code</th>
                  <th class="l1" >product_type</th>
                  <th class="l1"  >product_category</th>
                  <th class="l1" style="width: 3cm;">GST</th>
                  <th class="l1"  >purchese_price</th>
                  <th class="l1" >product_price</th>
                  <th class="l1" >CESS</th>
                  <th class="l1" >Activity</th>
                  
                </tr>
              </thead>
              </table>
            <div class="table-responsive ex4">
              
            <table class="table table-striped mg-b-0  " id="myTable">
            <thead style="text-align: center;" >
                <tr>
                  
               
                </tr>
              </thead>
           
              <tbody>
              
                
              



            <?php
// $tbl="users"; // Table name 
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
$i =1;
if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
    // echo  $row["product_name"]."<br>";


    ?>
              <tr>

                  <th scope="row"><?php echo $i++ ; ?></th>
                  <td><?php echo  $row['product_name']; ?></td>
                  <td><?php echo  $row['product_code']; ?></td>
                  <td><?php echo  $row['product_type']; ?></td>
                  <td><?php echo  $row['product_category']; ?></td>
                  <td><?php echo  $row['gstret']; ?></td>
                  <td><?php echo  $row['purchese_price']; ?></td>
                  <td><?php echo  $row['product_price']; ?></td>
                  <td><?php echo  $row['cess']; ?></td>
                  
                  <td>  
                    <style>
                        .btn-primary{
                            pad: 0.5cm;
                            /* text-align: center; */
                            height: 1cm;
                            width: 2cm;
                            position: relative;
                            bottom: 8px;
                            border-radius: 20px;
                        }
                        .btn-danger{
                                width: 2cm;
                                position: relative;
                                bottom: 9px;
                                border-radius: 20px;
                        }
                        .btndel{
                            position: relative;
                            top: 8px;
                        }
                    </style>
                    <div style="display: flex; gap: 1cm; " >
                    <form action="./Updateproductt.php" method="post" class="btndel">
                 <button class="btn btn-primary btn-block" name=" valueid" value="<?php echo $row['id']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></button></form>

<form action="./deleteitem.php" method="get" class="btndel">

                  <button  name=" id" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-block" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg></button></form>
                  </div>
                </td>

                </tr>

    <?php

  }
} else {
  echo "0 results";
}
?>
            </table>
          </div><!-- bd -->
    </div>
</div>
<?php


$sql = "SELECT COUNT(id) AS count FROM product  ";
$result = $conn->query($sql);
$i =1;
if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
?>

<style>
  .ppcount{
    background-color: blue;
    color: white;
    border-radius: 10px;
    padding: 0.2cm;
    text-align: center;
    width: 6cm;
    position: relative;
    margin-left: 10cm;
    bottom: 26.3cm;
  }
</style>
<div class="ppcount" >
  <b>Total Purchese </b>
  <?php
  echo $row['count'];
  ?>
</div>


<?php }} ?>

    <script>
        
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

//   alert(tr.length);
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>