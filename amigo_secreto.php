<?php
	$participantes[] = array("nome" => 'Sarah', "email" => 'sarah@bibl.com');
	$participantes[] = array("nome" => 'Eder', "email" => 'eder@bibl.com');
	$participantes[] = array("nome" => 'Golias', "email" => 'golias@bibl.com');
	$participantes[] = array("nome" => 'Dalila', "email" => 'dalila@bibl.com');
	$participantes[] = array("nome" => 'Elias', "email" => 'elias@bibl.com');
	$participantes[] = array("nome" => 'Eva', "email" => 'eva@bibl.com');
	$participantes[] = array("nome" => 'Isabel', "email" => 'isabel@bibl.com');
	$participantes[] = array("nome" => 'Edna', "email" => 'edna@bibl.com');
	$participantes[] = array("nome" => 'Noemi', "email" => 'noemi@bibl.com');
	$participantes[] = array("nome" => 'Jonas', "email" => 'jonas@bibl.com');
	$participantes[] = array("nome" => 'Isaque', "email" => 'isaque@bibl.com');

	//embaralha os participantes
	shuffle($participantes);

	for($i = 0; $i < count($participantes); $i++){
		if(array_key_exists(($i+1), $participantes)){
			$participantes[$i]['amigo_secreto'] = $participantes[$i+1]['nome'];
		}else{
			$participantes[$i]['amigo_secreto'] = $participantes[0]['nome'];
		}
	}

	//echo '<pre>';
	//print_r($participantes);

	//envia e-mails
	foreach($participantes as $key => $value){
		echo 'Email: '.$value['email'].' - '.$value['nome'].', vc tirou '.$value['amigo_secreto'].' como amigo(a) secreto.<br>';
	}

