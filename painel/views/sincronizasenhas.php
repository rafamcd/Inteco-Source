<?php 
//include BASE_URL.'painel/libraries/email.php';
?>
<div class="box-header">
              
        <div class="col-md-7">          
            <div class="box-body">                            
                <div class="row">
                    
                        <form method="POST">
                            <input type="hidden" name="senha" value="1" /> 
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-warning" value="Sincronizar Senhas" /> 
                               
                            </div>
                            <div class="col-md-9">
                                <p><strong>[O processo de sincronização pode demorar alguns segundos.]</strong></p>
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
                    <th>Vencimento</th>                                                            
                  </tr>
                  </thead>
                  <tbody>
                     <?php foreach($vencimentos as $cliente): ?>
                      <tr>
                          <td>
                            <?php echo $cliente['id']; ?>  
                          </td>
                          <td>
                            <?php echo utf8_encode($cliente['nome']); ?>    
                          </td>    
                          <td>
                           <?php 
                            echo date('d/m/Y', strtotime("-1 days",strtotime($cliente['final_acesso'])));                                  
                            ?>  
                          </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                 </table>
                        </div>
                    </div>
                    
                    
                
            
            
            

