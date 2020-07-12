<?php
//1~6までの乱数を生成してそれぞれ変数に代入する
$dice1 = mt_rand(1, 6);
$dice2 = mt_rand(1, 6);
//ゾロ目かどうかの判定
$zorome = ($dice1 == $dice2) ? true : false;

$diceimage = array('image\dice1.png', 'image\dice2.png', 'image\dice3.png', 'image\dice4.png', 'image\dice5.png', 'image\dice6.png');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dicegame</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="image/favicon.ico">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style/styles.css">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>サイコロの目は<br><strong>「<?php echo $dice1; ?>」</strong>と<strong>「<?php echo $dice2; ?>」</strong></h2>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 text-center">
        <?php
        //１つ目のサイコロの出目の画像描画処理
        if ($dice1 == '1') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[0] . '" alt="1">';
        } elseif ($dice1 == '2') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[1] . '" alt="2">';
        } elseif ($dice1 == '3') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[2] . '" alt="3">';
        } elseif ($dice1 == '4') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[3] . '" alt="4">';
        } elseif ($dice1 == '5') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[4] . '" alt="5">';
        } elseif ($dice1 == '6') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[5] . '" alt="6">';
        }
        ?>
      </div>

      <div class="col-sm-6 text-center">
        <?php
        //２つ目のサイコロの出目の画像描画処理
        if ($dice2 == '1') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[0] . '" alt="1">';
        } elseif ($dice2 == '2') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[1] . '" alt="2">';
        } elseif ($dice2 == '3') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[2] . '" alt="3">';
        } elseif ($dice2 == '4') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[3] . '" alt="4">';
        } elseif ($dice2 == '5') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[4] . '" alt="4">';
        } elseif ($dice2 == '6') {
          echo '<img class="img-fluid rounded" src="' . $diceimage[5] . '" alt="4">';
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <a href="" class="re btn btn-outline-secondary text-center btn-lg">リトライ</a>
      </div>
    </div>
    <?php if ($zorome == true) : ?>
      <script>
        swal({
          title: "Good!!",
          text: "ゾロ目です！！☺",
          confirmButtonText: "OK",
          icon: "success"
        }).then(okay => {})
      </script>
    <?php endif ?>
  </div>
</body>

</html>