<h3>Grupos de Usuários</h3>
<div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    <a href="<?php echo BASE_URL; ?>painel/grupouser/add" class="btn btn-info">Adicionar Novo Grupo</a>
                    </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped table-hover"">
                    <thead
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
                           <a href="<?php echo BASE_URL; ?>painel/grupouser/edit/<?php echo $grupo['id']; ?>" class="btn btn-success">Editar</a>
                           <a href="<?php echo BASE_URL; ?>painel/grupouser/remove/<?php echo $grupo['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>                      
                      </tr>
                  <?php endforeach; ?>
                  </tbody>
                 </table>
            </div>
            <!-- /.box-body -->
</div>