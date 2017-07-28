<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Question</title>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </head>
  <body>.
    <div class="page-header">
      <h3>Update</h3>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <?php
          $row=$query->row_array();
          $id=$row['id'];
          $question=$row['question'];
          $answer=$row['answer'];

          $submit = array('class' => 'btn btn-primary');
          $reset = array('class' => 'btn btn-default');

          echo form_open('admin/update2');
          echo "question:</br>";
          echo form_input('question',$question)."</br>";
          echo "answer:</br>";
          echo form_input('answer',$answer)."</br>";
          echo form_hidden('id',$id);
          echo form_submit('submit','Save',$submit);
          echo form_reset('reset','Clear',$reset);
          echo form_close();
        ?>
      </div>
    </div>
  </body>
</html>
