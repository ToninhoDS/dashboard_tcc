<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Sidebar</title>
    <script
      src="https://kit.fontawesome.com/7f335cf7b9.js"
      crossorigin="anonymous"
    ></script>
<style>
  body {
  background-color: #e9edf9;
}

.navbar {
  position: absolute;
  height: 100vh;
  background-color: #2a2135;
  padding: 24px;
  color: #848294;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  transition-property: all;
  transition-duration: 200ms;
  transition-timing-function: ease-in-out;
}

.navbar:hover {
  padding-right: 200px;
}

.navbar a {
  height: 36px;
  display: flex;
  align-items: center;
  text-align: center;
  margin-bottom: 10px;
}

.navbar a span {
  position: absolute;
  width: 100px;
  left: -100px;
  opacity: 0;
  transition-property: all;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
  text-align: left;
}

.navbar:hover a span {
  opacity: 1;
  left: 0px;
  margin-left: 50px;
}

.navbar a i {
  width: 20px;
}

.navbar a:hover {
  cursor: pointer;
  color: white;
}

.active {
  color: white;
}

body {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}

</style>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <nav class="navbar">
      <a class="navbar-item">
        <i class="fa fa-home"></i>
        <span>Home</span>
      </a>
      <a class="navbar-item active">
        <i class="fa-solid fa-square-poll-vertical"></i>
        <span>Dashboard</span>
      </a>
      <a class="navbar-item">
        <i class="fa-solid fa-box-open"></i>
        <span>Produtos</span>
      </a>
      <a class="navbar-item">
        <i class="fa-solid fa-chart-line"></i>
        <span>Desempenho</span>
      </a>
      <a class="navbar-item">
        <i class="fa-solid fa-basket-shopping"></i>
        <span>Pedidos</span>
      </a>
      <a class="navbar-item">
        <i class="fa-sharp fa-solid fa-calendar-days"></i>
        <span>Agenda</span>
      </a>
      <a class="navbar-item">
        <i class="fa-solid fa-file-lines"></i>
        <span>Documentos</span>
      </a>
      <a class="navbar-item">
        <i class="fa-solid fa-headset"></i>
        <span>Atendimento</span>
      </a>
    </nav>
  </body>
</html>
