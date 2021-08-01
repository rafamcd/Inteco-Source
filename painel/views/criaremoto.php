<h3>Manutenção de Áreas Remotas</h3>

    
        <div class="box">
            <div class="box-body no-padding">
                <table class="table table-striped table-hover">
                    <thead>
                  <tr>
                    <th width="10%">ID</th>
                    <th width="50%">Nome</th>                    
                    <th width="40%">Ações</th>                    
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
                          <td>
                           <a href="<?php echo BASE_URL; ?>painel/criaremoto/edit/<?php echo $cliente['id']; ?>" class="btn btn-warning">Editar Acessos</a>                           
                        </td>  
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>


    




