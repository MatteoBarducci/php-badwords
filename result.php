<?php 
$printedParagraph = $_POST['paragraph'];
$paragraphLength = strlen($printedParagraph);
$censoredWord = $_POST['word'];
$censoredParagraph = str_replace($censoredWord, '***', $printedParagraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Questo è il paragrafo</h1>
    <p><?php echo $printedParagraph ?> <?php  echo 'Lunghezza: ' . $paragraphLength ?></p>
    <h1>Questo è il pragrafo censurato</h1>
    <span><?php echo $censoredParagraph ?> <?php  echo 'Lunghezza: ' . $paragraphLength ?></p>
</body>
</html>
