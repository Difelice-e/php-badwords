<?php 
  $original_text = 'Esempio di testo di cacca ma con frasi di cacca e senza una logica di cacca, ma che comunque risulta cacca';

  $text_length = strlen( $original_text );
  $modified_text = str_replace( 'cacca', '***', $original_text );

  $word = $_GET['word'];

  $user_modified_text = str_replace( $word, '***', $original_text ); 
  $user_text_lenght = strlen( $text_user );

  echo $original_text;
  echo $text_lenght;

  echo $modified_text;
  
  echo $user_modified_text;
  echo $user_text_lenght;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
</body>
</html>