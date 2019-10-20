<head>
        <title>Golf</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/practice/PHP/assets/css/style.css">
    </head>
<?php

require_once ("../../vendor/autoload.php");
//"id","fName", "lName","email","facility","phoneNo"
class GolfFunctions {
    
    function create($golfID,$golfName){
        try{
            $params = array(
                "golfID" => $golfID,
                "golfName" => $golfName
            );
            $url = "http://localhost:8080/HospitalityResort/golf/create/golfCreate";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('admin', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params),$options);
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }   
    }

    function read($id) {
        try{
            $url = "http://localhost:8080/HospitalityResort/golf/read/{$id}";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('admin', 'password'))
            );
            $request = Requests::get($url, array('Content-type' => 'application/json'), $options);
            $data = json_decode($request->body);        
        }catch(Exception $e){
            return $e;
        }   
        echo "<div style='margin-left:8.5% ; max-width:83%; opacity: 0.93'>";
        echo "<table class='table table-bordered table-dark'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Course Id</th>";
        echo "<th>Course name</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>$data[0]</td>";
        echo "<td>$data[1]</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
                
        exit;
    }

    function update($golfID,$golfName){
        try{
            $params = array(
                "golfID" => $golfID,
                "golfName" => $golfName
            );
            $url = "http://localhost:8080/HospitalityResort/golf/update/golfFacility";
           $options = array(
                'auth' => new Requests_Auth_Basic(array('admin', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params),$options);
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
    }

    function delete($id){
        try{
            $url = "http://localhost:8080/HospitalityResort/golf/delete/{$id}";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('admin', 'password'))
            );
            $request = Requests::get($url, array('Content-type' => 'application/json'), $options);
            $data = json_decode($request->body);                      
        }catch(Exception $e){
            return $e;
        }      
    }
}

?>