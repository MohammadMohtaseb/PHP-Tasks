
<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: $url");
        exit();
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Engine</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
    }
    .search-container {
      background: #fff;
      padding: 3rem;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      height: 97vh;
    }
    .search-container h1 {
      margin-bottom: 1rem;
      color: #333;
    }
    .search-container input[type="text"] {
      width: 50%;
      padding: 0.5rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }
    .search-container input[type="submit"] {
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 5px;
      background: #007bff;
      color: white;
      font-size: 1rem;
      cursor: pointer;
    }
    .search-container input[type="submit"]:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="search-container">
    <h1>Search Engine</h1>
    <form action="search.php" target="_blank">
      <label for="url">Enter URL:</label><br>
      <input type="text" id="url" name="url" required><br>
      <input type="submit" value="GO">
    </form>
  </div>
</body>
</html>

