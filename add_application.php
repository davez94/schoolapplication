<?php 
 include_once 'includes/dbh.inc.php';
 $conn;
//For course and dates selections
 $course = $_POST['course'];

 $date = $_POST['date'];

 //Total attendees
 $total_attendees = $_POST['total_attendees'];

//For Company Inputs
 $companyName = $_POST['companyName'];
 $companyName=htmlspecialchars($companyName, ENT_QUOTES,'UTF-8');

 $companyPhone = $_POST['companyPhone'];
 $companyPhone=htmlspecialchars($companyPhone, ENT_QUOTES,'UTF-8');

 $companyEmail = $_POST['companyEmail'];
 $companyEmail=htmlspecialchars($companyEmail, ENT_QUOTES,'UTF-8');

$sql = "INSERT INTO tbl_company set company_course='$course', date_for_course='$date', company_name='$companyName', company_phone='$companyPhone', company_email='$companyEmail', company_attendees='$total_attendees'";
mysqli_query($conn, $sql);

//For participant inputs
//if total attendees is more than 1
if($total_attendees > 1){
    $last_id = mysqli_insert_id($conn);


    for ($i=0; $i< $total_attendees; $i++){

            $participantName = $_POST['participantName'.$i.''];
            $participantName = htmlspecialchars($participantName, ENT_QUOTES,'UTF-8');

            $participantPhone = $_POST['participantPhone'.$i.''];
            $participantPhone = htmlspecialchars($participantPhone, ENT_QUOTES,'UTF-8');

            $participantEmail = $_POST['participantEmail'.$i.''];
            $participantEmail = htmlspecialchars($participantEmail, ENT_QUOTES,'UTF-8');

            
            $sql2 = "INSERT INTO tbl_participant(participant_id, participant_name, participant_course, participant_company, participant_email, participant_phone) 
            VALUES ('$last_id','$participantName','$course','$companyName','$participantEmail','$participantPhone')";
            mysqli_query($conn, $sql2);

    }
}
else{
    $last_id = mysqli_insert_id($conn);

    $participantName = $_POST['participantName0'];
    $participantName = htmlspecialchars($participantName, ENT_QUOTES,'UTF-8');

    $participantPhone = $_POST['participantPhone0'];
    $participantPhone = htmlspecialchars($participantPhone, ENT_QUOTES,'UTF-8');

    $participantEmail = $_POST['participantEmail0'];
    $participantEmail = htmlspecialchars($participantEmail, ENT_QUOTES,'UTF-8');
    
    $sql2 = "INSERT INTO tbl_participant(participant_id, participant_name, participant_course, participant_company, participant_email, participant_phone) 
    VALUES ('$last_id','$participantName','$course','$companyName','$participantEmail','$participantPhone')";
    mysqli_query($conn, $sql2);

    }

echo "<a href='applications.php '>Check applications</a>";



?>
