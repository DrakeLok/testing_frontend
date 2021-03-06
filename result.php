<?php
/*
BISMILLAAHIRRAHMAANIRRAHIIM - In the Name of Allah, Most Gracious, Most Merciful
================================================================================
filename 	: result.php
purpose  	: result page
create   	: 20210210
last edit	: 20220510
author   	: cahya dsn
demo site 	: https://psycho.cahyadsn.com/mbti_test
soure code 	: https://github.com/cahyadsn/mbti_test
================================================================================
This program is free software; you can redistribute it and/or modify it under the
terms of the MIT License.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

See the MIT License for more details

copyright (c) 2022 by cahya dsn; cahyadsn@gmail.com
================================================================================*/
session_start();
include 'config.php';
$version = 0.2;
$c=isset($_SESSION['c'])?$_SESSION['c']:(isset($_GET['c'])?$_GET['c']:'indigo');
$_SESSION['author'] = 'cahyadsn';
$_SESSION['ver']    = sha1(rand());
header('Expires: '.date('r'));
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
if(isset($_POST['d'])){
  $a=$b=array();
  for($i=1;$i<=60;$i++){
    $a[$i]=isset($_POST['d'][$i]) && $_POST['d'][$i]==1?1:0;
    $b[$i]=isset($_POST['d'][$i]) && $_POST['d'][$i]==2?1:0;
  }
  $I=($b[60]+$b[52]+$a[45]+$a[38]+$b[35]+$a[31]+$a[29]+$b[28]+$a[20]+$a[15]+$a[11]+$a[10]+$b[7]+$b[5]+$a[2])/15;
  $E=($a[60]+$a[52]+$b[45]+$b[38]+$a[35]+$b[31]+$b[29]+$a[28]+$b[20]+$b[15]+$b[11]+$b[10]+$a[7]+$a[5]+$b[2])/15;
  $S=($a[53]+$a[51]+$a[46]+$a[43]+$a[41]+$a[36]+$a[34]+$a[27]+$a[25]+$b[22]+$b[18]+$a[16]+$a[13]+$a[8]+$b[6])/15;
  $N=($b[53]+$b[51]+$b[46]+$b[43]+$b[41]+$b[36]+$b[34]+$b[27]+$b[25]+$a[22]+$a[18]+$b[16]+$b[13]+$b[8]+$a[6])/15;
  $T=($a[58]+$a[57]+$a[55]+$b[49]+$a[48]+$a[42]+$b[39]+$a[37]+$a[23]+$b[32]+$a[30]+$a[17]+$b[9]+$a[4]+$a[14])/15;
  $F=($b[58]+$b[57]+$b[55]+$a[49]+$b[48]+$b[42]+$a[39]+$b[37]+$b[23]+$a[32]+$b[30]+$b[17]+$a[9]+$b[4]+$b[14])/15;
  $J=($b[59]+$a[56]+$a[54]+$b[50]+$a[47]+$b[44]+$b[40]+$b[33]+$b[26]+$a[24]+$b[21]+$a[19]+$b[12]+$a[3]+$b[1])/15;
  $P=($a[59]+$b[56]+$b[54]+$a[50]+$b[47]+$a[44]+$a[40]+$a[33]+$a[26]+$b[24]+$a[21]+$b[19]+$a[12]+$b[3]+$a[1])/15;
  $resultStr=($I>$E?'I':'E').($S>$N?'S':'N').($T>$F?'T':'F').($J>$P?'J':'P');
  $query="SELECT * FROM mbti_test_interprestation WHERE symbol='{$resultStr}' ";
  $result = pg_query($db, $query) or die('Query failed: ' . pg_last_error());
  $data=pg_fetch_array($result, null, PGSQL_ASSOC);
?>
<!DOCTYPE html>
<html>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" type="image/ico" href="https://www.cooljobz.com/dbp/files/cooljobz/cooljobz_icon.png"><title>CoolJobz.com - Adding New Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://www.cooljobz.com/dbp/css/ourdb-appage.css">
    <link rel="stylesheet" href="https://www.cooljobz.com/dbp/css/ourdb.css">
    <link rel="stylesheet" href="https://www.cooljobz.com/dbp/css/ourdb-w3.css">
    <link rel="stylesheet" href="https://www.cooljobz.com/dbp/fontawesome/v4.7.0/css/font-awesome.min.css">
  
   <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://www.cooljobz.com/dbp/js/ourdb.js"></script>
   <script src="https://www.cooljobz.com/dbp/js/calendar.js"></script></head><body onbeforeunload="onoff_progress('on');" onload="onoff_progress('off'); set_frame_height(); load_resume(); onchange_resume(); load_list('experience','experience_list','experience_item','nval35'); load_list('education','education_list','education_item','nval36'); load_list('profession','profession_list','profession_item','nval37');" data-new-gr-c-s-check-loaded="9.40.0" data-gr-ext-installed=""><div class="ourdb-hidden ourdb-calendar" id="ourdb-calendar"></div>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, viewport-fit=cover"><link rel="stylesheet" href="https://www.cooljobz.com/dbp/css/ourdb-w3.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.cooljobz.com/dbp/files/cooljobz/site_style.css">


<script>initRefreshEditor();</script>

    <!-- Facebook Pixel Code -->
    <!-- <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=619195874874226&ev=PageView&noscript=1"
    /> -->
    <!-- End Facebook Pixel Code -->
  

    <div id="ourdb-progress" class="ourdb-progress ourdb-hidden">
      <div class="ourdb-progress-content">
        <i class="fa fa-spinner fa-spin w3-jumbo"></i>
      </div>
    </div>
    <div id="ourdb-loading" class="ourdb-progress ourdb-hidden" style="background-color: rgba(0, 0, 0, 0.4);">
      <div class="ourdb-progress-content">
        <i class="fa fa-spinner fa-spin w3-jumbo"></i>
      </div>
    </div>
    <div align="center" class="ourdb-hidden"><img src="../dbp/images/db_mindvan.jpg" border="0"></div>
    <script>
      var v = "appage-progress-color";
      var i = document.cookie.indexOf(v);
      if (i >= 0) {
        var j = document.cookie.indexOf(";", i);
        var c = document.cookie.substr(i+v.length+1, j-i-v.length-1);
        document.getElementById("ourdb-progress").style.color = c;
        document.getElementById("ourdb-loading").style.color = c;
      }
      v = "appage-background-color";
      i = document.cookie.indexOf(v);
      if (i >= 0) {
        var j = document.cookie.indexOf(";", i);
        var c = document.cookie.substr(i+v.length+1, j-i-v.length-1);
        document.body.className = document.body.className.replace(" w3-theme-light", "").replace("w3-theme-light ", "").replace("w3-theme-light", "");
        document.getElementById("ourdb-progress").style.backgroundColor = c;
        document.getElementById("ourdb-loading").style.backgroundColor = c;
      }
    </script>
  
      <div id="appage_menu" class="ourdb-app-menu-icon w3-animate-zoom">
        <a class="w3-button w3-light-grey w3-opacity w3-circle ourdb-app-menu-item" onclick="ourdb_menu_open();">
          <i class="fa fa-ellipsis-h ourdb-app-menu-txt"></i>
        </a>
        <div class="w3-animate-top w3-small w3-text-black ourdb-hidden ourdb-sn-bar" id="ourdb-powered">
          Powered by mindVan <a class="ourdb-powered w3-margin-right" target="_blank" href="https://mindvan.com">ourDB</a>
          <a target="_blank" href="https://www.facebook.com/mindvan"><i class="fa fa-facebook-official w3-large w3-text-indigo w3-hover-opacity"></i></a>
          <a target="_blank" href="https://www.instagram.com/mindvan.connection"><i class="fa fa-instagram w3-large w3-text-pink w3-hover-opacity"></i></a>
          <a target="_blank" href="https://www.youtube.com/user/mindvanconnection"><i class="fa fa-youtube w3-large w3-text-red w3-hover-opacity"></i></a>
          <a target="_blank" href="https://twitter.com/mindvan"><i class="fa fa-twitter w3-large w3-text-blue w3-hover-opacity"></i></a>
        </div>
      </div>
    
      
      <div class="w3-sidebar w3-theme-l3 w3-animate-left ourdb-hidden ourdb-sidebar ourdb-app-menu-body" id="ourdb-sidebar"><br>
        <div class="w3-container w3-row">
          <div class="w3-col s4"><a target="_blank" href="https://mindvan.com/dbs/./nbrowse?share=technology305@cooljobz.com&amp;sid=87242251014407419"><i class="fa fa-user w3-xlarge w3-hover-opacity w3-text-black w3-hover-opacity"></i></a>
                 <i class="fa fa-long-arrow-right w3-large"></i>
                 <a target="_blank" href="https://mindvan.com/dbs/./nbrowse?share=cooljobz&amp;sid=87242251014407419"><i class="fa fa-user w3-xxxlarge w3-hover-opacity w3-text-black w3-hover-opacity"></i></a>
          </div>
          <div class="w3-col s8 w3-bar">
            <div class="ourdb-username">
              <span class="w3-hide-small w3-hide-medium"></span>
              <a class="ourdb-app-link w3-text-black" target="_blank" href="https://mindvan.com/dbs/./nbrowse?share=technology305@cooljobz.com&amp;sid=87242251014407419" title="CHAN TAI MAN"><strong>CHAN TAI MAN</strong></a>
            </div><div class="ourdb-username"><i class="fa fa-long-arrow-right w3-large"></i>
                   <a class="ourdb-app-link" target="_blank" href="https://mindvan.com/dbs/./nbrowse?share=cooljobz&amp;sid=87242251014407419" title="CoolJobz"><strong>CoolJobz</strong></a>
                 </div>
            <div>
              <a href="./gshowgroup?share=cooljobz&amp;caller=/dbs/bdetail&amp;params=share*qcooljobz*ntemplate*q801543530030" class="w3-bar-item w3-button"><i class="fa fa-group" title="Switch Group"></i></a><a href="javascript: window.location='./rshare?caller=/dbs/bdetail&myname=CHAN*STAI*SMAN&title=' + qry_escape(document.title) + '&params=share*qcooljobz*ntemplate*q801543530030&addmode=1'; void(0);" class="w3-bar-item w3-button"><i class="fa fa-share-alt " title="Share"></i></a>
            </div>
          </div>
        </div>
        <hr>
        
        <div class="w3-bar-block w3-margin-bottom">
          <div class="ourdb-navbar w3-animate-top w3-hide"><a class="w3-bar-item w3-button w3-padding" target="_blank" href="./redit"><i class="fa fa-id-badge w3-margin-right"></i>Profile...</a>
<a class="w3-bar-item w3-button w3-padding" target="_blank" href="./rlogin"><i class="fa fa-user-o w3-margin-right"></i>Login As...</a>
<a class="w3-bar-item w3-button w3-padding" target="_blank" href="./rlogout"><i class="fa fa-sign-out w3-margin-right"></i>Log Out</a>
</div><div class="ourdb-navbar w3-animate-top w3-hide"><a class="w3-bar-item w3-button w3-padding" target="_blank" href="./vinviteadd?share=cooljobz"><i class="fa fa-child w3-margin-right"></i>Invite...</a>
<a class="w3-bar-item w3-button w3-padding" target="_blank" href="https://www.mindvan.com/dbs/bdetail?template=269928100018&amp;share=mindvan.connection"><i class="fa fa-university w3-margin-right"></i>mindvan.com</a>
<a class="w3-bar-item w3-button w3-padding" href="javascript: history.go(-1);"><i class="fa fa-undo w3-margin-right"></i>Go Back</a>
</div><div class="ourdb-navbar w3-animate-top"><a class="w3-bar-item w3-button w3-padding" target="_blank" href="./vinviteadd?share=cooljobz"><i class="fa fa-child w3-margin-right"></i>Invite...</a>
<a class="w3-bar-item w3-button w3-padding" target="_blank" href="https://www.mindvan.com/dbs/bdetail?template=269928100018&amp;share=mindvan.connection"><i class="fa fa-university w3-margin-right"></i>mindvan.com</a>
<a class="w3-bar-item w3-button w3-padding" href="javascript: history.go(-1);"><i class="fa fa-undo w3-margin-right"></i>Go Back</a>
</div><a class="w3-bar-item w3-button w3-padding ourdb-navbar" onclick="display_fullmenu();">Full Menu</a>
<div class="w3-row">&nbsp;</div>
<div class="w3-row">&nbsp;</div>

        </div>
      </div>
    
      <div class="w3-overlay w3-animate-opacity ourdb-hidden ourdb-app-link ourdb-app-menu-overlay" onclick="ourdb_menu_close()" title="close side menu" id="ourdb-overlay"></div>
    

<script>var utype = "Job Seeker";</script>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white">
    <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530001" class="w3-bar-item"><img src="https://www.cooljobz.com/dbp/images/cooljobz/cooljobz_logo.png" class="site-bar-item"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small w3-hide-medium">
      <a id="site-menu-TOP-10" href="javascript: toggle_menu('TOP', '10'); void(0);" class="w3-menu  ">Jobs</a><div name="site-submenu-TOP" id="site-submenu-TOP-10" class="w3-small w3-hide site-submenu-top"><a id="site-menu-TOP-All-10" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530031&amp;params=AllJb" class="w3-menu ">List All</a>   <a id="site-menu-TOP-3" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=3&amp;params=Job" class="w3-menu  ">Recommended Job</a>                     <a id="site-menu-TOP-88742272048107" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272048107&amp;params=Job" class="w3-menu  ">Accounting and auditing</a>                     <a id="site-menu-TOP-88742272066741" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272066741&amp;params=Job" class="w3-menu  ">Administration and Human Resources</a>                     <a id="site-menu-TOP-88742272123644" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272123644&amp;params=Job" class="w3-menu  ">Banking / Finance</a>                     <a id="site-menu-TOP-11" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=11&amp;params=Job" class="w3-menu  ">Information Technology</a>                     <a id="site-menu-TOP-88742273081620" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742273081620&amp;params=Job" class="w3-menu  ">Sales / Customer Service / Business Development</a>                     <select class="site-select" onchange="switch_category_option(this.value,'Job');" id="select-TOP-job">  <option value="">-- Select job category --</option>  <option value="88742272048107">Accounting and auditing</option><option value="88742272029719">&nbsp;&nbsp;&nbsp;&nbsp;Accounting / Treasury</option><option value="88742272104813">&nbsp;&nbsp;&nbsp;&nbsp;Audit / Tax</option><option value="88742272446849">&nbsp;&nbsp;&nbsp;&nbsp;Enterprise</option><option value="88742272066741">Administration and Human Resources</option><option value="88742272085894">&nbsp;&nbsp;&nbsp;&nbsp;Administrative / Operation</option><option value="88742272275375">&nbsp;&nbsp;&nbsp;&nbsp;Clerical / Reception</option><option value="88742272542939">&nbsp;&nbsp;&nbsp;&nbsp;Human Resources</option><option value="88742273101096">&nbsp;&nbsp;&nbsp;&nbsp;Secretary / Personal Assistant</option><option value="88742273177852">&nbsp;&nbsp;&nbsp;&nbsp;Training and Development</option><option value="88742272123644">Banking / Finance</option><option value="88742272178882">&nbsp;&nbsp;&nbsp;&nbsp;Business / Retail / Private / Investment</option><option value="88742272613042">&nbsp;&nbsp;&nbsp;&nbsp;Internal control</option><option value="88742272666505">&nbsp;&nbsp;&nbsp;&nbsp;Loan / Credit analysis and approval / Mortgage</option><option value="88742273198718">&nbsp;&nbsp;&nbsp;&nbsp;Transactions / Securities</option><option value="90750309385881">Beauty / Health</option><option value="90750685739618">&nbsp;&nbsp;&nbsp;&nbsp;Sports / Leisure</option><option value="90750704454284">&nbsp;&nbsp;&nbsp;&nbsp;Beautician</option><option value="90750720261881">&nbsp;&nbsp;&nbsp;&nbsp;Nutritionist</option><option value="88742272160553">Building / Construction</option><option value="88742272142559">&nbsp;&nbsp;&nbsp;&nbsp;Building</option><option value="90750800831927">&nbsp;&nbsp;&nbsp;&nbsp;Architecture</option><option value="88742272761749">&nbsp;&nbsp;&nbsp;&nbsp;Measurement / Civil / Structural</option><option value="88742272352523">Design</option><option value="88742272464769">&nbsp;&nbsp;&nbsp;&nbsp;Fashion</option><option value="88742272505994">&nbsp;&nbsp;&nbsp;&nbsp;Graphic Design</option><option value="88742272593378">&nbsp;&nbsp;&nbsp;&nbsp;Interior Design</option><option value="88745262127608">&nbsp;&nbsp;&nbsp;&nbsp;Watches / Jewelry</option><option value="88742273239003">&nbsp;&nbsp;&nbsp;&nbsp;Web Design</option><option value="88742272371046">Education</option><option value="88742272819829">&nbsp;&nbsp;&nbsp;&nbsp;Mentor / Teacher / Professor</option><option value="88742272428035">Engineering</option><option value="88742272256791">&nbsp;&nbsp;&nbsp;&nbsp;Chemical industry</option><option value="88742272390382">&nbsp;&nbsp;&nbsp;&nbsp;Electricity / Electronics</option><option value="88742272703893">&nbsp;&nbsp;&nbsp;&nbsp;Manufacturing / Production</option><option value="88742272781707">&nbsp;&nbsp;&nbsp;&nbsp;Mechanical</option><option value="90750367478040">Hotel / Catering</option><option value="90750895055263">&nbsp;&nbsp;&nbsp;&nbsp;Food and Beverage</option><option value="90750916284914">&nbsp;&nbsp;&nbsp;&nbsp;Hotel Service</option><option value="90750951236877">&nbsp;&nbsp;&nbsp;&nbsp;Tourism / Travel Agency</option><option value="11">Information Technology</option><option value="88742272524318">&nbsp;&nbsp;&nbsp;&nbsp;Hardware</option><option value="88742272838252">&nbsp;&nbsp;&nbsp;&nbsp;Mobile / Wireless communications</option><option value="88742272856504">&nbsp;&nbsp;&nbsp;&nbsp;Network / Support</option><option value="88742272927564">&nbsp;&nbsp;&nbsp;&nbsp;Project Management</option><option value="88742273138403">&nbsp;&nbsp;&nbsp;&nbsp;Software Development</option><option value="88742273259016">&nbsp;&nbsp;&nbsp;&nbsp;Webmaster / SEO</option><option value="88744230610458">Insurance</option><option value="88742272574568">&nbsp;&nbsp;&nbsp;&nbsp;Insurance agent / Broker</option><option value="88742272684937">Management</option><option value="88742272486086">&nbsp;&nbsp;&nbsp;&nbsp;General management</option><option value="88742273119960">&nbsp;&nbsp;&nbsp;&nbsp;Senior management</option><option value="89939774169064">Manufacture</option><option value="89939817337212">&nbsp;&nbsp;&nbsp;&nbsp;Apparel / Textile</option><option value="89939875365040">&nbsp;&nbsp;&nbsp;&nbsp;Product Development / Management</option><option value="88742272741775">Marketing / Public Relations</option><option value="88742272722708">&nbsp;&nbsp;&nbsp;&nbsp;Marketing</option><option value="88742273006712">&nbsp;&nbsp;&nbsp;&nbsp;Public Relations</option><option value="88742272800828">Media and advertising</option><option value="90751110237849">&nbsp;&nbsp;&nbsp;&nbsp;Broadcast - TV/Radio</option><option value="88742272315065">&nbsp;&nbsp;&nbsp;&nbsp;Creative / Design</option><option value="90751149351962">&nbsp;&nbsp;&nbsp;&nbsp;Editor / Journalism</option><option value="88742272888702">&nbsp;&nbsp;&nbsp;&nbsp;Photography / Video</option><option value="90751177038491">&nbsp;&nbsp;&nbsp;&nbsp;Print Media</option><option value="118348238266243">&nbsp;&nbsp;&nbsp;&nbsp;Event Management</option><option value="90750433780067">Medical</option><option value="90751237703986">&nbsp;&nbsp;&nbsp;&nbsp;Doctor</option><option value="90751254301929">&nbsp;&nbsp;&nbsp;&nbsp;Nursing / Care</option><option value="88742272909400">Professional services</option><option value="88742272198671">&nbsp;&nbsp;&nbsp;&nbsp;Business Consulting</option><option value="88742272295448">&nbsp;&nbsp;&nbsp;&nbsp;Company Secretary</option><option value="88742272648894">&nbsp;&nbsp;&nbsp;&nbsp;Legal</option><option value="88742273218982">&nbsp;&nbsp;&nbsp;&nbsp;Translation</option><option value="88742272947786">Property / Real estate</option><option value="88742272967780">&nbsp;&nbsp;&nbsp;&nbsp;Property Consultants</option><option value="88742272987661">&nbsp;&nbsp;&nbsp;&nbsp;Property Management</option><option value="90750511993217">Government / Social Services</option><option value="90751329150175">&nbsp;&nbsp;&nbsp;&nbsp;Civil servants</option><option value="90751347363890">&nbsp;&nbsp;&nbsp;&nbsp;Social Services / NGO</option><option value="89939281025964">Purchase</option><option value="89939324602123">&nbsp;&nbsp;&nbsp;&nbsp;Clothing</option><option value="89939439270007">&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option><option value="89939505611489">&nbsp;&nbsp;&nbsp;&nbsp;Toys / Watches</option><option value="88742273025616">Research / Laboratory</option><option value="88742272409675">&nbsp;&nbsp;&nbsp;&nbsp;Energy</option><option value="88742272630490">&nbsp;&nbsp;&nbsp;&nbsp;Laboratory</option><option value="88742273044249">&nbsp;&nbsp;&nbsp;&nbsp;Research and Development</option><option value="88742273081620">Sales / Customer Service / Business Development</option><option value="88742272011081">&nbsp;&nbsp;&nbsp;&nbsp;Account Services</option><option value="88742272218687">&nbsp;&nbsp;&nbsp;&nbsp;Business Development</option><option value="88742272238322">&nbsp;&nbsp;&nbsp;&nbsp;Channel / Distribution</option><option value="88742272333635">&nbsp;&nbsp;&nbsp;&nbsp;Customer Service</option><option value="88742273062887">&nbsp;&nbsp;&nbsp;&nbsp;Retail</option><option value="88742273157666">&nbsp;&nbsp;&nbsp;&nbsp;Telemarketing</option><option value="88742273280052">&nbsp;&nbsp;&nbsp;&nbsp;Wholesale</option><option value="90750555640833">Transportation / Logistic</option><option value="90751419200857">&nbsp;&nbsp;&nbsp;&nbsp;Aviation</option><option value="90751439243217">&nbsp;&nbsp;&nbsp;&nbsp;Freight</option><option value="90751461241786">&nbsp;&nbsp;&nbsp;&nbsp;Inventory / Warehouse</option><option value="90751479281023">&nbsp;&nbsp;&nbsp;&nbsp;Shipping</option><option value="90751507050257">&nbsp;&nbsp;&nbsp;&nbsp;Transportation</option><option value="88020923215666">Other</option><option value="90751594518160">&nbsp;&nbsp;&nbsp;&nbsp;Agriculture / Forestry / Fisheries</option><option value="90751627158195">&nbsp;&nbsp;&nbsp;&nbsp;Entertainment - Artist / Singer / Musician</option><option value="90751646370720">&nbsp;&nbsp;&nbsp;&nbsp;Security</option><option value="90751675496963">&nbsp;&nbsp;&nbsp;&nbsp;Student / Graduate / No experience</option><option value="90751707884094">&nbsp;&nbsp;&nbsp;&nbsp;Technician</option><option value="90751765078264">&nbsp;&nbsp;&nbsp;&nbsp;Trading</option></select>   </div><a id="site-menu-TOP-18" href="javascript: toggle_menu('TOP', '18'); void(0);" class="w3-menu  ">Employers</a><div name="site-submenu-TOP" id="site-submenu-TOP-18" class="w3-small w3-hide site-submenu-top">   <a id="site-menu-TOP-All-18" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530031&amp;params=AllEmpl" class="w3-menu ">List All</a><a id="site-menu-TOP-86555632061031" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=86555632061031&amp;params=Employer" class="w3-menu  ">Premium Employer</a>                        <select class="site-select" onchange="switch_category_option(this.value,'Employer');" id="select-TOP-employer">  <option value="">-- Select industry --</option>  <option value="88764836752249">Banking / Finance</option><option value="88764491317706">Education and Training</option><option value="88764491337888">Human Resource Management / Consultants</option><option value="88764734221015">Information Technology</option><option value="88764889747013">Insurance </option><option value="88764491382671">Manufacturing - Electronics / Toys / Clothing / Other</option><option value="89941006587999">Marketing / Advertising / Public Relations</option><option value="88764491401731">Property / Security</option><option value="88764491420196">Retail / Wholesale</option><option value="88764491438708">Telecommunications</option><option value="88764491456778">Transport</option><option value="88765207819443">Other </option></select></div><a id="site-menu-TOP-4" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=4&amp;params=News" class="w3-menu  ">Updated News</a>                     <a id="site-menu-TOP-17" href="javascript: toggle_menu('TOP', '17'); void(0);" class="w3-menu  ">Locations</a><div name="site-submenu-TOP" id="site-submenu-TOP-17" class="w3-small w3-hide site-submenu-top">      <a id="site-menu-TOP-6" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=6&amp;params=NIL" class="w3-menu  ">Hong Kong</a>                     <a id="site-menu-TOP-84589660097957" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=84589660097957&amp;params=NIL" class="w3-menu  ">Japan</a>                     <a id="site-menu-TOP-7" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=7&amp;params=NIL" class="w3-menu  ">Taiwan</a>                     <a id="site-menu-TOP-8" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=8&amp;params=NIL" class="w3-menu  w3-hide">Cambodia</a>                     <a id="site-menu-TOP-9" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=9&amp;params=NIL" class="w3-menu  ">Singapore</a>                     <a id="site-menu-TOP-88020869413409" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020869413409&amp;params=NIL" class="w3-menu  ">UK</a>                     <a id="site-menu-TOP-88020883048761" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020883048761&amp;params=NIL" class="w3-menu  ">China</a>                     <a id="site-menu-TOP-91780884393455" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=91780884393455&amp;params=NIL" class="w3-menu  w3-hide">Bangladesh</a>                     <a id="site-menu-TOP-93683909360354" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93683909360354&amp;params=NIL" class="w3-menu  w3-hide">India</a>                     <a id="site-menu-TOP-88020836996040" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020836996040&amp;params=NIL" class="w3-menu  ">USA</a>                     <a id="site-menu-TOP-93724740092753" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93724740092753&amp;params=NIL" class="w3-menu  w3-hide">Netherlands</a>                     <a id="site-menu-TOP-93723321836316" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93723321836316&amp;params=NIL" class="w3-menu  w3-hide">Poland</a>                     <a id="site-menu-TOP-90096758751010" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=90096758751010&amp;params=NIL" class="w3-menu  w3-hide">Vietnam</a>                     <a id="site-menu-TOP-94156018167009" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94156018167009&amp;params=NIL" class="w3-menu  w3-hide">Philippines</a>                     <a id="site-menu-TOP-94506105698149" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94506105698149&amp;params=NIL" class="w3-menu  w3-hide">Belgium</a>                     <a id="site-menu-TOP-94764553150924" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94764553150924&amp;params=NIL" class="w3-menu  w3-hide">Australia</a>                     <a id="site-menu-TOP-95473571064737" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=95473571064737&amp;params=NIL" class="w3-menu  ">South Africa</a>                     <a id="site-menu-TOP-95974680385655" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=95974680385655&amp;params=NIL" class="w3-menu  ">Korea</a>                           </div><a id="site-menu-TOP-1" href="javascript: toggle_menu('TOP', '1'); void(0);" class="w3-menu  ">About Us</a><div name="site-submenu-TOP" id="site-submenu-TOP-1" class="w3-small w3-hide site-submenu-top">      <a id="site-menu-TOP-109034293507595" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=1&amp;params=109034293507595" class="w3-menu  ">About CoolJobz.com</a>                     <a id="site-menu-TOP-98491680147395" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=98491295477220&amp;params=98491680147395" class="w3-menu  ">For Company</a>                     <a id="site-menu-TOP-98495922448088" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=98495858708743&amp;params=98495922448088" class="w3-menu  ">For Individual</a>                     <a id="site-menu-TOP-98591095668073" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=98591095668073&amp;params=Job" class="w3-menu  ">Join Us</a>                           </div><a id="site-menu-TOP-109035225404681" href="javascript: toggle_menu('TOP', '109035225404681'); void(0);" class="w3-menu  ">Our Products</a><div name="site-submenu-TOP" id="site-submenu-TOP-109035225404681" class="w3-small w3-hide site-submenu-top">      <a id="site-menu-TOP-109036424547333" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=109036291980916&amp;params=109036424547333" class="w3-menu  ">Job Ad</a>                     <a id="site-menu-TOP-90017781708281" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=90007567793998&amp;params=90017781708281" class="w3-menu  ">CoolJobzHRM</a>                           </div>

      
      <a href="javascript: toggle_menu('TOP', 'profile'); void(0);" class="w3-menu site-profile" id="site-menu-TOP-profile"><i class="fa fa-id-badge"></i> CHAN TAI MAN</a>
        <div name="site-submenu-TOP" id="site-submenu-TOP-profile" class="w3-small site-submenu-top" style="top: 61px;">
          <!-- <div class="w3-hover-lime">
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530017" class="w3-menu site-profile"><i class="fa fa-user"></i> Edit Profile</a>
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530072&amp;params=NIL" class="w3-menu site-profile"><i class="fa fa-heart"></i> My Favourite</a>
      
      
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530026" class="w3-menu site-profile"><i class="fa fa-id-badge"></i> My Resume</a>
      
         
      
          <a name="bar-appl" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530038&amp;params=NIL" class="w3-menu site-profile"><i class="fa fa-arrows-h"></i> Job Application</a>
          </div> -->
          <!-- <div name="bar-hrm" class="w3-hover-amber">
      
      
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530061&amp;params=NIL" class="w3-menu-2 site-profile"><i class="fa fa-building"></i> My Employers</a>
      
         
      
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Leaves*Sand*SFlag*x~Disabled" class="w3-menu-2 site-profile"><i class="fa fa-plane"></i> Leaves</a>
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Claims*Sand*SFlag*x~Disabled" class="w3-menu-2 site-profile"><i class="fa fa-taxi"></i> Claims</a>
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Payroll*Sand*SFlag*x~Disabled" class="w3-menu-2 site-profile"><i class="fa fa-money"></i> Payroll</a>
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Attendance*Sand*SFlag*x~Disabled" class="w3-menu-2 site-profile"><i class="fa fa-clock-o"></i> Attendance</a>
          <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530078&amp;dbname=site_Application&amp;key=NIL" class="w3-menu-2 site-profile"><i class="fa fa-calendar"></i> Schedule</a>
          </div> -->
        </div>
      <a href="./rlogout" class="w3-menu"><i class="fa fa-sign-out"></i> Sign Out</a>
      
         
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-hover-black w3-right w3-hide-large site-menu" onclick="site_sidebar_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="w3-bar w3-white site-search">
    <input class="site-search-input-lg" value="Search..." id="search-text-l" onfocus="if (this.value == 'Search...') { this.value = ''; }" onblur="if (this.value.trim() == '') { this.value = 'Search...'; }" onkeypress="if (event.keyCode == 13) { submit_search(1); return false; }">
    <a href="javascript: submit_search(1); void(0);"><i class="fa fa-search"></i></a>
    <a href="javascript: search_open(); void(0);" class="w3-margin-right"><i class="fa fa-sliders"></i></a>
  </div>
</div>

<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide w3-hide-large site-sidebar" id="site-sidebar">
  <a href="javascript:void(0)" onclick="site_sidebar_close()" class="w3-bar-item w3-menu w3-large w3-padding-16">??</a>
  <a id="site-menu-SIDE-10" href="javascript: toggle_menu('SIDE', '10'); void(0);" class="w3-menu site-menu-item ">Jobs</a><div name="site-submenu-SIDE" id="site-submenu-SIDE-10" class="w3-small w3-hide "><a id="site-menu-SIDE-All-10" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530031&amp;params=AllJb" class="w3-menu site-menu-item">List All</a>   <a id="site-menu-SIDE-3" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=3&amp;params=Job" class="w3-menu site-menu-item ">Recommended Job</a>                     <a id="site-menu-SIDE-88742272048107" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272048107&amp;params=Job" class="w3-menu site-menu-item ">Accounting and auditing</a>                     <a id="site-menu-SIDE-88742272066741" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272066741&amp;params=Job" class="w3-menu site-menu-item ">Administration and Human Resources</a>                     <a id="site-menu-SIDE-88742272123644" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272123644&amp;params=Job" class="w3-menu site-menu-item ">Banking / Finance</a>                     <a id="site-menu-SIDE-11" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=11&amp;params=Job" class="w3-menu site-menu-item ">Information Technology</a>                     <a id="site-menu-SIDE-88742273081620" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742273081620&amp;params=Job" class="w3-menu site-menu-item ">Sales / Customer Service / Business Development</a>                     <select class="site-select" onchange="switch_category_option(this.value,'Job');" id="select-SIDE-job">  <option value="">-- Select job category --</option>  <option value="88742272048107">Accounting and auditing</option><option value="88742272029719">&nbsp;&nbsp;&nbsp;&nbsp;Accounting / Treasury</option><option value="88742272104813">&nbsp;&nbsp;&nbsp;&nbsp;Audit / Tax</option><option value="88742272446849">&nbsp;&nbsp;&nbsp;&nbsp;Enterprise</option><option value="88742272066741">Administration and Human Resources</option><option value="88742272085894">&nbsp;&nbsp;&nbsp;&nbsp;Administrative / Operation</option><option value="88742272275375">&nbsp;&nbsp;&nbsp;&nbsp;Clerical / Reception</option><option value="88742272542939">&nbsp;&nbsp;&nbsp;&nbsp;Human Resources</option><option value="88742273101096">&nbsp;&nbsp;&nbsp;&nbsp;Secretary / Personal Assistant</option><option value="88742273177852">&nbsp;&nbsp;&nbsp;&nbsp;Training and Development</option><option value="88742272123644">Banking / Finance</option><option value="88742272178882">&nbsp;&nbsp;&nbsp;&nbsp;Business / Retail / Private / Investment</option><option value="88742272613042">&nbsp;&nbsp;&nbsp;&nbsp;Internal control</option><option value="88742272666505">&nbsp;&nbsp;&nbsp;&nbsp;Loan / Credit analysis and approval / Mortgage</option><option value="88742273198718">&nbsp;&nbsp;&nbsp;&nbsp;Transactions / Securities</option><option value="90750309385881">Beauty / Health</option><option value="90750685739618">&nbsp;&nbsp;&nbsp;&nbsp;Sports / Leisure</option><option value="90750704454284">&nbsp;&nbsp;&nbsp;&nbsp;Beautician</option><option value="90750720261881">&nbsp;&nbsp;&nbsp;&nbsp;Nutritionist</option><option value="88742272160553">Building / Construction</option><option value="88742272142559">&nbsp;&nbsp;&nbsp;&nbsp;Building</option><option value="90750800831927">&nbsp;&nbsp;&nbsp;&nbsp;Architecture</option><option value="88742272761749">&nbsp;&nbsp;&nbsp;&nbsp;Measurement / Civil / Structural</option><option value="88742272352523">Design</option><option value="88742272464769">&nbsp;&nbsp;&nbsp;&nbsp;Fashion</option><option value="88742272505994">&nbsp;&nbsp;&nbsp;&nbsp;Graphic Design</option><option value="88742272593378">&nbsp;&nbsp;&nbsp;&nbsp;Interior Design</option><option value="88745262127608">&nbsp;&nbsp;&nbsp;&nbsp;Watches / Jewelry</option><option value="88742273239003">&nbsp;&nbsp;&nbsp;&nbsp;Web Design</option><option value="88742272371046">Education</option><option value="88742272819829">&nbsp;&nbsp;&nbsp;&nbsp;Mentor / Teacher / Professor</option><option value="88742272428035">Engineering</option><option value="88742272256791">&nbsp;&nbsp;&nbsp;&nbsp;Chemical industry</option><option value="88742272390382">&nbsp;&nbsp;&nbsp;&nbsp;Electricity / Electronics</option><option value="88742272703893">&nbsp;&nbsp;&nbsp;&nbsp;Manufacturing / Production</option><option value="88742272781707">&nbsp;&nbsp;&nbsp;&nbsp;Mechanical</option><option value="90750367478040">Hotel / Catering</option><option value="90750895055263">&nbsp;&nbsp;&nbsp;&nbsp;Food and Beverage</option><option value="90750916284914">&nbsp;&nbsp;&nbsp;&nbsp;Hotel Service</option><option value="90750951236877">&nbsp;&nbsp;&nbsp;&nbsp;Tourism / Travel Agency</option><option value="11">Information Technology</option><option value="88742272524318">&nbsp;&nbsp;&nbsp;&nbsp;Hardware</option><option value="88742272838252">&nbsp;&nbsp;&nbsp;&nbsp;Mobile / Wireless communications</option><option value="88742272856504">&nbsp;&nbsp;&nbsp;&nbsp;Network / Support</option><option value="88742272927564">&nbsp;&nbsp;&nbsp;&nbsp;Project Management</option><option value="88742273138403">&nbsp;&nbsp;&nbsp;&nbsp;Software Development</option><option value="88742273259016">&nbsp;&nbsp;&nbsp;&nbsp;Webmaster / SEO</option><option value="88744230610458">Insurance</option><option value="88742272574568">&nbsp;&nbsp;&nbsp;&nbsp;Insurance agent / Broker</option><option value="88742272684937">Management</option><option value="88742272486086">&nbsp;&nbsp;&nbsp;&nbsp;General management</option><option value="88742273119960">&nbsp;&nbsp;&nbsp;&nbsp;Senior management</option><option value="89939774169064">Manufacture</option><option value="89939817337212">&nbsp;&nbsp;&nbsp;&nbsp;Apparel / Textile</option><option value="89939875365040">&nbsp;&nbsp;&nbsp;&nbsp;Product Development / Management</option><option value="88742272741775">Marketing / Public Relations</option><option value="88742272722708">&nbsp;&nbsp;&nbsp;&nbsp;Marketing</option><option value="88742273006712">&nbsp;&nbsp;&nbsp;&nbsp;Public Relations</option><option value="88742272800828">Media and advertising</option><option value="90751110237849">&nbsp;&nbsp;&nbsp;&nbsp;Broadcast - TV/Radio</option><option value="88742272315065">&nbsp;&nbsp;&nbsp;&nbsp;Creative / Design</option><option value="90751149351962">&nbsp;&nbsp;&nbsp;&nbsp;Editor / Journalism</option><option value="88742272888702">&nbsp;&nbsp;&nbsp;&nbsp;Photography / Video</option><option value="90751177038491">&nbsp;&nbsp;&nbsp;&nbsp;Print Media</option><option value="118348238266243">&nbsp;&nbsp;&nbsp;&nbsp;Event Management</option><option value="90750433780067">Medical</option><option value="90751237703986">&nbsp;&nbsp;&nbsp;&nbsp;Doctor</option><option value="90751254301929">&nbsp;&nbsp;&nbsp;&nbsp;Nursing / Care</option><option value="88742272909400">Professional services</option><option value="88742272198671">&nbsp;&nbsp;&nbsp;&nbsp;Business Consulting</option><option value="88742272295448">&nbsp;&nbsp;&nbsp;&nbsp;Company Secretary</option><option value="88742272648894">&nbsp;&nbsp;&nbsp;&nbsp;Legal</option><option value="88742273218982">&nbsp;&nbsp;&nbsp;&nbsp;Translation</option><option value="88742272947786">Property / Real estate</option><option value="88742272967780">&nbsp;&nbsp;&nbsp;&nbsp;Property Consultants</option><option value="88742272987661">&nbsp;&nbsp;&nbsp;&nbsp;Property Management</option><option value="90750511993217">Government / Social Services</option><option value="90751329150175">&nbsp;&nbsp;&nbsp;&nbsp;Civil servants</option><option value="90751347363890">&nbsp;&nbsp;&nbsp;&nbsp;Social Services / NGO</option><option value="89939281025964">Purchase</option><option value="89939324602123">&nbsp;&nbsp;&nbsp;&nbsp;Clothing</option><option value="89939439270007">&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option><option value="89939505611489">&nbsp;&nbsp;&nbsp;&nbsp;Toys / Watches</option><option value="88742273025616">Research / Laboratory</option><option value="88742272409675">&nbsp;&nbsp;&nbsp;&nbsp;Energy</option><option value="88742272630490">&nbsp;&nbsp;&nbsp;&nbsp;Laboratory</option><option value="88742273044249">&nbsp;&nbsp;&nbsp;&nbsp;Research and Development</option><option value="88742273081620">Sales / Customer Service / Business Development</option><option value="88742272011081">&nbsp;&nbsp;&nbsp;&nbsp;Account Services</option><option value="88742272218687">&nbsp;&nbsp;&nbsp;&nbsp;Business Development</option><option value="88742272238322">&nbsp;&nbsp;&nbsp;&nbsp;Channel / Distribution</option><option value="88742272333635">&nbsp;&nbsp;&nbsp;&nbsp;Customer Service</option><option value="88742273062887">&nbsp;&nbsp;&nbsp;&nbsp;Retail</option><option value="88742273157666">&nbsp;&nbsp;&nbsp;&nbsp;Telemarketing</option><option value="88742273280052">&nbsp;&nbsp;&nbsp;&nbsp;Wholesale</option><option value="90750555640833">Transportation / Logistic</option><option value="90751419200857">&nbsp;&nbsp;&nbsp;&nbsp;Aviation</option><option value="90751439243217">&nbsp;&nbsp;&nbsp;&nbsp;Freight</option><option value="90751461241786">&nbsp;&nbsp;&nbsp;&nbsp;Inventory / Warehouse</option><option value="90751479281023">&nbsp;&nbsp;&nbsp;&nbsp;Shipping</option><option value="90751507050257">&nbsp;&nbsp;&nbsp;&nbsp;Transportation</option><option value="88020923215666">Other</option><option value="90751594518160">&nbsp;&nbsp;&nbsp;&nbsp;Agriculture / Forestry / Fisheries</option><option value="90751627158195">&nbsp;&nbsp;&nbsp;&nbsp;Entertainment - Artist / Singer / Musician</option><option value="90751646370720">&nbsp;&nbsp;&nbsp;&nbsp;Security</option><option value="90751675496963">&nbsp;&nbsp;&nbsp;&nbsp;Student / Graduate / No experience</option><option value="90751707884094">&nbsp;&nbsp;&nbsp;&nbsp;Technician</option><option value="90751765078264">&nbsp;&nbsp;&nbsp;&nbsp;Trading</option></select>   </div><a id="site-menu-SIDE-18" href="javascript: toggle_menu('SIDE', '18'); void(0);" class="w3-menu site-menu-item ">Employers</a><div name="site-submenu-SIDE" id="site-submenu-SIDE-18" class="w3-small w3-hide ">   <a id="site-menu-SIDE-All-18" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530031&amp;params=AllEmpl" class="w3-menu site-menu-item">List All</a><a id="site-menu-SIDE-86555632061031" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=86555632061031&amp;params=Employer" class="w3-menu site-menu-item ">Premium Employer</a>                        <select class="site-select" onchange="switch_category_option(this.value,'Employer');" id="select-SIDE-employer">  <option value="">-- Select industry --</option>  <option value="88764836752249">Banking / Finance</option><option value="88764491317706">Education and Training</option><option value="88764491337888">Human Resource Management / Consultants</option><option value="88764734221015">Information Technology</option><option value="88764889747013">Insurance </option><option value="88764491382671">Manufacturing - Electronics / Toys / Clothing / Other</option><option value="89941006587999">Marketing / Advertising / Public Relations</option><option value="88764491401731">Property / Security</option><option value="88764491420196">Retail / Wholesale</option><option value="88764491438708">Telecommunications</option><option value="88764491456778">Transport</option><option value="88765207819443">Other </option></select></div><a id="site-menu-SIDE-4" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=4&amp;params=News" class="w3-menu site-menu-item ">Updated News</a>                     <a id="site-menu-SIDE-17" href="javascript: toggle_menu('SIDE', '17'); void(0);" class="w3-menu site-menu-item ">Locations</a><div name="site-submenu-SIDE" id="site-submenu-SIDE-17" class="w3-small w3-hide ">      <a id="site-menu-SIDE-6" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=6&amp;params=NIL" class="w3-menu site-menu-item ">Hong Kong</a>                     <a id="site-menu-SIDE-84589660097957" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=84589660097957&amp;params=NIL" class="w3-menu site-menu-item ">Japan</a>                     <a id="site-menu-SIDE-7" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=7&amp;params=NIL" class="w3-menu site-menu-item ">Taiwan</a>                     <a id="site-menu-SIDE-8" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=8&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Cambodia</a>                     <a id="site-menu-SIDE-9" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=9&amp;params=NIL" class="w3-menu site-menu-item ">Singapore</a>                     <a id="site-menu-SIDE-88020869413409" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020869413409&amp;params=NIL" class="w3-menu site-menu-item ">UK</a>                     <a id="site-menu-SIDE-88020883048761" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020883048761&amp;params=NIL" class="w3-menu site-menu-item ">China</a>                     <a id="site-menu-SIDE-91780884393455" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=91780884393455&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Bangladesh</a>                     <a id="site-menu-SIDE-93683909360354" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93683909360354&amp;params=NIL" class="w3-menu site-menu-item w3-hide">India</a>                     <a id="site-menu-SIDE-88020836996040" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020836996040&amp;params=NIL" class="w3-menu site-menu-item ">USA</a>                     <a id="site-menu-SIDE-93724740092753" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93724740092753&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Netherlands</a>                     <a id="site-menu-SIDE-93723321836316" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93723321836316&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Poland</a>                     <a id="site-menu-SIDE-90096758751010" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=90096758751010&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Vietnam</a>                     <a id="site-menu-SIDE-94156018167009" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94156018167009&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Philippines</a>                     <a id="site-menu-SIDE-94506105698149" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94506105698149&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Belgium</a>                     <a id="site-menu-SIDE-94764553150924" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94764553150924&amp;params=NIL" class="w3-menu site-menu-item w3-hide">Australia</a>                     <a id="site-menu-SIDE-95473571064737" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=95473571064737&amp;params=NIL" class="w3-menu site-menu-item ">South Africa</a>                     <a id="site-menu-SIDE-95974680385655" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=95974680385655&amp;params=NIL" class="w3-menu site-menu-item ">Korea</a>                           </div><a id="site-menu-SIDE-1" href="javascript: toggle_menu('SIDE', '1'); void(0);" class="w3-menu site-menu-item ">About Us</a><div name="site-submenu-SIDE" id="site-submenu-SIDE-1" class="w3-small w3-hide ">      <a id="site-menu-SIDE-109034293507595" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=1&amp;params=109034293507595" class="w3-menu site-menu-item ">About CoolJobz.com</a>                     <a id="site-menu-SIDE-98491680147395" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=98491295477220&amp;params=98491680147395" class="w3-menu site-menu-item ">For Company</a>                     <a id="site-menu-SIDE-98495922448088" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=98495858708743&amp;params=98495922448088" class="w3-menu site-menu-item ">For Individual</a>                     <a id="site-menu-SIDE-98591095668073" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=98591095668073&amp;params=Job" class="w3-menu site-menu-item ">Join Us</a>                           </div><a id="site-menu-SIDE-109035225404681" href="javascript: toggle_menu('SIDE', '109035225404681'); void(0);" class="w3-menu site-menu-item ">Our Products</a><div name="site-submenu-SIDE" id="site-submenu-SIDE-109035225404681" class="w3-small w3-hide ">      <a id="site-menu-SIDE-109036424547333" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=109036291980916&amp;params=109036424547333" class="w3-menu site-menu-item ">Job Ad</a>                     <a id="site-menu-SIDE-90017781708281" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=90007567793998&amp;params=90017781708281" class="w3-menu site-menu-item ">CoolJobzHRM</a>                           </div>

  
  <a href="javascript: toggle_menu('SIDE', 'profile'); void(0);" class="w3-menu site-menu-item" id="site-menu-SIDE-profile"><i class="fa fa-id-badge"></i> CHAN TAI MAN</a>
    <div name="site-submenu-SIDE" id="site-submenu-SIDE-profile" class="w3-small w3-hide">
      <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530017" class="w3-menu w3-lime site-menu-item"><i class="fa fa-user"></i> Edit Profile</a>
      <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530072&amp;params=NIL" class="w3-menu w3-lime site-menu-item"><i class="fa fa-heart"></i> My Favourite</a>
  
  
      <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530026" class="w3-menu w3-lime site-menu-item"><i class="fa fa-id-badge"></i> My Resume</a>
  
     
  
      <a name="bar-appl" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530038&amp;params=NIL" class="w3-menu w3-lime site-menu-item"><i class="fa fa-arrows-h"></i> Job Application</a>
  
  
      <a name="bar-hrm" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530061&amp;params=NIL" class="w3-menu w3-amber site-menu-item"><i class="fa fa-building"></i> My Employers</a>
  
     
  
      <a name="bar-hrm" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Leaves*Sand*SFlag*x~Disabled" class="w3-menu w3-amber site-menu-item"><i class="fa fa-plane"></i> Leaves</a>
      <a name="bar-hrm" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Claims*Sand*SFlag*x~Disabled" class="w3-menu w3-amber site-menu-item"><i class="fa fa-taxi"></i> Claims</a>
      <a name="bar-hrm" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Payroll*Sand*SFlag*x~Disabled" class="w3-menu w3-amber site-menu-item"><i class="fa fa-money"></i> Payroll</a>
      <a name="bar-hrm" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530066&amp;params=NIL,Flag~Attendance*Sand*SFlag*x~Disabled" class="w3-menu w3-amber site-menu-item"><i class="fa fa-clock-o"></i> Attendance</a>
      <a name="bar-hrm" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530078&amp;dbname=site_Application&amp;key=NIL" class="w3-menu w3-amber site-menu-item"><i class="fa fa-calendar"></i> Schedule</a>

    </div>
  <a href="./rlogout" class="w3-menu site-menu-item"><i class="fa fa-sign-out"></i> Sign Out</a>
  
     
</nav>

  <head>
    <title>MBTI Test</title>
	<meta charset="utf-8" />
    <meta http-equiv="expires" content="<?php echo date('r');?>" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="content-language" content="en" />
	<!-- <meta name="author" content="Cahya DSN" /> -->
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<meta name="keywords" content="MBTI, personality, test" />
	<meta name="description" content="MBTI (Myer Briggs Type Indicator) Personality Test ver <?php echo $version;?> " />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="<?php echo _ASSET;?>img/favicon.ico" type="image/x-icon">
	<?php if(_ISONLINE):?>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
	<?php else:?>
		<link rel="stylesheet" href="<?php echo _ASSET;?>css/w3.css">
		<link rel="stylesheet" href="<?php echo _ASSET;?>css/w3-theme-<?php echo $c;?>.css" media="all" id="mbti_css">
	<?php endif;?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<style>body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif} td.incomplete {color:red !important;}
		.w3-closebtn {text-decoration: none;float: right;font-size: 24px;font-weight: bold;color: inherit;} .w16left{padding-left:16px !important;}</style>
	<?php if(_ISONLINE):?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<?php else:?>
		<script src="<?php echo _ASSET;?>js/jquery.min.js"></script>
	<?php endif;?>
  </head>
  <body>
			<div class="w3-container">
				<h2>&nbsp;</h2>
				<br>
				<div class="w3-card-4">
					<h1 class='w3-padding w3-theme-d1'><?php echo $data['symbol'];?></h1>
					<h2 class='w3-theme-l2' style='padding-left:20px;'><em><?php echo $data['short'];?></em></h2>
					<div class='w3-container'>
						<div class='result'>
							<b>Description</b><br />
							<?php echo $data['description'];?>
						</div>
						<div class='result'>
							<b>Jungian functional preference ordering:</b><br />
							<?php echo $data['ordering'];?>
						</div>
						</div>
						<h2 class='w3-theme-l3' style='padding-left:20px;'><?php echo $data['symbol'];?> Relationships</h2>
						<div class='w3-container'>
							<div class='result'>
								<?php echo $data['relationships'];?>
							</div>
							<div class='result'>
								<b><?php echo $data['symbol'];?> Strengths:</b><br />
								<?php echo $data['strengths'];?>
							</div>
							<div class='result'>
								<b><?php echo $data['symbol'];?> Weakness:</b><br />
								<?php echo $data['weakness'];?>
							</div>
							
						</div>
						<h2 class='w3-theme-l3' style='padding-left:20px;'><?php echo $data['symbol'];?> Personality Growth</h2>
						<div class='w3-container'>
							<div class='result'>
								<p>Perhaps the most important realization that an individual can make in their quest for personal growth is that there is no single formula that defines the path to personal success. We all have different goals and priorities, which means that different activities and attitudes will make us feel good about ourselves. We also have different natural strengths and weaknesses that are a part of our inherent personality type. How then, as individuals, can we feel successful in our lives?</p>
								<b>What does Success mean to an <?php echo $data['symbol'];?>?:</b><br />
								<?php echo $data['success_mean'];?>
							</div>
							<div class='result'>
								<b>Allowing Your <?php echo $data['symbol'];?> Strengths to Flourish:</b><br />
								<?php echo $data['flourish_strengths'];?>
							</div>
							<div class='result'>
								<b>Potential Problem Areas:</b><br />
								<?php echo $data['problems'];?>
							</div>
							<div class='result'>
								<b>Explanation of Problems:</b><br />
								<?php echo $data['problems_explanation'];?>
							</div>
							<div class='result'>
								<b>Solutions:</b><br />
								<?php echo $data['solutions'];?>
							</div>
							<div class='result'>
								<b>Living Happily in our World as an <?php echo $data['symbol'];?></b><br />
								<?php echo $data['living'];?>
							</div>
							<div class='result'>
								<b>Specific suggestions:</b><br />
								<?php echo $data['suggestions'];?>
							</div>
							<div class='result'>
								<b>Ten Rules to Live By to Achieve <?php echo $data['symbol'];?> Success</b><br />
								<?php echo $data['ten_rules'];?>
							</div>
						</div>
						<h2 class='w3-theme-l3' style='padding-left:20px;'>Careers for <?php echo $data['symbol'];?> Personality Type</h2>
						<div class='w3-container'>
							<p>Whether you're a young adult trying to find your place in the world, or a not-so-young adult trying to find out if you're moving along the right path, it's important to understand yourself and the personality traits that will impact your likeliness to succeed or fail at various careers. It's equally important to understand what is really important to you. When armed with an understanding of your strengths and weaknesses, and an awareness of what you truly value, you are in an excellent position to pick a career that you will find rewarding.</p>
							<div class='result'>
								<b><?php echo $data['symbol'];?>s generally have the following traits:</b><br />
								<?php echo $data['traits'];?>
							</div>
							<div class='result'>
								<b>Possible Career Paths for the <?php echo $data['symbol'];?></b><br />
								<?php echo $data['profession'];?>
							</div>
							<div class='result'>
								<b>Partner:</b><br />
								<?php echo $data['partner'];?>
							</div>
						</div>
						<h2>&nbsp;</h2>
					</div>
				</div>
			</div>
			<!-- Footer -->
