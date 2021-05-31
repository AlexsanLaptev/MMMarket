<?php require_once("header.php"); ?>
        <script>
            let products = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
            let kolichestvo = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
            let f = localStorage.getItem('kot');
            f = JSON.parse(f);
            let op = localStorage.getItem('kol');
            op = JSON.parse(op);
            if (f != null){
                products = f;
            }
                
            if (op != null){
                kolichestvo = op;
            }
            let summ = 0;
            let summel = 0;
            
            localStorage.setItem('products', JSON.stringify(products));
            let cart = JSON.parse(localStorage.getItem("products"));
 
            let kot = [];
            $.each(cart, function(i,e){
                if(e){
                    kot.push(i);  
                }
            })
   
            $(function () {
                $.ajax({
                    type: 'POST',
                    url: 'cart.php',
                    dataType: 'json',
                    data: {kot: kot},
                    success: function (json) {
                        let html = "";
                        
                        if(json['products']){
                            for(let i = 0;   i < json['products'].length; i++){
                                html += '<tr>';
                                html += '<td>' + json['products'][i]['product_name'] + '</td>';
                                html += '<td>' + kolichestvo[i+1] + '</td>';
                                html += '<td>' + (json['products'][i]['product_price']) * kolichestvo[i+1] + '</td>';
                                html += '</tr>';
                                summel = (json['products'][i]['product_price']) * kolichestvo[i+1];
                                summ = summ + summel;
                                
                                
                            }
                            document.getElementById('suma').value  = summ;
                            
                            
                        }else{
                            html += '<tr><td colspan="3">' + json['empty'] + '</td></tr>'
                        }
                        
                        $('#table-cart tbody').append(html);
                        localStorage.setItem('sum', JSON.stringify(summ));
                    }
                });
                
                
            })
            
        </script>
        
        <div class="conteiner tab">
            <main>
                <div>
                    <table id="table-cart" border="2">
                        <thead>
                            <tr>
                                <td class="trof">Коты</td>
                                <td class="trof">Количество</td>
                                <td class="trof">Цена</td>
                            </tr>
                        </thead>
                        <tbody>
 
                        </tbody>
                    </table>
                    
            </main>
        </div>
        <div class = "sum">
            Общая сумма : <input type="text" id="suma" value=""><br>
            <button class = "cal" onclick="window.location.href='ofor.php'">Оформить</button>
        </div>
        <?php require_once("footer.php"); ?> 
