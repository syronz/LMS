<?php

$words = array(
	/*'Diwan-Sulaymaniyah'=>'دیوان-گەنجینە',
	'Companies'=>'کۆمپانیاکان',
	'Stuffs'=>'پارچەکان',
	'Add Stuff'=>'پارچەی نوێ',
	'Gate'=>'گەنجینە',
	'Help'=>'فێرکاری',
	'Gate'=>'گەنجینە',
	'Add By Special Page'=>'پەیجی تایبەت بۆ زیاد کردنی پارچە',
	'Add By jTable'=>'زیاد کردنی ئاسایی پارچەی نوێ',
	'id'=>'ژمارە',
	'Company Name'=>'ناوی کۆمپانیا',
	//'Detail'=>'تێبینی',
	'Less Stuff'=>'کەم بونەوە',
	'Category Name'=>'جۆر',
	'Categories'=>'جۆرەکان',
	'less'=>'کەم بێتەوە',
	'not less'=>'کەم نەبێتەوە',
	'Models'=>'مۆدێلەکان',
	'date'=>'بەروار',
	'Model Name'=>'ناوی مۆدێل',
	'Category'=>'جۆر',
	'Company'=>'کۆمپانی',
	'Model'=>'مۆدێل',
	//'Name'=>'پارچە',
	'Sell Price'=>'نرخی فرۆش',
	''=>'',
	'You Havent Permission!!! to add user in this department or location'=>'تۆ بۆت نێە یوزەر ساز کەی!!! لەو فەرعە',
	'Each Installemnt Payment'=>'قیستی مانگانە',*/
	'Hawler-location'=>'لق - هەولێر',
	'Chilak-location'=>'لق - چیلەک',
	'Diwan Chilak-location'=>'لق - دیوان چیلەک',
	'diako amir-location'=>'لق - دیاکۆ ئەمیر',
	'Food-location'=>'لق - خواردمەنی',
	'Supplies liberalization-location'=>'لق - قرتاسیه',
	'Rent-location'=>'لق - کرێ',
	'Worker-location'=>'لق - حەمالی',
	'Electricity-location'=>'لق - کارەبا',
	'Internet-location'=>'لق - ئینتێرنێت',
	'Mobile Card-location'=>'لق - کارتی مۆبایل',
	'Advertising-location'=>'لق - رێکلام',
	'Taxi-location'=>'لق - تەکسی',
	'Transport Turkey-location'=>'لق - کرێ باری تورکیا',
	'Generator-location'=>'لق - مولیده',
	'Salary-location'=>'لق - موچە',
	'Food-department'=>'شار - خواردەمەنی',
	'Internet-department'=>'شار - ئینتێرنێت',
	'Advertising-all'=>'گشتی - رێکلام',
	'Advertising-department'=>'شار - رێکلام',
	'Transport Turkey-all'=>'گشتی - کرێ باری تورکیا',


	'Hawler'=>'هەولێر',
	'Chilak'=>'چیلەک',
	'Diwan Chilak'=>'دیوان چیلەک',
	'diako amir'=>'دیاکۆ ئەمیر',
	'Food'=>'خواردمەنی',
	'Supplies liberalization'=>'قرتاسیه',
	'Rent'=>'کرێ',
	'Worker'=>'حەمالی',
	'Electricity'=>'کارەبا',
	'Internet'=>'ئینتێرنێت',
	'Mobile Card'=>'کارتی مۆبایل',
	'Advertising'=>'رێکلام',
	'Taxi'=>'تەکسی',
	'Transport Turkey'=>'کرێ باری تورکیا',
	'Generator'=>'مولیده',
	'Salary'=>'موچە',
	'Food'=>'خواردەمەنی',
	'Internet'=>'ئینتێرنێت',
	'Advertising'=>'رێکلام',
	'Advertising'=>'رێکلام',
	'Transport Turkey'=>'کرێ باری تورکیا',
	'Attention Pre-Payment Not Equal To Facture!'=>'ئاگادار بە پارەی پێشەکی یەکسان نێت لەگەل فاتورە',
	'Attention Pre-Payment Less Than Facture'=>'ئاگادار بە پارەی پێشەکی کەمترە لەوەی کە لە فاتۆرە داخل کراوە!',
	'Can Add New Pre-Payment Here'=>'دەتوانی لە ژێرەوە پارەی پیشەکی نوێ داخل کەی',
	'Personal'=>'شخسی',
	'Equipment Building'=>'کەرەستەی بیناسازی',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>'',
	''=>''
	);

function dic_show($phrase,$check=null){
	global $words;
	if(@$words[$phrase] && !$check)
		echo $words[$phrase];
	else
		echo $phrase;
}

function dic_return($phrase,$check=null){
	global $words;
	if(@$words[$phrase] && !$check)
		return $words[$phrase];
	else
		return $phrase;
}


?>