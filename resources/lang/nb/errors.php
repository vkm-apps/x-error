<?php

return [
    '400' => [
        'title' => 'Ugyldig forespørsel',
        'message' => 'Serveren forsto ikke forespørselen din. Vennligst sjekk informasjonen og prøv igjen.',
    ],
    '401' => [
        'title' => 'Uautorisert',
        'message' => 'Du har ikke tilgang til denne resursen. Vennligst sjekk legitimasjonen din og prøv igjen.',
    ],
    '402' => [
        'title' => 'Betaling kreves',
        'message' => 'Denne handlingen krever betaling. Vennligst gjør opp kontoen din for å fortsette.',
    ],
    '403' => [
        'title' => 'Forbudt',
        'message' => 'Du har ikke tillatelse til å åpne denne siden eller utføre denne handlingen.',
    ],
    '404' => [
        'title' => 'Ikke funnet',
        'message' => 'Vi fant ikke siden du lette etter. Den kan ha blitt flyttet eller slettet.',
    ],
    '405' => [
        'title' => 'Metode ikke tillatt',
        'message' => 'Handlingen du prøver på er ikke tillatt. Vennligst sjekk forespørselsmetoden.',
    ],
    '406' => [
        'title' => 'Ikke akseptabelt',
        'message' => 'Serveren kan ikke gi et svar som samsvarer med forespørselens kriterier.',
    ],
    '407' => [
        'title' => 'Proxy-autentisering kreves',
        'message' => 'Vennligst oppgi gyldig proxy-legitimasjon for å få tilgang til denne resursen.',
    ],
    '408' => [
        'title' => 'Tidsavbrudd for forespørsel',
        'message' => 'Forespørselen din tok for lang tid. Vennligst sjekk tilkoblingen din og prøv igjen.',
    ],
    '409' => [
        'title' => 'Konflikt',
        'message' => 'Det oppsto en konflikt med gjeldende status for resursen. Vennligst sjekk forespørselen din.',
    ],
    '410' => [
        'title' => 'Borte',
        'message' => 'Resursen du prøver å nå er permanent fjernet.',
    ],
    '411' => [
        'title' => 'Lengde påkrevd',
        'message' => 'Vennligst oppgi en gyldig Content-Length-header i forespørselen din.',
    ],
    '412' => [
        'title' => 'Forutsetning mislyktes',
        'message' => 'Forespørselen din oppfylte ikke de nødvendige vilkårene som kreves av serveren.',
    ],
    '413' => [
        'title' => 'For stor datamengde',
        'message' => 'Forespørselen din er for stor til å behandles. Vennligst reduser størrelsen og prøv igjen.',
    ],
    '414' => [
        'title' => 'URI er for lang',
        'message' => 'Nettadressen du forespurte er for lang. Prøv å forkorte den og send på nytt.',
    ],
    '415' => [
        'title' => 'Ustøttet medietype',
        'message' => 'Serveren kan ikke behandle denne medietypen. Vennligst juster forespørselsformatet.',
    ],
    '416' => [
        'title' => 'Området er ikke tilfredsstillende',
        'message' => 'Det forespurte området er ikke tilgjengelig for denne resursen.',
    ],
    '417' => [
        'title' => 'Forventning mislyktes',
        'message' => 'Serveren kunde ikke oppfylle forventningene som er spesifisert i forespørselen din.',
    ],
    '418' => [
        'title' => 'Ustøttet forespørsel',
        'message' => 'Serveren nekter å behandle denne forespørselen da den ikke er støttet. Vennligst sjekk forespørselen din og prøv igjen.',
    ],
    '419' => [
        'title' => 'Siden har utløpt',
        'message' => 'Økten din har utløpt. Vennligst oppdater siden og prøv igjen.',
    ],
    '421' => [
        'title' => 'Feilaktig rettet forespørsel',
        'message' => 'Forespørselen din ble sendt to feil server. Vennligst prøv igjen.',
    ],
    '422' => [
        'title' => 'Ubehandlingsbar enhet',
        'message' => 'Vi kunne ikke behandle forespørselen din på grunn av ugyldige data. Vennligst sjekk og prøv igjen.',
    ],
    '423' => [
        'title' => 'Låst',
        'message' => 'Resursen er for øyeblikket låst og kan ikke endres. Prøv igjen senere.',
    ],
    '424' => [
        'title' => 'Mislyktes avhengighet',
        'message' => 'Denne forespørselen mislyktes fordi en tidligere relatert forespørsel ikke var vellykket.',
    ],
    '425' => [
        'title' => 'For tidlig',
        'message' => 'Serveren er ikke klar til å behandle denne forespørselen ennå. Prøv igjen senere.',
    ],
    '426' => [
        'title' => 'Oppgradering påkrevd',
        'message' => 'Vennligst oppgrader protokollen eller klienten for å utføre denne forespørselen.',
    ],
    '428' => [
        'title' => 'Forutsetning påkrevd',
        'message' => 'Denne forespørselen krever at visse vilkår er oppfylt. Vennligst inkluder de nødvendige headerne.',
    ],
    '429' => [
        'title' => 'For mange forespørsler',
        'message' => 'Du har sendt for mange forespørsler på kort tid. Vennligst vent litt og prøv igjen.',
    ],
    '431' => [
        'title' => 'Felt for forespørselsheader for store',
        'message' => 'Headerne i forespørselen din er for store. Vennligst reduser størrelsen og prøv igjen.',
    ],
    '444' => [
        'title' => 'Tilkobling lukket',
        'message' => 'Serveren lukket tilkoblingen uten å sende et svar.',
    ],
    '451' => [
        'title' => 'Utilgjengelig av juridiske årsaker',
        'message' => 'Tilgang til denne resursen er begrenset på grunn av juridiske årsaker eller regelverk.',
    ],
    '499' => [
        'title' => 'Klient lukket forespørsel',
        'message' => 'Tilkoblingen ble avbrutt av klienten før forespørselen kunne fullføres.',
    ],
    '500' => [
        'title' => 'Serverfeil',
        'message' => 'En uventet feil oppsto på serveren. Vennligst prøv igjen senere, eller kontakt kundestøtte hvis problemet vedvarer.',
    ],
    '501' => [
        'title' => 'Ikke implementert',
        'message' => 'Denne funksjonaliteten støttes ikke av serveren.',
    ],
    '502' => [
        'title' => 'Ugyldig gateway',
        'message' => 'Serveren mottok et ugyldig svar fra en overordnet server. Vennligst prøv igjen.',
    ],
    '503' => [
        'title' => 'Tjenesten er utilgjengelig',
        'message' => 'Plattformen vår gjennomgår for øyeblikket vedlikehold. Vi forventer å være tilbake på nett om kort tid. Takk for tålmodigheten.',
    ],
    '504' => [
        'title' => 'Tidsavbrudd for gateway',
        'message' => 'Serveren tidsavbrøt mens den ventet på svar. Vennligst prøv igjen senere.',
    ],
    '505' => [
        'title' => 'HTTP-versjon støttes ikke',
        'message' => 'Serveren støtter ikke HTTP-versjonen som ble brukt i denne forespørselen.',
    ],
    '506' => [
        'title' => 'Variant forhandler også',
        'message' => 'Serveren støtte på en intern konfigurasjonsfeil. Vennligst prøv igjen senere.',
    ],
    '507' => [
        'title' => 'Utilstrekkelig lagringsplass',
        'message' => 'Serveren kan ikke lagre dataene som kreves for å fullføre forespørselen.',
    ],
    '508' => [
        'title' => 'Løkke oppdaget',
        'message' => 'Serveren oppdaget en uendelig løkke under behandlingen av forespørselen.',
    ],
    '509' => [
        'title' => 'Båndbreddegrense overskredet',
        'message' => 'Dette nettstedet har overskredet sin tildelte båndbreddegrense. Vennligst prøv igjen senere.',
    ],
    '510' => [
        'title' => 'Ikke utvidet',
        'message' => 'Denne forespørselen krever ytterligere utvidelser som ikke støttes av serveren.',
    ],
    '511' => [
        'title' => 'Nettverksautentisering kreves',
        'message' => 'Du må autentisere deg for å få nettverkstilgang. Vennligst oppgi legitimasjon.',
    ],
];
