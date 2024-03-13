<?php 
include "connect.php";

function getAllUser($con) {
    $output = "";
    $count = 0;
    $query = "SELECT id, names , origins ,identifications, regions, line_id, whatsapp_no,payment_proof FROM `competition_registrations` WHERE competition_id = 3";
    $result = $con->query($query);


    while($row = mysqli_fetch_array($result)) {

        $parameter = "'".$row['id']."'";
        
        $output .= 
        '
        <tr>
        <td>'.++$count.'</td>
       

        <td>'.str_replace('"', '', str_replace("]", "", str_replace("[", "", $row['names']))).'</td>
        <td>'.str_replace('"', '', str_replace("]", "", str_replace("[", "", $row['origins']))).'</td>
        <td>'.str_replace('"', '', str_replace("]", "", str_replace("[", "", $row['identifications']))).'</td>
        <td>'.str_replace('"', '', str_replace("]", "", str_replace("[", "", $row['regions']))).'</td>
        <td>'.$row['line_id'].'</td>
        <td>'.$row['whatsapp_no'].'</td>
        <td>'.$row['payment_proof'].'</td>

        </tr>
        ';
    }

    return $output;
}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

 <!--  <link rel="shortcut icon" href="img/logo.png"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title>SHORT CINEMATIC VIDEO COMPETITION</title>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>

</head>
<style type="text/css">		
    .accordion-button.collapsed {
      background: gray;
  }
  .accordion-button.collapsed::after {
      background-color:gray; 
  }
  h1 { 
      font-family: 'Montserrat', sans-serif;
      text-shadow: 1px 1px 0px #8a2be2,
      2px 2px 0px #8a2be2,
      3px 3px 0px #8a2be2,
      4px 4px 0px #8a2be2;
  }

  #clueList {
    background-color: white;
}

</style>
<body class="demo-1" style="background-color: pink;">

<?php include "navbar.php"; ?>
    <div class="container">	
       <div class="row justify-content-md-center">
          <div class="col-4">	
             <br><br><br>
             <h1 style="text-align: center;color: white; font-size: 50px">SHORT CINEMATIC VIDEO COMPETITION</h1>
         </div>
     </div>
 </div>	

 <div style=" margin: 0px auto; border-radius: 12px;" class="container">
    <div class="row" style=" border-radius: 10px;
    background-color: #e2e6ea;">
    <div class="col-12 p-3 table-responsive">
        <table class="table" id="clueList">
            <thead class="text-center">
                <tr>

                    <th>#</th>
                    <th>Nama</th>
                    <th>Universitas</th>
                    <th>NIM/NRP</th>
                    <th>Regions</th>
                    <th>Line id</th>
                    <th>Nomor WA</th>
                    <th>Path bukti pembayaran</th>

                </tr>
            </thead>
            <tbody class="text-center">
                <?php echo getAllUser($con); ?>
            </tbody>
        </table>
    </div>
    </div>
<br><br>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
 -->


 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"/>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>


<script>


    $(document).ready(function(){ 
        $('#answermaba').hide(); 
        
        $('#clueList').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    });

   


</script>



</body>
</html>
