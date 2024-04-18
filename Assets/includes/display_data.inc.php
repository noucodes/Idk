<?php
// Assuming you have already connected to your database

try {
    require_once "dbh.inc.php";

    // Prepare SQL statement
    $stmt = $pdo->prepare("SELECT * FROM infostudent");
    // Execute the statement
    $stmt->execute();

    // Check if there are any rows returned
    if ($stmt->rowCount() > 0) {
        function redirectLink($course, $studentID)
        {
            $course = strtolower($course); // Convert course to lowercase for case insensitivity

            if ($course === "b.s. in architecture") {
                return "editarchi.php?id=" . $studentID; // Redirect to editarchi.php with StudentID
            } elseif ($course === "b.s. in civil engineering") {
                return "editcivil.php?id=" . $studentID; // Redirect to editcivil.php with StudentID
            } else {
                return "javascript:void(0);"; // Handle invalid input, or you can return another default link
            }
        }
        // Fetch each row and display it in HTML table
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td>
                    <?= $row['StudentID'] ?>
                </td>
                <td>
                    <?= $row['LASTNAME'] ?>,
                    <?= $row['FIRSTNAME'] ?>
                </td>
                <td>
                    <?= $row['EMAIL'] ?>
                </td>
                <td>
                    <?= $row['YEARLEVEL'] ?>
                </td>
                <td>
                    <?= $row['STATUS'] ?>
                </td>
                <td>
                    <?= $row['GPA'] ?>
                </td>
                <td>
                    <?= $row['STANDING'] ?>
                </td>
                <td>
                    <?= $row['GENDER'] ?>
                </td>
                <td>
                    <?= $row['DEPARTMENT'] ?>
                </td>
                <td><a href="<?php echo redirectLink($row["DEPARTMENT"], $row["StudentID"]); ?>" class="btn btn-primary btn-sm"
                        tabindex="-1" role="button"><i class="fa-solid fa-circle-info"></i> Details</a></td>
                <td>

                    <button onclick="getData(this)" data-student-id="<?= $row["StudentID"] ?>" class="btn btn-danger btn-sm"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Delete
                        Data</button>
                </td>
            </tr>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete <br>
                            Student No.
                            <?= $row["StudentID"]; ?> <br>
                            Name:
                            <?= $row["LASTNAME"]; ?>,
                            <?= $row["FIRSTNAME"]; ?>
                        </div>
                        <div class="modal-footer">
                            <form id="delete_form" action="Assets/includes/formhandler.inc.php" method="POST">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-danger" name="delete_btn" type="submit"
                                    value="<?= $row["StudentID"] ?>">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <?php

        }
    } else {

    }
    $stmt = null;
    $pdo = null;
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>