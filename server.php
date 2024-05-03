<?php
// var_dump($_GET);

$paragraph = $_GET["paragraph"];

$word = $_GET["word"];

$new_paragraph = str_replace( $word , '***', $paragraph);
?>

<h1><?php echo $word ?></h1>
<h2>Paragrafo non filtrato:</h2>
<p><?php echo $paragraph ?></p>
<h4>Numero caratteri del paragrafo: <?php echo strlen($paragraph) ?></h4>
<h2>Paragrafo filtrato:</h2>
<p> <?php echo $new_paragraph ?></p>
<h4>Numero caratteri del paragrafo: <?php echo strlen($new_paragraph) ?></h4>
