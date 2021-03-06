<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chat</title>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<style>
			body{
				background-color: #f2f2f2;
			}
			#content{
				/*
				border: 1px solid;
				*/
				background-color: #99ccff;
				margin-left: auto;
				margin-right: auto;
				width: auto;
				height: 400px;
				overflow: auto;
			}
			#content p{
				padding: 1em;
				margin: 1em;
				/*
				border: 1px solid;
				*/
			}
			#message{
				margin-top: 10px;
				margin-left: auto;
				margin-right: auto;
				/*
				width: 300px;
				*/
				overflow: auto;
			}
			#message {
				margin: 1em 0 0 0;
			}
			#message #chat_message{
				/*
				border: 1px solid;
				*/
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
				background-color: #ccffcc;
			}
			#gif{
				margin-top: 200px;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#submit').click(function(event){
          event.preventDefault();
					var chat_message = $('#chat_message').val();
					var old = $('#content').html();

					$("#gif").attr('src',"<?php echo base_url();?>assets/img/Crying_baby_2.gif");

          $.ajax({
            type:'post',
						//dataType:'json',
						//contentType: 'application/json',
            data:{chat_message:chat_message,old:old},
            url:'<?php echo site_url('/chat/find_answer'); ?>',
            success:function(result) {

              $('#content').html(old
								+'<p class="text-left" id="men-message">'+'you: '+chat_message+'</p>'
								+'<p class="text-left" id="bot-message">'+result+'</p>'
							);
							$("#content").animate({ scrollTop: $("#content")[0].scrollHeight}, 1000);
    					$('#chat_message').val('');
							setTimeout(function(){
								$("#gif").attr('src',"<?php echo base_url();?>assets/img/Cave_man.gif");
							}, 3000);
            }
          });
				});
			});
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="col-xs-4 col-sm-4 col-md-4 col-md-offset-3">
							<img id="gif" src="<?php echo base_url();?>assets/img/Cave_man.gif" class="img-responsive">
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="page-header">
							<h1 class="text-center">สอบถามงานทะเบียน<small> ฝากคำถามสั้นๆ</small></h1>
						</div>
						<div class="well" id="content">
								<p class="text-left" id="bot-message">สวัสดี</p>
						</div>
						<div id="message">
					    <form method="post">
								<div class="form-group">
									<div class="col-xs-8 col-sm-8 col-md-8">
					        	<input type="text" class="form-control" id="chat_message" name="chat_message" placeholder="ส่งข้อความ">
									</div>
									<input type="submit" class="btn btn-primary" id="submit" value="Send">
								</div>
					    </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
