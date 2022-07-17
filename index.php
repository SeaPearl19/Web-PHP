<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Преподаватели РХТУ</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
  <section class="logotype">
    <div class="container">
      <div class="logo">
        <a href="index.html" class="logo-link">
          <img src="img/RHTU.jpg" alt="Логотип сайта"> 
        </a>
      </div>
    </div>
  </section>
  <header class="head">
    <div class="container">
      <nav class="nav">
        <ul class="nav-items">
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              Главная
            </a>
          </li>
          <li class="nav-item">
            <a href="second.html" class="nav-link">
              Списки преподавателей
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>


  <main class="main">
    <div class="container">
      <p>
        <br>
        На свете есть много преподавателей и университетов. Но именно на этом сайте вы найдёте информацию о тех, кто работает в РХТУ. <br>
        <br>
      </p>
      <div class="other-blocks block-1">
          <img src="img/Teacher.jpg" alt="Фото"> 
      </div>
      <p>
        <br>
        Ниже есть таблица со списком преподавателей этого университета. <br>
      </p>


        <br>
        <table>

        <tr>
          <td>Преподаватель</td>
          <td>Должность</td>

        <tr>
          <td>Рудаковская Елена Георгиевна</td>
          <td>Заведующий кафедрой</td>
        
        <tr>
          <td>Шайкин Александр Николаевич</td>
          <td>Доцент</td>     
        
        <tr>
          <td>Арсанукаев Зайнды Зиявдиевич</td>
          <td>Профессор</td>

        <tr>
          <td>Кольцова Элеонора Моисеевна</td>
          <td>Заведующий кафедрой</td>

        <tr>
          <td>Женса Андрей Вячеславович</td>
          <td>Доцент</td>

        <tr>
          <td>Лебедев Данила Александрович</td>
          <td>Ведущий программист</td>
        
        </table>

        <br>

        <table>

        <tr>
          <td>Кафедра_id</td>
          <td>Кафедра</td>
          <td>Преподаватель</td>

        <tr>
          <td>1</td>
          <td>каф. Математики</td>
          <td>Арсанукаев Зайнды Зиявдиевич</td>

        <tr>
          <td>2</td>
          <td>каф. Математики</td>
          <td>Шайкин Александр Николаевич</td>

        <tr>
          <td>3</td>
          <td>каф. Математики</td>
          <td>Рудаковская Елена Георгиевна</td>

        <tr>
          <td>4</td>
          <td>каф. ИКТ</td>
          <td>Лебедев Данила Александрович</td>

        <tr>
          <td>5</td>
          <td>каф. ИКТ</td>
          <td>Женса Андрей Вячеславович</td>

        <tr>
          <td>6</td>
          <td>каф. ИКТ</td>
          <td>Кольцова Элеонора Моисеевна</td>
        
        </table>

        <?php
          $mysql = new mysqli("localhost", "root", "root", "преподы");
          $mysql->query("SET NAMES 'utf8'");
          if($mysql->connect_error){
            echo 'Error Number: '.$mysql->connect_error.'<br>';
            echo 'Error: '.$mysql->connect_error;          
          }
          
          $result = $mysql->query("SELECT * FROM `кафедры`");
          if($result->num_rows > 0){            
            print_r($result->fetch_all());
          }

          
          
          $mysql->query("INSERT INFO `кафедры` (`Кафедра`, `Преподаватели`) VALUES('каф. физического воспитания', 'Головина Вера Анатольевна')");
          $mysql->query("DELETE FROM `кафедры` WHERE `id` = 7");
          

          $mysql->close();
        ?>

      </div>
  </main>

  <footer class="footer">
    <div class="container">
      <a href="#" class="social-link">
        © Дисциплина "Веб-программирование", 2022
      </a>
    </div>
  </footer>
</body>
</html>
