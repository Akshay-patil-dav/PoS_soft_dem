<?php

require_once("./navbar/nav.php");
// require_once("./conn/dbconn.php");

if (isset($_POST['pospay']) == true) {

    $full_name = $_POST['full_name'];
    $Phone_No = $_POST['Phonr_No'];
    // $Total_price = $_POST['Total_No'];
    $Given_Rs = $_POST['Given_Rs'];
    // $Change = $_POST['Ch']
    // $Pos_No = $_POST['Pos_No'];
    $Pay = $_POST['Pay'];



    // $view = "SELECT SUM(price_GS) AS TOTAL_VALUE , COUNT(pro_id) AS No_item FROM sell_cal WHERE users = '".$_SESSION["username"]."'  ";
    //  $view = "select id AS pos_id , COUNT(pro_id) AS pro_id , users ,  round(SUM(price_GS*qui),3) AS total FROM sell_demo WHERE users = '".$_SESSION["username"]."' " ;
    $view = "SELECT id , users , COUNT(pro_id) AS coun , igst , cess, qui , price_GS ,GST , round( SUM(((((price_GS*GST)/100)+((price_GS*cess)/100)+((price_GS*igst)/100))*qui)+price_GS),0) AS total FROM sell_d1 WHERE users = '" . $_SESSION["username"] . "' ";

    // $view = " SELECT users , COUNT(pro_id) AS idpro , SUM(qui) AS val , SUM(gst_price) AS TOTAL_VALUE FROM dem2 where users = '".$_SESSION["username"]."' " ;

    $resview = $conn->query($view);

    if ($resview->num_rows > 0) {
        while ($row_view = $resview->fetch_assoc()) {

            // $sql = " INSERT INTO `sell_info`( `gst_no`, `ph_no`, `total_price`, `given_rs`,  `pos_no`, `pay`,`users`,`date`) VALUES ('".$full_name."','".$Phone_No."','".$row_view['total']."','".$Given_Rs."','".$row_view['id']."','".$Pay."','".$_SESSION["username"].",CURRENT_DATE()') " ;
            $sql = " INSERT INTO `sell_info`( `gst_no`, `ph_no`, `total_price`, `given_rs`,  `pos_no`, `pay`,`users`,`date`,`time`) VALUES ('" . $full_name . "','" . $Phone_No . "','" . $row_view['total'] . "','" . $Given_Rs . "','" . $row_view['id'] . "','" . $Pay . "','" . $_SESSION["username"] . "', CURRENT_DATE() ,CURRENT_TIME() ) ";

            $res = $conn->query($sql);

            if ($res == true) {
                // echo "<script>
                // window.print();
                // </script>";

                $sell_demo = "SELECT id ,users , pro_id , qui , price , GST , price_GS FROM sell_demo WHERE users = '" . $_SESSION["username"] . "'";
                $sell_result = $conn->query($sell_demo);

                if ($sell_result->num_rows > 0) {

                    while ($sell_row = $sell_result->fetch_assoc()) {


                        $sell_infor_insrt = "INSERT INTO `sells_information_pos`( `pro_code`, `users`,  `pos_no`,`qt`) VALUES ('" . $sell_row['pro_id'] . "','" . $_SESSION["username"] . "','" . $row_view['id'] . "','" . $sell_row['qui'] . "')";
                        $sell_res = $conn->query($sell_infor_insrt);

                        if ($sell_res == true) {
                            $del = "DELETE FROM sales WHERE users = '" . $_SESSION["username"] . "' ";
                            $del_res = $conn->query($del);

                            if ($del_res == true) {
                                echo "<script>
                                   window.print();
                                   </script>";
                            }
                        }
                    }
                }



?>

                <!-- CREATE VIEW sell_pos_info_list AS SELECT s.total_price , s.given_rs , s.pos_no , s.pay , s.ph_no , s.gst_no , s.users, c.gstin_no ,s.date , s.time , c.name, c.company_name ,c.addr_comp,c.email_id,c.phone_no,c.city,c.state,c.postal_code,c.country FROM sell_info AS s CROSS JOIN client_info AS c ON s.gst_no = c.gstin_no; -->

                <style>
                    .az-header {
                        display: none;
                    }
                </style>

                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
                    <title>AUE</title>
                </head>

                <body>



                    <script type="text/javascript">
                        function Redirect() {
                            window.location = "./p.php";
                        }
                        // document.write("You will be redirected to a new page in 5 seconds"); 
                        setTimeout('Redirect()', 500);
                    </script>
                    <style>
                        /* @media print{ */
                        /* .image{
                background-color: black;
                padding: 1cm;
                width: 1cm;
            } */
                        /* } */

                        body {
                            display: none;
                        }

                        @media print {
                            body {
                                display: block;
                            }

                            .image {
                                background-color: black;
                                /* padding: 1cm; */
                                width: 2cm;
                                /* position: relative;
                left: 15px;
                top: 20px; */
                                height: 2.5cm;
                                margin-left: 8px;
                                margin-top: 15px
                            }

                            .rescipt {
                                background-color: rgb(238, 238, 238);
                                width: 80mm;
                                height: auto;
                            }

                            .mar {
                                padding: 0.2cm;
                            }

                            .img1 {
                                padding: 1cm;
                                width: 80px;
                                text-align: center;
                            }
                        }
                    </style>
                    <div class="rescipt">
                        <div class="mar">
                            <div style="display: flex; gap: 0.5cm; ">
                                <div class="">



                                    <?php

                                    require_once('./conn/dbconn.php');

                                    $sql98 = " SELECT * FROM company_create ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $result29 = $conn->query($sql98);

                                    if ($result29->num_rows > 0) {

                                        while ($row28 = $result29->fetch_assoc()) {
                                    ?>

                                            <!-- <p style="font-size: 20px; font-family: Arial black; position: relative; bottom: 10px; width: ;    "> </p> -->
                                            <img src="./logo/<?php echo $row28['img']; ?>" class=" image">


                                    <?php }
                                    } ?>

                                </div>
                                <div style=" margin-top: 15px; position: relative;  right: 0px; ">

                                    <?php

                                    require_once("./conn/dbconn.php");
                                    // require_once('../conn/dbconn.php');

                                    $sql98 = " SELECT * FROM company_create ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $result29 = $conn->query($sql98);

                                    if ($result29->num_rows > 0) {

                                        while ($row28 = $result29->fetch_assoc()) {
                                    ?>

                                            <h4 style="font-size: 15px;"> <?php echo $row28['name']; ?></h4>

                                    <?php }
                                    } ?>


                                    <?php

                                    // require_once('../conn/dbconn.php');

                                    $sql98 = " SELECT * FROM company_create ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $result29 = $conn->query($sql98);

                                    if ($result29->num_rows > 0) {

                                        while ($row28 = $result29->fetch_assoc()) {
                                    ?>

                                            <p style="font-size: 20px; font-family: Arial black; position: relative; bottom: 10px;   "> <?php echo $row28['name']; ?></p>


                                    <?php }
                                    } ?>
                                </div>
                            </div>
                            <br>

                            <div>
                                <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; ">
                                    <?php $sql98 = " SELECT * FROM company_create ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $result29 = $conn->query($sql98);

                                    if ($result29->num_rows > 0) {

                                        while ($row28 = $result29->fetch_assoc()) {
                                    ?>
                                            <?php echo $row28['location']; ?>&#160 <?php echo $row28['pin_code']; ?>


                                    <?php }
                                    } ?>
                                </div>
                                <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; ">
                                    <?php $sql98 = " SELECT * FROM company_create ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $result29 = $conn->query($sql98);

                                    if ($result29->num_rows > 0) {

                                        while ($row28 = $result29->fetch_assoc()) {
                                    ?><?php echo $row28['state']; ?>
                                    &#160 <?php echo $row28['country']; ?>&#160 <?php echo $row28['pin_code']; ?>


                            <?php }
                                    } ?>
                                </div>
                                <div style="width: 7.8cm; font-size: 15px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; ">POS / <?php echo $row_view['id']; ?></div>

                                <br>
                                <br>

                                <br>
                                <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; ">

                                    <?php

                                    $sells_information_pos = " SELECT * FROM sell_fach_info WHERE users = '" . $_SESSION["username"] . "' && pos_no = '" . $row_view['id'] . "' GROUP BY pos_no ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $sells_information_pos_result = $conn->query($sells_information_pos);

                                    if ($sells_information_pos_result->num_rows > 0) {

                                        while ($sells_information_pos_row = $sells_information_pos_result->fetch_assoc()) {
                                    ?>

                                            Date: <?php echo $sells_information_pos_row['date']; ?> &#160 &#160 <br> Sale No/Ref: /POS/ <?php echo $sells_information_pos_row['pos_no']; ?>

                                    <?php
                                        }
                                    }

                                    ?>
                                </div>
                                <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; ">Sales Associate :
                                    <?php

                                    $sells_information_pos = " SELECT * FROM users WHERE username = '" . $_SESSION["username"] . "' ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $sells_information_pos_result = $conn->query($sells_information_pos);

                                    if ($sells_information_pos_result->num_rows > 0) {

                                        while ($sells_information_pos_row = $sells_information_pos_result->fetch_assoc()) {
                                            echo $sells_information_pos_row['namuser'];
                                        }
                                    }
                                    ?>

                                </div>
                                <hr>
                                <br>
                                <div>
                                    <style>
                                        /* @media print{ */
                                        th {
                                            width: 3cm;
                                        }

                                        td {
                                            width: 3cm;
                                            text-align: center;
                                        }

                                        /* } */
                                    </style>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>no.</th>
                                                <th>product</th>
                                                <th>Qty</th>
                                                <th>price</th>
                                                <th>gst</th>
                                                <th>cess</th>
                                                <th>igst</th>
                                                <th>value</th>
                                            </tr>
                                        </tbody>

                                        <?php
                                        $sells_information_pos = " SELECT product_name , qt , gstret , cess,product_price,  ((product_price*gstret)/100)+product_price AS price , qt*( ( ((product_price*gstret)/100) + ((product_price*igst)/100) + ((product_price*cess)/100)  ) +product_price) As total , igst FROM sell_fach_info WHERE users = '" . $_SESSION["username"] . "' && pos_no = '" . $row_view['id'] . "' ";
                                        // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                        $res = $conn->query($sells_information_pos);

                                        if ($res->num_rows > 0) {

                                            $i = 0;
                                            while ($row = $res->fetch_assoc()) {


                                                $i++;
                                        ?>
                                                <tr>
                                                    <th><?php echo $i; ?></th>
                                                    <td><?php echo $row['product_name']; ?> </td>
                                                    <td><?php echo $row['qt']; ?> </td>
                                                    <td><?php echo $row['price']; ?> </td>
                                                    <td><?php echo $row['gstret']; ?> </td>
                                                    <td><?php echo $row['cess']; ?> </td>
                                                    <td><?php echo $row['igst']; ?> </td>
                                                    <td><?php echo $row['total']; ?> </td>
                                                </tr>
                                        <?php }
                                        } ?>

                                    </table>
                                </div>


                                <br>

                                <style>
                                    @media print {
                                        hr {
                                            width: 7cm;
                                        }
                                    }
                                </style>
                                <hr>
                                <br>
                                <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; ">Tax Backup Info</div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>no.</th>
                                            <!-- <th>product</th> -->
                                            <!-- <th>Qty</th> -->
                                            <th>Amt</th>
                                            <th>gst</th>
                                            <th>cess</th>
                                            <th>igst</th>
                                            <th>value</th>
                                        </tr>
                                    </tbody>

                                    <?php
                                    $sells_information_pos = " SELECT product_name , ((product_price*igst)/100) AS i_gst, gstret, ((product_price*cess)/100) AS cessamt , qt , (product_price*gstret)/100 AS gst , cess , product_price,  ((product_price*gstret)/100)+product_price AS price , ((product_price*gstret)/100)+((product_price*cess)/100)+((product_price*igst)/100)+(product_price) As total , igst FROM sell_fach_info WHERE users = '" . $_SESSION["username"] . "' && pos_no = '" . $row_view['id'] . "' ";
                                    // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                    $res = $conn->query($sells_information_pos);

                                    if ($res->num_rows > 0) {

                                        // texamout*cess/100 +gst_amount
                                        $i = 0;
                                        while ($row = $res->fetch_assoc()) {


                                            $i++;
                                    ?>
                                            <tr>
                                                <th><?php echo $i; ?></th>
                                                <td><?php echo $row['product_price']; ?></td>
                                                <td><?php echo $row['gst']; ?></td>
                                                <td><?php echo $row['cessamt']; ?></td>
                                                <td><?php echo $row['i_gst']; ?></td>
                                                <th><?php echo $row['total']; ?></th>
                                            </tr>
                                    <?php }
                                    } ?>

                                </table>

                                <br>
                                <hr><br><br>
                                <div>
                                    <div style="width: 7.8cm; font-size: 20px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; ">Total &#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160
                                        <?php
                                        $sells_information_pos = " SELECT total_price , given_rs, round(given_rs - total_price,0) AS ch , pay FROM sell_info WHERE pos_no = '" . $row_view['id'] . "' ";
                                        // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                        $res = $conn->query($sells_information_pos);

                                        if ($res->num_rows > 0) {

                                            // texamout*cess/100 +gst_amount
                                            //    $i=0;
                                            while ($row = $res->fetch_assoc()) {


                                        ?>
                                                <?php echo $row['total_price']; ?>

                                    </div>
                                    <br>
                                    <hr><br>
                                    <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; ">Paid by: <?php echo $row['pay']; ?> <br><br> Amount: <?php echo $row['given_rs']; ?> <br><br> Change: <?php echo $row['ch']; ?></div>
                            <?php }
                                        } ?>
                            <br>
                            <div style="width: 7.8cm; font-size: 15px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px;  text-align: center;">Thank You for visit !!</div>
                            <br>
                            <hr><br>
                            <!-- <div style="width: 7.8cm; font-size: 11px;  margin-bottom: 5px; position: relative; bottom: 15px;  text-align: center;" ><b  style="font-family: Arial black;"  >Designed & Developed BY &#160</b> <b style="font-family: Arial black; font-size: 15px; " >A.U.E</b></div> -->
                            <!-- <br> -->

                            <div style="width: 7.8cm; font-size: 11px;  margin-bottom: 5px; position: relative; bottom: 15px;  text-align: center;"><b style="font-family: Arial black;">Contact No &#160</b> <b style="font-family: Arial black; font-size: 15px; "> <?php $sql98 = " SELECT * FROM company_create ";
                                                                                                                                                                                                                                                                        // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                                                                                                                                                                                                                                                        $result29 = $conn->query($sql98);

                                                                                                                                                                                                                                                                        if ($result29->num_rows > 0) {

                                                                                                                                                                                                                                                                            while ($row28 = $result29->fetch_assoc()) {
                                                                                                                                                                                                                                                                        ?>
                                            <?php echo $row28['1p']; ?> ,&#160 <?php echo $row28['2p']; ?>


                                    <?php }
                                                                                                                                                                                                                                                                        } ?></b></div>

                            <br><br>

                                </div>
                            </div>
                        </div>
                        <!-- <br><br><br> -->

                    </div>

    <?php

            } else {
                echo "No";
            }


            // SELECT * FROM `sells_information_pos` WHERE users = 'akshaychavan07695@gmail.com' && pos_no = '614';




        }
    }
}

    ?>

                </body>

                </html>