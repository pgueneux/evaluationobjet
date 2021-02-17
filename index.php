<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>EVALUATION MVC</title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">évaluation MVC</h1></a>
      
      </header>
      <div id="contenu">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=wf3_php_final_prenom;charset=utf8', 
          'root', '');
        $game = $bdd->query('select BIL_ID as id, BIL_TITLE as title,'
          . ' BIL_MAXP as maximum, BIL_MINP as minimum'
          . ' order by BIL_ID desc');
        foreach ($game as $game): ?>
          <article>
            <header>
              <h1 class="titregame"><?= $game['titre'] ?></h1>
              <time><?= $game['date'] ?></time>
            </header>
            <p><?= $game['contenu'] ?></p>
          </article>
          <hr />
        <?php endforeach; ?>
      </div> <!-- #contenu -->
      <footer id="piedBlog">
        Evaluation Philippe Guéneux
      </footer>
    </div> <!-- #global -->
  </body>
</html>