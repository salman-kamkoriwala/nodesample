<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://salman.local:3000/socket.io/socket.io.js"></script>
<script>
var socket = io("http://salman.local:3000"),
    token = localStorage.getItem("token") || "";

socket.emit("user:login",{"userID": "1"});

socket.emit("getToken", {token: localStorage.getItem("token") || ""});
 
socket.on("gotToken", function(message){
    console.log(message);
    if(message.token != "") {
        localStorage.setItem("token", message.token);
        token = message.token;
    }
});
</script>