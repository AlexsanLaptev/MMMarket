<?php require_once("header.php"); ?>
<main>
  <div class="container"> 
    <div class="row"> 
      <input type="button" onclick="cor();" style="height: 40px; width: 100px;" value="Назад"/>
      <div class="col-12"> <h1>Петерболд</h1> 
      </div> 
    </div> 
  </div> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <h2>Наша</h2>
        <p>Петерболд – бесшерстная порода грациозных и элегантных кошек родом из Санкт-Петербурга. Благодаря дружелюбному и покладистому характеру, петерболды завоевали всеобщую любовь и уважение.
        </p> 
        <p>Очень элегантная и утонченная голая кошка прошлась бесшумной походкой к окну и одним
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
      </div> 
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
        <img src="img/peterbold.jpg" style="height: 600px; width: 400px;"> 
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


        function cor(){
        localStorage.setItem('kot', JSON.stringify(a));
        localStorage.setItem('kol', JSON.stringify(b));
        history.back();
        }

        </script>
</main>
<?php require_once("footer.php"); ?>
