<!DOCTYPE html>
<html lang="es">

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
  --text-secondary: #5B5E70;
  --border-soft: rgba(43,45,66,0.08);
}

body.dark-mode {
  --bg-page: #1B1D2A;
  --bg-card: #262A3D;
  --text-main: #EAF0FA;
  --text-secondary: #B7BDD1;
  --border-soft: rgba(0,0,0,0.35);
}

body {
  font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
  color: var(--text-main);
  background-color: var(--bg-page);
  transition: background-color 0.3s ease, color 0.3s ease;
}

#demo {
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(43,45,66,0.15);
}
#demo .carousel-item::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(43,45,66,0.05) 0%, rgba(43,45,66,0.55) 100%);
}
#demo .carousel-item img {
  object-fit: cover;
}

h1, h2, h4 {
  font-weight: 600;
  color: var(--text-main);
}
h1 {
  background: linear-gradient(90deg, var(--brand-red), var(--brand-blue));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.card {
  border: none;
  border-radius: 14px;
  overflow: hidden;
  background-color: var(--bg-card);
  box-shadow: 0 4px 16px var(--border-soft);
  transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}
.card:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 28px var(--border-soft);
}
.card-title, .card-text {
  color: var(--text-main);
}
.card-header.bg-info {
  background: linear-gradient(135deg, var(--brand-red), var(--brand-blue)) !important;
  border: none !important;
  font-weight: 600;
  letter-spacing: 0.2px;
}

.btn-secondary, .btn-primary {
  background: linear-gradient(135deg, var(--brand-red), var(--brand-red-dark));
  border: none;
  border-radius: 30px;
  font-weight: 600;
  padding: 10px 28px;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  color: var(--brand-white) !important;
}
.btn-secondary:hover, .btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 18px rgba(239,100,97,0.35);
}

hr {
  border-top: 1px solid var(--border-soft);
  margin: 2.5rem 0;
}

.fade-section {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}
.fade-section.visible {
  opacity: 1;
  transform: translateY(0);
}
.card-body {
  color: var(--text-main);
}
body.dark-mode .card-body,
body.dark-mode .card-body * {
  color: var(--text-main) !important;
}
</style>
</head>

<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>
<?php include'ticker.php'; ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image\_107317099_blooddonor976.jpg" alt="image\_107317099_blooddonor976.jpg" width="100%" height="500">
      </div>
      <div class="carousel-item">
        <img src="image\Blood-facts_10-illustration-graphics__canteen.png" alt="image\Blood-facts_10-illustration-graphics__canteen.png" width="100%" height="500">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<br>
        <h1 style="text-align:center;font-size:45px;">Bienvenido al Sistema de Gestión de Banco de Sangre y Donantes</h1>
<br>
        <div class="row fade-section">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >La necesidad de sangre</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='needforblood'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
                         </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">Consejos sobre la sangre</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='bloodtips'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>

                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >A quién podrías ayudar</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='whoyouhelp'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>


                        </div>
            </div>
</div>

        <h2>Nombres de Donantes de Sangre</h2>

        <div class="row fade-section">
          <?php
            include 'conn.php';
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                  <p class="card-text">
                    <b>Grupo Sanguíneo: </b> <b><?php echo $row['blood_group']; ?></b><br>
                    <b>Nro. Celular: </b> <?php echo $row['donor_number']; ?><br>
                    <b>Género: </b><?php echo $row['donor_gender']; ?><br>
                    <b>Edad: </b> <?php echo $row['donor_age']; ?><br>
                    <b>Dirección: </b> <?php echo $row['donor_address']; ?><br>
                  </p>

                </div>
              </div>
        </div>
      <?php }} ?>
</div>
<br>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row fade-section">
            <div class="col-lg-6">
                <h2>GRUPOS SANGUÍNEOS</h2>
                <p>
                  <?php
                    include 'conn.php';
                    $sql=$sql= "select * from pages where page_type='bloodgroups'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)   {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo $row['page_data'];
                        }
                      }

                   ?></p>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="image\blood_donationcover.jpeg" alt="" style="box-shadow: 0 10px 24px rgba(43,45,66,0.15);">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4 fade-section">
            <div class="col-md-8">
            <h4>DONANTES Y RECEPTORES UNIVERSALES</h4>
            <p>
              <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
              </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="align:center;">Ser Donante</a>
            </div>
        </div>

    </div>
  </div>
  <?php include('footer.php');?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var sections = document.querySelectorAll('.fade-section');
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  sections.forEach(function(section) { observer.observe(section); });
});
</script>

</body>

</html>