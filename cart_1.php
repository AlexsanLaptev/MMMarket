<?php require_once("header.php"); ?>
<main>
    <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
  <div class="container"> 
    <div class="row"> 
      <div class="col-12"> <h1>Бамбино</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        
        <h2>Зарубежная</h2>
        <p>Бамбино (Bambino) — экспериментальная (или так называемая дизайнерская) порода кошек, результат скрещивания сфинкса и манчкина. Порода получила название из итальянского языка, где слово «бамбино» означает ребёнок. Сюжет о бамбино вошёл в серию телепередач «Энциклопедия кошек» (Cats 101) телеканала Animal Planet. Первый котенок бамбино был рожден в 2005 году.
        </p> 
        <p>Если решено остановить свой выбор именно на кошке породы бамбино, необходимо учесть
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/bambino.jpg" style="height: 600px; width: 400px;"> 
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


        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
  
