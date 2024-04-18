<?php
session_start();

if (isset($_POST["delete_btn"])) {
    $id = $_POST["delete_btn"];
    try {
        require_once "dbh.inc.php";

        // Delete from infostudent table
        $delete_student_query = "DELETE FROM infostudent WHERE `STUDENT ID` = ?";
        $delete_student_stmt = $pdo->prepare($delete_student_query);
        $delete_student_stmt->execute([$id]);

        // Delete from firstyear table
        $delete_firstyear_query = "DELETE FROM firstyear WHERE `STUDENT ID` = ?";
        $delete_firstyear_stmt = $pdo->prepare($delete_firstyear_query);
        $delete_firstyear_stmt->execute([$id]);

        // Delete from secondyear table
        $delete_secondyear_query = "DELETE FROM secondyear WHERE `STUDENT ID` = ?";
        $delete_secondyear_stmt = $pdo->prepare($delete_secondyear_query);
        $delete_secondyear_stmt->execute([$id]);

        // Delete from thirdyear table
        $delete_thirdyear_query = "DELETE FROM thirdyear WHERE `STUDENT ID` = ?";
        $delete_thirdyear_stmt = $pdo->prepare($delete_thirdyear_query);
        $delete_thirdyear_stmt->execute([$id]);

        // Delete from fourthyear table
        $delete_fourthyear_query = "DELETE FROM fourthyear WHERE `STUDENT ID` = ?";
        $delete_fourthyear_stmt = $pdo->prepare($delete_fourthyear_query);
        $delete_fourthyear_stmt->execute([$id]);

        // Optionally, you may commit the transaction here if necessary

        $_SESSION['message'] = "Data associated with student ID: " . $id . " has been successfully deleted";
        header("Location: ../../Database.php");
        die();
    } catch (PDOException $e) {
        $_SESSION['message'] = "Sorry! There was a technical error";
        die("Query Failed: " . $e->getMessage());
    }
}

