<?php

return [
    '400' => [
        'title' => 'Felaktig begäran',
        'message' => 'Servern förstod inte din begäran. Kontrollera uppgifterna och försök igen.',
    ],
    '401' => [
        'title' => 'Obehörig',
        'message' => 'Du har inte behörighet att komma åt denna resurs. Kontrollera dina inloggningsuppgifter och försök igen.',
    ],
    '402' => [
        'title' => 'Betalning krävs',
        'message' => 'Denna åtgärd kräver betalning. Reglera ditt konto för att fortsätta.',
    ],
    '403' => [
        'title' => 'Förbjudet',
        'message' => 'Du saknar behörighet att visa denna sida eller utföra denna åtgärd.',
    ],
    '404' => [
        'title' => 'Sidan hittades inte',
        'message' => 'Vi kunde inte hitta sidan du sökte efter. Den kan ha flyttats eller tagits bort.',
    ],
    '405' => [
        'title' => 'Metoden tillåts inte',
        'message' => 'Åtgärden du försöker utföra är inte tillåten. Kontrollera begäransmetoden.',
    ],
    '406' => [
        'title' => 'Inte acceptabel',
        'message' => 'Servern kan inte returnera ett svar som matchar dina kriterier.',
    ],
    '407' => [
        'title' => 'Proxy-autentisering krävs',
        'message' => 'Ange giltiga proxy-uppgifter för att komma åt denna resurs.',
    ],
    '408' => [
        'title' => 'Tidsgränsen för begäran överskreds',
        'message' => 'Din begäran tog för lång tid. Kontrollera din anslutning och försök igen.',
    ],
    '409' => [
        'title' => 'Konflikt',
        'message' => 'Det uppstod en konflikt med resursens nuvarande status. Kontrollera din begäran.',
    ],
    '410' => [
        'title' => 'Borta',
        'message' => 'Resursen du försöker nå har tagits bort permanent.',
    ],
    '411' => [
        'title' => 'Längd krävs',
        'message' => 'Vänligen inkludera en giltig Content-Length-header i din begäran.',
    ],
    '412' => [
        'title' => 'Villkor misslyckades',
        'message' => 'Din begäran uppfyllde inte de nödvändiga villkor som servern kräver.',
    ],
    '413' => [
        'title' => 'Dataöverföringen är för stor',
        'message' => 'Din begäran är för stor för att bearbetas. Minska storleken och försök igen.',
    ],
    '414' => [
        'title' => 'URI är för lång',
        'message' => 'Den begärda webbadressen är för lång. Försök att korta ner den och skicka igen.',
    ],
    '415' => [
        'title' => 'Medietypen stöds inte',
        'message' => 'Servern kan inte bearbeta denna medietyp. Justera formatet på din begäran.',
    ],
    '416' => [
        'title' => 'Området kan inte tillgodoses',
        'message' => 'Det begärda intervallet är inte tillgängligt för denna resurs.',
    ],
    '417' => [
        'title' => 'Förväntan misslyckades',
        'message' => 'Servern kunde inte uppfylla förväntningarna som angetts i din begäran.',
    ],
    '418' => [
        'title' => 'Begäran stöds inte',
        'message' => 'Servern vägrar att bearbeta denna begäran då den inte stöds. Kontrollera din begäran och försök igen.',
    ],
    '419' => [
        'title' => 'Sidan har upphört att gälla',
        'message' => 'Din session har löpt ut. Ladda om sidan och försök igen.',
    ],
    '421' => [
        'title' => 'Felaktigt riktad begäran',
        'message' => 'Din begäran skickades till fel server. Vänligen försök igen.',
    ],
    '422' => [
        'title' => 'Felaktigt innehåll',
        'message' => 'Vi kunde inte behandla din begäran på grund av ogiltiga data. Kontrollera och försök igen.',
    ],
    '423' => [
        'title' => 'Låst',
        'message' => 'Resursen är för närvarande låst och kan inte ändras. Försök igen senare.',
    ],
    '424' => [
        'title' => 'Beroende misslyckades',
        'message' => 'Denna begäran misslyckades eftersom en tidigare relaterad begäran inte lyckades.',
    ],
    '425' => [
        'title' => 'För tidigt',
        'message' => 'Servern är inte redo att bearbeta denna begäran ännu. Försök igen senare.',
    ],
    '426' => [
        'title' => 'Uppgradering krävs',
        'message' => 'Vänligen uppgradera ditt protokoll eller klient för att utföra denna begäran.',
    ],
    '428' => [
        'title' => 'Villkor krävs',
        'message' => 'Denna begäran kräver att vissa villkor är uppfyllda. Inkludera de nödvändiga headers.',
    ],
    '429' => [
        'title' => 'För många begäranden',
        'message' => 'Du har skickat för många begäranden på kort tid. Vänta en stund och försök igen.',
    ],
    '431' => [
        'title' => 'Begärans headerfält är för stora',
        'message' => 'Begärans headers är för stora. Minska storleken och försök igen.',
    ],
    '444' => [
        'title' => 'Anslutningen stängdes',
        'message' => 'Servern stängde anslutningen utan att skicka ett svar.',
    ],
    '451' => [
        'title' => 'Otillgänglig av juridiska skäl',
        'message' => 'Åtkomsten till denna resurs är begränsad på grund av juridiska skäl eller lagkrav.',
    ],
    '499' => [
        'title' => 'Klienten stängde begäran',
        'message' => 'Anslutningen avbröts av klienten innan begäran hann slutföras.',
    ],
    '500' => [
        'title' => 'Serverfel',
        'message' => 'Ett oväntat fel uppstod på servern. Försök igen senare eller kontakta supporten om problemet kvarstår.',
    ],
    '501' => [
        'title' => 'Inte implementerad',
        'message' => 'Denna funktion stöds inte av servern.',
    ],
    '502' => [
        'title' => 'Felaktig gateway',
        'message' => 'Servern tog emot ett ogiltigt svar från en överordnad server. Vänligen försök igen.',
    ],
    '503' => [
        'title' => 'Tjänsten är inte tillgänglig',
        'message' => 'Vår plattform genomgår för närvarande underhåll. Vi förväntar oss att vara tillbaka inom kort. Tack för ditt tålamod.',
    ],
    '504' => [
        'title' => 'Tidsgränsen för gateway överskreds',
        'message' => 'Servern svarade inte i tid. Försök igen senare.',
    ],
    '505' => [
        'title' => 'HTTP-versionen stöds inte',
        'message' => 'Servern stöder inte den HTTP-version som användes i begäran.',
    ],
    '506' => [
        'title' => 'Variant också förhandlar',
        'message' => 'Servern stötte på ett internt konfigurationsfel. Vänligen försök igen senare.',
    ],
    '507' => [
        'title' => 'Otillräckligt lagringsutrymme',
        'message' => 'Servern kan inte lagra data som behövs för att slutföra begäran.',
    ],
    '508' => [
        'title' => 'Loop upptäckt',
        'message' => 'Servern upptäckte en oändlig loop under bearbetningen av begäran.',
    ],
    '509' => [
        'title' => 'Bandbreddsgränsen överskreds',
        'message' => 'Denna webbplats har överskridit sin tilldelade bandbreddsgräns. Vänligen försök igen senare.',
    ],
    '510' => [
        'title' => 'Inte förlängd',
        'message' => 'Denna begäran kräver ytterligare tillägg som inte stöds av servern.',
    ],
    '511' => [
        'title' => 'Nätverksautentisering krävs',
        'message' => 'Du måste autentisera dig för att få nätverksåtkomst. Vänligen ange dina uppgifter.',
    ],
];
