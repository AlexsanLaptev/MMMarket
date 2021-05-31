<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Уральский рекс</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Русская</h2>
        <p>Уральский рекс — русская аборигенная порода кудрявых кошек. Первые упоминания о кошках с курчавой шерстью, обитавших в уральских деревнях и городах, относились к довоенному и военному времени. После войны их количество сильно сократилось, и они долгое время считались исчезнувшими, хотя несколько обрывочных сведений дошло до нас из 1960-х годов. Основателем породы «уральский рекс» стал кудрявый кот по кличке Василий, родившийся в городе Заречный Свердловской области России в 1988 году. От его курчавых потомков и ведут свой род все ныне зарегистрированные уральские рексы из известных питомников. Кроме зареченской популяции, были также другие популяции кучерявых кошек, обнаруженных в Свердловской и некоторых других уральских областях.
        </p> 
        <p>Мягкая на ощупь и напоминающая бархат волнистая короткая шерстка этих кошек так и
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/reks.jpg" style="height: 400px; width: 300px;"> 
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


        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>  
