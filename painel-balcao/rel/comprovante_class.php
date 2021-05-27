<?php 

include('../../conexao.php');

//CARREGAR DOMPDF
require_once '../../dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$id = $_GET['id'];

//ALIMENTAR OS DADOS NO RELATÓRIO
$html = utf8_encode(file_get_contents($url_site."painel-balcao/rel/comprovante.php?id=".$id));



//INICIALIZAR A CLASSE DO DOMPDF
$pdf = new Dompdf();

//Definir o tamanho do papel e orientação da página
$pdf->set_paper(array(0, 0, 298, 700), 'portrait');

//CARREGAR O CONTEÚDO HTML
$pdf->load_html(utf8_decode($html));


//RENDERIZAR O PDF
$pdf->render();

//NOMEAR O PDF GERADO
$pdf->stream(
'comprovante.pdf',
array("Attachment" => false)
);


