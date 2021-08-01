<div class="box">
            <div class="box-header">
              <h3 class="box-title">Prestação de Contas 
                <small>[Registre suas despesas]</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Minimizar">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Fechar">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                 <form method="POST" role="form">
                     
                  <?php if (count($dadosprestacao[0]) == 1): ?>
                  <?php 
                    $itemvalorad[1] = $dadosprestacao['valor_adiantamento'];
                    $itemvinculo[1] = $dadosprestacao['vinculo_outra_prestacao'];
                    $itemdata[1] = $dadosprestacao['data'];
                    $itemdesc[1] = $dadosprestacao['descricao'];
                    $itemvalor[1] = $dadosprestacao['valor'];
                    $itemempresa[1] = $dadosprestacao['empresa'];
                  ?>
                  <?php else: ?>
                  <?php $i = 1;  ?>
                  <?php foreach ($dadosprestacao as $dpitem): ?>
                       
                    <?php
                    $itemvalorad[$i] = $dpitem['valor_adiantamento'];
                    $itemvinculo[$i] = $dpitem['vinculo_outra_prestacao'];
                    $itemdata[$i] = $dpitem['data'];
                    $itemdesc[$i] = $dpitem['descricao'];
                    $itemvalor[$i] = $dpitem['valor'];
                    $itemempresa[$i] = $dpitem['empresa'];
                    $i++;
                    ?>
                    
                  <?php endforeach; ?>
                  <?php endif; ?>
                 
                <div class="row">
                <div class="col-sm-5">
                <div class="form-group">
                  <label for="solicitante">Cliente </label>
                  <input type="text" name="solicitante" class="form-control" id="solicitante" value="<?php echo utf8_encode($dadosviagem['nome']); ?>" disabled="disabled">
                </div> </div>
                <div class="col-sm-3">
                <div class="form-group">
                  <label for="datadis">Data Saída </label>
                  <input type="date" name="datadis" class="form-control" id="datadis" value="<?php echo date('Y-m-d', strtotime($dadosviagem['data'])); ?>" disabled="disabled">
                </div> </div>
                
                <div class="col-sm-3">
                <div class="form-group">
                  <label for="vinculo_outra_prestacao">Vincular Viagem Existente </label>
                  <?php if (!empty($itemvinculo[1])): ?>
                  <input type="number" name="vinculo_outra_prestacao" class="form-control" id="vinculo_outra_prestacao" value="<?php echo $itemvinculo[1]; ?>">
                   <?php else: ?>
                  <input type="number" name="vinculo_outra_prestacao" class="form-control" id="vinculo_outra_prestacao" placeholder="ID viagem existente">
                  <?php endif; ?>
                  
                </div> </div>
                    
                </div>
                     
                <div class="row">
                <div class="col-sm-2">
                <div class="form-group">
                  <label for="valor_adiantamento">Valor adiantado </label>   
                  <?php if (!empty($itemvalorad[1])): ?>
                  <input type="text" name="valor_adiantamento" class="form-control" id="valor_adiantamento" value="<?php echo number_format($itemvalorad[1],2,',','.'); ?>">
                   <?php else: ?>
                  <input type="text" name="valor_adiantamento" class="form-control" id="valor_adiantamento" placeholder="0,00" autocomplete="off">
                  <?php endif; ?>
                  
                </div> </div>
                
                </div>
                     
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data">Data </label>
                        <?php if (!empty($itemdata[1])): ?>
                        <input type="date" name="data" class="form-control" id="data" value="<?php echo date('Y-m-d', strtotime($itemdata[1])); ?>">
                         <?php else: ?>
                        <input type="date" name="data" class="form-control" id="data" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                        
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao">Descrição </label>
                        <?php if (!empty($itemdesc[1])): ?>
                        <input type="text" name="descricao" class="form-control" id="descricao" value="<?php echo utf8_encode($itemdesc[1]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                        
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor">Valor </label>
                        <?php if (!empty($itemvalor[1])): ?>
                        <input type="text" name="valor" class="form-control" id="valor" value="<?php echo number_format($itemvalor[1],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor" class="form-control" id="valor" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>                        
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa">Empresa </label>
                        <?php if (!empty($itemempresa[1])): ?>
                        <input type="text" name="empresa" class="form-control" id="empresa" value="<?php echo utf8_encode($itemempresa[1]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>                        
                    </div>
                    </div>

                </div> 
                
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data2">Data </label>
                        <?php if (!empty($itemdata[2])): ?>
                        <input type="date" name="data2" class="form-control" id="data2" value="<?php echo date('Y-m-d', strtotime($itemdata[2])); ?>">
                         <?php else: ?>
                        <input type="date" name="data2" class="form-control" id="data2" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao2">Descrição </label>
                        <?php if (!empty($itemdesc[2])): ?>
                        <input type="text" name="descricao2" class="form-control" id="descricao2" value="<?php echo utf8_encode($itemdesc[2]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao2" class="form-control" id="descricao2" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor2">Valor </label>
                        <?php if (!empty($itemvalor[2])): ?>
                        <input type="text" name="valor2" class="form-control" id="valor2" value="<?php echo number_format($itemvalor[2],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor2" class="form-control" id="valor2" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa2">Empresa </label>
                        <?php if (!empty($itemempresa[2])): ?>
                        <input type="text" name="empresa2" class="form-control" id="empresa2" value="<?php echo utf8_encode($itemempresa[2]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa2" class="form-control" id="empresa2" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>   
                     
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data3">Data </label>
                        <?php if (!empty($itemdata[3])): ?>
                        <input type="date" name="data3" class="form-control" id="data3" value="<?php echo date('Y-m-d', strtotime($itemdata[3])); ?>">
                         <?php else: ?>
                        <input type="date" name="data3" class="form-control" id="data3" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao3">Descrição </label>
                        <?php if (!empty($itemdesc[3])): ?>
                        <input type="text" name="descricao3" class="form-control" id="descricao3" value="<?php echo utf8_encode($itemdesc[3]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao3" class="form-control" id="descricao3" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor3">Valor </label>
                        <?php if (!empty($itemvalor[3])): ?>
                        <input type="text" name="valor3" class="form-control" id="valor3" value="<?php echo number_format($itemvalor[3],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor3" class="form-control" id="valor3" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa3">Empresa </label>
                        <?php if (!empty($itemempresa[3])): ?>
                        <input type="text" name="empresa3" class="form-control" id="empresa3" value="<?php echo utf8_encode($itemempresa[3]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa3" class="form-control" id="empresa3" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div> 
                     
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data4">Data </label>
                        <?php if (!empty($itemdata[4])): ?>
                        <input type="date" name="data4" class="form-control" id="data4" value="<?php echo date('Y-m-d', strtotime($itemdata[4])); ?>">
                         <?php else: ?>
                        <input type="date" name="data4" class="form-control" id="data4" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao4">Descrição </label>
                        <?php if (!empty($itemdesc[4])): ?>
                        <input type="text" name="descricao4" class="form-control" id="descricao4" value="<?php echo utf8_encode($itemdesc[4]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao4" class="form-control" id="descricao4" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor4">Valor </label>
                        <?php if (!empty($itemvalor[4])): ?>
                        <input type="text" name="valor4" class="form-control" id="valor4" value="<?php echo number_format($itemvalor[4],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor4" class="form-control" id="valor4" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa4">Empresa </label>
                        <?php if (!empty($itemempresa[4])): ?>
                        <input type="text" name="empresa4" class="form-control" id="empresa4" value="<?php echo utf8_encode($itemempresa[4]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa4" class="form-control" id="empresa4" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                     
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data5">Data </label>
                        <?php if (!empty($itemdata[5])): ?>
                        <input type="date" name="data5" class="form-control" id="data5" value="<?php echo date('Y-m-d', strtotime($itemdata[5])); ?>">
                         <?php else: ?>
                        <input type="date" name="data5" class="form-control" id="data5" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao5">Descrição </label>
                        <?php if (!empty($itemdesc[5])): ?>
                        <input type="text" name="descricao5" class="form-control" id="descricao5" value="<?php echo utf8_encode($itemdesc[5]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao5" class="form-control" id="descricao5" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor5">Valor </label>
                        <?php if (!empty($itemvalor[5])): ?>
                        <input type="text" name="valor5" class="form-control" id="valor5" value="<?php echo number_format($itemvalor[5],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor5" class="form-control" id="valor5" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa5">Empresa </label>
                        <?php if (!empty($itemempresa[5])): ?>
                        <input type="text" name="empresa5" class="form-control" id="empresa5" value="<?php echo utf8_encode($itemempresa[5]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa5" class="form-control" id="empresa5" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data6">Data </label>
                        <?php if (!empty($itemdata[6])): ?>
                        <input type="date" name="data6" class="form-control" id="data6" value="<?php echo date('Y-m-d', strtotime($itemdata[6])); ?>">
                         <?php else: ?>
                        <input type="date" name="data6" class="form-control" id="data6" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao6">Descrição </label>
                        <?php if (!empty($itemdesc[6])): ?>
                        <input type="text" name="descricao6" class="form-control" id="descricao6" value="<?php echo utf8_encode($itemdesc[6]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao6" class="form-control" id="descricao6" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor6">Valor </label>
                        <?php if (!empty($itemvalor[6])): ?>
                        <input type="text" name="valor6" class="form-control" id="valor6" value="<?php echo number_format($itemvalor[6],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor6" class="form-control" id="valor6" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa6">Empresa </label>
                        <?php if (!empty($itemempresa[6])): ?>
                        <input type="text" name="empresa6" class="form-control" id="empresa6" value="<?php echo utf8_encode($itemempresa[6]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa6" class="form-control" id="empresa6" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data7">Data </label>
                        <?php if (!empty($itemdata[7])): ?>
                        <input type="date" name="data7" class="form-control" id="data7" value="<?php echo date('Y-m-d', strtotime($itemdata[7])); ?>">
                         <?php else: ?>
                        <input type="date" name="data7" class="form-control" id="data7" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao7">Descrição </label>
                        <?php if (!empty($itemdesc[7])): ?>
                        <input type="text" name="descricao7" class="form-control" id="descricao7" value="<?php echo utf8_encode($itemdesc[7]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao7" class="form-control" id="descricao7" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor7">Valor </label>
                        <?php if (!empty($itemvalor[7])): ?>
                        <input type="text" name="valor7" class="form-control" id="valor7" value="<?php echo number_format($itemvalor[7],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor7" class="form-control" id="valor7" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa7">Empresa </label>
                        <?php if (!empty($itemempresa[7])): ?>
                        <input type="text" name="empresa7" class="form-control" id="empresa7" value="<?php echo utf8_encode($itemempresa[7]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa7" class="form-control" id="empresa7" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data8">Data </label>
                        <?php if (!empty($itemdata[8])): ?>
                        <input type="date" name="data8" class="form-control" id="data8" value="<?php echo date('Y-m-d', strtotime($itemdata[8])); ?>">
                         <?php else: ?>
                        <input type="date" name="data8" class="form-control" id="data8" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao8">Descrição </label>
                        <?php if (!empty($itemdesc[8])): ?>
                        <input type="text" name="descricao8" class="form-control" id="descricao8" value="<?php echo utf8_encode($itemdesc[8]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao8" class="form-control" id="descricao8" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor8">Valor </label>
                        <?php if (!empty($itemvalor[8])): ?>
                        <input type="text" name="valor8" class="form-control" id="valor8" value="<?php echo number_format($itemvalor[8],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor8" class="form-control" id="valor8" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa8">Empresa </label>
                        <?php if (!empty($itemempresa[8])): ?>
                        <input type="text" name="empresa8" class="form-control" id="empresa8" value="<?php echo utf8_encode($itemempresa[8]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa8" class="form-control" id="empresa8" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data9">Data </label>
                        <?php if (!empty($itemdata[9])): ?>
                        <input type="date" name="data9" class="form-control" id="data9" value="<?php echo date('Y-m-d', strtotime($itemdata[9])); ?>">
                         <?php else: ?>
                        <input type="date" name="data9" class="form-control" id="data9" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao9">Descrição </label>
                        <?php if (!empty($itemdesc[9])): ?>
                        <input type="text" name="descricao9" class="form-control" id="descricao9" value="<?php echo utf8_encode($itemdesc[9]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao9" class="form-control" id="descricao9" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor9">Valor </label>
                        <?php if (!empty($itemvalor[9])): ?>
                        <input type="text" name="valor9" class="form-control" id="valor9" value="<?php echo number_format($itemvalor[9],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor9" class="form-control" id="valor9" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa9">Empresa </label>
                        <?php if (!empty($itemempresa[9])): ?>
                        <input type="text" name="empresa9" class="form-control" id="empresa9" value="<?php echo utf8_encode($itemempresa[9]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa9" class="form-control" id="empresa9" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data10">Data </label>
                        <?php if (!empty($itemdata[10])): ?>
                        <input type="date" name="data10" class="form-control" id="data10" value="<?php echo date('Y-m-d', strtotime($itemdata[10])); ?>">
                         <?php else: ?>
                        <input type="date" name="data10" class="form-control" id="data10" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao10">Descrição </label>
                        <?php if (!empty($itemdesc[10])): ?>
                        <input type="text" name="descricao10" class="form-control" id="descricao10" value="<?php echo utf8_encode($itemdesc[10]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao10" class="form-control" id="descricao10" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor10">Valor </label>
                        <?php if (!empty($itemvalor[10])): ?>
                        <input type="text" name="valor10" class="form-control" id="valor10" value="<?php echo number_format($itemvalor[10],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor10" class="form-control" id="valor10" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa10">Empresa </label>
                        <?php if (!empty($itemempresa[10])): ?>
                        <input type="text" name="empresa10" class="form-control" id="empresa10" value="<?php echo utf8_encode($itemempresa[10]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa10" class="form-control" id="empresa10" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data11">Data </label>
                        <?php if (!empty($itemdata[11])): ?>
                        <input type="date" name="data11" class="form-control" id="data11" value="<?php echo date('Y-m-d', strtotime($itemdata[11])); ?>">
                         <?php else: ?>
                        <input type="date" name="data11" class="form-control" id="data11" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao11">Descrição </label>
                        <?php if (!empty($itemdesc[11])): ?>
                        <input type="text" name="descricao11" class="form-control" id="descricao11" value="<?php echo utf8_encode($itemdesc[11]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao11" class="form-control" id="descricao11" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor11">Valor </label>
                        <?php if (!empty($itemvalor[11])): ?>
                        <input type="text" name="valor11" class="form-control" id="valor11" value="<?php echo number_format($itemvalor[11],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor11" class="form-control" id="valor11" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa11">Empresa </label>
                        <?php if (!empty($itemempresa[11])): ?>
                        <input type="text" name="empresa11" class="form-control" id="empresa11" value="<?php echo utf8_encode($itemempresa[11]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa11" class="form-control" id="empresa11" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data12">Data </label>
                        <?php if (!empty($itemdata[12])): ?>
                        <input type="date" name="data12" class="form-control" id="data12" value="<?php echo date('Y-m-d', strtotime($itemdata[12])); ?>">
                         <?php else: ?>
                        <input type="date" name="data12" class="form-control" id="data12" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao12">Descrição </label>
                        <?php if (!empty($itemdesc[12])): ?>
                        <input type="text" name="descricao12" class="form-control" id="descricao12" value="<?php echo utf8_encode($itemdesc[12]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao12" class="form-control" id="descricao12" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor12">Valor </label>
                        <?php if (!empty($itemvalor[12])): ?>
                        <input type="text" name="valor12" class="form-control" id="valor12" value="<?php echo number_format($itemvalor[12],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor12" class="form-control" id="valor12" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa12">Empresa </label>
                        <?php if (!empty($itemempresa[12])): ?>
                        <input type="text" name="empresa12" class="form-control" id="empresa12" value="<?php echo utf8_encode($itemempresa[12]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa12" class="form-control" id="empresa12" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data13">Data </label>
                        <?php if (!empty($itemdata[13])): ?>
                        <input type="date" name="data13" class="form-control" id="data13" value="<?php echo date('Y-m-d', strtotime($itemdata[13])); ?>">
                         <?php else: ?>
                        <input type="date" name="data13" class="form-control" id="data13" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao13">Descrição </label>
                        <?php if (!empty($itemdesc[13])): ?>
                        <input type="text" name="descricao13" class="form-control" id="descricao13" value="<?php echo utf8_encode($itemdesc[13]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao13" class="form-control" id="descricao13" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor13">Valor </label>
                        <?php if (!empty($itemvalor[13])): ?>
                        <input type="text" name="valor13" class="form-control" id="valor13" value="<?php echo number_format($itemvalor[13],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor13" class="form-control" id="valor13" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa13">Empresa </label>
                        <?php if (!empty($itemempresa[13])): ?>
                        <input type="text" name="empresa13" class="form-control" id="empresa13" value="<?php echo utf8_encode($itemempresa[13]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa13" class="form-control" id="empresa13" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data14">Data </label>
                        <?php if (!empty($itemdata[14])): ?>
                        <input type="date" name="data14" class="form-control" id="data14" value="<?php echo date('Y-m-d', strtotime($itemdata[14])); ?>">
                         <?php else: ?>
                        <input type="date" name="data14" class="form-control" id="data14" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao14">Descrição </label>
                        <?php if (!empty($itemdesc[14])): ?>
                        <input type="text" name="descricao14" class="form-control" id="descricao14" value="<?php echo utf8_encode($itemdesc[14]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao14" class="form-control" id="descricao14" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor14">Valor </label>
                        <?php if (!empty($itemvalor[14])): ?>
                        <input type="text" name="valor14" class="form-control" id="valor14" value="<?php echo number_format($itemvalor[14],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor14" class="form-control" id="valor14" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa14">Empresa </label>
                        <?php if (!empty($itemempresa[14])): ?>
                        <input type="text" name="empresa14" class="form-control" id="empresa14" value="<?php echo utf8_encode($itemempresa[14]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa14" class="form-control" id="empresa14" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data15">Data </label>
                        <?php if (!empty($itemdata[15])): ?>
                        <input type="date" name="data15" class="form-control" id="data15" value="<?php echo date('Y-m-d', strtotime($itemdata[15])); ?>">
                         <?php else: ?>
                        <input type="date" name="data15" class="form-control" id="data15" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao15">Descrição </label>
                        <?php if (!empty($itemdesc[15])): ?>
                        <input type="text" name="descricao15" class="form-control" id="descricao15" value="<?php echo utf8_encode($itemdesc[15]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao15" class="form-control" id="descricao15" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor15">Valor </label>
                        <?php if (!empty($itemvalor[15])): ?>
                        <input type="text" name="valor15" class="form-control" id="valor15" value="<?php echo number_format($itemvalor[15],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor15" class="form-control" id="valor15" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa15">Empresa </label>
                        <?php if (!empty($itemempresa[15])): ?>
                        <input type="text" name="empresa15" class="form-control" id="empresa15" value="<?php echo utf8_encode($itemempresa[15]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa15" class="form-control" id="empresa15" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data16">Data </label>
                        <?php if (!empty($itemdata[16])): ?>
                        <input type="date" name="data16" class="form-control" id="data16" value="<?php echo date('Y-m-d', strtotime($itemdata[16])); ?>">
                         <?php else: ?>
                        <input type="date" name="data16" class="form-control" id="data16" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao16">Descrição </label>
                        <?php if (!empty($itemdesc[16])): ?>
                        <input type="text" name="descricao16" class="form-control" id="descricao16" value="<?php echo utf8_encode($itemdesc[16]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao16" class="form-control" id="descricao16" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor16">Valor </label>
                        <?php if (!empty($itemvalor[16])): ?>
                        <input type="text" name="valor16" class="form-control" id="valor16" value="<?php echo number_format($itemvalor[16],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor16" class="form-control" id="valor16" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa16">Empresa </label>
                        <?php if (!empty($itemempresa[16])): ?>
                        <input type="text" name="empresa16" class="form-control" id="empresa16" value="<?php echo utf8_encode($itemempresa[16]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa16" class="form-control" id="empresa16" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data17">Data </label>
                        <?php if (!empty($itemdata[17])): ?>
                        <input type="date" name="data17" class="form-control" id="data17" value="<?php echo date('Y-m-d', strtotime($itemdata[17])); ?>">
                         <?php else: ?>
                        <input type="date" name="data17" class="form-control" id="data17" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao17">Descrição </label>
                        <?php if (!empty($itemdesc[17])): ?>
                        <input type="text" name="descricao17" class="form-control" id="descricao17" value="<?php echo utf8_encode($itemdesc[17]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao17" class="form-control" id="descricao17" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor17">Valor </label>
                        <?php if (!empty($itemvalor[17])): ?>
                        <input type="text" name="valor17" class="form-control" id="valor17" value="<?php echo number_format($itemvalor[17],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor17" class="form-control" id="valor17" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa17">Empresa </label>
                        <?php if (!empty($itemempresa[17])): ?>
                        <input type="text" name="empresa17" class="form-control" id="empresa17" value="<?php echo utf8_encode($itemempresa[17]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa17" class="form-control" id="empresa17" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data18">Data </label>
                        <?php if (!empty($itemdata[18])): ?>
                        <input type="date" name="data18" class="form-control" id="data18" value="<?php echo date('Y-m-d', strtotime($itemdata[18])); ?>">
                         <?php else: ?>
                        <input type="date" name="data18" class="form-control" id="data18" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao18">Descrição </label>
                        <?php if (!empty($itemdesc[18])): ?>
                        <input type="text" name="descricao18" class="form-control" id="descricao18" value="<?php echo utf8_encode($itemdesc[18]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao18" class="form-control" id="descricao18" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor18">Valor </label>
                        <?php if (!empty($itemvalor[18])): ?>
                        <input type="text" name="valor18" class="form-control" id="valor18" value="<?php echo number_format($itemvalor[18],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor18" class="form-control" id="valor18" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa18">Empresa </label>
                        <?php if (!empty($itemempresa[18])): ?>
                        <input type="text" name="empresa18" class="form-control" id="empresa18" value="<?php echo utf8_encode($itemempresa[18]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa18" class="form-control" id="empresa18" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data19">Data </label>
                        <?php if (!empty($itemdata[19])): ?>
                        <input type="date" name="data19" class="form-control" id="data19" value="<?php echo date('Y-m-d', strtotime($itemdata[19])); ?>">
                         <?php else: ?>
                        <input type="date" name="data19" class="form-control" id="data19" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao19">Descrição </label>
                        <?php if (!empty($itemdesc[19])): ?>
                        <input type="text" name="descricao19" class="form-control" id="descricao19" value="<?php echo utf8_encode($itemdesc[19]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao19" class="form-control" id="descricao19" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor19">Valor </label>
                        <?php if (!empty($itemvalor[19])): ?>
                        <input type="text" name="valor19" class="form-control" id="valor19" value="<?php echo number_format($itemvalor[19],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor19" class="form-control" id="valor19" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa19">Empresa </label>
                        <?php if (!empty($itemempresa[19])): ?>
                        <input type="text" name="empresa19" class="form-control" id="empresa19" value="<?php echo utf8_encode($itemempresa[19]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa19" class="form-control" id="empresa19" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data20">Data </label>
                        <?php if (!empty($itemdata[20])): ?>
                        <input type="date" name="data20" class="form-control" id="data20" value="<?php echo date('Y-m-d', strtotime($itemdata[20])); ?>">
                         <?php else: ?>
                        <input type="date" name="data20" class="form-control" id="data20" value="<?php echo date('Y-m-d'); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="descricao20">Descrição </label>
                        <?php if (!empty($itemdesc[20])): ?>
                        <input type="text" name="descricao20" class="form-control" id="descricao20" value="<?php echo utf8_encode($itemdesc[20]); ?>">
                         <?php else: ?>
                        <input type="text" name="descricao20" class="form-control" id="descricao20" placeholder="Ex: Café da manhã">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="valor20">Valor </label>
                        <?php if (!empty($itemvalor[20])): ?>
                        <input type="text" name="valor20" class="form-control" id="valor20" value="<?php echo number_format($itemvalor[20],2,',','.'); ?>">
                         <?php else: ?>
                        <input type="text" name="valor20" class="form-control" id="valor20" placeholder="0,00" autocomplete="off">
                        <?php endif; ?>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="empresa20">Empresa </label>
                        <?php if (!empty($itemempresa[20])): ?>
                        <input type="text" name="empresa20" class="form-control" id="empresa20" value="<?php echo utf8_encode($itemempresa[20]); ?>">
                         <?php else: ?>
                        <input type="text" name="empresa20" class="form-control" id="empresa20" placeholder="Ex: Posto Luzitano">
                        <?php endif; ?>
                    </div>
                    </div>

                </div>
                     
                     <div class="form-group">
                    <div class="input-group">                      
                        <br/><input type="submit" value="Salvar" class="btn btn-primary">
                    </div>                    
                    </div>
                     
                     
                
              </form>
            </div>
          </div>
