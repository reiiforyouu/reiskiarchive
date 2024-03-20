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
      <h2>Pedaftaran Alumni</h2>
      <div class="card rounded-0 border border-secondary mb-3">
        <div class="card-body">
        <table>
                <tr>
                <td><label for="name">Nama Lengkap</label></td>
                <td><input type="text" form-control-sm rounded-0 border-secondary" id="full_name" name="full_name"/></td>
                </tr>
                <tr>
                <td>Jenis Kelamin</td>
                <td><select name="gender" class="custome-select custom-select-sm rounded-0 border border-secondary" id="gender">
                    <option value selected="selected">Pilih :</option>
                    <option value="M">Laki-laki</option>
                    <option value="F">Perempuan</option>
                </select></td>
                </tr>
                <tr>
                <td>Tanggal Lahir</td>
                <td><div class="input-group">
                    <input type="date" class="form-control form-control-sm rounded-0 border border-secondary date" id="birth_date" name="birth_date">
                </div></td>
                </tr>
                <tr>
                <td>Tahun Lulus</td>
                <td><input type="text" class="form-control form-control-sm rounded-0 border border-secondary" id="end_date" name="end_date"></td>
                </tr>
                <tr>
                <td>NIS</td>
                <td><input type="text" class="form-control form-control-sm rounded-0 border border-secondary" id="identity_number" name="identity_number"></td>
                </tr>
                <td><label for="message">Alamat</label></td>
                <td><textarea id="message" cols="30" rows="10" placeholder="Pesan Disini"></textarea></td>
                <tr>
                <td>EMAIL</td>
                <td><input type="text" class="form-control form-control-sm rounded-0 border border-secondary" id="email" name="email"></td>
                </tr>
                <tr>
                <td>Telepon</td>
                <td><input type="text" class="form-control form-control-sm rounded-0 border border-secondary" id="phone" name="phone"></td>
                </tr>
                <tr>
                <td>Handphone</td>
                <td><input type="text" class="form-control form-control-sm rounded-0 border border-secondary" id="mobile_phone" name="mobile_phone"></td>
                </tr>
                <tr>
                <td>FOTO</td>
                <td><input type="file" id="photo" name="photo">
						<small class="form-text text-muted">Foto harus JPG dan ukuran file maksimal 1 Mb</small></td>
                </tr>
                <tr>
                <td><input type="submit" cols="20" name="submit" value="SUBMIT"/>
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