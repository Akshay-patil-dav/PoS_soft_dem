

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUE</title>
</head>
<body>
  <?php

      require_once("./navbar/nav.php");
?>
<br><br>
<h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> 
 / Dashboard / Supplier List</h5>
    
<div style="position: relative; bottom: 1.8cm; " >
            <div class="search">
                     <div class="col-lg">
                    


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

            <div class="box">
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
            <div class="table-responsive">
              
            <table class="table table-striped mg-b-0" id="myTable">
              <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>product_name</th>
                  <th>product_code</th>
                  <th>product_type</th>
                  <th>product_category</th>
                  <th>GST</th>
                  <th>purchese_price</th>
                  <th>product_price</th>
                  <th>CESS</th>
                  <th>Activity</th>
                </tr>
              </thead>
              <tbody>
 
            <?php
// $tbl="users"; // Table name 
// $sql = "SELECT I.company_name AS company_name, I.name AS sup_name, S.gstin AS gstin, I.email_id AS email , I.phone_no AS phone , I.city AS city, I.state AS state , I.postal_code , I.country , I.addr_comp AS  addr_comp , S.date  AS date, S.payment AS pay FROM suppro_purchese S CROSS JOIN supplier_info I GROUP BY date;";
$sql = "SELECT * FROM sup_in GROUP BY refercode ";
$result = $conn->query($sql);
$i =1;
if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
    // echo  $row["product_name"]."<br>";


    ?>
            
              <tr>
             

                  <th scope="row"><?php echo $i++ ; ?></th>
                  <td><?php echo  $row['company_name']; ?></td>
                  <td><?php echo  $row['sup_name']; ?></td>
                  <td><?php echo  $row['gstin']; ?></td>
                  <td><?php echo  $row['email_id']; ?></td>
                  <td><?php echo  $row['phone_no']; ?></td>
                  <td><?php echo  $row['city']; ?></td>
                  <td><?php echo  $row['state']; ?></td>
                  <td><?php echo  $row['postal_code']; ?></td>
                  <td><?php echo  $row['date']; ?></td>
                  <td><?php echo  $row['refercode']; ?></td>
                  <td><?php  if($row['payment'] == 'Pending'){
                    echo "<p class='Pending' > Pending <p>";
                  }else{
                    echo "<p class='Pay' > Pay <p>";
                  } ?></td>
                  
     
                    <td>    <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="droprightMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="typcn typcn-edit"></i>  Edit 
                            </button>
                            <div class="dropdown-menu tx-13" aria-labelledby="droprightMenuButton">
                            <form action="./seepurchasesup.php" method="post" >
                              <button class="dropdown-item" value="<?php echo  $row['refercode']; ?>" name="seepur" ><i class="far fa-eye"></i> &#160&#160View </button>
                              </form>
                            <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div></td>
                  </tr>
                  
                    <style>
                    
                      .btn-secondary{
                        background-color: blue;
                        border-radius: 20px;
                      }
                      .btn-secondary:hover{
                        background-color: green;
                      }
                    .dropdown{
                      position: relative;
                      bottom: 5px;
                    }

                        .Pending{
                          background-color: red;
                          text-align: center;
                          color: white;
                        }
                        .Pay{
                          background-color: green;
                          text-align: center;
                          color: white;
                        }
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
          


                                
    <?php


  }
} else {
  echo "0 results";
}
?></tbody>
            </table>
            <span id="noMatch" style="display:none;">
            No matching data is found !
        </span>
          </div><!-- bd -->
    </div>
</div>



<!-- ****************************************************************** -->

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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo  $_SESSION["username"]; ?>" placeholder="<?php echo  $_SESSION["username"]; ?>" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-purple">Continue</button>
      </div>
    </div>
  </div>
</div>
<!-- **********/************************************************************* */ -->
</body>
</html>