<?php
	function hitungLuasSetengahLingkaran($diameter,$phi){
		$r = $diameter/2;
		$luas = ($phi * $r * $r)/2;
		return $luas;
	}
		echo "Luas setengah lingkaran yang berdiameter 10 cm adalah ".hitungLuasSetengahLingkaran(10,3.14);
?>