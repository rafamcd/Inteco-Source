<h3>Usuários</h3>
<div class="box">
    <div class="box-header">
      <div class="row">
        <div class="col-md-2">
          <div>            
            <div class="box-body">
                <h3 class="box-title">
                    <a href="<?php echo BASE_URL; ?>painel/caduser/add" class="btn btn-info">Adicionar Usuário</a>
                </h3>
            </div>            
          </div>          
        </div>
        <div class="col-md-7">          
            <div class="box-body">                            
                <div class="row">
                        <form method="GET">                    
                            <div class="col-md-5">
                                <select id="grupos" name="filtros[grupos]" class="form-control">
                                  <option value="" selected>Filtrar por Grupo</option>
                                      <?php foreach($grupos as $grupo): ?>
                                            <option value="<?php echo $grupo['id']; ?>"<?php echo($grupo['id'] == $filtros['grupos'])?'selected="selected"':''; ?>><?php echo utf8_encode($grupo['descricao']); ?></option>
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
            
                <table class="table table-striped table-hover">
                   <thead>
                    <tr>
                    <th style="width: 10px">ID</th>
                    <th>Login</th>                    
                    <th>Nome</th>                    
                    <th>Ações</th>                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($usuarios as $usuario): ?>
                      <tr>                    
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo utf8_encode($usuario['user']); ?></td>
                        <td>
                            <?php 
                            if (!empty($usuario['nomec'])) {
                                echo utf8_encode($usuario['nomec']);
                            } else {
                                echo utf8_encode($usuario['nomef']);
                            }
                            ?>
                        </td>
                        <td>
                           <a href="<?php echo BASE_URL; ?>painel/caduser/edit/<?php echo $usuario['id']; ?>" class="btn btn-success">Editar</a>
                           <a href="<?php echo BASE_URL; ?>painel/caduser/remove/<?php echo $usuario['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>                      
                      </tr>
                  <?php endforeach; ?>                      
                 </tbody>
                 </table>
                <div class="box-footer clearfix">                    
                    <ul class="pagination pagination-sm no-margin pull-left">
                                <?php for($q=1;$q<=$total_paginas; $q++): ?>
                                        <li class="<?php echo($p==$q)?'active':''; ?>"><a href="<?php echo BASE_URL; ?>painel/caduser?<?php 
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
