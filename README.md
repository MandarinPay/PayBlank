# PayBlank
Это модуль готовой страницы оплаты, всё что вам нужно:
1. Развернуть  данную репозиторий у себя на хостинге.
2. Открыть файл options и ввести следующие настройки:


### Общие настройки.
```
TableName - Имя   базы данных,  для модуля.
TableUser - Имя Пользователя Базы данных.
TablePassword - Пароль  Пользователя базы данных.
SecretProject - Секретный ключ  от вашего проекта.
MerchantID  - Ваш MerchantID.
UserMailToSendOperationReport - mail на который будут приходить уведомления.
SendOneTransactionMail - вписать 0  если  слать на mail отчет по каждой транзакции не требуется.
TypeFormat - вписать 0 если  требуется формат CSV  вписать 1  если требуется JSON.
host -  пропишите  параметр host если от отличается от locallhost.
Delimiter - разделитель для CSV файла.
ConvertToCp1251 -  введите 0 если требуется перекодировка в cp1251.
```

### Смена изображения.
Для смены изображения положите в папку img ваше  готовое изображение с именем background

### Добавление новых полей
Для добавления нового поля  на вашу страницу откройте файл  index.php найдите следующий код:
```
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
```
Добавьте своё поле  чтобы получилось   как в примере ниже :


```
<form action="/form.php" method="post" id="form">
                          <div class="block_input">
                                <input type="text" required class="press_input"  name="testvalue"  id="testvalue" placeholder="новое Добавленное Поле">
                           </div>
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
                                
```

Далее в файле form.php сфомируйте массив со своими полями  как пример :

```
$ExtraValue['inputfio'] = $array_form['inputfio'];
//добавим наше новое созданное поле в  $ExtraValue 
$ExtraValue['testvalue'] = $array_form['testvalue'];
// $ExtraValue['testvalue']  - testvalue это имя  которое запишется в базу данных. 
```
**ВАЖНО!** Полей не должно быть больше 10 штук!

### cron

Для включения отправки ежедневного реестра настройте свой cron на  файл cronscript.php

### droptable 

Для быстрой очистки ваших баз данных от данных модуля выполните скрипт droptable.php














