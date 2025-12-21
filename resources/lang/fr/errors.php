<?php

return [
    '400' => [
        'title' => 'Mauvaise requête',
        'message' => 'Le serveur n’a pas pu comprendre votre requête. Veuillez vérifier les informations fournies et réessayer.',
    ],
    '401' => [
        'title' => 'Non autorisé',
        'message' => 'Vous n’êtes pas autorisé à accéder à cette ressource. Veuillez vérifier vos identifiants et réessayer.',
    ],
    '402' => [
        'title' => 'Paiement requis',
        'message' => 'Cette action nécessite un paiement. Veuillez régler votre compte pour continuer.',
    ],
    '403' => [
        'title' => 'Interdit',
        'message' => 'Vous n’avez pas la permission d’accéder à cette page ou d’effectuer cette action.',
    ],
    '404' => [
        'title' => 'Introuvable',
        'message' => 'Nous n’avons pas trouvé la page que vous recherchiez. Elle a peut-être été déplacée ou supprimée.',
    ],
    '405' => [
        'title' => 'Méthode non autorisée',
        'message' => 'L’action que vous tentez n’est pas autorisée. Veuillez vérifier la méthode de la requête.',
    ],
    '406' => [
        'title' => 'Non acceptable',
        'message' => 'Le serveur ne peut pas fournir une réponse correspondant aux critères de votre requête.',
    ],
    '407' => [
        'title' => 'Authentification proxy requise',
        'message' => 'Veuillez fournir des identifiants proxy valides pour accéder à cette ressource.',
    ],
    '408' => [
        'title' => 'Délai de requête dépassé',
        'message' => 'Votre requête a pris trop de temps. Veuillez vérifier votre connexion et réessayer.',
    ],
    '409' => [
        'title' => 'Conflit',
        'message' => 'Il y a un conflit avec l’état actuel de la ressource. Veuillez vérifier votre requête.',
    ],
    '410' => [
        'title' => 'Supprimé',
        'message' => 'La ressource que vous tentez d’accéder a été définitivement supprimée.',
    ],
    '411' => [
        'title' => 'Longueur requise',
        'message' => 'Veuillez inclure un en-tête Content-Length valide dans votre requête.',
    ],
    '412' => [
        'title' => 'Précondition échouée',
        'message' => 'Votre requête ne répond pas aux conditions requises spécifiées par le serveur.',
    ],
    '413' => [
        'title' => 'Charge utile trop grande',
        'message' => 'Votre requête est trop volumineuse pour être traitée. Veuillez réduire sa taille et réessayer.',
    ],
    '414' => [
        'title' => 'URI trop long',
        'message' => 'L’URL que vous avez demandée est trop longue. Essayez de la raccourcir et soumettez à nouveau.',
    ],
    '415' => [
        'title' => 'Type de média non pris en charge',
        'message' => 'Le serveur ne peut pas traiter ce type de média. Veuillez ajuster le format de votre requête.',
    ],
    '416' => [
        'title' => 'Plage non satisfaisable',
        'message' => 'La plage que vous avez demandée n’est pas disponible pour cette ressource.',
    ],
    '417' => [
        'title' => 'Attente échouée',
        'message' => 'Le serveur n’a pas pu satisfaire les attentes spécifiées dans votre requête.',
    ],
    '418' => [
        'title' => 'Requête non supportée',
        'message' => 'Le serveur refuse de traiter cette requête car elle n’est pas prise en charge. Veuillez vérifier votre requête et réessayer.',
    ],
    '419' => [
        'title' => 'Page expirée',
        'message' => 'Votre session a expiré. Veuillez recharger la page et réessayer.',
    ],
    '421' => [
        'title' => 'Requête mal dirigée',
        'message' => 'Votre requête a été envoyée au mauvais serveur. Veuillez réessayer.',
    ],
    '422' => [
        'title' => 'Entité non traitable',
        'message' => 'Nous n’avons pas pu traiter votre requête en raison de données invalides. Veuillez vérifier et réessayer.',
    ],
    '423' => [
        'title' => 'Verrouillé',
        'message' => 'La ressource est actuellement verrouillée et ne peut pas être modifiée. Veuillez réessayer plus tard.',
    ],
    '424' => [
        'title' => 'Dépendance échouée',
        'message' => 'Cette requête a échoué car une requête précédente liée n’a pas réussi.',
    ],
    '425' => [
        'title' => 'Trop tôt',
        'message' => 'Le serveur n’est pas encore prêt à traiter cette requête. Veuillez réessayer plus tard.',
    ],
    '426' => [
        'title' => 'Mise à niveau requise',
        'message' => 'Veuillez mettre à jour votre protocole ou client pour effectuer cette requête.',
    ],
    '428' => [
        'title' => 'Précondition requise',
        'message' => 'Cette requête nécessite que certaines conditions soient remplies. Veuillez inclure les en-têtes nécessaires.',
    ],
    '429' => [
        'title' => 'Trop de requêtes',
        'message' => 'Vous avez soumis trop de requêtes en peu de temps. Veuillez patienter un instant et réessayer.',
    ],
    '431' => [
        'title' => 'En-têtes de requête trop volumineux',
        'message' => 'Les en-têtes de votre requête sont trop volumineux. Veuillez réduire leur taille et réessayer.',
    ],
    '451' => [
        'title' => 'Indisponible pour des raisons légales',
        'message' => 'L’accès à cette ressource est restreint pour des raisons légales ou réglementaires.',
    ],
    '500' => [
        'title' => 'Erreur serveur',
        'message' => 'Une erreur inattendue s’est produite sur le serveur. Veuillez réessayer plus tard ou contacter le support si le problème persiste.',
    ],
    '501' => [
        'title' => 'Non implémenté',
        'message' => 'Cette fonctionnalité n’est pas prise en charge par le serveur.',
    ],
    '502' => [
        'title' => 'Mauvaise passerelle',
        'message' => 'Le serveur a reçu une réponse invalide d’un serveur en amont. Veuillez réessayer.',
    ],
    '503' => [
        'title' => 'Service indisponible',
        'message' => 'Notre plateforme est actuellement en maintenance. Nous serons de retour en ligne sous peu. Merci de votre patience.',
    ],
    '504' => [
        'title' => 'Délai de passerelle dépassé',
        'message' => 'Le serveur a dépassé le délai d’attente en attendant une réponse. Veuillez réessayer plus tard.',
    ],
    '505' => [
        'title' => 'Version HTTP non supportée',
        'message' => 'Le serveur ne prend pas en charge la version HTTP utilisée dans cette requête.',
    ],
    '506' => [
        'title' => 'La variante négocie également',
        'message' => 'Le serveur a rencontré une erreur de configuration interne. Veuillez réessayer plus tard.',
    ],
    '507' => [
        'title' => 'Stockage insuffisant',
        'message' => 'Le serveur ne peut pas stocker les données nécessaires pour compléter cette requête.',
    ],
    '508' => [
        'title' => 'Boucle détectée',
        'message' => 'Le serveur a détecté une boucle infinie lors du traitement de la requête.',
    ],
    '510' => [
        'title' => 'Non étendu',
        'message' => 'Cette requête nécessite des extensions supplémentaires qui ne sont pas prises en charge par le serveur.',
    ],
    '511' => [
        'title' => 'Authentification réseau requise',
        'message' => 'Vous devez vous authentifier pour accéder au réseau. Veuillez fournir vos identifiants.',
    ],
];
