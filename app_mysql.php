<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://salman.local:3000/socket.io/socket.io.js"></script>
<script>
$(document).ready(function(){
    // Connect to our node/websockets server
    var socket = io.connect('http://salman.local:3000');
 
    // Initial set of notes, loop through and add to list
    socket.on('initial notes', function(data){
        var html = ''
        for (var i = 0; i < data.length; i++){
            // We store html as a var then add to DOM after for efficiency
            html += '<li>' + data[i].note + '</li>'
        }
        $('#notes').html(html)
    })
 
    // New note emitted, add it to our list of current notes
    socket.on('new note', function(data){
        $('#notes').append('<li>' + data.note + '</li>')
    })
 
    // New socket connected, display new count on page
    socket.on('users connected', function(data){
        $('#usersConnected').html('Users connected: ' + data)
    })
 
    // Add a new (random) note, emit to server to let others know
    $('#newNote').click(function(){
        var newNote = 'This is a random ' + (Math.floor(Math.random() * 100) + 1)  + ' note'
        socket.emit('new note', {note: newNote})
    })
})
</script>
<ul id="notes"></ul>
<div id="usersConnected"></div>
<div id="newNote">Create a new note</div>
