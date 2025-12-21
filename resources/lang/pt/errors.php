<?php

return [
    '400' => [
        'title' => 'Requisição Inválida',
        'message' => 'O servidor não conseguiu entender sua requisição. Verifique as informações fornecidas e tente novamente.',
    ],
    '401' => [
        'title' => 'Não Autorizado',
        'message' => 'Você não tem autorização para acessar este recurso. Verifique suas credenciais e tente novamente.',
    ],
    '402' => [
        'title' => 'Pagamento Necessário',
        'message' => 'Esta ação requer pagamento. Por favor, regularize sua conta para continuar.',
    ],
    '403' => [
        'title' => 'Proibido',
        'message' => 'Você não tem permissão para acessar esta página ou executar esta ação.',
    ],
    '404' => [
        'title' => 'Não Encontrado',
        'message' => 'Não conseguimos encontrar a página que você procurava. Ela pode ter sido movida ou excluída.',
    ],
    '405' => [
        'title' => 'Método Não Permitido',
        'message' => 'A ação que você está tentando não é permitida. Verifique o método da requisição.',
    ],
    '406' => [
        'title' => 'Não Aceitável',
        'message' => 'O servidor não pode fornecer uma resposta que atenda aos critérios da sua requisição.',
    ],
    '407' => [
        'title' => 'Autenticação de Proxy Necessária',
        'message' => 'Forneça credenciais válidas de proxy para acessar este recurso.',
    ],
    '408' => [
        'title' => 'Tempo de Requisição Esgotado',
        'message' => 'Sua requisição demorou muito. Verifique sua conexão e tente novamente.',
    ],
    '409' => [
        'title' => 'Conflito',
        'message' => 'Há um conflito com o estado atual do recurso. Revise sua requisição.',
    ],
    '410' => [
        'title' => 'Removido',
        'message' => 'O recurso que você está tentando acessar foi removido permanentemente.',
    ],
    '411' => [
        'title' => 'Comprimento Necessário',
        'message' => 'Inclua um cabeçalho Content-Length válido na sua requisição.',
    ],
    '412' => [
        'title' => 'Pré-condição Falhou',
        'message' => 'Sua requisição não atendeu às condições exigidas pelo servidor.',
    ],
    '413' => [
        'title' => 'Carga Muito Grande',
        'message' => 'Sua requisição é muito grande para ser processada. Reduza o tamanho e tente novamente.',
    ],
    '414' => [
        'title' => 'URI Muito Longo',
        'message' => 'A URL que você solicitou é muito longa. Tente encurtá-la e envie novamente.',
    ],
    '415' => [
        'title' => 'Tipo de Mídia Não Suportado',
        'message' => 'O servidor não pode processar este tipo de mídia. Ajuste o formato da sua requisição.',
    ],
    '416' => [
        'title' => 'Intervalo Não Satisfatório',
        'message' => 'O intervalo que você solicitou não está disponível para este recurso.',
    ],
    '417' => [
        'title' => 'Expectativa Falhou',
        'message' => 'O servidor não conseguiu atender às expectativas especificadas na sua requisição.',
    ],
    '418' => [
        'title' => 'Requisição Não Suportada',
        'message' => 'O servidor se recusa a processar esta requisição, pois não é suportada. Revise e tente novamente.',
    ],
    '419' => [
        'title' => 'Página Expirada',
        'message' => 'Sua sessão expirou. Recarregue a página e tente novamente.',
    ],
    '421' => [
        'title' => 'Requisição Mal Direcionada',
        'message' => 'Sua requisição foi enviada para o servidor errado. Tente novamente.',
    ],
    '422' => [
        'title' => 'Entidade Não Processável',
        'message' => 'Não foi possível processar sua requisição devido a dados inválidos. Revise e tente novamente.',
    ],
    '423' => [
        'title' => 'Bloqueado',
        'message' => 'O recurso está bloqueado no momento e não pode ser modificado. Tente novamente mais tarde.',
    ],
    '424' => [
        'title' => 'Dependência Falhou',
        'message' => 'Esta requisição falhou porque uma requisição anterior relacionada não teve sucesso.',
    ],
    '425' => [
        'title' => 'Muito Cedo',
        'message' => 'O servidor ainda não está pronto para processar esta requisição. Tente novamente mais tarde.',
    ],
    '426' => [
        'title' => 'Atualização Necessária',
        'message' => 'Atualize seu protocolo ou cliente para realizar esta requisição.',
    ],
    '428' => [
        'title' => 'Pré-condição Necessária',
        'message' => 'Esta requisição requer que certas condições sejam atendidas. Inclua os cabeçalhos necessários.',
    ],
    '429' => [
        'title' => 'Muitas Requisições',
        'message' => 'Você enviou muitas requisições em um curto período. Aguarde um momento e tente novamente.',
    ],
    '431' => [
        'title' => 'Campos de Cabeçalho da Requisição Muito Grandes',
        'message' => 'Os cabeçalhos da sua requisição são muito grandes. Reduza o tamanho e tente novamente.',
    ],
    '451' => [
        'title' => 'Indisponível por Motivos Legais',
        'message' => 'O acesso a este recurso está restrito por motivos legais ou regulatórios.',
    ],
    '500' => [
        'title' => 'Erro do Servidor',
        'message' => 'Ocorreu um erro inesperado no servidor. Tente novamente mais tarde ou contate o suporte se o problema persistir.',
    ],
    '501' => [
        'title' => 'Não Implementado',
        'message' => 'Esta funcionalidade não é suportada pelo servidor.',
    ],
    '502' => [
        'title' => 'Gateway Ruim',
        'message' => 'O servidor recebeu uma resposta inválida de um servidor upstream. Tente novamente.',
    ],
    '503' => [
        'title' => 'Serviço Indisponível',
        'message' => 'Nossa plataforma está em manutenção no momento. Esperamos voltar em breve. Obrigado pela paciência.',
    ],
    '504' => [
        'title' => 'Tempo de Gateway Esgotado',
        'message' => 'O servidor demorou muito para receber uma resposta. Tente novamente mais tarde.',
    ],
    '505' => [
        'title' => 'Versão HTTP Não Suportada',
        'message' => 'O servidor não suporta a versão HTTP usada nesta requisição.',
    ],
    '506' => [
        'title' => 'Variante Também Negocia',
        'message' => 'O servidor encontrou um erro de configuração interna. Tente novamente mais tarde.',
    ],
    '507' => [
        'title' => 'Armazenamento Insuficiente',
        'message' => 'O servidor não pode armazenar os dados necessários para concluir esta requisição.',
    ],
    '508' => [
        'title' => 'Loop Detectado',
        'message' => 'O servidor detectou um loop infinito ao processar a requisição.',
    ],
    '510' => [
        'title' => 'Não Estendido',
        'message' => 'Esta requisição requer extensões adicionais que não são suportadas pelo servidor.',
    ],
    '511' => [
        'title' => 'Autenticação de Rede Necessária',
        'message' => 'Você precisa se autenticar para acessar a rede. Forneça suas credenciais.',
    ],
];
