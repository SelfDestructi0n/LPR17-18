<?php
if ( file_exists( "Text.txt") ){
	$fp = fopen( "Text.txt","r+" );
	if ( $fp ){
	while ( !feof($fp) ){
	$mytext = fgets ( $fp, 999);
	echo $mytext."<br>";}
	}
else{ echo " Помилка при відкритті файлу! ";
	}
	fclose($fp);

	$fp = fopen( "Text.txt", "a" );
	$mytext = " Спроба записати програму ";
	$test = fwrite( $fp, $mytext);

if ( $test){
	echo " Дані записано у файл ","<br>"
}else{
	echo " Помилка запису в файл ";
}
	fclose( $fp );
	$dov = filesize( "Text.txt " );
if ( $dov ){
	echo " Довжина файлу $dov ","<br>";
}else{}
	echo date( " Дата змін у файлі "."j F Y, g:i a ", fileattime( " Text.txt " ))."<br>";
	echo date( " Дата створення файлу "."j F Y, g:i a ", filecttime( " Text.txt " ))."<br>";
}else{
	echo " Файл не найдено ";
}
	
