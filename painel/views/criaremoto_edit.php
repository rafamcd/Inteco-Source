<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Acessos <small>[Editar]</small></h3>
            </div>
            <form method="POST" role="form">                
                <div class="box-body">
                    
                    
                    <?php $i = 0; ?>
                    <?php foreach($arearemota as $usuario): ?>
                    <?php $i++; ?>
                    <div class="form-group">
                      <label for="usuario<?php echo $i; ?>">Usuário</label>
                      <input type="text" name="usuario<?php echo $i; ?>" class="form-control" id="usuario<?php echo $i; ?>" placeholder="Digite o Usuário." autofocus value="<?php echo utf8_encode($usuario['usuario']); ?>">
                    </div>                    
                    <?php endforeach; ?>
                    <?php 
                        $i++;                    
                    ?>
                    <div class="form-group">
                      <label for="usuario<?php echo $i; ?>">Usuário</label>
                      <input type="text" name="usuario<?php echo $i; ?>" class="form-control" id="usuario<?php echo $i; ?>" placeholder="Digite o Usuário.">
                    </div>    
                    <?php 
                        $i++;                    
                    ?>
                    <div class="form-group">
                      <label for="usuario<?php echo $i; ?>">Usuário</label>
                      <input type="text" name="usuario<?php echo $i; ?>" class="form-control" id="usuario<?php echo $i; ?>" placeholder="Digite o Usuário.">
                    </div> 
                    <?php 
                        $i++;                    
                    ?>
                    <div class="form-group">
                      <label for="usuario<?php echo $i; ?>">Usuário</label>
                      <input type="text" name="usuario<?php echo $i; ?>" class="form-control" id="usuario<?php echo $i; ?>" placeholder="Digite o Usuário.">
                    </div> 

                     
                    
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-2">
                        <div>            
                          <div class="box-body">
                              <input type="submit" value="Salvar" class="btn btn-primary" />

                          </div>            
                        </div>          
                    </div>
                    <div class="col-md-2">          
                        <div class="box-body">   
                                  <a href="<?php echo BASE_URL; ?>painel/criaremoto" class="btn btn-danger">Fechar</a>
                        </div>                
                    </div>
                    </div>
                </div>
                </div>
            </form>
</div>    
</div>


