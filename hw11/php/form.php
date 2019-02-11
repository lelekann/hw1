<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework #11 (php)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<?php
if(!empty($_POST['firstName'])) $firstName = ($_POST['firstName']);
else {
  if ($sex='woman') $firstName = 'Jane';
  else {
    if ($sex='man') $firstName = 'John';
    else $firstName = 'Anonymous';
  }
}
if(!empty($_POST['secondName'])) $secondName = ($_POST['secondName']);
else $secondName = 'Doe';
if(!empty($_POST['sex'])) $sex = ($_POST['sex']);
else $sex = 'sexless';
if(!empty($_POST['age'])) $age = ($_POST['age']);
else $age ='';
if(!empty($_FILES['picture'])) $picture = 'loaded';
else $picture = 'not loaded';
if(!empty($_POST['birthday'])) $birthday = date('d.m.y', strtotime($_POST['birthday']));
else $birthday =' one of these fine days';
if(!empty($_POST['email'])) $email = ($_POST['email']);
else $email = 'sorry, dad said do not give email to strangers';
if(!empty($_POST['phone'])) $phone = ($_POST['phone']);
else $phone = '... oh! sorry, mom said do not give phone number to strangers';
if(!empty($_POST['pass'])) $pass = ($_POST['pass']);
else $pass = 'Oh! I forget enter it ... again';
if(!empty($_POST['url'])) $url= ($_POST['url']);
else $url = "sorry, I do not do it yet ...";
if(!empty($_POST['hobbies'])) $hobbies = ($_POST['hobbies']);
else $hobbies = "... what am i talking about!? I don't like anything.";
if(!empty($_POST['comment'])) $comment = ($_POST['comment']);
else $comment = 'nothing. I do not like talking.';

?>
<main class="row">
    <article class="col-xs-12 col-sm-6 col-md-4">
        <div class="card m-1">
            <div class="card-header bg-success text-center">
                <h2 class="card-title">Завдання 1</h2>
                <p class="card-text">Створити php файл куди будуть відправлятись данні з усіх полів форми, яку ви робили у другій домашній роботі</p>
            </div>
            <div class="card-body">
              <h1 class="text-center">Hi! My name is <?php echo $firstName.' '.$secondName?></h1>
              <p><?php echo 'I am a '.$sex.' '.$age.' years old. '.'My picture is '.$picture?></p>
              <p><?php echo 'My B-day on '.$birthday.' so you can write me on '.$email.' or call me and congratulate. My telephone number is '.$phone?></p>
              <p><?php echo 'I always forget my password, so please remind me it ('.$pass.'). Also you can visit my web-site ('.$url.').'?></p>
              <p><?php echo 'I like '.$hobbies.' and do not like '?>
              <span>
                    <?php
                    if(!empty($_POST['rr'])) {
                        $hate = $_POST['rr'];
                        $N = count($hate);
                        for($i=0; $i < $N; $i++) {
                            echo($hate[$i].'  ');
                        }
                    } else {
                        echo(' nothing, I love everything');
                    }
                    ?>
              </span>
              </p>
              <p><?php echo 'Finally, I want to say:'?>
                <span><?php echo $comment?></span>
              </p>
              <p><?php echo 'And at the end, from the proposed I chose:'?>
                <span>
                  <?php
                  if(!empty($_POST['version'])) {
                      $version = $_POST['version'];
                      $N = count($version);
                      for($i=0; $i < $N; $i++) {
                          echo($version[$i].'  ');
                      }
                  } else {
                      echo(' nothing');
                  }
                  ?>
              </span>
              </p>
            </div>
        </div>
    </article>

  <article class="col-xs-12 col-sm-6 col-md-4">
    <div class="card m-1">
      <div class="card-header bg-warning text-center">
        <h2 class="card-title">Завдання 2</h2>
        <p class="card-text">Напишіть php код, який буде витягувать ім'я юзера з емейл адреси. Наприклад: з example@mail.com треба витягнуть example</p>
      </div>
      <div class="card-body">
        <p class="text-center">
            <?php
            $userName = explode('@',$email);
            echo $userName[0];
            ?></p>
      </div>
    </div>
  </article>

  <article class="col-xs-12 col-sm-6 col-md-4">
    <div class="card m-1">
      <div class="card-header bg-info text-center">
        <h2 class="card-title">Завдання 3</h2>
        <p class="card-text">Написать генератор рандомних паролів, які складаються з чисел, малих і великих літер латинського алфавіту, і які повинні бути довші за 10 літер (включно) не використовуючи функцію rand()</p>
      </div>
      <div class="card-body">
        <p class="text-center">
            <?php
            function genPass(){
                $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $shufleString = str_shuffle($string);
                $newPass = substr($shufleString,0,10);
                print $newPass;
            }
            genPass();
            ?></p>
      </div>
    </div>
  </article>

</body>
</html>
