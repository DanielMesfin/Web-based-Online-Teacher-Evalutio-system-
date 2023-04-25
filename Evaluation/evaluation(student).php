<?php

session_start();
include("TeacherTobeEvaluated.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evalution</title>
    <!-- <link rel="stylesheet" src="input.css"> -->
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="evaluation.css">
</head>
<body class="main">
 <div>
  <img src="assets/img/logo.jpg" class="logo">
    <h1 class="header-top">HARAMAYA UNIVERSITY</h1>
    <h2 class="header">STAFF TEACHING PERFORMANCE EVALUATION FORM FILLED BY STUDENTS</h2>

<div class="profile">
 <a href="prof2.html"><img src="../php/tinchel_admin.jpg" alt="profile" srcset=""/></a>
 <div class="admin_info">
     <p class="uname"><?php echo $_SESSION['User_Name']; ?></p>
     <button class="uname"><a href="#change_pwd"  onclick="passwordChange()">Change Password</a></button>
     <button class="uname"><a href="../index.html"  onclick="<?php session_reset(); ?>">Log Out</a></button>
 </div>
</div>

  <table border="3" class="table">
    <caption class="caption"> 
        <form action="#" method="post" class="table-form">
            <label for="#">Name of Instructor: <input type="text" maxlength="30"   id="name" readonly value="<?php echo $fname;?>"></label>
            <label for="#"> College: <input type="text" maxlength="30"  id="college" readonly  value="<?php echo $college;?>"></label>
            <label for="#">Department: <input type="text" maxlength="30"  id="dept" readonly ></label> <br><br>
            <label for="#">course taught(title):<input type="text" maxlength="30"  id="course" readonly></label>
            <label for="#">course code:<input type="text" maxlength="30"  id="cocode" readonly></label>
            <label for="#">Academic Year: <input type="number"  maxlength="30" id="year" readonly  value="<?php echo $ac_yr;?>"></label>
            <label for="#">Semester: <input type="number" max="2" min="1"  id="semester" readonly></label>
            <label for="#">Date : <input type="date"  id="date" readonly value="<?php echo $date?>"></label>
        </form>  
        <p> Instruction I: Answer each question to the level of your agreement or disagreement according to the following rating :</p> 
      <p>if you <em>strong agree mark <q>5</q></em>,if you just agree mark <q>4</q>,if you moderately mark <q>3</q>,if you disagree mark <q>2</q>,if you strongly disagree mark <q>1</q>,
      
      
      <form action="teacherResult(student).php" method="post" class="form">
          <tbody><tr><td colspan="8"><h3>performance criterion (please,tick or cross over a circle on the left-hand corner)</h3></td></tr></tbody>
          <tbody><tr><td>1</td><td>respected the principle of day-one-class-one(DOCO)AND used all allotted time for teaching/instruction.</td><td><input type="radio" name="1" value="1"></td><td><input type="radio" name="1" value="2"></td><td><input type="radio" name="1" value="3"></td><td><input type="radio" name="1" value="4"></td><td><input type="radio" name="1" value="5"></td><td></tr></tbody>
          <tbody><tr><td>2</td><td>used to come to class well prepared and organized to teach the corse </td><td><input type="radio" name="2" value="1"></td><td><input type="radio" name="2" value="2"></td><td><input type="radio" name="2" value="3"></td><td><input type="radio" name="2" value="4"></td><td><input type="radio" name="2" value="5"></td><td></tr></tbody>
          <tbody><tr><td>3</td><td>give a complete course outline during the first week of beginning teaching in class.</td><td><input type="radio" name="3" value="1"></td><td><input type="radio" name="3" value="2"></td><td><input type="radio" name="3" value="3"></td><td><input type="radio" name="3" value="4"></td><td><input type="radio" name="3" value="5"></td></td></tr></tbody>
          <tbody><tr><td>4</td><td>supported theorethical teaching in class with practical skills.</td><td><input type="radio" name="4" value="1"></td><td><input type="radio" name="4" value="2"></td><td><input type="radio" name="4" value="3"></td><td><input type="radio" name="4" value="4"></td><td><input type="radio" name="4" value="5"></td></td></tr></tbody>
          <tbody><tr><td>5</td><td>used appropriate instructional methods and teaching aids as required.</td><td><input type="radio" name="5" value="1"></td><td><input type="radio" name="5" value="2"></td><td><input type="radio" name="5" value="3"></td><td><input type="radio" name="5" value="4"></td><td><input type="radio" name="5" value="5"></td></td></tr></tbody>
          <tbody><tr><td>6</td><td>used only English as a medium of instructon rather than local language.</td><td><input type="radio" name="6" value="1"></td><td><input type="radio" name="6" value="2"></td><td><input type="radio" name="6" value="3"></td><td><input type="radio" name="6" value="4"></td><td><input type="radio" name="6" value="5"></td></td></tr></tbody>
          <tbody><tr><td>7</td><td>motivated students to ask questions and give comments in class </td><td><input type="radio" name="7" value="1"></td><td><input type="radio" name="7" value="2"></td><td><input type="radio" name="7" value="3"></td><td><input type="radio" name="7" value="4"></td><td><input type="radio" name="7" value="5"></td></td></tr></tbody>
          <tbody><tr><td>8</td><td>showed a strong motivatin to teach and make students gain knowledge and skills.</td><td><input type="radio" name="8" value="1"></td><td><input type="radio" name="8" value="2"></td><td><input type="radio" name="8" value="3"></td><td><input type="radio" name="8" value="4"></td><td><input type="radio" name="8" value="5"></td></td></tr></tbody>
          <tbody><tr><td>9</td><td>focused on the subject matter in class and did not digres ot divert the topic to irrelevant issues.</td><td><input type="radio" name="9" value="1"></td><td><input type="radio" name="9" value="2"></td><td><input type="radio" name="9" value="3"></td><td><input type="radio" name="9" value="4"></td><td><input type="radio" name="9" value="5"></td></td></tr></tbody>
          <tbody><tr><td>10</td><td>give exercise/assignments/term papers for Continuous assissment.</td><td><input type="radio" name="10" value="1"></td><td><input type="radio" name="10" value="2"></td><td><input type="radio" name="10" value="3"></td><td><input type="radio" name="10" value="4"></td><td><input type="radio" name="10" value="5"></td></td></tr></tbody>
          <tbody><tr><td>11</td><td>Set exam questions that are related to the topic covered in class and according to the syllabus.</td><td><input type="radio" name="11" value="1"></td><td><input type="radio" name="11" value="2"></td><td><input type="radio" name="11" value="3"></td><td><input type="radio" name="11" value="4"></td><td><input type="radio" name="11" value="5"></td></td></tr></tbody>
          <tbody><tr><td>12</td><td>Set conceptual exam questions that promote critical thincking rather than promothing rote taught.</td><td><input type="radio" name="12" value="1"></td><td><input type="radio" name="12" value="2"></td><td><input type="radio" name="12" value="3"></td><td><input type="radio" name="12" value="4"></td><td><input type="radio" name="12" value="5"></td></td></td></tr></tbody>
          <tbody><tr><td>13</td><td>Showed students their exam resuls and give feedback. </td><td><input type="radio" name="13" value="1"></td><td><input type="radio" name="13" value="2"></td><td><input type="radio" name="13" value="3"></td><td><input type="radio" name="13" value="4"></td><td><input type="radio" name="13" value="5"></td></td></tr></tbody>
          <tbody><tr><td>14</td><td>Was available in office for advising and helping students in the subjuct matter. </td><td><input type="radio" name="14" value="1"></td><td><input type="radio" name="14" value="2"></td><td><input type="radio" name="14" value="3"></td><td><input type="radio" name="14" value="4"></td><td><input type="radio" name="14" value="5"></td></td></tr></tbody>
          <tbody><tr><td>15</td><td>Has sufficiant knowledge and confidence in the subbject matter of course he/she taught</td><td><input type="radio" name="15" value="1"></td><td><input type="radio" name="15" value="2"></td><td><input type="radio" name="15" value="3"></td><td><input type="radio" name="15" value="4"></td><td><input type="radio" name="15" value="5"></td></td></tr></tbody>
          <tbody><tr><td>16</td><td>Did not dmoralized,lampoon,embarrass or insult students or used bad language against them.</td><td><input type="radio" name="16" value="1"></td><td><input type="radio" name="16" value="2"></td><td><input type="radio" name="16" value="3"></td><td><input type="radio" name="16" value="4"></td><td><input type="radio" name="16" value="5"></td></td></tr></tbody>
          <tbody><tr><td>17</td><td>Deliverd the subject matter of the course clearly in a way that students understood.</td><td><input type="radio" name="17" value="1"></td><td><input type="radio" name="17" value="2"></td><td><input type="radio" name="17" value="3"></td><td><input type="radio" name="17" value="4"></td><td><input type="radio" name="17" value="5"></td></td></tr></tbody>
          <tbody><tr><td>18</td><td>Was panctualor come to class in time and left after using all his/her time.<br> proposals for attracting and acquiring external and /or donor grants and resources for developing the institution </td><td><input type="radio" name="18" value="1"></td><td><input type="radio" name="18" value="2"></td><td><input type="radio" name="18" value="3"></td><td><input type="radio" name="18" value="4"></td><td><input type="radio" name="18" value="5"></td></td></tr></tbody>
          <tbody><tr><td>19</td><td>Did not miss normal class schedules and bother students will make-up classes.</td><td><input type="radio" name="19" value="1"></td><td><input type="radio" name="19" value="2"></td><td><input type="radio" name="19" value="3"></td><td><input type="radio" name="19" value="4"></td><td><input type="radio" name="19" value="5"></td></td></tr></tbody>
          <tbody><tr><td>20</td><td>Covered the whole topic of the course according to the syllabus</td><td><input type="radio" name="20" value="1"></td><td><input type="radio" name="20" value="2"></td><td><input type="radio" name="20" value="3"></td><td><input type="radio" name="20" value="4"></td><td><input type="radio" name="20" value="5"></td></td></tr></tbody>
          <tbody><tr><td>21</td><td>Treated students fairly and equitably,without any discrimination on any grounds whatsoever.<br> showing exam results to students, submission of grades / documents, etc.</td><td><input type="radio" name="21" value="1"></td><td><input type="radio" name="21" value="2"></td><td><input type="radio" name="21" value="3"></td><td><input type="radio" name="21" value="4"></td><td><input type="radio" name="21" value="5"></td></td></tr></tbody>
          <tbody><tr><td>22</td><td>Dressed appropriately for teaching (wore gowns,etc)and kept a good personal hygiene</td><td><input type="radio" name="22" value="1"></td><td><input type="radio" name="22" value="2"></td><td><input type="radio" name="22" value="3"></td><td><input type="radio" name="22" value="4"></td><td><input type="radio" name="22" value="5"></td></td></tr></tbody>
          </table>
         
            <p>write any other additional comments you may have about the instructor in regard to handiling this course as well as  about the subjuct matter of the course offered</p>
            
    <div class="last_form">
            <label for="#">Strengths of the instructor.<input type="textarea" col="220" rows="3" placeholder="Strengths of the instructor."></label>
             <br/>
            <label for="#">Suggested points/aspects the instructor should improve.<textarea rows="3" col="220" placeholder="Suggested points/aspects the instructor should improve."></textarea></label>
            <br><label for="#">Name of School/Department Head <input type="text" placeholder="Name of School/Department Head" maxlength="35" ></label> <label for="#">Signature <input type="text" placeholder="Signature" maxlength="10"></label> 
            <label for="#">Date: <input type="Date" placeholder="Date"></label>
            <!-- <input type="textarea" rows="3" col="220" placeholder="Suggested points/aspects the instructor should improve."> -->
            <br><br><br>
            <input class="button" type="submit"  value="SUBMIT" name="studentEvaluate formnovalidate> 
            <input class="button" id="reset"  type="reset" value="clear">
            <br><br><br><br>
    </div>
    
      </form>
    </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<form action="../php/operation.php" method="POST" class="form_change_p" id="popup">
        <div class="popup" id="popup">
       <div>
        <h2>Change password</h2>
      </div>
       <div>
         <label for="old_pwd">ID :
            <input type="text" name="ID"  placeholder="Enter ID"   id="id">
          </label>
        </div>
        <div>
          <label for="new_pwd">New Password :
            <input type="password" name="new_pwd"  placeholder="Enter New Password"   id="new_pwd"  required>
          </label>
      </div>
      <div>
         <input type="submit"  name="change_pwd_S" class="btn-submit" value="Save"  id="submit"/> 
         <input type="button"  name="change_pwd_S" class="btn-submit exit" value="Exit"  id="exit"/>
     </div>
      </div>
  </form>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<script src="login.js"></script>
<script src="Evaluation.js"></script>

   </body>
</html>