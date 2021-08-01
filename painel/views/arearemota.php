        <div class="box">            
            <div class="box-body no-padding">
                <div class="panel panel-info">            
                    <div class="panel-heading"><strong><center><h3>Controle de Acessos - Área Remota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo BASE_URL; ?>painel/arearemota" class="btn btn-warning">&nbsp;&nbsp;Atualizar&nbsp;&nbsp;</a></center></strong></h3></div>
                </div>
                
                
                <table class="table table-striped table-hover">
                    <thead>
                  <tr>
                    <th width="30%">Cliente</th>                    
                    <th width="20%">Usuário</th> 
                    <th width="20%">Logado</th> 
                    <th width="20%">Data/Hora</th>
                    <th width="10%">Ações</th>                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($clientes as $arearemota): ?>
                      <?php 
                        if (!empty($arearemota['nome2'])) {
                            $font = "red";
                        } else {
                            $font = "black";
                        }
                      ?>
                      <tr style="color: <?php echo $font ?>;">                         
                          <td>
                            <?php echo utf8_encode($arearemota['nome1']); ?>    
                          </td>  
                          <td>
                            <?php echo utf8_encode($arearemota['usuario']); ?>    
                          </td>
                          <td>
                              <strong><?php echo utf8_encode($arearemota['nome2']); ?></strong>
                          </td>
                          <td>
                              <strong><?php 
                              
                                if (date('d/m/Y', strtotime($arearemota['dataehora'])) != '01/01/1970') {
                                    echo date('d/m/Y - H:i', strtotime($arearemota['dataehora']));                                  
                                }                                
                                ?></strong>
                          </td>
                          <td>                              
                              <?php if (!empty($arearemota['usr'])): ?>
                                    <?php if ($_SESSION['user'] == $arearemota['usr']): ?>
                                    <a href="<?php echo BASE_URL; ?>painel/arearemota/edit/<?php echo $arearemota['id']; ?>" class="btn btn-info">Liberar</a>                           
                                    <?php endif; ?>
                                    <?php if ($_SESSION['user'] != $arearemota['usr']): ?>
                                    <a href="<?php echo BASE_URL; ?>painel/arearemota/edit/<?php echo $arearemota['id']; ?>" class="btn btn-info" disabled>Liberar</a>                           
                                    <?php endif; ?>
                              <?php endif; ?>
                              <?php if (empty($arearemota['usr'])): ?>
                                    <a href="<?php echo BASE_URL; ?>painel/arearemota/edit/<?php echo $arearemota['id']; ?>" class="btn btn-success">Acessar</a>                           
                              <?php endif; ?>      
                        </td>  
                      </tr>
                    <?php endforeach; ?>
                      
                  </tbody>
                </table>
            </div>
        </div>


    




