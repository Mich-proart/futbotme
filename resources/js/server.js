// importamos librerias necesarias
// // const express = require("express");
// // const http = require("http");
// // const socketIo = require("socket.io");
// // const mysql = require("mysql");

// // // inicialisamos constantes y auxiliares
// const PORT = 3000;
// const app = express();
// const server = http.createServer(app);
// const io = require("socket.io")(server, {
//     cors: { origin: "*" },
// });

// conexion a base de datos
// const db = mysql.createConnection({
//     host: "localhost",
//     user: "root",
//     password: "",
//     database: "new_futbolme",
// });

// comprobamos si conectamos o no, para abrir o cerrar la conexion
// db.connect((err) => {
//     if (err) {
//         console.error("Error de conexión a la base de datos: " + err.stack);
//         return;
//     }
//     console.log("Conectado como id " + db.threadId);
// });

// al conectar hacemos toda la logica y la devolvemos al cliente
// io.on("connection", (socket) => {
//     console.log("Conectado");

//     // Realizar la consulta para obtener datos en tiempo real
//     setInterval(() => {
//         const consulta = "SELECT * FROM users"; // Agrega tu consulta aquí
//         db.query(consulta, (error, results) => {
//             if (error) {
//                 console.error(
//                     "Error al ejecutar la consulta: " + error.message
//                 );
//                 return;
//             }
//             socket.emit("actualizacion_en_tiempo_real", results);
//         });
//     }, 2000);

//     // desconectamos al cliente que entro
//     socket.on("disconnect", () => {
//         console.log("Desconectado");
//     });
// });

// levantamos el servidor
// server.listen(PORT, () => {
//     console.log("Servidor escuchando en el puerto " + PORT);
// });

//************* DESDE AQUI PARA LEER FICHERO
//************* DESDE AQUI PARA LEER FICHERO
//************* DESDE AQUI PARA LEER FICHERO

// inicializamos todas las variables
const express = require("express");
const http = require("http");
const socketIo = require("socket.io");
const fs = require("fs");
const app = express();
const server = http.createServer(app);
const rutaJson = "/home/d-shisnet/Documentos/futbotme/directos.json";

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

                // Solo envía si hay cambios
                if (
                    JSON.stringify(nuevosDatos) !==
                    JSON.stringify(lastKnownData)
                ) {
                    io.emit("nuevos-datos", nuevosDatos);
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
    socket.emit("json-data", datos);
});

// abrimos el servidor y los procesos en el puerto 3000
const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`);
});