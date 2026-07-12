<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
:root {
  --brand-red: #EF6461;
  --brand-red-dark: #D8534F;
  --brand-blue: #4FC3E8;
  --brand-blue-light: #EAF7FC;
  --brand-dark: #2B2D42;
  --brand-white: #FFFFFF;
  --bg-page: #FBFCFE;
  --bg-card: #FFFFFF;
  --text-main: #2B2D42;
  --border-soft: rgba(43,45,66,0.15);
}

body.dark-mode {
  --bg-page: #1B1D2A;
  --bg-card: #262A3D;
  --text-main: #EAF0FA;
  --border-soft: rgba(255,255,255,0.15);
}

body {
  font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
  color: var(--text-main);
  background-color: var(--bg-page);
  transition: background-color 0.3s ease, color 0.3s ease;
}

h1 {
  font-weight: 600;
  background: linear-gradient(90deg, var(--brand-red), var(--brand-blue));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.font-italic {
  font-style: normal !important;
  font-weight: 600;
  margin-bottom: 6px;
  color: var(--text-main);
}

.form-control {
  border-radius: 10px;
  border: 1px solid var(--border-soft);
  background-color: var(--bg-card);
  color: var(--text-main);
  padding: 10px 14px;
  height: 44px;
  line-height: 1.4;
  transition: border-color 0.25s ease, box-shadow 0.25s ease, background-color 0.3s ease, color 0.3s ease;
}
.form-control:focus {
  border-color: var(--brand-blue);
  box-shadow: 0 0 0 3px var(--brand-blue-light);
}

select.form-control {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232B2D42' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 14px center;
  background-size: 14px;
  padding-right: 36px;
}
body.dark-mode select.form-control {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23EAF0FA' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
}

textarea.form-control {
  height: auto;
}

.btn-primary {
  background: linear-gradient(135deg, var(--brand-red), var(--brand-red-dark));
  border: none;
  border-radius: 30px;
  font-weight: 600;
  padding: 10px 32px;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 18px rgba(239,100,97,0.35);
}
</style>
</head>

<body>
<?php
$active ='donate';
 include('head.php') ?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">Donar Sangre</h1>
      </div>
</div>
<form name="donor" action="savedata.php" method="post">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Nombre Completo<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Número Celular<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Correo Electrónico</div>
<div><input type="email" name="emailid" class="form-control"></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Edad<span style="color:red">*</span></div>
<div><input type="text" name="age" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Género<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Seleccionar</option>
<option value="Male">Masculino</option>
<option value="Female">Femenino</option>
</select>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Grupo Sanguíneo<span style="color:red">*</span></div>
<div><select name="blood" class="form-control" required>
  <option value=""selected disabled>Seleccionar</option>
  <?php
    include 'conn.php';
    $sql= "select * from blood";
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  while($row=mysqli_fetch_assoc($result)){
   ?>
   <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
  <?php } ?>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Dirección<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div>
<div class="row">
  <div class="col-lg-4 mb-4">
  <div><input type="submit" name="submit" class="btn btn-primary" value="Enviar" style="cursor:pointer"></div>
  </div>
</div>
</div>
</div>
<?php include('footer.php') ?>
</div>
</body>
</html>