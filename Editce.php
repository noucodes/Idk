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
    LEFT JOIN cefirstyear ON infostudent.`StudentID` = cefirstyear.`StudentID`
    LEFT JOIN cesecondyear ON infostudent.`StudentID` = cesecondyear.`StudentID`
    LEFT JOIN cethirdyear ON infostudent.`StudentID` = cethirdyear.`StudentID`
    LEFT JOIN cefourthyear ON infostudent.`StudentID` = cefourthyear.`StudentID`
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
            <button type="submit" class="btn btn-primary btn-lg" name="ceupdate_btn">Update Data</button>
          </div>

        </div>
        <!-- Modal -->
        <div class="grade-container">
          <div class="grade row g-8">
            <div class="col-6">
              <div class="row align-items-center g-1 g-1">
                <h1 class="text-center">1st-Year Grades</h1>
                <h4 class="text-center text-muted">1st Semester</h4>
                <div class="col-12">
                  <div class="row g-1">
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                  </div>
                </div>


                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE111</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE111UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE111" value="<?= $row["CE111"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CHEM 111</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CHEM111UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CHEM111" value="<?= $row["CHEM111"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ArtApp</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ArtAppUNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ArtApp" value="<?= $row["ARTAPP"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES 102</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES102UNIT" value="1" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES102" value="<?= $row["ES102"] ?>" />
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
                <div class=" sub col-md-3 text-end">
                  <label class="form-label">MATH 111</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="MATH111UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="MATH111" value="<?= $row["MATH111"] ?>" />
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
                  <label class="form-label">PATHFIT 1</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT1UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT1" value="<?= $row["PATHFIT1"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">NSTP 101</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="NSTP101UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
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
                  <label class="form-label">PurCom</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="PurComUNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="PurCom" value="<?= $row["PURCOM"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES 103</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES103UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES103" value="<?= $row["ES103"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES106</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES106UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES106" value="<?= $row["ES106"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">MOM</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="MOMUNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="MOM" value="<?= $row["MOM"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">MATH 121</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="MATH121UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="MATH121" value="<?= $row["MATH121"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">Phys 120</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="Phys120UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="Phys120" value="<?= $row["PHYS120"] ?>" />
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
                  <label class="form-label">PATHFIT 2</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT2UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT2" value="<?= $row["PATHFIT2"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">NSTP 102</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="NSTP102UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="NSTP102" value="<?= $row["NSTP102"] ?>" />
                </div>
              </div>
            </div>
            <div class="col-6">
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
                  <label class="form-label">CE 211</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE211UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE211" value="<?= $row["CE211"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 212</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE212UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE212" value="<?= $row["CE212"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES 202</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES202UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES202" value="<?= $row["ES202"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES 208</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES208UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES208" value="<?= $row["ES208"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES 301</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES301UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES301" value="<?= $row["ES301"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES 209</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES209UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES209" value="<?= $row["ES209"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">FIL 101</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="FIL101UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="FIL101" value="<?= $row["FIL101"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">PATHFIT 3</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT3UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT3" value="<?= $row["PATHFIT3"] ?>" />
                </div>
                <h4 class="text-center text-muted">2nd Semester</h4>
                <div class="col-12">
                  <div class="row g-1">
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                  </div>
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 222</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE222UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE222" value="<?= $row["CE222"] ?>" />
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
                  <label class="form-label">ES 203</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES203UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES203" value="<?= $row["ES203"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">ES205</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES205UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES205" value="<?= $row["ES205"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">FIL 103</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="FIL103UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="FIL103" value="<?= $row["FIL103"] ?>" />
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
                  <label class="form-label">PATHFIT 4</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT4UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="PATHFIT4" value="<?= $row["PATHFIT4"] ?>" />
                </div>

                <h4 class="text-center text-muted">Midyear</h4>
                <div class="col-12">
                  <div class="row g-1">
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                  </div>
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 312</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE312UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE312" value="<?= $row["CE312"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 324</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE324UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE324" value="<?= $row["CE324"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">Rizal</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="RizalUNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="Rizal" value="<?= $row["RIZAL"] ?>" />
                </div>
              </div>
            </div>

          </div>
          <div class="grade row g-8">

            <div class="col-6">
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
                  <label class="form-label">ES 303</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES303UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES303" value="<?= $row["ES303"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 311</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE311UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE311" value="<?= $row["CE311"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 313</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE313UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE313" value="<?= $row["CE313"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 314</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE314UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE314" value="<?= $row["CE314"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 316</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE316UNIT" value="5" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE316" value="<?= $row["CE316"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 322</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE322UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE322" value="<?= $row["CE322"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 325</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE325UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE325" value="<?= $row["CE325"] ?>" />
                </div>
                <h4 class="text-center text-muted">2nd Semester</h4>
                <div class="col-12">
                  <div class="row g-1">
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                  </div>
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 323</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE323UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE323" value="<?= $row["CE323"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 326</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE326UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE326" value="<?= $row["CE326"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">Ethic</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="EthicUNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="Ethic" value="<?= $row["Ethc"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 411</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE411UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE411" value="<?= $row["CE411"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 413</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE413UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE413" value="<?= $row["CE413"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 415</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE415UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE415" value="<?= $row["CE415"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 416</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE416UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE416" value="<?= $row["CE416"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 417</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE417UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE417" value="<?= $row["CE417"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">SS 100</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="SS100UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="SS100" value="<?= $row["SS100"] ?>" />
                </div>
                <h4 class="text-center text-muted">Midyear</h4>
                <div class="col-12">
                  <div class="row g-1">
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                  </div>
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 315</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE315UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE315" value="<?= $row["CE315"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 412</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE412UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE412" value="<?= $row["CE412"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">GnS</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="GnSUNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="GnS" value="<?= $row["GNS"] ?>" />
                </div>
              </div>
            </div>
            <div class="col-6">
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
                  <label class="form-label">ES 302</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="ES302UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="ES302" value="<?= $row["ES302"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 422</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE422UNIT" value="2" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE422" value="<?= $row["CE422"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 423</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE423UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE423" value="<?= $row["CE423"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 424</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE424UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE424" value="<?= $row["CE424"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 425</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE425UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE425" value="<?= $row["CE425"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 426</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE426UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE426" value="<?= $row["CE426"] ?>" />
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 427</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE427UNIT" value="4" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE427" value="<?= $row["CE427"] ?>" />
                </div>
                <h4 class="text-center text-muted">2nd Semester</h4>
                <div class="col-12">
                  <div class="row g-1">
                    <h6 class="text-muted col-md-3 offset-md-3">UNITS</h6>
                  </div>
                </div>
                <div class="sub col-md-3 text-end">
                  <label class="form-label">CE 330</label>
                </div>
                <div class="sub-in col-md-1">
                  <input class="form-control form-control-sm" type="text" name="CE330UNIT" value="3" readonly />
                </div>
                <div class="sub-in col-md-2">
                  <input class="form-control form-control-sm" type="text" name="CE330" value="<?= $row["CE330"] ?>" />
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