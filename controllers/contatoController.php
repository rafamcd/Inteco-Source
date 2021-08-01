<?php
class contatoController extends Controller {

    public function index() {
        $data = array(
            'mensagem' => ''
        );
        
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            
            $emailTo = 'rubens@inteco.com.br';

            $clientName = addslashes(trim($_POST['name']));
            $clientEmail = addslashes(trim($_POST['email']));
            $subject = addslashes(trim($_POST['subject']));
            $message = addslashes(trim($_POST['message']));
            $headers = "From: " . $clientName . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
            mail($emailTo, $subject . ' (Inteco - Contato pelo Site)', $message, $headers);
            $data['mensagem'] = "Mensagem enviada com sucesso!";
        }
    

        $this->loadTemplate('contato', $data);
    }

}