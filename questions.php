<?php

if($_POST) {
    $recipient="arosario@highriseperformance.com, agarcia@highriseperformance.com";
    $sender=$_POST["sender"];
    $subject= $sender." "." client Information";
    $senderEmail=$_POST["senderEmail"];
    $question1=$_POST["question1"];
    $question2=$_POST["question2"];
    $question3=$_POST["question3"];
    $question4=$_POST["question4"];
    $question5=$_POST["question5"];
    $question6=$_POST["question6"];
    $question7=$_POST["question7"];
    $question8=$_POST["question8"];
    $question9=$_POST["question9"];
    $question10=$_POST["question10"];
    $question11=$_POST["question11"];
    $question12=$_POST["question12"];
    $question13=$_POST["question13"];
    $question14=$_POST["question14"];
    $question15=$_POST["question15"];
    $question16=$_POST["question16"];
    $question17=$_POST["question17"];
    $question18=$_POST["question18"];
    $question19=$_POST["question19"];
    $question20=$_POST["question20"];
    $question21=$_POST["question21"];
    $question22=$_POST["question22"];
    $question23=$_POST["question23"];
    $question24=$_POST["question24"];
    $question25=$_POST["question25"];
    $question26=$_POST["question26"];
    $question27=$_POST["question27"];
    $question28=$_POST["question28"];
  
        

    $mailBody="Full Name: $sender \n\nPhone: $question2 \n\nEmail: $senderEmail \n\nDOB: $question4 \n\nAddress: $question5 \n\nWeight: $question6 \n\nHeight: $question7 \n\nReferral: $question8 \n\n ----- Emergency contact information ---- \nEmergency Contact Name: $question9 \nRelationship: $question10 \n\nEmergency Contact Phone: $question11 \n\n ----- Fitness Goals ----  \n\nWhat are your fitness goals? $question12 \n\nHow many days would you like to train per week? $question13 \n\nBest dates to workout? $question14 \n\nWhere do you want to train? $question15 \n\nWhere do you want to train? $question16 \n\nAny additional information you would like to add? $question17 \n\n ----- PARQ ---- \n\nHas your doctor ever said that you have a heart condition and that you should only perform physical activity recommended by a doctor? $question18 \n\nIn the past month, have you had chest pain when you were not performing any physical activity? $question19 \n\nDo you lose your balance because of dizziness or do you ever lose consciousness? $question20 \n\nDo you have a bone or joint problem that could be made worse by a change in your physical activity? $question21 \n\nIs your doctor currently prescribing any medication for your blood pressure or for a heart condition? $question22 \n\nDo you know of any other reason why you should not engage in physical activity? $question23 \n\nHave you ever had any pain or injuries (ankle, knee, hip, back, shoulder, etc.)? (If yes, please explain.) $question24 \n\n Have you ever had any surgeries? (If yes, please explain.) $question25 \n\nHas a medical doctor ever diagnosed you with a chronic disease, such as coronary heart disease, coronary artery disease, hypertension (high blood pressure), high cholesterol or diabetes? (If yes, please explain.) $question26 \n\nAre you currently taking any medication? (If yes, please list.) $question27 \n\nAcknowledge: $question28";

    if(mail($recipient, $subject, $mailBody, "From: High Rise Performance ($sender) <client@highriseperformance.com>")){
        echo "<p>Thank you! Your message has been sent.</p>";
    }else{
        echo "error";
    }
}   

?>


