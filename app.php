<script src="./socket.io/socket.io-1.4.5.js"></script>
<script>
  var socket = io('http://salman.local:3000');
  socket.on('news', function (data) {
    console.log(data);
    socket.emit('my other event', { my: 'data' });
  });

  function logResponse(msg){
	socket.emit('button-hit',{data: msg});
  }
</script>
<html>
<body>
<input type="button" value="Hit Me" onclick="javascript:logResponse('Button Hit')">
</body>
</html>
