<div class="card text-center p-5" style="margin-top: 20vh">
  <div class="card-body">
    <blockquote class="blockquote text-center">
      <p class="mb-0">Southern Luzon State University (SLSU) is the premier higher education institution in Quezon Province in the Philippines. Its main campus is in Lucban.
      </p>
      <footer class="blockquote-footer">
        <cite title="Source Title">
          <a target="_blank" href="http://slsu.edu.ph/">slsu.edu.ph</a>
        </cite>
      </footer>
    </blockquote>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </div>
</div>

<script>
  function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    const googleId = profile.getId()
    const name = profile.getName()
    const imageUrl = profile.getImageUrl()
    const email = profile.getEmail()
    window.location.href = `http://localhost/alumnitracer/u/new_user.php?googleId=${googleId}&name=${name}&email=${email}&imageUrl=${imageUrl}`
  }
</script>

<style>
  .g-signin2 {
    width: 100%;
  }

  .g-signin2>div {
    margin: 0 auto;
  }
</style>