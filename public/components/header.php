<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2ecc71">
  <a class="navbar-brand" href="index.php" id="title">
    <img src="images/logo.png" class="d-inline-block align-top" alt="#">
    ArtiMex
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapso" aria-controls="colapso" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="colapso">
    <ul class="navbar-nav ml-auto pr-2">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php#aboutUs">¿Quiénes somos?</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="store.php" role="button">¡Tiendita Online!</a>
      </li>
      <li class="nav-item active nav-link">
        Aquí irá el nombre y el rol del usuario en caso de haber iniciado sesión
      </li>
    </ul>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login">
      Iniciar sesión
    </button>
  </div>
</nav>

<!-- Modal para login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index_altern.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="message-text"></input>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block">Login</button>
          </div>
        </form>
      </div>
      <a href="register.php" class="text-center mb-4">¡No estoy registrado!</a>
    </div>
  </div>
</div>