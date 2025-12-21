<?php

return [
    '400' => [
        'title' => 'Richiesta Errata',
        'message' => 'Il server non è riuscito a comprendere la tua richiesta. Controlla le informazioni fornite e riprova.',
    ],
    '401' => [
        'title' => 'Accesso Non Autorizzato',
        'message' => 'Non sei autorizzato ad accedere a questa pagina. Controlla le tue credenziali e riprova.',
    ],
    '402' => [
        'title' => 'Pagamento Richiesto',
        'message' => 'Questa azione richiede un pagamento. Regola il tuo account per continuare.',
    ],
    '403' => [
        'title' => 'Accesso Negato',
        'message' => 'Non hai il permesso di accedere a questa pagina o di eseguire questa azione.',
    ],
    '404' => [
        'title' => 'Pagina Non Trovata',
        'message' => 'Non siamo riusciti a trovare la pagina che cercavi. Potrebbe essere stata spostata o eliminata.',
    ],
    '405' => [
        'title' => 'Metodo Non Consentito',
        'message' => 'L\'azione che stai tentando di eseguire non è consentita. Controlla il metodo della richiesta.',
    ],
    '406' => [
        'title' => 'Richiesta Non Accettabile',
        'message' => 'Il server non può fornire una risposta che corrisponda ai criteri della tua richiesta.',
    ],
    '407' => [
        'title' => 'Autenticazione Proxy Richiesta',
        'message' => 'Fornisci credenziali proxy valide per accedere a questa pagina.',
    ],
    '408' => [
        'title' => 'Timeout della Richiesta',
        'message' => 'La tua richiesta ha impiegato troppo tempo. Controlla la connessione e riprova.',
    ],
    '409' => [
        'title' => 'Conflitto di Dati',
        'message' => 'L\'azione che stai tentando di eseguire è in conflitto con lo stato attuale del contenuto. Controlla i dati e riprova.',
    ],
    '410' => [
        'title' => 'Contenuto Non Disponibile',
        'message' => 'Il contenuto a cui stai cercando di accedere è stato rimosso definitivamente.',
    ],
    '411' => [
        'title' => 'Lunghezza della Richiesta Necessaria',
        'message' => 'La tua richiesta non contiene informazioni sulla dimensione dei dati inviati. Controlla e riprova.',
    ],
    '412' => [
        'title' => 'Precondizione Fallita',
        'message' => 'La tua richiesta non soddisfa le precondizioni richieste dal server.',
    ],
    '413' => [
        'title' => 'Richiesta Troppo Grande',
        'message' => 'La tua richiesta è troppo grande per essere elaborata. Riduci le dimensioni e riprova.',
    ],
    '414' => [
        'title' => 'URL Troppo Lungo',
        'message' => 'L\'URL che hai richiesto è troppo lungo. Prova a ridurlo e invialo nuovamente.',
    ],
    '415' => [
        'title' => 'Tipo di Media Non Supportato',
        'message' => 'Il server non può elaborare questo tipo di media. Adatta il formato della tua richiesta.',
    ],
    '416' => [
        'title' => 'Intervallo Non Soddisfacibile',
        'message' => 'L\'intervallo richiesto non è disponibile per questo contenuto.',
    ],
    '417' => [
        'title' => 'Aspettative Non Soddisfatte',
        'message' => 'Il server non è riuscito a soddisfare le aspettative specificate nella tua richiesta. Controlla la richiesta e riprova.',
    ],
    '418' => [
        'title' => 'Azione Non Supportata',
        'message' => 'Il server rifiuta di elaborare questa richiesta perché non è supportata. Controlla la richiesta e riprova.',
    ],
    '419' => [
        'title' => 'Sessione Scaduta',
        'message' => 'La tua sessione è scaduta. Ricarica la pagina e riprova.',
    ],
    '421' => [
        'title' => 'Richiesta Inviata al Server Errato',
        'message' => 'La tua richiesta è stata inviata al server sbagliato. Riprova.',
    ],
    '422' => [
        'title' => 'Dati Non Elaborabili',
        'message' => 'Non siamo riusciti a elaborare la tua richiesta a causa di dati non validi. Controlla e riprova.',
    ],
    '423' => [
        'title' => 'Contenuto Bloccato',
        'message' => 'Il contenuto è bloccato e non può essere modificato. Riprova più tardi.',
    ],
    '424' => [
        'title' => 'Errore di Dipendenza',
        'message' => 'L\'azione che hai tentato di eseguire è fallita perché un\'azione precedente non è stata completata con successo. Controlla i dati e riprova.',
    ],
    '425' => [
        'title' => 'Troppo Presto per Elaborare',
        'message' => 'Il server non è ancora pronto per elaborare la tua richiesta. Riprova tra poco.',
    ],
    '426' => [
        'title' => 'Aggiornamento Richiesto',
        'message' => 'Aggiorna il protocollo o il client per eseguire questa richiesta.',
    ],
    '428' => [
        'title' => 'Precondizioni Richieste',
        'message' => 'L\'azione che stai tentando richiede che vengano soddisfatte alcune condizioni. Controlla i dati e riprova.',
    ],
    '429' => [
        'title' => 'Troppe Richieste',
        'message' => 'Hai inviato troppe richieste in un breve periodo. Attendi un momento e riprova.',
    ],
    '431' => [
        'title' => 'Intestazioni di Richiesta Troppo Grandi',
        'message' => 'La tua richiesta contiene intestazioni troppo grandi per essere elaborate dal server. Riduci la dimensione dei dati e riprova.',
    ],
    '451' => [
        'title' => 'Non Disponibile per Motivi Legali',
        'message' => 'L\'accesso a questo contenuto è limitato per motivi legali o normativi.',
    ],
    '500' => [
        'title' => 'Errore del Server',
        'message' => 'Si è verificato un errore imprevisto sul server. Riprova più tardi o contatta il supporto se il problema persiste.',
    ],
    '501' => [
        'title' => 'Non Supportato',
        'message' => 'Questa funzionalità non è supportata dal server.',
    ],
    '502' => [
        'title' => 'Errore Gateway',
        'message' => 'Il server ha ricevuto una risposta non valida da un server a monte. Riprova.',
    ],
    '503' => [
        'title' => 'Servizio Non Disponibile',
        'message' => 'La nostra piattaforma è attualmente in manutenzione. Torneremo presto. Grazie per la pazienza.',
    ],
    '504' => [
        'title' => 'Timeout del Gateway',
        'message' => 'Il server ha superato il tempo massimo di attesa per una risposta. Riprova più tardi.',
    ],
    '505' => [
        'title' => 'Versione HTTP Non Supportata',
        'message' => 'Il server non supporta la versione HTTP utilizzata in questa richiesta.',
    ],
    '506' => [
        'title' => 'Errore Interno di Configurazione',
        'message' => 'Il server ha riscontrato un errore interno di configurazione. Riprova più tardi.',
    ],
    '507' => [
        'title' => 'Spazio di Archiviazione Insufficiente',
        'message' => 'Il server non può memorizzare i dati necessari per completare questa richiesta.',
    ],
    '508' => [
        'title' => 'Rilevato Ciclo',
        'message' => 'Il server ha rilevato un ciclo infinito durante l\'elaborazione della richiesta.',
    ],
    '510' => [
        'title' => 'Ulteriori Capacità Richieste',
        'message' => 'L\'azione che stai tentando di eseguire richiede capacità non supportate dal server.',
    ],
    '511' => [
        'title' => 'Autenticazione di Rete Richiesta',
        'message' => 'Devi accedere per ottenere l\'accesso a questa rete. Fornisci le credenziali e riprova.',
    ],
];
