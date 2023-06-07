const express = require('express');
const db = require('./conexion.js');
const cors = require('cors');

const app = express();
app.use(express.static('./public'));
app.use(express.urlencoded({extended:false}));
app.use(express.json());
const PORT = process.env.PORT || 3000;

app.use(cors());





// API REST

app.get('/peliculas', (req, res) => {
  db.query("SELECT * FROM Peliculas", (error, data) => {
    if(error) {
      throw error
    }
    res.json({
      mensaje: 'No existen peliculas', 
      data
    })
  })
})

app.get('/peliculas/:id', (req, res) => {
  console.log(req.params.id)
  const ID = req.params.id;

  const sql = "SELECT * FROM Peliculas WHERE idPelicula = ?"
  db.query(sql, [ID], (error, data) => {
    if(error) {
      throw error
    }
    res.json({
      mensaje: 'No existe la pelicula por su identificador', 
      data
    })
  })
})

app.post('/Peliculas', (req, res) => {
  console.log(Object.values(req.body))
  const values = Object.values(req.body);
 
  const sql = "INSERT INTO Peliculas (Nombre, Descripcion, Genero) VALUES(?,?,?)"
  db.query(sql, values, (error, result) => {
    if(error){
      throw error;
    }
    res.json({
      mensaje: 'Pelicula añadida', 
      data:result
    })
  })
  
})

app.delete('/Peliculas/:id', (req, res) => {
  //const codigo = req.body.codigo
  console.log(req.params.id)
  const ID = req.params.id;
 
  const sql = "DELETE FROM Peliculas WHERE idPelicula=?"
  db.query(sql, [ID], (error, result) => {
    if(error){
      throw error;
    }
    res.json({
      mensaje: 'Producto eliminado', 
      data:result
    })
  })
  
})

app.put('/Peliculas', (req, res) => {
  const values = Object.values(req.body)
  console.log(values)
 
  const sql = "UPDATE peliculas SET Nombre=?, Descripcion=?, Genero=?, WHERE idPelicula =?"
  db.query(sql, values, (error, result) => {
    if(error){
      throw error;
      
    }
    res.json({
      mensaje: 'Producto actualizado', 
      data:result
    })
  })
  
})


app.listen(PORT, () => {
  console.log("Running server on port:", PORT)
})