if (isset($_POST["archiupdate_btn"])) {
    $id = $_POST["studentid"];
    $firstname = strtoupper($_POST["firstname"]);
    $middlename = strtoupper($_POST["middlename"]);
    $lastname = strtoupper($_POST["lastname"]);
    $yearlevel = strtoupper($_POST["year"]);
    $standing = strtoupper($_POST["standing"]);
    $status = strtoupper($_POST["status"]);
    $email = strtoupper($_POST["email"]);
    $gender = strtoupper($_POST["gender"]);
    $number = $_POST["number"];
    $department = strtoupper($_POST["department"]);
    $gpa = $_POST["gpa"];

    try {
        require_once "dbh.inc.php";

        // Update student information in the main student table
        $student_query = "
            UPDATE infostudent 
            SET `FIRSTNAME` = ?, `MIDDLENAME` = ?, `LASTNAME` = ?, `YEARLEVEL` = ?, `STANDING` = ?, `STATUS` = ?, `EMAIL` = ?, `GENDER` = ?, `NUMBER` = ?, `GPA` = ?, `DEPARTMENT` = ? 
            WHERE `StudentID` = ?
        ";
        $student_stmt = $pdo->prepare($student_query);
        $student_stmt->execute([
            $firstname,
            $middlename,
            $lastname,
            $yearlevel,
            $standing,
            $status,
            $email,
            $gender,
            $number,
            $gpa,
            $department,
            $id
        ]);

        // Update first year courses
        $firstyear_query = "
            UPDATE archifirstyear 
            SET `Arch111` = ?, `Arch112` = ?, `Arch113` = ?, `Arch114` = ?, `Arch115` = ?, `MMW` = ?, `TCW` = ?, `ArtApp` = ?, `PATHFit1` = ?, `NSTP101` = ?, `Arch122` = ?, `Arch123` = ?, `Arch124` = ?, `Arch125` = ?, `Arch126` = ?, `Arch121` = ?, `Math112` = ?, `Ethc` = ?, `PATHFit2` = ?, `NSTP102` = ? 
            WHERE `StudentID` = ?
        ";
        $firstyear_stmt = $pdo->prepare($firstyear_query);
        $firstyear_stmt->execute([
            $_POST["Arch111"],
            $_POST["Arch112"],
            $_POST["Arch113"],
            $_POST["Arch114"],
            $_POST["Arch115"],
            $_POST["MMW"],
            $_POST["TCW"],
            $_POST["ArtApp"],
            $_POST["PATHFit1"],
            $_POST["NSTP101"],
            $_POST["Arch122"],
            $_POST["Arch123"],
            $_POST["Arch124"],
            $_POST["Arch125"],
            $_POST["Arch126"],
            $_POST["Arch121"],
            $_POST["Math112"],
            $_POST["Ethc"],
            $_POST["PATHFit2"],
            $_POST["NSTP102"],
            $id
        ]);

        // Update second year courses
        $secondyear_query = "
            UPDATE archisecondyear 
            SET `Arch213` = ?, `Arch215` = ?, `Arch216` = ?, `Arch212` = ?, `Math106` = ?, `CE211` = ?, `RPH` = ?, `Fil102` = ?, `PATHFit3` = ?, `Arch224` = ?, `Arch227` = ?, `Arch223` = ?, `Arch400` = ?, `CADD311` = ?, `ES202` = ?, `PurCom` = ?, `UTS` = ?, `PATHFit4` = ? 
            WHERE `StudentID` = ?
        ";
        $secondyear_stmt = $pdo->prepare($secondyear_query);
        $secondyear_stmt->execute([
            $_POST["Arch213"],
            $_POST["Arch215"],
            $_POST["Arch216"],
            $_POST["Arch212"],
            $_POST["Math106"],
            $_POST["CE211"],
            $_POST["RPH"],
            $_POST["Fil102"],
            $_POST["PATHFit3"],
            $_POST["Arch224"],
            $_POST["Arch227"],
            $_POST["Arch223"],
            $_POST["Arch400"],
            $_POST["CADD311"],
            $_POST["ES202"],
            $_POST["PurCom"],
            $_POST["UTS"],
            $_POST["PATHFit4"],
            $id
        ]);

        // Update third year courses
        $thirdyear_query = "
            UPDATE archithirdyear 
            SET `Arch315` = ?, `Arch314` = ?, `Arch221` = ?, `ES206` = ?, `Arch311` = ?, `Arch313` = ?, `CADD322` = ?, `Arch326` = ?, `Arch325` = ?, `Arch312` = ?, `Arch324` = ?, `Arch322` = ?, `Arch320` = ?, `CE322` = ? 
            WHERE `StudentID` = ?
        ";
        $thirdyear_stmt = $pdo->prepare($thirdyear_query);
        $thirdyear_stmt->execute([
            $_POST["Arch315"],
            $_POST["Arch314"],
            $_POST["Arch221"],
            $_POST["ES206"],
            $_POST["Arch311"],
            $_POST["Arch313"],
            $_POST["CADD322"],
            $_POST["Arch326"],
            $_POST["Arch325"],
            $_POST["Arch312"],
            $_POST["Arch324"],
            $_POST["Arch322"],
            $_POST["Arch320"],
            $_POST["CE322"],
            $id
        ]);

        // Update fourth year courses
        $fourthyear_query = "
            UPDATE archifourthyear 
            SET `Arch417` = ?, `Arch415` = ?, `Arch413` = ?, `CE413` = ?, `Arch323` = ?, `Arch411` = ?, `TEM` = ?, `Arch428` = ?, `Arch424` = ?, `CE424` = ?, `Arch421` = ?, `Tech101` = ?, `Arch422` = ?, `ArchCSE420` = ? 
            WHERE `StudentID` = ?
        ";
        $fourthyear_stmt = $pdo->prepare($fourthyear_query);
        $fourthyear_stmt->execute([
            $_POST["Arch417"],
            $_POST["Arch415"],
            $_POST["Arch413"],
            $_POST["CE413"],
            $_POST["Arch323"],
            $_POST["Arch411"],
            $_POST["TEM"],
            $_POST["Arch428"],
            $_POST["Arch424"],
            $_POST["CE424"],
            $_POST["Arch421"],
            $_POST["Tech101"],
            $_POST["Arch422"],
            $_POST["ArchCSE420"],
            $id
        ]);

        // Update fifth year courses
        $fifthyear_query = "
            UPDATE archififthyear 
            SET `Arch519` = ?, `Arch511` = ?, `Arch513` = ?, `STS` = ?, `Rizal` = ?, `GnS` = ?, `Arch520` = ?, `Arch522` = ?, `FL01` = ?, `ArchSCE520` = ? 
            WHERE `StudentID` = ?
        ";
        $fifthyear_stmt = $pdo->prepare($fifthyear_query);
        $fifthyear_stmt->execute([
            $_POST["Arch519"],
            $_POST["Arch511"],
            $_POST["Arch513"],
            $_POST["STS"],
            $_POST["Rizal"],
            $_POST["GnS"],
            $_POST["Arch520"],
            $_POST["Arch522"],
            $_POST["FL01"],
            $_POST["ArchSCE520"],
            $id
        ]);

        // Close the database connection
        $pdo = null;
        $student_stmt = null;

        // Set success message and redirect
        $_SESSION['message'] = "Student Number: " . $id . " is successfully updated";
        header("Location: ../../Addnew.php");
        die();
    } catch (PDOException $e) {
        $_SESSION['message'] = "Sorry! There are some technical error";
        die("Query Failed: " . $e->getMessage());

    }
}

