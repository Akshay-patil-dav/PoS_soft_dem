
<?php

    require_once("./navbar/nav.php");
    // require_once("./conn/dbconn.php");

        if(isset($_POST['pospay']) == true){

            $full_name = $_POST['full_name'];
            $Phone_No = $_POST['Phonr_No'];
            // $Total_price = $_POST['Total_No'];
            $Given_Rs = $_POST['Given_Rs'];
            // $Change = $_POST['Ch']
            // $Pos_No = $_POST['Pos_No'];
            $Pay = $_POST['Pay'];
                
            
        
            // $view = "SELECT SUM(price_GS) AS TOTAL_VALUE , COUNT(pro_id) AS No_item FROM sell_cal WHERE users = '".$_SESSION["username"]."'  ";
            //  $view = "select id AS pos_id , COUNT(pro_id) AS pro_id , users ,  round(SUM(price_GS*qui),3) AS total FROM sell_demo WHERE users = '".$_SESSION["username"]."' " ;
            $view = "SELECT product_name , qt , gstret , cess,product_price,  ((product_price*gstret)/100)+product_price AS price , qt*( ( ((product_price*gstret)/100) + ((product_price*igst)/100) + ((product_price*cess)/100)  ) +product_price) As total , igst FROM sell_fach_info WHERE users = '".$_SESSION["username"]."' && pos_no = '".$row_view['id']."' ";
          
            // $view = " SELECT users , COUNT(pro_id) AS idpro , SUM(qui) AS val , SUM(gst_price) AS TOTAL_VALUE FROM dem2 where users = '".$_SESSION["username"]."' " ;
          
            $resview = $conn->query($view);
          
            if ($resview ->num_rows > 0) {
              while ($row_view = $resview -> fetch_assoc()) {

            $sql = " INSERT INTO `sell_info`( `full_name`, `phone_no`, `total_price`, `given_rs`,  `pos_no`, `pay`) VALUES ('".$full_name."','".$Phone_No."','".$row_view['total']."','".$Given_Rs."','".$row_view['id']."','".$Pay."') " ;
            $res = $conn->query($sql);

            if($res == true){
                // echo "<script>
                // window.print();
                // </script>";

                $sell_demo = "SELECT id ,users , pro_id , qui , price , GST , price_GS FROM sell_demo WHERE users = '".$_SESSION["username"]."'";
                $sell_result = $conn->query($sell_demo);

                if ($sell_result->num_rows > 0){
                
                    while ($sell_row = $sell_result->fetch_assoc()) {


                        $sell_infor_insrt = "INSERT INTO `sells_information_pos`( `pro_code`, `users`,  `pos_no`,`qt`) VALUES ('".$sell_row['pro_id']."','".$_SESSION["username"]."','".$row_view['id']."','".$sell_row['qui']."')";
                        $sell_res = $conn->query($sell_infor_insrt);

                        if($sell_res == true){
                            $del = "DELETE FROM sales WHERE users = '".$_SESSION["username"]."' ";
                            $del_res = $conn->query($del);

                            if($del_res == true ){
                                //    echo "<script>
                                //    window.print();
                                //    </script>";
                            }
                        }

                    }
                }
            }

            ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <!-- <title>Azia Responsive Bootstrap 4 Dashboard Template</title> -->

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
    <title>AUE</title>

  </head>
  <body>
  <!-- <script type="text/javascript">   
    function Redirect() 
    {  
        window.location="./p.php"; 
    } 
    // document.write("You will be redirected to a new page in 5 seconds"); 
    setTimeout('Redirect()', 500);   
</script> -->
        <style>
            .az-header{
                display: none;
            }
            body{
                /* display: none; */
            }
            @media print{
                body{
                    display: block;
                }
            .box{
                /* background-color: red; */

                /* width: 100%; */
                padding: 0.1cm; 
                height: auto;
                /*  */
                margin: 0.3cm;
                border-radius: 20px;
                /* border: 1px solid; */
                
            }
            .info{
                display: flex;
                margin: 0.3cm;
                gap: 0.5cm;
            }
            .info2{
                border: 1px solid;
                border-color:darkgrey;
                /* display: flex; */
                margin: 0.5cm;
                border-radius: 20px
                /* gap: 0.5cm; */
            }
            .left-info{
                /* background-color: blue; */
                /* padding: 10%; */
                border: 1px solid;
                border-color:darkgrey;
                width: 55%;
                height: 7.2cm;
                border-radius: 20px;

                
            }
            .right-info{
                /* background-color: blanchedalmond; */
                /* padding: 10%; */
                border: 1px solid;
                border-color:darkgrey;
                width: 100%;
                height: 7.2cm;
                border-radius: 20px;
            }
         
         
            .right-info2{
                /* background-color: blanchedalmond; */
                /* padding: 10%; */
                border: 1px solid;
                border-color:darkgrey;
                width: 100%;
                height: 5cm;
                border-radius: 20px;
            }
            .total{
                margin: 1cm;
                text-align: center;
                font-family: Arial solid;

            }
            .pay{
                margin: 1cm;
                /* text-align: center; */
                font-family: Arial solid;
            }
            ul{
                gap: 5px;
                position: relative;
                right: 40px;
            }
            li{
                display: flex;
            }
            .table{
                margin: 1cm;
                width: 22cm;
            }
            .box2{
                /* margin: 0.6cm; */
                /* border: 1px solid; */
                text-align: center;
            }
            .box3{
                margin: 0.7cm;
                /* border: 1px solid; */
                /* text-align: center; */
            }
        }
        </style><br>
        <div class="box2" >
                        <h1><b>INVOICE</b></h1>
        </div>
        <div class="box3" >
                        <h5><b>Date : 22-05-2024</b></h5>
        </div>
            <div class="box" >
                       <div class="info" >
                       <div class="left-info" >
                       <div class="pay" >
                            <h5>Company Details
                            :
                            </h5>
                            <hr>
                            <!-- <h6 ><b>Online</b> -->

                            <ul>

                            <?php

$users = "SELECT * FROM company_create ";
          
            // $view = " SELECT users , COUNT(pro_id) AS idpro , SUM(qui) AS val , SUM(gst_price) AS TOTAL_VALUE FROM dem2 where users = '".$_SESSION["username"]."' " ;
          
            $usersres = $conn->query($users);
          
            if ($usersres ->num_rows > 0) {
              while ($useres = $usersres -> fetch_assoc()) {
?>
                                <li><b>Name: <?php echo $useres['name']; ?></b></li>
                                <li><b>Address: <?php echo $useres['location'].",&#160".$useres['city'].",&#160".$useres['state']; ?>
                                </b></li>
                                <li><b>Phone: <?php echo $useres['1p'].", &#160 ".$useres['2p']; ?></b></li>
                              
                                <li><b>GSTIN NO : <?php echo $useres['gst']; ?></b></li>
                                <li><b>Name: <?php echo $useres['user']; ?></b></li>

                    <?php }} ?>
                            </ul>
                        
                        </h6>
                        </div>
                       </div>
                       <div class="right-info" >
                       <div class="pay" >
                            <h5>Customer Details :
                            </h5>
                            <hr>
                            <ul>

                            <?php

$supplier_info = "SELECT * FROM supplier_info WHERE company_name = '".$full_name."'";
          
            // $view = " SELECT users , COUNT(pro_id) AS idpro , SUM(qui) AS val , SUM(gst_price) AS TOTAL_VALUE FROM dem2 where users = '".$_SESSION["username"]."' " ;
          
            $supres = $conn->query($supplier_info);
          
            if ($supres ->num_rows > 0) {
              while ($sup_row = $supres -> fetch_assoc()) {
?>
                                <li><b>Name: <?php echo $sup_row['company_name']; ?></b></li>
                                <li><b>Address: <?php echo $sup_row['addr_comp'].", &#160".$sup_row['state']; ?>
                                </b></li>
                                <li><b>Phone: <?php echo $sup_row['phone_no']; ?></b></li>
                                <li><b>Email: <?php echo $sup_row['email_id']; ?></b></li>
                                <li><b>GSTIN NO : <?php echo $sup_row['gstin_no']; ?></b></li>
                                <li><b>Name: <?php echo $sup_row['name']; ?></b></li>
                                <li><b>INVOICE NO : <?php echo $row_view['id']; ?></b></li>
            <?php }} ?>
                            </ul>
                        </div>
                       </div>
                       </div>
            </div>
            <div class="box" style="position: relative; bottom: 20px; " >
                       <div class="info2" >
                       <div class="table-responsive">
            <table class="table table-striped mg-b-0">
              <thead>
                <tr>
                  <th  >ID</th>
                  <th  >Name</th>
                  <th  >qut</th>
                  <th  >MRP</th>
                  <th>GST</th>
                  <th>CESS</th>
                  <th>IGST</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
  
              <?php
                                            // $sells_information_pos = " SELECT product_name , qt , gstret , cess,product_price ,  (product_price*qt)   As total , igst FROM sell_fach_info WHERE users = '".$_SESSION["username"]."' && pos_no = '".$row_view['id']."' ";
                                           
                                           
                                        $sells_information_pos= " SELECT product_name , qt , gstret , cess,product_price,  ((product_price*gstret)/100)+product_price AS price , qt*( ( ((product_price*gstret)/100) + ((product_price*igst)/100) + ((product_price*cess)/100)  ) +product_price) As total , igst FROM sell_fach_info WHERE users = '".$_SESSION["username"]."' && pos_no = '".$row_view['id']."' ";
                                            // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
                                            $respp = $conn->query($sells_information_pos);
                                            
                                            if ($respp->num_rows > 0){
                                            
                                                $i=0;
                                            while ($rowpp = $respp->fetch_assoc()) {

                                                
                                                $i++;
                                ?>
                <tr>
                  <th scope="row">1</th>
                  <td><?php echo $rowpp['product_name']; ?> </td>
                  <td><?php echo $rowpp['qt']; ?>           </td>
                  <th><?php echo $rowpp['product_price']; ?>        </th>
                  <th><?php echo $rowpp['gstret']; ?>       </th>
                  <th><?php echo $rowpp['cess']; ?>         </th>
                  <th><?php echo $rowpp['igst']; ?>         </th>
                  <td><?php echo $rowpp['total']; ?>        </td>
                </tr>
<?php }}  ?>
               
              </tbody>
            </table>
          </div><!-- bd -->
                       </div>

                       <div class="box" >
                       <div class="info" >
                       <div class="right-info2" >
                        <div class="total" >
                            <h5>Amount Due (AUD):
                            </h5>
                            <hr>
                            <h1  ><b>500000</b></h1>
                        </div>
                       </div>
                       <div class="right-info2" >

                       <div class="pay" >
                            <h5>Payment Details :
                            </h5>
                            <hr>
                            <h1  ><b>Online</b></h1>
                        </div>
                       </div>
                       <div class="right-info2" >
                       <div class="pay" >
                            <h5>Notes :
                            </h5>
                            <hr>
                            <h6 ><b>Online</b></h6>
                        </div>
                       </div>
                       </div>
            </div>
            </div>
  </body>
  </html>

  
<?php
        }
    }
}
        

?>