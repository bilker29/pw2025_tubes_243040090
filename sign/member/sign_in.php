<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Sign In || Member</title>
</head>

<body>
  <div class="container">
    <div class="card p-2 mt-5">
      <div class="position-absolute top-0 start-50 translate-middle">
        <img src="../../assets/memberLogo.png" alt="adminLogo" width="85px">
      </div>
      <h1 class="pt-5 text-center fw-bold">Sign In</h1>
      <hr>
      <form action="" method="post" class="row g-3 p-4 needs-validation" novalidate>
        <label for="validationCustom01" class="form-label">Nama Lengkap</label>
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control" name="nama" id="validationCustom01" required>
          <div class="invalid-feedback">
            Masukkan nama anda!
          </div>
        </div>
        <label for="validationCustom01" class="form-label">Nim</label>
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-hashtag"></i></span>
          <input type="number" class="form-control" name="nim" id="validationCustom01" required>
          <div class="invalid-feedback">
            Masukkan Nim anda!
          </div>
        </div>
        <label for="validationCustom02" class="form-label">Password</label>
        <div class="input-group mt-0">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control" id="validationCustom02" name="password" required>
          <div class="invalid-feedback">
            Masukkan Password anda!
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="signIn">Sign In</button>
          <a class="btn btn-success" href="../link_login.html">Batal</a>
        </div>
        <p>Don't have an account yet? <a href="sign_up.php" class="text-decoration-none text-primary">Sign Up</a></p>
      </form>
    </div>
    <?php if (isset($error)) : ?>
      <div class="alert alert-danger mt-2" role="alert">Nama / Nim / Password tidak sesuai !
      </div>
    <?php endif; ?>
  </div>

  <script>
    (() => {
      'use strict'

      const forms = document.querySelectorAll('.needs-validation')

      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>