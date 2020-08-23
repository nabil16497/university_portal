<?php 

require_once 'db_connect.php';


function verify_user($uname,$pass){

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin_info` WHERE id = '$uname' AND pass = '$pass'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($rows))
    {
        return true;
    }
    else{
        return false;
    }
}



function showAllStudents(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `student_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showStudent($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `student_info` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `student_info` WHERE id LIKE '%$id%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addStudent($data){
	$conn = db_conn();
    $selectQuery = "INSERT into student_info (firstname, lastname, contact, email, gender, dob, dept, program, nationality, blood, image, address, password)
VALUES (:firstname, :lastname, :contact, :email, :gender, :dob, :dept, :program, :nationality, :blood, :image, :address, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            ':firstname' => $data['firstname'],
            ':lastname'  => $data['lastname'],
            ':contact'  => $data['contact'],
            ':email'  => $data['email'],
            ':gender'  => $data['gender'],
            ':dob'  => $data['dob'],
            ':dept'  => $data['dept'],
            ':program'  => $data['program'],
            ':nationality' => $data['nationality'],
            ':blood'  => $data['blood'],
            ':image'  => $data['image'],
            ':address'  => $data['address'],
            ':password' => $data['password']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function addFaculty($data){
    $conn = db_conn();
    $selectQuery = "INSERT into faculty_info (firstname, lastname, contact, email, gender, dob, dept, nationality, blood, image, address, password)
VALUES (:firstname, :lastname, :contact, :email, :gender, :dob, :dept, :nationality, :blood, :image, :address, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            ':firstname' => $data['firstname'],
            ':lastname'  => $data['lastname'],
            ':contact'  => $data['contact'],
            ':email'  => $data['email'],
            ':gender'  => $data['gender'],
            ':dob'  => $data['dob'],
            ':dept'  => $data['dept'],
            ':nationality' => $data['nationality'],
            ':blood'  => $data['blood'],
            ':image'  => $data['image'],
            ':address'  => $data['address'],
            ':password' => $data['password']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateStudent($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `student_info` SET `firstname`=?, `lastname`=?, `contact`=?, `email`=?, `dob`=?, `dept`=?, `program`=?,`image`=?, `address`=? where `id` =?";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            $data['firstname'],
            $data['lastname'],
            $data['contact'],
            $data['email'],
            $data['dob'],
            $data['dept'],
            $data['program'],
            $data['image'],
            $data['address'],
            $id

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteStudent($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `student_info` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}