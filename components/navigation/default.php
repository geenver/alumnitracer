<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <a class="navbar-brand" href="#">
    SLSU
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="./dashboard.php">
      <input name="search_query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <button class=" btn btn-danger" id="logoutBtn">Logout</button>
  </div>
</nav>


<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function() {
      console.log('User signed out.');
    });
  }

  document.querySelector("#logoutBtn").addEventListener('click', function() {
    console.log('Click!')
  })
</script>