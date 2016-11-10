<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница оплаты</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/my.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
</head>
<body>
<div class="body_frame">
<div class="body_black_frame"></div>
<div class="form_containter">
<div class="containter_form_zise">
<div class="containet_middle_size">
<div class="form_header">Введите данные для оплаты</div>
                    <form action="/form.php" method="post" id="form">
                           <div class="block_input">
                                <input type="text" required class="press_input"  name="inputfio"  id="inputfio" placeholder="Фамилия Имя Отчество">
                            </div>
                            <div class="block_input">
                                <input type="email" name="email" required  class="press_input" id="inputEmail3" placeholder="Электронная почта">
                            </div>
                            <div class="block_input">
                                <input type="tel" required  name="phone" class="press_input" id="inputphone" placeholder="Номер телефона в формате +7">
                            </div>
                               <div class="block_input">
                                <input type="text" required  name="price" class="press_input" id="price" placeholder="Сумма">
                            </div>
                                        <input type="hidden" name="gridRadios" id="gridRadios0" value="option0" checked>
                                <button type="submit" class="send_button">Оплатить</button>
                        
                    </form>
                    </div>
</div>
                    </div>
                    </div>
                    
               
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/additional-methods.min.js"></script>
    <script type="text/javascript">
     $(function(){
    $('#form').validate({
        rules: {
         phone: {
              required: true,
               minlength: 10,
               maxlength: 12,
              pattern: '[+]+[0-9]+$'
          },
          inputfio: {
            required:true,
            minlength: 6,
          },
          price:{
            required:true,
            minlength: 2,
          }
        },

        messages: {
            phone: {
required: 'Введите номер в заданом формате',
minlength: 'Слишком короткий телефон',
maxlength: 'Слишком длинный телефон',
pattern:  'Введите телефон в правильном формате +70000000000'
},
inputfio:{
    required: 'Поле ФИО обязательно к заполнению',
    minlength: 'Слишком короткте данные'
},
email:{
    required: 'Поле Email обязательно к заполнению',
    email:  'Введите Email в правильном формате exemple@mail.ru'

},
price:{
    required: 'Сумма обязательна к заполнению',
    minlength: 'Сумма должна быть больще 9 рублей'
}

        }
    });
}); 
    </script>
</html>