if (isset($_POST["ceupdate_btn"])) {
    $id = $_POST["studentid"];
    $firstname = strtoupper($_POST["firstname"]);
    $middlename = strtoupper($_POST["middlename"]);
    $lastname = strtoupper($_POST["lastname"]);
    $yearlevel = strtoupper($_POST["year"]);
    $standing = strtoupper($_POST["standing"]);
    $status = strtoupper($_POST["status"]);
    $email = strtoupper($_POST["email"]);
    $gender = strtoupper($_POST["gender"]);
    $number = $_POST["number"];
    $department = strtoupper($_POST["department"]);
    $gpa = $_POST["gpa"];

    try {
        require_once "dbh.inc.php";
        $student_query = "UPDATE infostudent SET `FIRST NAME` = ?, `MIDDLE NAME` = ?, `LAST NAME` = ?, `YEAR LEVEL` = ?, `STANDING` = ?, `STATUS` = ?, `EMAIL` = ?, `GENDER` = ?, `NUMBER` = ?, `GPA` = ?, `DEPARTMENT`=? WHERE `STUDENT ID` = ?";
        $student_stmt = $pdo->prepare($student_query);
        $student_stmt->execute([$firstname, $middlename, $lastname, $yearlevel, $standing, $status, $email, $gender, $number, $gpa, $department, $id]);

        $firstyear_query = "
            UPDATE firstyear 
            SET `CE 111` = ?, `CHEM 111` = ?, `ART APP` = ?, `ES 102` = ?, `MMW` = ?, `MATH 111` = ?, `TCW` = ?, `PATHFIT 1` = ?, `NSTP 101` = ?, `PurCom` = ?, `ES 103` = ?, `ES 106` = ?, `MOM` = ?, `MATH 121` = ?, `Phys 120` = ?, `RPH` = ?, `PATHFIT 2` = ?, `NSTP 102` = ? 
            WHERE `STUDENT ID` = ?
        ";

        $firstyear_stmt = $pdo->prepare($firstyear_query);
        $firstyear_stmt->execute([$_POST["CE111"], $_POST["CHEM111"], $_POST["ArtApp"], $_POST["ES102"], $_POST["MMW"], $_POST["MATH111"], $_POST["TCW"], $_POST["PATHFIT1"], $_POST["NSTP101"], $_POST["PurCom"], $_POST["ES103"], $_POST["ES106"], $_POST["MOM"], $_POST["MATH121"], $_POST["Phys120"], $_POST["RPH"], $_POST["PATHFIT2"], $_POST["NSTP102"], $id]);

        $secondyear_query = "
            UPDATE secondyear 
            SET `CE 211` = ?, `CE 212` = ?, `ES 202` = ?, `ES 208` = ?, `ES 301` = ?, `ES 209` = ?, `FIL 101` = ?, `PATHFIT 3` = ?, `CE 222` = ?, `STS` = ?, `ES 203` = ?, `FIL 103` = ?, `UTS` = ?, `PATHFIT 4` = ?, `CE 312` = ?, `CE 324` = ?, `RIZAL` = ?, `ES 205` = ? 
            WHERE `STUDENT ID` = ?
        ";
        $secondyear_stmt = $pdo->prepare($secondyear_query);
        $secondyear_stmt->execute([$_POST["CE211"], $_POST["CE212"], $_POST["ES202"], $_POST["ES208"], $_POST["ES301"], $_POST["ES209"], $_POST["FIL101"], $_POST["PATHFIT3"], $_POST["CE222"], $_POST["STS"], $_POST["ES203"], $_POST["FIL103"], $_POST["UTS"], $_POST["PATHFIT4"], $_POST["CE312"], $_POST["CE324"], $_POST["Rizal"], $_POST["ES205"], $id]);

        $thirdyear_query = "
            UPDATE thirdyear 
            SET `ES 303` = ?, `CE 311` = ?, `CE 313` = ?, `CE 314` = ?, `CE 316` = ?, `CE 322` = ?, `CE 325` = ?, `CE 323` = ?, `CE 326` = ?, `ETHICS` = ?, `CE 411` = ?, `CE 413` = ?, `CE 415` = ?, `CE 416` = ?, `CE 417` = ?, `SS 100` = ?, `CE 315` = ?, `CE 412` = ?, `GnS` = ? 
            WHERE `STUDENT ID` = ?
        ";
        $thirdyear_stmt = $pdo->prepare($thirdyear_query);
        $thirdyear_stmt->execute([$_POST["ES303"], $_POST["CE311"], $_POST["CE313"], $_POST["CE314"], $_POST["CE316"], $_POST["CE322"], $_POST["CE325"], $_POST["CE323"], $_POST["CE326"], $_POST["Ethic"], $_POST["CE411"], $_POST["CE413"], $_POST["CE415"], $_POST["CE416"], $_POST["CE417"], $_POST["SS100"], $_POST["CE315"], $_POST["CE412"], $_POST["GnS"], $id]);

        $fourthyear_query = "
            UPDATE fourthyear 
            SET `ES 302` = ?, `CE 422` = ?, `CE 423` = ?, `CE 424` = ?, `CE 425` = ?, `CE 426` = ?, `CE 427` = ?, `CE 330` = ? 
            WHERE `STUDENT ID` = ?
        ";
        $fourthyear_stmt = $pdo->prepare($fourthyear_query);
        $fourthyear_stmt->execute([$_POST["ES302"], $_POST["CE422"], $_POST["CE423"], $_POST["CE424"], $_POST["CE425"], $_POST["CE426"], $_POST["CE427"], $_POST["CE330"], $id]);

        $_SESSION['message'] = "Student Number: " . $id . " is successfully Updated";
        header("Location: ../../Database.php");
        die();
    } catch (PDOException $e) {
        $_SESSION['message'] = "Sorry! There are some technical error";
        die("Query Failed: " . $e->getMessage());

    }
}

