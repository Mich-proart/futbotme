const io = require('socket.io')(5000);
io.on('connection', function(socket) {
    console.log('Usuario conectado');

    socket.on('disconnect', function() {
        console.log('Usuario desconectado');
    });
});
