const mysql = require('mysql2');
const conexion = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  database: "pelismedia"
});

conexion.connect(function(err) {
  if (err) throw console.log("Connection failed") + err;
  console.log("Conectado");
});


module.exports = conexion;