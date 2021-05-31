<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="corhistory.back();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Норвежская лесная кошка</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Зарубежная</h2>
        <p>Норвежская лесная кошка – полу длинношерстная кошка, очень  известна в Северной
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/norvezhskaya.jpg" style="height: 600px; width: 400px;"> 
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

        function ten(){
        a[10] = 10;
        if (b[10] == 0) {
            b[10] ++;
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
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
