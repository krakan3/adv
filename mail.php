<?php 

$data=$_POST;

if (isset($_POST)){
	mail('pakinyuk@mail.ru','Заявка','Полльзователь'.$data['name'].'с почтой '.$data['email'].'оставил заявку.');
}