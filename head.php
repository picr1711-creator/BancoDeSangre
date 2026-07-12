<html>

<head>


<style>
:root {
  --brand-red: #EF6461;
  --brand-red-dark: #D8534F;
  --brand-blue: #4FC3E8;
  --brand-blue-light: #EAF7FC;
  --brand-dark: #2B2D42;
  --brand-white: #FFFFFF;
  --bg-card: #FFFFFF;
  --text-main: #2B2D42;
  --border-soft: rgba(43,45,66,0.08);
}

body.dark-mode {
  --bg-card: #262A3D;
  --text-main: #EAF0FA;
  --brand-blue-light: rgba(79,195,232,0.15);
  --border-soft: rgba(0,0,0,0.35);
}

.header {
  overflow:hidden;
  background-color: var(--bg-card);
  position: sticky;
  top: 0;
  z-index: 999;
  width:100%;
  padding: 12px 20px;
  color:var(--brand-red);
  box-shadow: 0 2px 12px var(--border-soft);
  font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.header a {
  float: left;
  color: var(--text-main);
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 16px;
  line-height: 25px;
  border-radius: 30px;
  font-weight:600;
  position: relative;
  transition: color 0.25s ease, background-color 0.25s ease;
}

.header a.logo {
  font-size: 22px;
  font-weight: 700;
  color:var(--brand-red);
  letter-spacing: -0.3px;
  padding-left: 4px;
}
.header a.logo::before {
  content: "🩸";
  margin-right: 6px;
  font-size: 20px;
}

.header a:hover {
  background-color: var(--brand-blue-light);
  color: var(--brand-blue);
}
.header a.logo:hover {
  background-color: transparent;
  color: var(--brand-red-dark);
}

.header-right {
  float: right;
  display: flex;
  align-items: center;
}

#theme-toggle {
  float: left;
  border: none;
  background: transparent;
  font-size: 18px;
  cursor: pointer;
  padding: 8px 12px;
  border-radius: 50%;
  transition: background-color 0.25s ease;
  line-height: 1;
}
#theme-toggle:hover {
  background-color: var(--brand-blue-light);
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
    display: block;
  }
}

a.act{
background: linear-gradient(135deg, var(--brand-red) 0%, var(--brand-blue) 100%);
color: var(--brand-white) !important;
border-radius:30px;
box-shadow: 0 4px 10px rgba(239,100,97,0.25);
}
a.logo2{
  background-color: transparent;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Banco de Sangre y Donación</a>
    <div class="header-right">
    <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >Sobre Nosotros</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Por Qué Donar Sangre</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Ser Donante</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Necesito Sangre</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contáctanos</a>
      <button id="theme-toggle" aria-label="Cambiar tema">🌙</button>
    </div>
  </div>

  <script>
  (function() {
    var btn = document.getElementById('theme-toggle');
    var stored = localStorage.getItem('theme');
    if (stored === 'dark') {
      document.body.classList.add('dark-mode');
      if (btn) btn.textContent = '☀️';
    }
    if (btn) {
      btn.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        var isDark = document.body.classList.contains('dark-mode');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        btn.textContent = isDark ? '☀️' : '🌙';
      });
    }
  })();
  </script>

</body>
</html>