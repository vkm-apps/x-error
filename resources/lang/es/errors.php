<?php

return [
    '400' => [
        'title' => 'Solicitud Incorrecta',
        'message' => 'El servidor no pudo entender su solicitud. Revise la información proporcionada e inténtelo de nuevo.',
    ],
    '401' => [
        'title' => 'Acceso No Autorizado',
        'message' => 'No está autorizado para acceder a esta página. Revise sus credenciales e inténtelo de nuevo.',
    ],
    '402' => [
        'title' => 'Pago Requerido',
        'message' => 'Esta acción requiere un pago. Por favor, ajuste su cuenta para continuar.',
    ],
    '403' => [
        'title' => 'Acceso Denegado',
        'message' => 'No tiene permiso para acceder a esta página o realizar esta acción.',
    ],
    '404' => [
        'title' => 'Página No Encontrada',
        'message' => 'No pudimos encontrar la página que buscaba. Puede haber sido movida o eliminada.',
    ],
    '405' => [
        'title' => 'Método No Permitido',
        'message' => 'La acción que intenta realizar no está permitida. Verifique el método de la solicitud.',
    ],
    '406' => [
        'title' => 'Solicitud No Aceptable',
        'message' => 'El servidor no puede proporcionar una respuesta que coincida con los criterios de su solicitud.',
    ],
    '407' => [
        'title' => 'Autenticación Proxy Requerida',
        'message' => 'Por favor, proporcione credenciales válidas de proxy para acceder a esta página.',
    ],
    '408' => [
        'title' => 'Tiempo de Espera de la Solicitud Agotado',
        'message' => 'Su solicitud tardó demasiado. Verifique su conexión e inténtelo de nuevo.',
    ],
    '409' => [
        'title' => 'Conflicto de Datos',
        'message' => 'La acción que intenta realizar entra en conflicto con el estado actual del contenido. Revise los datos e inténtelo de nuevo.',
    ],
    '410' => [
        'title' => 'Contenido No Disponible',
        'message' => 'El contenido al que intenta acceder ha sido eliminado de forma permanente.',
    ],
    '411' => [
        'title' => 'Longitud de Solicitud Requerida',
        'message' => 'Su solicitud no contiene información sobre el tamaño de los datos enviados. Revísela e inténtelo de nuevo.',
    ],
    '412' => [
        'title' => 'Precondición Fallida',
        'message' => 'Su solicitud no cumplió con las condiciones requeridas por el servidor.',
    ],
    '413' => [
        'title' => 'Solicitud Demasiado Grande',
        'message' => 'Su solicitud es demasiado grande para procesarse. Reduzca el tamaño e inténtelo de nuevo.',
    ],
    '414' => [
        'title' => 'URL Demasiado Larga',
        'message' => 'La URL que solicitó es demasiado larga. Intente acortarla y vuelva a enviarla.',
    ],
    '415' => [
        'title' => 'Tipo de Medio No Soportado',
        'message' => 'El servidor no puede procesar este tipo de medio. Ajuste el formato de su solicitud.',
    ],
    '416' => [
        'title' => 'Rango No Satisfactorio',
        'message' => 'El rango solicitado no está disponible para este contenido.',
    ],
    '417' => [
        'title' => 'Expectativa Fallida',
        'message' => 'El servidor no pudo cumplir con las expectativas especificadas en su solicitud. Revísela e inténtelo de nuevo.',
    ],
    '418' => [
        'title' => 'Acción No Soportada',
        'message' => 'El servidor se niega a procesar esta solicitud porque no es compatible. Revise su solicitud e inténtelo de nuevo.',
    ],
    '419' => [
        'title' => 'Sesión Expirada',
        'message' => 'Su sesión ha expirado. Recargue la página e inténtelo de nuevo.',
    ],
    '421' => [
        'title' => 'Solicitud Mal Dirigida',
        'message' => 'Su solicitud fue enviada al servidor equivocado. Inténtelo de nuevo.',
    ],
    '422' => [
        'title' => 'Datos No Procesables',
        'message' => 'No pudimos procesar su solicitud debido a datos no válidos. Revise y pruebe de nuevo.',
    ],
    '423' => [
        'title' => 'Contenido Bloqueado',
        'message' => 'El contenido está bloqueado y no se puede modificar. Intente más tarde.',
    ],
    '424' => [
        'title' => 'Fallo por Dependencia',
        'message' => 'La acción que intentó ejecutar falló porque una acción previa no se completó con éxito. Revise sus datos y vuelva a intentarlo.',
    ],
    '425' => [
        'title' => 'Demasiado Temprano para Procesar',
        'message' => 'El servidor aún no está listo para procesar su solicitud. Inténtelo de nuevo en breve.',
    ],
    '426' => [
        'title' => 'Actualización Requerida',
        'message' => 'Actualice su protocolo o cliente para realizar esta solicitud.',
    ],
    '428' => [
        'title' => 'Se Requieren Condiciones',
        'message' => 'La acción que intenta ejecutar requiere que se cumplan ciertas condiciones. Revise sus datos e inténtelo de nuevo.',
    ],
    '429' => [
        'title' => 'Demasiadas Solicitudes',
        'message' => 'Ha enviado demasiadas solicitudes en un corto período. Espere un momento e inténtelo nuevamente.',
    ],
    '431' => [
        'title' => 'Cabeceras de Solicitud Muy Grandes',
        'message' => 'Su solicitud contiene cabeceras demasiado grandes para ser procesadas por el servidor. Reduzca el tamaño e inténtelo de nuevo.',
    ],
    '451' => [
        'title' => 'No Disponible por Razones Legales',
        'message' => 'El acceso a este contenido está restringido por motivos legales o regulatorios.',
    ],
    '500' => [
        'title' => 'Error del Servidor',
        'message' => 'Se produjo un error inesperado en el servidor. Intente de nuevo más tarde o contacte con soporte si el problema continúa.',
    ],
    '501' => [
        'title' => 'No Soportado',
        'message' => 'Esta funcionalidad no es compatible con el servidor.',
    ],
    '502' => [
        'title' => 'Error de Pasarela',
        'message' => 'El servidor recibió una respuesta no válida de un servidor ascendente. Inténtelo de nuevo.',
    ],
    '503' => [
        'title' => 'Servicio No Disponible',
        'message' => 'Nuestra plataforma está actualmente en mantenimiento. Esperamos volver en breve. Gracias por su paciencia.',
    ],
    '504' => [
        'title' => 'Tiempo de Espera de la Pasarela Agotado',
        'message' => 'El servidor agotó el tiempo de espera mientras esperaba una respuesta. Inténtelo de nuevo más tarde.',
    ],
    '505' => [
        'title' => 'Versión HTTP No Soportada',
        'message' => 'El servidor no admite la versión HTTP utilizada en esta solicitud.',
    ],
    '506' => [
        'title' => 'Error Interno de Configuración',
        'message' => 'El servidor encontró un error interno de configuración. Inténtelo de nuevo más tarde.',
    ],
    '507' => [
        'title' => 'Almacenamiento Insuficiente',
        'message' => 'El servidor no puede almacenar los datos necesarios para completar esta solicitud.',
    ],
    '508' => [
        'title' => 'Bucle Detectado',
        'message' => 'El servidor detectó un bucle infinito al procesar la solicitud.',
    ],
    '510' => [
        'title' => 'Se Requieren Más Capacidades',
        'message' => 'La acción que intenta ejecutar requiere capacidades que no son compatibles con el servidor.',
    ],
    '511' => [
        'title' => 'Autenticación de Red Requerida',
        'message' => 'Debe iniciar sesión para obtener acceso a esta red. Proporcione sus credenciales e inténtelo de nuevo.',
    ],
];
