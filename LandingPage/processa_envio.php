<?php

    require './Bibliotecas/PHPMailer/Exception.php';
    require './Bibliotecas/PHPMailer/PHPMailer.php';
    require './Bibliotecas/PHPMailer/SMTP.php';
    require './Bibliotecas/PHPMailer/POP3.php';
    require './Bibliotecas/PHPMailer/OAuth.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Mensagem {
        private $destinatario = null;
        private $assunto=null;
        private $mensagem=null;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo,$valor){
            $this->$atributo = $valor;
        }

        public function mensagemValida(){
            if(empty($this->destinatario) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }
            return true;
        }

    }

$mensagem = new Mensagem();

$mensagem->__set('destinatario','leandro@calina.ag');
$mensagem->__set('assunto',$_POST['assunto']);
$mensagem->__set('mensagem','O usuário: '.$_POST['assunto'].' se cadastrou para experimentar as Campanhas.Email: '.$_POST['para']);

if (!$mensagem->mensagemValida()){
    header('Location: mensagem_invalida.php');
} 

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'email@dominio.com'; //Colocar seu email gmail aqui
    $mail->Password   = 'senha';  //Colocar a senha desse email
    $mail->SMTPSecure = 'ssl';         // Enable SSL encryption; 
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('email@dominio.com', 'Remetente'); //É necessário um email para eviar os emails
    $mail->addAddress($mensagem->__get('destinatario'), 'Destinatário');     // Add a recipient       

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $mensagem->__get('assunto');
    $mail->Body    = $mensagem->__get('mensagem');
    $mail->AltBody = $mensagem->__get('mensagem');

    $mail->send();
    echo 'Message has been sent';
    header('Location: mensagem_enviada.php');
} catch (Exception $e) {
    echo "Não foi possível enviar este Email! Por Favor tente novamente!";
    echo "Detalhes do Erro: ".$mail->ErrorInfo;
    header('Location: mensagem_invalida.php');
}

?>