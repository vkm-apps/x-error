<?php

return [
    '400' => [
        'title' => 'Virheellinen pyyntö',
        'message' => 'Palvelin ei ymmärtänyt pyyntöäsi. Tarkista antamasi tiedot ja yritä uudelleen.',
    ],
    '401' => [
        'title' => 'Luvaton pääsy',
        'message' => 'Sinulla ei ole oikeutta tarkastella tätä resurssia. Tarkista kirjautumistietosi ja yritä uudelleen.',
    ],
    '402' => [
        'title' => 'Maksullinen palvelu',
        'message' => 'Tämä toiminto vaatii maksun suorittamisen. Hoitakaa maksunne jatkaaksenne.',
    ],
    '403' => [
        'title' => 'Kielletty',
        'message' => 'Sinulla ei ole oikeutta tarkastella tätä sivua tai suorittaa tätä toimintoa.',
    ],
    '404' => [
        'title' => 'Sivua ei löydy',
        'message' => 'Etsimääsi sivua ei löytynyt. Se on saattanut siirtyä tai se on poistettu.',
    ],
    '405' => [
        'title' => 'Metodi ei ole sallittu',
        'message' => 'Toiminto ei ole sallittu. Tarkista pyynnön HTTP-metodi.',
    ],
    '406' => [
        'title' => 'Ei hyväksyttävissä',
        'message' => 'Palvelin ei pysty tuottamaan vastausta, joka vastaisi pyyntösi kriteereitä.',
    ],
    '407' => [
        'title' => 'Välityspalvelimen tunnistautuminen vaaditaan',
        'message' => 'Anna kelvolliset välityspalvelimen tunnistautumistiedot päästäksesi resurssiin.',
    ],
    '408' => [
        'title' => 'Pyynnön aikakatkaisu',
        'message' => 'Pyyntösi kesti liian kauan. Tarkista yhteys ja yritä uudelleen.',
    ],
    '409' => [
        'title' => 'Ristiriita',
        'message' => 'Pyynnössä on ristiriita resurssin nykyisen tilan kanssa. Tarkista pyyntösi.',
    ],
    '410' => [
        'title' => 'Poistunut',
        'message' => 'Etsimäsi resurssi on poistettu pysyvästi.',
    ],
    '411' => [
        'title' => 'Pituus vaaditaan',
        'message' => 'Lisää pyyntöösi kelvollinen Content-Length-otsake.',
    ],
    '412' => [
        'title' => 'Ehtojen täyttyminen epäonnistui',
        'message' => 'Pyyntösi ei täyttänyt palvelimen asettamia ennakkoehtoja.',
    ],
    '413' => [
        'title' => 'Lähetys on liian suuri',
        'message' => 'Pyyntösi on liian suuri käsiteltäväksi. Pienennä kokoa ja yritä uudelleen.',
    ],
    '414' => [
        'title' => 'URI on liian pitkä',
        'message' => 'Pyyntösi URL-osoite on liian pitkä. Lyhennä sitä ja yritä uudelleen.',
    ],
    '415' => [
        'title' => 'Tukematon mediatyyppi',
        'message' => 'Palvelin ei voi käsitellä tätä mediatyyppiä. Muuta pyynnön muotoa.',
    ],
    '416' => [
        'title' => 'Pyydettyä aluetta ei voida toimittaa',
        'message' => 'Pyytämäsi alue ei ole saatavilla tälle resurssille.',
    ],
    '417' => [
        'title' => 'Odotus epäonnistui',
        'message' => 'Palvelin ei voinut täyttää pyynnössä määriteltyjä odotuksia.',
    ],
    '418' => [
        'title' => 'Tukematon pyyntö',
        'message' => 'Palvelin kieltäytyy käsittelemästä tätä pyyntöä, koska se ei ole tuettu. Tarkista pyyntösi ja yritä uudelleen.',
    ],
    '419' => [
        'title' => 'Sivu vanhentui',
        'message' => 'Istuntosi on vanhentunut. Päivitä sivu ja yritä uudelleen.',
    ],
    '421' => [
        'title' => 'Väärin suunnattu pyyntö',
        'message' => 'Pyyntösi lähetettiin väärälle palvelimelle. Yritä uudelleen.',
    ],
    '422' => [
        'title' => 'Käsittelemätön kokonaisuus',
        'message' => 'Pyyntöäsi ei voitu käsitellä virheellisten tietojen vuoksi. Tarkista tiedot ja yritä uudelleen.',
    ],
    '423' => [
        'title' => 'Lukittu',
        'message' => 'Resurssi on tällä hetkellä lukittu eikä sitä voi muokata. Yritä myöhemmin uudelleen.',
    ],
    '424' => [
        'title' => 'Riippuvuusvirhe',
        'message' => 'Tämä pyyntö epäonnistui, koska aiempi siihen liittyvä pyyntö epäonnistui.',
    ],
    '425' => [
        'title' => 'Liian varhain',
        'message' => 'Palvelin ei ole vielä valmis käsittelemään tätä pyyntöä. Yritä myöhemmin uudelleen.',
    ],
    '426' => [
        'title' => 'Päivitys vaaditaan',
        'message' => 'Päivitä protokollasi tai asiakasohjelmasi suorittaaksesi tämän pyynnön.',
    ],
    '428' => [
        'title' => 'Ennakkoehto vaaditaan',
        'message' => 'Tämä pyyntö vaatii tiettyjen ehtojen täyttymistä. Lisää tarvittavat otsakkeet.',
    ],
    '429' => [
        'title' => 'Liian monta pyyntöä',
        'message' => 'Olet lähettänyt liian monta pyyntöä lyhyen ajan sisällä. Odota hetki ja yritä uudelleen.',
    ],
    '431' => [
        'title' => 'Pyynnön otsakekentät ovat liian suuria',
        'message' => 'Pyynnön otsakkeet ovat liian suuria. Pienennä niiden kokoa ja yritä uudelleen.',
    ],
    '444' => [
        'title' => 'Yhteys suljettu',
        'message' => 'Palvelin sulki yhteyden lähettämättä vastausta.',
    ],
    '451' => [
        'title' => 'Ei saatavilla laillisista syistä',
        'message' => 'Pääsyä tähän resurssiin on rajoitettu laillisten tai lakisääteisten syiden vuoksi.',
    ],
    '499' => [
        'title' => 'Asiakas sulki pyynnön',
        'message' => 'Asiakas katkaisi yhteyden ennen kuin pyyntö ehti valmistua.',
    ],
    '500' => [
        'title' => 'Palvelinvirhe',
        'message' => 'Palvelimella tapahtui odottamaton virhe. Yritä myöhemmin uudelleen tai ota yhteyttä tukeen, jos ongelma toistuu.',
    ],
    '501' => [
        'title' => 'Ei toteutettu',
        'message' => 'Palvelin ei tue tätä toiminnallisuutta.',
    ],
    '502' => [
        'title' => 'Viallinen yhdyskäytävä',
        'message' => 'Palvelin sai virheellisen vastauksen ylemmältä palvelimelta. Yritä uudelleen.',
    ],
    '503' => [
        'title' => 'Palvelu ei ole käytettävissä',
        'message' => 'Järjestelmässämme on parhaillaan huoltokatko. Palvelu palaa toimintaan pian. Kiitos kärsivällisyydestäsi.',
    ],
    '504' => [
        'title' => 'Yhdyskäytävän aikakatkaisu',
        'message' => 'Palvelin aikakatkaistiin vastausta odotettaessa. Yritä myöhemmin uudelleen.',
    ],
    '505' => [
        'title' => 'HTTP-versiota ei tueta',
        'message' => 'Palvelin ei tue tässä pyynnössä käytettyä HTTP-versiota.',
    ],
    '506' => [
        'title' => 'Variantti neuvottelee myös',
        'message' => 'Palvelin kohtasi sisäisen määritysvirheen. Yritä myöhemmin uudelleen.',
    ],
    '507' => [
        'title' => 'Riittämätön tallennustila',
        'message' => 'Palvelin ei pysty tallentamaan pyynnön suorittamiseen tarvittavia tietoja.',
    ],
    '508' => [
        'title' => 'Silmukka havaittu',
        'message' => 'Palvelin havaitsi ikuisen silmukan käsitellessään pyyntöä.',
    ],
    '509' => [
        'title' => 'Kaistanleveysraja ylittyi',
        'message' => 'Tämä sivusto on ylittänyt sille varatun kaistanleveyden. Yritä myöhemmin uudelleen.',
    ],
    '510' => [
        'title' => 'Ei laajennettu',
        'message' => 'Tämä pyyntö vaatii lisälaajennuksia, joita palvelin ei tue.',
    ],
    '511' => [
        'title' => 'Verkkotunnistautuminen vaaditaan',
        'message' => 'Sinun on tunnistauduttava päästäksesi verkkoon. Anna kirjautumistietosi.',
    ],
];
