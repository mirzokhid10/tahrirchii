<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <!-- Font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Mulish:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Tahrirchiuz</title>
</head>
<body>
  <?php 
    $text = "";
    $result = "";

    if (isset($_POST['bosing'])) {
      $text = $_POST['inputtext'];
      $conversionType = $_POST['select'];
      $result = conText($text, $conversionType);
    }

    function conText($text, $conversionType) {
      $krill = [
          "№" => "#", "Ц" => "Ts", "Ё" => "Yo", "Е" => "Ye", "Ю" => "Yu", "Э" => "E", "Я" => "Ya",
          "Ҳ" => "H", "Ў" => "O‘", "Қ" => "Q", "Ғ" => "G‘", "Щ" => "Sh", "Ъ" => "’",
          "Ш" => "Sh", "Ч" => "Ch", "Х" => "X", "Ф" => "F", "У" => "U", "Т" => "T", "С" => "S",
          "Р" => "R", "П" => "P", "О" => "O", "Н" => "N", "М" => "M", "Л" => "L", "К" => "K",
          "Й" => "Y", "И" => "I", "З" => "Z", "Ж" => "J", "Д" => "D", "Г" => "G", "В" => "V",
          "Б" => "B", "А" => "A", "ц" => "ts", "ё" => "yo", "е" => "ye", "ю" => "yu", "э" => "e",
          "я" => "ya", "ҳ" => "x", "ў" => "o‘", "қ" => "q", "ғ" => "g‘", "щ" => "sh",
          "ш" => "sh", "ч" => "ch", "х" => "x", "ф" => "f", "у" => "u", "т" => "t",
          "с" => "s", "р" => "r", "п" => "p", "о" => "o", "н" => "n", "м" => "m", "л" => "l",
          "к" => "k", "й" => "y", "и" => "i", "з" => "z", "ж" => "j", "д" => "d", "г" => "g",
          "в" => "v", "б" => "b", "а" => "a"
      ];

      $latin = array_flip($krill);

      if ($conversionType === 'lotincha') {
          $convertedText = strtr($text, $krill);
      } elseif ($conversionType === 'krillcha') {
          $convertedText = strtr($text, $latin);
      } else {
          $convertedText = "Krillcha yoki lotin tilida yozing";
      }
      
      return $convertedText;
    }
  ?>

  <section class="container">
    <div class="wrapper">
      <header class="header max-w-full py-4 max-w-full py-4 px-4 sticky z-40 top-0">
        <a class="logo" href="/">
          <span>Tahrirchi</span>
        </a>
        <ul class="d-flex gap-4">
          <li>
            <a href="/">
              <span>Tahrir</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>Word</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>Narxlar</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>Biz haqimizda</span>
            </a>
          </li>
        </ul>
        <a href="/">
          <span>Chiqish</span>
        </a>
      </header>
      <div class="pt-5 pb-5 d-flex justify-content-center align-items-center">
        <div class="max-w-md mx-3">
          <div class="d-flex flex-row text-centerw-full justify-content-center align-items-center">
            <h1 class="col-6 mainpage_title">
              Bexato yozishga birinchi qadam!
            </h1>
            <div class="col-6">
              <p class="mainpage_secondary-title">
                Tahrirchi yordamida o‘zbek tilida </br>
                bexato va sifatli matnlar yozing. 
              </p>
              <div class="mainpage_btn">
                <button class="btn btn-gradient">
                  Tahrirga o‘tish
                  <span class="font-light px-4">Bu bepul</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="convertor">
        <div class="convertor-wrapper">
          <div class="convertor-body">
            <form action="" method="post">
              <div class="converter-input">
                <input type="radio" name="select" id="option-1" value="lotincha" checked>
                <input type="radio" name="select" id="option-2" value="krillcha" checked>
                  <label for="option-1" class="option option-1">
                      <span>Lotincha</span>
                  </label>
                  <label for="option-2" class="option option-2">
                      <span>Krillcha</span>
                  </label>
              </div>
              <div class="converter-content mt-3 px-3">
                <input type="text" name="inputtext" placeholder="Biror nima yozib ko'ring" value="<?php echo $text; ?>">
                <input type="text" value="<?php echo $result; ?>">
              </div>
              <div class="converter-button">
                <input type="submit" class="button btn" name="bosing" value="Bosing">
              </div>
            </form>
          </div>
        </div>
      </div>
  </section>
</body>
</html>