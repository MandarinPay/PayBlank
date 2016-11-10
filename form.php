<?php
require_once 'option.php' ;
spl_autoload_register(function ($class_name) {
    require_once 'Class/' . $class_name . '.php';
});

date_default_timezone_set('UTC');

$new_index = new IndexForm('my_database');
$array_form = $new_index->protect_site($_POST);
$option_select_num = $new_index->get_option($array_form);


$costumerinfo = new CustomerInfo($array_form['email'], $array_form['phone']);

$new_user = new NewPay($MerchantID,$SecretProject);
$orderid = rand();
// $CustomValue=array('extra_family'=>$array_form['Family'],'extra_name'=>$array_form['inputName'],'extra_patronim'=>$array_form['inputPatronim'],'extra_numberdogovor'=>$array_form['inputDogovor']);
$ExtraValue['inputfio'] = $array_form['inputfio'];
$price = $array_form['price'];


switch ($option_select_num) {
    case 0:
        $operation = $new_user->pay_interactive($orderid, $price, $costumerinfo, $ExtraValue);
        break;
}
$new_index->GoPuy($operation);



