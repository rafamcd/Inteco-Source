<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Funcionários <small>[Editar]</small></h3>
            </div>
            <form method="POST" role="form" enctype="multipart/form-data">                
                <div class="box-body">
                    
                   <div class="form-group">
                    <div class="row">
                    <div class="col-md-8">
                        <div>            
                          <div class="box-body">
                            <label>ID</label>
                            <input type="number" name="id" class="form-control" disabled value="<?php echo $funcionario['id']; ?>">
                              
                              <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome do Funcionário." autofocus required value="<?php echo utf8_encode($funcionario['nome']); ?>">
                              </div>

                               <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" name="skype" class="form-control" id="skype" placeholder="Digite o skype do Funcionário." value="<?php echo utf8_encode($funcionario['skype']); ?>">
                              </div>
                            
                                <?php                                     
                                    $data_nascimento = $funcionario['data_nascimento'];
                                    
                                                                                                                              
                                ?>

                              <div class="form-group">
                                <label for="data_nascimento">Data de Nascimento</label>
                                <input type="date" name="data_nascimento" class="form-control" value="<?php echo $data_nascimento; ?>">
                              </div>

                              <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="fone" class="form-control" id="telefonecel" placeholder="Digite o telefone do Funcionário." value="<?php echo $funcionario['fone']; ?>">
                              </div>

                              <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o CPF do Funcionário." value="<?php echo $funcionario['cpf']; ?>">
                              </div>

                              <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Digite o e-mail do Funcionário." value="<?php echo $funcionario['email']; ?>">
                              </div>

                              <div class="form-group">
                                <label for="endereco_rua">Endereço</label>
                                <input type="text" name="endereco_rua" class="form-control" id="endereco_rua" placeholder="Digite a rua do Funcionário." value="<?php echo utf8_encode($funcionario['endereco_rua']); ?>">
                              </div>

                              <div class="form-group">
                                <label for="endereco_bairro">Bairro</label>
                                <input type="text" name="endereco_bairro" class="form-control" id="endereco_bairro" placeholder="Digite o bairro do Funcionário." value="<?php echo utf8_encode($funcionario['endereco_bairro']); ?>">
                              </div>

                              <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" name="cep" class="form-control" id="cep" placeholder="Digite o CEP do Funcionário." value="<?php echo $funcionario['endereco_cep']; ?>">
                              </div>

                            <div class="form-group">
                                  <label for="tipo">Setor: </label>
                                  <select name="tipo" class="form-control" required>  
                                      <?php foreach($setores as $setor): ?>
                                            <option value="<?php echo $setor['id']; ?>" <?php echo($setor['id'] == $funcionario['setor_id'])?'selected="selected"':''; ?>><?php echo utf8_encode($setor['descricao']); ?></option>
                                       <?php endforeach; ?>                                      
                                  </select>
                            </div>

                            <div class="form-group">
                                  <label for="imagem">Trocar Imagem</label>                                  
                                  <div class="btn btn-default btn-sm float-left">                                        
                                        <input type="file" name="imagem" id="imagem">
                                    </div>
                            </div>
                            
                          </div>            
                        </div>          
                    </div>
                    <div class="col-md-4">          
                        <div class="box-body">                                                               
                            
                                <div class="box-body">           
                                    <figure class="figure">        
                                    <img src="<?php echo BASE_URL; ?>painel/assets/images/funcionarios/<?php echo $funcionario['imagem']; ?>" class="img-thumbnail" />
                                             <figcaption class="figure-caption text-center">Imagem Atual</figcaption>
                                    </figure>
                                </div>                
                        </div>                
                    </div>
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
                                  <a href="<?php echo BASE_URL; ?>painel/cadfunc" class="btn btn-danger">Fechar</a>
                        </div>                
                    </div>
                    </div>
                </div>
                </div>
            </form>
</div>    
</div>


