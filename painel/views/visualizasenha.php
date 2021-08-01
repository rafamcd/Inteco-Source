<div class="box-header">
              
        <div class="col-md-7">          
            <div class="box-body">                            
                <div class="row">
                    
                        <form method="GET">
                            <div class="col-md-10">
                            <select id="cli" name="cli" class="form-control" required>  
                                <option>Selecione o Cliente desejado</option>
                                <?php foreach($clientes as $cliente): ?>                      
                                    <option value="<?php echo $cliente['id']; ?>"><?php echo utf8_encode($cliente['nome']); ?></option>
                                <?php endforeach; ?>  
                            </select>   
                                </div>  
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-warning" value="Ver Senhas" />  
                            </div>
                        </form>                
                                      
                </div>
            </div>
        </div>                          
</div>
    
            
                
                
                    <div class="box">
                        <div class="box-body no-padding">
                            <table class="table table-striped table-hover">
                    <thead>
                  <tr>
                    <th>ID</th>
                    <th>Sistema</th>
                    <th>Senha</th>
                    <th>Vencimento</th>                                                            
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($senhas as $senha): ?>
                      <tr>
                          <td>
                            <?php echo $senha['id_sistema']; ?>  
                          </td>
                          <td>
                            <?php echo utf8_encode($senha['nome_sistema']); ?>    
                          </td>
                          <td>
                            <?php echo $senha['senha']; ?>   
                          </td>
                          <td>
                            <?php 
                            echo date('d/m/Y', strtotime("-1 days",strtotime($senha['final_acesso'])));                                  
                            ?>                            
                          </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                 </table>
                        </div>
                    </div>
                    
                    
                
            
            
            

