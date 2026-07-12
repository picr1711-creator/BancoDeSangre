<html>
<head>
<style>
@media screen and (max-width: 80px) {
  .news {
    position:relative;margin-left:auto;margin-right:auto;margin-top:400px  ;
  }
  .text1{
  	box-shadow:none !important;
    position:relative;
      margin-left:auto;margin-right:auto;
  }
}
:root {
  --brand-red: #EF6461;
  --brand-red-dark: #D8534F;
  --brand-blue: #4FC3E8;
  --brand-dark: #2B2D42;
}

.blue {
    background: linear-gradient(90deg, var(--brand-red), var(--brand-blue));
}

.news {
    box-shadow: 0 4px 14px rgba(43,45,66,0.15);
       width: 100%;
       height:50px;
    margin-top:0px;
    overflow: hidden;

    border-radius: 4px;
    padding: 1px;
    -webkit-user-select: none;

}


.news span {
    float: left;
    color: #fff;
    padding: 9px;
    position: relative;
    top: 1%;
    font: 15px 'Poppins', 'Raleway', Helvetica, Arial, sans-serif;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    -webkit-user-select: none;
    cursor: pointer;
}

.text1{

	box-shadow:none !important;
  position:relative;
    width:90%
}
</style>
</head>
<body>
<div class="news blue">
<span style="background-color:var(--brand-dark);width:150px;height:50px;font-weight:600;">Últimas Noticias</span><span class="text1" ><marquee>Se organizará una nueva campaña de donación de sangre. Únete a nuestro Sistema de Gestión de Banco de Sangre y Donación y sé parte de esta noble causa :)</marquee></span>
</div>
</body>
</head>
</html>