if (isset($_POST["cesave_btn"])) {
    $id = $_POST["studentid"];
    $firstname = strtoupper($_POST["firstname"]);
    $middlename = strtoupper($_POST["middlename"]);
    $lastname = strtoupper($_POST["lastname"]);
    $yearlevel = strtoupper($_POST["year"]);
    $standing = strtoupper($_POST["standing"]);
    $status = strtoupper($_POST["status"]);
    $email = strtoupper($_POST["email"]);
    $gender = strtoupper($_POST["gender"]);
    $department = strtoupper($_POST["department"]);
    $number = $_POST["number"];
    $gpa = $_POST["gpa"];



    try {
        require_once "dbh.inc.php";

        // Insert student information into the main student table
        $student_query = "INSERT INTO infostudent (`STUDENT ID`,`FIRST NAME`,`MIDDLE NAME`,`LAST NAME`,`YEAR LEVEL`,`STANDING`,`STATUS`,`EMAIL`,`GENDER`,`NUMBER`,`GPA`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $student_stmt = $pdo->prepare($student_query);

        $student_stmt->execute([$id, $firstname, $middlename, $lastname, $yearlevel, $standing, $status, $email, $gender, $number, $gpa]);

        $firstyear_query = "INSERT INTO `cefirstyear` (`STUDENT ID`, `CE 111`, `CHEM 111`, `ART APP`, `ES 102`, `MMW`, `MATH 111`, `TCW`, `PATHFIT 1`, `NSTP 101`, `PurCom`, `ES 103`, `ES 106`, `MOM`, `MATH 121`, `Phys 120`, `RPH`, `PATHFIT 2`, `NSTP 102`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $firstyear_stmt = $pdo->prepare($firstyear_query);
        $firstyear_stmt->execute([$id, $_POST["CE111"], $_POST["CHEM111"], $_POST["ArtApp"], $_POST["ES102"], $_POST["MMW"], $_POST["MATH111"], $_POST["TCW"], $_POST["PATHFIT1"], $_POST["NSTP101"], $_POST["PurCom"], $_POST["ES103"], $_POST["ES106"], $_POST["MOM"], $_POST["MATH121"], $_POST["Phys120"], $_POST["RPH"], $_POST["PATHFIT2"], $_POST["NSTP102"]]);

        // Insert all courses for the second year in a single query
        $secondyear_query = "INSERT INTO `cesecondyear` (`STUDENT ID`, `CE 211`, `CE 212`, `ES 202`, `ES 208`, `ES 301`, `ES 209`, `FIL 101`, `PATHFIT 3`, `CE 222`, `STS`, `ES 203`, `FIL 103`, `UTS`, `PATHFIT 4`, `CE 312`, `CE 324`, `RIZAL`, `ES 205`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $secondyear_stmt = $pdo->prepare($secondyear_query);
        $secondyear_stmt->execute([$id, $_POST["CE211"], $_POST["CE212"], $_POST["ES202"], $_POST["ES208"], $_POST["ES301"], $_POST["ES209"], $_POST["FIL101"], $_POST["PATHFIT3"], $_POST["CE222"], $_POST["STS"], $_POST["ES203"], $_POST["FIL103"], $_POST["UTS"], $_POST["PATHFIT4"], $_POST["CE312"], $_POST["CE324"], $_POST["Rizal"], $_POST["ES205"]]);

        // Insert all courses for the third year in a single query
        $thirdyear_query = "INSERT INTO `cethirdyear` (`STUDENT ID`, `ES 303`, `CE 311`, `CE 313`, `CE 314`, `CE 316`, `CE 322`, `CE 325`, `CE 323`, `CE 326`, `Ethc`, `CE 411`, `CE 413`, `CE 415`, `CE 416`, `CE 417`, `SS 100`, `CE 315`, `CE 412`, `GNS`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $thirdyear_stmt = $pdo->prepare($thirdyear_query);
        $thirdyear_stmt->execute([$id, $_POST["ES303"], $_POST["CE311"], $_POST["CE313"], $_POST["CE314"], $_POST["CE316"], $_POST["CE322"], $_POST["CE325"], $_POST["CE323"], $_POST["CE326"], $_POST["Ethic"], $_POST["CE411"], $_POST["CE413"], $_POST["CE415"], $_POST["CE416"], $_POST["CE417"], $_POST["SS100"], $_POST["CE315"], $_POST["CE412"], $_POST["GnS"]]);

        // Insert all courses for the fourth year in a single query
        $fourthyear_query = "INSERT INTO `cefourthyear` (`STUDENT ID`, `ES 302`, `CE 422`, `CE 423`, `CE 424`, `CE 425`, `CE 426`, `CE 427`, `CE 330`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $fourthyear_stmt = $pdo->prepare($fourthyear_query);
        $fourthyear_stmt->execute([$id, $_POST["ES302"], $_POST["CE422"], $_POST["CE423"], $_POST["CE424"], $_POST["CE425"], $_POST["CE426"], $_POST["CE427"], $_POST["CE330"]]);


        $pdo = null;
        $student_stmt = null;

        $_SESSION['message'] = "Student Number: " . $id . " is successfully created";
        header("Location: ../../Addnew.php");
        die();
    } catch (PDOException $e) {
        $_SESSION['message'] = "Sorry! There are some technical error";
        die("Query Failed: " . $e->getMessage());

    }
}

