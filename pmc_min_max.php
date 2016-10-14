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
            <div id="pmc_result_window" >
                <?php
                session_start();
                $id = session_id();
                if (isset($_POST['pmc_Search'])) {
                    $dir = './scripts/'.$id.'Full_Articles';
                    if (file_exists($dir)) {
                        foreach (glob('./scripts/'.$id.'Full_Articles/' . '*.*') as $v) {
                            unlink($v);
                        }
                        rmdir('./scripts/'.$id.'Full_Articles');
                        unlink('./scripts/'.$id.'Full_Articles.zip');
                        mkdir('./scripts/'.$id.'Full_Articles', 0777, true);
                    } else {
                        mkdir('./scripts/'.$id.'Full_Articles', 0777, true);
                    }
                    $_SESSION["action"] = $_POST["action"];
                    $_SESSION["keyquery"] = $_POST["pmc_key"];
                    $_SESSION["recquery"] = $_POST["pmc_rec"];
                    $_SESSION["frmyer"] = $_POST["pmc_from_year"];
                    $_SESSION["uptoyer"] = $_POST["pmc_upto_year"];
                }
                ?>
                <?php
                $action = $_SESSION["action"];

                $dir = '.\scripts/'.$id.'Full_Articles';
                $keyqueryprog = $_SESSION["keyquery"];
                $keyqueryprog = str_replace(" ", "+", $keyqueryprog);
                $recqueryprog = $_SESSION["recquery"];
                $frmyerprog = $_SESSION["frmyer"];
                $uptoyerprog = $_SESSION["uptoyer"];
                $output = shell_exec("python .\scripts\pmc_mindate_maxdate.py $keyqueryprog $recqueryprog $dir $frmyerprog $uptoyerprog 2>&1");   // Change the Python script path accordingly
                echo $output;
                ?>

                <?php

                class FlxZipArchive extends ZipArchive {

                    public function addDir($location, $name) {
                        $this->addEmptyDir($name);
                        $this->addDirDo($location, $name);
                    }

                    private function addDirDo($location, $name) {
                        $name .= '/';
                        $location .= '/';
                        // Read all Files in Dir
                        $dir = opendir($location);
                        while ($file = readdir($dir)) {
                            if ($file == '.' || $file == '..')
                                continue;
                            // Rekursiv, If dir: FlxZipArchive::addDir(), else ::File();
                            $do = (filetype($location . $file) == 'dir') ? 'addDir' : 'addFile';
                            $this->$do($location . $file, $name . $file);
                        }
                    }

                }

                //Don't forget to remove the trailing slash
                $the_folder = './scripts/'.$id.'Full_Articles';
                $zip_file_name = './scripts/'.$id.'Full_Articles.zip';
                $za = new FlxZipArchive;
                $res = $za->open($zip_file_name, ZipArchive::CREATE);
                if ($res === TRUE) {
                    $za->addDir($the_folder, basename($the_folder));
                    $za->close();
                } else
                    echo 'Could not create a zip archive';
                ?>


                <div id="pmc_result_info">
                    <br>
                    <br>
                    <span style="color:royalblue; font-size:18pt;">Your Results are saved in Server <br> Please click Export Results button to Export your queried articles in zip folder</span>
                    <br>
                    <br>

                    <button type="button" onclick=location.href='./scripts/'.$id.'Full_Articles'  id="exp_result_pmc">Export Results</button>
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

