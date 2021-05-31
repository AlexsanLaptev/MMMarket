<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Скоттиш-фолд</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Зарубежные</h2>
        <p>Шотландская вислоухая кошка – одна из самых молодых пород. Ее отличают неповторимый внешний вид, грациозность и очень высокий уровень интеллекта.
        </p> 
        <p>Пожалуй, какие только эмоции не вызывает эта порода как у детей, так и у взрослых!
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/skottish-fold.jpg" style="height: 600px; width: 400px;"> 
      </div> 
    </div> 
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



        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
