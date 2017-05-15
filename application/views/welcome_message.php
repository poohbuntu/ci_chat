<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chat</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
			#message textarea{
				border: 1px solid;
				padding: 6px;
				text-decoration: none;
			}
			button{
				border: none;
				padding: 6px;
				text-decoration: none;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$('button').click(function(){
					var message = $('textarea').val();
					var old = $('#content').html();
					$('#content').html(old+'<p>'+message+'</p>');
					$('textarea').val('');
				});
			});
		</script>
	</head>
	<body>
		<h1>Lets chat</h1>
		<div id="content">
			<p>Here's our chat data</p>
		</div>
		<div id="message">
			<textarea rows="2" cols="25">Leave a comment!</textarea>
			<button>send</button>
		</div>
	</body>
</html>
