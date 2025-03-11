<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Business Card</title>
  <link rel="icon" href="./public/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <link rel="stylesheet" href="./public/styles/styles.css">

  <link rel="stylesheet" href="./public/styles/style.css">

</head>
<body class="d-flex flex-column h-100">


<div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="./index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <span class="fs-4">Business Card test</span>
      </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <!-- <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="about.php" class="nav-link px-2">About</a></li>
      <li><a href="contact.php" class="nav-link px-2">Contact</a></li> -->
      <li><a href="index.php" class="nav-link px-2 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'link-secondary' : ''; ?>">Home</a></li>
      <li><a href="about.php" class="nav-link px-2 <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'link-secondary' : ''; ?>">About</a></li>
      <li><a href="contact.php" class="nav-link px-2 <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'link-secondary' : ''; ?>">Contact</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2">Login</button>
      <button type="button" class="btn btn-primary">Sign-up</button>
    </div>
  </header>
</div>

