<?php
 session_start();
 include 'Database.php';
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT * FROM successfull_emails");
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
    Rescipient Added Successfully
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div id="rescipient-fail" class="mt-1 alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
    Rescipient Add Failed
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  </div>

  <div class="col-md-6 ">
    <h3>Create Email List By Uploading CSV</h3>
    <form action="" id="uploadcsv-form" class="uploadcsv-form" method="post">							
        <input required type="file" accept=".csv" class="form-control" name="file" id="file">
        <div class="text-center">
          <button type="submit" name="upload-csv" id="upload-csv" class="btn btn-primary">UPLOAD CSV</button>
        </div> 
    </form>
    <div id="csv-success" class="mt-1  alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        CSV upload success
       <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <h3 class="mt-5 text-center" >Add PDF File</h3>
       <form action="" class="savepdf-form" method="post">	
          <input required type="file" accept="application/pdf" class="form-control" name="file" id="file">
          <div class="text-center">
            <button type="submit" name="save-pdf" id="save-pdf" class="btn btn-primary">UPLOAD PDF</button>
          </div> 
        </form>
        <div id="pdf-success" class="mt-1 alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        PDF upload success
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
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $stmt = $pdo->prepare('SELECT COUNT(*) FROM users');
        $stmt->execute();
        $total_rows = $stmt->fetchColumn();
        echo '<strong>You are viewing page no '.$pageno.'</strong>';
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $sql = "SELECT * FROM users LIMIT :offset, :no_of_records_per_page";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindParam(':no_of_records_per_page', $no_of_records_per_page, PDO::PARAM_INT);
        $stmt->execute();
        $index=0;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          echo '<tr>
          <td>'.$row['id'].'</td>
          <td>'.$row['name'].' '.$row['surname'].'</td>
          <td>'.$row['email'].'</td>
          <td><a href="php/'.$row['pdf'].'">'.$row['pdf'].'</a></td>
          <td><i type="button" data-table="users" value="'.$row['id'].'"  class=" delete bx bxs-trash"></i><i  type="button" data-name="'.$row['name'].'" data-bs-toggle="modal" data-bs-target="#verticalycentered" value="'.$row['id'].'" class=" update bx bx-edit-alt"></i>
          </td>
        </tr>';
        }
?>
</table>
<ul class="pagination">
  <li><a href="?pageno=1">First</a></li>
  <li class="px-2 <?php if($pageno <= 1){ echo 'disabled'; } ?>">
      <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
  </li>
  <li class="px-2 <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
      <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
  </li>
  <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>
<form action="" id="send-form" method="post">							
    <p>Message Body</p>
    <div class="form-floating mb-3">
                      <textarea class="form-control" required placeholder="Type Your Message" id="message" style="height: 100px;"></textarea>
                      <label for="message">Type Your Message To Rescipients</label>
                    </div>
  <div class="text-center">
    <button  type="submit" name="send" id="send" class="btn btn-primary">SEND EMAILS</button>
  </div> 
  </form>


  <div id="sent-success" class="mt-1 alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
      Emails Sending Task Completed
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>

<div class="row">
  <div class="col-md-6 overflow-scroll" style="height:500px">
    <table class="table table-striped">
      <thead>
         <h3 class="text-success" >Successfully Sent for previous sent</h3>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
            </tr>
      </thead>
      <tbody class="text-success" id="sent-emails" >
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
  <div class="col-md-6 overflow-scroll" style="height:500px">
    <table class="table table-striped">
      <thead>
        <h3 class="text-danger" >Failed For Previous Sent</h3>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Reason</th>
        </tr>
      </thead>
      <tbody class="text-danger" >
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

<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="script.js"></script>
<?php include 'includes/footer.php'?>
</body>

</html>