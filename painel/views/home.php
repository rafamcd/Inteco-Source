<div class="row">
    
    <div class="col-sm-8">
        
        <div class="col-sm-9">            
            <h1>Painel Administrativo</h1><br/>
        <div class="panel panel-default">
            
            <div class="panel-heading"><strong>Sincronização de Senhas</strong></h4></div>
            <div class="panel-body">
                Última atualização de senhas realizada em:
                <strong><?php echo date('d/m/Y - H:i', strtotime($ultima_sinc)); ?></strong>
                
            </div>
        </div>    
            
            <?php if ($_SESSION['tipouser'] != '3'):            
             ?>
            <div class="panel panel-default">
            <div class="panel-heading"><strong>Atalhos</strong></h4></div>
            <div class="panel-body">
                <a href="<?php echo BASE_URL; ?>painel/arearemota"><img src="<?php echo BASE_URL; ?>painel/assets/images/remoto.jpg" class="img-fluid float-right" alt="Responsive image"></a> 
                <a href="<?php echo BASE_URL; ?>painel/viagem"><img src="<?php echo BASE_URL; ?>painel/assets/images/viagem.jpg" class="img-fluid float-right" alt="Responsive image"></a> 
                <a href="<?php echo BASE_URL; ?>painel/visualizasenha"><img src="<?php echo BASE_URL; ?>painel/assets/images/senha-small.jpg" class="img-fluid float-right" alt="Responsive image"></a>
                <a href="<?php echo BASE_URL; ?>painel/lic"><img src="<?php echo BASE_URL; ?>painel/assets/images/lic.jpg" class="img-fluid float-right" alt="Responsive image"></a>
                <a href="<?php echo BASE_URL; ?>painel/minhasnote"><img src="<?php echo BASE_URL; ?>painel/assets/images/notes.jpg" class="img-fluid float-right" alt="Responsive image"></a>
            </div>
            </div>
            <?php endif; ?>
             
        </div>
    </div>
    <div class="col-sm-4">
        <img src="<?php echo BASE_URL; ?>painel/assets/images/banner-painel.jpg" class="img-fluid float-right" alt="Responsive image">
    </div>
</div>
