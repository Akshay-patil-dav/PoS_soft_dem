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

  <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
  <title>AUE</title>

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

  require_once("./conn/dbconn.php");

  require_once('./navbar/nav.php'); ?>
  <style>
    @media print {
      body {
        background-color: red;
        width: 2cm;
        display: none;
      }
    }

    .col1 {
      /* background-color: red; */
      width: 100%;
      height: 10cm;
      position: relative;
      top: 0.2cm;
    }

    .col2 {
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

    .card-img-top {
      height: 5cm;
      max-width: 200%;
      border-radius: 20px;
      position: relative;
      left: 0.6cm;
    }
  </style>
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 120%;
      height: auto;
      text-align: center;
      border-radius: 20px;
      cursor: pointer;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 2px 16px;
    }

    .but {
      width: 3cm;
      height: 1cm;
      border-radius: 10px;
      border: 0 solid;
      background-color: green;
      color: white;
      font-family: Arial black;
    }

    .but:active {
      background-color: red;
      border: 0 solid;
    }

    .item {
      width: 200px;
      height: 120px;
      height: auto;
      /* float: ; */
      margin: 3px;
      padding: 3px;
    }
  </style>




  <style>
    .form-control {
      width: 92.5%;
      border: 3px solid;
      border-radius: 10px;
      margin-left: 15px;
    }
  </style>

  <div style="display: flex;">
    <div class="col1">
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
        <table id="myTable">


          <thead>
            <tr>

              <th></th>

            </tr>
          </thead>
          <tbody class="grid-container">



            <?php
            // WHERE product_type != 'Raw'
            $data = "SELECT * FROM product WHERE product_type != 'Raw' ";

            $result1 = $conn->query($data);

            if ($result1->num_rows > 0) {
              while ($row = $result1->fetch_assoc()) {

            ?>

                <tr>


                  <td>

                    <?php



                    if (isset($_POST['add']) == true) {

                      // $product_name = $_POST['productname'];
                      // $qui = $_POST['quantity'];
                      // $quantity = floatval($qui);


                      $pro_code = $_POST['add'];

                      // echo $pro_code;
                      $qui = $_POST['qui'];

                      $user = $_SESSION["username"];

                      $quichk = "SELECT * FROM product WHERE product_code = '" . $pro_code . "'";
                      $quires = $conn->query($quichk);


                      if ($quires->num_rows > 0) {


                        while ($quirow = $quires->fetch_assoc()) {

                          if ($qui >= $quirow['quentity']) {

                    ?>

                            <script>
                              alert('Product Not Avalable')
                              window.location.href = ' ./p.php';
                            </script>
                    <?php


                          } else {


                            $up = "UPDATE product SET quentity  =  quentity - '" . $qui . "'  WHERE product_code = '" . $pro_code . "' ";
                            $reup = $conn->query($up);

                            if ($reup == true) {
                              $query = "SELECT *  FROM users  WHERE username = '" . $user . "'";
                              $result = $conn->query($query);

                              if ($result->num_rows > 0) {


                                while ($row = $result->fetch_assoc()) {




                                  $sql = "INSERT INTO `sales`( `product_id`, `quantity`, `users`) VALUES ('" . $pro_code . "','" . $qui . "','" . $_SESSION["username"] . "')";
                                  $stmt = $conn->query($sql);


                                  if ($stmt == true) {
                                    // echo "Product added to cart successfully.";
                                    echo "<script>
          window.location.href=' ./p.php';
          </script>";
                                  } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                  }

                                  $stmt->close();
                                }
                              }

                              // }
                            }
                          }
                        }
                      }
                    }
                    ?>
                    <form action="# " method="post">
                      <div class="card">
                        <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
                        <!-- <div class="container"><br> -->
                        <div class="item">
                          <?php

                          if ($row['img'] == "") {

                          ?>

                            <img src="./error/error.jpg" class="card-img-top" alt="Avatar" style="width:100%">

                          <?php

                          } else {
                          ?>
                            <img src="./image/<?php echo $row['img']; ?>" class="card-img-top" alt="Avatar" style="width:100%">

                          <?php } ?>

                        </div>
                        <h4><b><?php echo $row['product_name']; ?></b></h4>
                        <div style="display: flex; margin-left:60px; ">
                          <p> Rs.<?php echo $row['product_price'];  ?></p> &#160 &#160
                          <p> GST : <?php echo $row['gstret'];  ?>%</p> <br>

                        </div>
                        <div style="display: flex; position: relative; left: 1.5cm;  width: 5cm; ">
                          <p> IGST : <?php echo $row['igst'];  ?>%</p> &#160 &#160
                          <p> CESS : <?php echo $row['cess'];  ?>%</p>
                        </div>
                        <div>
                          Que: <input type="text" style="width: 1.5cm;" value="1" name="qui">
                        </div>

                        <div>
                          <p> Code : <?php echo $row['product_code'];  ?></p>
                        </div>
                        <div><button class="btn btn-purple but" id="add" name="add" value="<?php echo $row['product_code']; ?>">ADD</button></div><br><br>
                      </div>
                    </form>

                    <!--                                             
                                            <script>
                                              function a(){
                                                  let num =document.getElementById('a').value;
                                                  alert(num);
                                              }
                                            </script> -->


                    <!-- </div> -->
                  </td>
                </tr>
            <?php }
            } else {
              echo "0 results";
            }  ?>






          </tbody>
        </table>
        <style>
          #noMatch {
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


    <!-- **************************************************************************************************************************************************************************************************************** -->
    <div class="col2">


      <style>
        .sell {
          position: relative;
          top: 10px;
        }
      </style>
      <input class="form-control sell" type="text" id="cardinput" onkeyup="card()" placeholder="Search for names.." title="Type in a name">


      <div class="box">
        <style>
          .box {
            margin: 0.5cm;
            position: relative;
            bottom: cm;
          }
        </style>
        <style>
          .ex5 {
            /* background-color: lightblue;  */
            width: 101%;
            height: 6cm;
            overflow: auto;
          }

          .td {
            width: 1%;
            text-align: center;
          }

          /* body{
  overflow-y: hidden;
  overflow-x: hidden;
} */
        </style>
        <!-- #region -->

        <div class="table-responsive ex5">

          <table class="table table-striped mg-b-0  " id="mytab">
            <!-- <thead style="text-align: center;" > -->
            <tr>

              <th style=" width: 2.5cm; ">ID</th>
              <th style="text-align: center; width: 1cm;   ">Product_Name</th>
              <th style=" width: 3.2cm;  text-align: center; ">MRP </th>
              <th style=" width: 3.2cm; text-align: center; ">Price </th>
              <th style="  width: 2cm; text-align: center; ">quienity</th>
              <th style="  width: 2.5cm;  text-align: center; ">GST</th>
              <th style="  width: 1.5cm;  text-align: right; ">Cess</th>
              <th style="  width: 1.5cm;  text-align: right; ">IGST</th>
              <th style="   text-align: center; ">Total</th>
              <th>Action</th>
              <!-- <th>CESS</th> -->
              <!-- <th>Activity</th> -->
            </tr>
            <!-- </thead> -->

            <tbody>






              <?php
              // require_once("./conn/dbconn.php"); 
              // $tbl="users"; // Table name 
              // $sql = "SELECT * FROM sales  GROUP BY product_id";

              $sql = "SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = '" . $_SESSION["username"] . "' GROUP BY product_id  ;";

              $result = $conn->query($sql);
              $i = 1;

              if ($result->num_rows > 0) {
                // output data of each row

                while ($row1 = $result->fetch_assoc()) {
                  // echo  $row["product_name"]."<br>";




                  $query = "SELECT cess ,product_name, MRP , gstret, ( product_price * (gstret))/100 AS totcost , ( product_price * (cess))/100  AS ceees , ( product_price * (igst))/100  AS IGST , product_price  AS price , igst  FROM product  WHERE product_code = '" . $row1['product_id'] . "' ";
                  $resln = $conn->query($query);




                  if ($resln->num_rows > 0) {


                    while ($roln = $resln->fetch_assoc()) {

                      $price = $roln['price'] + $roln['totcost'] + $roln['ceees'] + $roln['IGST'];
                      // $price =$roln['totcost'];





              ?>

                      <tr>

                        <td style="text-align: left; width: 1%; " scope="row"><?php echo $i++; ?></td>
                        <td class="td"><?php echo  $roln['product_name']; ?></td>
                        <td class="td"><?php echo  $roln['MRP']; ?></td>
                        <td class="td"><?php echo  $price; ?></td>
                        <td class="td"><?php echo  round($row1['qui'], 3); ?></td>
                        <td class="td"><?php echo  $roln['gstret']; ?></td>
                        <td class="td"><?php echo  $roln['cess']; ?></td>
                        <td class="td"><?php echo  $roln['igst']; ?></td>
                        <td class="td"><?php echo round($row1['qui'] * $price, 3);  ?></td>
                        <td class="td">
                          <style>
                            .del {
                              position: relative;
                              /* top:0.5px ; */
                            }
                          </style>

                          <?php $ppp = round($row1['qui'] * $price, 3);   ?>

                          <form action="./delsell.php" method="post">
                            <button style="position: relative; top: 0.5px; " name=" delsell" value="<?php echo $row1['product_id']; ?>" class="btn btn-danger btn-block del"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                              </svg></button>
                          </form>

                        </td>


                        <style>
                          .btn-primary {
                            pad: 0.5cm;
                            /* text-align: center; */
                            height: 1cm;
                            width: 2cm;
                            position: relative;
                            bottom: 8px;
                            border-radius: 20px;
                          }

                          .btn-danger {
                            width: 2cm;
                            position: relative;
                            bottom: 9px;
                            border-radius: 20px;
                          }

                          .btndel {
                            position: relative;
                            top: 8px;
                          }
                        </style>



                      </tr>

              <?php

                    }
                  }
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

      <?php
      // $view = "SELECT SUM(price_GS) AS TOTAL_VALUE , COUNT(pro_id) AS No_item FROM sell_cal WHERE users = '".$_SESSION["username"]."'  ";
      //  $view = "select id AS pos_id , COUNT(pro_id) AS pro_id , users ,  round(SUM(price_GS*qui),3) AS total FROM sell_demo WHERE users = '".$_SESSION["username"]."' " ;
      // $view = "SELECT id , users , COUNT(pro_id) AS coun , igst , cess, qui , price_GS ,GST , ((price_GS+((price_GS*GST)/100))*qui) AS total    FROM sell_d1 WHERE users = '".$_SESSION["username"]."'";
      // $view = "SELECT id , users , COUNT(pro_id) AS coun , igst , cess, qui , price_GS ,GST , round( SUM(((((price_GS*GST)/100)+((price_GS*cess)/100)+((price_GS*igst)/100))*qui)+price_GS),0) AS total FROM sell_d1 WHERE users = '" . $_SESSION["username"] . "'";
      // $view = "SELECT id , users , COUNT(pro_id) AS coun , igst , cess, qui , price_GS ,GST , round( SUM(((((price_GS*GST)/100)+((price_GS*cess)/100)+((price_GS*igst)/100))*qui)+price_GS),0) AS total FROM sell_d1 WHERE users = '" . $_SESSION["username"] . "'";


            $view = "SELECT id , users , COUNT(pro_id) AS coun , igst , cess, qui , price_GS ,GST , round( SUM(((((price_GS*GST)/100)+((price_GS*cess)/100)+((price_GS*igst)/100))+price_GS)*qui),0) AS total FROM sell_d1 WHERE users = '" . $_SESSION["username"] . "'";


      // $view = " SELECT users , COUNT(pro_id) AS coun   , SUM(qui) AS val , SUM(gst_price) AS total FROM dem2 where users = '".$_SESSION["username"]."' " ;

      $resview = $conn->query($view);

      if ($resview->num_rows > 0) {
        while ($row_view = $resview->fetch_assoc()) {


      ?>
          <style>
            .total {
              margin-left: 50px;
            }
          </style>
          <br><br>
          <h3 class="total"> Total Value : &#160 <b style=" color: green; "> <?php

                                                                              echo  $row_view['total'];

                                                                              ?></b> Rs</h3>
          <h3 class="total"> Total Items : &#160 <b style=" color: blue; "> <?php


                                                                            $sell_demo = "SELECT COUNT(pro_id) AS id_coun FROM sell_demo WHERE users =  '" . $_SESSION["username"] . "'";
                                                                            $ressell_demo = $conn->query($sell_demo);

                                                                            if ($ressell_demo->num_rows > 0) {
                                                                              while ($view = $ressell_demo->fetch_assoc()) {


                                                                                echo  $view['id_coun'];
                                                                              }
                                                                            }


                                                                            ?></b> </h3>




          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">POS CODE :</label>
                    <input type="text" class="form-control" id="recipient-name" placeholder="POS/<?php echo $row_view['id']; ?>" value="POS/<?php $row_view['id']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name" placeholder="<?php echo $_SESSION["username"]; ?>" value="<?php echo $_SESSION["username"]; ?>">
                  </div>



                  <!-- *********************** -->
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Given Rs :</label>
                    <input type="text" class="form-control" id="recipient-name" placeholder="<?php echo $_SESSION["username"]; ?>" value="<?php echo $_SESSION["username"]; ?>">
                  </div>

                  <!-- *************************************** -->
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Total:</label>
                    <input type="text" class="form-control" id="recipient-name" placeholder="<?php

                                                                                              if ($row_view['coun'] == 0) {
                                                                                                echo 0;
                                                                                              } else {
                                                                                                echo  $row_view['total'];
                                                                                              }

                                                                                              ?>" value="<?php

                          if ($row_view['coun'] == 0) {
                            echo 0;
                          } else {
                            echo  $row_view['total'];
                          }

                          ?>">
                  </div>

                  <div class="form-group">
                    <style>
                      select {
                        cursor: pointer;
                      }

                      body {
                        overflow: hidden;
                      }
                    </style>

                    <!-- *********************** -->
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Given Change :</label>
                      <input type="text" class="form-control" id="recipient-name" placeholder="<?php echo $_SESSION["username"]; ?>" value="<?php echo $_SESSION["username"]; ?>">
                    </div>

                    <!-- *************************************** -->

                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <!-- <input type="text" class="form-control" id="recipient-name"  placeholder="<?php echo $_SESSION["username"]; ?>"  value="<?php echo $_SESSION["username"]; ?>"  > -->
                    <select name="" class="form-control" id="recipient-name">
                      <option value="">Online</option>
                      <option value="">Cash</option>
                    </select>
                  </div>



                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form action="./p.php">

                    <script>
                      function next() {
                        // window.location.href=' ./p.php';
                      }
                    </script>
                    <button class="btn btn-purple" onclick="next()">Continue</button>
                  </form>
                </div>

              </div>
            </div>
          </div>


      <?php


        }
      }

      ?>

      <style>
        .dropall {
          /* background-color: red; */
          padding: 10px;
          width: 3cm;
          border: 0px solid;
          border-radius: 10px;
          position: relative;
          left: 22.7cm;
          bottom: 1.3cm;
        }
      </style>


      <?php

      if (isset($_POST['dellist']) == true) {
        // $p = "DELETE FROM sales WHERE  users ='".$_SESSION["username"]."'";
        //  $pres= $conn->query($p);
        //  echo "<script> window.location.href=' ./p.php';</script>";
        // }






        $sql98 = " SELECT users , pro_id , qui FROM sell_demo  WHERE  users ='" . $_SESSION["username"] . "' ";
        // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
        $result29 = $conn->query($sql98);

        if ($result29->num_rows > 0) {

          while ($row28 = $result29->fetch_assoc()) {


            $sql44 = " SELECT * FROM product  Where product_code = '" . $row28['pro_id'] . "'";
            // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
            $result24 = $conn->query($sql44);

            if ($result24->num_rows > 0) {

              while ($row24 = $result24->fetch_assoc()) {


                // $qui4 = $row24['qui'];

                $up4 = "UPDATE product SET quentity  =  '" . $row28['qui'] + $row24['quentity'] . "' WHERE product_code ='" . $row28['pro_id'] . "'  ";
                $reup4 = $conn->query($up4);

                if ($reup4 == true) {

                  // $del = "DELETE FROM sales WHERE product_id= '$sell_id' ";
                  $del4 = "DELETE FROM sales WHERE  users ='" . $_SESSION["username"] . "'";

                  if ($conn->query($del4) === TRUE) {
                    echo "Record deleted successfully";
                    //   echo "<script>alert('Record deleted successfully');
                    //               window.location.href=' ../p.php';
                    //               </script>";

                    echo "<script>;
window.location.href=' p.php';
</script>";
                  } else {
                    echo "Error deleting record: " . $conn->error;
                  }
                }
              }
            }
          }
        }
      }
      ?>
      <form action="./p.php" method="post">
        <BUtton class="dropall  btn-danger " name="dellist"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="lks" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
          </svg>Drop All</BUtton>
      </form>


      <style>
        .pay {
          width: 6cm;
          padding: 0.5cm;
          border-radius: 10px;
          background-color: green;
          font-family: Arial black;
          /* height: 1.cm; */
          /* margin: 0cm; */
          margin-left: 20cm;
        }
      </style>
      <a href="./pay.php" class="btn btn-purple pay"> POS SELL</a><br><br>
      <a href="./invoicepay.php" class="btn btn-purple pay"> INVOICE SELL</a>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name" placeholder="<?php echo $_SESSION["username"]; ?>" value="<?php echo $_SESSION["username"]; ?>">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <form action="./p.php">

                <script>
                  function next() {
                    // window.location.href=' ./p.php';
                  }
                </script>
                <button class="btn btn-purple" onclick="next()">Continue</button>
              </form>
            </div>

          </div>
        </div>
      </div>


      <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Cass in hand ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
      </script>

      <!-- <div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-danger btn-block">Danger</button></div> -->


      <!-- SELECT * FROM sales AS S CROSS JOIN  product AS P ON S.product_id = P.product_code; -->


      <!-- SELECT S.product_id AS pro_id , S.quantity AS qui , P.product_price AS price , P.gstret AS GST FROM sales AS S CROSS JOIN  product AS P ON S.product_id = P.product_code; -->
      <!-- SELECT S.product_id AS pro_id , S.quantity AS qui , P.product_price AS price , P.gstret AS GST , ((P.product_price * P.gstret ) / 100) + P.product_price AS price_GST FROM sales AS S CROSS JOIN product AS P ON S.product_id = P.product_code GROUP BY S.product_id; -->
      <!--  -->
      <!-- SELECT S.product_id AS pro_id , SUM(S.quantity) AS qui , P.product_price AS price , P.gstret AS GST , ((P.product_price * P.gstret ) / 100) + P.product_price AS price_GST FROM sales AS S CROSS JOIN product AS P ON S.product_id = P.product_code GROUP BY S.product_id; -->

      <!-- SELECT S.product_id AS pro_id , S.quantity AS qui , P.product_price AS price , P.gstret AS GST , ((P.product_price * P.gstret ) / 100) + P.product_price AS price_GST FROM sales AS S CROSS JOIN product AS P ON S.product_id = P.product_code GROUP BY S.product_id; -->

      <!-- SELECT S.product_id AS pro_id , SUM(S.quantity) AS qui , P.product_price AS price , P.gstret AS GST , SUM(((P.product_price * P.gstret ) / 100) + P.product_price ) AS price_GS FROM sales AS S CROSS JOIN product AS P ON S.product_id = P.product_code GROUP BY S.product_id; -->

      <!-- VIEW -->
      <!-- CREATE VIEW sell_Cal AS SELECT S.product_id AS pro_id , SUM(S.quantity) AS qui , P.product_price AS price , P.gstret AS GST , SUM(((P.product_price * P.gstret ) / 100) + P.product_price ) AS price_GS FROM sales AS S CROSS JOIN product AS P ON S.product_id = P.product_code GROUP BY S.product_id ; -->
    </div>

    <!--is not curect   ********************* CREATE VIEW dem1 AS SELECT S.product_id AS pro_id , SUM(S.quantity) AS qui , P.product_price AS price , P.gstret AS GST , (P.product_price * P.gstret ) / 100 AS gst_price FROM sales AS S CROSS JOIN product AS P ON S.product_id = P.product_code GROUP BY S.product_id; -->
    <!-- SELECT qui*(price+gst_price) AS TOTAL , qui , pro_id , GST FROM dem1; -->

    <!-- CREATE VIEW dem2 AS SELECT S.users AS users ,P.product_name As pro_name, S.product_id AS pro_id , SUM(S.quantity) AS qui , P.product_price AS price , P.gstret AS GST , SUM(S.quantity)*(P.product_price +((P.product_price * P.gstret ) / 100 )) AS gst_price  FROM sales AS S CROSS JOIN product AS P ON S.product_id = P.product_code GROUP BY S.product_id; -->

    <!-- SELECT SUM(qui) , users , (price + gst_ret )*SUM(qui) AS Total FROM d1 WHERE pro_id = '2002' AND users = 'akki@gmail.com' GROUP BY users; -->



    <!-- select SUM(qui) , pro_id , users price FROM sell_cal WHERE pro_id ='2002' AND users = 'akki@gmail.com'; -->




    <!-- select COUNT(pro_id) AS pro_id , users , SUM(price_GS*qui) AS total FROM sell_demo WHERE users = 'akki@gmail.com'; -->






    <!-- CREATE VIEW sell_fach_info AS SELECT sell.pro_code , sell.qt , sell.users , sell.date , sell.pos_no , P.product_name , P.product_code , P.gstret , P.cess , P.product_price , P.MRP  FROM sells_information_pos AS sell CROSS JOIN product AS P ON sell.pro_code = P.product_code -->
  </div>


  <!-- $users = " SELECT * FROM users WHERE username = '".$_SESSION["username"]."'  ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$users_res = $conn->query($users);

if ($users_res->num_rows > 0){

while ($users_res_row = $users_res->fetch_assoc()) {
?> -->




  <!-- $sells_information_pos = " SELECT * FROM sells_information_pos WHERE users = '".$_SESSION["username"]."' && pos_no = ' ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$sells_information_pos_result = $conn->query($sells_information_pos);

if ($sells_information_pos_result->num_rows > 0){

while ($sells_information_pos_row = $sells_information_pos_result->fetch_assoc()) { -->

  <script>
    function card() {
      /** script.js **/
      let input = document.getElementById('cardinput');
      let table = document.getElementById('mytab');
      let rows = table.getElementsByTagName('tr');
      let noMatchMessage = document.getElementById('noMatch');

      input.addEventListener('input', function() {
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
    function mypay() {
      /** script.js **/
      let input = document.getElementById('searchInput');
      let table = document.getElementById('myTable');
      let rows = table.getElementsByTagName('tr');
      let noMatchMessage = document.getElementById('noMatch');

      input.addEventListener('input', function() {
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