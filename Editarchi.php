<?php include 'Assets/includes/header.inc.php';

?>

<div class="hero container">
  <?php
  require_once 'Assets/includes/dbh.inc.php';

  if (isset($_GET['id'])) {
    try {
      $student_id = $_GET['id'];
      // Prepare SQL statement
  
      $student_query = "
    SELECT *
    FROM infostudent
    LEFT JOIN archifirstyear ON infostudent.`StudentID` = archifirstyear.`StudentID`
    LEFT JOIN archisecondyear ON infostudent.`StudentID` = archisecondyear.`StudentID`
    LEFT JOIN archithirdyear ON infostudent.`StudentID` = archithirdyear.`StudentID`
    LEFT JOIN archifourthyear ON infostudent.`StudentID` = archifourthyear.`StudentID`
    LEFT JOIN archififthyear ON infostudent.`StudentID` = archifourthyear.`StudentID`
    WHERE infostudent.`StudentID` = :student_id
";

      $stmt = $pdo->prepare($student_query);
      $stmt->bindParam(':student_id', $student_id);
      $stmt->execute();

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


      $stmt = null;
      $pdo = null;
    } catch (PDOException $e) {
      die('Query Failed: ' . $e->getMessage());
    }
  } else {
    header('Location: Database.php');
  }
  ?>


  <form action="Assets/includes/formhandler.inc.php" method="post">
    <?php
    if ($result) {
      foreach ($result as $row) { ?>
        <div class="personal row g-3">
          <h1>Personal Info</h1>
          <div class="col-md-4">
            <label for="studentid" class="form-label">StudentID</label>
            <input name="studentid" type="text" class="form-control" id="studentid" value="<?= $row["StudentID"] ?>"
              required />
          </div>
          <div class="col-md-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" name="firstname" class="form-control" id="firstname" value="<?= $row["FIRSTNAME"] ?>"
              required />
          </div>
          <div class="col-md-2">
            <label for="middlename" class="form-label">Middle name</label>
            <input type="text" name="middlename" class="form-control" id="middlename" value="<?= $row["MIDDLENAME"] ?>"
              required />
          </div>
          <div class="col-md-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="<?= $row["LASTNAME"] ?>"
              required />
          </div>
          <div class="col-md-3">
            <label for="number" class="form-label">Number</label>
            <input name="number" type="text" class="form-control" id="number" value="<?= $row["NUMBER"] ?>" required />
          </div>

          <div class="col-md-3">
            <label for="standing" class="form-label">Standing</label>
            <input type="text" name="standing" class="form-control" id="standing" value="<?= $row["STANDING"] ?>"
              readonly />
          </div>
          <div class="stat col-md-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" id="status" required>
              <option selected value="<?= $row["STATUS"] ?>">
                <?= $row["STATUS"] ?>
              </option>
              <option value="Regular">Regular</option>
              <option value="Irregular">Irregular</option>
            </select>
          </div>
          <div class="stat col-md-2">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-select" id="gender" required>
              <option selected value="<?= $row["GENDER"] ?>">
                <?= $row["GENDER"] ?>
              </option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="col-md-1">
            <label for="gpa" class="form-label">GPA</label>
            <input name="gpa" type="text" class="form-control" id="gpa" readonly />
          </div>
          <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
              <input name="email" type="text" class="form-control" id="email" aria-describedby="email"
                value="<?= $row["EMAIL"] ?>" required />
            </div>
          </div>
          <div class="col-md-6">
            <label for="department" class="form-label">Department</label>
            <select name="department" class="form-select" id="department" required>
              <option selected value="<?= $row["DEPARTMENT"] ?>">
                <?= $row["DEPARTMENT"] ?>
              </option>
              <option value="B.S. IN ARCHITECTURE">B.S. IN ARCHITECTURE</option>
              <option value="B.S. IN CIVIL ENGINEERING">B.S. IN CIVIL ENGINEERING</option>
            </select>
          </div>
          <div class="stat col-md-2">
            <label for="year" class="form-label">Year Level</label>
            <select name="year" class="form-select" id="year" required>
              <option selected value="<?= $row["YEARLEVEL"] ?>">
                <?= $row["YEARLEVEL"] ?>
              </option>
              <option value="1stYear">1st Year</option>
              <option value="2ndYear">2nd Year</option>
              <option value="3rdYear">3rd Year</option>
              <option value="4thYear">4th Year</option>
            </select>
          </div>



        </div>
        <div class="buttons">

          <div class="button mr-1">
            <button type="submit" class="btn btn-primary btn-lg" name="archiupdate_btn">Update Data</button>
          </div>

        </div>
        <!-- Modal -->
        <div id="ARCHI" class="">

          <div class="grade-container">
            <div class="grade row g-8">
              <div class="col-6 mb-5">
                <div class="row align-items-center g-1 ">
                  <h1 class="text-center">1st-Year Grades</h1>
                  <h4 class="text-center text-muted">1st Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>


                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch111</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch111UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch111" value="<?= $row["Arch111"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch112</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch112UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch112" value="<?= $row["Arch112"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch113</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch113UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch113" value="<?= $row["Arch113"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch114</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch114UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch114" value="<?= $row["Arch114"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch115</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch115UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch115" value="<?= $row["Arch115"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">MMW</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="MMWUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="MMW" value="<?= $row["MMW"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">TCW</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="TCWUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="TCW" value="<?= $row["TCW"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">ArtApp</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="ArtAppUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="ArtApp" value="<?= $row["ArtApp"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">PATHFit1</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="PATHFit1UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="PATHFit1"
                      value="<?= $row["PATHFit1"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">NSTP101</label>
                  </div>
                  <div class="sub-out col-md-1">
                    <input class="form-control form-control-sm" type="text" name="NSTP101UNIT" value="3" readonly />
                  </div>
                  <div class="sub-out col-md-2">
                    <input class="form-control form-control-sm" type="text" name="NSTP101" value="<?= $row["NSTP101"] ?>" />
                  </div>

                  <h4 class="text-center text-muted">2nd Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch122</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch122UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch122" value="<?= $row["Arch122"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch123</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch123UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch123" value="<?= $row["Arch123"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch124</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch124UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch124" value="<?= $row["Arch124"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch125</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch125UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch125" value="<?= $row["Arch125"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch126</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch126UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch126" value="<?= $row["Arch126"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch121</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch121UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch121" value="<?= $row["Arch121"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Math112</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Math112UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Math112" value="<?= $row["Math112"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Ethc</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="EthcUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Ethc" value="<?= $row["Ethc"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">PATHFit2</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="PATHFit2UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="PATHFit2"
                      value="<?= $row["PATHFit2"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">NSTP102</label>
                  </div>
                  <div class="sub-out col-md-1">
                    <input class="form-control form-control-sm" type="text" name="NSTP102UNIT" value="3" readonly />
                  </div>
                  <div class="sub-out col-md-2">
                    <input class="form-control form-control-sm" type="text" name="NSTP102" value="<?= $row["NSTP102"] ?>" />
                  </div>

                </div>

              </div>
              <div class="col-6 mb-5">
                <div class="row align-items-center g-1">
                  <h1 class="text-center">2nd-Year Grades</h1>
                  <h4 class="text-center text-muted">1st Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch213</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch213UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch213" value="<?= $row["Arch213"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch215</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch215UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch215" value="<?= $row["Arch215"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch216</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch216UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch216" value="<?= $row["Arch216"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch212</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch212UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch212" value="<?= $row["Arch212"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Math106</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Math106UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Math106" value="<?= $row["Math106"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">CE211</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="CE211UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="CE211" value="<?= $row["CE211"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">RPH</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="RPHUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="RPH" value="<?= $row["RPH"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Fil102</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Fil102UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Fil102" value="<?= $row["Fil102"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">PATHFit3</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="PATHFit3UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="PATHFit3"
                      value="<?= $row["PATHFit3"] ?>" />
                  </div>
                  <h4 class="text-center text-muted">2nd Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch224</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch224UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch224" value="<?= $row["Arch224"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch227</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch227UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch227" value="<?= $row["Arch227"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch223</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch223UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch223" value="<?= $row["Arch223"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch400</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch400UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch400" value="<?= $row["Arch400"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">CADD311</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="CADD311UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="CADD311" value="<?= $row["CADD311"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">ES202</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="ES202UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="ES202" value="<?= $row["ES202"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">PurCom</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="PurComUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="PurCom" value="<?= $row["PurCom"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">UTS</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="UTSUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="UTS" value="<?= $row["UTS"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">PATHFit4</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="PATHFit4UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="PATHFit4"
                      value="<?= $row["PATHFit4"] ?>" />
                  </div>
                </div>


              </div>

              <div class="col-6 mb-5">
                <div class="row align-items-center g-1">
                  <h1 class="text-center">3rd-Year Grades</h1>
                  <h4 class="text-center text-muted">1st Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch315</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch315UNIT" value="4" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch315" value="<?= $row["Arch315"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch314</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch314UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch314" value="<?= $row["Arch314"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch221</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch221UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch221" value="<?= $row["Arch221"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">ES206</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="ES206UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="ES206" value="<?= $row["ES206"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch311</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch311UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch311" value="<?= $row["Arch311"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch313</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch313UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch313" value="<?= $row["Arch313"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">CADD322</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="CADD322UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="CADD322" value="<?= $row["CADD322"] ?>" />
                  </div>
                  <h4 class="text-center text-muted">2nd Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch326</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch326UNIT" value="4" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch326" value="<?= $row["Arch326"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch325</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch325UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch325" value="<?= $row["Arch325"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch312</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch312UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch312" value="<?= $row["Arch312"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch324</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch324UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch324" value="<?= $row["Arch324"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch322</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch322UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch322" value="<?= $row["Arch322"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch320</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch320UNIT" value="2" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch320" value="<?= $row["Arch320"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">CE322</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="CE322UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="CE322" value="<?= $row["CE322"] ?>" />
                  </div>
                </div>
              </div>
              <div class="col-6 mb-5">
                <div class="row align-items-center g-1">
                  <h1 class="text-center">4th-Year Grades</h1>
                  <h4 class="text-center text-muted">1st Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch417</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch417UNIT" value="5" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch417" value="<?= $row["Arch417"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch415</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch415UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch415" value="<?= $row["Arch415"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch413</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch413UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch413" value="<?= $row["Arch413"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">CE413</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="CE413UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="CE413" value="<?= $row["CE413"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch323</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch323UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch323" value="<?= $row["Arch323"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch411</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch411UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch411" value="<?= $row["Arch411"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">TEM</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="TEMUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="TEM" value="<?= $row["TEM"] ?>" />
                  </div>

                  <h4 class="text-center text-muted">2nd Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch428</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch428UNIT" value="5" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch428" value="<?= $row["Arch428"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch424</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch424UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch424" value="<?= $row["Arch424"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">CE424</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="CE424UNIT" value="4" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="CE424" value="<?= $row["CE424"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch421</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch421UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch421" value="<?= $row["Arch421"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Tech101</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Tech101UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Tech101" value="<?= $row["Tech101"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch422</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch422UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch422" value="<?= $row["Arch422"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">ArchCSE420</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="ArchCSE420UNIT" value="1" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="ArchCSE420"
                      value="<?= $row["ArchCSE420"] ?>" />
                  </div>

                </div>
              </div>
              <div class="col-6 mb-5">
                <div class="row align-items-center g-1">
                  <h1 class="text-center">5th-Year Grades</h1>
                  <h4 class="text-center text-muted">1st Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch519</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch519UNIT" value="5" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch519" value="<?= $row["Arch519"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch511</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch511UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch511" value="<?= $row["Arch511"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch513</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch513UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch513" value="<?= $row["Arch513"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">STS</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="STSUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="STS" value="<?= $row["STS"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Rizal</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="RizalUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Rizal" value="<?= $row["Rizal"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">GnS</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="GnSUNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="GnS" value="<?= $row["GnS"] ?>" />
                  </div>
                  <h4 class="text-center text-muted">2nd Semester</h4>
                  <div class="col-12">
                    <div class="row g-1">
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                      <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    </div>
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch520</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch520UNIT" value="5" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch520" value="<?= $row["Arch520"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">Arch522</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="Arch522UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="Arch522" value="<?= $row["Arch522"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">FL01</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="FL01UNIT" value="3" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="FL01" value="<?= $row["FL01"] ?>" />
                  </div>
                  <div class="sub col-md-3 text-end">
                    <label class="form-label">ArchSCE520</label>
                  </div>
                  <div class="sub-in col-md-1">
                    <input class="form-control form-control-sm" type="text" name="ArchSCE520UNIT" value="1" readonly />
                  </div>
                  <div class="sub-in col-md-2">
                    <input class="form-control form-control-sm" type="text" name="ArchSCE520"
                      value="<?= $row["ArchSCE520"] ?>" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }
    }
    include 'Assets/includes/message.php' ?>
</div>
</form>
</div>
</body>
<script>
  function checkForInputAndRunFunction() {
    var inputs = document.querySelectorAll('.sub-in input[type="text"]');

    // Check if any input has a value
    var hasInput = Array.from(inputs).some(function (input) {
      return input.value.trim() !== '';
    });

    // If there is input, execute the desired function
    if (hasInput) {
      // Replace `myFunction` with your desired function
      calculateAverageGradeUnits();
    }
  }

  // Call the function every second
  setInterval(checkForInputAndRunFunction, 1000);

  const toastcontent = document.querySelector(".toast");
  const toast = new bootstrap.Toast(toastcontent);
  toast.show();

  function calculateAverageGradeUnits() {
    // Select all input fields with 'sub-in' class
    var inputs = document.querySelectorAll('.sub-in input[type="text"]');
    var gpa = document.querySelector('#gpa');
    var standing = document.querySelector('#standing');

    var totalGradeUnits = 0;
    var totalInputs = 0;
    var bufffer = 0;
    var totalsubs = 0;



    // Iterate through each input field
    inputs.forEach(function (input) {
      // Check if the input field has a value
      if (input.value.trim() !== '') {
        // Get the value of the unit input field for this subject
        var unitInput = input.closest('.grade').querySelector('[name="' + input.name + 'UNIT"]');
        var gradeInput = input.closest('.grade').querySelector('[name="' + input.name + '"]');

        if (unitInput) {
          var unitValue = parseFloat(unitInput.value);
          var gradeValue = parseFloat(gradeInput.value);
          // Add the unit value to the total grade units
          buffer = unitValue * gradeValue;
          totalGradeUnits += buffer;
          // Increment the total number of inputs
          totalInputs += unitValue;
          totalsubs++;
        }
      }
      else {
        gpa.value = 0;
      }
    });

    if (totalsubs < 63) {
      standing.value = "Not Graduating";
    }
    else {
      standing.value = "Graduating";
    }

    // Calculate the average grade units
    var averageGradeUnits = totalGradeUnits / totalInputs;

    // Display the average grade units (you can modify this part to display it wherever you want)
    gpa.value = averageGradeUnits.toFixed(2); // Displaying with 2 decimal places
  }





</script>

</html>