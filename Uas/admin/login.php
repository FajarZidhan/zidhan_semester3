<?php
include "proses.php";
include "../admin/layout/header.php";
?>
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Login Admin</h2>
          <form action="login.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="username">username</label>
            
              <input type="username" name="username" class="form-control" />
              </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <?php $massage?>
            <label class="form-label" for="password">Password</label>
              <input type="password" name="password" class="form-control" />

            </div>

            <!-- Submit button -->
            <button type="submit" name="login" class="btn btn-primary btn-block mb-4">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->