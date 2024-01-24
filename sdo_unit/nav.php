<title>TRACK IT</title>
    <link rel="Shortcut Icon" type="image/png" href="../image/titleIcon.png">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- BOOTSTRAP5 ICON -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Datatable Jquery -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Datatable CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<!-- Sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    document.onkeydown = function(e) {
        if(event.keyCode == 123) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
            return false;
        }
    }
</script>

<!--DATATABLE SCRIPT-->
<script type="text/javascript">
    //plain data table
    $(document).ready(function () {
    $('.mainTableToshowData').DataTable({
        "pageLength": -1,
        order: [[0, 'desc']],
    });
    });

    //datatable with export
    $(document).ready(function () {
    $('.mainTableToshowDataAndExport').DataTable({
        "pageLength": -1,
        order: [[0, 'desc']],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    });
    });
</script>

<div class="container-fluid overflow-hidden" oncontextmenu="return false;">
    <div class="row vh-100 overflow-auto">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-secondary d-flex sticky-top" style="border-right:5px solid black;">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center text-white" style="width:100%;">
            	<br>
                    <?php
                        // session_start();
                        // date_default_timezone_set("Asia/Manila");
                        // $playMusic = "";
                        // if($_SESSION['currentUserType'] == "personnel"){
                        //     $playMusic = "autoplay";
                        // }
                        // if (!(isset($_SESSION['currentUserID']))) {
                        //    header("location: ../");
                        // }
                        // date_default_timezone_set("Asia/Manila");
                        // include_once "../connection/connection.php";
                    ?>
                    <style type="text/css">
                        .localCodeImagePlaceholder{
                            width:80px;
                            background-image:url('images/dp.png');
                            background-repeat: no-repeat;
                        }
                    </style>

                <div style=" width:100%; padding:5px; border-bottom:1px solid black;">

                	<img class="rounded-circle border shadow localCodeImagePlaceholder" style="width:80px; height:80px;" src="data:image/jpeg;base64,<?php echo base64_encode($meronpa['clientImage']); ?>">
                	<div style="float:right;">
                        <div class="dropdown">
                            <button class="btn btn-secondary" style="font-size:28px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear"></i>
                            </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="?opn=updateInfo&i=<?php echo $_SESSION['currentUserID']?>">Profile</a></li>
                            <br>
                            <li>  
                                <center>
                                    <form action="action/logout.action.php" method="POST" onsubmit="return confirmLogOut(this);">
                                        <button class="btn btn btn-danger" style="width: 90%" name="logOutUser" type="submit">Log out</button>
                                    </form>
                                </center>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <p style="font-size:25px;"><?php echo "name";?>
                        <br>
                        <span style="font-size:17px;" >( <?php echo "---" ?> )</span>
                    </p>
                </div>
                <br>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 align-items-sm-start" id="menu" style="width:100%;">
                    <li class="btn btn-secondary <?php if($_GET['opn'] == "dashboard"){echo "active";}?>" style="width:100%; text-align: left;">
                        <a href="?opn=dashboard" class="nav-link px-sm-0 px-2 text-white">
                            <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="btn btn-secondary <?php if($_GET['opn'] == "requests"){echo "active";}?>" style="width:100%; text-align: left;">
                        <a href="?opn=requests" class="nav-link px-sm-0 px-2 text-white">
                            <i class="fs-5 bi-tools"></i><span class="ms-1 d-none d-sm-inline">Requests</span>
                        </a>
                    </li>
                    <li class="btn btn-secondary <?php if($_GET['opn'] == "archive"){echo "active";}?>" style="width:100%; text-align: left;">
                        <a href="?opn=archive" class="nav-link px-sm-0 px-2 text-white">
                            <i class="fs-5 bi-book"></i><span class="ms-1 d-none d-sm-inline">Archive</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

