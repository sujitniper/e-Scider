<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Author: Sujit
-->

<?php
// define variables and set to empty values
$nameErr = $emailErr = $orgErr = $organizationErr = "";
$name = $email = $org = $comment = $organization = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sujit.tangadpalliwar@gmail.com";
    $subject = "A message from Knowledge Extractor";
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["organization"])) {
        $orgErr = "Name of organization is required";
    } else {
        $organization = test_input($_POST["organization"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (mail($to, $subject, $comment)) {
        echo("<p>Email successfully sent!</p>");
    } else {
        echo("<p>Email delivery failed…</p>");
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="./images/niper_logo.jpg"/>
        <title>e-Scider</title>
        <link rel="stylesheet" type="text/css" href="knowledgecss.css" />
        <script src="jquery-1.11.0.min.js"></script> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="knowledgescript.js"></script>
        <script type="text/javascript" src="pace.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link type="text/css" href="pacegreen.css" rel="stylesheet" />

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>

    <body id="BG1" style="text-align: center">

        <div id="window" >

            <header>
                <!--<img src="images/logo1.jpg"id="logo">-->
                <div id="label" >
                    <div id="Caption">
                         <!--<font size="5" face="serif" color="#030300"> <i>Valuable resource for scientific community</i></font>-->
                    </div>
                </div>
            </header>
            <br>
            <br>
            <nav id = "navigation">
                <ul id = "nav">
                    <li><a class="active" href="./index.php"><font face="Perpetua" color="purple" ><i class="fa fa-home"></i>Home</font></a></li>
                    <li><a href="./browse.php"><font face="Perpetua" color="purple"> <i class="glyphicon glyphicon-search"></i>Browse</font></a></li>
                    <li><a href="./develop.php"><font face="Perpetua" color="purple"><i class="glyphicon glyphicon-edit"></i>Developed By</font></a></li>
                    <li><a href="./contact.php"><font face="Perpetua" color="purple"><i class="fa fa-pencil"></i>Contact Us</font></a></li>
                </ul>
            </nav>
            <br>

            <div id="contact_window" >
                <div id="contact_info">
                    <!--<span style="color:#147b0e; font-size:15pt;font-weight: bold; ">For any Querys/Comments/Suggestions Please fill the form below:</span>
                    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
                        <br>
                        Name: <input type="text" name="name" id="contname" placeholder="Your name">
                        <span class="error">* <?php echo $nameErr; ?></span>
                        <br><br>
                        E-mail:  <input type="text" name="email" id="contemail" placeholder="Your email id">
                        <span class="error">* <?php echo $emailErr; ?></span>
                        <br><br>
                        Organization: <input type="text" name="organization" id="conteorg" placeholder="Your Organization">
                        <span class="error"><?php echo $organizationErr; ?></span>
                        <br><br>
                        Comment: <textarea name="comment" id="contcomnt" placeholder="Your Suggestions/Query/Comments Here"></textarea>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="submit" name="submitform" value="Submit" id="contsubmit"> 
                    </form>-->
                    <br>
                    <span style="color:#066956; font-size:14pt;font-weight: bold; ">The e-scider related resources were developed and maintained by the Data Mining and Pattern Recognition group, at Department of Pharmacoinformatics, National Institute of Pharmaceutical Education and Research (NIPER), Mohali, India. </span>
                    <br><br>
                    
                    <span style="color:#147b0e; font-size:18pt;font-weight: bold; ">For any Improvements/Querys/Comments/Suggestions please mail us @</span>
                    <br><br>
                    <span style="color:#000; font-size:16pt;font-weight: bold; "><i>Sujit Tangadpalliwar</i></span>
                    <br>
                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;<span style="color:#000; font-size:15pt;font-weight: bold; ">scientificdatafetcher@gmail.com</span><a href="https://mail.google.com/"></a>
                    <br><br><br><br><br><br>
                    <span style="color:steelblue; font-size:25pt;font-weight: bold; ">Thank you</span>

                </div>



            </div>
            <hr style="background: #0096CD; border:0; height:5px; width: 1000px; " />
            <footer id="footer">
                <span style="color:#066956" ><b>Copyright &copy 2016 to NIPER,S.A.S Nagar, Punjab, India. All rights reserved</span>
                <br>
                <span style="color:#066956" ><b>Managed by: <a href="http://pglab.weebly.com/" target="_blank">Data Mining and Pattern Recognition lab,</a> <a href="http://inpharmatics.weebly.com/" target="_blank">Department of Pharmacoinformatics,</a> <a href="http://www.niper.gov.in" target="_blank">NIPER S.A.S. Nagar (Mohali)-160062, Punjab (INDIA)</a></span>
            </footer>
        </div>
    </body>
</html>

