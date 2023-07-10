<?php

 $input = file_get_contents('php://input');

 $update = json_decode($input);

 $message = $update->message;
 
 $chat_id = $message->chat->id;
 
 $message_id = $update->message->message_id;
 
 $tipo = $message->chat->type;
 
 $texto = $message->text;
 
 $id = $message->from->id;
 
 $isbot = $message->from->is_bot;
 
 if($message->from->is_premium){
   
     $ispremium = "sim";
     
 }else{
   
     $ispremium = "não";
     
 }
 $nome = $message->from->first_name;
 
 $usuario = $message->chat->username;
 
 $data = $update->callback_query->data;
 
 $query_message_id = $update->callback_query->message->message_id;
 
 $query_chat_id = $update->callback_query->message->chat->id;
 
 $query_usuario = $update->callback_query->message->chat->username;
 
 $query_nome = $update->callback_query->message->chat->first_name;
 
 $query_id = $update->callback_query->id;

function bot($method, $parameters) {
 $token = "5648937247:AAFv0av_VmnNloU52SHvK7PoapAdn6JdVU4";
 $options = array(
			 'http' => array(
			 'method'  => 'POST',
			 'content' => json_encode($parameters),
			 'header'=>  "Content-Type: application/json\r\n" .
	            "Accept: application/json\r\n"
			 )
			);

$context  = stream_context_create( $options );
		return file_get_contents('https://api.telegram.org/bot'.$token.'/'.$method, false, $context );
  
}

function consultas($dados){
  
  $chat_id = $dados["chat_id"];
  $message_id = $dados["query_message_id"];
  
  $txt = "*☆ | COMANDOS BOT @teddyzinofc | ☆*

*🔄 Bases de dados atualizada, servidores otimizados!*

*● | PARÂMETROS | ●*

🟢 *STATUS 》* ONLINE
🟡* STATUS 》* MANUTENÇÃO
🔴 *STATUS 》 *OFFLINE

*• | MÓDULOS | •*

🟢*CNPJ:*
🟢*SCORE:*
🟢*CPF1:*
🟢*CEP:*
🟢*CPF2:*
🟢*CPF3:*
🟢*CPF4*
🟢*TEL1:*
🟢*TEL2:*
🟢*TEL3:*
🟢*NOME:*
🟢*PARENTES:*
🟢*VIZINHOS:*
🟢*BIN:*
🟢*IP:*
🟢*PLACA1:*
🟢*EMAIL:*
🟢*CNPJ:*
🔴*PLACA2:*
🟡*RG:*
🟡*SITE:*

⚡️ *Use os comandos em Grupos e no Privado do Robô*

👤 *Suporte: @teddyzinofc*
━━━━━━━━━━━━━━━━━━━━━";

  $button[] = ['text'=>"Voltar", "callback_data" => "start"];

  $menu['inline_keyboard'] = array_chunk($button, 2);
  
  bot("editMessageText",
    array(
    "chat_id"=> $chat_id,
    "text" => $txt,
    "message_id" => $message_id,
    "reply_to_message_id"=> $message_id,
    "reply_markup" => $menu,
    "parse_mode" => 'Markdown'));
}

