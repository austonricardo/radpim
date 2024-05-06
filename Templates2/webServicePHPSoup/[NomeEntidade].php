<?php
$server->wsdl->addComplexType(
    '[NomeEntidade]',
    'complexType',
    'struct',
    'all',
    '',
    array(
		[TipoColuna-FK]
		'[NomeAtributo]' => array('name'=>'[NomeAtributo]','type'=>'xsd:[TipoLG]'),
		[\TipoColuna-FK]		
		[TipoColuna-*]
		'[NomeAtributo]' => array('name'=>'[NomeAtributo]','type'=>'xsd:[TipoLG]'),
		[\TipoColuna-*]	
		[TipoColuna-PK]
		'[NomeAtributo]' => array('name'=>'[NomeAtributo]','type'=>'xsd:[TipoLG]')
		[\TipoColuna-PK]    )
);

$server->wsdl->addComplexType(
    '[NomeEntidade]Array',
    'complexType',
    'array',
    '',
    'SOAP-ENC:Array',
    array(),
    array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:[NomeEntidade][]')),
    'tns:[NomeEntidade]'
);

function process[NomeEntidade]($[NomeEntidade]s) {
	$userAuth = autentica();
	if ($userAuth=='') return new soap_fault('CLIENT', '', 'Invalid Login', '');
	
	// create the $db object 
	$db = new Database(DB_SERVER, DB_USER, DB_PASS, $userAuth); //DB_DATABASE

	// connect to the server 
	$db->connect(); 
	
	foreach($[NomeEntidade]s as $item)
	{
		[TipoColuna-PK]
		$sql = "select [NomeAtributo] from T[NomeEntidade] where [NomeAtributo]=".$item["[NomeAtributo]"];
		$rows = $db->query($sql);
		
		if($db->fetch_array($rows))
		{
			//Update
			$db->query_update("T[NomeEntidade]", $item, "[NomeAtributo]=".$item["[NomeAtributo]"]); 
		}else{
			//Insert
			$db->query_insert("T[NomeEntidade]", $item); 
		}
		[\TipoColuna-PK]		
	}
	$db->close();
	
	return '1';

}

function get[NomeEntidade]($date,$user) {
	if (!autentica()) return new soap_fault('CLIENT', '', 'Invalid Login', '');

	// create the $db object 
	$db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

	// connect to the server 
	$db->connect(); 

	$sql = "SELECT 
            [TipoColuna-*][NomeAtributo],[\TipoColuna-*]
            [TipoColuna-FK][NomeAtributo],[\TipoColuna-FK]
		    [TipoColuna-PK][NomeAtributo][\TipoColuna-PK]		
            FROM T[NomeEntidade]
   		    WHERE Atualizacao > '".$db->escape($date)."' and CD_VEN = ".$db->escape($user)."";

	$rows = $db->fetch_all_array($sql);

	// and when finished, remember to close connection 
	$db->close();
	return $rows;
}

$server->register(
    'process[NomeEntidade]',
    array('soapObjects'=>'tns:[NomeEntidade]Array'),
    array('return'=>'xsd:string'),
    $namespace,
    false,
    'rpc',
    false,
    'Processes an array of [NomeEntidade]s and returns one String:0 - Processamento com sucesso;');
	
$server->register(
    'get[NomeEntidade]',
    array('date'  => 'xsd:string','user'  => 'xsd:string'),	
    array('return'=>'tns:[NomeEntidade]Array'),
    $namespace,
    false,
    'rpc',
    false,
    'Return an array of [NomeEntidade]s');	
?>