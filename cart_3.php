<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Манчкин</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Зарубежные</h2>
        <p>Манчкин — это современная порода кошек. При средней длине тела их лапки короче, чем у обычных кошек в 2-3 раза. В отличие от обычных кошек, которые, чтобы осмотреться, встают на задние лапки, манчкин садится на седалище и крепко упирается хвостом. В таком положении кошки могут находиться в течение довольно продолжительного времени.
        </p> 
        <p>Мягкая на ощупь и напоминающая бархат волнистая короткая шерстка этих кошек так и
                манит снова и снова провести рукой по спинке мурчащей красавицы. В сочетании с
                пластикой движений, красивым стройным сложением, отменным здоровьем и
                необременительным уходом кошки породы уральский рекс постепенно набирают
                популярность. А ведь совсем недавно эта порода насчитывала всего лишь около ста
                представителей.
        </p>
        <div class = "kpn">
            <button class = "button" onclick="thri();">Купи Меня</button>
            </div>
            <div class = "knp">
            <button class = "buttonq" onclick="thrip();">+</button>
            <button class = "buttonq" onclick="thrikol();">Количество в заказе</button>
            <button class = "buttonq" onclick="thrim();">-</button>
            </div>
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/manchkin.jpg" style="height: 600px; width: 400px;"> 
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
            b[2]--;
        }
    }
    function thrikol() {
        alert(b[3]);
    }


        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
