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
