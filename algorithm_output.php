<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Author: Sujit
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<link rel="icon" type="image/png" href="./images/niper_logo.jpg"/> -->
        <title>Knowledge Extractor</title>
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
            <div id="pubmed_result_window" >
                <?php
                $_SESSION["action"] = $_POST["action"];
                $mypath = 'E:/xampp/htdocs/e-scider/scripts/files/';
                //$temp = explode(".", $_FILES["file"]["name"]);
                //$ses_id = $_SESSION["id"];
                $file_name1 = $_FILES["browsefile1"]["name"];
                move_uploaded_file($_FILES["browsefile1"]["tmp_name"], $mypath . $file_name1);
                $_SESSION["filename1"] = $mypath . $file_name1;
                $file_name2 = $_FILES["browsefile2"]["name"];
                move_uploaded_file($_FILES["browsefile2"]["tmp_name"], $mypath . $file_name2);
                $_SESSION["filename2"] = $mypath . $file_name2;

                $action = $_SESSION["action"];
                if ($action == 3) {
                    $input_file1 = $_SESSION["filename1"];
                    $input_file2 = $_SESSION["filename2"];
                    $temp = "python ./scripts/e-scider_algorithm.py 2>&1" . $input_file1 . " " . $input_file2;
                    $output = shell_exec($temp);
                    #echo $output;
                    $result = explode("_*", $output);
                    $arrresult = count($result);
                    $arrresult = $arrresult - 1;
                    #echo $arrresult;
                    #echo $result[0];
                }
                ?>

                <div id="result">
                    <div id = "tabledesign">
                        <!--<table id = "pubmed_table_top" table border = "2" align = "left">
                            <tr>
                                <th width = 2%>Sr No. </th>
                                <th width = 10%>Title </th>
                                <th width = 10%>Authors </th>
                                <th width = 10%>Affiliation </th>
                                <th width = 10%>Abstract </th>
                                <th width = 10%>Source </th>
                                <th width = 10%>Article Identifier </th>
                                <th width = 10%>Publication History </th>
                                <th width = 10%>Publication Type </th>
                                <th width = 10%>Pubmed Central Identifier </th>
                            </tr>
                        </table>-->

                        <table id = "pubmed_table_bottom" table border = "1" align = "justify" >
                            <?php
                            $j = 1;
                            $k = 0;
                            $exact_rec = $arrresult / 9;
                            ?>
                            <?php
                            for ($i = 0; $i < $exact_rec; $i++) {
                                echo "<TR><TD bgcolor=><font color=RoyalBlue> Article Number: <b></font>$j</b></TD></TR>", "\n"; // for 1st column
                                echo "<TR><TD><font color=Green size=4.5 weight=bold><b>Relevance: </b>$result[$k]</font></TD></TR>"; // for 2nd column
                                $k = $k + 1;
                                echo "<TR><TD><font color=RoyalBlue size=4.5 weight=bold><b>Title: </b>$result[$k]</font></TD></TR>"; // for 2nd column
                                $k = $k + 1;
                                echo "<TR><TD ><b>Author: </b></font>$result[$k]</TD></TR>";
                                $k = $k + 1;
                                echo "<TR><TD ><b>Abstract: </b>$result[$k]</TD></TR>";
                                $k = $k + 1;
                                echo "<TR><TD ><b>Source: </b>$result[$k]</TD></TR>";
                                $k = $k + 1;
                                echo "<TR><TD ><b>Article identifier: </b>$result[$k]</TD></TR>";
                                $k = $k + 1;
                                echo "<TR><TD ><b>Pubmed Central Identifier: </b>$result[$k]</TD><TR>";
                                $k = $k + 1;
                                echo "<TR><TD ><b>Keyword: </b>$result[$k]</TD><TR>";
                                $k = $k + 1;
                                echo "<TR><TD height = 50%>\n</TD><TR>";
                                echo "<TR><TD>\n</TD><TR>";
                                $j++;
                            }
                            ?>
                        </table>
                    </div>

                    <button type="button" onclick=location.href="scripts/results_pubmed/abstract_algorithm_output.tsv"  id="exp_result">Export Results</button>
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


