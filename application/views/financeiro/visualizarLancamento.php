<div class="accordion" id="collapse-group">
    <div class="accordion-group widget-box">
        <div class="accordion-heading">
            <div class="widget-title">
                <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                    <span class="icon"><i class="icon-list"></i></span><h5>Dados do lançamento</h5>
                </a>
            </div>
        </div>
        <div class="collapse in accordion-body">
            <div class="widget-content">
                <table class="table table-bordered">
                    <tbody>
			<tr>
                            <td style="text-align: right; width: 30%"><strong>Tipo</strong></td>
                            <td><?php echo $result->tipo?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Cliente / Fornecedor</strong></td>
                            <td><?php echo $result->cliente_fornecedor?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Descrição</strong></td>
                           <td><?php echo $result->descricao?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Data do Vencimento</strong></td>
                            <td><?php echo $result->data_vencimento?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Status</strong></td>
                            <td><?php echo $result->status?></td>
                        </tr>
			<tr>
                            <td style="text-align: right"><strong>Valor</strong></td>
			    <td> R$<?php echo number_format($result->valor,2,',','.')?></td>
                 	</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

