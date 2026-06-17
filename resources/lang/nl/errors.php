<?php

return [
    '400' => [
        'title' => 'Foutieve aanvraag',
        'message' => 'De server kon uw aanvraag niet begrijpen. Controleer de ingevoerde gegevens en probeer het opnieuw.',
    ],
    '401' => [
        'title' => 'Niet geautoriseerd',
        'message' => 'U heeft geen toegang tot deze bron. Controleer uw inloggegevens en probeer het opnieuw.',
    ],
    '402' => [
        'title' => 'Betaling vereist',
        'message' => 'Deze actie vereist een betaling. Gelieve uw openstaande saldo te voldoen om door te gaan.',
    ],
    '403' => [
        'title' => 'Verboden',
        'message' => 'U heeft geen toestemming om deze pagina te bekijken of deze actie uit te voeren.',
    ],
    '404' => [
        'title' => 'Niet gevonden',
        'message' => 'We konden de pagina die u zoekt niet vinden. Deze is mogelijk verplaatst of verwijderd.',
    ],
    '405' => [
        'title' => 'Methode niet toegestaan',
        'message' => 'De actie die u probeert uit te voeren is niet toegestaan. Controleer de aanvraagmethode.',
    ],
    '406' => [
        'title' => 'Niet acceptabel',
        'message' => 'De server kan geen antwoord genereren dat voldoet aan de criteria van uw aanvraag.',
    ],
    '407' => [
        'title' => 'Proxy-authenticatie vereist',
        'message' => 'Voer geldige proxy-inloggegevens in om toegang te krijgen tot deze bron.',
    ],
    '408' => [
        'title' => 'Aanvraagtime-out',
        'message' => 'Uw aanvraag duurde te lang. Controleer uw verbinding en probeer het opnieuw.',
    ],
    '409' => [
        'title' => 'Conflict',
        'message' => 'Er is een conflict met de huidige staat van de bron. Controleer uw aanvraag.',
    ],
    '410' => [
        'title' => 'Verdwenen',
        'message' => 'De bron die u probeert te openen is permanent verwijderd.',
    ],
    '411' => [
        'title' => 'Lengte vereist',
        'message' => 'Voeg een geldige Content-Length header toe aan uw aanvraag.',
    ],
    '412' => [
        'title' => 'Voorwaarde mislukt',
        'message' => 'Uw aanvraag voldoet niet aan de voorwaarden die door de server zijn gesteld.',
    ],
    '413' => [
        'title' => 'Aanvraag te groot',
        'message' => 'Uw aanvraag is te groot om te verwerken. Verklein de grootte en probeer het opnieuw.',
    ],
    '414' => [
        'title' => 'URI te lang',
        'message' => 'De opgevraagde URL is te lang. Maak deze korter en dien de aanvraag opnieuw in.',
    ],
    '415' => [
        'title' => 'Niet-ondersteund mediatype',
        'message' => 'De server kan dit type media niet verwerken. Pas het formaat van uw aanvraag aan.',
    ],
    '416' => [
        'title' => 'Bereik niet bereikbaar',
        'message' => 'Het opgevraagde bereik is niet beschikbaar voor deze bron.',
    ],
    '417' => [
        'title' => 'Verwachting mislukt',
        'message' => 'De server kon niet voldoen aan de verwachtingen in uw aanvraag.',
    ],
    '418' => [
        'title' => 'Niet-ondersteunde aanvraag',
        'message' => 'De server weigert deze aanvraag te verwerken omdat deze niet wordt ondersteund. Controleer uw aanvraag en probeer het opnieuw.',
    ],
    '419' => [
        'title' => 'Pagina verlopen',
        'message' => 'Uw sessie is verlopen. Laad de pagina opnieuw en probeer het opnieuw.',
    ],
    '421' => [
        'title' => 'Verkeerd gerichte aanvraag',
        'message' => 'Uw aanvraag is naar de verkeerde server verzonden. Probeer het opnieuw.',
    ],
    '422' => [
        'title' => 'Onverwerkbare entiteit',
        'message' => 'We konden uw aanvraag niet verwerken vanwege ongeldige gegevens. Controleer de gegevens en probeer het opnieuw.',
    ],
    '423' => [
        'title' => 'Vergrendeld',
        'message' => 'De bron is momenteel vergrendeld en kan niet worden gewijzigd. Probeer het later opnieuw.',
    ],
    '424' => [
        'title' => 'Mislukte afhankelijkheid',
        'message' => 'Deze aanvraag is mislukt omdat een eerdere gerelateerde aanvraag niet is geslaagd.',
    ],
    '425' => [
        'title' => 'Te vroeg',
        'message' => 'De server is nog niet klaar om deze aanvraag te verwerken. Probeer het later opnieuw.',
    ],
    '426' => [
        'title' => 'Upgrade vereist',
        'message' => 'Upgrade uw protocol of client om deze aanvraag uit te voeren.',
    ],
    '428' => [
        'title' => 'Voorwaarde vereist',
        'message' => 'Deze aanvraag vereist dat aan bepaalde voorwaarden wordt voldaan. Voeg de benodigde headers toe.',
    ],
    '429' => [
        'title' => 'Te veel aanvragen',
        'message' => 'U heeft in korte tijd te veel aanvragen ingediend. Wacht even en probeer het opnieuw.',
    ],
    '431' => [
        'title' => 'Aanvraagheaders te groot',
        'message' => 'De headers van uw aanvraag zijn te groot. Verklein de grootte en probeer het opnieuw.',
    ],
    '444' => [
        'title' => 'Verbinding gesloten',
        'message' => 'De server heeft de verbinding gesloten zonder een antwoord te sturen.',
    ],
    '451' => [
        'title' => 'Niet beschikbaar om juridische redenen',
        'message' => 'Toegang tot deze bron is beperkt vanwege wettelijke of regelgevende redenen.',
    ],
    '499' => [
        'title' => 'Aanvraag geannuleerd door client',
        'message' => 'De verbinding is door de client verbroken voordat de aanvraag kon worden voltooid.',
    ],
    '500' => [
        'title' => 'Serverfout',
        'message' => 'Er is een onverwachte fout opgetreden op de server. Probeer het later opnieuw of neem contact op met de ondersteuning als het probleem aanhoudt.',
    ],
    '501' => [
        'title' => 'Niet geïmplementeerd',
        'message' => 'Deze functionaliteit wordt niet ondersteund door de server.',
    ],
    '502' => [
        'title' => 'Bad Gateway',
        'message' => 'De server heeft een ongeldig antwoord ontvangen van een bovenliggende server. Probeer het opnieuw.',
    ],
    '503' => [
        'title' => 'Dienst niet beschikbaar',
        'message' => 'Ons platform ondergaat momenteel onderhoud. We verwachten snel weer online te zijn. Bedankt voor uw geduld.',
    ],
    '504' => [
        'title' => 'Gateway-time-out',
        'message' => 'De server heeft de time-outlimiet overschreden tijdens het wachten op een antwoord. Probeer het later opnieuw.',
    ],
    '505' => [
        'title' => 'HTTP-versie niet ondersteund',
        'message' => 'De server ondersteunt de HTTP-versie van deze aanvraag niet.',
    ],
    '506' => [
        'title' => 'Interne configuratiefout',
        'message' => 'De server heeft een interne configuratiefout vastgesteld. Probeer het later opnieuw.',
    ],
    '507' => [
        'title' => 'Onvoldoende opslagruimte',
        'message' => 'De server kan de gegevens die nodig zijn om deze aanvraag te voltooien niet opslaan.',
    ],
    '508' => [
        'title' => 'Lus gedetecteerd',
        'message' => 'De server heeft een oneindige lus gedetecteerd tijdens het verwerken van de aanvraag.',
    ],
    '509' => [
        'title' => 'Bandbreedte limiet overschreden',
        'message' => 'Deze website heeft zijn toegewezen bandbreedtelimiet overschreden. Probeer het later opnieuw.',
    ],
    '510' => [
        'title' => 'Niet verlengd',
        'message' => 'Deze aanvraag vereist aanvullende extensies die niet door de server worden ondersteund.',
    ],
    '511' => [
        'title' => 'Netwerkauthenticatie vereist',
        'message' => 'U moet inloggen om toegang te krijgen tot dit netwerk. Voer uw inloggegevens in.',
    ],
];
