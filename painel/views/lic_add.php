<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Licença de Uso <small>[Adicionar]</small></h3>
            </div>
            <form method="POST" role="form" enctype="multipart/form-data">                
                <div class="box-body">
                    
                  
                    
                <div class="form-group">
                    <label for="id">Cliente </label>
                    <select name="id" class="form-control" required>   
                        <option value=""></option>
                        <?php foreach($clientes as $cliente): ?>
                                            <option value="<?php echo $cliente['id']; ?>"><?php echo utf8_encode($cliente['nome']); ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>     
                    
                <div class="form-group">
                    <label for="lic">Licença de Uso</label>
                    <input type="file" name="lic" id="lic" class="form-control" />                
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

                                  <a href="<?php echo BASE_URL; ?>painel/lic" class="btn btn-danger">Fechar</a>

                        </div>                
                    </div>
                    </div>
                </div>
                            
                </div>
            </form>                
</div>
</div>


