<div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
    <h2 class="w3-text-cyan">Experiência Profissional</h2>
</div>Formulário:
<form action=" " method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
    <div class="w3-row w3-center">
        <div class="w3-col" style="width:50%;">
            Data Inicial
        </div>
        <div class="w3-res">
            Data Final
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-row w3-section w3-col" style="width:45%;">
            <div class="w3-col" style="width:15%;">
                <i class="w3-xxlarge fa fa-calendar"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
            </div>
        </div>
        <div class="w3-row w3-section w3-rest" >
            <div class="w3-col w3-margin-left" style="width:13%;">
                <i class="w3-xxlarge fa fa-calendar"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
            </div>
        </div>
        <div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text"
                        placeholder="Centro Paula Souza">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:7%;">
                    <i class="w3-xxlarge fa fa-align-justify"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text"
                        placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas -Desenvolvimento de Páginas WEB">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-center">
                    <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cellw3-round-large"
                        style="width: 20%;">
                        <i class="w3-xxlarge fa fa-user-plus"></i>

                    </button>
                </div>
            </div>
</form>
<div class="w3-container">
    <table class="w3-table-all w3-centered">
        <thead>
            <tr class="w3-center w3-blue">
                <th>Início</th>
                <th>Fim</th>
                <th>Empresa</th>
                <th>Descrição</th>
                <th>Apagar</th>
            </tr>
            <thead>

                <?php
 $ePro = new ExperienciaProfissional();
 $results = $ePro->listaExperiencias(unserialize($_SESSION['Usuario'])->getID());
 if($results != null)

 while($row = $results->fetch_object()) {
 echo '<tr>';
 echo '<td style="width: 10%;">'.$row->inicio.'</td>';
 echo '<td style="width: 10%;">'.$row->fim.'</td>';
 echo '<td style="width: 10%;">'.$row->empresa.'</td>';
 echo '<td style="width: 65%;">'.$row->descricao.'</td>';
 echo '<td style="width: 5%;">
 <form action="/Controller/Navegacao.php" method="post">
<input type="hidden" name="idEP" value="'.$row->idexperienciaprofissional.'">
 <button name="btnExcluirEP" class="w3-button w3-block w3-blue w3-cell w3-
round-large">
 <i class="fa fa-user-times"></i> </button></td>
 </form>';
echo '</tr>';
 }
 ?>
    </table>
</div>