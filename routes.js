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
  app.post('/webhooks', function (req, res) {
    const body = req.body
    var data = "," + "\n" +JSON.stringify(body)
    res.set('Content-Type', 'text/plain');
    res.send(data);
    
    console.log(data);
    
    fs.appendFile(`./public/message.json`, data, function (err) {
      if (err) throw err;
    });
  })