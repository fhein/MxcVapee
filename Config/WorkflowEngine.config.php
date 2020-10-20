<?php
return [
    'notification_address' => [
        'from' => [
            'name' => 'vapee.de Bestellwesen',
            'email' => 'info@vapee.de',
        ],
        'to' => [
            'support@vapee.de'
        ],
    ],
    'notification_context' => [
        'PREPAYED_ORDER' => [
            'reminder' => [
                'mailTemplate'      => 'sMxcWorkflowNotification',
                'mailSubject'       => 'Zahlungserinnerung zu Bestellung {$orderNumber} an Kunden versandt',
                'mailTitle'         => 'Zahlungserinnerung versandt',
                'mailBody'          => 'zur Vorkasse-Bestellung mit der Nummer <strong>{$orderNumber}</strong> wurde eine '
                                        . 'Zahlungserinnerung an den Kunden geschickt, da nach drei Tagen noch kein Zahlungseingang erfolgt ist.',
                'message'           => 'Zahlungserinnerung zur Vorkasse-Bestellung versandt',
            ],
        ],
        'ORDER' => [
            'closed' => [
                'mailTemplate'      => 'sMxcWorkflowNotification',
                'mailSubject'       => 'Rechnung zur Bestellung {$orderNumber}.',
                'mailTitle'         => 'Bestellung erfolgreich abgeschlossen',
                'mailBody'          => 'die Bestellung <strong>{$orderNumber}</strong> wurde erfolgreich abgeschlossen. '
                                        . 'Anhängend die Rechnung für die Buchhaltung.',
                'message'           => 'Bestellung erfolgreich abgeschlossen',
            ]
        ]

    ]
];