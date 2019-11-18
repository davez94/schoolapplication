<?php
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>School Application Courses</title>
</head>
<body>
    <main>
        <form name='add_application' id='add_application' action="add_application.php" method="post">
            <!-- Header and Course section -->
            <div class="section1-bg">        
                <div class="section1">
                        <h1>Sign up</h1>
                        <h2>Course</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCourseName">Name *</label>
                            <select id="inputCourseName" name="course" class="form-control">
                                <option ></option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDate">Date</label>
                            <select  id="inputDate" name="date" class="form-control" style>
                                <option  value=""></option>
                            </select>
                        </div>
                    </div>
                </div>   
            </div>

            <!-- Company container -->
            <div class="section2-bg">
                <div class="section2 company-container">
                    <h2>Company</h2>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCompanyName">Name *</label>
                            <input type="text" name="companyName" class="form-control" id="inputCompanyName">
                            <p class="input-info">Name of company or responsible legal person</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputPhoneNumber">Phone *</label>
                            <input type="text" name="companyPhone" class="form-control" id="inputPhoneNumber">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputCompantEmail">Email*</label>
                            <input type="text" name="companyEmail" class="form-control" id="inputCompanyEmail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section3-bg">
                <!-- Partiicipants container -->
                <div class="section3" id="participant-container" >
                    <h2>Participants</h2>
                    <div id="participant-box" class="part-box">
                        <!-- From group Row for Input participant name-->
                        <div class="form-group row">
                            <div class="form-group col">
                                <label for="inputPartName">Name * </label>
                                <input type="text" name="participantName0" class="form-control input_part_name" id="inputPartName">
                            </div>
                        </div>
                        <!-- From group Row for Input participant phone nr. and Email-->
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="inputPartPhone">Phone</label>
                                <input type="text" name="participantPhone0" class="form-control input_part_phone" id="inputPartPhone"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPartEmail">Email</label>
                                <input type="text" name="participantEmail0" class="form-control input_part_email" id="inputPartEmail">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hidden input for total attendees-->
                <input type="hidden" id="total" name="total_attendees" value="1">
                <!--Add participant button-->
                <div class="add-btn-container form-group row">
                    <div class="">
                        <button id="add-btn" type="button" class="btn">+ Add Participant</button>
                    </div>    
                </div>
            </div>
            <!-- Submit Form button-->
            <div class="section4 form-group row">
                <div class="sub-btn-box col">
                    <button type="submit" id="submit" class="btn btn-lg btn-block">Submit Your Application</button>
                </div>
            </div>

        </form>
    </main>
    
</body>
</html>