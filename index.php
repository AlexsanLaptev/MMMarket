<?php require_once("header.php"); ?>

<main>
    <input id="show-as-tiles" name="switcher-display" type="radio" class="switcher-display" checked="">
    <label for="show-as-tiles" class="switcher-display__tiles"></label>
    <input id="show-as-table" name="switcher-display" type="radio" class="switcher-display">
    <label for="show-as-table" class="switcher-display__table"></label>
    <section class="goods">
        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/bambino.jpg" width="350" height="500" alt="Фото кошки бамбино">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title">
                    <a href="http://a0528183.xsph.ru/cart_1.php" onclick="cor();">Кошка бамбино лысая</a>
                </h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> - Зарубежные - Бамбино
                </div>
                <div class="goods__item-rating">
                    <input id="five-1" name="cat-1" type="radio">
                    <label for="five-1" class="full-star"></label>
                    <input id="four-half-1" name="cat-1" type="radio">
                    <label for="four-half-1" class="half-star"></label>
                    <input id="four-1" name="cat-1" type="radio">
                    <label for="four-1" class="full-star"></label>
                    <input id="three-half-1" name="cat-1" type="radio">
                    <label for="three-half-1" class="half-star"></label>
                    <input id="three-1" name="cat-1" type="radio">
                    <label for="three-1" class="full-star"></label>
                    <input id="two-half-1" name="cat-1" type="radio">
                    <label for="two-half-1" class="half-star"></label>
                    <input id="two-1" name="cat-1" type="radio">
                    <label for="two-1" class="full-star"></label>
                    <input id="one-half-1" name="cat-1" type="radio">
                    <label for="one-half-1" class="half-star"></label>
                    <input id="one-1" name="cat-1" type="radio">
                    <label for="one-1" class="full-star"></label>
                    <input id="half-1" name="cat-1" type="radio">
                    <label for="half-1" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$600.00</span>
                    <span class="goods__item-price goods__item-price--old">$700.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Если решено остановить свой выбор именно на кошке породы бамбино, необходимо учесть
                что котёнок будет стоить не менее 800 долларов США. А если животное племенное, то в
                несколько раз дороже. Родиной породы является Америка. Именно здесь появилось
                большинство самых необычных пород кошек. Ранее выведенная коротколапая порода кошек
                манчкин послужила базой для создания ещё более удивительной породы бамбино. При
                вязках манчкинов с канадскими сфинксами были получены бесшерстные коротколапые кошки.
            </p>
            <div class = "kpn">
            <button class = "button" onclick="one();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="onep();">+</button>
            <button class = "buttonq" onclick="onekol();">Количество в заказе</button>
            <button class = "buttonq" onclick="onem();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/reks.jpg" width="350" height="500" alt="Фото уральского рекса">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title">
                    <a href="http://a0528183.xsph.ru/cart_2.php" onclick="cor();">Уральский рекс</a>
                </h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> -
                    Наши - Уральский рекс
                </div>
                <div class="goods__item-rating">
                    <input id="five-2" name="cat-2" type="radio">
                    <label for="five-2" class="full-star"></label>
                    <input id="four-half-2" name="cat-2" type="radio">
                    <label for="four-half-2" class="half-star"></label>
                    <input id="four-2" name="cat-2" type="radio">
                    <label for="four-2" class="full-star"></label>
                    <input id="three-half-2" name="cat-2" type="radio">
                    <label for="three-half-2" class="half-star"></label>
                    <input id="three-2" name="cat-2" type="radio">
                    <label for="three-2" class="full-star"></label>
                    <input id="two-half-2" name="cat-2" type="radio">
                    <label for="two-half-2" class="half-star"></label>
                    <input id="two-2" name="cat-2" type="radio">
                    <label for="two-2" class="full-star"></label>
                    <input id="one-half-2" name="cat-2" type="radio">
                    <label for="one-half-2" class="half-star"></label>
                    <input id="one-2" name="cat-2" type="radio">
                    <label for="one-2" class="full-star"></label>
                    <input id="half-2" name="cat-2" type="radio">
                    <label for="half-2" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">21 000 р.</span>
                    <span class="goods__item-price goods__item-price--old">26 000 р.</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Мягкая на ощупь и напоминающая бархат волнистая короткая шерстка этих кошек так и
                манит снова и снова провести рукой по спинке мурчащей красавицы. В сочетании с
                пластикой движений, красивым стройным сложением, отменным здоровьем и
                необременительным уходом кошки породы уральский рекс постепенно набирают
                популярность. А ведь совсем недавно эта порода насчитывала всего лишь около ста
                представителей.
            </p>
            <div class = "kpn">
            <button class = "button" onclick="two();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="twop();">+</button>
            <button class = "buttonq" onclick="twokol();">Количество в заказе</button>
            <button class = "buttonq" onclick="twom();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/manchkin.jpg" width="400" height="500" alt="Фото манчкина">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title"><a href="http://a0528183.xsph.ru/cart_3.php" onclick="cor();">Манчкин</a></h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> -
                    Зарубежные - Манчкин
                </div>
                <div class="goods__item-rating">
                    <input id="five-3" name="cat-3" type="radio">
                    <label for="five-3" class="full-star"></label>
                    <input id="four-half-3" name="cat-3" type="radio">
                    <label for="four-half-3" class="half-star"></label>
                    <input id="four-3" name="cat-3" type="radio">
                    <label for="four-3" class="full-star"></label>
                    <input id="three-half-3" name="cat-3" type="radio">
                    <label for="three-half-3" class="half-star"></label>
                    <input id="three-3" name="cat-3" type="radio">
                    <label for="three-3" class="full-star"></label>
                    <input id="two-half-3" name="cat-3" type="radio">
                    <label for="two-half-3" class="half-star"></label>
                    <input id="two-3" name="cat-3" type="radio">
                    <label for="two-3" class="full-star"></label>
                    <input id="one-half-3" name="cat-3" type="radio">
                    <label for="one-half-3" class="half-star"></label>
                    <input id="one-3" name="cat-3" type="radio">
                    <label for="one-3" class="full-star"></label>
                    <input id="half-3" name="cat-3" type="radio">
                    <label for="half-3" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$450.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Эти удивительные коротконогие кошки по стилю бега издали могут быть ошибочно приняты
                за хорька. А смешная манера всматриваться вдаль, садясь на задние лапки, прижимая
                передние к груди, делает манчкинов похожими на сурикатов. Благодаря низкорослости за
                счёт коротких лап манчкины создают впечатление маленьких кошек. Но на самом деле их
                тело достигает таких же размеров, как и у кошек с нормальной длиной конечностей.
                Среди манчкинов встречаются как довольно миниатюрные представители породы, вес
                которых достигает в среднем 2 – 3 кг, так и «полновесные», масса тела которых может
                варьировать от 3,5 до 6 кг.
            </p>
                <div class = "kpn">
                <button class = "button" onclick="thri();">Купи Меня</button>
                </div>
                <div class = "knp">
                <button class = "buttonq" onclick="thrip();">+</button>
                <button class = "buttonq" onclick="thrikol();">Количество в заказе</button>
                <button class = "buttonq" onclick="thrim();">-</button>
                </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/skottish-fold.jpg" width="333" height="500" alt="Фото Скоттиш-фолда">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title"><a href="http://a0528183.xsph.ru/cart_4.php" onclick="cor();">Скоттиш-фолд</a></h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> - Зарубежные - Скоттиш-фолд
                </div>
                <div class="goods__item-rating">
                    <input id="five-4" name="cat-4" type="radio">
                    <label for="five-4" class="full-star"></label>
                    <input id="four-half-4" name="cat-4" type="radio">
                    <label for="four-half-4" class="half-star"></label>
                    <input id="four-4" name="cat-4" type="radio">
                    <label for="four-4" class="full-star"></label>
                    <input id="three-half-4" name="cat-4" type="radio">
                    <label for="three-half-4" class="half-star"></label>
                    <input id="three-4" name="cat-4" type="radio">
                    <label for="three-4" class="full-star"></label>
                    <input id="two-half-4" name="cat-4" type="radio">
                    <label for="two-half-4" class="half-star"></label>
                    <input id="two-4" name="cat-4" type="radio">
                    <label for="two-4" class="full-star"></label>
                    <input id="one-half-4" name="cat-4" type="radio">
                    <label for="one-half-4" class="half-star"></label>
                    <input id="one-4" name="cat-4" type="radio">
                    <label for="one-4" class="full-star"></label>
                    <input id="half-4" name="cat-4" type="radio">
                    <label for="half-4" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$250.00</span>
                    <span class="goods__item-price goods__item-price--old">$400.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Пожалуй, какие только эмоции не вызывает эта порода как у детей, так и у взрослых!
                Кто-то находит в ней схожесть с совёнком, для кого-то эта круглая мордашка напоминает
                Вини-Пуха, а некоторые видят в ней милого «зайчика». Наверное, ни одна другая порода
                кошек не проходила столь тернистый путь становления, от внезапной популярности, до
                полного краха и нового признания. Речь идёт о скоттиш-фолдах, шотландской вислоухой
                кошке.
            </p>
            <div class = "kpn">
            <button class = "button" onclick="four();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="fourp();">+</button>
            <button class = "buttonq" onclick="fourkol();">Количество в заказе</button>
            <button class = "buttonq" onclick="fourm();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/elf.jpg" width="333" height="500" alt="Фото Кошки Эльф">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title">
                    <a href="http://a0528183.xsph.ru/cart_5.php" onclick="cor();">Кошка Эльф</a>
                </h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> -Зарубежные - Кошка Эльф
                </div>
                <div class="goods__item-rating">
                    <input id="five-5" name="cat-5" type="radio">
                    <label for="five-5" class="full-star"></label>
                    <input id="four-half-5" name="cat-5" type="radio">
                    <label for="four-half-5" class="half-star"></label>
                    <input id="four-5" name="cat-5" type="radio">
                    <label for="four-5" class="full-star"></label>
                    <input id="three-half-5" name="cat-5" type="radio">
                    <label for="three-half-5" class="half-star"></label>
                    <input id="three-5" name="cat-5" type="radio">
                    <label for="three-5" class="full-star"></label>
                    <input id="two-half-5" name="cat-5" type="radio">
                    <label for="two-half-5" class="half-star"></label>
                    <input id="two-5" name="cat-5" type="radio">
                    <label for="two-5" class="full-star"></label>
                    <input id="one-half-5" name="cat-5" type="radio">
                    <label for="one-half-5" class="half-star"></label>
                    <input id="one-5" name="cat-5" type="radio">
                    <label for="one-5" class="full-star"></label>
                    <input id="half-5" name="cat-5" type="radio">
                    <label for="half-5" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$630.00</span>
                    <span class="goods__item-price goods__item-price--old">$999.99</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Казалось бы, каких только пород кошек не вывели селекционеры. И бесхвостых, и
                коротконогих, карликовых и огромных. Но всегда найдётся какой – нибудь мечтатель,
                который решится заняться выведением ещё более неповторимой породы «мурок». Именно
                благодаря полёту фантазии селекционеров и появились сказочные создания – кошки
                породы эльф.
            </p>
            <div class = "kpn">
            <button class = "button" onclick="five();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="fivep();">+</button>
            <button class = "buttonq" onclick="fivekol();">Количество в заказе</button>
            <button class = "buttonq" onclick="fivem();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/kjorl.jpg" width="333" height="500" alt="Фото Американский кёрл">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title"><a href="http://a0528183.xsph.ru/cart_6.php" onclick="cor();">Американский кёрл</a></h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> - Зарубежные - Американский кёрл
                </div>
                <div class="goods__item-rating">
                    <input id="five-6" name="cat-6" type="radio">
                    <label for="five-6" class="full-star"></label>
                    <input id="four-half-6" name="cat-6" type="radio">
                    <label for="four-half-6" class="half-star"></label>
                    <input id="four-6" name="cat-6" type="radio">
                    <label for="four-6" class="full-star"></label>
                    <input id="three-half-6" name="cat-6" type="radio">
                    <label for="three-half-6" class="half-star"></label>
                    <input id="three-6" name="cat-6" type="radio">
                    <label for="three-6" class="full-star"></label>
                    <input id="two-half-6" name="cat-6" type="radio">
                    <label for="two-half-6" class="half-star"></label>
                    <input id="two-6" name="cat-6" type="radio">
                    <label for="two-6" class="full-star"></label>
                    <input id="one-half-6" name="cat-6" type="radio">
                    <label for="one-half-6" class="half-star"></label>
                    <input id="one-6" name="cat-6" type="radio">
                    <label for="one-6" class="full-star"></label>
                    <input id="half-6" name="cat-6" type="radio">
                    <label for="half-6" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$1200.00</span>
                    <span class="goods__item-price goods__item-price--old">$1500.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Изящная кошка с удивительными загнутыми назад кончиками ушей не может оставить
                равнодушным ни одного любителя кошек. Интересные ушки полностью меняют выражение
                кошачьей мордочки и общий вид животного в целом. Сразу возникает ассоциация, что у
                кошки на голове корона либо рожки. В зависимости от воспитания из керла действительно
                может получиться либо утончённая «принцесса» с хорошими манерами, либо забалованный
                «чертенок».
            </p>
            <div class = "kpn">
            <button class = "button" onclick="six();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="sixp();">+</button>
            <button class = "buttonq" onclick="sixkol();">Количество в заказе</button>
            <button class = "buttonq" onclick="sixm();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/savanna.jpg" width="300" height="500" alt="Фото Саванна">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title"><a href="http://a0528183.xsph.ru/cart_7.php" onclick="cor();">Саванна</a></h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> - Зарубежные - Саванна
                </div>
                <div class="goods__item-rating">
                    <input id="five-7" name="cat-7" type="radio">
                    <label for="five-7" class="full-star"></label>
                    <input id="four-half-7" name="cat-7" type="radio">
                    <label for="four-half-7" class="half-star"></label>
                    <input id="four-7" name="cat-7" type="radio">
                    <label for="four-7" class="full-star"></label>
                    <input id="three-half-7" name="cat-7" type="radio">
                    <label for="three-half-7" class="half-star"></label>
                    <input id="three-7" name="cat-7" type="radio">
                    <label for="three-7" class="full-star"></label>
                    <input id="two-half-7" name="cat-7" type="radio">
                    <label for="two-half-7" class="half-star"></label>
                    <input id="two-7" name="cat-7" type="radio">
                    <label for="two-7" class="full-star"></label>
                    <input id="one-half-7" name="cat-7" type="radio">
                    <label for="one-half-7" class="half-star"></label>
                    <input id="one-7" name="cat-7" type="radio">
                    <label for="one-7" class="full-star"></label>
                    <input id="half-7" name="cat-7" type="radio">
                    <label for="half-7" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$2250.00</span>
                    <span class="goods__item-price goods__item-price--old">$3000.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Кошки и коты, такой породы, как Саванна (Savannah) – это замечательные и
                очаровательные создания на планете, которые своей внешностью напоминают своего же
                предка, Африканского дикого сервала, только в отличие от него, Саванна немного
                меньше в размере.
            </p>
            <div class = "kpn">
            <button class = "button" onclick="seven();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="sevenp();">+</button>
            <button class = "buttonq" onclick="sevenkol();">Количество в заказе</button>
            <button class = "buttonq" onclick="sevenm();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/gimalajjskay.jpg" width="300" height="500" alt="Фото Гималайская кошка">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title"><a href="http://a0528183.xsph.ru/cart_8.php" onclick="cor();">Гималайская кошка</a></h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> - Зарубежные - Гималайская кошка
                </div>
                <div class="goods__item-rating">
                    <input id="five-8" name="cat-8" type="radio">
                    <label for="five-8" class="full-star"></label>
                    <input id="four-half-8" name="cat-8" type="radio">
                    <label for="four-half-8" class="half-star"></label>
                    <input id="four-8" name="cat-8" type="radio">
                    <label for="four-8" class="full-star"></label>
                    <input id="three-half-8" name="cat-8" type="radio">
                    <label for="three-half-8" class="half-star"></label>
                    <input id="three-8" name="cat-8" type="radio">
                    <label for="three-8" class="full-star"></label>
                    <input id="two-half-8" name="cat-8" type="radio">
                    <label for="two-half-8" class="half-star"></label>
                    <input id="two-8" name="cat-8" type="radio">
                    <label for="two-8" class="full-star"></label>
                    <input id="one-half-8" name="cat-8" type="radio">
                    <label for="one-half-8" class="half-star"></label>
                    <input id="one-8" name="cat-8" type="radio">
                    <label for="one-8" class="full-star"></label>
                    <input id="half-8" name="cat-8" type="radio">
                    <label for="half-8" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$500.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Гималайская кошка поражает своей красотой. Длинная и очень густая, мягкая шерсть,
                вырастающая до 12 см. Поистине бездонные ярко-голубые глаза. Окрас как у сиамской
                кошки, но при этом анатомическое сходство с персидскими кошками. Откуда взялось
                это «чудо»?
            </p>
            <div class = "kpn">
            <button class = "button" onclick="eght();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="eghtp();">+</button>
            <button class = "buttonq" onclick="eghtkol();">Количество в заказе</button>
            <button class = "buttonq" onclick="eghtm();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/peterbold.jpg" width="300" height="500" alt="Фото кошки Петерболд">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title">
                    <a href="http://a0528183.xsph.ru/cart_9.php" onclick="cor();">Петерболд</a>
                </h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> - Зарубежные - Петерболд
                </div>
                <div class="goods__item-rating">
                    <input id="five-9" name="cat-9" type="radio">
                    <label for="five-9" class="full-star"></label>
                    <input id="four-half-9" name="cat-9" type="radio">
                    <label for="four-half-9" class="half-star"></label>
                    <input id="four-9" name="cat-9" type="radio">
                    <label for="four-9" class="full-star"></label>
                    <input id="three-half-9" name="cat-9" type="radio">
                    <label for="three-half-9" class="half-star"></label>
                    <input id="three-9" name="cat-9" type="radio">
                    <label for="three-9" class="full-star"></label>
                    <input id="two-half-9" name="cat-9" type="radio">
                    <label for="two-half-9" class="half-star"></label>
                    <input id="two-9" name="cat-9" type="radio">
                    <label for="two-9" class="full-star"></label>
                    <input id="one-half-9" name="cat-9" type="radio">
                    <label for="one-half-9" class="half-star"></label>
                    <input id="one-9" name="cat-9" type="radio">
                    <label for="one-9" class="full-star"></label>
                    <input id="half-9" name="cat-9" type="radio">
                    <label for="half-9" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$700.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                Очень элегантная и утонченная голая кошка прошлась бесшумной походкой к окну и одним
                легким прыжком взлетела на подоконник. Ну, просто балерина! Застыв в изящной позе и
                подставляя кожу под лучи солнца, кошка стала похожа на произведение искусства. Чем не
                египетская статуэтка?! Что же это за «утонченная кошачья натура»?
            </p>
            <div class = "kpn">
            <button class = "button" onclick="nine();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="ninep();">+</button>
            <button class = "buttonq" onclick="ninekol();">Количество в заказе</button>
            <button class = "buttonq" onclick="ninem();">-</button>
            </div>
        </article>

        <article class="goods__item">
            <div class="goods__item-img">
                <img src="img/norvezhskaya.jpg" width="333" height="500" alt="Фото Норвежская лесная кошка">
            </div>
            <div class="goods__item-info">
                <h3 class="goods__item-title"><a href="http://a0528183.xsph.ru/cart_10.php" onclick="cor();">Норвежская лесная кошка</a></h3>
                <div class="goods__item-breadcrumbs">
                    <a href="http://a0528183.xsph.ru/index.php#">Мяндекс.Муррркет</a> - Зарубежные - Норвежская лесная кошка
                </div>
                <div class="goods__item-rating">
                    <input id="five-10" name="cat-10" type="radio">
                    <label for="five-10" class="full-star"></label>
                    <input id="four-half-10" name="cat-10" type="radio">
                    <label for="four-half-10" class="half-star"></label>
                    <input id="four-10" name="cat-10" type="radio">
                    <label for="four-10" class="full-star"></label>
                    <input id="three-half-10" name="cat-10" type="radio">
                    <label for="three-half-10" class="half-star"></label>
                    <input id="three-10" name="cat-10" type="radio">
                    <label for="three-10" class="full-star"></label>
                    <input id="two-half-10" name="cat-10" type="radio">
                    <label for="two-half-10" class="half-star"></label>
                    <input id="two-10" name="cat-10" type="radio">
                    <label for="two-10" class="full-star"></label>
                    <input id="one-half-10" name="cat-10" type="radio">
                    <label for="one-half-10" class="half-star"></label>
                    <input id="one-10" name="cat-10" type="radio">
                    <label for="one-10" class="full-star"></label>
                    <input id="half-10" name="cat-10" type="radio">
                    <label for="half-10" class="half-star"></label>
                </div>
                <div class="goods__item-prices">
                    <span class="goods__item-price goods__item-price--new">$500.00</span>
                    <span class="goods__item-price goods__item-price--old">$700.00</span>
                </div>
            </div>
            <p class="goods__item-descr">
                <span class="goods__item-descr-title">Информация о кошке:</span><br>
                    Норвежская лесная кошка – полу длинношерстная кошка, очень  известна в Северной
                    Европе. В Ногрвегии лесная кошка или как её называют Cкоггкэт,  воплощает в себе
                    суровую и прекрасную природы страны. Она является официальной кошкой в стране. Предки
                    кошек Cкоггкэт росли в суровом климате, поэтому шерсть кошки имеет водонепроницаемые
                    и водоотталкивающие свойства. У кошки длинная двойная  шерсть, большие уши и
                    вертлявый хвост. Окрасы у норвежских кошек разные, тем не менее,  шоколадный,
                    циннамон  и другие оттенки этих цветов не признаются. Средний вес кошки не больше
                    8 килограмм. Норвежская лесная кошка большая, изящная, очень игрива,  энергичная
                    и любознательная.  Кошка очень общительна, любит ласку и внимание.  Норвежские коты
                    намного  больше кошек. В среднем взрослый кот имеет вес около девяти килограмм, кошка
                    значительно меньше. У них сильные лапы и крепкие когти, это позволяет им
                    беспрепятственно лазить по деревьям.
            </p>
            <div class = "kpn">
            <button class = "button" onclick="ten();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="tenp();">+</button>
            <button class = "buttonq" onclick="tenkol();">Количество в заказе</button>
            <button class = "buttonq" onclick="tenm();">-</button>
            </div>
            </article>
        </section>
   
    </div>
    <script type="text/javascript">
        let a = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        let b = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        let f = localStorage.getItem('kot');
        f = JSON.parse(f);
        let op = localStorage.getItem('kol');
        op = JSON.parse(op);
        if (f != null){
            a = f;
        }
            
        if (op != null){
            b = op;
        }
   
    function one(){
        a[1] = 1;
        if (b[1] == 0) {
            b[1] ++;
        }
    }
    function onep() {
        b[1]++;
    }
    function onem() {
        if(b[1]>0) {
            b[1]--;
        }
    }
    function onekol() {
        alert(b[1]);
    }
    function two(){
        a[2] = 2;
        if (b[2] == 0) {
            b[2] ++;
        }
    }
    function twop() {
        b[2]++;
    }
    function twom() {
        if(b[2]>0) {
            b[2]--;
        }
    }
    function twokol() {
        alert(b[2]);
    }
    function thri(){
        a[3] = 3;
        if (b[3] == 0) {
            b[3] ++;
        }
    }
    function thrip() {
        b[3]++;
    }
    function thrim() {
        if(b[3]>0) {
            b[3]--;
        }
    }
    function thrikol() {
        alert(b[3]);
    }
    function four(){
        a[4] = 4;
        if (b[4] == 0) {
            b[4] ++;
        }
    }
    function fourp() {
        b[4]++;
    }
    function fourm() {
        if(b[4]>0) {
            b[4]--;
        }
    }
    function fourkol() {
        alert(b[4]);
    }
    function five(){
        a[5] = 5;
        if (b[5] == 0) {
            b[5] ++;
        }
    }
    function fivep() {
        b[5]++;
    }
    function fivem() {
        if(b[5]>0) {
            b[5]--;
        }
    }
    function fivekol() {
        alert(b[5]);
    }
    function six(){
        a[6] = 6;
        if (b[6] == 0) {
            b[6] ++;
        }
    }function sixp() {
        b[6]++;
    }
    function sixm() {
        if(b[6]>0) {
            b[6]--;
        }
    }
    function sixkol() {
        alert(b[6]);
    }
    function seven(){
        a[7] = 7;
        if (b[7] == 0) {
            b[7] ++;
        }
    }function sevenp() {
        b[7]++;
    }
    function sevenm() {
        if(b[7]>0) {
            b[7]--;
        }
    }
    function sevenkol() {
        alert(b[7]);
    }
    function eght(){
        a[8] = 8;
        if (b[8] == 0) {
            b[8] ++;
        }
    }
    function eghtp() {
        b[7]++;
    }
    function eghtm() {
        if(b[8]>0) {
            b[8]--;
        }
    }
    function eghtkol() {
        alert(b[8]);
    }
    function nine(){
        a[9] = 9;
        if (b[9] == 0) {
            b[9] ++;
        }
    }
    function ninep() {
        b[9]++;
    }
    function ninem() {
        if(b[9]>0) {
            b[9]--;
        }
    }
    function ninekol() {
        alert(b[9]);
    }
    function ten(){
        a[10] = 10;
        if (b[9] == 0) {
            b[9] ++;
        }
    }
    function tenp() {
        b[10]++;
    }
    function tenm() {
        if(b[10]>0) {
            b[10]--;
        }
    }
    function tenkol() {
        alert(b[10]);
    }
    function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
    }
  </script>
</main>
<?php require_once("footer.php"); ?>
