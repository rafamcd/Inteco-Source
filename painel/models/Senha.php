<?php

class Senha extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getUltimaSinc() {
        $ultima = '';
        $sql = "SELECT max(ultima_sinc) as ultima_sinc from cliente_sistema_senha";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $ultima = $sql['ultima_sinc'];
        }
        return $ultima;
    }
    
    public function sincronizarSenhas() {
            
            $HTTP_POST_VARS = $_POST;
            
            
            DEFINE('SERVIDOR', 'nyc02.iconectahost.com.br');
            DEFINE('PORTA', '993');
            DEFINE('USUARIO', 'senhas@inteco.com.br');
            DEFINE('SENHA', 'admin3b2a1');          
            
            $mail_box = imap_open("{" . SERVIDOR . ":" . PORTA . "/imap/ssl}INBOX", USUARIO, SENHA);
           
            if ($mail_box) {
                $total_de_mensagens = imap_num_msg($mail_box);
                //echo $total_de_mensagens;               
                $total_de_mensagens2 = $total_de_mensagens;
                if ($total_de_mensagens > 0) {

                   
                    for ($mensagem = 1; $mensagem <= $total_de_mensagens; $mensagem++) {
                        /*
                         *  o terceiro parametro pode ser
                         *  0=> retorna o body da mensagem com o texto que o servidor recebe
                         *  1=> retorna somente o conteudo da mensagem em plain-text
                         *  2=> retorna o conteudo da mensagem em html
                         */


                        $body_1 = ( imap_fetchbody($mail_box, $mensagem, 1) );
                        //echo $body_1;
                        //exit;

                        // começa aqui
                        //zeranco variaveis;

                        $parteinteco = '';
                        $partedetalhe = '';
                        $clienteid = '';
                        $clientecodigo = '';
                        $data = '';
                        $venciment = '';
                        $vencimento = '';
                        $nomesistemadetalhe = '';                       
                        
                        $parteinteco = explode("=3D>", $body_1);
                        
                        //print_r($parteinteco);
/*
                        echo "<br> Parte inteco 0:";
                        echo $parteinteco[0];
                        echo "<br> Parte inteco 1:";
                        echo $parteinteco[1];
                        echo "<br> Parte inteco 2:";
                        echo $parteinteco[2];
                        echo "<br> Parte inteco 3:";
                        echo $parteinteco[3];
                        echo "<br> Parte inteco 4:";
                        echo $parteinteco[4];
                        echo "<br> Parte inteco 5:";
                        echo $parteinteco[5];
                        echo "<br> Parte inteco 6:";
                        echo $parteinteco[6];
                        echo "<br> Parte inteco 7:";
                        echo $parteinteco[7];
                        echo "<br> Parte inteco 8:";
                        echo $parteinteco[8];
                        echo "<br> Parte inteco 9:";
                        echo $parteinteco[9];
                        echo "<br> Parte inteco 10:";
                        echo $parteinteco[10];
                        echo "<br> Parte inteco 11:";
                        echo $parteinteco[11];
                        echo "<br> Parte inteco 12:";
                        echo $parteinteco[12];
                        echo "<br> Parte inteco 13:";
                        echo $parteinteco[13];
                        echo "<br> Parte inteco 14:";
                        echo $parteinteco[14];    
                        exit;
 * 
 */ 
                        //retirando as 2 primeiras posições do array
                        array_shift($parteinteco);
                        array_shift($parteinteco);
                        
                        foreach ($parteinteco as $parteinteco2) {
                            
                            
                            //print_r($parteinteco2);exit;
                            
                            $partedetalhe = explode("_", $parteinteco2);
                            $clienteid = explode("[", $parteinteco2);
                            $clientecodigo = explode("_", $clienteid[1]);
                            $nomesistemadetalhe = $partedetalhe[1];
                            
                            /*print_r($partedetalhe);
                            print_r($clienteid);
                            print_r($clientecodigo);
                            print_r($clientecodigo);
                            exit;*/
                            

                            $codsistema=0;                            
                           
                            if ($partedetalhe[1] ==  'Gest=E3o de Cemit=E9rio')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Gestão de Cemitério';
                              $codsistema = 2;
                            }

                            if ($partedetalhe[1] ==  'Gest=E3o de Materiais')
                            {
                             $partedetalhe[1] = '';
                             $partedetalhe[1] = 'Gestão de Materiais';
                             $codsistema = 3;
                            }

                            if ($partedetalhe[1] ==  'Assessor Gerencial')
                            {
                              $codsistema = 4;
                            }

                            if ($partedetalhe[1] ==  'Banco de Leis do Munic=EDpio')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Banco de Leis do Município';
                              $codsistema = 5;
                            }

                            if ($partedetalhe[1] ==  'Compras e Licita=E7=F5es')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Compras e Licitações';
                              $codsistema = 6;
                            }

                            if ($partedetalhe[1] ==  'Gest=E3o da Frota')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Gestão da Frota';
                              $codsistema = 7;
                            }

                            if ($partedetalhe[1] ==  'Controle de Caixa')
                            {
                              $codsistema = 9;
                            }

                            if ($partedetalhe[1] ==  'Gestão Hospitalar')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Gestãoo Hospitalar';
                              $codsistema = 10;
                            }

                            if ($partedetalhe[1] ==  'Gest=E3o Or=E7ament=E1ria e Cont=E1bil')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Gestão Orçamentária e Contábil';
                              $codsistema = 11;
                            }

                            if ($partedetalhe[1] ==  'Gest=E3o da Ouvidoria')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Gestão da Ouvidoria';
                              $codsistema = 13;
                            }

                            if ($partedetalhe[1] ==  'Gest=E3o do Patrim=F4nio')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Gestão do Patrimônio';
                              $codsistema = 14;
                            }

                            if ($partedetalhe[1] ==  'Automa=E7=E3o de Ponto')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Automação de Ponto';
                              $codsistema = 15;
                            }

                            if ($partedetalhe[1] ==  'Receitas Municipais')
                            {
                              $codsistema = 17;
                            }

                            if ($partedetalhe[1] ==  'Recursos Humanos')
                            {
                              $codsistema = 18;
                            }

                            if ($partedetalhe[1] ==  'Gest=E3o do Saneamento')
                            {
                              $partedetalhe[1] = '';
                              $partedetalhe[1] = 'Gestão do Saneamento';
                              $codsistema = 19;
                            }

                             if ($partedetalhe[1] ==  'Tesouraria')
                            {
                              $codsistema = 21;
                            }

                            if ($partedetalhe[1] ==  'Tramita=E7=E3o de Processos')
                           {
                             $partedetalhe[1] = '';
                             $partedetalhe[1] = 'Tramitação de Processos';
                             $codsistema = 22;
                           }

                            if ($partedetalhe[1] ==  'Presta=E7=E3o de Contas')
                           {
                             $partedetalhe[1] = '';
                             $partedetalhe[1] = 'Prestação de Contas';
                             $codsistema = 23;
                           }


                           $data = explode(".", $partedetalhe[2]);
                           $venciment = explode ("-",$data[0]);
                           $vencimento='';
                           $vencimento.=$venciment[2]."-";//0000
                           $vencimento.=$venciment[1]."-";//00
                           $vencimento.=$venciment[0];//00
                           $senha='';
                           $senha = $clienteid[0];

                            /*
                            echo "<br> Senha:";
                            echo $clienteid[0];

                            echo "<br> Cliente:";
                            echo $clientecodigo[0];

                            echo "<br> Sistema:";
                            echo $partedetalhe[1];

                            echo "<br> Cod. Sistema:";
                            echo $codsistema;
                            

                            echo "<br> Vencimento:";
                            echo $vencimento;
                            */

                            $texto = '';
                            $texto = 'Select * from cliente_sistema_senha where id_cliente='.$clientecodigo[0].' and id_sistema='.$codsistema;
                            
                            $texto2 = 'Select final_acesso from cliente_sistema_senha where final_acesso <> 0000-00-00 and id_cliente='.$clientecodigo[0].' and id_sistema='.$codsistema;
                            
                            if ($codsistema <> 0)
                            {
                                       
                                        $sqlsenha = $this->db->query($texto);
                                        $sqlsenha = $sqlsenha->fetch();

                                        $sqlfinalacesso = $this->db->query($texto2);
                                        $sqlfinalacesso = $sqlfinalacesso->fetch();

                                        /*echo "<br>Banco de Dados <br>";
                                        echo "<br>id_cliente = ".$sqlsenha2[id_cliente];
                                        echo "<br>id_sistema = ".$sqlsenha2[id_sistema];
                                        echo "<br>senha = ".$sqlsenha2[senha];
                                        echo "<br>final_acesso = ".$sqlfinalacesso2[final_acesso];*/

                                        //echo $deletando;
                                        
                                         if ($nomesistemadetalhe ==  'Gest=E3o de Cemit=E9rio')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Gestão de Cemitério';
                                        }

                                         if ($nomesistemadetalhe ==  'Gest=E3o de Materiais')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Gestão de Materiais';
                                        }

                                        if ($nomesistemadetalhe ==  'Banco de Leis do Munic=EDpio')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Banco de Leis do Município';
                                        }

                                        if ($nomesistemadetalhe ==  'Compras e Licita=E7=F5es')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Compras e Licitações';
                                        }

                                        if ($nomesistemadetalhe ==  'Gest=E3o da Frota')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Gestão da Frota';
                                        }

                                        if ($nomesistemadetalhe ==  'Gest=E3o Or=E7ament=E1ria e Cont=E1bil')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Gestão Orçamentária e Contábil';
                                        }

                                        if ($nomesistemadetalhe ==  'Gest=E3o da Ouvidoria')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Gestão da Ouvidoria';
                                        }

                                        if ($nomesistemadetalhe ==  'Gest=E3o do Patrim=F4nio')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Gestão do Patrimônio';
                                        }

                                        if ($nomesistemadetalhe ==  'Automa=E7=E3o de Ponto')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Automação de Ponto';
                                        }


                                        if ($nomesistemadetalhe ==  'Gest=E3o do Saneamento')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Gestão do Saneamento';
                                        }


                                         if ($nomesistemadetalhe ==  'Tramita=E7=E3o de Processos')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Tramitação de Processos';
                                        }

                                         if ($nomesistemadetalhe ==  'Presta=E7=E3o de Contas')
                                        {
                                          $nomesistemadetalhe = '';
                                          $nomesistemadetalhe = 'Prestação de Contas';
                                        }
                                        $nomesistemadetalhe = utf8_decode($nomesistemadetalhe);
                                        if (strtotime($sqlfinalacesso['final_acesso']) <= strtotime($vencimento))
                                        {
                                          $id_cliente = $clientecodigo[0];
                                          $sql = $this->db->prepare("delete from `cliente_sistema_senha` where id_cliente=:id_cliente and id_sistema=:codsistema");
                                          $sql->bindValue(":id_cliente", $id_cliente);
                                          $sql->bindValue(":codsistema", $codsistema);
                                          $sql->execute();
                                          $sql = $this->db->prepare("insert into cliente_sistema_senha SET id_cliente=:id_cliente, id_sistema=:codsistema, nome_sistema= :nomesistemadetalhe, senha=:senha, final_acesso=:vencimento, ultima_sinc=NOW()");
                                          $sql->bindValue(":id_cliente", $id_cliente);
                                          $sql->bindValue(":codsistema", $codsistema);
                                          $sql->bindValue(":nomesistemadetalhe", $nomesistemadetalhe);
                                          $sql->bindValue(":senha", $senha);
                                          $sql->bindValue(":vencimento", $vencimento);
                                          $sql->execute();
                                        }
                            }


                        // acaba aqui

                        } //endforeach
                        } //end for do email

                        
                } // end if total mensagens > 0
                else
                {  }

                imap_close($mail_box);
            } // end if mailbox
        
    
} // end função
}
