<h3>Funcionários</h3>
<div class="box">
    <div class="box-header">
      <div class="row">
        <div class="col-md-2">
          <div>            
            <div class="box-body">
                <h3 class="box-title">
                    <a href="<?php echo BASE_URL; ?>painel/cadfunc/add" class="btn btn-info">Adicionar Funcionário</a>
                </h3>
            </div>            
          </div>          
        </div>
        <div class="col-md-7">          
            <div class="box-body">                            
                <div class="row">
                        <form method="GET">                    
                            <div class="col-md-5">
                                <select id="setor" name="filtros[setor]" class="form-control">
                                  <option value="" selected>Filtrar por Setor</option>
                                      <?php foreach($setores as $setor): ?>
                                            <option value="<?php echo $setor['id']; ?>"<?php echo($setor['id'] == $filtros['setor'])?'selected="selected"':''; ?>><?php echo utf8_encode($setor['descricao']); ?></option>
                                      <?php endforeach; ?>
                                      
                              </select>
                            </div>  
                            <div class="col-md-2">
                              <input type="submit" class="btn btn-warning" value="Filtrar" />  
                            </div>  
                        </form> 
                    </div>
            </div>
        </div>        
</div>
                  
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            
                <table class="table table-striped table-hover"">
                    <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>                                        
                    <th>Skype</th>                                        
                    <th>Ações</th>                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($funcionarios as $funcionario): ?>
                      <tr>                    
                        <td><?php echo $funcionario['id']; ?></td>
                        <td><?php echo utf8_encode($funcionario['nome']); ?></td>                        
                        <td><?php echo $funcionario['fone']; ?></td>                        
                        <td><?php echo $funcionario['skype']; ?></td>                        
                        <td>
                           <a href="<?php echo BASE_URL; ?>painel/cadfunc/edit/<?php echo $funcionario['id']; ?>" class="btn btn-success">Editar</a>
                           <a href="<?php echo BASE_URL; ?>painel/cadfunc/remove/<?php echo $funcionario['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>                      
                      </tr>
                  <?php endforeach; ?>
                  </tbody>
                 </table>
                <div class="box-footer clearfix">                    
                    <ul class="pagination pagination-sm no-margin pull-left">
                                <?php for($q=1;$q<=$total_paginas; $q++): ?>
                                        <li class="<?php echo($p==$q)?'active':''; ?>"><a href="<?php echo BASE_URL; ?>painel/cadfunc?<?php 
                                        $w = $_GET;
                                        $w['p'] = $q;                                        
                                        echo http_build_query($w);
                                        ?>"><?php echo $q; ?></a></li>
                                <?php endfor; ?>                                        
		    </ul>                    
                </div>
            </div>
            <!-- /.box-body -->
            
</div>
