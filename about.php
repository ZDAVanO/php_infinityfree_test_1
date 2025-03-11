<?php include('./includes/header.php'); ?>

<main class="container">

  <h1>About Me</h1>

  <p>Page loaded at: <span id="load-time"></span></p>

  <script>
    document.getElementById('load-time').innerText = new Date().toLocaleString();
  </script>

  <img class="profile" src="public/images/avatar.png" alt="profile avatar">

  <p class="big-text">Hello! I am dev.</p>

</main>

<?php include('./includes/footer.php'); ?>