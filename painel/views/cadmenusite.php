<h3>Menus do Site</h3>
<div class="box">
    <div class="box-header">
      <div class="row">
        <div class="col-md-2">
          <div>            
            <div class="box-body">
                <h3 class="box-title">
                    <a href="<?php echo BASE_URL; ?>painel/cadmenusite/add" class="btn btn-info">Adicionar Menu</a>
                </h3>
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
                    <th>Descrição</th>                                        
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($menus as $menu): ?>
                      <tr>                    
                        <td><?php echo $menu['id']; ?></td>
                        <td><?php echo utf8_encode($menu['descricao']); ?></td>                        
                        <td>
                           <a href="<?php echo BASE_URL; ?>painel/cadmenusite/remove/<?php echo $menu['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>                      
                      </tr>
                  <?php endforeach; ?>                      
                 </tbody>
                 </table>                
            </div>
            <!-- /.box-body -->
            
</div>
