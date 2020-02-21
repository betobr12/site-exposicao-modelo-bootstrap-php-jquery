<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <script src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
  <script>
    $(function(){
        $("#formContato").submit(function(){
            var isValid = true;
             $("input[type=email]").each,
            $("input[class=form-control]").each,
            $("textarea[class=form-control]").each(function()            
        {
                var element = $(this);
                if (element.val() == "") { isValid = false; }

            }); // each Function

            // Função permite verificar se todos os campos estão preenchidos dentro do each 
            if(isValid == false){ alert("Todos os campos devem ser preenchidos."); return false;} 
            else { alert("Email enviado, obrigado pelo contato!"); }   

        }); // termina #form_cadastra

    }); // termina document
</script>
</head>

<body>
 <form id="formContato" name="formContato" method="post" action="process/enviaMensagem.php">
        <h2 class="mb-4">Entre em contato</h2>
          <strong>Nome:</strong>
            <input name="nomeEnviar" class="form-control" placeholder="Digite seu Nome..." type="text" id="nomeEnviar" >
          </p>
          <strong>E-mail:</strong>
            <input name="emailEnviar" class="form-control" placeholder="Digite seu E-mail..." type="email" id="emailEnviar">
          </p>
          <strong>Mensagem:</strong>
          <p>
          <textarea name="mensagemEnviar" class="form-control" placeholder="Digite a sua mensagem..." type="outros" id="outros"  ></textarea> 
                    
          </p>
          <p>
            <input type="submit" class="btn btn-light btn-xl sr-button"  name="enviaMensagem" id="submit" value="Enviar">
            
            
            
          </p>
        </form>
</body>
</html>