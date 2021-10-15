const express = require('express');
const app = express(); 
app.get('/', (req, res)=>{
    res.send('Node inside of a docker container')
});
app.listen('8080','0.0.0.0');
console.log('Node in Docker is ready');