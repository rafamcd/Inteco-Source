<div class="col-md-10">
<div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Configurações <small>[Editar]</small></h3>
            </div>
            <form method="POST" role="form" enctype="multipart/form-data">                
                <div class="box-body">
                    
                   <div class="form-group">
                    <div class="row">
                    <div class="col-md-10">
                        <div>            
                          <div class="box-body">
                            
                              <div class="form-group">
                                <label for="site_title">Título do Site</label>
                                <input type="text" name="site_title" class="form-control" id="site_title" placeholder="Digite o Título do Site" autofocus required value="<?php echo utf8_encode($config['site_title']); ?>">
                              </div>
                              <div class="row">
                                  <hr/>
                              <div class="form-group">
                                    <div class="col-md-5">          
                                          <div class="box-body">                                                               

                                                  <div class="box-body">           
                                                      <figure class="figure">        
                                                      <img src="<?php echo BASE_URL; ?>assets/configs/<?php echo $config['banner']; ?>" class="img-thumbnail" />
                                                               <figcaption class="figure-caption text-center">Imagem do Banner</figcaption>
                                                      </figure>
                                                  </div>                
                                          </div>                
                                      </div> 
                                      <div class="col-md-5">                           

                                        <label for="banner">Trocar Banner</label>                                  
                                        <div class="btn btn-default btn-sm float-left">                                        
                                              <input type="file" name="banner" id="banner">
                                          </div>
                                  </div>                            
                                </div>  
                              </div>
                              <div class="row">
                              <hr/>
                              <div class="form-group">
                                    <div class="col-md-5">          
                                          <div class="box-body">                                                               

                                                  <div class="box-body">           
                                                      <figure class="figure">        
                                                      <img src="<?php echo BASE_URL; ?>assets/configs/<?php echo $config['slide_img1']; ?>" class="img-thumbnail" />
                                                               <figcaption class="figure-caption text-center">Imagem 1 Slider</figcaption>
                                                      </figure>
                                                  </div>                
                                          </div>                
                                      </div> 
                                      <div class="col-md-5">                           

                                        <label for="slide_img1">Trocar Imagem 1 Slider</label>                                  
                                        <div class="btn btn-default btn-sm float-left">                                        
                                              <input type="file" name="slide_img1" id="slide_img1">
                                          </div>
                                  </div>                            
                                </div>  
                              </div>
                              <div class="row">
                              <hr/>
                              <div class="form-group">
                                    <div class="col-md-5">          
                                          <div class="box-body">                                                               

                                                  <div class="box-body">           
                                                      <figure class="figure">        
                                                      <img src="<?php echo BASE_URL; ?>assets/configs/<?php echo $config['slide_img2']; ?>" class="img-thumbnail" />
                                                               <figcaption class="figure-caption text-center">Imagem 2 Slider</figcaption>
                                                      </figure>
                                                  </div>                
                                          </div>                
                                      </div> 
                                      <div class="col-md-5">                           

                                        <label for="slide_img2">Trocar Imagem 2 Slider</label>                                  
                                        <div class="btn btn-default btn-sm float-left">                                        
                                              <input type="file" name="slide_img2" id="slide_img2">
                                          </div>
                                  </div>                            
                                </div>  
                              </div>
                              <div class="row">
                              <hr/>
                              <div class="form-group">
                                    <div class="col-md-5">          
                                          <div class="box-body">                                                               

                                                  <div class="box-body">           
                                                      <figure class="figure">        
                                                      <img src="<?php echo BASE_URL; ?>assets/configs/<?php echo $config['slide_img3']; ?>" class="img-thumbnail" />
                                                               <figcaption class="figure-caption text-center">Imagem 3 Slder</figcaption>
                                                      </figure>
                                                  </div>                
                                          </div>                
                                      </div> 
                                      <div class="col-md-5">                           

                                        <label for="slide_img3">Trocar Imagem 3 Slider</label>                                  
                                        <div class="btn btn-default btn-sm float-left">                                        
                                              <input type="file" name="slide_img3" id="slide_img3">
                                          </div>
                                  </div>                            
                                </div>  
                              </div>
                              <div class="row">
                              <hr/>                                  
                              <div class="form-group">
                                    <div class="col-md-5">          
                                          <div class="box-body">                                                               

                                                  <div class="box-body">           
                                                      <figure class="figure">        
                                                      <img src="<?php echo BASE_URL; ?>assets/configs/<?php echo $config['slide_img4']; ?>" class="img-thumbnail" />
                                                               <figcaption class="figure-caption text-center">Imagem 4 Slider</figcaption>
                                                      </figure>
                                                  </div>                
                                          </div>                
                                      </div> 
                                      <div class="col-md-5">                           

                                        <label for="slide_img4">Trocar Imagem 4 Slider</label>                                  
                                        <div class="btn btn-default btn-sm float-left">                                        
                                              <input type="file" name="slide_img4" id="slide_img4">
                                          </div>
                                  </div>                            
                                </div>  
                              </div>
                              <div class="row">
                              <hr/>
                              <div class="form-group">
                                    <div class="col-md-5">          
                                          <div class="box-body">                                                               

                                                  <div class="box-body">           
                                                      <figure class="figure">        
                                                      <img src="<?php echo BASE_URL; ?>assets/configs/<?php echo $config['slide_img5']; ?>" class="img-thumbnail" />
                                                               <figcaption class="figure-caption text-center">Imagem 5 Slider</figcaption>
                                                      </figure>
                                                  </div>                
                                          </div>                
                                      </div> 
                                      <div class="col-md-5">                           

                                        <label for="slide_img5">Trocar Imagem Imagem 5 Slider</label>                                  
                                        <div class="btn btn-default btn-sm float-left">                                        
                                              <input type="file" name="slide_img5" id="slide_img5">
                                          </div>
                                  </div>                            
                                </div>  
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
                                  <a href="<?php echo BASE_URL; ?>painel/caduser" class="btn btn-danger">Fechar</a>
                        </div>                
                    </div>
                    </div>
                </div>
                </div>
                    </div> 
            </form>
   
</div>
</div>


