<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/login/loginadmin.css">
    <title>Document</title>
</head>
<body>
<div class="body"></div>
<div class="main">
        <div class="left">
		<form method="post" action="<?=base_url('admin/LoginAdmin/prosesLogin')?>">
            <h1>Login</h1>
            <br><br>
            <p class="or"><i></i></p>
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="Password">
				<input type="submit" value="LOG IN">
				</form>
            <p class="forgot"></p>

        </div>
        <div class="right">
            
              
		</div>
		
    </div>
</body>
</html>