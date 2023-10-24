//import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// import axios from 'axios';
// window.axios = axios;

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

// const express = require("express");
// const http = require("http");
// const socketIo = require("socket.io");
// const mysql = require("mysql");

// const PORT = 3000;
// const app = express();
// const server = http.createServer(app);
// const io = socketIo(server);

// const db = mysql.createConnection({
//   host: "tu_host",
//   user: "tu_usuario",
//   password: "tu_contraseña",
//   database: "tu_base_de_datos",
// });

// db.connect((err) => {
//   if (err) {
//     console.error("Error de conexión a la base de datos: " + err.stack);
//     return;
//   }
//   console.log("Conectado como id " + db.threadId);
// });

// io.on("connection", (socket) => {
//   console.log("Conectado");

//   // Realizar la consulta para obtener datos en tiempo real
//   setInterval(() => {
//     const consulta = "SELECT * FROM tu_tabla WHERE ..."; // Agrega tu consulta aquí
//     db.query(consulta, (error, results) => {
//       if (error) {
//         console.error("Error al ejecutar la consulta: " + error.message);
//         return;
//       }
//       socket.emit("actualizacion_en_tiempo_real", results);
//     });
//   }, 1000);

//   socket.on("disconnect", () => {
//     console.log("Desconectado");
//   });
// });

// server.listen(PORT, () => {
//   console.log("Servidor escuchando en el puerto " + PORT);
// });
