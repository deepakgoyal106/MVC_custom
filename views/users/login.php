<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register Login</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
         <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Login">
    </form>
  </div>
</div>