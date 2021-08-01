<h3>Clientes Sem Senha</h3>    
        <div class="box">
            <div class="box-body no-padding">
                <table class="table table-striped table-hover">
                    <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($clientes as $cliente): ?>
                      <tr>
                          <td>
                            <?php echo $cliente['id']; ?>  
                          </td>
                          <td>
                            <?php echo utf8_encode($cliente['nome']); ?>    
                          </td>                          
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>