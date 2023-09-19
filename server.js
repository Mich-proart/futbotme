const express = require("express")

const PORT = 3000

const app = express()

const server = require("http").createServer(app)

const io = require("socket.io")(server, {
    cors: { origin : "*" }
})

io.on("connection", (socket)=>{
    
    console.log("conected");

    socket.on("disconnect", (socket)=>{
        console.log("desconected");
    })
})

server.listen(PORT, ()=>{
    console.log("Server listen "+PORT);
})