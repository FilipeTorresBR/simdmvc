<?php
require ("../login/conexao.php");
session_start();
  if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])) {
    header ("Location: ../login/login.php?erro-insira-seu-login");
  }
  if($_SESSION['tipo'] == "Comum"){
    header("Location: ../comum/");
  }

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Belem');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="../img/img2.png" type="image/x-icon" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/but.css">
    <title>Estagio Probatório</title>
</head>
<body>
<?php
$id = $_GET['siape'];
$ini = $_GET['ini'];
$fim = $_GET['fim'];
$hoje = date('Y-m-d');
if ($result = $con->query("select s.nome as Servidor, p.$ini, p.$fim, l.nome as Lotacao, c.nome as Cargo, s.siape as SIAPE, s.data_posse, s.data_exercicio 
    FROM servidor as s
    JOIN cargo AS c ON c.id=s.id_cargo
    JOIN probatorio as p on s.siape = p.siape
    JOIN lotacao AS l ON l.id=s.id_lotacao WHERE s.siape = '$id'")); {

while ($row = $result->fetch_object()){
    if (strtotime($hoje) < strtotime($row->$fim)){
        die('<script>alert("Fase de Avaliação ainda não disponível")</script>');
    }

    $servidor = $row->Servidor;
    $siape = $row->SIAPE;
    $cargo = $row->Cargo;
    $data_admissao = strftime('%d de %B de %Y', strtotime($row->data_posse));
    $data_formalizacao = strftime('%d de %B de %Y', strtotime($row->data_exercicio));
    $lotacao = $row->Lotacao;
    $data1 = strftime('%d de %B de %Y', strtotime($row->$ini));
    $ano = strftime('%Y', strtotime($row->$fim));
    $data2 = strftime('%d de %B de %Y', strtotime($row->$fim));
}
}
include_once ("cabecalho.php");
?>
<style type="text/css">

@page {
    max-width:180mm;         
    max-height: 280mm;
    size: auto;  
    margin: 0mm;  
} 
@media print {
    #noprint {display:none;}
}
#total {
    max-width:180mm; 
    text-align: center;
    border-style:solid;
    border-width:1px;
    border-collapse: collapse;
    border-color: black;
    align-content: center;
    margin:auto;
}
td{
    border-style: solid;
    border-color: black;
    border-width: 1px;
    border-collapse: collapse;
    word-wrap: normal;
}
#text{
    align-content: center;
  	text-align: center;
    font-size: 12px;
    font-weight: bold;
    font-stretch;
}
  </style>
<div id="container">
    <div id="text" style="text-decoration: underline; font-size: 12px;">Avaliação de Desempenho de Servidores em Estágio. Período Probatório - Lei no 8.112/90</div><br>

<table id="total" nome="Campus">
    <tr>
        <td style="width: 1%;font-size: 12px;">Campus Tucuruí</td>
    </tr>
</table>

<table id="total" nome="Período">
    <tr>
    	<td style="text-align: center; font-weight: bold; width: 50mm; font-size: 12px;">Quadrimestre ou período</td>
    	<td style="text-align: center; width: 105mm; font-size: 12px;"><?php echo $data1 . ' a ' . $data2?></td>
    	<td style="text-align: center; font-weight: bold; width: 15mm; font-size: 12px;">Ano:</td>
    	<td style="text-align: center; width: 15mm; font-size: 12px;"><?php echo $ano?></td>
    </tr>
</table>

<table id="total" nome="Nome e SIAPE">
    <tr>
    	<td style="text-align: center; font-weight: bold;width: 30mm; font-size: 12px;">Nome:</td>
    	<td style="text-align: left; width: 160mm; padding-left: 2mm; font-size: 12px;"><?php echo $servidor;?></td>
        <td style="text-align: center; font-weight: bold; width: 30mm; font-size: 12px;">Matrícula:</td>
        <td style="text-align: center; width: 30mm; font-size: 12px;"> <?php echo $siape;?> </td>
    </tr>
</table>

<table id="total" nome="Lotação e Cargo">
    <tr>
    	<td style="text-align: center; font-weight: bold;width: 20mm;font-size: 12px;">Lotação:</td>
    	<td style="text-align: left; padding-left: 2mm; font-size: 12px; width: 75mm;"><?php echo $lotacao?></td>
        <td style="text-align: center; font-weight: bold; width: 20mm;font-size: 12px;">Cargo:</td>
        <td style="text-align: left; padding-left: 2mm; font-size: 12px; width: 75mm;"><?php echo $cargo ?></td>
    </tr>