<div class="w3-display-container site-footer" style="background-image: url('https://www.cooljobz.com/dbp/images/cooljobz/contact_cooljobz.jpg');" id="contact">
  <div class="w3-display-right w3-black w3-opacity-min w3-padding-large w3-margin-right w3-twothird">
    <h3 class="w3-center">Contact Us</h3>
    <div class="w3-section">
      
<p class="w3-hide-small w3-hide-medium" dir="ltr">We need your feedback to make Cooljobz.com continuous improvement. If you have any satisfaction or dissatisfaction, or encounter any problems in the use of the process, you are welcome to our attention that on Cooljobz.com.&nbsp;</p>
<div>
<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td align="right">Tel:&nbsp;</td>
<td><span>3188 4978</span></td>
</tr>
<tr>
<td align="right">Email:&nbsp;</td>
<td><a href="mailto:cs@cooljobz.com" target="_blank">cs@cooljobz.com</a></td>
</tr>
</tbody>
</table>
</div>
<p dir="ltr">Want to Post an Advertisement?</p>
<p dir="ltr">Please call or email to understand advertising details:</p>
<div class="content_grey_box content_grey_box_bottom">
<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td align="right">Tel:&nbsp;</td>
<td>3188 4978</td>
</tr>
<tr>
<td align="right">Email:&nbsp;</td>
<td><a href="mailto:cs@cooljobz.com" target="_blank">cs@cooljobz.com</a></td>
</tr>
</tbody>
</table>
</div>


    </div>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-32">
  <div class="w3-xlarge w3-section">
    <a target="_blank" href="https://www.facebook.com/Cooljobz" class="w3-hover-opacity"><i class="fa fa-facebook-official"></i></a> &nbsp;
       
    ??2022 <a href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530001" class="w3-hover-opacity site-link">CoolJobz.com</a>
  </div>
  <div><a id="site-menu-BTM-10" href="javascript: toggle_menu('BTM', '10'); void(0);" class="w3-menu  ">Jobs</a><div name="site-submenu-BTM" id="site-submenu-BTM-10" class="w3-small w3-hide site-submenu-btm"><a id="site-menu-BTM-All-10" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530031&amp;params=AllJb" class="w3-menu ">List All</a>   <a id="site-menu-BTM-3" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=3&amp;params=Job" class="w3-menu  ">Recommended Job</a>                     <a id="site-menu-BTM-88742272048107" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272048107&amp;params=Job" class="w3-menu  ">Accounting and auditing</a>                     <a id="site-menu-BTM-88742272066741" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272066741&amp;params=Job" class="w3-menu  ">Administration and Human Resources</a>                     <a id="site-menu-BTM-88742272123644" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742272123644&amp;params=Job" class="w3-menu  ">Banking / Finance</a>                     <a id="site-menu-BTM-11" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=11&amp;params=Job" class="w3-menu  ">Information Technology</a>                     <a id="site-menu-BTM-88742273081620" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88742273081620&amp;params=Job" class="w3-menu  ">Sales / Customer Service / Business Development</a>                     <select class="site-select" onchange="switch_category_option(this.value,'Job');" id="select-BTM-job">  <option value="">-- Select job category --</option>  <option value="88742272048107">Accounting and auditing</option><option value="88742272029719">&nbsp;&nbsp;&nbsp;&nbsp;Accounting / Treasury</option><option value="88742272104813">&nbsp;&nbsp;&nbsp;&nbsp;Audit / Tax</option><option value="88742272446849">&nbsp;&nbsp;&nbsp;&nbsp;Enterprise</option><option value="88742272066741">Administration and Human Resources</option><option value="88742272085894">&nbsp;&nbsp;&nbsp;&nbsp;Administrative / Operation</option><option value="88742272275375">&nbsp;&nbsp;&nbsp;&nbsp;Clerical / Reception</option><option value="88742272542939">&nbsp;&nbsp;&nbsp;&nbsp;Human Resources</option><option value="88742273101096">&nbsp;&nbsp;&nbsp;&nbsp;Secretary / Personal Assistant</option><option value="88742273177852">&nbsp;&nbsp;&nbsp;&nbsp;Training and Development</option><option value="88742272123644">Banking / Finance</option><option value="88742272178882">&nbsp;&nbsp;&nbsp;&nbsp;Business / Retail / Private / Investment</option><option value="88742272613042">&nbsp;&nbsp;&nbsp;&nbsp;Internal control</option><option value="88742272666505">&nbsp;&nbsp;&nbsp;&nbsp;Loan / Credit analysis and approval / Mortgage</option><option value="88742273198718">&nbsp;&nbsp;&nbsp;&nbsp;Transactions / Securities</option><option value="90750309385881">Beauty / Health</option><option value="90750685739618">&nbsp;&nbsp;&nbsp;&nbsp;Sports / Leisure</option><option value="90750704454284">&nbsp;&nbsp;&nbsp;&nbsp;Beautician</option><option value="90750720261881">&nbsp;&nbsp;&nbsp;&nbsp;Nutritionist</option><option value="88742272160553">Building / Construction</option><option value="88742272142559">&nbsp;&nbsp;&nbsp;&nbsp;Building</option><option value="90750800831927">&nbsp;&nbsp;&nbsp;&nbsp;Architecture</option><option value="88742272761749">&nbsp;&nbsp;&nbsp;&nbsp;Measurement / Civil / Structural</option><option value="88742272352523">Design</option><option value="88742272464769">&nbsp;&nbsp;&nbsp;&nbsp;Fashion</option><option value="88742272505994">&nbsp;&nbsp;&nbsp;&nbsp;Graphic Design</option><option value="88742272593378">&nbsp;&nbsp;&nbsp;&nbsp;Interior Design</option><option value="88745262127608">&nbsp;&nbsp;&nbsp;&nbsp;Watches / Jewelry</option><option value="88742273239003">&nbsp;&nbsp;&nbsp;&nbsp;Web Design</option><option value="88742272371046">Education</option><option value="88742272819829">&nbsp;&nbsp;&nbsp;&nbsp;Mentor / Teacher / Professor</option><option value="88742272428035">Engineering</option><option value="88742272256791">&nbsp;&nbsp;&nbsp;&nbsp;Chemical industry</option><option value="88742272390382">&nbsp;&nbsp;&nbsp;&nbsp;Electricity / Electronics</option><option value="88742272703893">&nbsp;&nbsp;&nbsp;&nbsp;Manufacturing / Production</option><option value="88742272781707">&nbsp;&nbsp;&nbsp;&nbsp;Mechanical</option><option value="90750367478040">Hotel / Catering</option><option value="90750895055263">&nbsp;&nbsp;&nbsp;&nbsp;Food and Beverage</option><option value="90750916284914">&nbsp;&nbsp;&nbsp;&nbsp;Hotel Service</option><option value="90750951236877">&nbsp;&nbsp;&nbsp;&nbsp;Tourism / Travel Agency</option><option value="11">Information Technology</option><option value="88742272524318">&nbsp;&nbsp;&nbsp;&nbsp;Hardware</option><option value="88742272838252">&nbsp;&nbsp;&nbsp;&nbsp;Mobile / Wireless communications</option><option value="88742272856504">&nbsp;&nbsp;&nbsp;&nbsp;Network / Support</option><option value="88742272927564">&nbsp;&nbsp;&nbsp;&nbsp;Project Management</option><option value="88742273138403">&nbsp;&nbsp;&nbsp;&nbsp;Software Development</option><option value="88742273259016">&nbsp;&nbsp;&nbsp;&nbsp;Webmaster / SEO</option><option value="88744230610458">Insurance</option><option value="88742272574568">&nbsp;&nbsp;&nbsp;&nbsp;Insurance agent / Broker</option><option value="88742272684937">Management</option><option value="88742272486086">&nbsp;&nbsp;&nbsp;&nbsp;General management</option><option value="88742273119960">&nbsp;&nbsp;&nbsp;&nbsp;Senior management</option><option value="89939774169064">Manufacture</option><option value="89939817337212">&nbsp;&nbsp;&nbsp;&nbsp;Apparel / Textile</option><option value="89939875365040">&nbsp;&nbsp;&nbsp;&nbsp;Product Development / Management</option><option value="88742272741775">Marketing / Public Relations</option><option value="88742272722708">&nbsp;&nbsp;&nbsp;&nbsp;Marketing</option><option value="88742273006712">&nbsp;&nbsp;&nbsp;&nbsp;Public Relations</option><option value="88742272800828">Media and advertising</option><option value="90751110237849">&nbsp;&nbsp;&nbsp;&nbsp;Broadcast - TV/Radio</option><option value="88742272315065">&nbsp;&nbsp;&nbsp;&nbsp;Creative / Design</option><option value="90751149351962">&nbsp;&nbsp;&nbsp;&nbsp;Editor / Journalism</option><option value="88742272888702">&nbsp;&nbsp;&nbsp;&nbsp;Photography / Video</option><option value="90751177038491">&nbsp;&nbsp;&nbsp;&nbsp;Print Media</option><option value="118348238266243">&nbsp;&nbsp;&nbsp;&nbsp;Event Management</option><option value="90750433780067">Medical</option><option value="90751237703986">&nbsp;&nbsp;&nbsp;&nbsp;Doctor</option><option value="90751254301929">&nbsp;&nbsp;&nbsp;&nbsp;Nursing / Care</option><option value="88742272909400">Professional services</option><option value="88742272198671">&nbsp;&nbsp;&nbsp;&nbsp;Business Consulting</option><option value="88742272295448">&nbsp;&nbsp;&nbsp;&nbsp;Company Secretary</option><option value="88742272648894">&nbsp;&nbsp;&nbsp;&nbsp;Legal</option><option value="88742273218982">&nbsp;&nbsp;&nbsp;&nbsp;Translation</option><option value="88742272947786">Property / Real estate</option><option value="88742272967780">&nbsp;&nbsp;&nbsp;&nbsp;Property Consultants</option><option value="88742272987661">&nbsp;&nbsp;&nbsp;&nbsp;Property Management</option><option value="90750511993217">Government / Social Services</option><option value="90751329150175">&nbsp;&nbsp;&nbsp;&nbsp;Civil servants</option><option value="90751347363890">&nbsp;&nbsp;&nbsp;&nbsp;Social Services / NGO</option><option value="89939281025964">Purchase</option><option value="89939324602123">&nbsp;&nbsp;&nbsp;&nbsp;Clothing</option><option value="89939439270007">&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option><option value="89939505611489">&nbsp;&nbsp;&nbsp;&nbsp;Toys / Watches</option><option value="88742273025616">Research / Laboratory</option><option value="88742272409675">&nbsp;&nbsp;&nbsp;&nbsp;Energy</option><option value="88742272630490">&nbsp;&nbsp;&nbsp;&nbsp;Laboratory</option><option value="88742273044249">&nbsp;&nbsp;&nbsp;&nbsp;Research and Development</option><option value="88742273081620">Sales / Customer Service / Business Development</option><option value="88742272011081">&nbsp;&nbsp;&nbsp;&nbsp;Account Services</option><option value="88742272218687">&nbsp;&nbsp;&nbsp;&nbsp;Business Development</option><option value="88742272238322">&nbsp;&nbsp;&nbsp;&nbsp;Channel / Distribution</option><option value="88742272333635">&nbsp;&nbsp;&nbsp;&nbsp;Customer Service</option><option value="88742273062887">&nbsp;&nbsp;&nbsp;&nbsp;Retail</option><option value="88742273157666">&nbsp;&nbsp;&nbsp;&nbsp;Telemarketing</option><option value="88742273280052">&nbsp;&nbsp;&nbsp;&nbsp;Wholesale</option><option value="90750555640833">Transportation / Logistic</option><option value="90751419200857">&nbsp;&nbsp;&nbsp;&nbsp;Aviation</option><option value="90751439243217">&nbsp;&nbsp;&nbsp;&nbsp;Freight</option><option value="90751461241786">&nbsp;&nbsp;&nbsp;&nbsp;Inventory / Warehouse</option><option value="90751479281023">&nbsp;&nbsp;&nbsp;&nbsp;Shipping</option><option value="90751507050257">&nbsp;&nbsp;&nbsp;&nbsp;Transportation</option><option value="88020923215666">Other</option><option value="90751594518160">&nbsp;&nbsp;&nbsp;&nbsp;Agriculture / Forestry / Fisheries</option><option value="90751627158195">&nbsp;&nbsp;&nbsp;&nbsp;Entertainment - Artist / Singer / Musician</option><option value="90751646370720">&nbsp;&nbsp;&nbsp;&nbsp;Security</option><option value="90751675496963">&nbsp;&nbsp;&nbsp;&nbsp;Student / Graduate / No experience</option><option value="90751707884094">&nbsp;&nbsp;&nbsp;&nbsp;Technician</option><option value="90751765078264">&nbsp;&nbsp;&nbsp;&nbsp;Trading</option></select>   </div><a id="site-menu-BTM-18" href="javascript: toggle_menu('BTM', '18'); void(0);" class="w3-menu  ">Employers</a><div name="site-submenu-BTM" id="site-submenu-BTM-18" class="w3-small w3-hide site-submenu-btm">   <a id="site-menu-BTM-All-18" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;template=801543530031&amp;params=AllEmpl" class="w3-menu ">List All</a><a id="site-menu-BTM-86555632061031" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=86555632061031&amp;params=Employer" class="w3-menu  ">Premium Employer</a>                        <select class="site-select" onchange="switch_category_option(this.value,'Employer');" id="select-BTM-employer">  <option value="">-- Select industry --</option>  <option value="88764836752249">Banking / Finance</option><option value="88764491317706">Education and Training</option><option value="88764491337888">Human Resource Management / Consultants</option><option value="88764734221015">Information Technology</option><option value="88764889747013">Insurance </option><option value="88764491382671">Manufacturing - Electronics / Toys / Clothing / Other</option><option value="89941006587999">Marketing / Advertising / Public Relations</option><option value="88764491401731">Property / Security</option><option value="88764491420196">Retail / Wholesale</option><option value="88764491438708">Telecommunications</option><option value="88764491456778">Transport</option><option value="88765207819443">Other </option></select></div><a id="site-menu-BTM-4" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=4&amp;params=News" class="w3-menu  ">Updated News</a>                     <a id="site-menu-BTM-17" href="javascript: toggle_menu('BTM', '17'); void(0);" class="w3-menu  ">Locations</a><div name="site-submenu-BTM" id="site-submenu-BTM-17" class="w3-small w3-hide site-submenu-btm">      <a id="site-menu-BTM-6" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=6&amp;params=NIL" class="w3-menu  ">Hong Kong</a>                     <a id="site-menu-BTM-84589660097957" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=84589660097957&amp;params=NIL" class="w3-menu  ">Japan</a>                     <a id="site-menu-BTM-7" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=7&amp;params=NIL" class="w3-menu  ">Taiwan</a>                     <a id="site-menu-BTM-8" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=8&amp;params=NIL" class="w3-menu  w3-hide">Cambodia</a>                     <a id="site-menu-BTM-9" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=9&amp;params=NIL" class="w3-menu  ">Singapore</a>                     <a id="site-menu-BTM-88020869413409" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020869413409&amp;params=NIL" class="w3-menu  ">UK</a>                     <a id="site-menu-BTM-88020883048761" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020883048761&amp;params=NIL" class="w3-menu  ">China</a>                     <a id="site-menu-BTM-91780884393455" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=91780884393455&amp;params=NIL" class="w3-menu  w3-hide">Bangladesh</a>                     <a id="site-menu-BTM-93683909360354" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93683909360354&amp;params=NIL" class="w3-menu  w3-hide">India</a>                     <a id="site-menu-BTM-88020836996040" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=88020836996040&amp;params=NIL" class="w3-menu  ">USA</a>                     <a id="site-menu-BTM-93724740092753" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93724740092753&amp;params=NIL" class="w3-menu  w3-hide">Netherlands</a>                     <a id="site-menu-BTM-93723321836316" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=93723321836316&amp;params=NIL" class="w3-menu  w3-hide">Poland</a>                     <a id="site-menu-BTM-90096758751010" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=90096758751010&amp;params=NIL" class="w3-menu  w3-hide">Vietnam</a>                     <a id="site-menu-BTM-94156018167009" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94156018167009&amp;params=NIL" class="w3-menu  w3-hide">Philippines</a>                     <a id="site-menu-BTM-94506105698149" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94506105698149&amp;params=NIL" class="w3-menu  w3-hide">Belgium</a>                     <a id="site-menu-BTM-94764553150924" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=94764553150924&amp;params=NIL" class="w3-menu  w3-hide">Australia</a>                     <a id="site-menu-BTM-95473571064737" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=95473571064737&amp;params=NIL" class="w3-menu  ">South Africa</a>                     <a id="site-menu-BTM-95974680385655" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=95974680385655&amp;params=NIL" class="w3-menu  ">Korea</a>                           </div><a id="site-menu-BTM-1" href="javascript: toggle_menu('BTM', '1'); void(0);" class="w3-menu  ">About Us</a><div name="site-submenu-BTM" id="site-submenu-BTM-1" class="w3-small w3-hide site-submenu-btm">      <a id="site-menu-BTM-109034293507595" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=1&amp;params=109034293507595" class="w3-menu  ">About CoolJobz.com</a>                     <a id="site-menu-BTM-98491680147395" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=98491295477220&amp;params=98491680147395" class="w3-menu  ">For Company</a>                     <a id="site-menu-BTM-98495922448088" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=98495858708743&amp;params=98495922448088" class="w3-menu  ">For Individual</a>                     <a id="site-menu-BTM-98591095668073" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Category&amp;template=801543530002&amp;key=98591095668073&amp;params=Job" class="w3-menu  ">Join Us</a>                           </div><a id="site-menu-BTM-109035225404681" href="javascript: toggle_menu('BTM', '109035225404681'); void(0);" class="w3-menu  ">Our Products</a><div name="site-submenu-BTM" id="site-submenu-BTM-109035225404681" class="w3-small w3-hide site-submenu-btm">      <a id="site-menu-BTM-109036424547333" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=109036291980916&amp;params=109036424547333" class="w3-menu  ">Job Ad</a>                     <a id="site-menu-BTM-90017781708281" href="https://www.cooljobz.com/dbs/bdetail?share=cooljobz&amp;dbname=site_Post&amp;template=801543530003&amp;key=90007567793998&amp;params=90017781708281" class="w3-menu  ">CoolJobzHRM</a>                           </div>
</div>
</footer>
			

	</body>
</html>
<?php
}