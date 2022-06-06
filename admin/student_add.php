<?php 
    session_start(); 
    if ($_SESSION['p'] != "") {
?>
<!doctype html>
<html lang="en">
 
<head>
    <?php include 'head.php'; ?>
</head>

<body>
    
    <div class="dashboard-main-wrapper">
        
         <div class="dashboard-header">
            <?php include 'header.php';  ?>
        </div>
        
       <div class="nav-left-sidebar sidebar-dark">
            <?php include 'left_menu.php'; ?>
        </div>

        <?php
            include 'db.php';
            if (isset($_POST['save'])) {
                if ($_POST['name'] != "") {                                        
                    
                    $studentid = $_POST['studentid'];
                    $name = $_POST['name'];
                    $dept = $_POST['dept'];
                    $phoneno = $_POST['phoneno'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $ins = "INSERT INTO student (studentid, name, dept, phoneno, email, pass, address, status) 
                            VALUES ('$studentid', '$name', '$dept', '$phoneno', '$email', '$password', '$address', '1');";    

                    if (mysqli_query ($link, $ins)) {           
                        echo "<script>";
                        echo "self.location='student_list.php?msg=<font color=green>Student Added Success!</font>';";
                        echo "</script>";
                    }

                }           
            }               
        ?>
        
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            
                            <h5 class="card-header">Add New Student </h5>
                                
                            <div class="card-body">
                                <form action="#" method="post">
                                    <div class="form-group">

                                        <input name="studentid" class="form-control form-control-lg" type="text" placeholder="Student ID" autocomplete="off" required>
                                        <input name="name" class="form-control form-control-lg" type="text" placeholder="Student Name" autocomplete="off" required>
                                        <input name="dept" class="form-control form-control-lg" type="text" placeholder="Dept." autocomplete="off" required>
                                        <input name="phoneno" class="form-control form-control-lg" type="text" placeholder="Phone No." autocomplete="off" required>
                                        <input name="email" class="form-control form-control-lg" type="text" placeholder="Email" autocomplete="off" required>
                                        <input name="password" class="form-control form-control-lg" type="text" placeholder="Login Password" autocomplete="off" required>
                                        <input name="address" class="form-control form-control-lg" type="text" placeholder="Address" autocomplete="off" required>
                                        
                                    </div>
                                    <button type="submit" name="save" class="btn btn-primary btn-lg btn-block">Add Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>
                
            </div>
            
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>

<?php 
} else {
    echo "<script>";
    echo "self.location='index.php?msg=<font color=red>Please Login First.</font>';";
    echo "</script>";
}
?>