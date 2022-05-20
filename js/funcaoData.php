<?php 
function dataUsaToBr($datasql) {
	$data_usa = explode('-',$datasql);
	$data_br = $data_usa[2].'/'.$data_usa[1].'/'.$data_usa[0];
	return $data_br;

}

?>