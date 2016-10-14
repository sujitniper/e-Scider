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

            <div id="pub_jrl_yr_grph_window" >
                <div id="graph_table">
                    <?Php
                    echo "<html><body><table border=2>";
                    $f = fopen(".//scripts//results_pubmed//abstract_journal_year_table1.tsv", "r");
                    $fr = fread($f, filesize(".//scripts//results_pubmed//abstract_journal_year_table1.tsv"));
                    fclose($f);
                    $lines = array();
                    $lines = explode("\n", $fr); // IMPORTANT the delimiter here just the "new line" \r\n, use what u need instead of... 

                    for ($i = 0; $i < count($lines); $i++) {
                        echo "<tr>";
                        $cells = array();
                        $cells = explode(",", $lines[$i]); // use the cell/row delimiter what u need!
                        for ($k = 0; $k < count($cells); $k++) {
                            echo "<td>" . $cells[$k] . "</td>";
                        }
                        // for k end
                        //echo "</tr>";
                    }
                    // for i end
                    echo "</table></body></html>";
                    ?> 
                </div>
                <div id="jrl_yr_graph1">
                    <img src="absjrnlyr_fig1.png" width="900" height="440">
                </div>

                <div id="graph_table">
                    <?Php
                    echo "<html><body><table border=2>";
                    $f = fopen(".//scripts//results_pubmed//abstract_journal_year_table2.tsv", "r");
                    $fr = fread($f, filesize(".//scripts//results_pubmed//abstract_journal_year_table2.tsv"));
                    fclose($f);
                    $lines = array();
                    $lines = explode("\n", $fr); // IMPORTANT the delimiter here just the "new line" \r\n, use what u need instead of... 

                    for ($i = 0; $i < count($lines); $i++) {
                        echo "<tr>";
                        $cells = array();
                        $cells = explode(",", $lines[$i]); // use the cell/row delimiter what u need!
                        for ($k = 0; $k < count($cells); $k++) {
                            echo "<td>" . $cells[$k] . "</td>";
                        }
                        // for k end
                        echo "</tr>";
                    }
                    // for i end
                    echo "</table></body></html>";
                    ?> 
                </div>

                <div id="jrl_yr_graph2">
                    <img src="absjrnlyr_fig2.png" width="900" height="440">
                </div>

                <div id="graph_table">
                    <?Php
                    echo "<html><body><table border=2>";
                    $f = fopen(".//scripts//results_pubmed//abstract_journal_year_table3.tsv", "r");
                    $fr = fread($f, filesize(".//scripts//results_pubmed//abstract_journal_year_table3.tsv"));
                    fclose($f);
                    $lines = array();
                    $lines = explode("\n", $fr); // IMPORTANT the delimiter here just the "new line" \r\n, use what u need instead of... 

                    for ($i = 0; $i < count($lines); $i++) {
                        echo "<tr>";
                        $cells = array();
                        $cells = explode(",", $lines[$i]); // use the cell/row delimiter what u need!
                        for ($k = 0; $k < count($cells); $k++) {
                            echo "<td>" . $cells[$k] . "</td>";
                        }
                        // for k end
                        echo "</tr>";
                    }
                    // for i end
                    echo "</table></body></html>";
                    ?> 
                </div>
                <div id="jrl_yr_graph3">
                    <img src="absjrnlyr_fig3.png" width="900" height="440">
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