<!--main start-->
        <div class="col-sm-9 col-xl-10 d-flex flex-column h-sm-100 overflow-auto" style="height:100vh;">
            <main class="row">
            <!--top header start-->
                <div class="bg-white">
                   <center><img src="images/banner14.png" width="100%" /></center>
                </div>


            <!--top header end-->

            <!--top nav start-->
            <div class="container" style="background-color: #0093E9;background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);">
                <nav class="navbar navbar-expand-lg">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#kakaze">
                        <span class="text-warning fw-bold h2">DTS</span>
                        <span class="text-white">Document Tracking System</span>
                    </a>
                  </div>
                </nav>
            </div>
            <!--top nav end-->

           <div>
                <br>
                <?php
                    $open = $_GET['opn'];

                    if($open == "dashboard"){
                        $goto = "dashboard.php";
                    }else if($open == "updateInfo"){
                        $goto = "updateInfo.php";
                    }else if($open == "requests"){
                        $goto = "requests.php";
                    }else if($open == "trackDocument"){
                        $goto = "trackDocument.php";
                    }else if($open == "toRelease"){
                        $goto = "toRelease.php";
                    }else if($open == "archive"){
                        $goto = "archive.php";
                    }else if($open == "incoming"){
                        $goto = "incoming.php";
                    }else if($open == "outgoing"){
                        $goto = "outgoing.php";
                    }else if($open == "viewDocument"){
                        $goto = "viewDocument.php";
                    }else if($open == "trackRequest"){
                        $goto = "trackRequest.php";
                    }else if($open == "release"){
                        $goto = "release.php";
                    }else if($open == "myActivity"){
                        $goto = "myActivity.php";
                    }else if($open == "onHold"){
                        $goto = "onHold.php";
                    }else if($open == "docRemarks"){
                        $goto = "docRemarks.php";
                    }else if($open == "unitRequests"){
                        $goto = "unitRequests.php";
                    }else if($open == "endRequest"){
                        $goto = "endRequest.php";
                    }else if($open == "advanceTrack"){
                        $goto = "advanceTrack.php";
                    }else if($open == "holdRequest"){
                        $goto = "holdRequest.php";
                    }else if($open == "newRequestTracking"){
                        $goto = "newRequestTracking.php";
                    }else if($open == "batchForwardrequest"){
                        $goto = "batchForwardrequest.php";
                    }else if($open == "detained"){
                        $goto = "detained.php";
                    }else if($open == "batchEndProcessRequest"){
                        $goto = "batchEndProcessRequest.php";
                    }else{
                        $goto = "pageNotFount.php";
                    }
/*
                    if($open == "Dashboard"){
                        $goto = "home.php";
                    }else if($open == "Faculty"){
                        $goto = "faculty.php";
                    }else if($open == "Requirement"){
                        $goto = "requirements.php";
                    }else if($open == "SubmittedFile"){
                        $goto = "submittedFile.php";
                    }else if($open == "allRequirements"){
                        $goto = "allRequirements.php";
                    }else if($open == "Notifications"){
                        $goto = "notifications.php";
                    }else if($open == "SubmittedFile"){
                        $goto = "submittedFile.php";
                    }else if($open == "viewRequirements"){
                        $goto = "viewRequirements.php";
                    }else if($open == "Approval"){
                        $goto = "fileApproval.php";
                    }else if($open == "editRequirements"){
                        $goto = "editRequirements.php";
                    }else if($open == "viewFacultyInfo"){
                        $goto = "viewFacultyInfo.php";
                    }else if($open == "editFacultyInfo"){
                        $goto = "editFacultyInfo.php";
                    }else if($open == "customSchoolYear"){
                        $goto = "customSchoolYear.php";
                    }else if($open == "summaryAllRequirements"){
                        $goto = "summaryAllRequirements.php";
                    }else if($open == "keyPerformanceReport"){
                        $goto = "keyPerformanceReport.php";
                    }else if($open == "userLogs"){
                        $goto = "userLogs.php";
                    }

*/
                    include $goto;
                 ?>
            </div>
            </main>
        </div>
<!--main end-->
    </div>
</div>
<script>
    function confirmLogOut(form){
        swal.fire({
            title: "log out?",
            text: "Are you sure you want to log out?",
            showCancelButton: true,
            buttons: true,
            dangerMode: true,
        }).then((isOkay) => {
            if (isOkay.isConfirmed) {
                form.submit();
            }
        });
        return false;
    }
</script>


<!--DATATABLE EXPORT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<?php
/*

swal.fire({
            title: "log out?",
            text: "Are you sure you want to log out?",
            icon: "warning",
            showCancelButton: true,
            buttons: true,
            dangerMode: true,
        }).then((isOkay) => {
            if (isOkay) {
                form.submit();
            }
        });
        return false;

*/
?>
