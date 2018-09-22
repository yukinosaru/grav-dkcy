<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/plugins/form/languages.yaml',
    'modified' => 1536779371,
    'data' => [
        'en' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Form not validated. One or more required fields are missing.',
                'NONCE_NOT_VALIDATED' => 'Oops there was a problem, please check your input and submit the form again.',
                'FILES' => 'Files Upload',
                'FORM_ALREADY_SUBMITTED' => 'This form has already been submitted.',
                'ALLOW_MULTIPLE' => 'Allow More than one file',
                'ALLOW_MULTIPLE_HELP' => 'Allows to select more than one file for upload.',
                'DESTINATION' => 'Destination',
                'DESTINATION_HELP' => 'The location where the files should be uploaded to',
                'ACCEPT' => 'Allowed MIME Types',
                'ACCEPT_HELP' => 'A list of MIME Types that are allowed for upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Error validating the Captcha',
                'DATA_SUMMARY' => 'Here is the summary of what you wrote to us:',
                'NO_FORM_DATA' => 'No form data available',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Site key',
                'RECAPTCHA_SITE_KEY_HELP' => 'For more info visit https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Secret key',
                'RECAPTCHA_SECRET_KEY_HELP' => 'For more info visit https://developers.google.com/recaptcha',
                'GENERAL' => 'General',
                'USE_BUILT_IN_CSS' => 'Use built-in CSS',
                'USE_INLINE_CSS' => 'Use inline CSS',
                'FILEUPLOAD_PREVENT_SELF' => 'Cannot use "%s" outside of pages.',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'Unable to upload file %s: %s',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'Unable to move file %s to "%s"',
                'DROPZONE_CANCEL_UPLOAD' => 'Cancel upload',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => 'Are you sure you want to cancel this upload?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Drop your files here or <strong>click in this area</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Your browser does not support drag and drop file uploads.',
                'DROPZONE_FALLBACK_TEXT' => 'Please use the fallback form below to upload your files like in the olden days.',
                'DROPZONE_FILE_TOO_BIG' => 'File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.',
                'DROPZONE_INVALID_FILE_TYPE' => 'You can\'t upload files of this type.',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'You can not upload any more files.',
                'DROPZONE_REMOVE_FILE' => 'Remove file',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => 'Are you sure you want to delete this file?',
                'DROPZONE_RESPONSE_ERROR' => 'Server responded with {{statusCode}} code.',
                'YES' => 'Yes',
                'NO' => 'No',
                'REFRESH_PREVENTION' => 'Refresh prevention',
                'REFRESH_PREVENTION_HELP' => 'Use the form\'s unique ID to ensure the same form is not reprocessed when refreshing the browser',
                'LIMIT' => 'Limit',
                'LIMIT_HELP' => 'Maximum number of allowed files per field (multiple required)',
                'FILESIZE' => 'Max Filesize',
                'FILESIZE_HELP' => 'Maximum file size allowed (in MB), 0 = Use system default',
                'AVOID_OVERWRITING' => 'Avoid overwriting',
                'AVOID_OVERWRITING_HELP' => 'Prevent files with the same name to be overridden. Date prefix will be added',
                'RANDOM_NAME' => 'Random name',
                'RANDOM_NAME_HELP' => 'Generate a random 15 long string name for the uploaded files',
                'CLIENT_SIDE_VALIDATION' => 'Client-side validation',
                'CLIENT_SIDE_VALIDATION_HELP' => 'By default forms will use HTML5 client validation as first line of defense',
                'INLINE_ERRORS' => 'Inline errors',
                'INLINE_ERRORS_HELP' => 'Useful with \'client-side validation\' off, shows inline contextual form errors',
                'RESOLUTION_MIN' => 'The {{attr}} was less than the minimum of {{min}}px <br />',
                'RESOLUTION_MAX' => 'The {{attr}} was more than the maximum of {{max}}px <br />'
            ]
        ],
        'de' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formularwerte nicht gültig. Für ein oder mehrere erforderliche Felder fehlen Werte.',
                'NONCE_NOT_VALIDATED' => 'Ups, es gibt da ein Problem. Eingabewerte bitte noch mal prüfen und das Formular erneut absenden.',
                'FILES' => 'Dateien hochladen',
                'ALLOW_MULTIPLE' => 'Erlaube mehr als eine Datei',
                'ALLOW_MULTIPLE_HELP' => 'Erlaubt es, mehr als eine Datei zum Hochladen auszuwählen.',
                'DESTINATION' => 'Ziel',
                'DESTINATION_HELP' => 'Das Ziel, wohin die Dateien hochgeladen werden sollen.',
                'ACCEPT' => 'Erlaube MIME-Typen',
                'ACCEPT_HELP' => 'Eine Liste von MIME-Typen, die hochgeladen werden dürfen.',
                'ERROR_VALIDATING_CAPTCHA' => 'Die Überprüfung des Captcha ist fehlgeschlagen.',
                'DATA_SUMMARY' => 'Hier die Zusammenfassung von dem, was Sie geschrieben haben:',
                'YES' => 'Ja',
                'NO' => 'Nein'
            ]
        ],
        'es' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Falló la validación del formulario. Uno o más campos obligatorios no fueron cubiertos.',
                'NONCE_NOT_VALIDATED' => 'Oops, hay un problema, por favor revise la información e intente enviar el formulario otra vez.',
                'FILES' => 'Subida de Ficheros',
                'FORM_ALREADY_SUBMITTED' => 'Este formulario ya ha sido enviado',
                'ALLOW_MULTIPLE' => 'Permitir más de un fichero',
                'ALLOW_MULTIPLE_HELP' => 'Permitir seleccionar más de un fichero para subir.',
                'DESTINATION' => 'Destino',
                'DESTINATION_HELP' => 'El lugar de destino al que subir los ficheros',
                'ACCEPT' => 'MIME Types permitidos',
                'ACCEPT_HELP' => 'Una lista de  MIME Types que se permiten subir.',
                'ERROR_VALIDATING_CAPTCHA' => 'Error al comprobar el Captcha',
                'DATA_SUMMARY' => 'Este es el resumen de lo que nos has escrito:',
                'NO_FORM_DATA' => 'No hay datos disponibles del formulario',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Site key',
                'RECAPTCHA_SITE_KEY_HELP' => 'Para más información visita https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Secret key',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Para más información visita https://developers.google.com/recaptcha',
                'GENERAL' => 'General',
                'USE_BUILT_IN_CSS' => 'Utilizar CSS incorporado',
                'USE_INLINE_CSS' => 'Utilizar CSS en línea',
                'FILEUPLOAD_PREVENT_SELF' => 'No se puede utilizar "%s" fuera de las páginas',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'No se puede subir el fichero %s: %s',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'No se puede mover el fichero %s to "%s"',
                'DROPZONE_CANCEL_UPLOAD' => 'Cancelar subida',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => '¿Estas seguro que quieres cancelar esta subida?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Arrastra tus ficheros aquí o <strong>haz click en esta área</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Tu navegador no soporta el arrastrar y soltar ficheros de subida.',
                'DROPZONE_FALLBACK_TEXT' => 'Por favor utiliza el formulario alternativo que esta debajo, para subir ficheros como antiguamente.',
                'DROPZONE_FILE_TOO_BIG' => 'Fichero demasiado grande ({{filesize}}MiB). Máximo tamaño: {{maxFilesize}}MiB.',
                'DROPZONE_INVALID_FILE_TYPE' => 'No puedes subir ficheros de este tipo.',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'No puedes subir mas ficheros.',
                'DROPZONE_REMOVE_FILE' => 'Borrar fichero',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => '¿Estas seguro de que quieres borrar este fichero?',
                'DROPZONE_RESPONSE_ERROR' => 'El servidor respondió con el código de estado {{statusCode}}.',
                'YES' => 'Si',
                'NO' => 'No',
                'REFRESH_PREVENTION' => 'Prevenir refresco',
                'REFRESH_PREVENTION_HELP' => 'Utiliza el ID único del formulario para garantizar que el este no se vuelve a procesar cuando se refresca el navegador',
                'LIMIT' => 'Límite',
                'LIMIT_HELP' => 'Máximo número de ficheros permitidos por campo (múltiples requeridos)',
                'FILESIZE' => 'Tamaño máximo de fichero',
                'FILESIZE_HELP' => 'Tamaño máximo de fichero permitido (en MB), 0 = Utiliza el de por defecto del sistema',
                'AVOID_OVERWRITING' => 'Evitar sobreescribir',
                'AVOID_OVERWRITING_HELP' => 'Evita que los ficheros con el mismo nombre sean sobreescritos. Se agregará el prefijo de fecha',
                'RANDOM_NAME' => 'Nombre aleatorio',
                'RANDOM_NAME_HELP' => 'Genera una cadela aleatoria de 15 caracteres como nombre de fichero a subir',
                'CLIENT_SIDE_VALIDATION' => 'Validación del lado del cliente',
                'CLIENT_SIDE_VALIDATION_HELP' => 'Por defecto los formularios usarán validación HTML5 del lado del cliente como primera línea de defensa',
                'INLINE_ERRORS' => 'Errores en línea',
                'INLINE_ERRORS_HELP' => 'Útil con \'validación del lado del cliente\' desactivado, muestra errores en el formulario contextual en línea',
                'RESOLUTION_MIN' => '{{attr}} fué menor que el mínimo {{min}}px <br />',
                'RESOLUTION_MAX' => '{{attr}} fué mayor que el máximo {{max}}px <br />'
            ]
        ],
        'fr' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formulaire non validé. Un ou plusieurs champs obligatoires sont manquants.',
                'NONCE_NOT_VALIDATED' => 'Oups, un problème est survenu. Veuillez vérifier votre saisie et soumettre à nouveau le formulaire.',
                'FILES' => 'Fichiers chargés',
                'ALLOW_MULTIPLE' => 'Autoriser plus d\'un fichier',
                'ALLOW_MULTIPLE_HELP' => 'Permet la sélection de plusieurs fichiers pour chargement.',
                'DESTINATION' => 'Destination',
                'DESTINATION_HELP' => 'L\'emplacement où les fichiers doivent être chargés.',
                'ACCEPT' => 'Autoriser les Types MIME',
                'ACCEPT_HELP' => 'Liste des Types MIME autorisés au chargement',
                'ERROR_VALIDATING_CAPTCHA' => 'Erreur lors de la validation du Captcha',
                'DATA_SUMMARY' => 'Voici le résumé de ce que vous nous avez écrit :',
                'NO_FORM_DATA' => 'Aucune donnée de formulaire disponible',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Clé du site',
                'RECAPTCHA_SITE_KEY_HELP' => 'Pour plus d\'informations veuillez vous rendre sur https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Clé secrète',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Pour plus d\'informations veuillez vous rendre sur https://developers.google.com/recaptcha',
                'GENERAL' => 'Général',
                'USE_BUILT_IN_CSS' => 'Utiliser les CSS natifs',
                'FILEUPLOAD_PREVENT_SELF' => 'Impossible d\'utiliser \'%s\' en dehors des pages.',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'Impossible de charger le fichier %s: %s',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'Impossible de déplacer le fichier %s vers "%s"',
                'DROPZONE_CANCEL_UPLOAD' => 'Annuler le chargement',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => 'Êtes-vous certain de vouloir annuler ce téléchargement ?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Glissez vos fichiers ici ou <strong>cliquez dans cette zone</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Votre navigateur ne prend pas en charge les téléchargements par glissé-déposé.',
                'DROPZONE_FALLBACK_TEXT' => 'Veuillez utiliser le formulaire de secours ci-dessous pour transférer vos fichiers.',
                'DROPZONE_FILE_TOO_BIG' => 'Le fichier est trop volumineux ({{filesize}}MiB). Taille maximale de fichier : {{maxFilesize}}MiB.',
                'DROPZONE_INVALID_FILE_TYPE' => 'Vous ne pouvez pas charger des fichiers de ce type.',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'Vous ne pouvez plus télécharger de fichiers.',
                'DROPZONE_REMOVE_FILE' => 'Supprimer le fichier',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => 'Êtes-vous sûr de vouloir supprimer ce fichier ?',
                'DROPZONE_RESPONSE_ERROR' => 'Le serveur a répondu avec le code {{statusCode}}.'
            ]
        ],
        'ru' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Форма не подтверждена. Отсутствует одно или несколько обязательных полей.',
                'NONCE_NOT_VALIDATED' => 'Упс, у вас возникла проблема, проверьте свои данные и отправьте форму еще раз.',
                'FILES' => 'Загрузка файлов',
                'FORM_ALREADY_SUBMITTED' => 'Эта форма уже была отправлена.',
                'ALLOW_MULTIPLE' => 'Разрешить несколько файлов',
                'ALLOW_MULTIPLE_HELP' => 'Позволяет выбрать более одного файла для загрузки.',
                'DESTINATION' => 'Место назначения',
                'DESTINATION_HELP' => 'Место, куда файлы должны быть загружены в',
                'ACCEPT' => 'Разрешенные MIME типы',
                'ACCEPT_HELP' => 'Список MIME типов, разрешенных для загрузки',
                'ERROR_VALIDATING_CAPTCHA' => 'Ошибка проверки Captcha',
                'DATA_SUMMARY' => 'Вот краткое изложение того, что вы нам написали:',
                'NO_FORM_DATA' => 'Данные формы отсутствуют',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Site key',
                'RECAPTCHA_SITE_KEY_HELP' => 'Для получения дополнительной информации посетите https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Secret key',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Для получения дополнительной информации посетите https://developers.google.com/recaptcha',
                'GENERAL' => 'Общие',
                'USE_BUILT_IN_CSS' => 'Использовать встроенный CSS',
                'FILEUPLOAD_PREVENT_SELF' => 'Нельзя использовать "%s" за пределами страниц.',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'Не удалось загрузить файл %s: %s',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'Не удалось переместить файл %s в "%s"',
                'DROPZONE_CANCEL_UPLOAD' => 'Отменить загрузку',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => 'Вы действительно хотите отменить эту загрузку?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Перетащите свои файлы сюда или <strong>щелкните в этой области</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Ваш браузер не поддерживает загрузку файлов с перетаскиванием.',
                'DROPZONE_FALLBACK_TEXT' => 'Пожалуйста, используйте приведенную ниже форму для загрузки ваших файлов, как в старые времена.',
                'DROPZONE_FILE_TOO_BIG' => 'Файл слишком большой ({{filesize}}мб). Максимальный размер файла: {{maxFilesize}}мб.',
                'DROPZONE_INVALID_FILE_TYPE' => 'Вы не можете загружать файлы этого типа.',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'Вы не можете загружать больше файлов.',
                'DROPZONE_REMOVE_FILE' => 'Удалить файл',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => 'Вы действительно хотите удалить этот файл?',
                'DROPZONE_RESPONSE_ERROR' => 'Сервер ответил кодом {{statusCode}}.',
                'YES' => 'Да',
                'NO' => 'Нет',
                'REFRESH_PREVENTION' => 'Предотвращение обновления',
                'REFRESH_PREVENTION_HELP' => 'Используйте уникальный идентификатор формы, чтобы гарантировать, что одна и та же форма не будет отправляться заново при обновлении страницы браузера',
                'LIMIT' => 'Лимит',
                'LIMIT_HELP' => 'Максимальное количество разрешенных файлов в поле (требуется несколько)',
                'FILESIZE' => 'Максимальный размер файла',
                'FILESIZE_HELP' => 'Максимально допустимый размер файла (в МБ), 0 = Использовать системные установки по умолчанию',
                'AVOID_OVERWRITING' => 'Избегать перезаписи',
                'AVOID_OVERWRITING_HELP' => 'Не допускать перезаписи файлов с тем же именем. Будет добавлен префикс с датой',
                'RANDOM_NAME' => 'Случайное имя',
                'RANDOM_NAME_HELP' => 'Создавать случайное строковое имя из 15 символов для загруженных файлов'
            ]
        ],
        'hr' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formular nije validiran. Jedan ili više traženih polja nedostaju.',
                'NONCE_NOT_VALIDATED' => 'Ups, došlo je do problema, molimo provjerite svoj unos i pokušajte opet.',
                'FILES' => 'Upload Fajlova',
                'ALLOW_MULTIPLE' => 'Dopusti više od jednog fajla',
                'DESTINATION' => 'Destinacija',
                'DESTINATION_HELP' => 'Lokacija gdje bi fajlovi trebali biti uploadani',
                'ACCEPT' => 'Dopušteni MIME Tipovi',
                'ACCEPT_HELP' => 'Lista dopuštenih MIME Tipova koji su dozvoljeni za upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Greška pri validiranju Captcha'
            ]
        ],
        'hu' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Érvénytelen az űrlap. Egy vagy több kötelező mező nincs kitöltve.',
                'NONCE_NOT_VALIDATED' => 'Upsz, van egy kis probléma, kérlek nézd át az űrlapot, majd küldd el újra.',
                'FILES' => 'Fájlok Feltöltése',
                'ALLOW_MULTIPLE' => 'Több fájl feltöltése',
                'ALLOW_MULTIPLE_HELP' => 'Engedélyezi egyszerre több állomány feltöltését.',
                'DESTINATION' => 'Feltöltés Helye',
                'DESTINATION_HELP' => 'Ide lesznek feltöltve az állományok',
                'ACCEPT' => 'Engedélyezett MIME-típusok',
                'ACCEPT_HELP' => 'A feltölthető állományok MIME-típusainak listája',
                'ERROR_VALIDATING_CAPTCHA' => 'Hiba lépett fel a Captcha validálása során'
            ]
        ],
        'it' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Il Form risulta invalido. Uno o più campi risultano omessi.',
                'NONCE_NOT_VALIDATED' => 'Oops è stato riscontrato un errore, si prega di ricontrollare i dati inseriti e provare di nuovo.',
                'FILES' => 'Invio dei Files',
                'ALLOW_MULTIPLE' => 'Consenti più di un file',
                'ALLOW_MULTIPLE_HELP' => 'Permette la selezione di più di un file per l\'upload',
                'DESTINATION' => 'Destinazione',
                'DESTINATION_HELP' => 'La destinazione dove i files vengono uploadati',
                'ACCEPT' => 'Tipi di MIME Concessi',
                'ACCEPT_HELP' => 'Una lista di tipi di MIME che sono permessi per l\'upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Errore durante la validazione del Captcha',
                'DATA_SUMMARY' => 'Ecco il riassunto di ciò che ci hai scritto:',
                'NO_FORM_DATA' => 'Nessuna informazione disponibile',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Site key',
                'RECAPTCHA_SITE_KEY_HELP' => 'Per maggiori informazioni visita https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Chiave segreta',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Per maggiori informazioni visita https://developers.google.com/recaptcha',
                'GENERAL' => 'Generale',
                'USE_BUILT_IN_CSS' => 'Usa CSS incorporato',
                'FILEUPLOAD_PREVENT_SELF' => 'Non si può usare "%s" fuori dalle pagine.',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'Impossibile caricare il file %s: %s',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'Impossibile muovere il file %s to "%s"',
                'DROPZONE_CANCEL_UPLOAD' => 'Trasferimento annullato',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => 'Sei sicuro di voler cancellare questo trasferimento?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Trascina qui i tuoi file o <strong>clicca su quest\'area</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Il tuo browser non supporta il trascinamento dei file per il trasferimento.',
                'DROPZONE_FALLBACK_TEXT' => 'Utilizza il modulo di riserva qui sotto per caricare i tuoi file come ai vecchi tempi.',
                'DROPZONE_FILE_TOO_BIG' => 'Il file è troppo grande ({{filesize}}MiB). Dimensione massima consentita: {{maxFilesize}}MiB.',
                'DROPZONE_INVALID_FILE_TYPE' => 'Non puoi caricare questo tipo di file',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'Non puoi caricare ulteriori file, hai raggiunto il limite consentito.',
                'DROPZONE_REMOVE_FILE' => 'Rimuovi il file',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo file??',
                'DROPZONE_RESPONSE_ERROR' => 'Il Server ha risposto con il codice {{statusCode}}.',
                'YES' => 'Si',
                'NO' => 'No'
            ]
        ],
        'ro' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formularul nu a fost validat. Unul sau mai multe câmpuri sunt goale.',
                'NONCE_NOT_VALIDATED' => 'Oops a apărut o problemă, vă rugăm verificați datele introduse și trimiteți formularul din nou.',
                'FILES' => 'Încărcare fișiere',
                'ALLOW_MULTIPLE' => 'Permiteți mai multe fișiere',
                'ALLOW_MULTIPLE_HELP' => 'Vă permite să selectați mai multe fișiere pentru încărcare.',
                'DESTINATION' => 'Destinație',
                'DESTINATION_HELP' => 'Locația unde vor fi încărcate fișierele.',
                'ACCEPT' => 'Permite tipuri MIME ',
                'ACCEPT_HELP' => 'O listă cu tipuri MIME care sunt permise la încărcare.',
                'ERROR_VALIDATING_CAPTCHA' => 'Eroare la validarea Captcha.',
                'DATA_SUMMARY' => 'Mai jos aveți un rezumat al mesajului pe care ni l-ați trimis:',
                'NO_FORM_DATA' => 'Nu e disponibilă nici o dată pentru formular',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Cheia pentru Site',
                'RECAPTCHA_SITE_KEY_HELP' => 'Pentru mai multe detalii vă rugăm vizitați https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Cheia secretă pentru Site',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Pentru mai multe detalii vă rugăm vizitați  https://developers.google.com/recaptcha'
            ]
        ],
        'cs' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formulář nebyl ověřen. Chybí jedno nebo více povinných polí.',
                'NONCE_NOT_VALIDATED' => 'Jejda, došlo k problému, zkontrolujte vstupní stránku a znovu odešlete formulář.',
                'FILES' => 'Nahrávání souborů',
                'ALLOW_MULTIPLE' => 'Povolit více než jeden soubor',
                'ALLOW_MULTIPLE_HELP' => 'Umožňuje vybrat více než jeden soubor pro nahrání.',
                'DESTINATION' => 'Cílové umístění',
                'DESTINATION_HELP' => 'Místo, kam mají být soubory nahrány',
                'ACCEPT' => 'Povolené MIME typy',
                'ACCEPT_HELP' => 'Seznam MIME typů souborů povolených pro upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Nepodařilo se ověřit CAPTCHA (kontrola proti spamu)',
                'DATA_SUMMARY' => 'Shrnutí toho, co jste nám napsali:',
                'NO_FORM_DATA' => 'Formulář neobsahuje žádná data',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Site key',
                'RECAPTCHA_SITE_KEY_HELP' => 'Více informací https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Secret key',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Více informací https://developers.google.com/recaptcha',
                'GENERAL' => 'Všeobecné',
                'USE_BUILT_IN_CSS' => 'Použít built-in CSS',
                'FILEUPLOAD_PREVENT_SELF' => 'Nelze použít "% s" mimo stránky.',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'Nelze nahrát soubor %s: %s',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'Nelze přesunout soubor %s do "%s"',
                'DROPZONE_CANCEL_UPLOAD' => 'Zrušit upload',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => 'Opravdu chcete zrušit nahrávání souboru?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Přetáhněte sem soubory nebo <strong>klikněte v tomto prostoru</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Váš prohlížeč nepodporuje nahrávání souborů táhni a pusť.',
                'DROPZONE_FALLBACK_TEXT' => 'Použijte níže uvedený formulář pro nahrání souborů, jako v minulých dnech.',
                'DROPZONE_FILE_TOO_BIG' => 'Soubor je příliš velký ({{filesize}}MiB). Max. velikost souboru: {{maxFilesize}}MiB.',
                'DROPZONE_INVALID_FILE_TYPE' => 'Nelze nahrát soubory tohoto typu.',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'Nelze nahrát další soubory.',
                'DROPZONE_REMOVE_FILE' => 'Odstranit soubor',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => 'Opravdu chcete tento soubor smazat?',
                'DROPZONE_RESPONSE_ERROR' => 'Server vrátil chybový kód: {{statusCode}}.',
                'YES' => 'Ano',
                'NO' => 'Ne'
            ]
        ],
        'pl' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formularz został odrzucony. Jedno lub więcej pól wymaga wypełnienia.',
                'NONCE_NOT_VALIDATED' => 'Ups, pojawił się problem. Proszę sprawdź czy wszystkie pola zostały wypełnione i wyślij formularz ponownie.',
                'FILES' => 'Plik przesłany.',
                'FORM_ALREADY_SUBMITTED' => 'Ten formularz został już wysłany.',
                'ALLOW_MULTIPLE' => 'Zezwól na więcej niż jeden plik.',
                'ALLOW_MULTIPLE_HELP' => 'Zezwól na przesłanie więcej niż jednego pliku.',
                'DESTINATION' => 'Przeznaczenie.',
                'DESTINATION_HELP' => 'Lokalizacja przesłanego pliku.',
                'ACCEPT' => 'Zezwól na typ MIME.',
                'ACCEPT_HELP' => 'Lista wspieranych do przesłania typów MIME.',
                'ERROR_VALIDATING_CAPTCHA' => 'Błąd walidacji Captcha.',
                'DATA_SUMMARY' => 'Oto podsumowanie informacji, które do nas napisałeś:',
                'NO_FORM_DATA' => 'Brak dostępnych danych formularza',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Klucz strony',
                'RECAPTCHA_SITE_KEY_HELP' => 'Aby uzyskać więcej informacji odwiedź https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Tajny klucz',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Aby uzyskać więcej informacji odwiedź https://developers.google.com/recaptcha',
                'GENERAL' => 'Ogólne',
                'USE_BUILT_IN_CSS' => 'Użyj wbudowanych styli CSS',
                'FILEUPLOAD_PREVENT_SELF' => 'Nie można użyć "%s" poza stronami.',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'Nie można przesłać plików %s: %s',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'Nie można przenieść plików z %s do "%s"',
                'DROPZONE_CANCEL_UPLOAD' => 'Anuluj przesyłanie',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => 'Czy na pewno chcesz anulować przesyłanie?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Upuść pliki tutaj lub <strong>kliknij w tym obszarze</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Twoja przelądarka nie obsługują funkcji przeciągnij i upuść.',
                'DROPZONE_FALLBACK_TEXT' => 'Proszę użyć zapasowego formularza do przesyłania plików znajdującego się poniżej.',
                'DROPZONE_FILE_TOO_BIG' => 'Plik jest zbyt duży ({{filesize}}MiB). Maksymalna wielkość pliku to: {{maxFilesize}}MiB.',
                'DROPZONE_INVALID_FILE_TYPE' => 'Nie można przesłać pliku. Format nie jest obsługiwany.',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'Nie można przesłać więcej plików.',
                'DROPZONE_REMOVE_FILE' => 'Usuń plik',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => 'Czy na pewno chcesz usunąć plik?',
                'DROPZONE_RESPONSE_ERROR' => 'Status serwera {{statusCode}}.',
                'YES' => 'Tak',
                'NO' => 'Nie',
                'REFRESH_PREVENTION' => 'Zapobiegaj odświeżaniu',
                'REFRESH_PREVENTION_HELP' => 'Użyj unikatowego identyfikatora ID , aby upewnić się, że przeglądarka nie przetworzy formularza ponownie.'
            ]
        ],
        'nl' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formulier niet gevalideerd. Een of meerdere verplichte velden ontbreken.',
                'NONCE_NOT_VALIDATED' => 'Oeps er was een probleem, controleer je input en stuur het formulier opnieuw.',
                'FILES' => 'Bestanden geupload',
                'FORM_ALREADY_SUBMITTED' => 'Dit formulier is al eerder verstuurd.',
                'ALLOW_MULTIPLE' => 'Meer dan een bestand toegestaan',
                'ALLOW_MULTIPLE_HELP' => 'Staat toe dat meer dan een bestand geselecteerd kan worden voor uploaden.',
                'DESTINATION' => 'Bestemming',
                'DESTINATION_HELP' => 'De lokatie waar de bestanden naartoe moeten worden geupload',
                'ACCEPT' => 'Toegestane MIME types',
                'ACCEPT_HELP' => 'Een lijst van MIME types welke zijn toegestaan om te uploaden',
                'ERROR_VALIDATING_CAPTCHA' => 'Fout bij Captcha validatie',
                'DATA_SUMMARY' => 'Hier is de samenvatting van wat u ons heeft gestuurd:',
                'NO_FORM_DATA' => 'Geen formdata beschikbaar',
                'RECAPTCHA' => 'ReCaptcha',
                'RECAPTCHA_SITE_KEY' => 'Site sleutel',
                'RECAPTCHA_SITE_KEY_HELP' => 'Voor meer informatie ga naar https://developers.google.com/recaptcha',
                'RECAPTCHA_SECRET_KEY' => 'Geheime sleutel',
                'RECAPTCHA_SECRET_KEY_HELP' => 'Voor meer informatie ga naar https://developers.google.com/recaptcha',
                'GENERAL' => 'Algemeen',
                'USE_BUILT_IN_CSS' => 'Gebruik ingebouwde CSS',
                'FILEUPLOAD_PREVENT_SELF' => 'Kan "%s" niet buiten paginas gebruiken.',
                'FILEUPLOAD_UNABLE_TO_UPLOAD' => 'Niet mogelijk om bestand %s: %s te uploaden',
                'FILEUPLOAD_UNABLE_TO_MOVE' => 'Niet mogelijk om bestand %s naar "%s" te verplaatsen',
                'DROPZONE_CANCEL_UPLOAD' => 'Upload annuleren',
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION' => 'Weet u zeker dat u deze upload wilt annuleren?',
                'DROPZONE_DEFAULT_MESSAGE' => 'Sleep hier uw bestanden heen of <strong>klik in dit gebied</strong>',
                'DROPZONE_FALLBACK_MESSAGE' => 'Uw browser ondersteund geen drag en drop bestand uploads.',
                'DROPZONE_FALLBACK_TEXT' => 'Gebruik alsublieft het fallback formulier hieronder om uw bestanden te uploaden zoals vroeger.',
                'DROPZONE_FILE_TOO_BIG' => 'Bestand is te groot ({{filesize}}MiB). Maximale bestandsgrootte: {{maxFilesize}}MiB.',
                'DROPZONE_INVALID_FILE_TYPE' => 'U kunt geen bestanden uploaden van dit type.',
                'DROPZONE_MAX_FILES_EXCEEDED' => 'U kunt niet meer bestanden uploaden.',
                'DROPZONE_REMOVE_FILE' => 'Verwijder bestand',
                'DROPZONE_REMOVE_FILE_CONFIRMATION' => 'Weet u zeker dat u het bestand wilt verwijderen?',
                'DROPZONE_RESPONSE_ERROR' => 'Server reageert met {{statusCode}} code.',
                'YES' => 'Ja',
                'NO' => 'Nee',
                'REFRESH_PREVENTION' => 'Verversbescherming',
                'REFRESH_PREVENTION_HELP' => 'Gebruik het unieke ID van her formulier om zeker te stellen dat hetzelfde formulier niet opnieuw wordt verwerkt als de browser ververst wordt',
                'LIMIT' => 'Limiet',
                'LIMIT_HELP' => 'Maximum aantal toegestande bestanden per veld (meerdere vereist)',
                'FILESIZE' => 'Maximale bestandsgrootte',
                'FILESIZE_HELP' => 'Maximale bestandsgrootte toegestaan (in MB), 0 = Gebruik systeem standaard',
                'AVOID_OVERWRITING' => 'Vermijd overschrijven',
                'AVOID_OVERWRITING_HELP' => 'Voorkom dat bestanden met dezelfde naam worden overschreven. Datum prefix wordt toegevoegd',
                'RANDOM_NAME' => 'Willekeurige naam',
                'RANDOM_NAME_HELP' => 'Genereer een willekeurige naam van 15 karakters voor de geuploade bestanden'
            ]
        ]
    ]
];
