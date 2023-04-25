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
     <img src="logo.jpg" class="logo">
    <h1 class="header-top">HARAMAYA UNIVERSITY</h1>
    <h2 class="header">INSTRUCTORS’ PERFORMANCE EVALUATION CHECKLIST FILLED<br/> BY PEERS</h2>
 </div>
  <!-- user profile -->
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
        <form action="#" method="post"  class="table-form">
            <label for="#">Name of Instructor: <input type="text" maxlength="30"  class="check_input" readonly value="<?php echo $fname;?>"></label>
            <label for="#">  College: <input type="text" maxlength="30"  class="check_input" readonly  value="<?php echo $college; ?>></label>
            <label for="#">School/ Department: <input type="text" maxlength="30"  class="check_input" readonly value="<?php echo $dept;?>"></label> <br><br>
            <label for="#">Academic Year: <input type="text"  maxlength="30" class="check_input" readonly value="<?php echo $ac_yr;?>"></label>
            <label for="#">Semester: <input type="number" max="2" min="1"  class="check_input" readonly></label>
            <label for="#">Date : <input type="date"  class="check_input" readonly value="<?php echo $date;?>"></label>
        </form>  
        <p> Instruction I: Indicate the performance of the instructor by circling one of the options against each. 
        1= Very Low (VL); 2= Low (LO) ; 3 = Average (AV) ; 4 = High  (HI) ; 5 = Very High (VH) NA “ Not Applicable ”</p></h4></caption>
      <thead><tr><td>No</td><td rowspan="2"><h3>Evaluation Criteria</h3></td><td><h3>VL</h3></td><td><h3>LO</h3></td><td><h3>AV</h3></td><td><h3>HI</h3></td><td><h3>VH</h3></td><td><h3>NA</h3></td> </tr></thead>
      <form action="teacherResult(peers).php" method="post" class="form">
          <tbody><tr><td colspan="8"><h3> A. Core Competency</h3></td></tr></tbody>
          <tbody><tr><td>1</td><td>Depth and breadth of subject matter knowledge</td><td><input type="radio" name="1" value="1"></td><td><input type="radio" name="1" value="2"></td><td><input type="radio" name="1" value="3"></td><td><input type="radio" name="1" value="4"></td><td><input type="radio" name="1" value="5"></td><td><input type="radio" name="1" value="6"></td></td></tr></tbody>
          <tbody><tr><td>2</td><td>Communication skills (written and oral or verbal and non-verbal) </td><td><input type="radio" name="2" value="1"></td><td><input type="radio" name="2" value="2"></td><td><input type="radio" name="2" value="3"></td><td><input type="radio" name="2" value="4"></td><td><input type="radio" name="2" value="5"></td><td><input type="radio" name="2" value="6"></td></td></tr></tbody>
          <tbody><tr><td>3</td><td>Planning skills </td><td><input type="radio" name="3" value="1"></td><td><input type="radio" name="3" value="2"></td><td><input type="radio" name="3" value="3"></td><td><input type="radio" name="3" value="4"></td><td><input type="radio" name="3" value="5"></td><td><input type="radio" name="3" value="6"></td></td></tr></tbody>
          <tbody><tr><td>4</td><td>Classroom management skills</td><td><input type="radio" name="4" value="1"></td><td><input type="radio" name="4" value="2"></td><td><input type="radio" name="4" value="3"></td><td><input type="radio" name="4" value="4"></td><td><input type="radio" name="4" value="5"></td><td><input type="radio" name="4" value="6"></td></td></tr></tbody>
          <tbody><tr><td>5</td><td>Research skills, analytical skills, and presentation skills</td><td><input type="radio" name="5" value="1"></td><td><input type="radio" name="5" value="2"></td><td><input type="radio" name="5" value="3"></td><td><input type="radio" name="5" value="4"></td><td><input type="radio" name="5" value="5"></td><td><input type="radio" name="5" value="6"></td></td></tr></tbody>
          <tbody><tr><td>6</td><td>Skills in developing and updating curriculum /course / teaching materials </td><td><input type="radio" name="6" value="1"></td><td><input type="radio" name="6" value="2"></td><td><input type="radio" name="6" value="3"></td><td><input type="radio" name="6" value="4"></td><td><input type="radio" name="6" value="5"></td><td><input type="radio" name="6" value="6"></td></td></tr></tbody>
          <tbody><tr><td>7</td><td>Technological skills (computer, ICT etc.)</td><td><input type="radio" name="7" value="1"></td><td><input type="radio" name="7" value="2"></td><td><input type="radio" name="7" value="3"></td><td><input type="radio" name="7" value="4"></td><td><input type="radio" name="7" value="5"></td><td><input type="radio" name="7" value="6"></td></td></tr></tbody>
          <tbody><tr><td>8</td><td>Instructional/ teaching skills (theoretical and practical)</td><td><input type="radio" name="8" value="1"></td><td><input type="radio" name="8" value="2"></td><td><input type="radio" name="8" value="3"></td><td><input type="radio" name="8" value="4"></td><td><input type="radio" name="8" value="5"></td><td><input type="radio" name="8" value="6"></td></td></tr></tbody>
          <tbody><tr><td>9</td><td>Assessment skills (formative, summative, feedback, grading, etc)</td><td><input type="radio" name="9" value="1"></td><td><input type="radio" name="9" value="2"></td><td><input type="radio" name="9" value="3"></td><td><input type="radio" name="9" value="4"></td><td><input type="radio" name="9" value="5"></td><td><input type="radio" name="9" value="6"></td></td></tr></tbody>
          <tbody><tr><td>10</td><td>Counselling and mentorship skills in educational development/ cooperative learning, internship, etc.</td><td><input type="radio" name="10" value="1"></td><td><input type="radio" name="10" value="2"></td><td><input type="radio" name="10" value="3"></td><td><input type="radio" name="10" value="4"></td><td><input type="radio" name="10" value="4"></td><td><input type="radio" name="10" value="4"></td></td></tr></tbody>
          <tbody><tr><td colspan="8"><h3>B.Professional Competence and Commitment</h3></td></tr></tbody>
          <tbody><tr><td>11</td><td>Participation in problem identification and solution at department /college/ institution levels</td><td><input type="radio" name="11" value="1"></td><td><input type="radio" name="11" value="2"></td><td><input type="radio" name="11" value="3"></td><td><input type="radio" name="11" value="4"></td><td><input type="radio" name="11" value="5"></td><td><input type="radio" name="11" value="6"></td></td></tr></tbody>
          <tbody><tr><td>12</td><td>Efforts of self-development in one’s area of specialization</td><td><input type="radio" name="12" value="1"></td><td><input type="radio" name="12" value="2"></td><td><input type="radio" name="12" value="3"></td><td><input type="radio" name="12" value="4"></td><td><input type="radio" name="12" value="5"></td><td><input type="radio" name="12" value="6"></td></td></tr></tbody>
          <tbody><tr><td>13</td><td>Efforts of improving quality of teaching and assessment </td><td><input type="radio" name="13" value="1"></td><td><input type="radio" name="13" value="2"></td><td><input type="radio" name="13" value="3"></td><td><input type="radio" name="13" value="4"></td><td><input type="radio" name="13" value="5"></td><td><input type="radio" name="13" value="6"></td></td></tr></tbody>
          <tbody><tr><td>14</td><td>Engagement in Continuous Professional Development (CPD)  </td><td><input type="radio" name="14" value="1"></td><td><input type="radio" name="14" value="2"></td><td><input type="radio" name="14" value="3"></td><td><input type="radio" name="14" value="4"></td><td><input type="radio" name="14" value="5"></td><td><input type="radio" name="14" value="6"></td></td></tr></tbody>
          <tbody><tr><td>15</td><td>Engagement in research, publication, and dissemination</td><td><input type="radio" name="15" value="1"></td><td><input type="radio" name="15" value="2"></td><td><input type="radio" name="15" value="3"></td><td><input type="radio" name="15" value="4"></td><td><input type="radio" name="15" value="5"></td><td><input type="radio" name="15" value="6"></td></td></tr></tbody>
          <tbody><tr><td>16</td><td>Participation in curriculum development and review</td><td><input type="radio" name="16" value="1"></td><td><input type="radio" name="16" value="2"></td><td><input type="radio" name="16" value="3"></td><td><input type="radio" name="16" value="4"></td><td><input type="radio" name="16" value="5"></td><td><input type="radio" name="16" value="6"></td></td></tr></tbody>
          <tbody><tr><td>17</td><td>Participation in university seminars /workshops or symposia, meetings, etc. </td><td><input type="radio" name="17" value="1"></td><td><input type="radio" name="17" value="2"></td><td><input type="radio" name="17" value="3"></td><td><input type="radio" name="17" value="4"></td><td><input type="radio" name="17" value="5"></td><td><input type="radio" name="17" value="6"></td></td></tr></tbody>
          <tbody><tr><td>18</td><td>Level of participation in joint and /or individually writing research and/or development <br> proposals for attracting and acquiring external and /or donor grants and resources for developing the institution </td><td><input type="radio" name="18" value="1"></td><td><input type="radio" name="18" value="2"></td><td><input type="radio" name="18" value="3"></td><td><input type="radio" name="18" value="4"></td><td><input type="radio" name="18" value="5"></td><td><input type="radio" name="18" value="6"></td></td></tr></tbody>
          <tbody><tr><td>19</td><td>Social skills (self-awareness, self-regulation, empathy)</td><td><input type="radio" name="19" value="1"></td><td><input type="radio" name="19" value="2"></td><td><input type="radio" name="19" value="3"></td><td><input type="radio" name="19" value="5"></td><td><input type="radio" name="19" value="7"></td><td><input type="radio" name="16" value="4"></td></td></tr></tbody>
          <tbody><tr><td colspan="8"><h3>C.Time Management</h3></td></tr></tbody>
          <tbody><tr><td>20</td><td>Punctuality (in class lectures, meetings, office work, workshops, etc.)</td><td><input type="radio" name="20" value="1"></td><td><input type="radio" name="20" value="2"></td><td><input type="radio" name="20" value="3"></td><td><input type="radio" name="20" value="4"></td><td><input type="radio" name="20" value="5"></td><td><input type="radio" name="20" value="6"></td></td></tr></tbody>
          <tbody><tr><td>21</td><td>Meeting deadlines in reporting through Student Information Management System (SIMS) including <br> showing exam results to students, submission of grades / documents, etc.</td><td><input type="radio" name="21" value="1"></td><td><input type="radio" name="21" value="2"></td><td><input type="radio" name="21" value="3"></td><td><input type="radio" name="21" value="4"></td><td><input type="radio" name="21" value="5"></td><td><input type="radio" name="21" value="6"></td></td></tr></tbody>
          <tbody><tr><td>22</td><td>Giving timely feedback to students</td><td><input type="radio" name="22" value="1"></td><td><input type="radio" name="22" value="2"></td><td><input type="radio" name="22" value="3"></td><td><input type="radio" name="22" value="4"></td><td><input type="radio" name="22" value="5"></td><td><input type="radio" name="22" value="6"></td></td></tr></tbody>
          <tbody><tr><td colspan="8"><h3>D.Professional Ethics and Motivation</h3></td></tr></tbody>
          <tbody><tr><td>23</td><td>Positive attitudes to work with others (team spirit)</td><td><input type="radio" name="23" value="1"></td><td><input type="radio" name="23" value="2"></td><td><input type="radio" name="23" value="3"></td><td><input type="radio" name="23" value="4"></td><td><input type="radio" name="23" value="5"></td><td><input type="radio" name="23" value="6"></td></td></tr></tbody>
          <tbody><tr><td>24</td><td>Intrinsic motivation to work for the sake of achievement and unflagging energy to improve i.e., passion <br> for work itself without expecting extra benefits</td><td><input type="radio" name="24" value="1"></td><td><input type="radio" name="24" value="2"></td><td><input type="radio" name="24" value="3"></td><td><input type="radio" name="24" value="4"></td><td><input type="radio" name="24" value="5"></td><td><input type="radio" name="24" value="6"></td></td></tr></tbody>
          <tbody><tr><td>25</td><td>Sense of responsibility and accountability for one’s duties and actions</td><td><input type="radio" name="25" value="1"></td><td><input type="radio" name="25" value="2"></td><td><input type="radio" name="25" value="3"></td><td><input type="radio" name="25" value="4"></td><td><input type="radio" name="25" value="5"></td><td><input type="radio" name="25" value="6"></td></td></tr></tbody>
          <tbody><tr><td>26</td><td>Readiness to accept extra teaching loads, committee work, student advisement and other academic assignments </td><td><input type="radio" name="26" value="1"></td><td><input type="radio" name="26" value="2"></td><td><input type="radio" name="26" value="3"></td><td><input type="radio" name="26" value="4"></td><td><input type="radio" name="26" value="5"></td><td><input type="radio" name="26" value="6"></td></td></tr></tbody>
          <tbody><tr><td>27</td><td>Accommodating, respecting, and celebrating cultural, religious and other differen ces </td><td><input type="radio" name="27" value="1"></td><td><input type="radio" name="27" value="2"></td><td><input type="radio" name="27" value="3"></td><td><input type="radio" name="27" value="4"></td><td><input type="radio" name="27" value="5"></td><td><input type="radio" name="27" value="6"></td></td></tr></tbody>
          <tbody><tr><td>28</td><td>Degree of participation in ensuring environmental safety and preserving human welfare</td><td><input type="radio" name="28" value="1"></td><td><input type="radio" name="28" value="2"></td><td><input type="radio" name="28" value="3"></td><td><input type="radio" name="28" value="4"></td><td><input type="radio" name="28" value="5"></td><td><input type="radio" name="28" value="6"></td></td></tr></tbody>
          <tbody><tr><td>29</td><td>Maintaining confidentiality in academic and institutional matters</td><td><input type="radio" name="29" value="1"></td><td><input type="radio" name="29" value="2"></td><td><input type="radio" name="29" value="3"></td><td><input type="radio" name="29" value="4"></td><td><input type="radio" name="29" value="5"></td><td><input type="radio" name="29" value="6"></td></td></tr></tbody>
          <tbody><tr><td>30</td><td>Readiness to take assignments coming from outside of the university in one’s area of specialization or otherwise</td><td><input type="radio" name="30" value="1"></td><td><input type="radio" name="30" value="2"></td><td><input type="radio" name="30" value="3"></td><td><input type="radio" name="30" value="4"></td><td><input type="radio" name="30" value="5"></td><td><input type="radio" name="30" value="6"></td></td></tr></tbody>
          <tbody><tr><td>31</td><td>Readiness to use university’s scarce resources in harmony with colleagues </td><td><input type="radio" name="31" value="1"></td><td><input type="radio" name="31" value="2"></td><td><input type="radio" name="31" value="3"></td><td><input type="radio" name="31" value="4"></td><td><input type="radio" name="31" value="5"></td><td><input type="radio" name="31" value="6"></td></td></tr></tbody>
          <tbody><tr><td>32</td><td>Gender sensitivity and readiness to support particularly female students </td><td><input type="radio" name="32" value="1"></td><td><input type="radio" name="32" value="2"></td><td><input type="radio" name="32" value="3"></td><td><input type="radio" name="32" value="4"></td><td><input type="radio" name="32" value="5"></td><td><input type="radio" name="32" value="6"></td></td></tr></tbody>
          <tbody><tr><td>33</td><td>Sobriety and freedom from substance abuse and drug addiction</td><td><input type="radio" name="33" value="1"></td><td><input type="radio" name="33" value="2"></td><td><input type="radio" name="33" value="3"></td><td><input type="radio" name="33" value="4"></td><td><input type="radio" name="33" value="5"></td><td><input type="radio" name="33" value="6"></td></td></tr></tbody>
          <tbody><tr><td>34</td><td>Providing tutorial classes for students needing extra academic supports</td><td><input type="radio" name="34" value="1"></td><td><input type="radio" name="34" value="2"></td><td><input type="radio" name="34" value="3"></td><td><input type="radio" name="34" value="4"></td><td><input type="radio" name="34" value="5"></td><td><input type="radio" name="34" value="6"></td></td></tr></tbody>
          <tbody><tr><td>35</td><td>Professionally accepted dressing, hair style, personal hygiene, etc.</td><td><input type="radio" name="35" value="1"></td><td><input type="radio" name="35" value="2"></td><td><input type="radio" name="35" value="3"></td><td><input type="radio" name="35" value="4"></td><td><input type="radio" name="35" value="5"></td><td><input type="radio" name="35" value="6"></td></td></tr></tbody>
        </table>
        <h1 class="general">General comments about the instructor </h1>
    <div class="last_form">
            <label for="#">Strengths of the instructor. <input type="textarea" col="220" rows="3" placeholder="Strengths of the instructor."></label>
             <br/>
            <label for="#">Suggested points/aspects the instructor should improve.<textarea rows="3" col="220" placeholder="Suggested points/aspects the instructor should improve."></textarea></label>
            <br><label for="#">Name of School/Department Head <input type="text" placeholder="Name of School/Department Head" maxlength="35" ></label> <label for="#">Signature <input type="text" placeholder="Signature" maxlength="10"></label> 
            <label for="#">Date: <input type="Date" placeholder="Date"></label>
            <!-- <input type="textarea" rows="3" col="220" placeholder="Suggested points/aspects the instructor should improve."> -->
            <br><br><br>
            <input class="btn" type="submit" name="peerEvalution" value="SUBMIT" formnovalidate> 
            <input class="btn" id="reset"  type="reset" value="RESET">
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
         <input type="submit"  name="change_pwd_T" class="btn-submit" value="Save"  id="submit"/> 
         <input type="button"  name="change_pwd_T" class="btn-submit exit" value="Exit"  id="exit"/>
     </div>
      </div>
  </form>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<script src="login.js"></script>
<script src="Evaluation.js"></script>
   </body>
</html>