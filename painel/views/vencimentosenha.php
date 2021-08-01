<h3>Vencimentos das Senhas</h3>

    
        <div class="box">
            <div class="box-body no-padding">
                <table class="table table-striped table-hover">
                    <thead>
                  <tr>
                    <th width="10%">ID</th>
                    <th width="50%">Nome</th>                    
                    <th width="40%">Vencimento</th>                    
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


    




