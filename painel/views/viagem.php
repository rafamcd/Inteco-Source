<div class="box">
    
            <div class="box-header">
                <div class="col-md-1">
                    <div class="box-body">
                        <h3 class="box-title">Viagens                 
                        </h3>
                    </div>
                    
                </div>
              
            
              <?php if ($nomeuser != 'roseli' and $nomeuser != 'rubens'): ?>    
              <div class="col-md-2">
                  <div class="box-body">
                        
                            <h3 class="box-title">
                                <a href="<?php echo BASE_URL; ?>painel/viagem/add" class="btn btn-info">Adicionar Viagem</a>
                            </h3>
                        
                        </div>            
              </div>
              <?php endif; ?>
                
                
                
              <div class="col-md-9">
                  <div class="box-body">
                      
                      <?php 
                        $valorfun = 0;
                        
                        if (isset($_GET['filtros']['data1']) && !$_GET['filtros']['data1'] != '0000-00-00') {
                            $valordata1 = $_GET['filtros']['data1'];
                        }  else  {
                            $valordata1 = '2019-01-01';
                        }
                        if (isset($_GET['filtros']['data2']) && !$_GET['filtros']['data2'] != '0000-00-00') {
                            $valordata2 = $_GET['filtros']['data2'];
                        }  else  {
                            $valordata2 = date('Y-m-d');
                        }
                        if (isset($_GET['filtros']['fun'])) {
                            $valorfun = $_GET['filtros']['fun'];
                        } 

                        ?>

                    <form method="GET">                    
                        <div id="box-tit-desc"> 

                        Data &nbsp;&nbsp; <input type="date" name="filtros[data1]" value="<?php echo $valordata1; ?>"> &nbsp;&nbsp;até&nbsp;&nbsp; 
                        <input type="date" name="filtros[data2]" id="data2" value="<?php echo $valordata2; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <?php if ($nomeuser == 'roseli' or $nomeuser == 'rubens'): ?>    
                                     Funcionário &nbsp;&nbsp; 
                                     
                                     <?php if (isset($valorfun) && !empty($valorfun)): ?>                                     
                                     
                                     <select id="fun" name="filtros[fun]">  
                                          <option value="0">Todos funcionários</option>
                                          <?php foreach($funcionarios as $funcionario): ?>                      
                                              <option value="<?php echo $funcionario['id']; ?>"<?php echo ($valorfun == $funcionario['id'])?'selected="selected"':''; ?>><?php echo utf8_encode($funcionario['nome']); ?></option>
                                          <?php endforeach; ?>  
                                      </select>  
                                     
                                     <?php endif; ?>
                                     <?php if (empty($valorfun)): ?>
                                     <select id="fun" name="filtros[fun]">  
                                          <option value="0">Todos funcionários</option>
                                          <?php foreach($funcionarios as $funcionario): ?>                      
                                              <option value="<?php echo $funcionario['id']; ?>"><?php echo utf8_encode($funcionario['nome']); ?></option>
                                          <?php endforeach; ?>  
                                      </select>  
                                     <?php endif; ?>
                        <?php endif; ?>  
                        
                        &nbsp;&nbsp;&nbsp;
                        
                        <input type="submit" class="btn btn-info" value="Filtrar" style="width: 70px; height: 40px; padding:0; margin: 0; line-height: 40px; " /> 
                        </span>
                        </div>
                        

                    </form>  
                      
                      
                  </div>
                  
              </div>
        </div>
     
                        

           
          </div>
<?php if (count($viagens) > 0): ?>

<?php if ($nomeuser == 'roseli' or $nomeuser == 'rubens'): ?>    
<div class="box">
<div class="box-body no-padding">        
<table class="table table-striped table-hover">                    
<thead>
<tr>
  <th>Total Geral - Adiantamento (R$)</th>
  <th>Total Geral - Despesa (R$)</th>
  <th>Total Geral - Devolução (R$)</th>  
