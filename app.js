const express = require('express')
const app = express();
const cors = require('cors')
const {connection} = require('./db')
app.use(express.static('./public'))
app.use(cors())
app.use(express.json())
app.use(express.urlencoded())


app.get('/api/peliculas',(solicitud,respuesta)=>{
    const peliculas = [
        {Nombre:'Mario Bros la Pelicula', Descripcion:'La película cuenta la historia de Mario y Luigi, dos hermanos que viajan a un mundo oculto para rescatar a la Princesa Peach, capturada por el malvado Rey Bowser. Las cosas, sin embargo no serán sencillas. Mario y Luigi tendrán que enfrentarse a un ejército de setas animadas antes de luchar contra su oponente.',Genero:'Animación', Duracion: '1h 32m'},
        {Nombre:'Spider-Man: a través del Spider-Verso', Descripcion:'Después de reunirse con Gwen Stacy, Spider-Man, el amigable vecino de tiempo completo de Brooklyn, es catapultado a través del Multiverso, donde se encuentra con un equipo de Spider-Gente encargado de proteger su existencia.',Genero:'Animación', Duracion: '2h 16m'}
    ];
    respuesta.send(peliculas);
})

app.get('/api/peliculas/:idPelicula', function(solicitud,respuesta){
    const idPelicula = solicitud.params.idPelicula;
    const Pelicula = 
    {Nombre:'Mario Bros la Pelicula', Descripcion:'La película cuenta la historia de Mario y Luigi, dos hermanos que viajan a un mundo oculto para rescatar a la Princesa Peach, capturada por el malvado Rey Bowser. Las cosas, sin embargo no serán sencillas. Mario y Luigi tendrán que enfrentarse a un ejército de setas animadas antes de luchar contra su oponente.',Genero:'Animación', Duracion: '1h 32m'}
    respuesta.send(Pelicula);
})

app.post('api/peliculas', (solicitud,respuesta)=>{
    const pelicula = solicitud.body;
    respuesta.send(pelicula);
})

app.listen(3000,()=>{
    console.log("Servidor corriendo")
})

app.post('/index.html', function(req,res){
    const correo = req.body.correo;
    const pass = req.body.pass;
    if(correo== 'correo@gmail.com' && pass == '123'){
        window.location.href = 'indexMain.html';
    }
    else{
        console.log("Verifique sus datoss");
    }
})


