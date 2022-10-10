<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('assets/css/main.css')}}">
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}">
    <title>laravel test</title>
</head>
<body>
    <div class="wrapper">
        <main class="main">
            <div class="main__breadcrumbs breadcrumbs">
                <div class="container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="https://changeme" class="breadcrumbs__link">Главная</a></li>
                        <li class="breadcrumbs__item"><a href="https://changeme" class="breadcrumbs__link">Каталог</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--current"><a href="https://changeme" class="breadcrumbs__link">Для легковых автомобилей</a></li>
                    </ul>
                </div>
            </div>
            <section class="main__catalog catalog js-catalog">
                <div class="container">
                    <div class="catalog__body">
                        <div class="catalog__top">
                            <h1 class="catalog__title">Масла Mobil для легковых автомобилей</h1>
                            <p class="catalog__found">Найдено 150 товаров</p>
                        </div>
                        <div class="catalog__row">
                            <div class="catalog__sidebar sidebar">
                                <div class="sidebar__catalog sidebar-catalog">
                                    <div class="sidebar-catalog__top">
                                        <div class="sidebar-catalog__title">Каталог</div>
                                    </div>
                                    <nav class="sidebar-catalog__nav">
                                        <ul class="sidebar-catalog__list">
                                            <li class="sidebar-catalog__item"><a href="https://changeme" class="sidebar-catalog__link sidebar-catalog__link--current">Для легковых авто</a></li>
                                            <li class="sidebar-catalog__item"><a href="https://changeme" class="sidebar-catalog__link ">Для грузовых авто</a></li>
                                            <li class="sidebar-catalog__item"><a href="https://changeme" class="sidebar-catalog__link ">Технические жидкости</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="sidebar__cart sidebar-cart js-sidebar-cart">
                                    <div class="sidebar-cart__top">
                                        <div class="sidebar-cart__title">Корзина</div>
                                        <div class="sidebar-cart__count js-sidebar-cart__count">0</div>
                                    </div>
                                    <ul class="sidebar-cart__list js-sidebar-cart__list" >
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog__cards cards js-cards">
                                <div class="cards__row">
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-1'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card1.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 ESP 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-2'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card2.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil <span>1 x1</span> 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-3'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card3.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 FS 0W-40</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-4'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card1.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 ESP 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-5'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card2.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil <span>1 x1</span> 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-6'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card3.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 FS 0W-40</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-7'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card1.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 ESP 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-8'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card2.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil <span>1 x1</span> 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-9'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card3.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 FS 0W-40</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-10'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card1.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 ESP 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-11'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card2.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil <span>1 x1</span> 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-12'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card3.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 FS 0W-40</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-13'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card1.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 ESP 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-14'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card2.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil <span>1 x1</span> 5W-30</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cards__column">
                                        <div class="cards__item card" data-count='1' data-id='product-15'>
                                            <div class="card__content">
                                                <div class="card__image "><img src="../assets/img/cards/card3.png" alt="auto-oil"></div>
                                                <a class="card__link" href="https://changeme" >Масло моторное Mobil 1 FS 0W-40</a>
                                            </div>
                                            <div class="card__control">
                                                <button class="card__button" type='button'>В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="{{ mix('assets/js/main.js') }}"></script>
</body>
</html>
