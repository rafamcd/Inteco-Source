<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Usuários <small>[Adicionar]</small></h3>
            </div>
            <form method="POST" role="form" enctype="multipart/form-data">                
                <div class="box-body">
                    
                 <div class="form-group">
                  <label for="user">Usuário</label>
                  <input type="text" name="user" class="form-control" id="user" placeholder="Digite o Usuário." autofocus required>
                </div>
                    
                 <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a senha do Usuário." required>
                </div>
                
                <div class="form-group">
                    <label for="id_cliente">Cliente </label>
                    <select name="id_cliente" class="form-control">   
                        <option value="">Caso usuário de funcionário, deixe em branco</option>
                        <?php foreach($clientes as $cliente): ?>
                                            <option value="<?php echo $cliente['id']; ?>"><?php echo utf8_encode($cliente['nome']); ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>          
                
                <div class="form-group">
                    <label for="id_funcionario">Funcionário </label>
                    <select name="id_funcionario" class="form-control">   
                        <option value="">Caso usuário de cliente, deixe em branco</option>
                        <?php foreach($funcionarios as $funcionario): ?>
                                            <option value="<?php echo $funcionario['id']; ?>"><?php echo utf8_encode($funcionario['nome']); ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>   
                    
                <div class="form-group">
                    <label for="grupo_usuario_id">Grupo de Usuário </label>
                    <select name="grupo_usuario_id" class="form-control" required>   
                        <option value=""></option>
                        <?php foreach($grupos as $grupo): ?>
                                            <option value="<?php echo $grupo['id']; ?>"><?php echo utf8_encode($grupo['descricao']); ?></option>
                         <?php endforeach; ?>
                    </select>
                </div> 
                    
               <div class="form-group">
                    <label for="imagem">Imagem </label><br/>                                  
                    <div class="btn btn-default btn-sm float-left">                                        
                          <input type="file" name="imagem" id="imagem">
                      </div>
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

                                  <a href="<?php echo BASE_URL; ?>painel/caduser" class="btn btn-danger">Fechar</a>

                        </div>                
                    </div>
                    </div>
                </div>
                            
                </div>
            </form>                
</div>
</div>


