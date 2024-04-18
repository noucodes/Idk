<?php include 'assets/includes/header.inc.php'; ?>
<div class="d-flex justify-content-center m-4">
  <table id="students" class="table table-striped nowrap" style="width: 100%">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Year Level</th>
        <th>Status</th>
        <th>GPA</th>
        <th>Standing</th>
        <th>Gender</th>
        <th>Department</th>
        <th>Details</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
      <?php include 'assets/includes/display_data.inc.php'; ?>
    </tbody>
    <?php include 'Assets/includes/message.php' ?>
</div>
</body>
<script>
  let table = new DataTable('#students', {
    responsive: {
      details: {
        type: 'column',
        target: 'tr',
        display: DataTable.Responsive.display.modal({
          header: function (row) {
            var data = row.data();
            return 'Details for ' + data[1];
          }
        }),
        renderer: DataTable.Responsive.renderer.tableAll({
          tableClass: 'table'
        })
      }
    },
    columnDefs: [
      { targets: [2, 4], responsivePriority: 10001 }
    ],
    layout: {
      topStart: {
        buttons: [

          {
            extend: 'copyHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
          },
          {
            extend: 'print',
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
          },
          {
            extend: 'spacer',
            style: 'bar',
            text: 'Export files:'
          },
          {
            extend: 'csvHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
          },
          {
            extend: 'excelHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
          },
          {
            extend: 'pdfHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
          }
        ]
      }
    }
  });
  const toastcontent = document.querySelector(".toast");
  const toast = new bootstrap.Toast(toastcontent);
  toast.show();



  // Add event listener to the table
  function getData(button) {
    // Check if the clicked element is a button with class 'getDataButton'
    if (event.target.classList.contains('btn')) {
      // Get the parent row of the clicked button
      const row = event.target.closest('tr');
      // Get data from the row
      const studentId = row.cells[0].textContent;
      const lastName = row.cells[1].textContent;
      const modalbody = document.querySelector(".modal-body");
      const message = `
      Are you sure you want to delete?<br>
      Student No. ${studentId}<br>
      Name: ${lastName}
    `;
      // Do something with the data
      modalbody.innerHTML = message;
    }
  };


  function form_submit() {
    document.getElementById("delete_form").submit();
  }    
</script>

</html>