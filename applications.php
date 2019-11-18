<?php
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style2.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--<script src="main.js"></script>-->
        <script src="load.js"></script>
        <title>Recieved applications</title>
    </head>
    <body class="bg-dim">
        <main >
            <h1>Recieved applications</h1>
            <div class="d-flex">
                <div class="applications-container">
                    <table id="applications-table"class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col date-col">DATE</th>
                                <th scope="col">COURSE</th>
                                <th scope="col">COMPANY</th>
                                <th scope="col">ATTENDEES</th>
                                <th scope="col action-col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $conn;
                        $sql = "SELECT * FROM tbl_company";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo 
                                "<tr id='".$row['id']."'>
                                    <td>".$row['date_for_course']."</td>
                                    <td class='td_course'>".substr($row['company_course'],0,15)."...</td>
                                    <td class='td_name'>".substr($row['company_name'],0,15)."...</td>
                                    <td class='td_attendees'>".$row['company_attendees']."</td>
                                    <td  class='more_button'><u>More</u> > </td>
                                </tr>";
                            }
                        }
                        
                        ?>
                        </tbody>
                    </table>
                </div>
                <!--Modal window-->
                <aside>
                    <div id="btn-box" class='modal-btn-box-hidden'>
                        <button id='modal-btn' class='btn btn-danger '>X</span>
                    </div> 
                    <div class="more-container-hidden" id='company_info'>       
                            <!-- Php Loads in here. Through load.js and load-company.info.php-->
                    </div>
                </aside>
            </div>
        </main>
    </body>
</html>