<?php
include_once('conexao.php');

$sql = 'SELECT * FROM log WHERE verificado = 0';

$quer = $conn->query($sql);

$res = $quer->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($res); $i++){
	$dados[] = array(
		'idLog' =>$res[$i]['idLog'],
		'texto' => $res[$i]['texto'],
		'verificado' => $res[$i]['verificado'],
		'idDispositivo' => $res[$i]['idDispositivo']
	);

}

if(count($res) > 0){
	$result = json_encode(array('success'=>true, 'result'=>$dados));
}else{
	$result = json_encode(array('success'=>false, 'result'=>'0'));
}
echo $result;

?>