</table>

<table id="total" nome="Formalização e Admissão">
    <tr>
        <td style="text-align: center;font-weight: bold; width: 60mm; font-size: 12px;">Data de Admissão:</td>
        <td style="text-align: left; padding-left: 2mm; width: 75mm; font-size: 12px;"><?php echo $data_admissao?></td>
        <td style="text-align: center;font-weight: bold; width: 60mm; font-size: 12px;">Data da Formalização:</td>
        <td style="text-align: left; padding-left: 2mm; width: 75mm; font-size: 12px;"><?php echo $data_formalizacao?></td>
    </tr>
</table>
<br>
<table id="total" nome="Ocupações">
    <tr>
    	<td style="text-align: center;font-weight: bold; width: 70mm; font-size: 12px;">Ocupante de Cargo de Direção (&nbsp;&nbsp;)</td>
    	<td style="text-align: center;font-weight: bold; width: 70mm; font-size: 12px;">Ocupante de Função Gratificada (&nbsp;&nbsp;)</td>
    	<td style="text-align: center;font-weight: bold; width: 40mm; font-size: 12px;">Não Ocupante (&nbsp;&nbsp;)</td>
    </tr>

</table>

<table id="total" nome="Etapa Avaliativa">
    <tr>
    	<td style="text-align: center;font-weight: bold;font-size:12px; width: 65mm;">Etapa Avaliativa</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">1ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">2ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">3ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">4ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">5ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">6ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">7ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">8ª</td>
    	<td style="text-align: center;font-weight: bold;width: 20mm; font-size:12px;">9ª</td>        	
    </tr>
</table>

<table id="total" nome="Pontuação">
    <tr>
    	<td style="font-weight: bold;font-size:12px; width: 61mm;">Pontuação</td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>
    	<td style="width: 20mm;"></td>   	
    </tr>
</table>

<table id="total" nome="Pontuação Acumulada">
    <tr>
        <td style=" font-weight: bold; font-size:12px; width: 60.5mm;">Pontuação Acumulada</td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>
        <td style="width: 20mm;"></td>       
    </tr>
</table>

<table id="total">
   <br>
    <tr>
    	<td style="text-align: center;font-weight: bold;width: 30mm;font-size: 12px">Escala de Avaliação</td>
    	<td style="text-align: center;width: 50mm;font-size: 12px;">DI (Desempenho Insuficiente 1 - 4.99)</td>
    	<td style="text-align: center;width: 50mm;font-size: 12px;">DR (Desempenho Regular 5 - 6.99)</td>
    	<td style="text-align: center;width: 50mm;font-size: 12px;">DB (Desempenho Bom 7 - 8.99)</td>
    	<td style="text-align: center;width: 50mm;font-size: 12px;">DE (Desempenho Excelente 9 - 10)</td>   	
    </tr>
</table>
<br>
<table id="total">
    <tr>
      <td style="text-align: center;font-weight: bold;width: 160.5mm;font-size: 12px;">Competência/Aptidão</td>
      <td style="text-align: center;font-weight: bold;width: 19.5mm;font-size: 12px;">Pontuação</td>
    </tr>
</table>

<table id="total" name="Assiduidade">
    <tr>
    	<td style="text-align: center; font-weight: bold; width: 38mm; font-size: 12px" rowspan=5>Assiduidade</td>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Frequência diária ao trabalho</td>
        <td style="width: 19.72mm;"></td>
    </tr>

    <tr>      	
    	<td style="text-align: left; font-size: 12px; width: 122.5mm;">Pontualidade-cumprimento de horários</td>
        <td style="width: 19.72mm;"></td>
    </tr>

    <tr>
    	<td style="text-align: left; font-size: 12px; width: 122.5mm;">Presença no trabalho utiliza o tempo para a realização das atribuições do cargo</td>
        <td style="width: 19.72mm;"></td>
    </tr>

    <tr>
    	<td style="text-align: left; font-size: 12px; width: 122.5mm;">Informa sobre imprevistos que impeçam o seu comparecimento ou cumprimento do horário</td>
        <td style="width: 19.72mm;"></td> 
    </tr>   	

    <tr>
    	<td style="text-align: left; font-size: 12px; width: 122.5mm;">Cumpre as tarefas</td>
        <td style="width: 19.72mm;"></td>
    </tr>
