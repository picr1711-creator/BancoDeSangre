<html>
<head>
  <style>
  :root {
    --brand-red: #EF6461;
    --brand-blue: #4FC3E8;
    --footer-bg: #2B2D42;
    --footer-text: #C9CCDA;
    --footer-heading: #FFFFFF;
    --footer-border: rgba(255,255,255,0.08);
  }
  body.dark-mode {
    --footer-bg: #14151f;
    --footer-border: rgba(255,255,255,0.05);
  }

  #page-container {
    display: flex;
    flex-direction: column;
  }
  #page-container > .container {
    flex: 1 0 auto;
  }

  #footer {
  position: static;
  width: 100%;
  margin-top: 3rem;
  background-color: var(--footer-bg);
  color: var(--footer-text);
  font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
  box-sizing: border-box;
  border-top: 3px solid var(--brand-red);
  transition: background-color 0.3s ease;
}

.footer-top {
  max-width: 1140px;
  margin: 0 auto;
  padding: 2.5rem 1.5rem 1.5rem;
  display: grid;
  grid-template-columns: 1.3fr 1fr 1fr;
  gap: 2rem;
  text-align: left;
}

.footer-col h5 {
  color: var(--footer-heading);
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 12px;
  letter-spacing: 0.3px;
}

.footer-col p, .footer-col a {
  font-size: 13.5px;
  color: var(--footer-text);
  line-height: 1.9;
  text-decoration: none;
  display: block;
  transition: color 0.2s ease;
}

.footer-col a:hover {
  color: var(--brand-blue);
}

.footer-brand {
  color: var(--footer-heading);
  font-weight: 700;
  font-size: 17px;
  margin-bottom: 8px;
}
.footer-brand::before {
  content: "🩸";
  margin-right: 6px;
}

.footer-bottom {
  border-top: 1px solid var(--footer-border);
  padding: 14px 1.5rem;
  text-align: center;
  font-size: 12.5px;
  letter-spacing: 0.3px;
  color: #9AA0B4;
}

@media screen and (max-width: 700px) {
  .footer-top {
    grid-template-columns: 1fr;
    text-align: center;
  }
}
  </style>
</head>
<body>
  <div id="footer">
    <div class="footer-top">
      <div class="footer-col">
        <div class="footer-brand">Banco de Sangre y Donación</div>
        <p>Conectamos donantes y receptores para salvar vidas, un donativo a la vez.</p>
      </div>
      <div class="footer-col">
        <h5>Enlaces Rápidos</h5>
        <a href="home.php">Inicio</a>
        <a href="about_us.php">Sobre Nosotros</a>
        <a href="donate_blood.php">Ser Donante</a>
        <a href="need_blood.php">Necesito Sangre</a>
      </div>
      <div class="footer-col">
        <h5>Contacto</h5>
        <p>Paolo Cuba, Grover Hernani, Israel Pari</p>
        <p>60578411</p>
        <p>bloodbank@gmail.com</p>
      </div>
    </div>
    <div class="footer-bottom">
      DERECHOS DE AUTOR © 2020 BANCO DE SANGRE Y DONACIÓN — TODOS LOS DERECHOS RESERVADOS.
    </div>
  </div>


</body>

</html>