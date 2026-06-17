<?php

return [
    '400' => [
        'title' => 'Ugyldig anmodning',
        'message' => 'Serveren kunne ikke forstå din anmodning. Kontroller venligst oplysningerne og prøv igen.',
    ],
    '401' => [
        'title' => 'Uautoriseret',
        'message' => 'Du har ikke adgang til denne ressource. Kontroller venligst dine loginoplysninger og prøv igen.',
    ],
    '402' => [
        'title' => 'Betaling påkrævet',
        'message' => 'Denne handling kræver betaling. Betal venligst udestående for at fortsætte.',
    ],
    '403' => [
        'title' => 'Forbudt',
        'message' => 'Du har ikke tilladelse til at tilgå denne side eller udføre denne handling.',
    ],
    '404' => [
        'title' => 'Ikke fundet',
        'message' => 'Vi kunne ikke finde den side, du ledte efter. Den er muligvis blevet flyttet eller slettet.',
    ],
    '405' => [
        'title' => 'Metode ikke tillatt',
        'message' => 'Den handling, du forsøger, er ikke tilladt. Kontroller venligst anmodningsmetoden.',
    ],
    '406' => [
        'title' => 'Ikke acceptabelt',
        'message' => 'Serveren kan ikke levere et svar, der matcher dine anmodningskriterier.',
    ],
    '407' => [
        'title' => 'Proxy-autentificering påkrævet',
        'message' => 'Angiv venligst gyldige proxy-loginoplysninger for at få adgang til denne ressource.',
    ],
    '408' => [
        'title' => 'Tidsudløb for anmodning',
        'message' => 'Din anmodning tog for lang tid. Kontroller venligst din forbindelse og prøv igen.',
    ],
    '409' => [
        'title' => 'Konflikt',
        'message' => 'Der opstod en konflikt med ressourcens nuværende tilstand. Kontroller venligst din anmodning.',
    ],
    '410' => [
        'title' => 'Borte',
        'message' => 'Den ressource, du forsøger at tilgå, er blevet permanent fjernet.',
    ],
    '411' => [
        'title' => 'Længde påkrævet',
        'message' => 'Inkluder venligst en gyldig Content-Length-header i din anmodning.',
    ],
    '412' => [
        'title' => 'Forudsætning mislykkedes',
        'message' => 'Din anmodning opfyldte ikke de betingelser, som serveren kræver.',
    ],
    '413' => [
        'title' => 'Datamængde for stor',
        'message' => 'Din anmodning is for stor til at blive behandlet. Reducer venligst størrelsen og prøv igen.',
    ],
    '414' => [
        'title' => 'URI for lang',
        'message' => 'Den anmodede URL er for lang. Prøv at gøre den kortere og send igen.',
    ],
    '415' => [
        'title' => 'Ikke-understøttet medietype',
        'message' => 'Serveren kan ikke behandle denne medietype. Juster venligst dit anmodningsformat.',
    ],
    '416' => [
        'title' => 'Område kan ikke opfyldes',
        'message' => 'Det anmodede område er ikke tilgængeligt for denne ressource.',
    ],
    '417' => [
        'title' => 'Forventning mislykkedes',
        'message' => 'Serveren kunne ikke opfylde de forventninger, der er angivet i din anmodning.',
    ],
    '418' => [
        'title' => 'Ikke-understøttet anmodning',
        'message' => 'Serveren nægter at behandle denne anmodning, da den ikke understøttes. Kontroller venligst din anmodning og prøv igen.',
    ],
    '419' => [
        'title' => 'Siden er udløbet',
        'message' => 'Din session er udløbet. Genindlæs venligst siden og prøv igen.',
    ],
    '421' => [
        'title' => 'Forkert rettet anmodning',
        'message' => 'Din anmodning blev sendt til den forkerte server. Prøv venligst igen.',
    ],
    '422' => [
        'title' => 'Ubehandlet enhed',
        'message' => 'Vi kunne ikke behandle din anmodning på grund av ugyldige data. Kontroller venligst og prøv igen.',
    ],
    '423' => [
        'title' => 'Låst',
        'message' => 'Ressourcen er i øjeblikket låst og kan ikke ændres. Prøv venligst igen senere.',
    ],
    '424' => [
        'title' => 'Mislykket afhængighed',
        'message' => 'Denne anmodning mislykkedes, fordi en tidligere relateret anmodning ikke lykkedes.',
    ],
    '425' => [
        'title' => 'For tidligt',
        'message' => 'Serveren er endnu ikke klar til at behandle denne anmodning. Prøv igen senere.',
    ],
    '426' => [
        'title' => 'Opgradering påkrævet',
        'message' => 'Opgrader venligst din protokol eller klient for at udføre denne anmodning.',
    ],
    '428' => [
        'title' => 'Forudsætning påkrævet',
        'message' => 'Denne anmodning kræver, at visse betingelser er opfyldt. Medtag venligst de nødvendige headere.',
    ],
    '429' => [
        'title' => 'For mange anmodninger',
        'message' => 'Du har sendt for mange anmodninger på kort tid. Vent venligst et øjeblik og prøv igen.',
    ],
    '431' => [
        'title' => 'Anmodningsheaderfelter for store',
        'message' => 'Headerne i din anmodning er for store. Reducer venligst størrelsen og prøv igen.',
    ],
    '444' => [
        'title' => 'Forbindelse lukket',
        'message' => 'Serveren lukkede forbindelsen uden at sende et svar.',
    ],
    '451' => [
        'title' => 'Utilgængelig af juridiske årsager',
        'message' => 'Adgangen til denne ressource er begrænset på grund af juridiske eller lovgivningsmæssige årsager.',
    ],
    '499' => [
        'title' => 'Klient lukkede anmodning',
        'message' => 'Forbindelsen blev afbrudt af klienten, før anmodningen kunne fuldføres.',
    ],
    '500' => [
        'title' => 'Serverfejl',
        'message' => 'Der opstod en uventet fejl på serveren. Prøv venligst igen senere, eller kontakt support, hvis problemet fortsætter.',
    ],
    '501' => [
        'title' => 'Ikke implementeret',
        'message' => 'Denne funktion understøttes ikke af serveren.',
    ],
    '502' => [
        'title' => 'Ugyldig gateway',
        'message' => 'Serveren modtog et ugyldigt svar fra en upstream-server. Prøv venligst igen.',
    ],
    '503' => [
        'title' => 'Tjeneste utilgængelig',
        'message' => 'Vores platform er i øjeblikket under vedligeholdelse. Vi forventer at være online igen snart. Tak for din tålmodighed.',
    ],
    '504' => [
        'title' => 'Gateway-timeout',
        'message' => 'Serveren fik timeout, mens den ventede på svar. Prøv venligst igen senere.',
    ],
    '505' => [
        'title' => 'HTTP-version ikke understøttet',
        'message' => 'Serveren understøtter ikke den HTTP-version, der blev brugt i denne anmodning.',
    ],
    '506' => [
        'title' => 'Variant forhandler også',
        'message' => 'Serveren stødte på en intern konfigurationsfeil. Prøv venligst igen senere.',
    ],
    '507' => [
        'title' => 'Utilstrækkelig lagerplads',
        'message' => 'Serveren kan ikke gemme de data, der kræves for at fuldføre denne anmodning.',
    ],
    '508' => [
        'title' => 'Løkke registreret',
        'message' => 'Serveren registrerede en uendelig løkke under behandlingen af anmodningen.',
    ],
    '509' => [
        'title' => 'Båndbreddegrænse overskredet',
        'message' => 'Dette websted har overskredet sin tildelte båndbreddegrænse. Prøv venligst igen senere.',
    ],
    '510' => [
        'title' => 'Ikke udvidet',
        'message' => 'Denne anmodning kræver yderligere udvidelser, som ikke understøttes af serveren.',
    ],
    '511' => [
        'title' => 'Netværksgodkendelse påkrævet',
        'message' => 'Du skal godkendes for at få netværksadgang. Angiv venligst loginoplysninger.',
    ],
];
