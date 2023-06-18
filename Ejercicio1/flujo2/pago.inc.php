<!DOCTYPE html>
<html>
  <head>
    <title>Verificacion de Pago</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css" integrity="sha384-pKw5lgh+YJHIA0YB5RQILCG0S8pDlCQ1b7cMCQe2A1BHZHcwGvgDdbsZvl2fV0gx" crossorigin="anonymous">
  </head>
  <body>
    <input type="hidden" name="id" value="<?php echo $id;?>"/>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h2 class="mb-0">Documentos necesarios para la verificacion de pago</h2>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Documento de verificacion de pago:</label>
                <div class="col-sm-6">
                  <input type="file" class="form-control" name="verificacion" value="verificacion" />
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/js/bootstrap.bundle.min.js" integrity="sha384-dgRZiTiZB/V5XOImObP95vto/0OyAGVlJWMJSCV4ALwMLypu4Hgyh+hHu8MVuGpm" crossorigin="anonymous"></script>
  </body>
</html>
