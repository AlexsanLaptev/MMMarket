<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Кошка Эльф</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Зарубежные</h2>
        <p>Эльф (англ. Elf cat) — порода кошек, выведенная в 2006 году. Гибрид американского керла и канадского сфинкса. Кошка эльф является американкой по своему происхождению.
        </p> 
        <p>Казалось бы, каких только пород кошек не вывели селекционеры. И бесхвостых, и
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/elf.jpg" style="height: 600px; width: 400px;"> 
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



       function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
