<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Author : Sujit
-->
<?php
$max = 1269762;
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="./images/niper_logo.jpg"/>
        <title>e-Scider</title>
        <link rel="stylesheet" type="text/css" href="knowledgecss.css" />
        <script src="jquery-1.11.0.min.js"></script> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
            <div id="browse_window" >
                <div id="glob_box">
                    <br>
                    <form method='POST' action='glob_result_graph.php' target="_blank" enctype='multipart/form-data' id="form_glob_graph">
                        <input type='hidden' name="action" id="form_1" value='0.1' />
                        <font face="Perpetua" color="#206090" size="5"><b>Enter Key Word: </b></font>
                        <input id="glob_keyword" name="glob_key" class="form-inline" placeholder="Enter search term e.g. dynamics+study+in+cancer">
                        <button type="button" id="glob_btn" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span><font face="Perpetua" color="White" size="5" >&nbsp;&nbsp;Search</font></button>
                        <button type="submit" value='graphs' name="graphs" id="graphs" class="btn btn-primary"><font face="Perpetua" color="White" size="4" >Evaluate</font></button>
                    </form>

                    <font face="Monotype corsiva" color="DarkViolet" size="6">Our server retrieves </font>
                    <text style="color:black; font-size:20pt;" id="globresult"></text>
                    <font face="Monotype corsiva" color="DarkViolet" size="6">records for your query </font>
                </div>

                <!--<p>Spinning:</p>
                <i class="fa fa-spinner fa-pulse" style="font-size:48px;color:red"></i>-->

                <br>
                <div id="flip3"><font face="Perpetua" color="purple" size="6">Batch operations for paid and free articles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-left"></span> CLICK HERE</font></div>
                <div id="batchoperation">
                    <div id="algobtn">
                        <button type="button" name="algorithm_btn" value="algorithm_btn" id="algorithm_btn" class="btn btn-primary"><font face="Perpetua" color="White" size="5" >Algorithm based retrieval</font></button>
                    </div>
                    <div6 id ="animtn6" style="background:#98bf21;height:100px;width:100px;">
                        <div id="algorithm_panel">
                            <form method="post" action ='algorithm_output.php' target="_blank" enctype="multipart/form-data">
                                <span style="color:#004E46; font-size: 14pt;"><i class="glyphicon glyphicon-upload"></i>Upload excel file:</span>
                                <input type='hidden' name='action' id="form_3" value='3' />
                                <input type="file" name="browsefile1" id="browsefile1" >
                                <br>
                                <span style="color:#004E46; font-size: 14pt;"><i class="glyphicon glyphicon-upload"></i>Upload excel file:</span>
                                <input type="file" name="browsefile2" id="browsefile2" >
                                <br>
                                <input type='submit' id="algorithm_browse_upload" class="btn btn-primary" name="algorithm_browse_upload" value='Find'  id="file_3"/>
                            </form> 
                        </div>
                    </div6>
                </div>
                <div id="flip1"><font face="Perpetua" color="purple" size="6">Paid articles with information like Title, Abstract etc...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-hand-left"></span> CLICK HERE</font></div>
                <div id="abstract">
                    <div id="abstractbtn">
                        <br>
                        <button type="button" name="all_art_btn" value="all_art_btn" id="all_art_btn" class="btn btn-primary"><font face="Perpetua" color="White" size="5" >All articles</font></button>
                        <br>
                        <br>
                        <br>
                        <button type="button" name="jour_yers_btn" value="jour_yers_btn" id="jour_yers_btn"  class="btn btn-primary"><font face="Perpetua" color="White" size="5" >Articles Journal & Year wise</font></button>
                        <br>
                        <br>
                        <br>
                        <button type="button" name="betwn_yers_btn" value="betwn_yers_btn" id="betwn_yers_btn" class="btn btn-primary"><font face="Perpetua" color="White" size="5" >Articles in between years</font></button>
                    </div>
                    <div1 id ="animtn1" style="background:#98bf21;height:100px;width:100px;">
                        <div id="pubmedsearch1">
                            <form method='POST' action='pubmed_result.php' target="_blank" enctype='multipart/form-data' id="form_search">
                                <input type='hidden' name="action" id="form_1" value='1.1' />
                                <span id="keyid" style="color:#004E46; font-size:14pt;">Key Word: </span>
                                <input id="pubmed_keyword" type="text" name="pub_key" value="" class="form-inline" placeholder="Enter search term e.g. 'cancer'">
                                <br>
                                <br>
                                <span style="color:#004E46; font-size:14pt;">Select category(s): </span>
                                <select id="databases" class="form-control" name="databases[]" multiple>
                                    <option value="Acquired Immunodeficiency Syndrome" value="">Acquired Immunodeficiency Syndrome</option>
                                    <option value="Aerospace Medicine" value="">Aerospace Medicine</option>
                                    <option value="Allergy and Immunology" value="">Allergy and Immunology</option>
                                    <option value="Analytical" value="">Analytical</option>
                                    <option value="Anatomy" value="">Anatomy</option>
                                    <option value="Anesthesiology" value="">Anesthesiology</option>
                                    <option value="Anthropology" value="">Anthropology</option>
                                    <option value="Anti-Infective Agents" value="">Anti-Infective Agents</option>
                                    <option value="Bacteriology" value="">Bacteriology</option>
                                    <option value="Behavioral Sciences" value="">Behavioral Sciences</option>
                                    <option value="Biochemistry" value="">Biochemistry</option>
                                    <option value="Biology" value="">Biology</option>
                                    <option value="Biomedical Engineering" value="">Biomedical Engineering</option>
                                    <option value="Biophysics" value="">Biophysics</option>
                                    <option value="Biotechnology" value="">Biotechnology</option>
                                    <option value="Botany" value="">Botany</option>
                                    <option value="Brain" value="">Brain</option>
                                    <option value="Cardiology" value="">Cardiology</option>
                                    <option value="Cell Biology" value="">Cell Biology</option>
                                    <option value="Chemistry" value="">Chemistry</option>
                                    <option value="Chemistry Techniques" value="">Chemistry Techniques</option>
                                    <option value="Clinical Laboratory Techniques" value="">Clinical Laboratory Techniques</option>
                                    <option value="Communicable Diseases" value="">Communicable Diseases</option>
                                    <option value="Complementary Therapies" value="">Complementary Therapies</option>
                                    <option value="Computational Biology" value="">Computational Biology</option>
                                    <option value="Critical Care" value="">Critical Care</option>
                                    <option value="Dentistry" value="">Dentistry</option>
                                    <option value="Dermatology" value="">Dermatology</option>
                                    <option value="Diagnostic Imaging" value="">Diagnostic Imaging</option>
                                    <option value="Disaster Medicine" value="">Disaster Medicine</option>
                                    <option value="Drug Therapy" value="">Drug Therapy</option>
                                    <option value="Education" value="">Education</option>
                                    <option value="Embryology" value="">Embryology</option>
                                    <option value="Emergency Medicine" value="">Emergency Medicine</option>
                                    <option value="Endocrinology" value="">Endocrinology</option>
                                    <option value="Environmental Health" value="">Environmental Health</option>
                                    <option value="Epidemiology" value="">Epidemiology</option>
                                    <option value="Ethics" value="">Ethics</option>
                                    <option value="Forensic Sciences" value="">Forensic Sciences</option>
                                    <option value="Gastroenterology" value="">Gastroenterology</option>
                                    <option value="General Surgery" value="">General Surgery</option>
                                    <option value="Genetics" value="">Genetics</option>
                                    <option value="Geriatrics" value="">Geriatrics</option>
                                    <option value="Gynecology" value="">Gynecology</option>
                                    <option value="Health Services" value="">Health Services</option>
                                    <option value="Health Services Research" value="">Health Services Research</option>
                                    <option value="Hematology" value="">Hematology</option>
                                    <option value="Histology" value="">Histology</option>
                                    <option value="History of Medicine" value="">History of Medicine</option>
                                    <option value="Hospitals" value="">Hospitals</option>
                                    <option value="Internal Medicine" value="">Internal Medicine</option>
                                    <option value="Jurisprudence" value="">Jurisprudence</option>
                                    <option value="Laboratory Animal Science" value="">Laboratory Animal Science</option>
                                    <option value="Medical" value="">Medical</option>
                                    <option value="Medical Informatics" value="">Medical Informatics</option>
                                    <option value="Medicine" value="">Medicine</option>
                                    <option value="Metabolism" value="">Metabolism</option>
                                    <option value="Microbiology" value="">Microbiology</option>
                                    <option value="Military Medicine" value="">Military Medicine</option>
                                    <option value="Molecular Biology" value="">Molecular Biology</option>
                                    <option value="Nanotechnology" value="">Nanotechnology</option>
                                    <option value="Neoplasms" value="">Neoplasms</option>
                                    <option value="Nephrology" value="">Nephrology</option>
                                    <option value="Neurology" value="">Neurology</option>
                                    <option value="Neurosurgery" value="">Neurosurgery</option>
                                    <option value="Nuclear Medicine" value="">Nuclear Medicine</option>
                                    <option value="Nursing" value="">Nursing</option>
                                    <option value="Nutritional Sciences" value="">Nutritional Sciences</option>
                                    <option value="Obstetrics" value="">Obstetrics</option>
                                    <option value="Occupational Medicine" value="">Occupational Medicine</option>
                                    <option value="Ophthalmology" value="">Ophthalmology</option>
                                    <option value="Orthodontics" value="">Orthodontics</option>
                                    <option value="Orthopedics" value="">Orthopedics</option>
                                    <option value="Otolaryngology" value="">Otolaryngology</option>
                                    <option value="Palliative Care" value="">Palliative Care</option>
                                    <option value="Parasitology" value="">Parasitology</option>
                                    <option value="Pathology" value="">Pathology</option>
                                    <option value="Pediatrics" value="">Pediatrics</option>
                                    <option value="Perinatology" value="">Perinatology</option>
                                    <option value="Pharmacology" value="">Pharmacology</option>
                                    <option value="Pharmacy" value="">Pharmacy</option>
                                    <option value="Physical and Rehabilitation Medicine" value="">Physical and Rehabilitation Medicine</option>
                                    <option value="Physics" value="">Physics</option>
                                    <option value="Physiology" value="">Physiology</option>
                                    <option value="Podiatry" value="">Podiatry</option>
                                    <option value="Primary Health Care" value="">Primary Health Care</option>
                                    <option value="Psychiatry" value="">Psychiatry</option>
                                    <option value="Psychology" value="">Psychology</option>
                                    <option value="Psychopharmacology" value="">Psychopharmacology</option>
                                    <option value="Psychophysiology" value="">Psychophysiology</option>
                                    <option value="Public Health" value="">Public Health</option>
                                    <option value="Pulmonary Medicine" value="">Pulmonary Medicine</option>
                                    <option value="Radiology" value="">Radiology</option>
                                    <option value="Radiotherapy" value="">Radiotherapy</option>
                                    <option value="Reproductive Medicine" value="">Reproductive Medicine</option>
                                    <option value="Rheumatology" value="">Rheumatology</option>
                                    <option value="Science" value="">Science</option>
                                    <option value="Sexually Transmitted Diseases" value="">Sexually Transmitted Diseases</option>
                                    <option value="Social Sciences" value="">Social Sciences</option>
                                    <option value="Speech-Language Pathology" value="">Speech-Language Pathology</option>
                                    <option value="Sports Medicine" value="">Sports Medicine</option>
                                    <option value="Statistics" value="">Statistics</option>
                                    <option value="Substance-Related Disorders" value="">Substance-Related Disorders</option>
                                    <option value="Technology" value="">Technology</option>
                                    <option value="Therapeutics" value="">Therapeutics</option>
                                    <option value="Toxicology" value="">Toxicology</option>
                                    <option value="Transplantation" value="">Transplantation</option>
                                    <option value="Traumatology" value="">Traumatology</option>
                                    <option value="Tropical Medicine" value="">Tropical Medicine</option>
                                    <option value="Unknown" value="">Unknown</option>
                                    <option value="Urology" value="">Urology</option>
                                    <option value="Vascular Diseases" value="">Vascular Diseases</option>
                                    <option value="Veterinary Medicine" value="">Veterinary Medicine</option>
                                    <option value="Virology" value="">Virology</option>
                                    <option value="Womens Health" value="">Womens Health</option>
                                    <option value="Zoology" value="">Zoology</option>
                                </select>
                               <!-- <span style="color:#004E46; font-size:14pt;">Number of Records: </span><input id="pubmed_records1" type="text" name="pub_rec" value="" placeholder="Records to be retrived e.g. 5">-->
                                <br>
                                <input type='submit' value='Extract Knowledge' class="btn btn-primary" name="pubmed_Search" id="pubmed_Search"/>
                            </form>
                        </div> 
                    </div1>
                    <div2 id ="animtn2" style="background:#98bf21;height:100px;width:100px;">
                        <div id="pubmedsearch2">
                            <form method='POST' action='pubmed_journal_year.php' target="_blank" enctype='multipart/form-data' id="form_search">
                                <input type='hidden' name="action" id="form_1" value='1.2' />
                                <span style="color:#004E46; font-size:14pt;">Key Word: </span>
                                <input id="pubmed_keyword" type="text" name="pub_key" value="" placeholder="Enter search term e.g. 'cancer'">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Number of Records: </span>
                                <input id="pubmed_records2" type="text" name="pub_rec" value="" placeholder="Records to be retrived e.g. 5">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Journal Name: </span>
                                <input id="pubmed_records3" type="text" name="pub_journal" value="" placeholder="Name of Journal e.g. science">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Year: </span>
                                <input id="pubmed_records4" type="text" name="pub_year" value="" placeholder="Year e.g. 2008">
                                <br>
                                <input type='submit' value='Extract Knowledge' class="btn btn-primary" name="pubmed_Search" id="pubmed_Search"  />
                            </form>
                        </div>
                    </div2>
                    <div3 id ="animtn3" style="background:#98bf21;height:100px;width:100px;">
                        <div id="pubmedsearch3">
                            <form method='POST' action='pubmed_min_max_year.php' target="_blank" enctype='multipart/form-data' id="form_search">
                                <input type='hidden' name="action" id="form_1" value='1.3' />
                                <span style="color:#004E46; font-size:14pt;">Key Word: </span>
                                <input id="pubmed_keyword" type="text" name="pub_key" value="" placeholder="Enter search term e.g. 'cancer'">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Number of Records: </span>
                                <input id="pubmed_records5" type="text" name="pub_rec" value="" placeholder="Records to be retrived e.g. 5">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Year from: </span>
                                <input id="pubmed_records6" type="text" name="pub_from_year" value="" placeholder="Year e.g. 2009">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Year upto: </span>
                                <input id="pubmed_records7" type="text" name="pub_upto_year" value="" placeholder="Year e.g. 2016">
                                <br>
                                <input type='submit' value='Extract Knowledge' class="btn btn-primary" name="pubmed_Search" id="pubmed_Search"  />
                            </form>
                        </div>
                    </div3>
                </div>

                <div id="flip2"><font face="Perpetua" color="purple" size="6">Free full text articles in pdf&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-left"></span> CLICK HERE</font></div>
                <div id="fulltext">
                    <div id="pdfbtn">
                        <br>
                        <br>
                        <button type="button" name="date_relevnc" value="date_relevnc" id="date_relevnc" class="btn btn-primary"><font face="Perpetua" color="White" size="5" >Articles date & relevance wise</font></button>
                        <br>
                        <br>
                        <button type="button" name="pmc_betwnyrs_btn" value="pmc_betwnyrs_btn" id="pmc_betwnyrs_btn" class="btn btn-primary"><font face="Perpetua" color="White" size="5" >Articles in between years</font></button>
                    </div>
                    <div4 id ="animtn4" style="background:#98bf21;height:100px;width:100px;">
                        <div id="pmcsearch">
                            <form method='POST' action='pmc_result.php' target="_blank" enctype='multipart/form-data' id="form_smiles">
                                <input type='hidden' name="action" id="form_2" value='2.1' />
                                <span style="color:#004E46; font-size:14pt;">Key Word: </span><input id="pmc_keyword" type="text" name="pmc_key" value="" placeholder="Enter search term e.g. cancer+doxorubicin">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Number of Records: </span><input id="pmc_records1" type="text" name="pmc_rec" value="" placeholder="Records to be retrived e.g. 5">
                                <br><br>
                                <span style="color:#004E46; font-size:14pt;">Retrieve record according to : </span>
                                <select id="sortoption" name="sort">
                                    <option value="date" value="">Date</option>
                                    <option value="relevance" value="">Most cited</option>
                                </select>
                                    <!--<span style="color:#004E46; font-size:14pt;">Path: </span><input id="pmc_path" type="text" name="pmc_path" value="" placeholder="Enter Path for Folder">
                                -->
                                <br><br>
                                <input type='submit' value='Retrive Articles' class="btn btn-primary" name="pmc_Search" id="pmc_Search"  />
                            </form>
                        </div>
                    </div4>
                    <div5 id ="animtn5" style="background:#98bf21;height:100px;width:100px;">
                        <div id="pmcbetwnyers">
                            <form method='POST' action='pmc_min_max.php' target="_blank" enctype='multipart/form-data' id="form_smiles">
                                <input type='hidden' name="action" id="form_2" value='2.2' />
                                <span style="color:#004E46; font-size:14pt;">Key Word: </span><input id="pmc_keyword" type="text" name="pmc_key" value="" placeholder="Enter search term e.g. cancer+doxorubicin">
                                <br>
                                <span style="color:#004E46; font-size:14pt;">Number of Records: </span><input id="pmc_records" type="text" name="pmc_rec" value="" placeholder="Records to be retrived e.g. 5">
                                <br>
                                <span style="color:#004E46; font-size:14pt;">Year from: </span><input id="pmc_records2" type="text" name="pmc_from_year" value="" placeholder="Year e.g. 2009">
                                <br>
                                <span style="color:#004E46; font-size:14pt;">Year upto: </span><input id="pmc_records3" type="text" name="pmc_upto_year" value="" placeholder="Year e.g. 2016">
                                    <!--<span style="color:#004E46; font-size:14pt;">Path: </span><input id="pmc_path" type="text" name="pmc_path" value="" placeholder="Enter Path for Folder">
                                --> <br><br>
                                <input type='submit' value='Retrive Articles' class="btn btn-primary" name="pmc_Search" id="pmc_Search"  />
                            </form>
                        </div>
                    </div5>
                </div>

            </div>
        </div>

        <hr style="background: #0096CD; border:0; height:5px; width: 1000px;"/>
        <footer id="footer">
            <span style="color:#066956" ><b>Copyright &copy 2016 to NIPER,S.A.S Nagar, Punjab, India. All rights reserved</span>
            <br>
            <span style="color:#066956" ><b>Managed by: <a href="http://pglab.weebly.com/" target="_blank">Data Mining and Pattern Recognition lab,</a> <a href="http://inpharmatics.weebly.com/" target="_blank">Department of Pharmacoinformatics,</a> <a href="http://www.niper.gov.in" target="_blank">NIPER S.A.S. Nagar (Mohali)-160062, Punjab (INDIA)</a></span>
        </footer>
    </body>
</html>

