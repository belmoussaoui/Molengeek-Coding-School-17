<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="/">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item {{ $page === "home" ? "active" : "" }} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item {{ $page === "about" ? "active" : "" }} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
          </li>
          <li class="nav-item {{ $page === "products" ? "active" : "" }} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/products">Products</a>
          </li>
          <li class="nav-item {{ $page === "store" ? "active" : "" }} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/store">Store</a>
          </li>
        </ul>
      </div>
    </div>
</nav>