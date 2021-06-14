const express = require('express')
const bodyParser = require('body-parser')
const fs = require('fs');
const moment = require('moment');

// Create a new instance of express
const app = express()

app.use(express.static(__dirname + '/public'));


// Tell express to use the body-parser middleware and to not parse extended bodies
app.use(bodyParser.urlencoded({ extended: false }))
// Route that receives a POST request to /sms


// Página principal da Hotmetrics
app.get('/', function (req, res) {
  res.render('./public/index.html')
})

// Página de exemplo da Hotmetrics
app.get('/example', function (req, res) {
  res.render('./public/example.html')
})

// WEBHOOK DE TESTE
app.post('/webhook', function (req, res) {
  const body = req.body
  var data = "," + "\n" +JSON.stringify(body)
  res.set('Content-Type', 'text/plain');
  res.send(data);
  
  console.log(data);
  
  fs.appendFile(`./public/message.json`, data, function (err) {
    if (err) throw err;
  });
})

// WEBHOOK CRIADOR DE CONTAS
app.get('./newuser/:fbid', function (req, res) {
  const fbid = req.params.fbid
  // var data = "," + "\n" +JSON.stringify(body)
  // res.set('Content-Type', 'text/plain');
  // res.send(data);
  
  res.send(fbid)
  console.log(fbid);
  
  // fs.appendFile(`./public/message.json`, data, function (err) {
  //   if (err) throw err;
  // });
})

// Faz o app rodar na porta 3000

var port_number = server.listen(process.env.PORT || 3000);
app.listen(port_number);
console.log('server is running on port 3000')

// app.listen(3000, function (err) {
//   if (err) {
//     throw err
//   }

//   console.log('server is running on port 3000')
// });
