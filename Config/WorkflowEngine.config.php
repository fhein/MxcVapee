<?php
return [
    'notification_context' => [
        'PREPAYED_ORDER' => [
            'reminder' => [
                'mailTemplate'      => 'sMxcWorkflowNotification',
                'mailSubject'       => 'Zahlungserinnerung zu Bestellung {$orderNumber} an Kunden versandt',
                'mailTitle'         => 'Zahlungserinnerung versandt',
                'mailBody'          => 'zur Vorkasse-Bestellung mit der Nummer <strong>{$orderNumber}</strong> wurde eine '
                                        . 'Zahlungserinnerung an den Kunden geschickt.',
                'message'           => 'Zahlungserinnerung zur Vorkasse-Bestellung versandt',
            ],
        ]
    ]
];