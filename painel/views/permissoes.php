<h3>Permissões de Grupos de Usuário</h3>
<div class="box">
            
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped table-hover"">
                    <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Descrição</th>
                    <th>Ações</th>                  
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($grupos as $grupo): ?>
                      <tr>                    
                        <td><?php echo $grupo['id']; ?></td>
                        <td><?php echo utf8_encode($grupo['descricao']); ?></td>
                        <td>
                           <a href="<?php echo BASE_URL; ?>painel/permissoes/edit/<?php echo $grupo['id']; ?>" class="btn btn-warning">Permissões</a>                           
                        </td>                      
                      </tr>
                  <?php endforeach; ?>
                  </tbody>
                 </table>
            </div>
            <!-- /.box-body -->
</div>