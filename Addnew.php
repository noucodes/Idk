<?php include 'Assets/includes/header.inc.php'; ?>

<div class="hero container">
  <form action="assets/includes/formhandler.inc.php" method="post">
    <div class="personal row g-3">
      <h1>Personal Info</h1>
      <div class="col-md-4">
        <label for="studentid" class="form-label">Student Id</label>
        <input name="studentid" type="text" class="form-control" id="studentid" required />
      </div>
      <div class="col-md-3">
        <label for="firstname" class="form-label">First name</label>
        <input type="text" name="firstname" class="form-control" id="firstname" required />
      </div>
      <div class="col-md-2">
        <label for="middlename" class="form-label">Middle name</label>
        <input type="text" name="middlename" class="form-control" id="middlename" required />
      </div>
      <div class="col-md-3">
        <label for="lastname" class="form-label">Last name</label>
        <input type="text" name="lastname" class="form-control" id="lastname" required />
      </div>
      <div class="col-md-3">
        <label for="number" class="form-label">Number</label>
        <input name="number" type="text" class="form-control" id="number" required />
      </div>

      <div class="col-md-3">
        <label for="standing" class="form-label">Standing</label>
        <input type="text" name="standing" class="form-control" id="standing" readonly />
      </div>
      <div class="col-md-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" class="form-select" id="status" required>
          <option selected disabled value="">Choose...</option>
          <option value="Regular">Regular</option>
          <option value="Irregular">Irregular</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" class="form-select" id="gender" required>
          <option selected disabled value="">Choose...</option>
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
          <input name="email" type="text" class="form-control" id="email" aria-describedby="email" required />
        </div>
      </div>

      <div class="col-md-6">
        <label for="department" class="form-label">Department</label>
        <select name="department" class="form-select" id="department" required>
          <option selected disabled value="">Choose...</option>
          <option value="B.S. IN ARCHITECTURE">B.S. IN ARCHITECTURE</option>
          <option value="B.S. IN CIVIL ENGINEERING">B.S. IN CIVIL ENGINEERING</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="year" class="form-label">Year Level</label>
        <select name="year" class="form-select" id="year" required>
          <option selected disabled value="">Choose...</option>
          <option value="1stYear">1st Year</option>
          <option value="2ndYear">2nd Year</option>
          <option value="3rdYear">3rd Year</option>
          <option value="4thYear">4th Year</option>
        </select>
      </div>
    </div>

    <div id="CE" class="d-none">
      <div class="buttons">
        <button name="cesave_btn" class="btn btn-primary" type="submit">Submit form</button>
      </div>

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
                <input class="form-control form-control-sm" type="text" name="CE111" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CHEM 111</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CHEM111UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CHEM111" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ArtApp</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ArtAppUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ArtApp" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES 102</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES102UNIT" value="1" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES102" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">MMW</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="MMWUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="MMW" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">MATH 111</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="MATH111UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="MATH111" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">TCW</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="TCWUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="TCW" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFIT 1</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFIT1UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFIT1" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">NSTP 101</label>
              </div>
              <div class="sub-out col-md-1">
                <input class="form-control form-control-sm" type="text" name="NSTP101UNIT" value="3" readonly />
              </div>
              <div class="sub-out col-md-2">
                <input class="form-control form-control-sm" type="text" name="NSTP101" />
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
                <input class="form-control form-control-sm" type="text" name="PurCom" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES 103</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES103UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES103" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES106</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES106UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES106" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">MOM</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="MOMUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="MOM" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">MATH 121</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="MATH121UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="MATH121" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Phys 120</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Phys120UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Phys120" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">RPH</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="RPHUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="RPH" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFIT 2</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFIT2UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFIT2" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">NSTP 102</label>
              </div>
              <div class="sub-out col-md-1">
                <input class="form-control form-control-sm" type="text" name="NSTP102UNIT" value="3" readonly />
              </div>
              <div class="sub-out col-md-2">
                <input class="form-control form-control-sm" type="text" name="NSTP102" />
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
                <input class="form-control form-control-sm" type="text" name="CE211" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 212</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE212UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE212" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES 202</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES202UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES202" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES 208</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES208UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES208" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES 301</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES301UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES301" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES 209</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES209UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES209" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">FIL 101</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="FIL101UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="FIL101" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFIT 3</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFIT3UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFIT3" />
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
                <input class="form-control form-control-sm" type="text" name="CE222" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">STS</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="STSUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="STS" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES 203</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES203UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES203" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES205</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES205UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES205" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">FIL 103</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="FIL103UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="FIL103" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">UTS</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="UTSUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="UTS" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFIT 4</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFIT4UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFIT4" />
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
                <input class="form-control form-control-sm" type="text" name="CE312" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 324</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE324UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE324" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Rizal</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="RizalUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Rizal" />
              </div>
            </div>
          </div>
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
                <input class="form-control form-control-sm" type="text" name="ES303" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 311</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE311UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE311" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 313</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE313UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE313" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 314</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE314UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE314" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 316</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE316UNIT" value="5" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE316" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 322</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE322UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE322" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 325</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE325UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE325" />
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
                <input class="form-control form-control-sm" type="text" name="CE323" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 326</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE326UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE326" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Ethic</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="EthicUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Ethic" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 411</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE411UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE411" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 413</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE413UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE413" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 415</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE415UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE415" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 416</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE416UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE416" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 417</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE417UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE417" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">SS 100</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="SS100UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="SS100" />
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
                <input class="form-control form-control-sm" type="text" name="CE315" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 412</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE412UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE412" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">GnS</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="GnSUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="GnS" />
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
                <input class="form-control form-control-sm" type="text" name="ES302" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 422</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE422UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE422" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 423</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE423UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE423" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 424</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE424UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE424" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 425</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE425UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE425" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 426</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE426UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE426" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE 427</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE427UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE427" />
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
                <input class="form-control form-control-sm" type="text" name="CE330" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="ARCHI" class="d-none">
      <div class="buttons">
        <button name="archisave_btn" class="btn btn-primary" type="submit">Submit form</button>
      </div>

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
                <input class="form-control form-control-sm" type="text" name="Arch111" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch112</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch112UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch112" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch113</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch113UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch113" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch114</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch114UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch114" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch115</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch115UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch115" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">MMW</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="MMWUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="MMW" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">TCW</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="TCWUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="TCW" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ArtApp</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ArtAppUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ArtApp" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFit1</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFit1UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFit1" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">NSTP101</label>
              </div>
              <div class="sub-out col-md-1">
                <input class="form-control form-control-sm" type="text" name="NSTP101UNIT" value="3" readonly />
              </div>
              <div class="sub-out col-md-2">
                <input class="form-control form-control-sm" type="text" name="NSTP101" />
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
                <input class="form-control form-control-sm" type="text" name="Arch122" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch123</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch123UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch123" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch124</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch124UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch124" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch125</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch125UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch125" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch126</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch126UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch126" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch121</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch121UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch121" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Math112</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Math112UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Math112" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Ethc</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="EthcUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Ethc" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFit2</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFit2UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFit2" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">NSTP102</label>
              </div>
              <div class="sub-out col-md-1">
                <input class="form-control form-control-sm" type="text" name="NSTP102UNIT" value="3" readonly />
              </div>
              <div class="sub-out col-md-2">
                <input class="form-control form-control-sm" type="text" name="NSTP102" />
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
                <input class="form-control form-control-sm" type="text" name="Arch213" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch215</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch215UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch215" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch216</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch216UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch216" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch212</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch212UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch212" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Math106</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Math106UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Math106" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE211</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE211UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE211" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">RPH</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="RPHUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="RPH" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Fil102</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Fil102UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Fil102" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFit3</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFit3UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFit3" />
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
                <input class="form-control form-control-sm" type="text" name="Arch224" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch227</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch227UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch227" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch223</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch223UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch223" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch400</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch400UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch400" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CADD311</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CADD311UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CADD311" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES202</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES202UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES202" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PurCom</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PurComUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PurCom" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">UTS</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="UTSUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="UTS" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">PATHFit4</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="PATHFit4UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="PATHFit4" />
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
                <input class="form-control form-control-sm" type="text" name="Arch315" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch314</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch314UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch314" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch221</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch221UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch221" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ES206</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ES206UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ES206" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch311</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch311UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch311" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch313</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch313UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch313" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CADD322</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CADD322UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CADD322" />
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
                <input class="form-control form-control-sm" type="text" name="Arch326" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch325</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch325UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch325" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch312</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch312UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch312" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch324</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch324UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch324" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch322</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch322UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch322" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch320</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch320UNIT" value="2" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch320" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE322</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE322UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE322" />
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
                <input class="form-control form-control-sm" type="text" name="Arch417" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch415</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch415UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch415" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch413</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch413UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch413" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE413</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE413UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE413" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch323</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch323UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch323" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch411</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch411UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch411" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">TEM</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="TEMUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="TEM" />
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
                <input class="form-control form-control-sm" type="text" name="Arch428" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch424</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch424UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch424" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">CE424</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="CE424UNIT" value="4" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="CE424" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch421</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch421UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch421" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Tech101</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Tech101UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Tech101" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch422</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch422UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch422" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ArchCSE420</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ArchCSE420UNIT" value="1" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ArchCSE420" />
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
                <input class="form-control form-control-sm" type="text" name="Arch519" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch511</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch511UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch511" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch513</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch513UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch513" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">STS</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="STSUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="STS" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Rizal</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="RizalUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Rizal" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">GnS</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="GnSUNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="GnS" />
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
                <input class="form-control form-control-sm" type="text" name="Arch520" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">Arch522</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="Arch522UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="Arch522" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">FL01</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="FL01UNIT" value="3" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="FL01" />
              </div>
              <div class="sub col-md-3 text-end">
                <label class="form-label">ArchSCE520</label>
              </div>
              <div class="sub-in col-md-1">
                <input class="form-control form-control-sm" type="text" name="ArchSCE520UNIT" value="1" readonly />
              </div>
              <div class="sub-in col-md-2">
                <input class="form-control form-control-sm" type="text" name="ArchSCE520" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <?php include 'Assets/includes/message.php' ?>
</div>
</body>
<script>
  function departmentFunction() {
    var department = document.querySelector('#department');
    var departmentValue = department.value;
    var civil = document.querySelector('#CE');
    var architecture = document.querySelector('#ARCHI');

    if (departmentValue == "B.S. IN ARCHITECTURE") {
      architecture.classList.remove("d-none");
      civil.classList.add("d-none");
      console.log("Archi");
    }

    else if (departmentValue == "B.S. IN CIVIL ENGINEERING") {
      civil.classList.remove("d-none");
      architecture.classList.add("d-none");
      console.log("Civil");
    }
  }
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
  document.getElementById("department").addEventListener("change", departmentFunction);

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