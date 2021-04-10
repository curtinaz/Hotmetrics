// Página principal da Hotmetrics
app.get('/', function (req, res) {
    res.render('./public/index.html')
  })
  
  // Página de exemplo da Hotmetrics
  app.get('/example', function (req, res) {
    res.render('./public/example.html')
  })
  
