<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Clientes <small>[Editar]</small></h3>
            </div>
            <form method="POST" role="form" enctype="multipart/form-data">                
                <div class="box-body">
                    
                   <div class="form-group">
                    <div class="row">
                    <div class="col-md-8">
                        <div>            
                          <div class="box-body">
                            <label>ID (Igual do Assessor) <small>[Compatibilidade de Senhas]</small></label>
                            <input type="number" name="id" class="form-control" disabled value="<?php echo $cliente['id']; ?>">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome do Cliente." required value="<?php echo utf8_encode($cliente['nome']); ?>">
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone do Cliente." value="<?php echo $cliente['fone']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="Digite o CNPJ do Cliente." value="<?php echo $cliente['cpf_cnpj']; ?>">
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="endereco_rua">Endereço</label>
                                <input type="text" name="endereco_rua" class="form-control" id="endereco_rua" placeholder="Digite a rua do Cliente." value="<?php echo utf8_encode($cliente['endereco_rua']); ?>">
                            </div>

                            <div class="form-group">
                                <label for="endereco_bairro">Bairro</label>
                                <input type="text" name="endereco_bairro" class="form-control" id="endereco_bairro" placeholder="Digite o bairro do Cliente." value="<?php echo utf8_encode($cliente['endereco_bairro']); ?>">
                            </div>

                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" name="cep" class="form-control" id="cep" placeholder="Digite o CEP do Cliente." value="<?php echo $cliente['endereco_cep']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Digite o e-mail do Cliente." value="<?php echo $cliente['email']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="site">Site</label>
                                <input type="text" name="site" class="form-control" id="site" placeholder="Digite o site do Cliente." value="<?php echo $cliente['site']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="site_portal">Portal da Transparência</label>
                                <input type="text" name="site_portal" class="form-control" id="site_portal" placeholder="Digite o endereço do Portal da Transparência do Cliente." value="<?php echo $cliente['site_portal']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="site_einf">E-Informações</label>
                                <input type="text" name="site_einf" class="form-control" id="site_einf" placeholder="Digite o endereço do E-Informações do Cliente." value="<?php echo $cliente['site_einf']; ?>">
                            </div>

                            <div class="form-group">
                                  <label for="tipo">Categoria: </label>
                                  <select name="tipo" class="form-control" required>                                                
                                      <option value="0" <?php echo('0' == $cliente['tipo'])?'selected="selected"':''; ?>>Câmara</option>
                                      <option value="1" <?php echo('1' == $cliente['tipo'])?'selected="selected"':''; ?>>Prefeitura</option>
                                      <option value="2" <?php echo('2' == $cliente['tipo'])?'selected="selected"':''; ?>>Instituto</option>
                                      <option value="3" <?php echo('3' == $cliente['tipo'])?'selected="selected"':''; ?>>Autarquia</option>                        
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
                                    <img src="<?php echo BASE_URL; ?>painel/assets/images/clientes/<?php echo $cliente['imagem']; ?>" class="img-thumbnail" />
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

                                  <a href="<?php echo BASE_URL; ?>painel/cadcli" class="btn btn-danger">Fechar</a>

                        </div>                
                    </div>
                    </div>
                </div>
                </div>
                
                
            </form>
</div>    
</div>


