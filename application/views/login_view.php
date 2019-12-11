<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/login/loginstyle1.css">
    <title>Login Register</title>
</head>
<body>
<p class="tip"></p>
<form method="post" action="<?=base_url('login/prosesLogin')?>">
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <label>
      <span>Email</span>
      <input type="email" name="email" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <button type="submit" class="submit">Sign In</button>
</form>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <form method="post" action="<?=base_url('login/register')?>">
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <label>
        <span>Name</span>
        <input type="text" name="nama_user"/>
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email"/>
      </label>
      <label>
        <span>No. Telp</span>
        <input type="number" name="telp"/>
      </label>
      <label>
        <span>Alamat</span>
        <input type="text" name="alamat"/>
      </label>
      <label>
        <span>Tgl Lahir</span>
        <input type="date" name="tgl_lahir"/>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password"/>
      </label>
      <button type="submit" class="submit">Sign Up</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>

<script>
document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
</script>