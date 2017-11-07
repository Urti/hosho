<?php
/**
 Template Name: Abstract
 */

get_header(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
window.onload=function(){
  document.getElementById("button").style.display='none';

}
function showButton(){
  document.getElementById("button").style.display='block';
}
</script>
<style>
.smart-green {
    margin-left:auto;
    margin-right:auto;

    max-width: auto;
    background: #F8F8F8;
    padding: 30px 30px 20px 30px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.smart-green h1 {
    font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
    padding: 20px 0px 20px 40px;
    display: block;
    margin: -30px -30px 10px -30px;
    color: #FFF;
    background: #9DC45F;
    text-shadow: 1px 1px 1px #949494;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    border-bottom:1px solid #89AF4C;

}
.smart-green h1>span {
    display: block;
    font-size: 11px;
    color: #FFF;
}

.smart-green label {
    display: block;
    margin: 0px 0px 5px;
}
.smart-green label>span {
    float: left;
    margin-top: 10px;
    color: #5E5E5E;
}
.smart-green input[type="text"], .smart-green input[type="email"], .smart-green textarea, .smart-green select {
    color: #555;
    height: 30px;
    line-height:15px;
    width: 100%;
    padding: 0px 0px 0px 10px;
    margin-top: 2px;
    border: 1px solid #E5E5E5;
    background: #FBFBFB;
    outline: 0;
    -webkit-box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    font: normal 14px/14px Arial, Helvetica, sans-serif;
}
.smart-green textarea{
    height:100px;
    padding-top: 10px;
}
.smart-green select {
    background: url('down-arrow.png') no-repeat right, -moz-linear-gradient(top, #FBFBFB 0%, #E9E9E9 100%);
    background: url('down-arrow.png') no-repeat right, -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FBFBFB), color-stop(100%,#E9E9E9));
   appearance:none;
    -webkit-appearance:none; 
   -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width:100%;
    height:30px;
}
.smart-green .button {
    background-color: #9DC45F;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-border-radius: 5px;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    text-shadow: 1px 1px 1px #949494;
}
.smart-green .button:hover {
    background-color:#80A24A;
}
</style>
<h1>Abstract Submission</h1><br /><br />
<strong>Abstract Submission – IC 1208 COST, Warsaw Meeting, 8th-9th September 2016</strong><br>

Abstracts must be prepared according to guidelines, presented in the template. The files must be uploaded in either MS Word (DOC or DOCX) or PDF formats.

<br /><br /><center>
<a href="http://ic1208-warsawmeeting.pl/wp-content/uploads/2016/07/Abstract-Template_Name.docx">
<i class="fa fa-download fa-3x"></i>
<br />
<em><strong>Download Abstract Template</strong></em></a></center>
<br />
<hr />
<br />
<form action="wp-content/themes/fruitful/upload/upload.php" method="post" enctype="multipart/form-data" class="smart-green">
<strong>REGISTRATION:</strong>
<br><br>
Title: <select name="title">
<option>Ms.</option>
<option>Mrs.</option>
<option>Mr.</option>
<option>Dr.</option>
<option>Prof.</option>
</select>
<br><br>
Name: <input name="name" required="" type="text" />
<br><br>
Surname: <input name="surname" required="" type="text" />
<br><br>
E-mail: <input name="email" required="" type="email" />
<br><br>
Affiliation (Name of the institution you are affiliated with):
<input name="affiliation" required="" type="text" />
<br><br>
Oral Presentation: <input name="oral" required="" type="radio" value="Yes" /> Yes <input name="oral" required="" type="radio" value="No" /> No
<br><br><br>
<strong>Upload Abstract <font color="red">(Please select your abstract file, DOC/DOCX/PDF files only and Maximum file size is 10 MB)</font></strong>
<br><br>
<input type="file" name="fileToUpload" id="fileToUpload">
<br><br>
<div class="g-recaptcha" data-sitekey="6LccACYTAAAAAOIdJ7wWvhjh-Wv-FsHp6PDpNC_K" data-callback="showButton"></div>
<br /><br />
<input type="submit" value="Submit" id="button" />
</form>
<br /><br /><br /><br />
<?php get_footer(); ?>
