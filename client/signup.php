<div class="container col-6 mt-5">
    <h3 class="text-center mb-4">SignUp</h3>
    <form method="post" action="./server/signup_request.php">
      <div class="form-group mb-3">
        <label for="username">Username: <?php error("name") ?></label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group mb-3">
        <label for="email">Email: <?php error("email") ?></label>
        <input type="text" class="form-control" name="email">
      </div>
      <div class="form-group mb-3">
        <label for="pass">Password: <?php error("password") ?></label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="form-group mb-4">
        <label for="conf-pass">Confirm Password: <?php error("confirm-password") ?></label>
        <input type="password" class="form-control" name="confirm-password">
      </div>
      <button type="submit" class="btn btn-primary" name="signup">SignUp</button>
    </form>
</div>