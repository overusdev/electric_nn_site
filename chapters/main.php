<?php

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$time = time() - 20;


// $name = trim($_POST['name']);
// $phone = trim($_POST['phone']);

// echo $name.", ".$phone;



// //        уведомление на почту
// require_once("./phpmailer/phpmailer/mailfunc.php");
// $m_to = "svilkov87@mail.ru"; // кому - ящик (из формы)
// $m_nameto = "svilkov87@mail.ru"; // Кому
// $m_namefrom = $_POST['phone']; // Поле От в письме
// $subj = "Новая заявка на";
// $tmsg = 'Имя клиента:  '.$name.'.  '.'Телефон:  '.$phone;
// $m_from = 'svilkov00@yandex.ru'; // от кого
// $m_reply = 'svilkov00@yandex.ru'; // адрес для обратного ответа
// $mail1 = phpmailer($subj, $tmsg, $m_to, $m_nameto, $m_namefrom, $m_from, $m_reply, $m_hostmail, $m_port, $m_password, $m_secure);

// if ($name || $phone ) {
//     header("Location: http://".$_SERVER['HTTP_HOST']);


// }

// echo "<pre>";
// var_dump($name);
// var_dump($phone);
// var_dump($_SERVER['HTTP_HOST']);
// echo "</pre>";

