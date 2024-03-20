<!DOCTYPE html>
<html>
<head>
<title>VISI DAN MISI | SMKN 64</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" href="images/demo/logo.png">
</head>
<body id="top">
<!-- Header -->
<?php include "header.php"; ?>
<!-- Isi konten-->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <div id="content" class="three_quarter first"> 
        <div class="left-box">
      <h2>Login</h2>
      <div class="card rounded-0 border border-secondary mb-3">
        <div class="card-body">
        <table>
                <tr>
                <td><label for="name">Email</label></td>
                <td><input type="email" placeholder="@example.com" id="nama" /></td>
                </tr>
                <tr>
                <td>Password</td>
                <td><input type="password" placeholder="password"></td>
                </tr>
                <td><input type="submit" cols="20" name="submit" value="Login"/>
                </tr>
              </table>
            <!-- / main body -->
            <div class="clear"></div>
        </main>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include "footer.php"; ?>
<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>