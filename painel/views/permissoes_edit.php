<div class="row"></div>
<div class="row">
    <div class="col-md-6">
        
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permissões do Grupo: <strong><?php echo utf8_encode($gruponome['descricao']); ?></strong> - <small>[Editar]</small></h3>
            </div>
            <form method="POST" role="form">
              <div class="box-body">
                  
                  <?php foreach($permissoes as $p): ?>
                  <?php 
                    $var ='';
                    if (!empty($p['id_grupousuarios'])) {
                        $var = "checked='checked'";
                    } else {
                        $var = '';
                    }
                  ?>
                  <div class="form-group">                    
                      <label><input type="checkbox" name="check<?php echo $p['id_menu']; ?>" <?php echo $var; ?>> <?php echo utf8_encode($p['descricao']); ?></label><br/>                 
                  </div>               
                  
                  <?php endforeach; ?>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  
                </div>               
              </div>
              
            </form> 
        </div>
    </div>
</div>    