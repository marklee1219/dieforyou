<?php
  // delete a value from an array using unset
  function array_delete($value, $array) {
    $key = array_search($value, $array);
    if($key !== false) {
      unset($array[$key]);
    }
    // unset leaves the index in place
    // array_values is like "reindexing"
    return array_values($array);
  }

  $colors = array('red', 'green', 'blue', 'black', 'white', 'Cornsilk', 'Crimson', 'DarkBlue', 'LightSalmon', 'LightSkyBlue', 'LimeGreen', 'MediumSpringGreen', 'OrangeRed');
  $color_count = count($colors);
  $bg_color = $colors[rand(0, $color_count-1)];

  $text_colors = array_delete($bg_color, $colors);
  $text_color_count = count($text_colors);
  $text_color = $text_colors[rand(0, $text_color_count-1)];

  $font_size = (100 + (rand(0,50) * 5));

  $aligns = array('center', 'left', 'right', 'justify');
  $align_count = count($aligns);
  $text_align = $aligns[rand(0, $align_count-1)];

  $styles = array('bold', 'italic', 'underline', 'uppercase', 'overline', 'line-through', 'initial');
  $style_count = count($styles);
  $style = $styles[rand(0, $style_count-1)];

  $fonts = array('Helvetica', 'Bodoni', 'imes New Roman', 'Futura', 'Frutiger', 'Garamond', 'Akzidenz-Grotesk', 'Avenir');
  $font_count = count($fonts);
  $font = $fonts[rand(0, $font_count-1)];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="0.5" >
    <title>Die for You</title>
    <style type="text/css">
    body{
      margin: 0;
      padding: 0;
      background: <?php echo $bg_color; ?>;
      color: <?php echo $text_color; ?>;
      font-size: <?php echo $font_size; ?>px;
      text-align: <?php echo $text_align; ?>;
      font-family: <?php echo $font; ?>;
      <?php
      switch($style) {
        case 'bold':
          echo "font-weight: bold;";
          break;
        case 'italic':
          echo "font-style: italic;";
          break;
        case 'underline':
            echo 'text-decoration: underline;';
            break;
        case 'uppercase':
          echo "text-transform: uppercase;";
          break;
        case 'overline':
          echo "text-decoration: overline;";
          break;
        case 'line-through':
          echo "text-decoration: line-through;";
          break;
        case 'initial':
          echo "text-decoration: initial;";
          break;
      }
       ?>
    }
    </style>
  </head>
  <body>
    <p>Die for You</p>
  </body>
</html>
