const express = require('express');
const bodyparser = require('body-parser');
const app = express();
const path = require('path');

// Requiere de carpetas y Archivos
const web = require('./routes/web.js');

app.use(bodyparser.json());
app.use(bodyparser.urlencoded({extended:true}));
app.use(express.static(path.join(__dirname, 'public')));

//Archivo de rutas
app.use("/", web);

//ejs
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use('/static', express.static(__dirname + '/public'))
app.use('/modules', express.static(__dirname + '/node_modules'))

//Config
app.set('port', process.env.PORT || 3000)
app.listen(app.get('port'), () => {
    console.log("Servidor Arrancando en el puerto: " + app.get('port'))
})