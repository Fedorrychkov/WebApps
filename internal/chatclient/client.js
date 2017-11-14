var socket = require('socket.io-client')('http://localhost:3000');

socket.on('connect', function() {
  console.log('connected to server');
});

socket.on('news', function (data) {
  console.log(data);
  socket.emit('my other event', { my: 'data' });
});