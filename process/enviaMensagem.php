
        <?php

		
		$nomeEnviar = $_POST["nomeEnviar"];
		$emailEnviar = $_POST["emailEnviar"];
		$mensagemEnviar = $_POST["mensagemEnviar"];
		
        require "../vendor/autoload.php";

        $from = new SendGrid\Email(null, "xxxxx@xxxxxxx");//Colocar seu email dominio
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "xxx@xxxxxx"); //colocar o seu email para receber as mensagens
        $content = new SendGrid\Content("text/html", "Olá Beto, <br><br>Nova mensagem do Site APPBEST<br><br>Nome: $nomeEnviar<br>Email: $emailEnviar <br>Mensagem: $mensagemEnviar");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
  
        $apiKey = ''; //colocar a sua chave
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso<imput type='submit' value='de acordo'><a hef='index.php'></a>";

if ($nomeEnviar && $emailEnviar) {   
    $pagina = "../index.php";
} else {
    $pagina = "mail_error.php";
}
		header("location:$pagina");
		
        ?>
   