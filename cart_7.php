<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Саванна</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Зарубежные</h2>
        <p>Сава́нны — пространства в субэкваториальном поясе, покрытые травяной растительностью с редко разбросанными деревьями и кустарниками. Типичны для субэкваториального климата с резким разделением года на сухой и дождливый сезоны.
        </p> 
        <p>Кошки и коты, такой породы, как Саванна (Savannah) – это замечательные и
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/savanna.jpg" style="height: 600px; width: 400px;"> 
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


        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
