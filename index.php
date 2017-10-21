<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, user-scalable=0">
		<script src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript">
			function ajaxinc() {
				$.ajax({
					type: 'GET',
					url: 'inc.php',
					dataType: 'json',
					success: function(data){
						$("#likecount").html(data.count);
					}
				});
			}
		</script>
	</head>
	<body onclick="ajaxinc()">
		❤️<b id="likecount"><?php echo intval(file_get_contents('count.txt')); ?></b>
	</body>
</html>
