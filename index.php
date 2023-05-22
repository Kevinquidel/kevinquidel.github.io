<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Descubre los avances tecnológicos en inteligencia artificial, robótica, informática, energía y criptomonedas.">
  <title>Xavaya.com - Página oficial de Xavaya</title>
  <style>
    /* Estilos globales */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    /* Estilos del encabezado */
    header {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
      color: #333333;
      font-size: 24px;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    
    nav ul li {
      margin: 0 10px;
    }
    
    nav ul li a {
      text-decoration: none;
      color: #333333;
      font-weight: bold;
      font-size: 16px;
      transition: color 0.3s;
    }
    
    nav ul li a:hover {
      color: #ff6600;
    }
    
    /* Estilos del contenido principal */
    main {
      padding: 20px;
    }
    
    h2 {
      color: #333333;
      font-size: 20px;
    }
    
    p {
      color: #666666;
      font-size: 16px;
      line-height: 1.5;
    }
    
    /* Estilos del buscador */
    .search-container {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .search-container input[type="text"] {
      width: 300px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .search-container input[type="submit"] {
      background-color: #333333;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    /* Estilos del resultado de búsqueda */
    .search-results {
      margin-top: 20px;
    }
    
    .search-results p {
      font-weight: bold;
    }
    
    .search-results ul {
      list-style-type: none;
      padding: 0;
    }
    
    .search-results li {
      margin-bottom: 10px;
    }
    
    .search-results li a {
      color: #333333;
      text-decoration: none;
    }
    
    .search-results li a:hover {
      color: #ff6600;
    }
    
    /* Estilos del pie de página */
    footer {
      background-color: #333333;
      color: #ffffff;
      padding: 20px;
      text-align: center;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Xavaya.com - Página oficial de Xavaya</h1>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <div class="search-container">
      <form action="resultados.php" method="get">
        <input type="text" name="search" placeholder="Buscar...">
        <input type="submit" value="Buscar">
      </form>
    </div>
  
    <?php
    if (isset($_GET['search']) && !empty($_GET['search'])) {
      $searchQuery = $_GET['search'];

      // Array de resultados simulados
      $results = array(
        array(
          "title" => "Título del resultado 1",
          "url" => "https://www.example.com/result1",
          "description" => "Descripción del resultado 1"
        ),
        array(
          "title" => "Título del resultado 2",
          "url" => "https://www.example.com/result2",
          "description" => "Descripción del resultado 2"
        ),
        array(
          "title" => "Título del resultado 3",
          "url" => "https://www.example.com/result3",
          "description" => "Descripción del resultado 3"
        )
      );

      // Filtrar los resultados que coincidan con la consulta de búsqueda
      $filteredResults = array();
      foreach ($results as $result) {
        if (strcasecmp($result['title'], $searchQuery) === 0 || strcasecmp($result['description'], $searchQuery) === 0) {
          $filteredResults[] = $result;
        }
      }

      // Mostrar los resultados
      if (count($filteredResults) > 0) {
        echo "<div class='search-results'>";
        echo "<p>Se encontraron " . count($filteredResults) . " resultados para '$searchQuery':</p>";
        echo "<ul>";

        foreach ($filteredResults as $result) {
          echo "<li><a href='" . $result['url'] . "'>" . $result['title'] . "</a> - " . $result['description'] . "</li>";
        }

        echo "</ul>";
        echo "</div>";
      } else {
        echo "<div class='search-results'>";
        echo "<p>No se encontraron resultados para '$searchQuery'.</p>";
        echo "</div>";
      }
    } else {
      echo "<div class='search-results'>";
      echo "<p>No se especificó ninguna consulta de búsqueda.</p>";
      echo "</div>";
    }
    ?>
    
    <h2>Contenido principal</h2>
    <p>Aquí puedes agregar tu contenido principal.</p>
  </main>
  
  <footer>
    <p>&copy; 2023 Todos los derechos reservados</p>
  </footer>
</body>
</html>
