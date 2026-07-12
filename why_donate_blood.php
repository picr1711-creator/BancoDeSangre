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
  --text-main: #2B2D42;
}

body.dark-mode {
  --bg-page: #1B1D2A;
  --text-main: #EAF0FA;
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

p {
  font-size: 16px;
  line-height: 1.8;
  color: var(--text-main);
}

.img-fluid.rounded {
  border-radius: 16px !important;
  box-shadow: 0 10px 30px rgba(43,45,66,0.15);
  transition: transform 0.3s ease;
}
.img-fluid.rounded:hover {
  transform: translateY(-4px);
}
p {
  font-size: 16px;
  line-height: 1.8;
  color: var(--text-main);
}
body.dark-mode p,
body.dark-mode p * {
  color: var(--text-main) !important;
}
</style>
</head>

<body>


<?php 
$active ='why';
include('head.php');
?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">¿Por Qué Debería Donar Sangre?</h1>
        <p>
          <?php
            include 'conn.php';
            $sql=$sql= "select * from pages where page_type='donor'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)   {
                while($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }

           ?>
      </p>

    </div>
    <div class="col-lg-6">
        <img class="img-fluid rounded" src="image\08f2fccc45d2564f74ead4a6d5086871.png" style="height:600px; width:500px" alt="error"  >
    </div>
</div>
</div>

</div>

<?php include('footer.php')
?>
</div>
</body>

</html>