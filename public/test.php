<?php
$phone="001122334";

if (preg_match ( "/^[0-9]{10}$/" , $phone ) == 0 )
{
	
	echo 'Numéros de téléphone invalide';
}else{
	echo 'YES!';
}