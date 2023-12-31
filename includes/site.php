//Código da function/ consulta :


<?php

// Função de consulta do telefone na segunda API
function site($site, $chat_id) {
    // Montar a URL da API com o número de telefone
    $url = "https://teddy-puxadas.onrender.com/site/$site?apiKey=tpteddy";

    // Fazer a requisição HTTP
    $response = file_get_contents($url);

    // Verificar se a requisição foi bem-sucedida
    if ($response !== false) {
        // Decodificar a resposta JSON
        $data = json_decode($response, true);

        // Verificar o status da resposta
        if ($data['status']) {
            // Obter o resultado da consulta
            $resultado = $data['resultado']['str'];

            // Verificar se há dados disponíveis
            if (strpos($resultado, "SEM INFORMAÇÃO") !== false) {
                // Se os dados não estiverem disponíveis, enviar mensagem de resposta indicando a falta de informações
                $caption .= $mono.$resultado.$mono;
                $caption .= "\n*By: @teddy_buscas_bot*:_ [ ](https://i.ibb.co/2YhfdmV/1688958230412.png);";
            } else {
                // Se houver dados disponíveis, formatar a mensagem de resposta
                $caption .= $mono.$resultado.$mono;
                $caption .= "\n*By: @teddy_buscas_bot*:_ [ ](https://i.ibb.co/2YhfdmV/1688958230412.png);";
            }

            // Enviar a resposta ao usuário
            bot("sendMessage", array(
                "chat_id" => $chat_id,
                "text" => $caption,
                "parse_mode" => "Markdown",
                "reply_markup" => [
                    "inline_keyboard" => [
                        [
                            ["text" => "🗑️", "callback_data" => "delete_message"]
                        ]
                    ]
                ]
            ));
        } else {
            // Em caso de erro na consulta, enviar uma mensagem informando
            bot("sendMessage", array(
                "chat_id" => $chat_id,
                "text" => "Erro na consulta. Por favor, tente novamente."
            ));
        }
    } else {
        // Em caso de falha na requisição, enviar uma mensagem informando
        bot("sendMessage", array(
            "chat_id" => $chat_id,
            "text" => "Falha na comunicação com o servidor. Por favor, tente novamente mais tarde."
        ));
    }
}