<?php 
    require_once("../../Golf/GolfFunctions.php");
?>
<head>
        <title>Update Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/practice/PHP/assets/css/style.css">
    </head>
    <?php
include '../../Header.php'
?>

<div class="bg"></div>
<body>
<!--"id","fName", "lName","email","facility","phoneNo"-->
<div class="container">
    <h2>
    Update course details
    </h2>
    <form method="post" action="#">
        <div class = "form-group">
        <!--Id-->
        <label>Course ID:</label>
        <input type="text" class="form-control" name="golfID" placeholder="id">
        </div>

        <div class = "form-group">
        <!--Course name-->
        <label>Course name:</label>
        <input type="text" class="form-control"  name="golfName" placeholder="gName"> <br>
        </div>

        <input type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')" >
        
    </form>
</div>
</body>
<?php
$id = $gName = "";
    
$id = $_POST['golfID'];
$gName = $_POST['golfName'];

$obj = new GolfFunctions();
$obj->update($id, $gName);

?>