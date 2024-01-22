<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <title>SDO QUEUE</title>
  </head> 
  <style>
    body { background-image: url('image/trackIt.png'); }
  </style>
  <body>
    <div class="container-fluid p-3">
      <img src="image/queue.png" style="width: 100%;">
      <div class="p-3 border shadow rounded bg-white" style="opacity: 0.7;">
        <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
          <label for="exampleFormControlInput1" class="form-label">SELECT UNIT TO MAKE REQUEST</label>
          <select class="form-control" id="exampleFormControlInput1" placeholder="Your name here . . ." onchange="FetchSchool(this.value)" required>
            <option value="" selected disabled>-- PLEASE SELECT UNIT --</option>
            <?php
              include "connection/connection.php";
              $sqlAllUnits = "SELECT * FROM `unit_list` WHERE 1";
              $runsqlAllUnits = mysqli_query($db_con, $sqlAllUnits);
              while($getsqlAllUnits = mysqli_fetch_array($runsqlAllUnits)){

            ?>
            <option value="<?php echo $getsqlAllUnits['unitCodeName']; ?>"><?php echo $getsqlAllUnits['unitName']; ?></option>
          <?php } ?>
          </select>
        </div>
        <br>
        <hr>
        <br>
        <form>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Name: </label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name here . . .">
        </div>
        <div class="mb-3 col-sm-12 col-md-6 col-lg-4">
                <input type="text" class="form-control" id="school" list="dataListOfSchool" name="school" placeholder="Enter your School/Office" class="form-control" required>
                <datalist id="dataListOfSchool">
                  <option value="" disabled>Select School</option>
                </datalist>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Brief Description of your request:</label>
          <div class="form-floating">
            <textarea class="form-control" style="height:300px;" placeholder="Brief Description of your request here . . ." id="floatingTextarea" required></textarea>
            <label for="floatingTextarea">Brief Description of your request here . . .</label>
          </div>
        </div>
        <center>
          <button type="submit" class="btn btn-primary p-3 ps-5 pe-5"><i class="bi bi-bookmark-plus">  SUBMIT</i></button>
        </center>
        </form>
      </div>
    </div> 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript">
      //SCRIPTP TO FETCH AND APEND ALL SCHOOL TO DROPDOWN BASED ON TH DISTRICT SELECTED
        function FetchSchool(value) {
          console.log(value);
        $('#school').html('');
        $.ajax({
          type:'post',
          url: 'action/services.php',
          data : { district_id : value},
          success : function(data){
            $('#services').html(data);

              console.log(id);
          }
        })
        // body...
      }
    </script>
  </body>
</html>