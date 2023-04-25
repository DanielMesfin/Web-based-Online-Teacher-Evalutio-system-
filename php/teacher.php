<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--The important meta tag in header-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--The important stylesheet  in header-->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/remixicons/fonts/remixicon.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/admin_trial.css">
  <!-- Title -->
  <title>Your account is Loading</title>
</head>
<body>
    <div class="profile">
        <img src="tinchel_admin.jpg" alt="profile" srcset="">
        <div class="admin_info">
            <p>clever tinchel</p>
            <p><a href="#">Edit Profile</a></p>
        </div>
    </div>
  <div class="container-fluid">
    <!--navigation var-->
  <header class="navbar-brand bg-dark  navbar-dark  mx-auto text-center"><h1 class="text-light">Teacher </h1></header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> Task List For Head In These System   
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle dropdown-item-text" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Task List For Head In These  The System 
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addStudent">Add Student</button>
              <button type="button" class="btn btn-primary container-fluid" data-bs-toggle="modal" data-bs-target="#addStudent">Add Student</button>
              <button type="button" class="btn btn-primary container-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Teacher </button>
             
            <li class="dropdown-item"></li>
            <li class="dropdown-item"></li>
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li class="dropdown-item"></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li class="dropdown-item"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li class="dropdown-item"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li class="dropdown-item"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--the list of admin's operation in this system -->
<div class="contaner ml-150 ml-159 gy=10">
 <hr><button type="button" class="btn btn-primary container-fluid" data-bs-toggle="modal" data-bs-target="#addTeacher">Evaluate Your Peer  </button>
 <hr><button type="button" class="btn btn-primary container-fluid" data-bs-toggle="modal" data-bs-target="#veiwStudent">View Your Result </button>
</div>
<!-- Modal view Head -->
<div class="modal fade" id="veiwStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h1 .text-center>The Result of your Evaluation   </h1></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead class="bg-dark text-light">
            <tr>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Middle Name</th>
              <th scope="col">Student Id</th>
              <th scope="col">Department</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Daniel</th>
              <td>Mesfin</td>
              <td>Abamecha</td>
              <td>st/1806</td>
              <td>Software Engineering</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 

  
            

    <!--Add the data of head of department-->
    <div class="modal fade" id="addHead" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header text-center bg-dark ">
            <h1 class="modal-title text-light" id="exampleModalLabel" > Fill Student Information </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ml=40px">
            <form action="Add_User.php" method="post" class="form-contral row g-3 needs-validation" novalidate>
              <div class="input gy-10">
                <span class="input-group-text">Full Name :</span>
                <br><input type="text" aria-label="First Name:" placeholder="First Name" class="form-control" name="head_fname" required>
                <br><input type="text" aria-label="Middle Name :"placeholder="Middle Name" class="form-control" name="head_mname" required>
                <br><input type="text" aria-label="Last Name :" Placeholder="Last Name" class="form-control" name="head_lname" required>
                <br> <label for="validationCustom02" class="form-label">Id Number </label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="User Id" name="head_id_no" required>
                <br><label for="validationCustom01" class="form-label">Department :</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="head_department" required>
                  <option selected>Select Department</option>
                  <option value="Software Engineering">Software Engineering</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="Information Science">Information Science</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Statistics">Statistics</option>
                </select>
                <br><label for="validationCustom04" class="form-label">Academic Year :</label>
                <select class="form-select" id="validationCustom04" required   name="head_Academic_year">
                  <option selected disabled value="">Select Academic Year</option>
                  <option value="2013">2013</option><option value="2014">2014</option>
                  <option value="2015">2015</option><option value="2016">2016</option>
                  <option value="2017">2017</option><option value="2018">2018</option>
                  <option value="2019">2019</option><option value="2020">2020</option>
                  <option value="2021">2021</option><option value="2022">2022</option>
                  <option value="2023">2023</option><option value="2024">2024</option>
                  <option value="2025">2025</option><option value="2026">2026</option>
                  <option value="2027">2027</option><option value="2028">2028</option>
                  <option value="2029">2029</option><option value="2030">2030</option>
                  <option value="2031">2031</option><option value="2032">2032</option>
                  <option value="2033">2033</option><option value="2034">2034</option>
                  <option value="2035">2035</option><option value="2036">2036</option>
                  <option value="2037">2037</option><option value="2038">2038</option>
                  <option value="2039">2039</option><option value="2040">2040</option>
                  <option value="2041">2041</option><option value="2042">2042</option>
                </select><br>
                <br><input type="password" aria-label="Password:" placeholder="Password" class="form-control" name="head_pwd" required>
                </div>
                <div class="modal-footer bg-dark">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="head_submit">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<script src="assets/js/index.js"></script> 
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>
</html>