?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="stylesheet" href="css/style.bundle.css?<?php echo $time; ?>" />
    <title>Частный электрик | главная</title>
  </head>
  <body>
    <div class="b-popup b-close-popup-elem">
      <div class="container container-md container-sm">
        <div class="b-popup__form-wrapper">
          <div class="b-popup__header-wrapper">
            <div class="b-popup__title">Оставьте свой номер телефона, и мы с вами свяжемся в ближайшее время</div>
          </div>
          <form action="../ajax/order.php" class="b-popup__form" id="b-popup__form" method="POST">
            <div class="b-popup__close-popup"></div>
            <div class="b-popup__input-wrapper">
              <label for="name" class="b-popup__label">
                Имя
              </label>
              <input id="name" class="b-popup__input b-popup__input_name" type="text" name="name" />
            </div>
            <div class="b-popup__input-wrapper">
              <label for="phone" class="b-popup__label">
                Телефон
              </label>
              <input
                id="phone"
                class="b-popup__input b-popup__input_phone"
                type="text"
                name="phone"
                placeholder="Например 8 999 888 77 66"
              />
            </div>
            <button class="b-popup__button b-popup__button_state_disabled">Оставить заявку</button>
          </form>
          <div class="b-popup__loader-wrapper">
            <div class="b-popup__spinner spinner-13"></div>
            <p class="b-popup__thnx-text">Спасибо за обращение, я свяжусь с вами в ближайшее время.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="top">
      <svg
        class="top__icon"
        aria-hidden="true"
        focusable="false"
        data-prefix="fal"
        data-icon="angle-up"
        role="img"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 256 512"
        class="svg-inline--fa fa-angle-up fa-w-8 fa-3x"
      >
        <path
          fill="#fff"
          d="M136.5 185.1l116 117.8c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L128 224.7 27.6 326.9c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-117.8c4.7-4.6 12.3-4.6 17 .1z"
          class=""
        ></path>
      </svg>
    </div>

    <div class="b-nav">
      <div class="container">
        <div class="b-nav__nav-wrapper">
          <div class="b-nav__logo-wrapper">Logo block</div>
          <span class="b-nav__burger"></span>
          <div class="b-nav__menu-wrapper">
            <div class="b-nav__menu-nav">
              <div class="b-nav__menu-nav-logo">Меню</div>
              <!-- <div class="b-nav__menu-nav-close-icon"></div> -->
              <svg
                class="b-nav__menu-arrow"
                aria-hidden="true"
                focusable="false"
                data-prefix="fal"
                data-icon="chevron-right"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 512"
                class="svg-inline--fa fa-chevron-right fa-w-8 fa-2x"
              >
                <path
                  d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"
                  class=""
                ></path>
              </svg>
            </div>
            <!-- b-nav__links_state_active -->
            <a href="#b-header-block" class="b-nav__links b-nav__links_state_active">Главная</a>
            <a href="#b-services" class="b-nav__links">Услуги и стоимость</a>
            <a href="#b-benefits" class="b-nav__links">Преимущества</a>
            <a href="#b-gallery" class="b-nav__links">Галерея</a>
          </div>
        </div>
      </div>
    </div>

    <div class="b-header-block el-sections" id="b-header-block">
      <div class="container">
        <div class="b-header-block__wrapper">
          <div class="b-header-block__left">
            <h1 class="b-header-block__left-title">Частный ЭЛЕКТРИК в Нижнем Новгороде</h1>
            <p class="b-header-block__left-phone-title">+7 (908)-167-77-55</p>
            <p class="b-header-block__left-phone-note">Все виды электромонтажных работ</p>
            <p class="b-header-block__left-phone-note">Консультация по телефону бесплатно</p>
            <button class="b-header-block__button b-open-popup-btn">Узнать подробности</button>
          </div>
          <div class="b-header-block__right">
            <img class="b-header-block__bg-image" src="img/Cable-PNG.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="b-services el-sections" id="b-services">
      <div class="container">
        <div class="b-services__wrapper">
          <h2 class="b-services__header">Услуги и стоимость</h2>
        </div>
        <div class="row b-services__rel">
          <div class="col-md-6">
            <div class="b-services__item">
              <div class="b-services__item-title-wrapper">
                <span class="b-services__item-icon-wrapper">
                  <span class="b-services__icon b-services__icon_passatiges"></span>
                </span>
                <p class="b-services__item-title">
                  АВАРИЙНЫЕ ВЫЕЗДЫ («НЕТ СВЕТА», ЗАМЫКАНИЕ И Т.Д.)
                </p>
              </div>
              <img src="img/services/b-services__avary.jpg" alt="img" class="b-services__img" />
              <div class="b-services__subitem">
                <div class="b-services__subitem-price-header">
                  <span class="b-services__subitem-striked-price">
                    <span class="b-services__subitem-striked-from">от</span>
                    600р
                  </span>
                  <span class="b-services__subitem-new-price">
                    <span class="b-services__subitem-new-from">от</span>
                    500р
                  </span>
                  <span class="b-services__loupe-wrapper" data-item="locking">
                    <span class="b-services__loupe"></span>
                    <span class="b-services__text">Развернуть</span>
                  </span>
                </div>
                <div class="b-services__subitem-content">
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Короткое замыкание</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      900р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Выбивает счетчики</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      900р
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="b-services__item">
              <div class="b-services__item-title-wrapper">
                <span class="b-services__item-icon-wrapper">
                  <span class="b-services__icon b-services__icon_chaladiler"></span>
                </span>
                <p class="b-services__item-title">
                  УСТАНОВКА (ЗАМЕНА) ОСВЕТИТЕЛЬНЫХ ПРИБОРОВ
                </p>
              </div>
              <img src="img/services/b-services__chandalier.jpg" alt="img" class="b-services__img" />
              <div class="b-services__subitem">
                <div class="b-services__subitem-price-header">
                  <span class="b-services__subitem-striked-price">
                    <span class="b-services__subitem-striked-from">от</span>
                    300р
                  </span>
                  <span class="b-services__subitem-new-price">
                    <span class="b-services__subitem-new-from">от</span>
                    270р
                  </span>
                  <span class="b-services__loupe-wrapper" data-item="lighting-devices">
                    <span class="b-services__loupe"></span>
                    <span class="b-services__text">Развернуть</span>
                  </span>
                </div>
                <div class="b-services__subitem-content">
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Демонтаж старой люстры, светильника, бра</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      270р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Подключение / расключение светильников</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      900р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title"
                      >Сборка люстры (зависит от сложности и модели)
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      840р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Установка люстры, светильника, бра зависит от сложности и модели)
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      740р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Ремонт люстры, светильника, бра зависит от сложности и модели)
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      840р
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="b-services__item">
              <div class="b-services__item-title-wrapper">
                <span class="b-services__item-icon-wrapper">
                  <span class="b-services__icon b-services__icon_socket"></span>
                </span>
                <p class="b-services__item-title">
                  РЕМОНТ (ПЕРЕНОС) РОЗЕТОК И ВЫКЛЮЧАТЕЛЕЙ
                </p>
              </div>
              <img src="img/services/b-services__sockets.png" alt="img" class="b-services__img" />
              <div class="b-services__subitem">
                <div class="b-services__subitem-price-header">
                  <span class="b-services__subitem-striked-price">
                    <span class="b-services__subitem-striked-from">от</span>
                    500р
                  </span>
                  <span class="b-services__subitem-new-price">
                    <span class="b-services__subitem-new-from">от</span>
                    450р
                  </span>
                  <span class="b-services__loupe-wrapper" data-item="sockets">
                    <span class="b-services__loupe"></span>
                    <span class="b-services__text">Развернуть</span>
                  </span>
                </div>
                <div class="b-services__subitem-content">
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Установка выключателя</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      450р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Установка блока выключателей</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      720р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Установка розетки</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      450р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Ремонт розеток
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      315р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Демонтаж выключателя
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      270р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Перенос розеток (без штробления)
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      270р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Ремонт блока выключателей
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      720р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Ремонт выключателя
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      450р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Штробление розетки и монтаж розетки
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      810р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Установка и подключение кнопки звонка
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      360р
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="b-services__item">
              <div class="b-services__item-title-wrapper">
                <span class="b-services__item-icon-wrapper">
                  <span class="b-services__icon b-services__icon_wiring"></span>
                </span>
                <p class="b-services__item-title">
                  ДИАГНОСТИКА (МОНТАЖ, ЗАМЕНА) ЭЛЕКТРОПРОВОДКИ
                </p>
              </div>
              <img src="img/services/b-services__wiring.jpg" alt="img" class="b-services__img" />
              <div class="b-services__subitem">
                <div class="b-services__subitem-price-header">
                  <span class="b-services__subitem-striked-price">
                    <span class="b-services__subitem-striked-from">от</span>
                    700р
                  </span>
                  <span class="b-services__subitem-new-price">
                    <span class="b-services__subitem-new-from">от</span>
                    500р
                  </span>
                  <span class="b-services__loupe-wrapper" data-item="mounting">
                    <span class="b-services__loupe"></span>
                    <span class="b-services__text">Развернуть</span>
                  </span>
                </div>
                <div class="b-services__subitem-content">
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Замена проводки (однокомнатная квартира)</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      8000р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Замена проводки (двухкомнатная квартира)</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      10000р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Замена проводки (трехкомнатная квартира)</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      12000р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title"
                      >Монтаж скрытой электропроводки со штроблением по кирпичу / бетону</span
                    >
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      500/700р(метр)
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title"
                      >Монтаж скрытой электропроводки со штроблением по потолку</span
                    >
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      540р(метр)
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Оштукатуривание штробы</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      45р(метр)
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Демонтаж соединительной коробки
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      415р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Установка соединительной коробки.
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      450р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Расключение (соединение проводов, коммутация) в распределительной коробке
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      145р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Оштукатуривание вокруг коробки
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      180р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Демонтаж плинтуса, кабель-канала
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      100р(метр)
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Монтаж плинтуса
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      70р(метр)
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Установка кабель-канала с прокладкой кабеля/до 50 метров/больше 50 метров
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      200/150/100р(метр)
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="b-services__item">
              <div class="b-services__item-title-wrapper">
                <span class="b-services__item-icon-wrapper">
                  <span class="b-services__icon b-services__icon_meter"></span>
                </span>
                <p class="b-services__item-title">
                  ЗАМЕНА (РЕМОНТ) ЭЛЕКТРОСЧЕТЧИКОВ
                </p>
              </div>
              <img src="img/services/b-services__meters.jpg" alt="img" class="b-services__img" />
              <div class="b-services__subitem">
                <div class="b-services__subitem-price-header">
                  <span class="b-services__subitem-striked-price">
                    <span class="b-services__subitem-striked-from">от</span>
                    300р
                  </span>
                  <span class="b-services__subitem-new-price">
                    <span class="b-services__subitem-new-from">от</span>
                    270р
                  </span>
                  <span class="b-services__loupe-wrapper" data-item="meter">
                    <span class="b-services__loupe"></span>
                    <span class="b-services__text">Развернуть</span>
                  </span>
                </div>
                <div class="b-services__subitem-content">
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Демонтаж старого счетчика электроэнергии</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      270
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Установка электросчетчиков однофазных</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      700 до 1500р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">Установка электросчетчиков трехфазных</span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      1350р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Монтаж петли для учета электрического счетчика
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      720р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Замена счётчика электроэнергии трёхфазного (демонтаж, монтаж, подключение)
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      1800р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Перенос электросчётчика (в зависимости от модели, сложности и технических условий)
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      1350р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Диагностика электросчетчика
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      630р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Установка автомата однополюсного / двухполюсного
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      360/360р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Установка автомата трехполюсного
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      405р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Установка и подключение УЗО
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      450р
                    </span>
                  </div>
                  <div class="b-services__subitem-content-item">
                    <span class="b-services__subitem-content-title">
                      Демонтаж/Установка пакетника
                    </span>
                    <span class="b-services__subitem-content-new-price">
                      <span class="b-services__subitem-content-new-from">от</span>
                      315/450р
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6">
                <div class="b-services__item">
                    <div class="b-services__item-title-wrapper">
                        <span class="b-services__item-icon-wrapper">
                            <span class="b-services__icon b-services__icon_electro-works"></span>
                        </span>
                        <p class="b-services__item-title">
                            ЭЛЕКТРОМОНТАЖНЫЕ РАБОТЫ, ПРОЕКТ ЭЛЕКТРИКИ
                        </p>
                    </div>
                    <img src="../../img/services/b-services__electro-project.jpg" alt="img" class="b-services__img">
                </div>
            </div> -->
          <!-- popups -->
          <div class="b-services__full-block" data-full="locking">
            <div class="b-services__full-block-close">Закрыть</div>
            <div class="b-services__subitem-content b-services__subitem-content_full">
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Короткое замыкание</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  900р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Выбивает счетчики</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  900р
                </span>
              </div>
            </div>
          </div>
          <!-- // popups  -->
          <!-- popups -->
          <div class="b-services__full-block" data-full="lighting-devices">
            <div class="b-services__full-block-close">Закрыть</div>
            <div class="b-services__subitem-content b-services__subitem-content_full">
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Демонтаж старой люстры, светильника, бра</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  270р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Подключение / расключение светильников</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  900р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Сборка люстры (зависит от сложности и модели) </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  840р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Установка люстры, светильника, бра зависит от сложности и модели)
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  740р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Ремонт люстры, светильника, бра зависит от сложности и модели)
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  840р
                </span>
              </div>
            </div>
          </div>
          <!-- // popups  -->
          <!-- popups -->
          <div class="b-services__full-block" data-full="sockets">
            <div class="b-services__full-block-close">Закрыть</div>
            <div class="b-services__subitem-content b-services__subitem-content_full">
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Установка выключателя</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  450р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Установка блока выключателей</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  720р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Установка розетки</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  450р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Ремонт розеток
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  315р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Демонтаж выключателя
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  270р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Перенос розеток (без штробления)
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  270р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Ремонт блока выключателей
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  720р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Ремонт выключателя
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  450р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Штробление розетки и монтаж розетки
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  810р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Установка и подключение кнопки звонка
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  360р
                </span>
              </div>
            </div>
          </div>
          <!-- // popups  -->
          <!-- popups -->
          <div class="b-services__full-block" data-full="mounting">
            <div class="b-services__full-block-close">Закрыть</div>
            <div class="b-services__subitem-content b-services__subitem-content_full">
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Замена проводки (однокомнатная квартира)</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  8000р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Замена проводки (двухкомнатная квартира)</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  10000р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Замена проводки (трехкомнатная квартира)</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  12000р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title"
                  >Монтаж скрытой электропроводки со штроблением по кирпичу / бетону</span
                >
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  500/700р(метр)
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title"
                  >Монтаж скрытой электропроводки со штроблением по потолку</span
                >
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  540р(метр)
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Оштукатуривание штробы</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  45р(метр)
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Демонтаж соединительной коробки
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  415р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Установка соединительной коробки.
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  450р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Расключение (соединение проводов, коммутация) в распределительной коробке
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  145р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Оштукатуривание вокруг коробки
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  180р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Демонтаж плинтуса, кабель-канала
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  100р(метр)
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Монтаж плинтуса
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  70р(метр)
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Установка кабель-канала с прокладкой кабеля/до 50 метров/больше 50 метров
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  200/150/100р(метр)
                </span>
              </div>
            </div>
          </div>
          <!-- // popups  -->
          <!-- popups -->
          <div class="b-services__full-block" data-full="meter">
            <div class="b-services__full-block-close">Закрыть</div>
            <div class="b-services__subitem-content b-services__subitem-content_full">
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Демонтаж старого счетчика электроэнергии </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  270
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Установка электросчетчиков однофазных</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  700 до 1500р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">Установка электросчетчиков трехфазных</span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  1350р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Монтаж петли для учета электрического счетчика
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  720р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Замена счётчика электроэнергии трёхфазного (демонтаж, монтаж, подключение)
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  1800р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Перенос электросчётчика (в зависимости от модели, сложности и технических условий)
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  1350р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Диагностика электросчетчика
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  630р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Установка автомата однополюсного / двухполюсного
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  360/360р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Установка автомата трехполюсного
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  405р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Установка и подключение УЗО
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  450р
                </span>
              </div>
              <div class="b-services__subitem-content-item">
                <span class="b-services__subitem-content-title">
                  Демонтаж/Установка пакетника
                </span>
                <span class="b-services__subitem-content-new-price">
                  <span class="b-services__subitem-content-new-from">от</span>
                  315/450р
                </span>
              </div>
            </div>
          </div>
          <!-- // popups  -->
        </div>
      </div>
      <div class="b-services__any-questions">
        <div class="container">
          <div class="b-services__any-questions-inner-wrapper">
            <div class="b-services__any-text-wrapper">
              <div class="b-services__any-title">Хотите получить консультацию?</div>
              <div class="b-services__any-text">Закажите звонок и мы вам перезвоним</div>
            </div>
            <button class="b-services__any-button b-open-popup-btn">Узнать подробности</button>
          </div>
        </div>
      </div>
    </div>

    <div class="b-benefits el-sections" id="b-benefits">
      <div class="container">
        <h2 class="b-benefits__header">Преимущества</h2>
        <div class="b-benefits__wrapper">
          <div class="row">
            <div class="col-md-6">
              <div class="b-benefits__item b-benefits__item_left">
                <p class="b-benefits__text-item">Гарантия на все виды работ</p>
                <p class="b-benefits__text-item">Консультация по телефону бесплатно</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="b-benefits__item b-benefits__item_right">
                <p class="b-benefits__text-item">Все виды электромонтажных работ</p>
                <p class="b-benefits__text-item">Индивидуальный подход к каждому заказу</p>
                <p class="b-benefits__text-item">Недорого</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="b-gallery el-sections" id="b-gallery">
      <div class="container">
        <h2 class="b-gallery__header">Галерея</h2>
        <div class="b-gallery__wrapper">
          <div class="row">
            <div class="col-md-6">
              <div class="b-gallery__item">
                <img class="b-gallery__img" src="img/gallery/face.jpg" alt="face" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="b-gallery__item">
                <img class="b-gallery__img" src="img/gallery/drell.jpg" alt="face" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="b-gallery__item">
                <img class="b-gallery__img" src="img/gallery/document.jpg" alt="face" />
              </div>
              <div class="b-gallery__item">
                <img class="b-gallery__img" src="img/gallery/instruments.jpg" alt="face" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="b-gallery__item">
                <img class="b-gallery__img" src="img/gallery/room.jpg" alt="face" />
              </div>
              <div class="b-gallery__item">
                <img class="b-gallery__img" src="img/gallery/room2.jpg" alt="face" />
              </div>
              <div class="b-gallery__item">
                <img class="b-gallery__img" src="img/gallery/room3.jpg" alt="face" />
              </div>
            </div>
          </div>
        </div>
        <div class="b-gallery__wrapper">
          <div class="row">
            <video controls width="100%" height="auto">
              <source src="img/gallery/video/video.mp4" type="video/mp4" />
              <!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
              <source src="img/gallery/video/video.webm" type="video/webm" />
              <!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
              <object data="video.swf" type="application/x-shockwave-flash">
                <!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
                <param name="movie" value="video.swf" />
              </object>
            </video>
          </div>
        </div>
      </div>
    </div>

    <div class="b-footer">
      <div class="container">
        <div class="b-footer__wrapper">
          <p class="b-footer__item">
            <a href="https://vk.com/electrician152rus" class="b-footer__text b-footer__icon b-footer__icon_vk">
              Группа вконтакте
            </a>
          </p>
          <p class="b-footer__item">
            <span class="b-footer__text">Телефон/Вайбер +7 (908) 167-77-55</span>
          </p>
        </div>
      </div>
    </div>

    <script src="js/bundle.js?<?php echo $time; ?>"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(61627144, "init", {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/61627144" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  </body>
</html>
