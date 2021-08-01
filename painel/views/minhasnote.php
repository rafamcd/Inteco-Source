<div class="box">
            <div class="box-header">
              <h3 class="box-title">Anotações 
                <small>[Registre suas anotações e lembretes]</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Minimizar">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Fechar">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <form method="POST" role="form">
                <textarea name="anotacao" class="textarea" placeholder="Digite aqui a anotação."
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" autofocus required></textarea>
                <div class="form-group">
                    <div class="input-group">                      
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>                    
                  </div>  
              </form>
            </div>
          </div>
<?php if (count($anotacoes) > 0): ?>

<?php foreach($anotacoes as $anotacao): ?>

<div class="panel panel-primary">
					<div class="panel-heading"><strong>Anotação inserida em: <?php echo date('d/m/Y - H:i', strtotime($anotacao['data'])); ?></strong></h4></div>
                                        <div class="panel-body">
                                            <?php echo utf8_encode($anotacao['anotacao']); ?>
                                            <a class="btn btn-danger btn-sm" href="<?php echo BASE_URL; ?>painel/minhasnote/excluir/<?php echo $anotacao['id']; ?>">Excluir</a>    
                                        </div>
</div>                                       
<?php endforeach; ?>
<div class="box-footer clearfix">                    
                    <ul class="pagination pagination-sm no-margin pull-left">
                                <?php for($q=1;$q<=$total_paginas; $q++): ?>
                                        <li class="<?php echo($p==$q)?'active':''; ?>"><a href="<?php echo BASE_URL; ?>painel/minhasnote?<?php 
                                        $w = $_GET;
                                        $w['p'] = $q;                                        
                                        echo http_build_query($w);
                                        ?>"><?php echo $q; ?></a></li>
                                <?php endfor; ?>                                        
		    </ul>                    
</div>
<?php endif; ?>