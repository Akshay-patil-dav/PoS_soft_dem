<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body>
  

  <?php
  
  $router = $_SERVER['REQUEST_URI'];
  
  echo $router;
  
  switch($router){
      case '/project/template/':
          require_once("./template/index.php");
              break;
  
      case '/project/template/paa':
          require_once("./template/pay.php");
          break;
  
      default:
          http_response_code(404);
          // require __DIR__ . $viewDir . '404.php';
          echo "<style>
    body{
      display: none;
    }
  </style>";
  
          break;
  }
  ?>
    <script>
    // similar behavior as an HTTP redirect

    
    window.location.replace("template/page-signin.php");
    </script>
  </body>
</html>
