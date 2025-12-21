<?php

return [
    '400' => [
        'title' => 'Ungültige Anfrage',
        'message' => 'Der Server konnte Ihre Anfrage nicht verstehen. Bitte überprüfen Sie die angegebenen Informationen und versuchen Sie es erneut.',
    ],
    '401' => [
        'title' => 'Nicht autorisierter Zugriff',
        'message' => 'Sie sind nicht berechtigt, auf diese Seite zuzugreifen. Bitte überprüfen Sie Ihre Zugangsdaten und versuchen Sie es erneut.',
    ],
    '402' => [
        'title' => 'Zahlung erforderlich',
        'message' => 'Diese Aktion erfordert eine Zahlung. Bitte begleichen Sie Ihr Konto, um fortzufahren.',
    ],
    '403' => [
        'title' => 'Zugriff verweigert',
        'message' => 'Sie haben keine Berechtigung, diese Seite zu betreten oder diese Aktion auszuführen.',
    ],
    '404' => [
        'title' => 'Seite nicht gefunden',
        'message' => 'Die angeforderte Seite konnte nicht gefunden werden. Sie wurde möglicherweise verschoben oder gelöscht.',
    ],
    '405' => [
        'title' => 'Methode nicht erlaubt',
        'message' => 'Die von Ihnen ausgeführte Aktion ist nicht erlaubt. Bitte überprüfen Sie die verwendete Anfragemethode.',
    ],
    '406' => [
        'title' => 'Nicht akzeptabel',
        'message' => 'Der Server kann keine Antwort liefern, die Ihren Anforderungen entspricht.',
    ],
    '407' => [
        'title' => 'Proxy-Authentifizierung erforderlich',
        'message' => 'Bitte geben Sie gültige Proxy-Zugangsdaten ein, um auf diese Seite zuzugreifen.',
    ],
    '408' => [
        'title' => 'Zeitüberschreitung der Anfrage',
        'message' => 'Ihre Anfrage hat zu lange gedauert. Überprüfen Sie Ihre Verbindung und versuchen Sie es erneut.',
    ],
    '409' => [
        'title' => 'Datenkonflikt',
        'message' => 'Die Aktion, die Sie ausführen möchten, steht im Widerspruch zum aktuellen Zustand des Inhalts. Bitte prüfen Sie Ihre Daten und versuchen Sie es erneut.',
    ],
    '410' => [
        'title' => 'Inhalt nicht verfügbar',
        'message' => 'Der Inhalt, auf den Sie zugreifen möchten, wurde dauerhaft entfernt.',
    ],
    '411' => [
        'title' => 'Längenangabe erforderlich',
        'message' => 'Ihre Anfrage enthält keine Angaben zur Größe der gesendeten Daten. Bitte überprüfen Sie dies und versuchen Sie es erneut.',
    ],
    '412' => [
        'title' => 'Voraussetzung fehlgeschlagen',
        'message' => 'Ihre Anfrage erfüllt nicht die vom Server festgelegten Bedingungen.',
    ],
    '413' => [
        'title' => 'Anfrage zu groß',
        'message' => 'Ihre Anfrage ist zu groß, um verarbeitet zu werden. Bitte verkleinern Sie sie und versuchen Sie es erneut.',
    ],
    '414' => [
        'title' => 'URL zu lang',
        'message' => 'Die angeforderte URL ist zu lang. Bitte kürzen Sie sie und senden Sie die Anfrage erneut.',
    ],
    '415' => [
        'title' => 'Nicht unterstützter Medientyp',
        'message' => 'Der Server kann diesen Medientyp nicht verarbeiten. Bitte passen Sie das Format Ihrer Anfrage an.',
    ],
    '416' => [
        'title' => 'Bereich nicht verfügbar',
        'message' => 'Der angeforderte Bereich ist für diesen Inhalt nicht verfügbar.',
    ],
    '417' => [
        'title' => 'Erwartungen nicht erfüllt',
        'message' => 'Der Server konnte die in Ihrer Anfrage angegebenen Erwartungen nicht erfüllen. Bitte überprüfen Sie Ihre Anfrage und versuchen Sie es erneut.',
    ],
    '418' => [
        'title' => 'Nicht unterstützte Aktion',
        'message' => 'Der Server weigert sich, diese Anfrage zu bearbeiten, da sie nicht unterstützt wird. Bitte überprüfen Sie Ihre Anfrage und versuchen Sie es erneut.',
    ],
    '419' => [
        'title' => 'Seite abgelaufen',
        'message' => 'Ihre Sitzung ist abgelaufen. Bitte laden Sie die Seite neu und versuchen Sie es erneut.',
    ],
    '421' => [
        'title' => 'Falsches Ziel der Anfrage',
        'message' => 'Ihre Anfrage wurde an den falschen Server gesendet. Bitte versuchen Sie es erneut.',
    ],
    '422' => [
        'title' => 'Unverarbeitbare Daten',
        'message' => 'Ihre Anfrage konnte aufgrund ungültiger Daten nicht verarbeitet werden. Bitte prüfen Sie die Daten und versuchen Sie es erneut.',
    ],
    '423' => [
        'title' => 'Inhalt gesperrt',
        'message' => 'Der Inhalt ist gesperrt und kann nicht geändert werden. Bitte versuchen Sie es später erneut.',
    ],
    '424' => [
        'title' => 'Aktion fehlgeschlagen',
        'message' => 'Die Aktion ist fehlgeschlagen, weil eine vorherige abhängige Aktion nicht erfolgreich war. Bitte prüfen Sie Ihre Daten und versuchen Sie es erneut.',
    ],
    '425' => [
        'title' => 'Zu früh für Verarbeitung',
        'message' => 'Der Server ist noch nicht bereit, Ihre Anfrage zu verarbeiten. Bitte versuchen Sie es später erneut.',
    ],
    '426' => [
        'title' => 'Upgrade erforderlich',
        'message' => 'Bitte aktualisieren Sie Ihr Protokoll oder Ihren Client, um diese Anfrage auszuführen.',
    ],
    '428' => [
        'title' => 'Bedingungen erforderlich',
        'message' => 'Die Aktion, die Sie ausführen möchten, erfordert bestimmte Bedingungen. Bitte prüfen Sie Ihre Daten und versuchen Sie es erneut.',
    ],
    '429' => [
        'title' => 'Zu viele Anfragen',
        'message' => 'Sie haben in kurzer Zeit zu viele Anfragen gesendet. Bitte warten Sie einen Moment und versuchen Sie es erneut.',
    ],
    '431' => [
        'title' => 'Anfrage-Header zu groß',
        'message' => 'Die Header Ihrer Anfrage sind zu groß. Bitte reduzieren Sie die Größe der Daten und versuchen Sie es erneut.',
    ],
    '451' => [
        'title' => 'Aus rechtlichen Gründen nicht verfügbar',
        'message' => 'Der Zugriff auf diesen Inhalt ist aus rechtlichen oder regulatorischen Gründen eingeschränkt.',
    ],
    '500' => [
        'title' => 'Serverfehler',
        'message' => 'Ein unerwarteter Fehler ist auf dem Server aufgetreten. Bitte versuchen Sie es später erneut oder kontaktieren Sie den Support, falls das Problem weiterhin besteht.',
    ],
    '501' => [
        'title' => 'Nicht unterstützt',
        'message' => 'Diese Funktion wird vom Server nicht unterstützt.',
    ],
    '502' => [
        'title' => 'Gateway-Fehler',
        'message' => 'Der Server hat eine ungültige Antwort von einem übergeordneten Server erhalten. Bitte versuchen Sie es erneut.',
    ],
    '503' => [
        'title' => 'Dienst nicht verfügbar',
        'message' => 'Unsere Plattform wird derzeit gewartet. Wir erwarten baldige Verfügbarkeit. Vielen Dank für Ihre Geduld.',
    ],
    '504' => [
        'title' => 'Gateway-Zeitüberschreitung',
        'message' => 'Der Server hat zu lange auf eine Antwort gewartet. Bitte versuchen Sie es später erneut.',
    ],
    '505' => [
        'title' => 'HTTP-Version nicht unterstützt',
        'message' => 'Der Server unterstützt die in dieser Anfrage verwendete HTTP-Version nicht.',
    ],
    '506' => [
        'title' => 'Interner Konfigurationsfehler',
        'message' => 'Der Server hat einen internen Konfigurationsfehler festgestellt. Bitte versuchen Sie es später erneut.',
    ],
    '507' => [
        'title' => 'Nicht genügend Speicherplatz',
        'message' => 'Der Server kann die erforderlichen Daten zur Verarbeitung dieser Anfrage nicht speichern.',
    ],
    '508' => [
        'title' => 'Endlosschleife entdeckt',
        'message' => 'Der Server hat eine Endlosschleife während der Verarbeitung der Anfrage erkannt.',
    ],
    '510' => [
        'title' => 'Zusätzliche Funktionen erforderlich',
        'message' => 'Die Aktion, die Sie ausführen möchten, erfordert Funktionen, die vom Server nicht unterstützt werden.',
    ],
    '511' => [
        'title' => 'Netzwerk-Authentifizierung erforderlich',
        'message' => 'Sie müssen sich authentifizieren, um Zugriff auf dieses Netzwerk zu erhalten. Bitte geben Sie Ihre Anmeldedaten ein und versuchen Sie es erneut.',
    ],
];
