<?php
    include_once 'includes/dbh.inc.php';
    $companyIdInfo = $_POST['companyIdInfo'];
    $sql1 = "SELECT * FROM tbl_company WHERE tbl_company.id=$companyIdInfo";                

    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    echo "<div class='company-container'>
            <p class='company-heading'>Company:</p> 
            <div class='company-info'>
                <p class='company-name'>".$row1['company_name']."</p>
                <p class='company-email'>".$row1['company_email']."</p>
                <p class='company-phone'>".$row1['company_phone']."</p>
            </div>";
            
    $sql2 = "SELECT * FROM tbl_company, tbl_participant
    WHERE tbl_company.id=$companyIdInfo
    AND tbl_company.id = tbl_participant.participant_id ";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck = mysqli_num_rows($result2);

    echo "<div class='atendees-container'>
            <p class='atendees-heading'>Atendees:</p>";
    if($resultCheck > 0){
        while($row2 = mysqli_fetch_assoc($result2)){
            echo "      
                <div class='atendees-info'>
                    <p class='atendees-email'>".$row2['participant_name']."</p>
                    <p class='atendees-email'>".$row2['participant_email']."</p>
                    <p class='atendees-phone'>".$row2['participant_phone']."</p>    
                </div>";
            
            }
        }
    echo "</div>";
    echo "</div>";
?>