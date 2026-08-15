<?php

/*
Formulario de contato em PHP
* - Validação dos dados no servidor
* - Exibe mensagens de erro / sucesso
* - Preenche novamente os campos em caso de erro
*/

// variaveis
$erros = [];
$sucesso = false;

// Valores padrão (mantem que o usuário digitou em caso de erro)
$nome = '';
$email = '';
$assunto = '';
$mensagem = '';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    
    //Captura e sanitiza os dados enviados

    $nome = trim($_POST['nome']??'');
    $email = trim($_POST['email']??'');
    $assunto = trim($_POST['assunto']??'');
    $mensagem = trim($_POST['mensagem']??'');

    //---- Validações ----

    if(empty($nome)){
        $erros['nome'] = 'O campo nome é obrigatório.';
    }
    else if(strlen($nome)< 3){
        $erros['nome'] = 'O campo nome deve ter pelo menos 3 caracteres';
    }

    if(empty($email)){
        $erros['email'] = 'O campo email é obrigatório.';
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros['email'] = 'Informe um e-mail válido';
    }

    if(empty($assunto)){
        $erros['assunto']='O assunto é obrigatório';
    }

    if(empty($mensagem)){
        $erros['mensagem']='O campo mensagem é obrigatório.';
    }
    elseif (strlen($mensagem)<10){
        $erros ['mensagem']='A mensagem deve ter pelo menos 10 caracteres.';
    }

    //Se não houver erros, processo o envio

    if(empty($erros)){
        
        //Sanitiza antes de usar(ex: salvar em branco, enviar e-mail, etc.)

        $nome_limpo = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        $email_limpo = filter_var($email, FILTER_SANITIZE_EMAIL);
        $assunto_limpo = htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8');
        $mensagem_limpa = htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8');

        /*
        Exemplo de envio por e-mail (requer servidor configurado com SMTP/email()):
        $destinatário="seuemail@exemplo.com";
        $cabeçalhos="from: $email_limpo";
        $corpo="Nome:$nome_limpo\n\nMensagem:\n$mensagem_limpa";
        $email($destinatário, $assunto_limpo, $corpo, $cabeçalhos);

        Você também pode salvar em um banco de dados usando PDO, por exemplo.
        */
        $sucesso=true;

        //Limpa os campos após sucesso
        $nome = $email = $assunto = $mensagem = '';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <style>
        * { box-sizing: border-box;}
        body{
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            background: #fff;
            width: 100%;
            max-width: 480px;
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        }
        h1{
            font-size: 22px;
            margin-bottom: 24px;
            color:#222;
            text-align: center;
        }
        label{
            display:block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 14px;
            color: #333
        }
        input, textarea{
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 4px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: #4a90e2;
        }
        .campo { margin-botton: 16px;}
        .erro {
            color: d9534f;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .campo input.invalido, .campo textarea.invalido {
            border-color: #d9534f;
        }
        button {
            width 100%;
            background: #4a90e2;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover { background: #3a7bc8;}
        .alerta-sucesso{
            background: #dff2e1;
            color: #256029;
            border: 1px solid #b7e4c7;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        <div class="container">
         <h1>Fale Conosco</h1>

         <?php if ($sucesso): ?>
            <div class="alerta-sucesso">
             ✅ Mensagem enviada com sucesso! Em breve entraremos em contato.
             </div>
        <?php endif; ?>

        <form action="" method="POST" novalidate>

          <div class="campo">
            <label for="nome">Nome</label>
            <input
              type="text"
              id="nome"
              name="nome"
              class="<?= isset($erros['nome']) ? 'invalido' : '' ?>"
              value="<?= htmlspecialchars($nome, ENT_QUOTES,'UTF-8') ?>"
            >
            <?php if (isset($erros['nome'])): ?>
                <div class="erro"><?= $erros['nome'] ?></div>
                <?php endif; ?>
            </div>

            <div class="campo">
             <label for="email">E-mail</label>
             <input
              type="text"
              id="email"
              name="email"
              class="<?= isset($erros['email']) ? 'invalido' : '' ?>"
              value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"
             >

            <?php if(isset($erros['email'])): ?>
                <div class="erro"><?= $erros['email'] ?></div>
            <?php endif; ?>
            </div>

            <div class="campo">
              <label for="assunto">Assunto</label>
              <input
                type="text"
                id="assunto"
                name="assunto"
                class="<?= isset($erros['assunto']) ? 'invalido' : '' ?>"
                value="<?= htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8') ?>"
                >

            <?php if (isset($erros['assunto'])): ?>
                <div class="erro"><?= $erros['assunto'] ?></div>
            <?php endif; ?>
        </div>

        <div class="campo">
          <label for="mensagem">Mensagem</label>
          <textarea
            id="mensagem"
            name="mensagem"
            rows="5"
            class="<?= isset($erros['mensagem']) ? 'invalido' : '' ?>"
            ><?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?></textarea>
            <?php if (isset($erros['mensagem'])): ?>
                <div class="erro"><?= $erros['mensagem'] ?></div>
            <?php endif; ?>
        </div>

        <button type="submit">Enviar mensagem</button>
    
        </form>
    </div>
            
        
    </style>
</head>
<body>
    
</body>
</html>