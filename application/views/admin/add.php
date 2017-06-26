<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Question+Answer</title>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h3>Add</h3>
    <?php
      echo form_open('admin/insert2');
      echo "คำถาม:";
      echo form_input('question')."</br>";
      echo "คำตอบ:";
      echo form_input('answer')."</br>";
      echo form_submit('submit','Save');
      echo form_reset('reset','Clear');
      echo form_close();
    ?>
  </body>
</html>
