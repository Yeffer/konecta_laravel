<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">  
        <a class="navbar-brand {{ setActive('home') }}" href="/">PRODUCTOS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ setActive('crear') }}" href="/crear">CREAR</a>
          </li>
           <li class="nav-item">
            <a class="nav-link {{ setActive('venta') }}" href="/venta">VENTAS</a>
          </li>
        </ul>
      </div>    
    </nav>
</div>

