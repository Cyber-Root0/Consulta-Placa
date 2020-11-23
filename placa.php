<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cyber Root - Dados Da Placa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="util.css">
<link rel="stylesheet" type="text/css" href="main.css">
<style>
	
h4{
font-style:;
color: white;
}


</style>
</head>
<body>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/select2/select2.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/js/main.js"></script>


<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<h4 align="center">Dados Puxados Com Sucesso! </h4><br>
<div class="table100">
<table>
<thead>

<tr class="table100-head">
<th class="column1">Placa</th>
<th class="column1">Ano</th>
<th class="column1">Ano Modelo</th>
<th class="column1">Chassi</th>
<th class="column2">Cor</th>
<th class="column1">Data</th>
<th class="column1">Marca</th>
<th class="column6">Modelo</th>
<th class="column6">Municipio</th>
<th class="column6">UF</th>
</tr>
</thead>
<tbody>
	


<?php  

$placa=$_POST['placa'];
date_default_timezone_set('America/Sao_Paulo');
$data=date('d/m/Y \à\s H:i:s');


$stream_opts = [
    "ssl" => [
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ]
];  


if ($json = file_get_contents("https://apicarros.com/v1/consulta/".$placa."/json",false,stream_context_create($stream_opts))){



$json2 = json_decode($json);




$ano= $json2->ano; 
$anomodelo=$json2->anoModelo; 
$chassi= $json2->chassi; 
$cor= $json2->cor;
$chassi=$json2->chassi;
$data =$json2->data;
$marca=$json2->marca;
$modelo=$json2->modelo;
$municipio=$json2->municipio;
$uf=$json2->uf;


echo '<tr><td class="column1">'.$placa.'</td>';
echo '<td class="column1">'.$ano.'</td>';
echo '<td class="column1">'.$anomodelo.'</td>';
echo '<td class="column1">'.$chassi.'</td>';
echo '<td class="column1">'.$cor.'</td>';
echo '<td class="column1">'.$data.'</td>';
echo '<td class="column1">'.$marca.'</td>';
echo '<td class="column1">'.$modelo.'</td>';
echo '<td class="column1">'.$municipio.'</td>';
echo '<td class="column1">'.$uf.'</td></tr>';
echo "</tbody></table>";

}else{

header('Location: '."http://localhost/placa");


}
?>

</div>
</div>
</div>
<h5 align="center">@Cyber_Root - Todos os Direitos Reservados</h5>
</div>


<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/select2/select2.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/js/main.js"></script>


</body>
</html>