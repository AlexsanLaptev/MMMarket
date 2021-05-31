<?php require_once("header.php"); ?>
<main>    

    <form  action="mail.php" method="POST" autocomplete="off">
        <div class="container radi">
            <h1 class="my-5 text-center">Оформление заказа</h1>
            <div class="col-md-5 mx-auto">
                <div class="input-group my-2">
                    <input type="text" class="form-control" placeholder="Имя" required name="name" />
                </div>
                <div class="input-group my-2">
                    <input type="text" class="form-control" placeholder="Фамилия" required name="lastname" />
                </div>
                <div class="input-group my-2">
                    <input type="email" class="form-control" placeholder="E-mail" required name="email" autocomplete="off"/>
                </div>
                <input type="submit" class="form-control btn btn-danger" value="Оформить" />
            </div>
        </div>
    </form>
    <script>
    let sum = 0;
        let fr = localStorage.getItem('sum');
        a = JSON.parse(fr);
        if (a != null){
            sum = a;
        } 
        
    </script>
</main>
<?php require_once("footer.php"); ?> 
