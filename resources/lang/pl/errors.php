<?php

return [
    '400' => [
        'title' => 'Błędne zapytanie',
        'message' => 'Serwer nie mógł zrozumieć Twojego zapytania. Sprawdź wprowadzone informacje i spróbuj ponownie.',
    ],
    '401' => [
        'title' => 'Brak autoryzacji',
        'message' => 'Nie masz uprawnień dostępu do tego zasobu. Sprawdź swoje dane logowania i spróbuj ponownie.',
    ],
    '402' => [
        'title' => 'Wymagana płatność',
        'message' => 'Ta akcja wymaga płatności. Ureguluj należności na koncie, aby kontynuować.',
    ],
    '403' => [
        'title' => 'Zabronione',
        'message' => 'Nie masz uprawnień do przeglądania tej strony lub wykonania tej akcji.',
    ],
    '404' => [
        'title' => 'Nie znaleziono',
        'message' => 'Nie mogliśmy znaleźć strony, której szukasz. Mogła zostać przeniesiona lub usunięta.',
    ],
    '405' => [
        'title' => 'Metoda niedozwolona',
        'message' => 'Akcja, którą próbujesz wykonać, jest niedozwolona. Sprawdź metodę zapytania.',
    ],
    '406' => [
        'title' => 'Niedozwolone',
        'message' => 'Serwer nie może wygenerować odpowiedzi spełniającej kryteria Twojego zapytania.',
    ],
    '407' => [
        'title' => 'Wymagane uwierzytelnienie serwera proxy',
        'message' => 'Podaj poprawne dane uwierzytelniające serwera proxy, aby uzyskać dostęp do tego zasobu.',
    ],
    '408' => [
        'title' => 'Przekroczony czas żądania',
        'message' => 'Twoje zapytanie trwało zbyt długo. Sprawdź swoje połączenie i spróbuj ponownie.',
    ],
    '409' => [
        'title' => 'Konflikt',
        'message' => 'Występuje konflikt z obecnym stanem zasobu. Sprawdź swoje zapytanie.',
    ],
    '410' => [
        'title' => 'Usunięto',
        'message' => 'Zasób, do którego próbujesz uzyskać dostęp, został trwale usunięty.',
    ],
    '411' => [
        'title' => 'Wymagana długość',
        'message' => 'Dołącz poprawny nagłówek Content-Length do swojego zapytania.',
    ],
    '412' => [
        'title' => 'Warunek wstępny nie został spełniony',
        'message' => 'Twoje zapytanie nie spełniło warunków wymaganych przez serwer.',
    ],
    '413' => [
        'title' => 'Zbyt duży ładunek',
        'message' => 'Twoje zapytanie jest zbyt duże, by je przetworzyć. Zmniejsz rozmiar i spróbuj ponownie.',
    ],
    '414' => [
        'title' => 'Zbyt długi adres URI',
        'message' => 'Adres URL zapytania jest zbyt długi. Skróć go i spróbuj ponownie.',
    ],
    '415' => [
        'title' => 'Niewspierany typ nośnika',
        'message' => 'Serwer nie może przetworzyć tego typu nośnika. Zmień format zapytania.',
    ],
    '416' => [
        'title' => 'Zakres nie do spełnienia',
        'message' => 'Wnioskowany zakres nie jest dostępny dla tego zasobu.',
    ],
    '417' => [
        'title' => 'Oczekiwanie nie spełnione',
        'message' => 'Serwer nie mógł spełnić oczekiwań określonych w Twoim zapytaniu.',
    ],
    '418' => [
        'title' => 'Niewspierane zapytanie',
        'message' => 'Serwer odmawia przetworzenia tego zapytania, ponieważ nie jest ono wspierane. Sprawdź zapytanie i spróbuj ponownie.',
    ],
    '419' => [
        'title' => 'Strona wygasła',
        'message' => 'Twoja sesja wygasła. Odśwież stronę i spróbuj ponownie.',
    ],
    '421' => [
        'title' => 'Błędnie skierowane zapytanie',
        'message' => 'Twoje zapytanie zostało wysłane do niewłaściwego serwera. Spróbuj ponownie.',
    ],
    '422' => [
        'title' => 'Nieprzetwarzalna jednostka',
        'message' => 'Nie mogliśmy przetworzyć Twojego zapytania z powodu niepoprawnych danych. Sprawdź je i spróbuj ponownie.',
    ],
    '423' => [
        'title' => 'Zablokowane',
        'message' => 'Zasób jest obecnie zablokowany i nie można go modyfikować. Spróbuj ponownie później.',
    ],
    '424' => [
        'title' => 'Błąd zależności',
        'message' => 'To zapytanie nie powiodło się, ponieważ powiązane z nim poprzednie zapytanie zakończyło się błędem.',
    ],
    '425' => [
        'title' => 'Zbyt wcześnie',
        'message' => 'Serwer nie jest jeszcze gotowy do przetworzenia tego zapytania. Spróbuj ponownie później.',
    ],
    '426' => [
        'title' => 'Wymagana aktualizacja',
        'message' => 'Zaktualizuj protokół lub klienta, aby wykonać to zapytanie.',
    ],
    '428' => [
        'title' => 'Wymagany warunek wstępny',
        'message' => 'To zapytanie wymaga spełnienia określonych warunków. Dołącz wymagane nagłówki.',
    ],
    '429' => [
        'title' => 'Zbyt wiele żądań',
        'message' => 'Wysłałeś zbyt wiele zapytań w krótkim czasie. Odczekaj chwilę i spróbuj ponownie.',
    ],
    '431' => [
        'title' => 'Zbyt duże pola nagłówka zapytania',
        'message' => 'Nagłówki Twojego zapytania są zbyt duże. Zmniejsz ich rozmiar i spróbuj ponownie.',
    ],
    '444' => [
        'title' => 'Połączenie zamknięte',
        'message' => 'Serwer zamknął połączenie bez wysyłania odpowiedzi.',
    ],
    '451' => [
        'title' => 'Niedostępne ze względów prawnych',
        'message' => 'Dostęp do tego zasobu jest ograniczony z przyczyn prawnych lub regulacyjnych.',
    ],
    '499' => [
        'title' => 'Zapytanie zamknięte przez klienta',
        'message' => 'Połączenie zostało przerwane przez klienta przed ukończeniem zapytania.',
    ],
    '500' => [
        'title' => 'Błąd serwera',
        'message' => 'Na serwerze wystąpił nieoczekiwany błąd. Spróbuj ponownie później lub skontaktuj się ze wsparciem technicznym, jeśli problem będzie się powtarzał.',
    ],
    '501' => [
        'title' => 'Nie wdrożono',
        'message' => 'Ta funkcjonalność nie jest wspierana przez serwer.',
    ],
    '502' => [
        'title' => 'Błędna brama',
        'message' => 'Serwer otrzymał niepoprawną odpowiedź od serwera nadrzędnego. Spróbuj ponownie.',
    ],
    '503' => [
        'title' => 'Usługa niedostępna',
        'message' => 'Nasza platforma przechodzi obecnie prace konserwacyjne. Spodziewamy się rychłego powrotu do trybu online. Dziękujemy za cierpliwość.',
    ],
    '504' => [
        'title' => 'Przekroczony czas bramy',
        'message' => 'Serwer przekroczył limit czasu oczekiwania na odpowiedź. Spróbuj ponownie później.',
    ],
    '505' => [
        'title' => 'Wersja HTTP niewspierana',
        'message' => 'Serwer nie obsługuje wersji protokołu HTTP użytej w tym zapytaniu.',
    ],
    '506' => [
        'title' => 'Wariant również negocjuje',
        'message' => 'Serwer napotkał wewnętrzny błąd konfiguracji. Spróbuj ponownie później.',
    ],
    '507' => [
        'title' => 'Niewystarczająca ilość pamięci',
        'message' => 'Serwer nie może zapisać danych niezbędnych do ukończenia tego zapytania.',
    ],
    '508' => [
        'title' => 'Wykryto pętlę',
        'message' => 'Serwer wykrył nieskończoną pętlę podczas przetwarzania zapytania.',
    ],
    '509' => [
        'title' => 'Przekroczony limit transferu',
        'message' => 'Ta strona przekroczyła przydzielony limit transferu danych. Spróbuj ponownie później.',
    ],
    '510' => [
        'title' => 'Brak rozszerzenia',
        'message' => 'To zapytanie wymaga dodatkowych rozszerzeń, których serwer nie obsługuje.',
    ],
    '511' => [
        'title' => 'Wymagane uwierzytelnienie sieciowe',
        'message' => 'Musisz się uwierzytelnić, aby uzyskać dostęp do sieci. Wprowadź swoje dane.',
    ],
];
