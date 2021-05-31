<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Американский кёрл</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Зарубежные</h2>
        <p>Американский керл – порода ласковых кошек-компаньонов с завернутыми назад ушами, выведенная в США в 80-х годах прошлого века.
        </p> 
        <p>Изящная кошка с удивительными загнутыми назад кончиками ушей не может оставить
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/kjorl.jpg" style="height: 600px; width: 400px;"> 
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


        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }
        </script>
</main>
<?php require_once("footer.php"); ?>
