<?php

return [
    '400' => [
        'title' => 'Cerere incorectă',
        'message' => 'Serverul nu a putut înțelege cererea dumneavoastră. Vă rugăm să verificați informațiile introduse și să încercați din nou.',
    ],
    '401' => [
        'title' => 'Neautorizat',
        'message' => 'Nu sunteți autorizat să accesați această resursă. Vă rugăm să verificați datele de autentificare și să încercați din nou.',
    ],
    '402' => [
        'title' => 'Plată necesară',
        'message' => 'Această acțiune necesită plată. Vă rugăm să vă achitați soldul pentru a continua.',
    ],
    '403' => [
        'title' => 'Interzis',
        'message' => 'Nu aveți permisiunea de a accesa această pagină sau de a efectua această acțiune.',
    ],
    '404' => [
        'title' => 'Pagină negăsită',
        'message' => 'Nu am putut găsi pagina pe care o căutați. Este posibil să fi fost mutată sau ștearsă.',
    ],
    '405' => [
        'title' => 'Metodă nepermisă',
        'message' => 'Acțiunea pe care încercați să o efectuați nu este permisă. Vă rugăm să verificați metoda de cerere.',
    ],
    '406' => [
        'title' => 'Inacceptabil',
        'message' => 'Serverul nu poate oferi un răspuns care să corespundă criteriilor cererii dumneavoastră.',
    ],
    '407' => [
        'title' => 'Autentificare proxy necesară',
        'message' => 'Vă rugăm să introduceți date de autentificare proxy valide pentru a accesa această resursă.',
    ],
    '408' => [
        'title' => 'Timp de cerere expirat',
        'message' => 'Cererea dumneavoastră a durat prea mult. Vă rugăm să verificați conexiunea și să încercați din nou.',
    ],
    '409' => [
        'title' => 'Conflict',
        'message' => 'Există un conflict cu starea curentă a resursei. Vă rugăm să verificați cererea.',
    ],
    '410' => [
        'title' => 'Dispărut',
        'message' => 'Resursa pe care încercați să o accesați a fost eliminată definitiv.',
    ],
    '411' => [
        'title' => 'Lungime necesară',
        'message' => 'Vă rugăm să includeți un antet Content-Length valid în cerere.',
    ],
    '412' => [
        'title' => 'Precondiție eșuată',
        'message' => 'Cererea dumneavoastră nu a îndeplinit condițiile necesare impuse de server.',
    ],
    '413' => [
        'title' => 'Date prea mari',
        'message' => 'Cererea dumneavoastră este prea mare pentru a fi procesată. Vă rugăm să reduceți dimensiunea și să încercați din nou.',
    ],
    '414' => [
        'title' => 'URI prea lung',
        'message' => 'Adresa URL solicitată este prea lungă. Încercați să o scurtați și trimiteți din nou.',
    ],
    '415' => [
        'title' => 'Tip de media neacceptat',
        'message' => 'Serverul nu poate procesa acest tip de media. Vă rugăm să ajustați formatul cererii.',
    ],
    '416' => [
        'title' => 'Interval nerealizabil',
        'message' => 'Intervalul solicitat nu este disponibil pentru această resursă.',
    ],
    '417' => [
        'title' => 'Așteptare eșuată',
        'message' => 'Serverul nu a putut îndeplini așteptările specificate în cererea dumneavoastră.',
    ],
    '418' => [
        'title' => 'Cerere neacceptată',
        'message' => 'Serverul refuză să proceseze această cerere deoarece nu este acceptată. Vă rugăm să verificați cererea și să încercați din nou.',
    ],
    '419' => [
        'title' => 'Pagină expirată',
        'message' => 'Sesiunea dumneavoastră a expirat. Vă rugăm să reîncărcați pagina și să încercați din nou.',
    ],
    '421' => [
        'title' => 'Cerere redirecționată greșit',
        'message' => 'Cererea dumneavoastră a fost trimisă la un server greșit. Vă rugăm să încercați din nou.',
    ],
    '422' => [
        'title' => 'Entitate neprocesabilă',
        'message' => 'Nu am putut procesa cererea din cauza unor date nevalide. Vă rugăm să le verificați și să încercați din nou.',
    ],
    '423' => [
        'title' => 'Blocat',
        'message' => 'Resursa este momentan blocată și nu poate fi modificată. Vă rugăm să încercați mai târziu.',
    ],
    '424' => [
        'title' => 'Dependență eșuată',
        'message' => 'Această cerere a eșuat deoarece o cerere anterioară conexă nu a avut succes.',
    ],
    '425' => [
        'title' => 'Prea devreme',
        'message' => 'Serverul nu este încă pregătit să proceseze această cerere. Vă rugăm să încercați mai târziu.',
    ],
    '426' => [
        'title' => 'Upgrade necesar',
        'message' => 'Vă rugăm să actualizați protocolul sau clientul pentru a efectua această cerere.',
    ],
    '428' => [
        'title' => 'Precondiție necesară',
        'message' => 'Această cerere necesită îndeplinirea anumitor condiții. Vă rugăm să includeți antetele necesare.',
    ],
    '429' => [
        'title' => 'Prea multe cereri',
        'message' => 'Ați trimis prea multe cereri într-un interval scurt de timp. Vă rugăm să așteptați un moment și să încercați din nou.',
    ],
    '431' => [
        'title' => 'Câmpuri de antet prea mari',
        'message' => 'Antetele cererii dumneavoastră sunt prea mari. Vă rugăm să reduceți dimensiunea și să încercați din nou.',
    ],
    '444' => [
        'title' => 'Conexiune închisă',
        'message' => 'Serverul a închis conexiunea fără a trimite un răspuns.',
    ],
    '451' => [
        'title' => 'Indisponibil din motive legale',
        'message' => 'Accesul la această resursă este restricționat din motive legale sau de reglementare.',
    ],
    '499' => [
        'title' => 'Cerere închisă de client',
        'message' => 'Conexiunea a fost închisă de client înainte ca cererea să fie finalizată.',
    ],
    '500' => [
        'title' => 'Eroare de server',
        'message' => 'A apărut o eroare neașteptată pe server. Vă rugăm să încercați din nou mai târziu sau să contactați asistența dacă problema persistă.',
    ],
    '501' => [
        'title' => 'Neimplementat',
        'message' => 'Această funcționalitate nu este acceptată de server.',
    ],
    '502' => [
        'title' => 'Gateway defect',
        'message' => 'Serverul a primit un răspuns nevalid de la un server upstream. Vă rugăm să încercați din nou.',
    ],
    '503' => [
        'title' => 'Serviciu indisponibil',
        'message' => 'Platforma noastră este momentan în întreținere. Estimăm că vom fi din nou online în curând. Vă mulțumim pentru înțelegere.',
    ],
    '504' => [
        'title' => 'Timp de gateway expirat',
        'message' => 'Serverul a expirat în timp ce aștepta un răspuns. Vă rugăm să încercați din nou mai târziu.',
    ],
    '505' => [
        'title' => 'Versiune HTTP neacceptată',
        'message' => 'Serverul nu acceptă versiunea HTTP utilizată în această cerere.',
    ],
    '506' => [
        'title' => 'Varianta negociază de asemenea',
        'message' => 'Serverul a întâmpinat o eroare internă de configurare. Vă rugăm să încercați din nou mai târziu.',
    ],
    '507' => [
        'title' => 'Spațiu de stocare insuficient',
        'message' => 'Serverul nu poate stoca datele necesare pentru a finaliza această cerere.',
    ],
    '508' => [
        'title' => 'Buclă detectată',
        'message' => 'Serverul a detectat o buclă infinită în timpul procesării cererii.',
    ],
    '509' => [
        'title' => 'Limită de bandă depășită',
        'message' => 'Acest site a depășit limita de lățime de bandă alocată. Vă rugăm să încercați din nou mai târziu.',
    ],
    '510' => [
        'title' => 'Neextins',
        'message' => 'Această cerere necesită extensii suplimentare care nu sunt acceptate de server.',
    ],
    '511' => [
        'title' => 'Autentificare de rețea necesară',
        'message' => 'Trebuie să vă autentificați pentru a obține acces la rețea. Vă rugăm să introduceți datele de autentificare.',
    ],
];
