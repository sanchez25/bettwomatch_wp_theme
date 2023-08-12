<?php

/* Template Name: Bookmakers */
/* Template Post Type: post */

get_header();?>

<?php
    $mobile = get_field( 'mobile' );
    $register = get_field( 'register' );
    $year = get_field( 'year' );
    $license = get_field( 'license' );
    $dep = get_field( 'min-dep' );
    $output = get_field( 'min-output' );
    $language = get_field( 'language' );
    $bonus = get_field('bonus-text', $item->ID);
    $link = get_field('link', $item->ID);
?>

<section class="block-content">
  <div class="tabs-leagues">
    <div id="title-champions" class="tabs-leagues-item check">
      <div class="champions-ikon">
      </div>
    </div>
    <div id="title-europe" class="tabs-leagues-item">
      <div class="europe-ikon">
      </div>
    </div>
    <div id="title-bundesteam" class="tabs-leagues-item">
      <div class="bundesteam-ikon" style="background-image: url(<?php echo get_template_directory_uri()?>/img/bundesteam-new.png)">
      </div>
    </div>
    <div id="title-premier" class="tabs-leagues-item">
      <div class="premier-ikon" style="background-image: url(<?php echo get_template_directory_uri()?>/img/premier-league.png)">
      </div>
    </div>
    <div id="title-seria-a" class="tabs-leagues-item">
      <div class="seria-a-ikon" style="background-image: url(<?php echo get_template_directory_uri()?>/img/seria-a.png)">
      </div>
    </div>
    <div id="title-la-liga" class="tabs-leagues-item">
      <div class="la-liga-ikon" style="background-image: url(<?php echo get_template_directory_uri()?>/img/la-liga.png)">
      </div>
    </div>
  </div>
  <div class="block-content-league" style="background-image: url(<?php echo get_template_directory_uri()?>/img/champions-league.jpg)">
    <div class="block-content-matches">
      <div class="content-block-title">
        <div id="btn-title-one" class="content-title-block click">
          <span>27 октября</span>
        </div>
        <div id="btn-title-two" class="content-title-block">
          <span>28 октября</span>
        </div>
      </div>
      <div class="content-table">
        <div class="content-table-one">
          <div class="content-table-column">
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа А</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Локомотив М</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/53065.png?imwidth=36">
                  </div>
                  <span class="text-time">20:55</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50037.png?imwidth=36">
                    <span class="name-text">Бавария</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа А</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Атлетико</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50124.png?imwidth=36">
                  </div>
                  <span class="text-time">23:00</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50030.png?imwidth=36">
                    <span class="name-text">Зальцбург</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="content-table-column">
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа В</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Шахтер</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52707.png?imwidth=36">
                  </div>
                  <span class="text-time">20:55</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50138.png?imwidth=36">
                    <span class="name-text">Интер</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа В</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Боруссия М</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52757.png?imwidth=36">
                  </div>
                  <span class="text-time">23:00</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50051.png?imwidth=36">
                    <span class="name-text">Реал</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="content-table-two">
          <div class="content-table-column">
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа С</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Порту</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50064.png?imwidth=36">
                  </div>
                  <span class="text-time">23:00</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/2610.png?imwidth=36">
                    <span class="name-text">Олимпиакос</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа С</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Олимпик</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52748.png?imwidth=36">
                  </div>
                  <span class="text-time">23:00</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52919.png?imwidth=36">
                    <span class="name-text">Манчестер Сити</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="content-table-column">
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа D</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Аталанта</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52816.png?imwidth=36">
                  </div>
                  <span class="text-time">23:00</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50143.png?imwidth=36">
                    <span class="name-text">Аякс</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="content-table-item">
                <span class="text-group">Группа D</span>
                <div class="result">
                  <div class="comand left">
                    <span class="name-text">Ливерпуль</span>
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/7889.png?imwidth=36">
                  </div>
                  <span class="text-time">23:00</span>
                  <div class="comand">
                    <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/75795.png?imwidth=36">
                    <span class="name-text">Митьюлланд</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="content-table-tomorrow">
        <div class="content-table-tomorrow-block">
          <div class="content-table-one">
            <div class="content-table-column">
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа Е</span>
                  <div class="result">
                    <div class="comand left">
                      <span class="name-text">Краснодар</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/2601038.png?imwidth=36">
                    </div>
                    <span class="text-time">20:55</span>
                    <div class="comand">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52914.png?imwidth=36">
                      <span class="name-text">Челси</span>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа Е</span>
                  <div class="result">
                    <div class="comand left">
                      <span class="name-text">Севилья</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52714.png?imwidth=36">
                    </div>
                    <span class="text-time">23:00</span>
                    <div class="comand">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/55031.png?imwidth=36">
                      <span class="name-text">Ренн</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="content-table-column">
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа F</span>
                  <div class="result">
                    <div class="comand left">
                      <span class="name-text">Боруссия Д</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52758.png?imwidth=36">
                    </div>
                    <span class="text-time">23:00</span>
                    <div class="comand">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52826.png?imwidth=36">
                      <span class="name-text">Зенит</span>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа F</span>
                  <div class="result">
                    <div class="comand left">
                      <span class="name-text">Брюгге</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50043.png?imwidth=36">
                    </div>
                    <span class="text-time">23:00</span>
                    <div class="comand">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52973.png?imwidth=36">
                      <span class="name-text">Лацио</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="content-table-two">
            <div class="content-table-column">
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа G</span>
                  <div class="result">
                    <div class="comand left mc">
                      <span class="name-text">Ференцварош</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52298.png?imwidth=36">
                    </div>
                    <span class="text-time">23:00</span>
                    <div class="comand mc">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52723.png?imwidth=36">
                      <span class="name-text">Динамо К</span>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа G</span>
                  <div class="result">
                    <div class="comand left">
                      <span class="name-text">Ювентус</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50139.png?imwidth=36">
                    </div>
                    <span class="text-time">23:00</span>
                    <div class="comand">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50080.png?imwidth=36">
                      <span class="name-text">Барселона</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="content-table-column">
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа Н</span>
                  <div class="result">
                    <div class="comand left">
                      <span class="name-text">Истанбул Башакшехир</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/2600288.png?imwidth=36">
                    </div>
                    <span class="text-time">20:55</span>
                    <div class="comand">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52747.png?imwidth=36">
                      <span class="name-text">ПСЖ</span>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="content-table-item">
                  <span class="text-group">Группа Н</span>
                  <div class="result">
                    <div class="comand left">
                      <span class="name-text">МЮ</span>
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52682.png?imwidth=36">
                    </div>
                    <span class="text-time">23:00</span>
                    <div class="comand">
                      <img class="table-logo" src="https://img.uefa.com/imgml/TP/teams/logos/140X140/2603790.png?imwidth=36">
                      <span class="name-text">РБ Лейпциг</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="block-content-europe" style="background-image: url(<?php echo get_template_directory_uri()?>/img/europe-back.png)">
    <div class="block-content-matches">
      <div id="owl-slider" class="owl-carousel owl-theme">
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа С</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">Байер</span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Ницца</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа С</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  Хапоэль Беэр-Шева
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Славия</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа D</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  Стандард
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Рейнджерс</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа D</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  Лех
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Бенфика</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа E</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  ПСВ
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Гранада</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа E</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  ПАОК
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Омония</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа F</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  Наполи
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Алкмаар</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 19:55</span>
            <span class="date-europe-match">Группа F</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  Риека
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Реал Сосьедад</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 22:00</span>
            <span class="date-europe-match">Группа G</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  Брага
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">АЕК Афины</span>
              </div>
            </div>
          </a>
        </div>
        <div class="europe-item">
          <a href="#" class="europe-item-link">
            <span class="date-europe-match">22 октября, 22:00</span>
            <span class="date-europe-match">Группа G</span>
            <div class="europe-match">
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/50109.png?imwidth=36">
                <span class="comand-europe-name">
                  Лестер
                </span>
              </div>
              <div class="europe-comand">
                <img src="https://img.uefa.com/imgml/TP/teams/logos/140X140/52355.png?imwidth=36">  
                <span class="comand-europe-name">Заря</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block-content-germany">
    <div class="block-content-matches">
      <div class="bundesteam-matches-title">  
        <span>Bundesliga, 5 тур</span>
      </div>
      <div class="bundesteam-matches">
        <div id="owl-slider-bundesteam" class="owl-carousel owl-theme">
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">23 октября, 21:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/stuttgart.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/koeln.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">24 октября, 16:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/bayern.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/frankfurt.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">24 октября, 16:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/leipzig.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/berlin.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">24 октября, 16:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/union.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/freiburg.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">24 октября, 16:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/mainz.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/moenchengladbac.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">24 октября, 19:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/dortmund.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/schalke.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">25 октября, 17:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/wolfsburg.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/bielefeld.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">25 октября, 20:00</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/bremen.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/hoffenheim.webp">
              </div>
            </a>
          </div>
          <div class="germany-item">
            <a href="#" class="germany-item-link">
              <span class="date-germany-match">26 октября, 22:30</span>
              <div class="germany-match">
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/leverkusen.webp">
                <span>vs</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/bundesteam/augsburg.webp">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="single-block">
  <div class="page-row">
    <div class="block-single-page">
      <div class="single-title">
        <h1 class="title-single-h1"><?php the_title(); ?></h1>
      </div>
      <div class="bonus-single-image" style="background-image: url(<?php echo get_template_directory_uri()?>/img/bonus-back.jpg)">
        <div class="bonus-single-image-center bookmaker">
          <?php the_post_thumbnail(); ?>
          <div class="single-book-bonus">
            <span><?php echo $bonus; ?></span>
          </div>
        </div>
        <div class="bonus-single-info bookmaker">
          <div class="single-bookmaker-title">
            <svg height="512pt" viewBox="0 0 512 512" width="512pt" class="single-bookmaker-ikon" xmlns="http://www.w3.org/2000/svg">
              <path d="m100 113c0-11.046875 8.953125-20 20-20h272c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20h-272c-11.046875 0-20-8.953125-20-20zm312 80c0-11.046875-8.953125-20-20-20h-272c-11.046875 0-20 
                8.953125-20 20s8.953125 20 20 20h272c11.046875 0 20-8.953125 20-20zm-292 60c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20h92c11.046875 0 20-8.953125 20-20s-8.953125-20-20-20zm374.441406 
                156.589844c23.378906 23.378906 23.378906 61.441406-.015625 84.835937-11.695312 11.695313-27.0625 17.546875-42.425781 
                17.546875s-30.730469-5.851562-42.425781-17.546875l-109.367188-109.570312c-2.4375-2.441407-4.199219-5.46875-5.117187-8.792969l-22.363282-80.722656c-1.945312-7.03125.085938-14.5625 5.308594-19.65625 
                5.21875-5.089844 12.796875-6.941406 19.777344-4.820313l78.726562 23.914063c3.152344.957031 6.019532 2.675781 8.34375 5.007812zm-162.210937-49.273438 73.515625 73.652344 
                28.289062-28.289062-73.925781-74.089844-39.128906-11.886719zm133.910156 77.542969-3.851563-3.863281-28.285156 28.285156 3.867188 3.875c7.785156 7.785156 20.472656 7.785156 28.269531-.015625 7.800781-7.796875 
                7.800781-20.484375 0-28.28125zm-34.140625-437.859375h-352c-44.113281 0-80 35.886719-80 80v352c0 44.113281 35.886719 80 80 80h245c11.046875 0 20-8.953125 20-20s-8.953125-20-20-20h-245c-22.054688 
                0-40-17.945312-40-40v-352c0-22.054688 17.945312-40 40-40h352c22.054688 0 40 17.945312 40 40v246c0 11.046875 8.953125 20 20 20s20-8.953125 20-20v-246c0-44.113281-35.886719-80-80-80zm0 0"/>
              </svg>
            <span class="single-bookmaker-ikon-text">Содержание</span>
          </div>
          <div class="single-bookmaker-content">
            <div class="single-bookmaker-content-item">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="single-bookmaker-ikon" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 612.006 612.006" style="enable-background:new 0 0 612.006 612.006;" xml:space="preserve">
                <g>
                  <g>
                    <g>
                      <g>
                        <rect x="200.513" y="201.623" width="81.668" height="81.668"/>
                        <rect x="329.82" y="201.623" width="81.668" height="81.668"/>
                        <rect x="459.127" y="201.623" width="81.668" height="81.668"/>
                      </g>
                      <g>
                        <rect x="71.206" y="324.125" width="81.668" height="81.668"/>
                        <rect x="200.513" y="324.125" width="81.668" height="81.668"/>
                        <rect x="329.82" y="324.125" width="81.668" height="81.668"/>
                        <rect x="459.127" y="324.125" width="81.668" height="81.668"/>
                      </g>
                      <g>
                        <rect x="71.206" y="446.632" width="81.668" height="81.661"/>
                        <rect x="200.513" y="446.632" width="81.668" height="81.661"/>
                        <rect x="329.82" y="446.632" width="81.668" height="81.661"/>
                      </g>
                    </g>
                    <g>
                      <path d="M571.166,21.651H40.834C18.289,21.651,0,39.934,0,62.479v96.405h612V62.479C612,39.934,593.711,21.651,571.166,21.651z
                        M154.364,127.083c-16.909,0-30.625-13.716-30.625-30.625c0-16.915,13.716-30.625,30.625-30.625
                        c16.915,0,30.619,13.704,30.619,30.625C184.983,113.366,171.279,127.083,154.364,127.083z M457.648,127.083
                        c-16.915,0-30.632-13.716-30.632-30.625c0-16.915,13.716-30.625,30.632-30.625c16.909,0,30.613,13.704,30.613,30.625
                        C488.261,113.366,474.557,127.083,457.648,127.083z"/>
                    </g>
                    <path d="M584.784,549.521c0,7.505-6.1,13.611-13.611,13.611H40.84c-7.505,0-13.611-6.107-13.611-13.611V198.486H0.006v351.035
                      c0,22.551,18.282,40.834,40.834,40.834h530.332c22.545,0,40.834-18.282,40.834-40.834V198.486H584.79v351.035H584.784z"/>
                  </g>
                </g>
              </svg>
              <span>Год основания: <strong style="color: #dfa900"><?php echo $year; ?></strong></span>
            </div>
            <div class="single-bookmaker-content-item">
              <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" class="single-bookmaker-ikon" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                <g>
                <path d="m136.794 74.723v-74.723h-.015l-74.707 74.707v.016z"/>
                <g>
                <path d="m191.211 281.607 17.36 10.022 10.023 17.36h20.045l17.361 10.024 17.36-10.022h20.045l10.023-17.36 17.36-10.022v-20.046l10.023-17.359-10.023-17.36v-20.046l-17.36-10.022-10.022-17.36h-20.046l-17.36-10.025-17.36 
                    10.022h-20.045l-10.022 17.36-17.36 10.022v20.046l-10.023 17.36 10.023 17.359v20.047zm49.789-52.405h30v30h-30z"/>
                <path d="m310.726 338.99h-29.328l-1.249.721 18.237 69.242 13.232-8.656 15.779 1.015-16.495-62.627z"/>
                <path d="m230.602 338.99h-29.328l-.176-.305-16.495 62.627 15.779-1.015 13.232 8.656 18.237-69.242z"/>
                <path d="m166.794 0v104.723h-104.722v407.277h387.857v-512zm152.879 430.877-39.696 25.967-23.977-91.034-23.977 91.034-39.696-25.967-47.336 3.044 33.004-125.304-16.783-9.689v-29.327l-14.664-25.398 
                    14.664-25.399v-29.327l25.398-14.663 14.664-25.399h29.328l25.398-14.665 25.398 14.663h29.328l14.664 25.399 25.398 14.663v29.327l14.664 25.399-14.664 25.398v29.327l-16.783 9.689 33.004 125.304z"/>
                </g>
                </g>
              </svg>
              <span>Лицензия: <strong style="color: #dfa900"><?php echo $license; ?></strong></span>
            </div>
            <div class="single-bookmaker-content-item">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="single-bookmaker-ikon" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 477.73 477.73" style="enable-background:new 0 0 477.73 477.73;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M433.562,100.983c-0.008-0.154-0.025-0.308-0.051-0.461c-0.597-0.853-1.331-1.587-1.946-2.423
                      c-4.46-6.076-9.182-11.924-14.165-17.545c-1.365-1.536-2.731-3.055-4.13-4.557c-5.131-5.495-10.513-10.735-16.145-15.718
                      c-1.041-0.922-2.014-1.877-3.055-2.782c-13.88-11.891-29.078-22.153-45.295-30.583c-0.649-0.341-1.331-0.631-1.997-0.973
                      c-7.222-3.67-14.627-6.969-22.187-9.882c-1.707-0.614-3.26-1.195-4.881-1.707c-6.724-2.423-13.551-4.545-20.48-6.366
                      c-2.048-0.546-4.096-1.109-6.178-1.587c-6.827-1.587-13.653-2.799-20.634-3.789c-2.116-0.307-4.198-0.717-6.332-0.973
                      c-17.979-2.185-36.156-2.185-54.136,0c-2.133,0.256-4.215,0.666-6.332,0.973c-6.98,0.99-13.875,2.202-20.634,3.789
                      c-2.082,0.478-4.13,1.041-6.178,1.587c-6.975,1.82-13.801,3.942-20.48,6.366c-1.707,0.58-3.26,1.161-4.881,1.707
                      c-7.559,2.913-14.965,6.211-22.187,9.882c-0.666,0.341-1.348,0.631-1.997,0.973c-16.271,8.421-31.52,18.682-45.449,30.583
                      c-1.041,0.904-2.014,1.86-3.055,2.782c-5.689,5.006-11.071,10.246-16.145,15.718c-1.399,1.502-2.765,3.021-4.13,4.557
                      c-4.995,5.609-9.717,11.457-14.165,17.544c-0.614,0.836-1.348,1.57-1.946,2.423c-0.078,0.149-0.147,0.303-0.205,0.461
                      c-58.866,82.497-58.866,193.267,0,275.763c0.058,0.158,0.126,0.312,0.205,0.461c0.597,0.853,1.331,1.587,1.946,2.423
                      c4.449,6.076,9.17,11.924,14.165,17.545c1.365,1.536,2.731,3.055,4.13,4.557c5.143,5.495,10.524,10.735,16.145,15.718
                      c1.041,0.922,2.014,1.877,3.055,2.782c13.88,11.891,29.078,22.153,45.295,30.583c0.649,0.341,1.331,0.631,1.997,0.973
                      c7.222,3.67,14.627,6.969,22.187,9.882c1.707,0.614,3.26,1.195,4.881,1.707c6.724,2.423,13.551,4.545,20.48,6.366
                      c2.048,0.546,4.096,1.109,6.178,1.587c6.827,1.587,13.653,2.799,20.634,3.789c2.116,0.307,4.198,0.717,6.332,0.973
                      c17.979,2.185,36.156,2.185,54.136,0c2.133-0.256,4.215-0.666,6.332-0.973c6.98-0.99,13.875-2.202,20.634-3.789
                      c2.082-0.478,4.13-1.041,6.178-1.587c6.986-1.82,13.813-3.942,20.48-6.366c1.707-0.58,3.26-1.161,4.881-1.707
                      c7.559-2.913,14.965-6.211,22.187-9.882c0.666-0.341,1.348-0.631,1.997-0.973c16.217-8.431,31.415-18.692,45.295-30.583
                      c1.041-0.905,2.014-1.86,3.055-2.782c5.689-4.995,11.071-10.234,16.145-15.718c1.399-1.502,2.765-3.021,4.13-4.557
                      c4.995-5.621,9.717-11.469,14.165-17.545c0.614-0.836,1.348-1.57,1.946-2.423c0.078-0.149,0.147-0.303,0.205-0.461
                      C492.428,294.25,492.428,183.48,433.562,100.983z M414.089,133.274c16.322,26.881,26.178,57.185,28.791,88.525H340.651
                      c-1.252-20.336-4.452-40.504-9.557-60.228C359.971,156.163,387.922,146.633,414.089,133.274z M282.368,38.775
                      c0.956,0.222,1.877,0.529,2.833,0.751c6.11,1.434,12.169,3.072,18.091,5.12c0.905,0.307,1.792,0.666,2.68,0.99
                      c5.871,2.048,11.656,4.318,17.323,6.827c0.99,0.461,1.963,0.973,2.953,1.434c5.427,2.583,10.729,5.376,15.906,8.38l3.413,2.065
                      c4.915,3.004,9.694,6.218,14.336,9.643c1.195,0.87,2.389,1.707,3.567,2.662c4.551,3.413,8.909,7.071,13.073,10.974
                      c1.092,0.99,2.219,1.963,3.294,2.987c4.369,4.147,8.533,8.533,12.561,13.073c0.512,0.597,1.058,1.143,1.57,1.707
                      c-23.109,11.013-47.59,18.877-72.789,23.381c-11.674-32.092-27.095-62.694-45.943-91.17
                      C277.606,38.025,280.03,38.264,282.368,38.775z M171.298,221.798c1.346-18.466,4.49-36.757,9.387-54.613
                      c19.337,2.297,38.793,3.436,58.266,3.413c19.491-0.006,38.965-1.174,58.317-3.499c4.888,17.885,8.015,36.205,9.335,54.699H171.298
                      z M306.603,255.932c-1.346,18.466-4.49,36.757-9.387,54.613c-19.337-2.297-38.793-3.436-58.266-3.413
                      c-19.49-0.022-38.963,1.117-58.317,3.413c-4.883-17.857-8.009-36.148-9.336-54.613H306.603z M238.95,45.193
                      c19.422,27.527,35.396,57.332,47.565,88.747c-15.799,1.678-31.676,2.521-47.565,2.526c-15.871-0.019-31.731-0.867-47.514-2.543
                      C203.62,102.529,219.575,72.734,238.95,45.193z M85.521,103.663c4.011-4.54,8.192-8.926,12.561-13.073
                      c1.075-1.024,2.202-1.997,3.294-2.987c4.21-3.834,8.568-7.492,13.073-10.974c1.178-0.905,2.372-1.707,3.567-2.662
                      c4.642-3.413,9.421-6.628,14.336-9.643l3.413-2.065c5.177-3.026,10.479-5.82,15.906-8.38c0.99-0.461,1.963-0.973,2.953-1.434
                      c5.666-2.56,11.452-4.83,17.323-6.827c0.887-0.324,1.707-0.683,2.679-0.99c5.922-1.98,11.947-3.618,18.091-5.12
                      c0.956-0.222,1.877-0.529,2.85-0.734c2.338-0.512,4.762-0.751,7.134-1.178c-18.856,28.481-34.282,59.089-45.961,91.187
                      c-25.199-4.504-49.681-12.368-72.789-23.381C84.463,104.806,85.009,104.26,85.521,103.663z M63.812,133.274
                      c26.161,13.358,54.106,22.888,82.978,28.297c-5.099,19.725-8.294,39.893-9.54,60.228H35.021
                      C37.635,190.459,47.491,160.155,63.812,133.274z M63.812,344.457c-16.322-26.881-26.178-57.185-28.791-88.525H137.25
                      c1.252,20.336,4.452,40.504,9.557,60.228C117.93,321.567,89.979,331.097,63.812,344.457z M195.533,438.955
                      c-0.956-0.222-1.877-0.529-2.833-0.751c-6.11-1.434-12.169-3.072-18.091-5.12c-0.905-0.307-1.792-0.666-2.68-0.99
                      c-5.871-2.048-11.656-4.318-17.323-6.827c-0.99-0.461-1.963-0.973-2.953-1.434c-5.427-2.583-10.729-5.376-15.906-8.38
                      l-3.413-2.065c-4.915-3.004-9.694-6.218-14.336-9.643c-1.195-0.87-2.389-1.707-3.567-2.662
                      c-4.551-3.413-8.909-7.071-13.073-10.974c-1.092-0.99-2.219-1.963-3.294-2.987c-4.369-4.147-8.533-8.533-12.561-13.073
                      c-0.512-0.597-1.058-1.143-1.57-1.707c23.109-11.013,47.59-18.877,72.789-23.381c11.674,32.092,27.095,62.694,45.943,91.17
                      C200.294,439.706,197.871,439.467,195.533,438.955z M238.95,432.538c-19.422-27.527-35.396-57.332-47.565-88.747
                      c31.607-3.402,63.488-3.402,95.095,0l-0.017,0.017C274.281,375.201,258.326,404.996,238.95,432.538z M392.38,374.067
                      c-4.011,4.54-8.192,8.926-12.561,13.073c-1.075,1.024-2.202,1.997-3.294,2.987c-4.21,3.846-8.568,7.504-13.073,10.974
                      c-1.178,0.904-2.372,1.792-3.567,2.662c-4.642,3.413-9.421,6.628-14.336,9.643l-3.413,2.065
                      c-5.166,3.015-10.468,5.808-15.906,8.38c-0.99,0.461-1.963,0.973-2.953,1.434c-5.666,2.56-11.452,4.83-17.323,6.827
                      c-0.887,0.324-1.707,0.683-2.679,0.99c-5.922,1.98-11.947,3.618-18.091,5.12c-0.956,0.222-1.877,0.529-2.85,0.734
                      c-2.338,0.512-4.762,0.751-7.134,1.178c18.848-28.476,34.27-59.078,45.943-91.17c25.199,4.504,49.681,12.368,72.789,23.381
                      C393.438,372.924,392.892,373.47,392.38,374.067z M414.089,344.457c-26.161-13.358-54.106-22.888-82.978-28.297
                      c5.099-19.725,8.294-39.893,9.54-60.228H442.88C440.266,287.271,430.41,317.575,414.089,344.457z"/>
                  </g>
                </g>
              </svg>
              <span>Доступные языки: <strong style="color: #dfa900"><?php echo $language; ?></strong></span>
            </div>
            <div class="single-bookmaker-content-item">
              <svg id="bold_1_" enable-background="new 0 0 24 24" height="512" class="single-bookmaker-ikon" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                <path d="m4.992 4.5h8.016l1.73-1.384c.589-.47.809-1.233.56-1.945s-.896-1.171-1.648-1.171h-9.3c-.752 0-1.399.46-1.648 1.171s-.029 1.475.559 1.944z"/>
                <path d="m17 12.18-.66.66c-.42.43-.99.66-1.59.66s-1.17-.23-1.59-.66c-.88-.88-.88-2.3 0-3.18l1.65-1.65c-.51-.75-1.07-1.43-1.67-2.01h-8.28c-2.74 2.68-4.86 
                    7.39-4.86 11.25 0 3.36 1.78 6.75 5.75 6.75h6.75c3.39 0 5.5-2.59 5.5-6.75 0-1.61-.37-3.37-1-5.07zm-8.38 2.07h.76c1.17 0 2.12.95 2.12 2.12 0 1.05-.76 
                    1.92-1.75 2.09v.79c0 .41-.34.75-.75.75s-.75-.34-.75-.75v-.75h-1c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h2.13c.34 0 .62-.28.62-.62 0-.35-.28-.63-.62-.63h-.76c-1.17 
                    0-2.12-.95-2.12-2.12 0-1.05.76-1.92 1.75-2.09v-.79c0-.41.34-.75.75-.75s.75.34.75.75v.75h1c.41 0 .75.34.75.75s-.34.75-.75.75h-2.13c-.34 0-.62.28-.62.62 0 .35.28.63.62.63z"/>
                <path d="m22.25 6h-2.5c-.303 0-.577.183-.693.463s-.052.603.163.817l.648.648-.973.898-1.273-.728c-.294-.168-.663-.118-.902.122l-2.5 2.5c-.293.293-.293.768 0 
                  1.061.146.146.338.22.53.22s.384-.073.53-.22l2.095-2.095 1.252.716c.285.163.641.122.881-.1l1.421-1.311.79.79c.144.143.336.219.531.219.097 0 .194-.019.287-.057.28-.116.463-.39.463-.693v-2.5c0-.414-.336-.75-.75-.75z"/>
              </svg>
              <span>Минимальный депозит: <strong style="color: #dfa900"><?php echo $dep; ?></strong></span>
            </div>
            <div class="single-bookmaker-content-item">
              <svg id="Capa_1" enable-background="new 0 0 512 512" class="single-bookmaker-ikon" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path d="m275.65 109.048h147.061v-94.048c0-8.284-6.716-15-15-15h-132.061z"/>
                  <path d="m180.391 109.048v-109.048h-49.105c-8.284 0-15 6.716-15 15v94.048z"/>
                  <path d="m210.391 0h35.259v109.048h-35.259z"/>
                  <path d="m417.998 298.096c-17.04 0-30.903 13.863-30.903 30.903v3.05c0 17.04 13.863 30.903 30.903 30.903h94.002v-64.856z"/>
                  <path d="m417.998 392.952c-33.582 0-60.903-27.321-60.903-60.903v-3.05c0-33.582 27.321-60.903 60.903-60.903h94.002v-114.048c0-8.284-6.716-15-15-15h-380.715v372.952h380.715c8.284 0 15-6.716 15-15v-104.048z"/>
                  <path d="m86.285 139.048h-71.285c-8.284 0-15 6.716-15 15v342.952c0 8.284 6.716 15 15 15h71.285z"/>
                </g>
              </svg>
              <span>Минимальный вывод: <strong style="color: #dfa900"><?php echo $output; ?></strong></span>
            </div>
            <div class="single-bookmaker-content-item">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="single-bookmaker-ikon" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	              viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M400,0H112C94.368,0,80,14.368,80,32v448c0,17.664,14.368,32,32,32h288c17.664,0,32-14.336,32-32V32
                      C432,14.368,417.664,0,400,0z M400,416H112V64h288V416z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M224,128h-64c-8.832,0-16,7.168-16,16v64c0,8.832,7.168,16,16,16h64c8.832,0,16-7.168,16-16v-64
                      C240,135.168,232.832,128,224,128z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M224,256h-64c-8.832,0-16,7.168-16,16v64c0,8.832,7.168,16,16,16h64c8.832,0,16-7.168,16-16v-64
                      C240,263.168,232.832,256,224,256z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M352,128h-64c-8.832,0-16,7.168-16,16v64c0,8.832,7.168,16,16,16h64c8.832,0,16-7.168,16-16v-64
                      C368,135.168,360.832,128,352,128z"/>
                  </g>
                </g>
              </svg>
              <div class="mobile-app">
                <span>Мобильное приложение:</span>
                <svg version="1.1" class="icon-device" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.12 512.12" width="30" height="30" style="enable-background:new 0 0 512.12 512.12;" xml:space="preserve">
                  <g>
                    <path d="M74.727,170.787c-17.673,0-32,14.327-32,32V352.12c0,17.673,14.327,32,32,32s32-14.327,32-32
                      V202.787C106.727,185.114,92.4,170.787,74.727,170.787z"></path>
                    <path d="M437.393,170.787c-17.673,0-32,14.327-32,32V352.12c0,17.673,14.327,32,32,32s32-14.327,32-32
                      V202.787C469.393,185.114,455.067,170.787,437.393,170.787z"></path>
                    <path d="M373.393,170.787H138.727c-5.891,0-10.667,4.776-10.667,10.667V352.12
                      c-0.005,25.348,17.831,47.197,42.667,52.267v75.733c0,17.673,14.327,32,32,32s32-14.327,32-32v-74.667h42.667v74.667
                      c0,17.673,14.327,32,32,32s32-14.327,32-32v-75.733c24.836-5.07,42.672-26.919,42.667-52.267V181.454
                      C384.06,175.563,379.284,170.787,373.393,170.787z">
                    </path>
                    <path d="M333.607,44.323l26.005-25.984c4.237-4.093,4.354-10.845,0.262-15.083
                      c-4.093-4.237-10.845-4.354-15.083-0.262c-0.089,0.086-0.176,0.173-0.262,0.262L314.236,33.55
                      c-37.102-16.117-79.229-16.117-116.331,0L167.612,3.235c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82
                      l25.984,26.005c-31.677,20.96-50.649,56.481-50.453,94.464c0,5.891,4.776,10.667,10.667,10.667h234.667
                      c5.891,0,10.667-4.776,10.667-10.667C384.256,100.804,365.284,65.283,333.607,44.323z">
                    </path>
                  </g>
                  <g>
                    <circle style="fill:#FAFAFA;" cx="202.727" cy="96.12" r="10.667"></circle>
                    <circle style="fill:#FAFAFA;" cx="309.393" cy="96.12" r="10.667"></circle>
                  </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-device" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" 
                  style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512">
                  <g>
                    <path d="M185.255,512c-76.201-0.439-139.233-155.991-139.233-235.21c0-129.404,97.075-157.734,134.487-157.734   
                      c16.86,0,34.863,6.621,50.742,12.48c11.104,4.087,22.588,8.306,28.975,8.306c3.823,0,12.832-3.589,20.786-6.738   
                      c16.963-6.753,38.071-15.146,62.651-15.146c0.044,0,0.103,0,0.146,0c18.354,0,74.004,4.028,107.461,54.272l7.837,11.777   
                      l-11.279,8.511c-16.113,12.158-45.513,34.336-45.513,78.267c0,52.031,33.296,72.041,49.292,81.665   
                      c7.061,4.248,14.37,8.628,14.37,18.208c0,6.255-49.922,140.566-122.417,140.566c-17.739,0-30.278-5.332-41.338-10.034   
                      c-11.191-4.761-20.845-8.862-36.797-8.862c-8.086,0-18.311,3.823-29.136,7.881C221.496,505.73,204.752,512,185.753,512H185.255z"/>
                    <path d="M351.343,0c1.888,68.076-46.797,115.304-95.425,112.342C247.905,58.015,304.54,0,351.343,0z"/>
                  </g>
                </svg>
              </div>
            </div>
          </div>
          <div class="single-bookmaker-button">
            <a class="bookmmaker-main-button single-bonus" href="<?php echo $link; ?>">Перейти</a>
          </div>
        </div>
      </div>
      <div class="tabs-bookmaker-info">
        <!--<div id="details" class="item-tab-title-book btn">
          <svg version="1.1" class="tab-ikon-book" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
              <g>
                <path d="M310,190c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S315.52,190,310,190z"/>
              </g>
            </g>
            <g>
              <g>
                <path d="M500.281,443.719l-133.48-133.48C388.546,277.485,400,239.555,400,200C400,89.72,310.28,0,200,0S0,89.72,0,200
                  s89.72,200,200,200c39.556,0,77.486-11.455,110.239-33.198l36.895,36.895c0.005,0.005,0.01,0.01,0.016,0.016l96.568,96.568
                  C451.276,507.838,461.319,512,472,512c10.681,0,20.724-4.162,28.278-11.716C507.837,492.731,512,482.687,512,472
                  S507.837,451.269,500.281,443.719z M305.536,345.727c0,0.001-0.001,0.001-0.002,0.002C274.667,368.149,238.175,380,200,380
                  c-99.252,0-180-80.748-180-180S100.748,20,200,20s180,80.748,180,180c0,38.175-11.851,74.667-34.272,105.535
                  C334.511,320.988,320.989,334.511,305.536,345.727z M326.516,354.793c10.35-8.467,19.811-17.928,28.277-28.277l28.371,28.371
                  c-8.628,10.183-18.094,19.65-28.277,28.277L326.516,354.793z M486.139,486.139c-3.78,3.78-8.801,5.861-14.139,5.861
                  s-10.359-2.081-14.139-5.861l-88.795-88.795c10.127-8.691,19.587-18.15,28.277-28.277l88.798,88.798
                  C489.919,461.639,492,466.658,492,472C492,477.342,489.919,482.361,486.139,486.139z"/>
              </g>
            </g>
            <g>
              <g>
                <path d="M200,40c-88.225,0-160,71.775-160,160s71.775,160,160,160s160-71.775,160-160S288.225,40,200,40z M200,340
                  c-77.196,0-140-62.804-140-140S122.804,60,200,60s140,62.804,140,140S277.196,340,200,340z"/>
              </g>
            </g>
            <g>
              <g>
                <path d="M312.065,157.073c-8.611-22.412-23.604-41.574-43.36-55.413C248.479,87.49,224.721,80,200,80c-5.522,0-10,4.478-10,10
                  c0,5.522,4.478,10,10,10c41.099,0,78.631,25.818,93.396,64.247c1.528,3.976,5.317,6.416,9.337,6.416
                  c1.192,0,2.405-0.215,3.584-0.668C311.472,168.014,314.046,162.229,312.065,157.073z"/>
              </g>
            </g>
          </svg>
          <span>Детали</span>
        </div>-->
        <div id="review" class="item-tab-title-book btn">
          <svg id="Capa_1" class="tab-ikon-book" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
            <g>
              <path d="m503.22 186.828-25.041-25.041c-11.697-11.698-30.729-11.696-42.427 0l-52.745 52.745v-169.532c0-24.813-20.187-45-45-45h-293c-24.813 0-45 20.187-45 45v422c0 24.813 20.187 45 45 
                45h293c24.813 0 45-20.187 45-45v-119.033l120.213-118.712c11.697-11.697 11.697-30.73 0-42.427zm-179.399 177.423-45.122 21.058 21.037-45.078 111.975-111.975 24.757 24.756zm29.186 
                102.749c0 8.271-6.729 15-15 15h-293c-8.271 0-15-6.729-15-15v-422c0-8.271 6.729-15 15-15h293c8.271 0 15 6.729 15 15v199.532c-83.179 83.179-77.747 77.203-79.34 80.616l-39.598 84.854c-2.667 
                5.717-1.474 12.49 2.986 16.95 4.46 4.461 11.236 5.653 16.95 2.986l84.854-39.599c3.111-1.452 3.623-2.354 14.148-12.748zm104.806-235.067-24.89-24.89 24.043-24.043 25.033 25.049z"/>
              <path d="m80.007 127h224c8.284 0 15-6.716 15-15s-6.716-15-15-15h-224c-8.284 0-15 6.716-15 15s6.716 15 15 15z"/>
              <path d="m80.007 207h176c8.284 0 15-6.716 15-15s-6.716-15-15-15h-176c-8.284 0-15 6.716-15 15s6.716 15 15 15z"/>
              <path d="m208.007 257h-128c-8.284 0-15 6.716-15 15s6.716 15 15 15h128c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/>
            </g>
          </svg>
          <span>Обзор</span>
        </div>
        <div id="mobile" class="item-tab-title-book">
          <svg version="1.1" class="tab-ikon-book" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 503.604 503.604" style="enable-background:new 0 0 503.604 503.604;" xml:space="preserve">
            <g>
              <g>
                <path d="M337.324,0H167.192c-28.924,0-53.5,23.584-53.5,52.5v398.664c0,28.916,24.056,52.44,52.98,52.44l170.412-0.184
                  c28.92,0,52.58-23.528,52.58-52.448l0.248-398.5C389.908,23.452,366.364,0,337.324,0z M227.68,31.476h49.36
                  c4.336,0,7.868,3.52,7.868,7.868c0,4.348-3.532,7.868-7.868,7.868h-49.36c-4.348,0-7.868-3.52-7.868-7.868
                  C219.812,34.996,223.332,31.476,227.68,31.476z M198.02,33.98c2.916-2.912,8.224-2.952,11.136,0c1.46,1.456,2.324,3.5,2.324,5.588
                  c0,2.048-0.864,4.088-2.324,5.548c-1.452,1.46-3.504,2.32-5.548,2.32c-2.084,0-4.088-0.86-5.588-2.32
                  c-1.452-1.456-2.28-3.5-2.28-5.548C195.736,37.48,196.568,35.436,198.02,33.98z M250.772,488.008
                  c-12.984,0-23.544-10.568-23.544-23.548c0-12.984,10.56-23.548,23.544-23.548s23.544,10.564,23.544,23.548
                  C274.316,477.44,263.752,488.008,250.772,488.008z M365.488,424.908H141.232V74.756h224.256V424.908z"/>
              </g>
            </g>
          </svg>
          <span>Мобильная версия</span>
        </div>
        <div id="register" class="item-tab-title-book">
          <svg version="1.1" class="tab-ikon-book" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 220.319 220.319" style="enable-background:new 0 0 220.319 220.319;" xml:space="preserve">
            <path d="M110.16,0C49.417,0,0,49.417,0,110.16s49.417,110.159,110.16,110.159s110.16-49.417,110.16-110.159S170.902,0,110.16,0z
              M110.16,190.001c-44.024,0-79.84-35.816-79.84-79.841s35.816-79.841,79.84-79.841S190,66.135,190,110.16
              S154.184,190.001,110.16,190.001z M150.19,95.832c0-22.237-15.607-36.052-40.73-36.052H72.24v100.76h21.34v-28.073h15.881
              c0.936,0,1.925-0.024,2.943-0.074l20.535,28.148h26.446l-25.034-34.301C144.571,119.86,150.19,109.084,150.19,95.832z
              M109.46,111.128H93.58V81.12h15.881c19.391,0,19.391,11.072,19.391,14.712C128.852,99.614,128.852,111.128,109.46,111.128z"/>
          </svg>
          <span>Регистрация</span>
        </div>
      </div>
      <!--<div class="single-text-detail">
        <div class="single-text-detail-content">
          <div class="single-text-detail-title">
            <svg height="512pt" viewBox="0 0 512 512" width="512pt" class="single-bookmaker-ikon" xmlns="http://www.w3.org/2000/svg">
              <path d="m100 113c0-11.046875 8.953125-20 20-20h272c11.046875 0 20 8.953125 20 20s-8.953125 20-20 20h-272c-11.046875 0-20-8.953125-20-20zm312 80c0-11.046875-8.953125-20-20-20h-272c-11.046875 0-20 
                8.953125-20 20s8.953125 20 20 20h272c11.046875 0 20-8.953125 20-20zm-292 60c-11.046875 0-20 8.953125-20 20s8.953125 20 20 20h92c11.046875 0 20-8.953125 20-20s-8.953125-20-20-20zm374.441406 
                156.589844c23.378906 23.378906 23.378906 61.441406-.015625 84.835937-11.695312 11.695313-27.0625 17.546875-42.425781 
                17.546875s-30.730469-5.851562-42.425781-17.546875l-109.367188-109.570312c-2.4375-2.441407-4.199219-5.46875-5.117187-8.792969l-22.363282-80.722656c-1.945312-7.03125.085938-14.5625 5.308594-19.65625 
                5.21875-5.089844 12.796875-6.941406 19.777344-4.820313l78.726562 23.914063c3.152344.957031 6.019532 2.675781 8.34375 5.007812zm-162.210937-49.273438 73.515625 73.652344 
                28.289062-28.289062-73.925781-74.089844-39.128906-11.886719zm133.910156 77.542969-3.851563-3.863281-28.285156 28.285156 3.867188 3.875c7.785156 7.785156 20.472656 7.785156 28.269531-.015625 7.800781-7.796875 
                7.800781-20.484375 0-28.28125zm-34.140625-437.859375h-352c-44.113281 0-80 35.886719-80 80v352c0 44.113281 35.886719 80 80 80h245c11.046875 0 20-8.953125 20-20s-8.953125-20-20-20h-245c-22.054688 
                0-40-17.945312-40-40v-352c0-22.054688 17.945312-40 40-40h352c22.054688 0 40 17.945312 40 40v246c0 11.046875 8.953125 20 20 20s20-8.953125 20-20v-246c0-44.113281-35.886719-80-80-80zm0 0"></path>
            </svg>
            <span>Общая информация</span>
          </div>
          <div class="single-text-detail-info">
            <div class="info-item">
            </div>
            <div class="info-item">
            </div>
            <div class="info-item">
            </div>
            <div class="info-item">
            </div>
            <div class="info-item">
            </div>
            <div class="info-item">
            </div>
          </div>
        </div>
        <span>fsdfsdfsdfsdfsdfsdfsdf</span>
      </div>-->
      <div class="single-text-content">
        <?php
          the_content(); 
        ?>
      </div>
      <div class="single-text-mobile">
        <?php echo $mobile; ?>
      </div>
      <div class="single-text-reg">
        <?php echo $register; ?>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();