function tabela($dados){
  
  $chat_id = $dados["chat_id"];
  $message_id = $dados["query_message_id"];
  
  $txt = "✅BIN✅
✅TEL
✅CEP✅
✅CNPJ✅
✅PLACA✅
✅CPF1✅
✅CPF2✅
✅CPF3✅
✅IP✅
✅NOME✅
✅PARENTES✅
✅VIZINHOS✅
✅EMAIL✅
✅SCORE✅
✅SITE✅

♠️ 𝖭𝖮𝖵𝖮𝖲 𝖬𝖮‌𝖣𝖴𝖫𝖮𝖲 𝖤𝖬 𝖡𝖱𝖤𝖵𝖤 ♠️

🚀🔥 𝗧𝗔𝗕𝗘𝗟𝗔 𝗗𝗘 𝗣𝗥𝗘𝗖‌𝗢𝗦 🔥🚀

✅  07 DIAS 20 R$
✅  15 DIAS 35 R$
✅  30 DIAS 50 R$ 
✅  60 DIAS 85 R$

♣️ 𝘊𝘖𝘕𝘚𝘜𝘓𝘛𝘈𝘚 𝘐𝘓𝘐𝘔𝘐𝘛𝘈𝘋𝘈𝘚 ♣️

💎  𝙏𝘼𝘽𝙀𝙇𝘼 𝘿𝙀 𝙋𝙍𝙀𝘾‌𝙊𝙎 𝙋𝘼𝙍𝘼 𝙂𝙍𝙐𝙋𝙊 𝙑𝙄𝙋 💎

✅ 7 DIAS 25 R$ 
✅ 15 DIAS 45 R$ 
✅ 1 MES 80 R$

💰 𝙁𝙊𝙍𝙈𝘼𝙎 𝘿𝙀 𝙋𝘼𝙂𝘼𝙈𝙀𝙉𝙏𝙊 💰

----------------------------------------------
💰𝗣𝗜𝗫
----------------------------------------------

• 𝗖𝗔𝗡𝗔𝗟 𝗗𝗘 𝗥𝗘𝗙𝗦 
@refs_teddydo7

• 𝗚𝗥𝗨𝗣𝗢 𝗢𝗙𝗖 
@tropa_do_teddy

• 𝗗𝗢𝗡𝗢 𝗗𝗢 𝗕𝗢𝗧
@teddyzinofc

👺 𝘔𝘌𝘓𝘏𝘖𝘙 𝘚𝘜𝘗𝘖𝘙𝘛𝘌 𝘋𝘖 𝘛𝘌𝘓𝘌𝘎𝘙𝘈𝘔 👺

🚨 𝘊𝘏𝘈𝘔𝘖𝘜 𝘗𝘝 𝘌 𝘍𝘐𝘊𝘖𝘜 𝘌𝘕𝘙𝘖𝘓𝘈𝘕𝘋𝘖 = 𝘚𝘗𝘈𝘔 🚨

 ❌ 𝙎𝙊‌ 𝘾𝙃𝘼𝙈𝘼 𝙎𝙀 𝙌𝙐𝙄𝙎𝙀𝙍 𝘾𝙊𝙈𝙋𝙍𝘼𝙍 ❌";

  $button[] = ['text'=>"Voltar", "callback_data" => "start"];

  $menu['inline_keyboard'] = array_chunk($button, 2);
  
  bot("editMessageText",
    array(
    "chat_id"=> $chat_id,
    "text" => $txt,
    "message_id" => $message_id,
    "reply_to_message_id"=> $message_id,
    "reply_markup" => $menu,
    "parse_mode" => 'Markdown'));
}

function start($dados){
  
  $chat_id = $dados["chat_id"];
  $message_id = $dados["query_message_id"];
  $nome = $dados["nome"];
  
  $txt = "🔹 *Bem Vindo {$nome}*
  
• [Canal - Oficial](t.me/tropa_do_teddy7)

_Navegue pelo meu menu abaixo:_";

  $button[] = ['text'=>"Consultas",'callback_data'=>"consultas"];
  
  $button[] = ['text'=>"Tabela",'callback_data'=>"tabela"];
  
  $button[] = ['text'=>"Suporte / Dev",'url'=>"t.me/teddyzinofc"];

  $menu['inline_keyboard'] = array_chunk($button, 2);
  
  bot("editMessageText",
    array(
    "chat_id"=> $chat_id,
    "text" => $txt,
    "message_id" => $message_id,
    "reply_to_message_id"=> $message_id,
    "reply_markup" => $menu,
    "parse_mode" => 'Markdown'));
}

