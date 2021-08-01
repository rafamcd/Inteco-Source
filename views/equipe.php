
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Equipe Inteco</h2>
		            </div>
	            </div>
	            <div class="row">
                        
                        <?php foreach($funcionarios as $funcionario): ?>
                        
                        <div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="<?php echo BASE_URL; ?>painel/assets/images/funcionarios/<?php echo $funcionario['imagem']; ?>" alt="Equipe Inteco" data-at2x="<?php echo BASE_URL; ?>painel/assets/images/funcionarios/<?php echo $funcionario['imagem']; ?>">
                                    <h3><?php echo utf8_encode($funcionario['nome']); ?></h3>
                                    <h3><?php echo utf8_encode($funcionario['descricao']); ?></h3>
                                    <?php $data = explode('-',$funcionario['data_nascimento']); 
                                          $data_nasc = $data[2].'/'.$data[1].'/'.$data[0];
                                    ?>
                                    <p><?php echo 'Data de Nascimento: '.$data_nasc ?></p>
                                    <p><?php echo 'Telefone: '.$funcionario['fone'] ?></p>
                                    <p><?php echo 'E-mail: '.$funcionario['email'] ?></p>
                                    <p><?php echo 'Skype: '.$funcionario['skype'] ?></p>                                    
                                    
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="<?php echo BASE_URL; ?>painel/assets/images/funcionarios/<?php echo $funcionario['imagem']; ?>"><i class="fa fa-eye"></i></a>		                        
		                    </div>
		                </div>
	                </div>
                        
                        <?php endforeach; ?>
                        
                        
		        
		            
	            </div>
	        </div>
        </div>