<?php

require_once('./class/class.Project.php');
require_once('./class/class.Department.php');
$objProject- = new Project();
$objDept = new Department();
$deptList = $objDept->SelectAllDepartment();

if(isset($_POST['btnSubmit'])){
    $objProject->pnumber = $_POST['pnumber'];
    $objProject->pname =$_POST['pname'];
    $objProject->plocation = $_POST['plocation'];
    $objProject->dept->dnumber = $_POST['dnum'];

    if(isset($_GET['pnumber'])){
        $objProject->pnumber = $_GET['pnumber'];
        $objProject->UpdateProject();
    }

    else{
        $objProject->AddProject();
    }

    echo "<script> alert('$objProject->message');</script>";
    if($objProject->hasil) {
        echo '<script> window.location = "dashboardadmin.php?p=projectlist";</script>';
    }
}

else if(isset($_GET['pnumber'])){
    $objProject->pnumber = $_GET['pnumber'];
    $objProject->SelectOneProject();
}
?>

<div class="container">
<div class="col-md-6">
    <h4 class= "title"> <span class="text"> <strong>Project</strong></span>
</h4>
    <form action="" method="POST">
    <table class="table" border="0">
    <tr>
        <td> Project Number </td>
        <td> : </td>
        <td><input type="text" class="form-control" name="pnumber" value="<?php echo $objProject->pnumber; 
        ?>">
        </td>
    </tr>
    <tr>
        <td> Project Name </td>
        <td> : </td>
        <td><input type="text" class="form-control" name="pname" value="<?php echo $objProject->pname; 
        ?>">
        </td>
    </tr>
    <tr>
        <td> Location </td>
        <td> : </td>
        <td><input type="text" class="form-control" name="pnumber" value="<?php echo $objProject->plocation; 
        ?>">
        </td>
    </tr>