</tr>
</thead>
<tbody>
    <?php 
         
         if ($nomeuser == 'roseli' or $nomeuser == 'rubens') {
             $soma_adiantamento = 0;
             $soma_desconto = 0; 
             foreach($adiantamentos as $adiantamento) {
                 $soma_adiantamento += $adiantamento['valor_adiantamento'];
             }
              foreach($despesas as $despesa) {
                 $soma_desconto += $despesa['valor_despesa'];
             }
             
         }
         
    ?>
    <tr>
        <td><?php echo number_format($soma_adiantamento,2,',','.'); ?></td>
        <td><?php echo number_format($soma_desconto,2,',','.'); ?></td>
        <td><?php echo number_format($soma_adiantamento-$soma_desconto,2,',','.'); ?></td>
    </tr>
</tbody>
</table>
    
</div>     
</div> 
<?php endif; ?>

<div class="box">
<div class="box-body no-padding">    
    
<table class="table table-striped table-hover">                    
<thead>
<tr>
  <th style="width: 10px">ID</th>
  <th>Data</th>
  <th>Cliente</th>     
  <?php if ($nomeuser == 'roseli' or $nomeuser == 'rubens'): ?>
  <th>Adiantamento (R$)</th>
  <th>Despesa (R$)</th>
  <th>Devolução (R$)</th>
  <?php endif; ?>
  <th>Ações</th>                  
</tr>
</thead>
<tbody>
    
<?php foreach($viagens as $viagem): ?>
                                          
    <tr>                    
      <td><?php echo $viagem['id']; ?></td>
      <td><?php echo date('d/m/Y', strtotime($viagem['data'])); ?></td>
      <td><?php echo utf8_encode($viagem['nome']); ?></td>
      <?php if ($nomeuser == 'roseli' or $nomeuser == 'rubens'): ?>
        <td><?php echo number_format($viagem['valor_adiantamento'],2,',','.'); ?></td>
        <td><?php echo number_format($viagem['valor_despesa'],2,',','.'); ?></td>
        <td><?php echo number_format($viagem['valor_adiantamento']-$viagem['valor_despesa'],2,',','.'); ?></td>
      <?php endif; ?>
      <td>
         <?php if ($nomeuser != 'roseli' and $nomeuser != 'rubens'): ?>
            <a class="btn btn-warning btn-sm" href="<?php echo BASE_URL; ?>painel/viagem/editar/<?php echo $viagem['id']; ?>">Editar Viagem</a>                   
            <a class="btn btn-success btn-sm" href="<?php echo BASE_URL; ?>painel/viagem/prestacao/<?php echo $viagem['id']; ?>">Prestação de Contas</a>
          <?php endif; ?>          
         <a class="btn btn-info btn-sm" href="<?php echo BASE_URL; ?>painel/viagem/imprimir/<?php echo $viagem['id']; ?>" target='_blank'>Rel. Viagem PDF</a>
         <a class="btn btn-info btn-sm" href="<?php echo BASE_URL; ?>painel/viagem/imprimirHTML/<?php echo $viagem['id']; ?>" target='_blank'>Rel. Viagem HTML</a>
         <a class="btn btn-info btn-sm" href="<?php echo BASE_URL; ?>painel/viagem/prestacaoImp/<?php echo $viagem['id']; ?>" target='_blank'>Rel. Prestação</a>
         <?php if ($nomeuser != 'roseli' and $nomeuser != 'rubens'): ?>
         <a class="btn btn-danger btn-sm" href="<?php echo BASE_URL; ?>painel/viagem/excluir/<?php echo $viagem['id']; ?>">Excluir</a>
         <?php endif; ?>     
      </td>                      
    </tr>
<?php endforeach; ?>                      
</tbody> 
</table>

</div> 
    
</div>    



<div class="box-footer clearfix">                    
                    <ul class="pagination pagination-sm no-margin pull-left">
                                <?php for($q=1;$q<=$total_paginas; $q++): ?>
                                        <li class="<?php echo($p==$q)?'active':''; ?>"><a href="<?php echo BASE_URL; ?>painel/viagem?<?php 
                                        $w = $_GET;
                                        $w['p'] = $q;                                        
                                        echo http_build_query($w);
                                        ?>"><?php echo $q; ?></a></li>
                                <?php endfor; ?>       
                                        
		    </ul>                    
</div>

    


<?php endif; ?>