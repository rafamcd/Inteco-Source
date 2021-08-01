
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Clientes</h2>
		            </div>
	            </div>
	            <div class="row">                        
                        <?php foreach($clientes as $cliente): ?>                        
                        <div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="<?php echo BASE_URL; ?>painel/assets/images/clientes/<?php echo $cliente['imagem']; ?>" alt="Clientes" data-at2x="<?php echo BASE_URL; ?>painel/assets/images/clientes/<?php echo $cliente['imagem']; ?>">
                                    <h3><?php echo utf8_encode($cliente['nomeabr']); ?></h3>
                                    <h3><?php echo $cliente['fone']; ?></h3>
                                    
                                    <p><?php echo 'Endereço: '.utf8_encode($cliente['endereco_rua']); ?></p>
                                    <p><?php echo 'Bairro: '.utf8_encode($cliente['endereco_bairro']); ?></p>
                                    <p><?php echo 'CEP: '.$cliente['endereco_cep']; ?></p>
                                    <p><a href="<?php echo $cliente['site']; ?>" target="_blank">Site</a></p>
                                    <p><a href="<?php echo $cliente['site_portal']; ?>" target="_blank">Portal da Transparência</a></p>
                                    <p><a href="<?php echo $cliente['site_einf']; ?>" target="_blank">E-Informações</a></p>
                                    
                                    
		                    
		                </div>
	                </div>
                        
                        <?php endforeach; ?>
                        
                        
		        
		            
	            </div>
	        </div>
        </div>