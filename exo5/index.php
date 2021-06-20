<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PhP - Partie 4</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <div class="row">
         <h1 class="col-12 text-center border border-dark">Part4</h1>
<!-- EXoooooooooooooo555555555555555555555555555555555 -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo5</h2>
          <p>Method1</p>
          <?php
          $depart = array(15 => "TiziOuzou" ,75 => "Paris",69 => "Lyon", 13 => "Marseille",21 => "Dijon");
            foreach($depart as $cle=>$valeur){
            echo $cle." : ".$valeur."<br>";
            }
          ?>
          <p>Method2</p>
          <?php
          // $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
          // $cles = array_keys($lang);
          //   echo $lang[$cles[2]];
​
          ?>
         </div>
         <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo++</h2>
          <p>Method1</p>
          <?php
          $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
          $result = array_pad($lang, 6, 'C++');
             echo $result[5];
          // }
          ?>
          <p>Method2</p>
          <?php
          // $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
          // $cles = array_keys($lang);
          //   echo $lang[$cles[2]];
​
          ?>
         </div>
​
      </div>
   </div>
</body>
</html>