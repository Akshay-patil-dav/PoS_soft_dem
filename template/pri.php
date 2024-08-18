<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUE</title>
</head>
<body>
    <style>
        /* @media print{
            .image{
                background-color: black;
                padding: 1cm;
                width: 1cm;
            }
        } */

        @media print{

        .image{
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
            .rescipt{
                background-color: rgb(238, 238, 238);
                width: 80mm;
                height: auto;
            }
            .mar{
                padding: 0.2cm;
            }
            .img1{
                   padding: 1cm;
                    width: 80px;
                    text-align: center;
            }
        }
    </style>
    <div class="rescipt" >
      <div class="mar" >
                      <div style="display: flex; gap: 0.5cm; " >
                         <div class="" >
                            
                         
                         
   <?php

require_once('./conn/dbconn.php');

$sql98 = " SELECT * FROM company_create ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$result29 = $conn->query($sql98);

if ($result29->num_rows > 0){

while ($row28 = $result29->fetch_assoc()) {
?>
  
   <!-- <p style="font-size: 20px; font-family: Arial black; position: relative; bottom: 10px; width: ;    "> </p> -->
   <img src="./logo/<?php echo $row28['img']; ?>" class=" image" >


   <?php }} ?>
                        
                        </div>
                          <div>

                          <?php

require_once("./conn/dbconn.php");
// require_once('../conn/dbconn.php');

$sql98 = " SELECT * FROM company_create ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$result29 = $conn->query($sql98);

if ($result29->num_rows > 0){

while ($row28 = $result29->fetch_assoc()) {
?>

   <h4 style="font-size: 15px;" >   <?php echo $row28['name']; ?></h4>

   <?php }} ?>
                             

   <?php

// require_once('../conn/dbconn.php');

$sql98 = " SELECT * FROM company_create ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$result29 = $conn->query($sql98);

if ($result29->num_rows > 0){

while ($row28 = $result29->fetch_assoc()) {
?>
  
   <p style="font-size: 20px; font-family: Arial black; position: relative; bottom: 10px; width: ;    "> <?php echo $row28['name']; ?></p>


   <?php }} ?>
                          </div>
                      </div>
                      <br>

                      <div>
                        <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; " >
                   <?php     $sql98 = " SELECT * FROM company_create ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$result29 = $conn->query($sql98);

if ($result29->num_rows > 0){

while ($row28 = $result29->fetch_assoc()) {
?>
 <?php echo $row28['location']; ?>&#160  <?php echo $row28['pin_code']; ?>


   <?php }} ?>
                        </div>
                        <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; " >
                        <?php     $sql98 = " SELECT * FROM company_create ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$result29 = $conn->query($sql98);

if ($result29->num_rows > 0){

while ($row28 = $result29->fetch_assoc()) {
?><?php echo $row28['state']; ?>
&#160 <?php echo $row28['country']; ?>&#160  <?php echo $row28['pin_code']; ?>


   <?php }} ?>
                        </div>
                        <div style="width: 7.8cm; font-size: 15px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; " >POS / 591317</div>
                      
                        <br>
                        <br>
                            
                        <br>
                        <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; " >Date: 22/02/2024 &#160 &#160 Sale No/Ref: /POS/ 591317</div>
                        <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; " >Sales Associate : SHADEVI AZAD</div>
                       <hr>
                       <br> <div>
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
                                <tr>
                                    <th >1</th>
                                    <td>rice vita 5g value</td>
                                    <td>5</td>
                                    <td>200</td>
                                    <td>gst</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>200.00</td>                                    
                                </tr>
                                <tr>
                                    <th >2</th>
                                    <td>rice vita 5g value</td>
                                    <td>5</td>
                                    <td>200</td>
                                    <td>gst</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>200.00</td>                                    
                                </tr>
                                <tr>
                                    <th >3</th>
                                    <td>rice vita 5g value</td>
                                    <td>5</td>
                                    <td>200</td>
                                    <td>gst</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>200.00</td>                                    
                                </tr>
                            
                            </table>
                        </div>
                        

                        <br>
                        
                        <style>
                                @media print{
                            hr{
                                width: 7cm;
                            }
                        }
                        </style>
                        <hr>
                        <br>
                        <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; text-align: center; " >Tax Backup Info</div>
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
                            <tr>
                                <th >1</th>
                                <td>500</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <th>200.00</th>                                    
                            </tr>
                            <tr>
                                <th >2</th>
                                <td>50</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <th>200.00</th>                                    
                            </tr>
                            <tr>
                                <th >3</th>
                                <td>50</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <th>200.00</th>                                    
                            </tr>
                            <tr>
                                <th >4</th>
                                <td>50</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <th>200.00</th>                                    
                            </tr>
                        </table>

                        <br><hr><br><br>
                        <div>
                            <div style="width: 7.8cm; font-size: 20px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; " >Total  &#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160&#160 &#160 140.00</div>
                            <br><hr><br>
                            <div style="width: 7.8cm; font-size: 11px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px; " >Paid by: Cash &#160 &#160 Amount: 140.00 &#160 &#160 Change: 0</div>

                            <br>
                            <div style="width: 7.8cm; font-size: 15px; font-family: Arial black; margin-bottom: 5px; position: relative; bottom: 15px;  text-align: center;" >Thank You for visit !!</div>
                            <br><hr><br>
                            <!-- <div style="width: 7.8cm; font-size: 11px;  margin-bottom: 5px; position: relative; bottom: 15px;  text-align: center;" ><b  style="font-family: Arial black;"  >Designed & Developed BY &#160</b> <b style="font-family: Arial black; font-size: 15px; " >A.U.E</b></div> -->
                            <!-- <br> -->
                            <div style="width: 7.8cm; font-size: 11px;  margin-bottom: 5px; position: relative; bottom: 15px;  text-align: center;" ><b  style="font-family: Arial black;"  >Contact No &#160</b> <b style="font-family: Arial black; font-size: 15px; " >    <?php     $sql98 = " SELECT * FROM company_create ";
// SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
$result29 = $conn->query($sql98);

if ($result29->num_rows > 0){

while ($row28 = $result29->fetch_assoc()) {
?>
 <?php echo $row28['1p']; ?> ,&#160  <?php echo $row28['2p']; ?>


   <?php }} ?></b></div>

                            <br><br>

                        </div>
                    </div>
      </div>
        <!-- <br><br><br> -->
        
    </div>
</body>
</html>