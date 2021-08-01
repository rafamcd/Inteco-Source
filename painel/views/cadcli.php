<h3>Clientes</h3>
<div class="box">
    <div class="box-header">
      <div class="row">
        <div class="col-md-2">
          <div>            
            <div class="box-body">
                <h3 class="box-title">
                    <a href="<?php echo BASE_URL; ?>painel/cadcli/add" class="btn btn-info">Adicionar Cliente</a>
                </h3>
            </div>            
          </div>          
        </div>
        <div class="col-md-7">          
            <div class="box-body">                            
                <div class="row">
                        <form method="GET">                    
                            <div class="col-md-5">
                                <select id="categoria" name="filtros[tipo]" class="form-control">
                                  <option value="" selected>Filtrar por Categoria</option>
                                      <option value="4"<?php echo('4' == $filtros['tipo'])?'selected="selected"':''; ?>>Câmara</option>
                                      <option value="1"<?php echo('1' == $filtros['tipo'])?'selected="selected"':''; ?>>Prefeitura</option>
                                      <option value="2"<?php echo('2' == $filtros['tipo'])?'selected="selected"':''; ?>>Instituto</option>
                                      <option value="3"<?php echo('3' == $filtros['tipo'])?'selected="selected"':''; ?>>Autarquia</option>
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
                    <th>Ações</th>                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($clientes as $cliente): ?>
                      <tr>                    
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo utf8_encode($cliente['nome']); ?></td>
                        <td><?php echo $cliente['fone']; ?></td>
                        <td>
                           <a href="<?php echo BASE_URL; ?>painel/cadcli/edit/<?php echo $cliente['id']; ?>" class="btn btn-success">Editar</a>
                           <a href="<?php echo BASE_URL; ?>painel/cadcli/remove/<?php echo $cliente['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>                      
                      </tr>
                  <?php endforeach; ?>                      
                  </tbody> 
                  </table>
                <div class="box-footer clearfix">                    
                    <ul class="pagination pagination-sm no-margin pull-left">
                                <?php for($q=1;$q<=$total_paginas; $q++): ?>
                                        <li class="<?php echo($p==$q)?'active':''; ?>"><a href="<?php echo BASE_URL; ?>painel/cadcli?<?php 
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
