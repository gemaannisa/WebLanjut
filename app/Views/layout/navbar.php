<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="nav-item nav-link active" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="buku">Daftar Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pinjam">Daftar Pinjaman</a>
      </li>
     
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php if(logged_in()) : ?>
        <a class="nav-link" href="/logout">Logout</a>
        <?php else : ?>
          <a class="nav-link" href="/login">Login</a>
        <?php endif ; ?>
  </div>
</nav>