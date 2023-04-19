<?php
 session_start();
 include 'Database.php';
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM Successfull_emails");
$stmt->execute();
$successfull_emails = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM failed_emails");
$stmt->execute();
$failed_emails = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';
display_head('Free Online Tools','toolske, toolske.com, Resize an image online for free,you can resizea jpg image online for free, resize a photo online for free, resize a png image online for free,resize a tiff image online for free. Text to sql, No signup needed');
?>
<body style="width:90%; margin:auto;">
<h2>Email Sending Tool</h2>
<div class="row">

  <div class="col-md-6 shadow p-3 mb-5  rounded border-right">
    <h3>Create A New Newsletter Rescipient</h3>
  <form action="" id="insertForm" method="post">							
                  <label for="inputNanme4"  class="form-label">Your Name</label>
                  <input type="text" required class="form-control"  name="name" id="name" >
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" required class="form-control" name="email" id="email">
                <div class="mt-1 text-center">
                  <button type="submit" name="insert" id="insert" class="btn btn-primary">CREATE</button>
                </div> 
  </form>
  <div id="rescipient-success" class="mt-1 alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                Rescipient added successfully
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
  </div>

  <div class="col-md-6 ">
  <h3>Upload Pdf</h3>

  <form action="" class="savepdf-form" method="post">							
                  <input required type="file" accept="application/pdf" class="form-control" name="file" id="file">
                <div class="text-center">
                  <button type="submit" name="save-pdf" id="save-pdf" class="btn btn-primary">UPLOAD PDF</button>
                </div> 
</form>
<div id="upload-success" class="mt-1 alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                Pdf upload success
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
  </div>
</div>			


<!-- Table with stripped rows -->
<div class="shadow-sm p-3 mb-5 ">
  <H3 class="">Email List</H3>
<table class="shadow-lg p-3 mb-5 bg-white rounded table table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pdf</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($result as $row) {
                        echo '<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td><a href="php/'.$row['pdf'].'">'.$row['pdf'].'</a></td>
                    <td><i type="button" data-table="users" value="'.$row['id'].'"  class=" delete bx bxs-trash"></i><i  type="button" data-name="'.$row['name'].'" data-bs-toggle="modal" data-bs-target="#verticalycentered" value="'.$row['id'].'" class=" update bx bx-edit-alt"></i>
                    </td>

                  </tr>';
                      }
                    ?>
              </table>
              <div class="text-center">
                  <button  name="send" id="send" class="btn btn-primary">SEND EMAILS</button>
                </div> 
                <div id="sent-success" class="mt-1 alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    Emails Sending Task Completed
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
</div>

           
                <div class="row">
                  <div class="col-md-6">
                  <table class="table table-striped">
                <thead>
                  <h3 class="text-success" >Successfully Sent for previous sent</h3>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody class="text-success" id="sent-emails" >
                   <!-- Successul email appear here -->
                   <?php
                    foreach ($successfull_emails as $row) {
                        echo '<tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                  </tr>';
                      }
                    ?>
                    </tbody>

              </table>
                  </div>
                  <div class="col-md-6">
                  <table class="table table-striped">
                <thead>
                <h3 class="text-danger" >Failed For Previous Sent</h3>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Reason</th>
                  </tr>
                </thead>
                <tbody >
                    <?php
                    foreach ($failed_emails as $row) {
                        echo '<tr>
                    <td >'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['error'].'</td>
                  </tr>';
                      }
                    ?>
                    </tbody>
              </table>
                  </div>

 <!-- Vertically centered Modal -->
 
              <div class="update-record  modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog p-5 modal-dialog-centered">
                  <div class="p-2 modal-content">
                  <h3 class="text-info text-center" >Update Record</h3>
                  <form action="" class="savepdf-form" method="post">	
                    <input type="text" hidden name="name" id="name">						
                  <label for="inputEmail4" class="form-label">File</label>
                  <input required type="file" accept="application/pdf" class="form-control" name="file" id="file">
                <div class="text-center">
                  <button type="submit" name="save-pdf" id="save-pdf" class="btn btn-primary">Upload PDF</button>
                </div> 
</form>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

                </div>
              <!-- End Table with stripped rows -->

<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="script.js"></script>
<?php include 'includes/footer.php'?>
</body>

</html>