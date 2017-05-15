<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chat</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<style>
			#content{
				border: 1px solid;
				margin-left: auto;
				margin-right: auto;
				width: 300px;
				height: 300px;
				overflow: auto;
			}
			#content p{
				padding: 1em;
				margin: 1em;
				border: 1px solid;
			}
			#message{
				margin-top: 10px;
				margin-left: auto;
				margin-right: auto;
				width: 300px;
				overflow: auto;
			}
			#message button{
				margin: 1em 0 0 0;
			}
			#message #chat_message{
				border: 1px solid;
				padding: 6px;
				text-decoration: none;
			}
			button{
				border: none;
				padding: 6px;
				text-decoration: none;
			}
			#bot-message{
				background-color: white;
			}
			#men-message{
				background-color: green;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#submit').click(function(event){
          event.preventDefault();
					var chat_message = $('#chat_message').val();
					var old = $('#content').html();
          $.ajax({
            type:'post',
            data:{chat_message:chat_message,old:old},
            url:'<?php echo site_url('chat/find_answer'); ?>',
            success:function(result) {
              $('#content').html(old+'<p id="men-message" class="text-right">'+chat_message+'</p>'+'<p id="bot-message" class="text-left">'+result+'</p>');
							$("#content").animate({ scrollTop: $("#content")[0].scrollHeight}, 1000);
    					$('#chat_message').val('');
            }
          });
				});
			});
		</script>
	</head>
	<body>
		<h1>สอบถามงานทะเบียน</h1>
		<div class="well" id="content">
			<p id="bot-message">สวัสดี</p>
		</div>
		<div id="message">
      <form method="post">
				<div class="form-group">
        	<input type="text" class="form-control" id="chat_message" name="chat_message" rows="2" cols="25" placeholder="ส่งข้อความ"></textarea>
  				<input type="submit" class="btn btn-default" id="submit" value="Send">
				</div>
      </form>
		</div>
	</body>
</html>
