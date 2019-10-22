<?php 
	function nama($word, $color="red"){
		pnj_word= string($word);
		$harga = 0;
		
		if ($pnj_word>0 && $pnjword<=10){
			$harga = 300 * $pnj_word;

		}elseif ($pnj_word>10 && $pnjword<=20){
			$harga = 500 * $pnj_word;

		}else{ 
			$harga = 700 * $pnj_word;
}	

echo '<font color="'.$color.'">'.$word.'</font> <br>';
echo '<font color="'.$color.'">'.$harga.'</font> <br><br>';

$word = &_GET['nama'];
$warna = &_GET['warna'];

if($_GET['nama'] == ""){
	nama($word);
}else{
	nama($word, $warna);
}
?>
