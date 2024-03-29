<head>
        <title>User</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/practice/PHP/assets/css/style.css">
    </head>
<?php

require_once ("../../vendor/autoload.php");
//"id","fName", "lName","email","facility","phoneNo"
class UserFunctions {
    
    public function create($id,$fName,$lName,$phoneNo){
        try{
            $params = array(
                "id" => $id,
                "fName" => $fName,
                "lName" => $lName,
                "phoneNo" => $phoneNo
            );
            $url = "http://localhost:8080/HospitalityResort/user/create/user";
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
            $url = "http://localhost:8080/HospitalityResort/user/read/{$id}";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('admin', 'password'))
            );
            Requests::get($url, array(), $options);
            $request = Requests::get($url, array('Content-type' => 'application/json'),$options);
            $data = json_decode($request->body, true);   
                     
        }catch(Exception $e){
            return $e;
        }   
        
        if(count($data)==4){
            echo "<div style='margin-left:8.5% ; max-width:83%; opacity: 0.93'>";
            echo "<table class='table table-bordered table-dark'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Name</th>";
            echo "<th>Surname</th>";
            echo "<th>PhoneNo</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$data[0]</td>";
            echo "<td>$data[1]</td>";
            echo "<td>$data[2]</td>";
            echo "<td>$data[3]</td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";      
        }else{
            echo "<div style='margin-left:8.5% ; max-width:83%; opacity: 0.93'>";
            echo "<table class='table table-bordered table-dark'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nothing found</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "</table>";
    }  
        
                
        exit;
    }

    public function update($id,$fName,$lName,$phoneNo){
        try{
            $params = array(
                "id" => $id,
                "fName" => $fName,
                "lName" => $lName,
                "phoneNo" => $phoneNo
            );
            $url = "http://localhost:8080/HospitalityResort/user/update/userRegister";
            $options = array(
                'auth' => new Requests_Auth_Basic(array('admin', 'password'))
            );
            $request = Requests::post($url, array('Content-type' => 'application/json'), json_encode($params),$options);
            $data = json_decode($request->body);
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id){
        try{
            $url = "http://localhost:8080/HospitalityResort/user/delete/{$id}";
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