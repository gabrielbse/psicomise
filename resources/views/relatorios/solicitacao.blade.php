<head>
    <title>Relatório</title>
</head>
 
</br></br>
<h3>Solicitação</h3>
</br></br>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:4px 7px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:4px 7px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-3we0{background-color:#ffffff;vertical-align:top}
.tg .tg-kruy{font-size:18px;background-color:#ffffff;text-align:center;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-amld{background-color:#f0f0f0;text-align:center}
.tg .tg-iykq{font-family:Arial, Helvetica, sans-serif !important;;background-color:#f0f0f0;text-align:center}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}</style>
<div class="tg-wrap"><table class="tg" style="undefined;table-layout: auto; width: 900px">
<colgroup>
<col style="width: 105px">
<col style="width: 51px">
<col style="width: 162px">
<col style="width: 142px">
<col style="width: 47px">
<col style="width: 64px">
<col style="width: 62px">
<col style="width: 62px">
<col style="width: 104px">
<col style="width: 78px">
<col style="width: 202px">
</colgroup>
  <tr>
    <th class="tg-3we0" colspan="3"></th>
    <th class="tg-kruy" colspan="8">Universidade Estadual do Sudoeste da Bahia<br>Recredenciado pelo Decreto Estadual nº 9996 de 02.05.2006 <br><br></th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="11"></td>
  </tr>
  <tr>
    <td class="tg-amld" rowspan="2">PROFESSOR</td>
    <td class="tg-iykq" rowspan="2">REG TRA</td>
    <td class="tg-iykq" colspan="8">DISCIPLINAS</td>
    <td class="tg-iykq" rowspan="2">OUTRAS ATIVIDADES</td>
  </tr>
  <tr>
    <td class="tg-iykq">NOME</td>
    <td class="tg-iykq">CURSO</td>
    <td class="tg-iykq">CH</td>
    <td class="tg-iykq">Nº T.TEO</td>
    <td class="tg-iykq">Nº T.PRA</td>
    <td class="tg-iykq">Nº T.EST</td>
    <td class="tg-iykq">CH SEM</td>
    <td class="tg-iykq">CH TOTAL</td>
  </tr>
  <tr>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh">{{$solicitacao->disciplina->nome_disciplina}}</td>
    <td class="tg-baqh">{{$solicitacao->colegiado->curso->nome_curso}}</td>
    <td class="tg-baqh">{{$solicitacao->disciplina->ch_total_disciplina}}</td>
    <td class="tg-baqh">{{$solicitacao->quant_teorica_aprovada}}</td>
    <td class="tg-baqh">{{$solicitacao->quant_pratica_aprovada}}</td>
    <td class="tg-baqh">{{$solicitacao->quant_estagio_aprovada}}</td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
    <td class="tg-baqh"></td>
  </tr>
</table></div></div>