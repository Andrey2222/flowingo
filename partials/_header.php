<?php include_once('helpers/header.php'); ?>
<header>
  <div class="row">
    <div class="col-lg-12 header">
      <div class="container">
        <? renderHeader(); ?>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-4 col-md-3 col-sm-4 col-xs-8">
            <a href="/"><img class="logo" src="src/basic-pic/log.png" alt="Log"></a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-8 hidden-xs">
            <ul class="list-inline number">
              <li><img  src="/src/operator/life.png" alt="">093 55 55 555</li>
              <li><img class="mb-3" src="/src/operator/kievstar.png" alt="">067 77 77 777</li>
              <li><img  src="/src/operator/mtc.png" alt="">099 99 99 999</li>
            </ul>
            <form class="pull-right feedback" action="" method="post">
              <label for="call">Обраный звонок:</label>
              <input type="text" id="call" placeholder="введите номер">
              <button type="button" name="button"><i class="fa fa-phone" aria-hidden="true"></i></button>
            </form>
          </div>
          <div class="col-lg-2 col-md-2 hidden-sm col-xs-4">
            <ul class="list-unstyled work-time">
              <li>часы работы</li>
              <li>c 8:00 до 20:00</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 hidden-xs undulating">
      <ul class="list-inline text-center ml-30">
        <li><a href="/about_us.php">О нас</a></li>
        <li><a href="/catalog.php">Цветы</a></li>
        <li><a href="/delivery.php">Доставка</a></li>
        <li><a href="#">Оплата</a></li>
        <li><a href="#">Вопросы</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </div>
  </div>
</header>
