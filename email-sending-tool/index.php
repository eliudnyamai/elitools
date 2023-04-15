<?php
 session_start();
 include 'Database.php';
 $stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';

display_head('Free Online Tools','toolske, toolske.com, Resize an image online for free,you can resizea jpg image online for free, resize a photo online for free, resize a png image online for free,resize a tiff image online for free. Text to sql, No signup needed');
?>
<body style="width:75%;margin:auto;">

<div class="text-info status"></div>						
  <form action="" id="insertForm" method="post">							
  <div class="col-12">
                  <label for="inputNanme4"  class="form-label">Your Name</label>
                  <input type="text" class="form-control"  name="name" id="name" >
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">File</label>
                  <input type="file" class="form-control" name="file" id="file">
                </div>
                <div class="text-center">
                  <button type="submit" name="insert" id="insert" class="btn btn-primary">Insert Now</button>
                </div> 
  </form>
</div>
<!-- Table with stripped rows -->
<table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pdf</th>
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
                  </tr>';
                      }
                    ?>
              </table>
              <div class="text-center">
                  <button  name="send" id="send" class="btn btn-primary">Send Emails</button>
                </div> 
              <!-- End Table with stripped rows -->

<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>

</html>