<div class="box">
            <div class="box-header">
              <h3 class="box-title">Viagens 
                <small>[Registre suas viagens]</small>
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
                 
                <div class="row">
                <div class="col-sm-7"> 
                <select name="cli" id="cli" required class="form-control">
                    <?php foreach($clientes as $cliente): ?>
                    <option value="<?php echo $cliente['id']; ?>" <?php echo ($cliente['id'] == $dadosviagem['id_cliente'])?'selected="selected"':''; ?>><?php echo utf8_encode($cliente['nome']); ?></option>
                    <?php endforeach; ?>
                </select></div></div><br/>
                     
                <div class="row">
                <div class="col-sm-7">
                <div class="form-group">
                  <label for="solicitante">Solicitante: </label>
                  <input type="text" name="solicitante" class="form-control" id="solicitante" value="<?php echo utf8_encode($dadosviagem['solicitante']); ?>">
                </div> </div></div>
                     
                <div class="row">

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="data">Data de Chegada: </label>
                        <input type="date" name="data" class="form-control" id="data" value="<?php echo date('Y-m-d', strtotime($dadosviagem['data'])); ?>">
                    </div>
                    </div>

                    <div class="col-sm-2">
                    <div class="form-group">
                        <label for="datasaida">Data de Saída: </label>
                        <input type="date" name="datasaida" class="form-control" id="datasaida" value="<?php echo date('Y-m-d', strtotime($dadosviagem['data_saida'])); ?>">
                    </div>
                    </div>

                </div>     
                     
                <div class="row">

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="horachegada">Hora Chegada: </label>
                            <input type="time" name="horachegada" class="form-control" id="horachegada" value="<?php echo $dadosviagem['hora_chegada']; ?>">
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="horasaida">Hora Saída: </label>
                            <input type="time" name="horasaida" class="form-control" id="horasaida" value="<?php echo $dadosviagem['hora_saida']; ?>">
                        </div>
                    </div>

                </div>
                     
                <div class="form-group">
                  <label for="anotacao">Descreva o que foi feito: </label>
                  <textarea name="anotacao" class="textarea" placeholder="Digite aqui a anotação."
                            style="width: 100%; height: 900px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" autofocus required>
                  <?php echo utf8_encode($dadosviagem['anotacao']); ?>             
                  </textarea>
                </div> 
                
                <div class="form-group">
                    <div class="input-group">                      
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>                    
                  </div>  
              </form>
            </div>
          </div>
