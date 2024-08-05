<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>aue</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="../lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
    <link href="../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
    <link href="../lib/pickerjs/picker.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

    

  </head>
  <body>

                <?php 
                      
                     require_once('./navbar/nav.php'); ?>
<style>
  .col1{
    /* background-color: red; */
    width: 100%;
    height: 10cm;
    position: relative;
    top: 0.2cm;
  }
  .col2{
    /* background-color: blue; */
    width: 120%;
    height: 10cm;
  }
</style>
<style>

    .grid-container {
  display: grid;
  grid: 350px / auto auto auto;
  /* grid-gap: 5px; */
  gap: 2cm;
  /* background-color: #2196F3; */
  padding: 10px;
}
.card-img-top{
  height: 5cm;
  max-width: 200%;
  border-radius: 20px;
  position: relative;
  left: 0.6cm;
}
</style>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 120%;
  height: 10cm;
  text-align: center;
  border-radius: 20px;
  cursor: pointer;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.but{
  width: 3cm;
  height: 1cm;
  border-radius: 10px;
  border: 0 solid;
  background-color: green;
  color: white;
  font-family: Arial black;
}
.but:active{
  background-color: red;
  border: 0 solid;
}

.item{
  width: 200px;
  height: 120px;
  height: auto;
  /* float: ; */
  margin: 3px;
  padding: 3px;
}
</style>




<style>
    .form-control{
        width: 92.5%;
        border: 3px solid;
        border-radius: 10px;
        margin-left: 15px;
    }
</style>

              <div style="display: flex;" >
                                  <div class="col1" >
                                  <input class="form-control" type="text" id="searchInput" onkeyup="mypay()" placeholder="Search for names.." title="Type in a name">


            
<style>
    div.ex4 {
  /* background-color: lightblue; */
  width: 100%;
  height: 22cm;
  overflow: auto;
}

</style>
<div class="ex4">
     <table  id="myTable">
          

     <thead>
                <tr>
                  
                  <th></th>
              
                </tr>
              </thead>
              <tbody class="grid-container">
 

              
              <?php
                              $data = "SELECT * FROM product ";

                              $result1 = $conn->query($data);

                              if ($result1->num_rows > 0){
                               while ($row = $result1->fetch_assoc()) {
                           
          ?>
            
              <tr>
             

                  <td>
                     <div class="card">
                                            <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
                                            <!-- <div class="container"><br> -->
                                             <div class="item" >
                                                    <?php

                                                  if($row['img'] == ""){

?>

                            <img src="./error/error.jpg" class="card-img-top" alt="Avatar" style="width:100%" >

                                                    <?php
                                                    
                                                  }else{
                                                                ?>
                                    <img src="./image/<?php echo $row['img']; ?>" class="card-img-top" alt="Avatar" style="width:100%" >

                                                      <?php } ?>

                                             </div>
                                              <h4><b><?php echo $row['product_name']; ?></b></h4> 
                                             <div style="display: flex; margin-left:60px; " >
                                             <p> Rs.<?php echo $row['product_price'];  ?></p> &#160 &#160
                                             <p> GST : <?php echo $row['gstret'];  ?>%</p> 
                                             </div>
                                             <div>
                                               Que:  <input  type="number" style="width: 1.5cm;" value="1" >
                                             </div>
                                             <div>  <p> Code : <?php echo $row['product_code'];  ?></p> </div>
                                              <div><button class="but" >ADD</button></div>
                                            </div>
                                            


                                      </div>
                  </td>
                  </tr>
                  <?php } }else{
                      echo "0 results";
                  }  ?>
                  
                  
          


                                
  </tbody>
            </table>
            <style>
                #noMatch{
                    font-size: 1cm;
                    font-family: Arial black;
                    position: relative;
                    left: 1.5cm;
                    bottom: 5cm;
                }
            </style>
            <span id="noMatch" style="display:none;">
            No matching data is found !
        </span>
            </div>
                                  
                                  </div>


                                  <!-- **************************************************** -->
                                  <div class="col2" >


                                    <style>
                                        .sell{
                                            position: relative;
                                            top: 10px;
                                        }
                                    </style>
                                  <input class="form-control sell" type="text" id="searchInput" onkeyup="mypay()" placeholder="Search for names.." title="Type in a name">

                                                
                                  <div class="box">
                <style>
               
                    .box{
                        margin: 0.5cm;
                        position: relative;
                        bottom: cm;
                    }
                </style>
                <style>
    .ex5 {
  /* background-color: lightblue; */
  width: 101%;
  height: 6cm;
  overflow: auto;
}
.td{
  width: 1%;
 text-align: center;
}
/* body{
  overflow-y: hidden;
  overflow-x: hidden;
} */


 
</style>

<table class="table table-striped mg-b-0  " >
              <!-- <thead style="text-align: center;" > -->
                <tr>
                  
                  <th  >ID</th>
                  <th style="text-align: center;" >Product_Name</th>
                  <th  >MRP </th>
                  <th  >Price </th>
                  <th  >quienity</th>
                  <th  >GST</th>
                  <th  >Cess</th>
                  <th  >Total</th>
                  <th  >Total</th>
                  <!-- <th>CESS</th> -->
                  <!-- <th>Activity</th> -->
                </tr>
              <!-- </thead> -->
</table>
            <div class="table-responsive ex5">
              
            <table class="table table-striped mg-b-0  " id="card" >
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

                  <th  style="text-align: left; width: 1%; "  scope="row"><?php echo $i++ ; ?></th>
                  <td class="td"><?php echo  $row['product_name']; ?></td>
                  <td class="td"><?php echo  $row['purchese_price']; ?></td>
                  <td class="td"><?php echo  $row['product_type']; ?></td>
                  <td class="td"><?php echo  $row['purchese_price']; ?></td>
                  <td class="td"><?php echo  $row['gstret']; ?></td>
                  <td class="td"><?php echo  $row['purchese_price']; ?></td>
                  <td class="td"><?php echo  $row['product_price']; ?></td>
                  <td class="td"><button>X</button></td>
                  
                   
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
              
            

                </tr>

    <?php

  }
} else {
  echo "0 results";
}
?>
            </table>
          </div><!-- bd -->
          <!-- <table class="table table-striped mg-b-0  " > -->
              <!-- <thead style="text-align: center;" > -->
                <!-- <tr>
                  
                  <th  >ID</th>
                  <th style="text-align: center;" >Product_Name</th>
                  <th  >MRP </th>
                  <th  >Price </th>
                  <th  >quienity</th>
                  <th  >GST</th>
                  <th  >Cess</th>
                  <th  >8000</th>
                  <th  >Total</th> -->
                  <!-- <th>CESS</th> -->
                  <!-- <th>Activity</th> -->
                <!-- </tr> -->
              <!-- </thead> -->
<!-- </table> -->
    </div>






                                  </div>
              </div>
              <script>

function card(){
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
  </body>
  </html>