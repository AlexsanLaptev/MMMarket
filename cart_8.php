<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Гималайская кошка</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Зарубежные</h2>
        <p>Гималайская кошка – голубоглазое длинношерстное создание колор-пойнтового окраса, полученное путем вязки персов с представителями сиамской группы. Часть фелинологических систем регистрирует представителей этого семейства как независимую породу, другие – как разновидность персидских кошек.
        </p> 
        <p>Гималайская кошка поражает своей красотой. Длинная и очень густая, мягкая шерсть,
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/gimalajjskay.jpg" style="height: 600px; width: 400px;"> 
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

        function eght(){
        a[8] = 8;
        if (b[8] == 0) {
            b[8] ++;
        }
    }
    function eghtp() {
        b[8]++;
    }
    function eghtm() {
        if(b[8]>0) {
            b[8]--;
        }
    }
    function eghtkol() {
        alert(b[8]);
    }


        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