if (strpos($texto, "/start") === 0){
  
  $txt = '🔹 *Bem Vindo {$nome}*
  
• [Canal - Oficial](t.me/tropa_do_teddy7)

_Navegue pelo meu menu abaixo:_ [ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

  

  $button[] = ['text'=>"Consultas",'callback_data'=>"consultas"];
  
  $button[] = ['text'=>"Tabela",'callback_data'=>"tabela"];
  
  $button[] = ['text'=>"Suporte / Dev",'url'=>"t.me/teddyzinofc"];
 
 $menu['inline_keyboard'] = array_chunk($button, 2);

  bot("sendChatAction", 
    array(
    "chat_id" => $chat_id,
    "action" => "typing"));

bot("sendMessage",
    array(
    "chat_id"=> $chat_id ,
    "text" => $txt,
    "reply_markup" => $menu,
    "reply_to_message_id"=> $message_id,
    "message_id" => $message_id,
    "parse_mode" => 'Markdown'));
}

//Código para o comando:

// Verificar se o comando "/score" foi usado
if (strpos($texto, "/score") === 0) {
    // Extrair o telefone da mensagem
    $score = substr($texto, 6);
    if (empty($score)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/score 000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/score.php';

    // Chamar a função de consulta do telefone na segunda API
    score($score, $chat_id);
    
}

//Código para o comando:

// Verificar se o comando "/tel2" foi usado
if (strpos($texto, "/tel2") === 0) {
    // Extrair o telefone da mensagem
    $tel2 = substr($texto, 6);

    if (empty($tel2)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/tel2 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/tel2.php';

    // Chamar a função de consulta do telefone na segunda API
    tel2($tel2, $chat_id);
    
}

//Código para o comando:

// Verificar se o comando "/site" foi usado
if (strpos($texto, "/site") === 0) {
    // Extrair o telefone da mensagem
    $site = substr($texto, 6);

    if (empty($site)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/site replit.com
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/site.php';

    // Chamar a função de consulta do telefone na segunda API
    site($site, $chat_id);
    
}

// Verificar se o comando "/tel1" foi usado
if (strpos($texto, "/tel1") === 0) {
    // Extrair o telefone da mensagem
    $tel1 = substr($texto, 6);

    if (empty($tel1)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/tel1 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/tel1.php';

    // Chamar a função de consulta do telefone na segunda API
    tel1($tel1, $chat_id);
    
}

// Verificar se o comando "/tel3" foi usado
if (strpos($texto, "/tel3") === 0) {
    // Extrair o telefone da mensagem
    $tel3 = substr($texto, 6);

    if (empty($tel3)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/tel3 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/tel3.php';

    // Chamar a função de consulta do telefone na segunda API
    tel3($tel3, $chat_id);
    
}

// Verificar se o comando "/cpf1" foi usado
if (strpos($texto, "/cpf1") === 0) {
    // Extrair o telefone da mensagem
    $cpf1 = substr($texto, 6);

    if (empty($cpf1)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/cpf1 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/cpf1.php';

    // Chamar a função de consulta do telefone na segunda API
    cpf1($cpf1, $chat_id);
    
}

// Verificar se o comando "/cpf2" foi usado
if (strpos($texto, "/cpf2") === 0) {
    // Extrair o telefone da mensagem
    $cpf2 = substr($texto, 6);

    if (empty($cpf2)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/cpf2 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/cpf2.php';

    // Chamar a função de consulta do telefone na segunda API
    cpf2($cpf2, $chat_id);
    
}

// Verificar se o comando "/cpf3" foi usado
if (strpos($texto, "/cpf3") === 0) {
    // Extrair o telefone da mensagem
    $cpf3 = substr($texto, 6);

    if (empty($cpf3)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/cpf3 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/cpf3.php';

    // Chamar a função de consulta do telefone na segunda API
    cpf3($cpf3, $chat_id);
    
}

// Verificar se o comando "/cpf4" foi usado
if (strpos($texto, "/cpf4") === 0) {
    // Extrair o telefone da mensagem
    $cpf4 = substr($texto, 6);

    if (empty($cpf4)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/cpf4 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/cpf4.php';

    // Chamar a função de consulta do telefone na segunda API
    cpf4($cpf4, $chat_id);
    
}

// Verificar se o comando "/nome" foi usado
if (strpos($texto, "/nome") === 0) {
    // Extrair o telefone da mensagem
    $nome = substr($texto, 6);

    if (empty($nome)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/nome Jamilly Cambui de Oliveira
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/nome.php';

    // Chamar a função de consulta do telefone na segunda API
    nome($nome, $chat_id);
    
}

// Verificar se o comando "/ip" foi usado
if (strpos($texto, "/ip") === 0) {
    // Extrair o telefone da mensagem
    $ip = substr($texto, 6);

    if (empty($ip)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/ip 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/ip.php';
    // Chamar a função de consulta do telefone na segunda API
    ip($ip, $chat_id);
        
}

if (strpos($texto, "/cnpj") === 0) {
    // Extrair o telefone da mensagem
    $cnpj = substr($texto, 6);

    if (empty($cnpj)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/cnpj 27865757000102
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/cnpj.php';

    // Chamar a função de consulta do telefone na segunda API
    cnpj($cnpj, $chat_id);
    
}

if (strpos($texto, "/placa1") === 0) {
    // Extrair o telefone da mensagem
    $placa1 = substr($texto, 6);

    if (empty($placa1)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/placa1 QZO1J87
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/placa1.php';

    // Chamar a função de consulta do telefone na segunda API
    placa1($placa1, $chat_id);
    
}

if (strpos($texto, "/beneficios") === 0) {
    // Extrair o telefone da mensagem
    $beneficios = substr($texto, 6);

    if (empty($beneficios)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/beneficios 00000000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/beneficios.php';

    // Chamar a função de consulta do telefone na segunda API
    beneficios($beneficios, $chat_id);
    
}

if (strpos($texto, "/bin") === 0) {
    // Extrair o telefone da mensagem
    $bin = substr($texto, 6);

    if (empty($bin)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/bin 000000
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/bin.php';

    // Chamar a função de consulta do telefone na segunda API
    bin($bin, $chat_id);
    
}

if (strpos($texto, "/parentes") === 0) {
    // Extrair o telefone da mensagem
    $parentes = substr($texto, 6);

    if (empty($parentes)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/parentes QZO1J87
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/parentes.php';

    // Chamar a função de consulta do telefone na segunda API
    parentes($parentes, $chat_id);
    
}

if (strpos($texto, "/cep") === 0) {
    // Extrair o telefone da mensagem
    $cep = substr($texto, 6);

    if (empty($cep)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/cep 54520015
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/cep.php';

    // Chamar a função de consulta do telefone na segunda API
    cep($cep, $chat_id);
    
}

if (strpos($texto, "/email") === 0) {
    // Extrair o telefone da mensagem
    $email = substr($texto, 6);

    if (empty($email)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/email joaozinho@gmail.com
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/email.php';

    // Chamar a função de consulta do telefone na segunda API
    email($email, $chat_id);
    
}

if (strpos($texto, "/ip") === 0) {
    // Extrair o telefone da mensagem
    $ip = substr($texto, 6);

    if (empty($ip)) {
        $photo_url = "[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)";
        $caption = '_Não seja mamaco, use assim_:
/ip 204.152.203.157
[ ](https://i.ibb.co/2YhfdmV/1688958230412.png)';

        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => $caption,
            "parse_mode" => "Markdown"
        ));

        exit();
    }

    // Incluir o arquivo com as funções de consulta
    require_once 'includes/ip.php';

    // Chamar a função de consulta do telefone na segunda API
    ip($ip, $chat_id);
    
}

if (!empty($data)) {
    $callback = explode("|", $data)[0];
    $dados = array(
        "chat_id" => $query_chat_id,
        "id" => $query_chat_id,
        "nome" => $query_nome,
        "usuario" => $query_usuario,
        "message_id" => $query_message_id,
        "query_message_id" => $query_message_id,
        "query_nome" => $query_nome,
        "query_id" => $query_id,
        "optional" => explode("|", $data)[1],
        "query_usuario" => $query_usuario
    );

    if ($callback === "delete_message") { 
        bot("deleteMessage", array(
            "chat_id" => $query_chat_id,
            "message_id" => $query_message_id
        ));
    } else if (function_exists($callback)) {
        $callback($dados);
    } else {
        bot("answerCallbackQuery", array(
            "callback_query_id" => $query_id,
            "text" => "⚠️ | Função em desenvolvimento!",
            "show_alert" => false,
            "cache_time" => 10
        ));
    }
}