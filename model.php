<?php 

require_once 'db_connect.php';


function verify_user($uname,$pass,$type){

    $conn = db_conn();

    if($type == "admin"){
    $selectQuery = "SELECT * FROM `admin_info` WHERE id = '$uname' AND pass = '$pass'";
    }

    elseif($type == "student"){
    $selectQuery = "SELECT * FROM `student_info` WHERE id = '$uname' AND password = '$pass'";
    }
    elseif($type == "faculty"){
    $selectQuery = "SELECT * FROM `faculty_info` WHERE id = '$uname' AND password = '$pass'";
    }

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

//new added
function showAllFacultys(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `faculty_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAllCourses(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `section` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
/*..............Aman............*/
function showAllday(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where coursename='Computer graphics'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}/*seperate*/
function showAllday2(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where coursename='Advance DataBaseManegement Sys'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
/*end*/
function showAllday1(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where day2='Tuesday' and coursename='Computer graphics'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showAllday3(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where day2='Tuesday' and coursename='Advance DataBaseManegement Sys'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showAllday4(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where day1='Monday' and coursename='Web Technology'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showAllday5(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where day1='Monday' and coursename='EM'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showAllday6(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where day2='Wednesday' and coursename='EM'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showAllday7(){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where day2='Wednesday' and coursename='Web Technology'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



/*............End............*/

function showAllRegistration(){
    $conn = db_conn();
    $selectQuery = 'SELECT registration.id, registration.student_id, section.coursename, section.section FROM registration INNER JOIN section ON registration.section_id=section.id;';


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

//new added
function showFaculty($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `faculty_info` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function showCourse($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `section` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function searchStudent($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `student_info` WHERE firstname LIKE '%$data%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function registration($data, $faculty, $course, $semester){
    $conn = db_conn();
    $selectQuery = "INSERT into registration (semester_id, student_id, faculty_id, section_id)
VALUES (:semester_id, :student_id, :faculty_id, :section_id)";
foreach($data as $student){
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            ':semester_id' => $semester,
            ':student_id'  => $student,
            ':faculty_id'  => $faculty,
            ':section_id'  => $course
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    }
    $conn = null;
    return true;
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



function addCourse($data){
    $conn = db_conn();

    
    $selectQuery = "INSERT INTO `section`(`course_id`, `coursename`, `day1`, `starttime1`, `endtime1`, `day2`, `starttime2`, `endtime2`, `credit`, `section`, `room1`, `room2`)
VALUES (:course_id, :coursename, :day1, :starttime1, :endtime1, :day2, :starttime2, :endtime2, :credit, :section, :room1, :room2)";
    
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            ':course_id' => $data['courseid'],
            ':coursename'  => $data['coursename'],
            ':day1'  => $data['day1'],
            ':starttime1'  => $data['starttime1'],
            ':endtime1'  => $data['endtime1'],
            ':day2'  => $data['day2'],
            ':starttime2'  => $data['starttime2'],
            ':endtime2'  => $data['endtime2'],
            ':credit' => $data['credit'],
            ':section'  => $data['section'],
            ':room1'  => $data['room1'],
            ':room2'  => $data['room2']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



//new added
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
    $selectQuery = "UPDATE `student_info` SET `firstname`=?, `lastname`=?, `contact`=?, `email`=?, `dob`=?, `gender`=?,`dept`=?, `program`=?,`image`=?, `address`=? where `id` =?";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            $data['firstname'],
            $data['lastname'],
            $data['contact'],
            $data['email'],
            $data['dob'],
            $data['gender'],
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

//new added
function updateFaculty($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `faculty_info` SET `firstname`=?, `lastname`=?, `contact`=?, `email`=?, `gender`=?, `dob`=?, `dept`=?,`image`=?, `address`=? where `id` =?";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            $data['firstname'],
            $data['lastname'],
            $data['contact'],
            $data['email'],
            $data['gender'],
            $data['dob'],
            $data['dept'],
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


function updateCourse($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `section` SET `course_id`=?,`coursename`=?,`day1`=?,`starttime1`=?,`endtime1`=?,`day2`=?,`starttime2`=?,`endtime2`=?,`credit`=?,`section`=?,`room1`=?,`room2`=? WHERE `id`=?";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['courseid'],
            $data['coursename'],
            $data['day1'],
            $data['starttime1'],
            $data['endtime1'],
            $data['day2'],
            $data['starttime2'],
            $data['endtime2'],
            $data['credit'],
            $data['section'],
            $data['room1'],
            $data['room2'],
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



//new added
function deleteFaculty($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `faculty_info` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteCourse($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `section` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function deleteRegistration($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `registration` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;

}

//new added
function updateResult($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `registration` SET `semester_id`=?, `student_id`=?, `faculty_id `=?, `section_id`=?, `midterm_mark`=?, `finalterm_mark`=?,`total_marks`=?, `final_grade`=?";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

            $data['semester_id'],
            $data['student_id'],
            $data['faculty_id'],
            $data['section_id'],
            $data['midterm_mark'],
            $data['finalterm_mark'],
            $data['total_marks'],
            $data['final_grade'],
            $id

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



//new

function deleteResult($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `registration` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}



//new added
function showStudentResult(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `registration` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showResult($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `registration` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}