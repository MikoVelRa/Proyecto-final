<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2ecc71">
  <a class="navbar-brand" href="index.php" id="title">
    <img src="images/logo.png" class="d-inline-block align-top" alt="#">
    ArtiMex
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-2">
      <li class="nav-item active">
        <a class="nav-link" href="index_altern.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index_altern.php#aboutUs">¿Quiénes somos?</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="store.php" id="navbarDropdown">¡Tiendita Online!</a>
      </li>
      <li class="nav-item active nav-link">
        ¡Hola Pepito_89! Customer
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="pedidos.php" id="navbarDropdown">Mis pedidos</a>
      </li>
      <li class="nav-item active">
        <button type="button" class="btn nav-item text-white" id="sidebarCollapse">
          <i class="fas fa-shopping-cart mr-2"></i>Mi carrito<span class="ml-2 badge badge-dark">5</span>
        </button>
      </li>
    </ul>
    <a href="index.php"><button type="button" class="btn btn-danger">Salir</button></a>
  </div>
</nav>

<nav id="sidebar" class="shadow p-3 mb-5 rounded">
  <div id="dismiss">
    <i class="fas fa-arrow-right"></i>
  </div>

  <div class="sidebar-header">
    <h4 class="text-center">Mi carrito de compras</h4>
  </div>

  <ul class="list-unstyled components">
    <div class="container-fluid">
      <img src="images/cart.png" class="rounded mx-auto d-block" width="128" height="128" alt="carrito_de_compras">
    </div>
    <p class="h5">Contenido</p>
    <li class="active">
      <span class="badge badge-primary badge-pill ml-2">1</span>
      <small data-toggle="collapse" aria-expanded="false">Jarrón de la región Kalakmul</small>        
      <span class="badge badge-success badge-pill ml-2">$200.00</span>    
      <button class="btn"><i class="fas fa-trash-alt"></i></button>
    </li>
    <li>
    <span class="badge badge-primary badge-pill ml-2">2</span>
      <small data-toggle="collapse" aria-expanded="false">Pulseras michoacanas</small> 
      <span class="badge badge-success badge-pill ml-2">$150.00</span>
      <button class="btn"><i class="fas fa-trash-alt"></i></button>
    </li>
    <li>
    <span class="badge badge-primary badge-pill ml-2">1</span>
      <small data-toggle="collapse" aria-expanded="false">Güayabera tabasqueña</small> 
      <span class="badge badge-success badge-pill ml-2">$2000.00</span>
      <button class="btn"><i class="fas fa-trash-alt"></i></button>
    </li>
  </ul>

  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <p>Total</p>
      </div>
      <div class="col-6">
        <p>$2350.00</p>
      </div>
    </div>
  </div>

  <ul class="list-unstyled CTAs">
    <li>
      <a href="compra.php" class="btn btn-danger">Realizar compra</a>
    </li>
  </ul>
</nav>