<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laba 3</title>
</head>
<body>
  <?php
    $equationstr = "x * 7 = 49";
    echo "Пример: " . $equationstr . "<br>";
    $equation = explode(" ", $equationstr);
    $operators = ["*", "/", "+", "-"];
    $operators_oppo = [
      "*" => "/",
      "/" => "*",
      "+" => "-",
      "-" => "+",
    ];
    $i = 1;
    foreach ($equation as $symbol) {
      if ($symbol == 'x') {
        $posx = $i;
      }
      if (in_array($symbol, $operators)) {
        $posop = $i;
      }
      $i++; 
      if ($symbol == '=') {
        $equals_to = $equation[$i-1];
      }
    }
    switch ($operators_oppo[$equation[$posop-1]]) {
      case '+':
        $res = (int)$equals_to + (int)$equation[$posop];
        break;
      case '-':
        $res = (int)$equals_to - (int)$equation[$posop];
        break;
      case '*':
        $res = (int)$equals_to * (int)$equation[$posop];
        break;
      case '/':
        $res = (int)$equals_to / (int)$equation[$posop];
        break;
    }
    echo "Позиция неизвестной: " . $posx . "<br>";
    echo "Позиция оператора: " . $posop . "<br>";
    echo "x=$res";
  ?>
</body>
</html>