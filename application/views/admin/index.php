<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Bot</title>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="page-header">
      <h3>คำถาม - คำตอบ</h3>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <?php
          $attributes = array('class' => 'btn btn-primary');
          echo anchor('admin/insert','Add', $attributes)."</br>";
          if ($query->num_rows()>0) {
            echo "<div class='table-responsive'>
                  <table class='table table-striped'>
                    <tr>
                      <td>คำถาม</td>
                      <td>คำตอบ</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>";
            foreach ($query->result_array() as $row) {
              $id=$row['id'];
              $question=$row['question'];
              $answer=$row['answer'];
              $update=anchor('admin/update/'.$id,'Edit');
              $delete=anchor('admin/delete/'.$id,'Delete');

              echo "<tr>
                      <td>$question</td>
                      <td>$answer</td>
                      <td>$update</td>
                      <td>$delete</td>
                    </tr>";
            }
            echo "</table>
                  </div>";
          }
        ?>
      </div>
    </div>
  </body>
</html>
