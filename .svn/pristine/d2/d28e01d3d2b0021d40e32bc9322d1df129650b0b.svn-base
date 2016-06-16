<html>
<head>
<title>Push notification long polling server streaming on a MySQL db</title>
<style>
dd, dt {
	float: left;
	margin: 0;
	padding: 5px;
	clear: both;
	display: block;
	width: 100%;
}

dt {
	background: #ddd;
}

time {
	color: gray;
}
</style>
</head>
<body>
	<time></time>
	<sql></sql>
	<div id="container">Loading ...</div>
	<script src="socket.io/socket.io-1.4.5.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>

// create a new websocket
var socket = io.connect('http://salman.local:3000?profile_id=<?php echo $_REQUEST["profile_id"];?>');
// on message received we print all the data inside the #container div
socket.on('notification', function (data) {
var usersList = "<dl>";
$.each(data.users,function(index,count){
usersList += "<dt>" + count.c + "</dt>\n";
});

usersList += "</dl>";
$('#container').html(usersList);

$('time').html('Last Update:' + data.time);
$('sql').html('Last Update:' + data.sql);
});
</script>
</body>
</html>