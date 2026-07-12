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

h2, h3, h4 {
  font-weight: 600;
  color: var(--text-main);
}

label {
  font-weight: 600;
  color: var(--text-main);
}

.form-control {
  border-radius: 10px;
  border: 1px solid var(--border-soft);
  background-color: var(--bg-card);
  color: var(--text-main);
  padding: 10px 14px;
  transition: border-color 0.25s ease, box-shadow 0.25s ease, background-color 0.3s ease, color 0.3s ease;
}
.form-control:focus {
  border-color: var(--brand-blue);
  box-shadow: 0 0 0 3px var(--brand-blue-light);
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

.alert-success {
  border-radius: 10px;
  border: none;
  background-color: var(--brand-blue-light);
  color: #1B6E85;
}

a {
  color: var(--brand-blue);
}
a:hover {
  color: var(--brand-red);
}
</style>
</head>

<body>
<?php $active ='contact';
include 'head.php'; ?>
<?php
if(isset($_POST["send"])){
  $name=$_POST['fullname'];
$number=$_POST['contactno'];
$email=$_POST['email'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Consulta enviada, nos pondremos en contacto contigo pronto.</b></div>';
}?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
    <h1 class="mt-4 mb-3">Contacto</h1>
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Envíanos un Mensaje</h3>
        <form name="sentMessage"  method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Nombre Completo:</label>
                    <input type="text" class="form-control" id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Número de Teléfono:</label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Mensaje:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary">Enviar Mensaje</button>
        </form>
    </div>
    <div class="col-lg-4 mb-4">
        <h2>Datos de Contacto</h2>
        <?php
          include 'conn.php';
          $sql= "select * from contact_info";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) { ?>
        <br>
        <p>
            <h4>Dirección:</h4><?php echo $row['contact_address']; ?>
        </p>
        <p>
            <h4>Número de Contacto:</h4><?php echo $row['contact_phone']; ?>
        </p>
        <p>
          <h4>Correo Electrónico:</h4><a href="#"><?php echo $row['contact_mail']; ?></a>
          </a></b>
        </p>
        <?php }
      } ?>
    </div>
</div>
<!-- /.row -->


</div>
</div>
<?php include 'footer.php' ?>
</div>
</body>

</html>