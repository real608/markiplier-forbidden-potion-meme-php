<!DOCTYPE html>
<html>
<head>
  <title>Markiplier Forbidden Potion</title>
</head>
<body>
  <h1>Markiplier Forbidden Potion</h1>
  <?php
    $potion = array("wicked brew", "spooky elixir", "haunting serum", "terrifying potion", "creepy distillation", "ghostly tincture");
    $random_potion = $potion[array_rand($potion)];
  ?>
  <p>
    <?php echo "Buy my $random_potion!"; ?>
  </p>
  <p>
    <?php
      $forbidden = array("restricted", "prohibited", "outlawed", "banned", "taboo");
      $random_forbidden = $forbidden[array_rand($forbidden)];
      $emojis = array("😱", "😬", "😨", "😰", "🙀");
      $random_emoji = $emojis[array_rand($emojis)];
      echo "But Mark... it's $random_forbidden! $random_emoji";
    ?>
  </p>
  <p>
    <?php echo "The $random_potion!"; ?>
  </p>
</body>
</html>