if (isset($_POST["archisave_btn"])) {
    $id = $_POST["studentid"];
    $firstname = strtoupper($_POST["firstname"]);
    $middlename = strtoupper($_POST["middlename"]);
    $lastname = strtoupper($_POST["lastname"]);
    $yearlevel = strtoupper($_POST["year"]);
    $standing = strtoupper($_POST["standing"]);
    $status = strtoupper($_POST["status"]);
    $email = strtoupper($_POST["email"]);
    $gender = strtoupper($_POST["gender"]);
    $department = strtoupper($_POST["department"]);
    $number = $_POST["number"];
    $gpa = $_POST["gpa"];



    try {
        require_once "dbh.inc.php";

        // Insert student information into the main student table
        $student_query = "INSERT INTO infostudent (`StudentID`,`FIRSTNAME`,`MIDDLENAME`,`LASTNAME`,`YEARLEVEL`,`STANDING`,`STATUS`,`EMAIL`,`GENDER`,`NUMBER`,`GPA`,`DEPARTMENT`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $student_stmt = $pdo->prepare($student_query);

        $student_stmt->execute([$id, $firstname, $middlename, $lastname, $yearlevel, $standing, $status, $email, $gender, $number, $gpa, $department]);

        $firstyear_query = "INSERT INTO `archifirstyear` (`StudentID`, `Arch111`, `Arch112`, `Arch113`, `Arch114`, `Arch115`, `MMW`, `TCW`, `ArtApp`, `PATHFit1`, `NSTP101`, `Arch122`, `Arch123`, `Arch124`, `Arch125`, `Arch126`, `Arch121`, `Math112`, `Ethc`, `PATHFit2`, `NSTP102`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $firstyear_stmt = $pdo->prepare($firstyear_query);
        $firstyear_stmt->execute([$id, $_POST["Arch111"], $_POST["Arch112"], $_POST["Arch113"], $_POST["Arch114"], $_POST["Arch115"], $_POST["MMW"], $_POST["TCW"], $_POST["ArtApp"], $_POST["PATHFit1"], $_POST["NSTP101"], $_POST["Arch122"], $_POST["Arch123"], $_POST["Arch124"], $_POST["Arch125"], $_POST["Arch126"], $_POST["Arch121"], $_POST["Math112"], $_POST["Ethc"], $_POST["PATHFit2"], $_POST["NSTP102"]]);


        // Insert all courses for the second year in a single query
        $secondyear_query = "INSERT INTO `archisecondyear` (`StudentID`, `Arch213`, `Arch215`, `Arch216`, `Arch212`, `Math106`, `CE211`, `RPH`, `Fil102`, `PATHFit3`, `Arch224`, `Arch227`, `Arch223`, `Arch400`, `CADD311`, `ES202`, `PurCom`, `UTS`, `PATHFit4`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $secondyear_stmt = $pdo->prepare($secondyear_query);
        $secondyear_stmt->execute([$id, $_POST["Arch213"], $_POST["Arch215"], $_POST["Arch216"], $_POST["Arch212"], $_POST["Math106"], $_POST["CE211"], $_POST["RPH"], $_POST["Fil102"], $_POST["PATHFit3"], $_POST["Arch224"], $_POST["Arch227"], $_POST["Arch223"], $_POST["Arch400"], $_POST["CADD311"], $_POST["ES202"], $_POST["PurCom"], $_POST["UTS"], $_POST["PATHFit4"]]);


        // Insert all courses for the third year in a single query
        $thirdyear_query = "INSERT INTO `archithirdyear` (`StudentID`, `Arch315`, `Arch314`, `Arch221`, `ES206`, `Arch311`, `Arch313`, `CADD322`, `Arch326`, `Arch325`, `Arch312`, `Arch324`, `Arch322`, `Arch320`, `CE322`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $thirdyear_stmt = $pdo->prepare($thirdyear_query);
        $thirdyear_stmt->execute([$id, $_POST["Arch315"], $_POST["Arch314"], $_POST["Arch221"], $_POST["ES206"], $_POST["Arch311"], $_POST["Arch313"], $_POST["CADD322"], $_POST["Arch326"], $_POST["Arch325"], $_POST["Arch312"], $_POST["Arch324"], $_POST["Arch322"], $_POST["Arch320"], $_POST["CE322"]]);

        // Insert all courses for the fourth year in a single query
        $fourthyear_query = "INSERT INTO `archifourthyear` (`StudentID`, `Arch417`, `Arch415`, `Arch413`, `CE413`, `Arch323`, `Arch411`, `TEM`, `Arch428`, `Arch424`, `CE424`, `Arch421`, `Tech101`, `Arch422`, `ArchCSE420`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $fourthyear_stmt = $pdo->prepare($fourthyear_query);
        $fourthyear_stmt->execute([$id, $_POST["Arch417"], $_POST["Arch415"], $_POST["Arch413"], $_POST["CE413"], $_POST["Arch323"], $_POST["Arch411"], $_POST["TEM"], $_POST["Arch428"], $_POST["Arch424"], $_POST["CE424"], $_POST["Arch421"], $_POST["Tech101"], $_POST["Arch422"], $_POST["ArchCSE420"]]);

        $fifthyear_query = "INSERT INTO `archififthyear` (`StudentID`, `Arch519`, `Arch511`, `Arch513`, `STS`, `Rizal`, `GnS`, `Arch520`, `Arch522`, `FL01`, `ArchSCE520`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $fifthyear_stmt = $pdo->prepare($fifthyear_query);
        $fifthyear_stmt->execute([$id, $_POST["Arch519"], $_POST["Arch511"], $_POST["Arch513"], $_POST["STS"], $_POST["Rizal"], $_POST["GnS"], $_POST["Arch520"], $_POST["Arch522"], $_POST["FL01"], $_POST["ArchSCE520"]]);

        $pdo = null;
        $student_stmt = null;

        $_SESSION['message'] = "Student Number: " . $id . " is successfully created";
        header("Location: ../../Addnew.php");
        die();
    } catch (PDOException $e) {
        $_SESSION['message'] = "Sorry! There are some technical error";
        die("Query Failed: " . $e->getMessage());

    }
}






?>