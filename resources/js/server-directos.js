// inicializamos todas las variables
const express = require("express");
const http = require("http");
const socketIo = require("socket.io");
const fs = require("fs");
const app = express();
const server = http.createServer(app);
const rutaJson = "./directos-futbolme.json";

// aregamos cors para permitir conexions
const io = require("socket.io")(server, {
    cors: { origin: "*" },
});

// Observar cambios en el archivo JSON
let lastKnownData = null;
fs.watch(rutaJson, (event, filename) => {
    if (event === "change") {
        fs.readFile(rutaJson, "utf8", (err, data) => {
            if (err) {
                console.error(err);
                return;
            }

            // validacio de ejecucion captura de errores
            try {
                const nuevosDatos = JSON.parse(data);

                console.log(nuevosDatos)

                // Solo envía si hay cambios
                if (
                    JSON.stringify(nuevosDatos) !==
                    JSON.stringify(lastKnownData)
                ) {
                    io.emit("nuevos-datos-futbolme", nuevosDatos);
                    lastKnownData = nuevosDatos;
                }
            } catch (error) {
                console.error("Error al parsear JSON:", error);
            }
        });
    }
});

// Leer el archivo JSON y enviarlo al cliente
io.on("connection", (socket) => {
    const contenidoJson = fs.readFileSync(rutaJson, "utf8");
    const datos = JSON.parse(contenidoJson);
    socket.emit("json-data-futbolme", datos);
});

// abrimos el servidor y los procesos en el puerto 3000
const PORT = process.env.PORT || 5000;
server.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`);
});





// const https = require("https");
// const fs = require("fs");

// const options = {
//   key: fs.readFileSync("ruta_de_tu_clave_privada.key"),
//   cert: fs.readFileSync("ruta_de_tu_certificado_ssl.crt"),
// };

// const app = express();

// // Configura tu aplicación y las rutas

// const server = https.createServer(options, app);

// const PORT = process.env.PORT || 443;
// server.listen(PORT, () => {
//   console.log(`Servidor escuchando en el puerto ${PORT}`);
// });