<!DOCTYPE html>
<html lang="en">
<?php 
    include 'parts/head.php';
    ?>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="waiverCSS.css">



    <style>
        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }

        .header1 {
            background-image: url(assets/images/IMG_8847.jpeg);
        }

        .btn-hrp {
            color: #fff !important;
            background-color: #f60000 !important;
            border-color: #fe0613 !important;
        }

        a {
            color: #f60000;
        }

        .form-bg {
            background-image: url(assets/images/bg1-1-1651x1101.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

    </style>

</head>

<body class="form-bg">


    <div class="container-fluid">
        <div class="text-center">
            <img src="assets/images/font-logo-only-no-dot-896x391.png" class="img-fluid">
        </div>
        
        <form class="col-md-10" id="regForm" class="bg-light p-4" action="questions.php" method="post">
            <div class="tab">
                <h1 class="text-center">General Questions</h1>

                <div class="py-1">
                    <p class="m-0">Full Name:</p>
                    <input class="form-control" name="sender" placeholder="John Smith">
                </div>

                <div class="py-1">
                    <p class="m-0">Phone:</p>
                    <input class="form-control" name="question2" placeholder="555-555-5555">
                </div>

                <div class="py-1">
                    <p class="m-0">Email:</p>
                    <input class="form-control" name="senderEmail" placeholder="email@highriseperformance.com">
                </div>

                <div class="py-1">
                    <p class="m-0">DOB:</p>
                    <input class="form-control" name="question4" placeholder="02/20/2020">
                </div>

                <div class="py-1">
                    <p class="m-0">Address:</p>
                    <input class="form-control" name="question5" placeholder="3535 Road rd Chicago, IL">
                </div>

                <div class="py-1">
                    <p class="m-0">Weight(lbs):</p>
                    <input class="form-control" name="question6" placeholder="190lbs">
                </div>

                <div class="py-1">
                    <p class="m-0">Height(inches):</p>
                    <input class="form-control" name="question7" placeholder="156inches">
                </div>

                <div class="py-1">
                    <p class="m-0">Referral:</p>
                    <input class="form-control" name="question8" placeholder="Google Search">
                </div>

            </div>

            <div class="tab">
                <h1 class="text-center">Emergency Contact</h1>

                <div class="py-1">
                    <p class="m-0">Emergency Contact Name:</p>
                    <input class="form-control" name="question9" placeholder="Joe Smoe">
                </div>

                <div class="py-1">
                    <p class="m-0">Relationship:</p>
                    <input class="form-control" name="question10" placeholder="Brother">
                </div>

                <div class="py-1">
                    <p class="m-0">Emergency Contact Phone:</p>
                    <input class="form-control" name="question11" placeholder="555-555-5555">
                </div>

            </div>

            <div class="tab">
                <h1 class="text-center">Fitness Questions</h1>

                <div class="py-1">
                    <p class="m-0">What are your fitness goals?</p>
                    <input class="form-control" name="question12" placeholder="Lose weight">
                </div>

                <div class="py-1">
                    <p class="m-0">How many days would you like to train per week?</p>
                    <input class="form-control" name="question13" placeholder="2 times per week">
                </div>

                <div class="py-1">
                    <p class="m-0">Best dates to workout?</p>
                    <input class="form-control" name="question14" placeholder="Tuesdays, Saturday">
                </div>

                <div class="py-1">
                    <p class="m-0">Where do you want to train?</p>
                    <input class="form-control" name="question15" placeholder="High Rise Gym, In-home Gym, Studio , Park">
                </div>

                <div class="py-1">
                    <p class="m-0">Any additional information you would like to add?</p>
                    <input class="form-control" name="question16" placeholder="Additional Information here">
                </div>

            </div>

            <div class="tab">
                <h1 class="text-center">Physical Activity Readiness Questionnaire 1 of 2</h1>

                <div class="py-1">
                    <p class="m-0">1) Has your doctor ever said that you have a heart condition and that you should only perform physical activity recommended by a doctor?</p>
                    <input class="form-control" name="question17" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">2) Do you feel pain in your chest when you perform physical activity?</p>
                    <input class="form-control" name="question18" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">3) In the past month, have you had chest pain when you were not performing any physical activity?</p>
                    <input class="form-control" name="question19" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">4) Do you lose your balance because of dizziness or do you ever lose consciousness?</p>
                    <input class="form-control" name="question20" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">5) Do you have a bone or joint problem that could be made worse by a change in your physical activity?</p>
                    <input class="form-control" name="question21" placeholder="Yes / No" oninput="this.className = ''">
                </div>

                <div class="py-1">
                    <p class="m-0">6) Is your doctor currently prescribing any medication for your blood pressure or for a heart condition?</p>
                    <input class="form-control" name="question22" placeholder="Yes / No">
                </div>
            </div>



            <div class="tab">
                <h1 class="text-center">Physical Activity Readiness Questionnaire 2 of 2</h1>

                <div class="py-1">
                    <p class="m-0">7) Do you know of any other reason why you should not engage in physical activity?</p>
                    <input class="form-control" name="question23" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">8) Have you ever had any pain or injuries (ankle, knee, hip, back, shoulder, etc.)? (If yes, please explain.)</p>
                    <input class="form-control" name="question24" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">9) Have you ever had any surgeries? (If yes, please explain.)</p>
                    <input class="form-control" name="question25" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">10) Has a medical doctor ever diagnosed you with a chronic disease, such as coronary heart disease, coronary artery disease, hypertension (high blood pressure), high cholesterol or diabetes? (If yes, please explain.)</p>
                    <input class="form-control" name="question26" placeholder="Yes / No">
                </div>

                <div class="py-1">
                    <p class="m-0">11) Are you currently taking any medication? (If yes, please list.)</p>
                    <input class="form-control" name="question27" placeholder="Yes / No">
                </div>
                
                <div class="container-fluid py-1">
                 <input class="form-check-input" type="checkbox" name="question28" value="I acknowledge" required>
                  <p class="m-0">Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement</p>
                </div>


            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button class="btn btn-danger" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>

                    <button class="btn btn-info" id="mainBtn" name="submit" type="submit">Submit</button>

                </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

        </form>
    </div>


    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("mainBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("mainBtn").style.display = "inline";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
