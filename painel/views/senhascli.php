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
                    
                    
                
            
            
            

