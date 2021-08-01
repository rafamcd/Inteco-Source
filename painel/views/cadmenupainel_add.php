<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Menu Painel <small>[Adicionar]</small></h3>
            </div>
            <form method="POST" role="form">                
                <div class="box-body">
                    
                 <div class="form-group">
                  <label for="descricao">Descrição</label>
                  <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Digite o título do Menu." autofocus required>
                </div>
                    
                 <div class="form-group">
                  <label for="url">URL Controller</label>
                  <input type="text" name="url" class="form-control" id="url" placeholder="Digite a url Controller do Menu. Caso tenha submenu, deixe em branco">
                </div>
                    
                <div class="form-group">
                  <label for="class_bootstrap">Classe Bootstrap</label>
                  <input type="text" name="class_bootstrap" class="form-control" id="class_bootstrap" placeholder="Digite a class do ícone Bootstrap (ex: fa fa-home)">
                </div>
                    
                <div class="form-group">
                  <label for="sub1">SubMenu 1</label>
                  <input type="text" name="sub1" class="form-control" id="sub1" placeholder="Caso não tenha submenu, deixe em branco.">
                </div>
                <div class="form-group">
                  <label for="sub1c">URL Controller do SubMenu 1</label>
                  <input type="text" name="sub1c" class="form-control" id="sub1c" placeholder="Caso não tenha submenu, deixe em branco.">
                </div>
                
                <div class="form-group">
                  <label for="sub2">SubMenu 2</label>
                  <input type="text" name="sub2" class="form-control" id="sub2" placeholder="Caso não tenha submenu, deixe em branco.">
                </div>
                
                <div class="form-group">
                  <label for="sub2c">URL Controller do SubMenu 2</label>
                  <input type="text" name="sub2c" class="form-control" id="sub2c" placeholder="Caso não tenha submenu, deixe em branco.">
                </div>
                
                <div class="form-group">
                  <label for="sub1">SubMenu 3</label>
                  <input type="text" name="sub3" class="form-control" id="sub3" placeholder="Caso não tenha submenu, deixe em branco.">
                </div>        
                <div class="form-group">
                  <label for="sub3c">URL Controller do SubMenu 3</label>
                  <input type="text" name="sub3c" class="form-control" id="sub3c" placeholder="Caso não tenha submenu, deixe em branco.">
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

                                  <a href="<?php echo BASE_URL; ?>painel/cadmenupainel" class="btn btn-danger">Fechar</a>

                        </div>                
                    </div>
                    </div>
                </div>
                            
                </div>
            </form>                
</div>
</div>