</table>

<table id="total" name="Disciplina">
    <tr>
    	<td style="text-align: center; font-weight: bold; width: 38mm; font-size: 12px;" rowspan="5">Disciplina</td>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;;">Relacionamento interpessoal relaciona com polidez</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>	

    <tr>
     	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Respeito às normas/ordens, cumprimento dos deveres de cidadão</td>
     	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
     	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Participação e cooperação em tabalhos em equipe</td>
     	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
     	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Respeita os princípios éticos profissionais</td>
     	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
     	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Trasparência/Clareza</td>
     	<td style="width: 19.72mm;"></td> 
    </tr>
</table>

<table id="total" name="Iniciativa">
    <tr>
    	<td style="text-align: center; font-weight: bold; width: 38mm; font-size: 12px;" rowspan="5">Iniciativa</td>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Criatividade/Proatividade</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Interesse no desempenho de suas atividades</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Interesse para aprender outros serviços e auxiliar os colegas</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Facilidade na resolução de problemas</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Dinâmico, contribui com sua experiência</td>  		
    	<td style="width: 19.72mm;"></td> 
    </tr>
</table>

<table id="total" name="Produtividade">
    <tr>
    	<td style="text-align: center; font-weight: bold; width: 38mm; font-size: 12px;" rowspan="5">Produtividade</td>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;" >Qualidade com que executa o trabalho</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Conhecimento do trabalho</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Rendimento no trabalho</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Presteza</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Interesse no desenvolvimento</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>
</table>

<table id="total" name="Responsabilidade">
    <tr>
    	<td style="text-align: center; font-weight: bold; width: 38mm; font-size: 12px;" rowspan="5">Responsabilidade</td>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Comprometimento</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Dedicação</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Organização</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Aperfeiçoamento profissional/capacitação</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>

    <tr>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;">Zela pelo patrimônio da Instituição</td>
    	<td style="width: 19.72mm;"></td> 
    </tr>
</table>

<table id="total" name="Total">
    <tr>
    	<td style="text-align: center; font-weight: bold; width: 38mm; font-size: 12px;">Total:</td>
    	<td style="text-align: left; width: 122.5mm; font-size: 12px;"></td>
    	<td style="width: 19.72mm;"></td>
    </tr>
</table>

<table id="total">
    <tr>
        <td style="text-align: center; font-weight: bold; width: 37.5mm; font-size: 12px;">Conceito Adquirido:</td>
    	<td style="text-align: center; width: 140.5mm; font-size: 12px;">Insuficiente: 25 a 124( &nbsp;&nbsp;) Regular: 125 a 174( &nbsp;&nbsp;) Bom: 175 a 224 ( &nbsp;&nbsp;) Excelente 225 a 250 ( &nbsp;&nbsp;)</td>
    </tr>
</table>

<table id="total">
	<tr>
		<td style="font-size: 12px; padding: 3px;">Pontuação mínima para a aprovação em estágio probatório = 125 (cento e vinte e cinco) pontos por avaliação ou 1.125 (um
	mil cento e vinte e cinco) pontos em 3 (três) anos.</td>
    </tr>
</table>
<br>
<table id="total">
    <tr>
        <td style="text-align: left; font-size: 12px; width: 40mm;height: 5mm; text-align: center;">Data: ____/____/_______</td>
        <td style="text-align: left; font-size: 12px; width: 140mm; padding-left: 5px;">Assinatura/carimbo chefia imediata: __________________________________________</td>
    </tr>
</table>

<table id="total">
		<tr><td style="text-align: left; width: 180mm; font-size: 12px">Manifestação do servidor avaliado:</td></tr>
		<tr><td style="height: 4mm;"></td></tr>
		<tr><td style="height: 4mm;"></td></tr>
</table>	

<table id="total">
	<tr>
		<td style="text-align: left; width: 40mm; font-size: 12px; height: 5mm; text-align: center;">Data: ____/____/_______</td>
		<td style="text-align: left; width:140mm; font-size: 12px; height: 5mm; padding-left: 5px;">Assinatura do servidor avaliado: _______________________________________________ </td>
	</tr>	
</table>	

<br id="noprint"><br id="noprint">
            <a href="#" id='noprint' class="but" onclick='javascript:window.print();'><h class="fa fa-print"> Imprimir</h></a>

</div>
<br id="noprint"><br id="noprint">
</body>
</html>