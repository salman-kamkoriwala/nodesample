var io = require('socket.io').listen(3000);

var socketSession = require("socket.io-mysql-session"),
    app = require('express')(),
    http = require('http').Server(app),
    Logger = require("filelogger"),                   //filelogger is not required, but supported by the middleware 
    logger = new Logger("error", "info", "my.log"),
    io = require("socket.io")(http),
    mysql = require("mysql"),
    options = {
        host: "localhost",
        port: 3306,
        user: "root",
        password: "mysql",
        database: "node"
        },
     db = mysql.createConnection(options);
 
//add the middleware 
 
io.use(new socketSession({
    db: db,           //MySQL conneciton - required 
    logger: logger,    //filelogger - optional 
    expiration: 3600  //expiration time in seconds - optional - defaults to 86400000 
}));

io.on("connection", function(socket){
    socket.on("user:login", function(params){
    	console.log('here');
        //do login stuff here with params 
        var userId = "id from code above";
        socket.session.set("userId", userId);
    });
 
    socket.on("user:securedEvent", function(params){
        var userId = socket.session.get("userId");
 
        if(userId != ""){
            //do secured user stuff 
        } else {
            //throw error 
        }
    });
});