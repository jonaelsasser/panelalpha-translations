<?php

use App\Lib\Integrations\DbIp;
use App\Lib\Integrations\GooglePageSpeedInsights;
use App\Lib\Integrations\Onboarding\Extendify;
use App\Lib\Integrations\ReportProviders\GoogleAnalytics;
use App\Lib\Integrations\ReportProviders\Matomo;
use App\Lib\Integrations\SslProviders\LetsEncrypt;

return [
    DbIp::class => [
        "subtitle" => "Wird verwendet, um den Standort beim Anmelden von einem neuen Gerät zu bestimmen",
        "description" => "DB-IP ist eine leistungsstarke Geolokationsdatenbank, die IP-Adressen auf physische Orte abbildet. Es ermöglicht es Unternehmen, Inhalte und Dienstleistungen auf der Basis bestimmter Regionen anzupassen, gezielte Werbung zu verbessern und das Nutzererlebnis zu verbessern.",
        "instruction" => "PanelAlpha verwendet eine freie Geolokationsdatenbank, die von DB-IP erstellt wurde. Die Voraussetzung für die Verwendung dieser Datenbank ist ein Backlink zu DB-IP. om auf allen Seiten, die Ergebnisse aus der Datenbank anzeigen oder verwenden.<br>Daher wird dieser Link in die E-Mail für neue Geräteerkennung aufgenommen.",
        "fields" => [
            "db-ip-accepted" => [
                "label" => "Ich stimme den Lizenzbedingungen zu"
            ]
        ]
    ],
    GooglePageSpeedInsights::class => [
        "subtitle" => "Wird verwendet, um Screenshots von Instanzen zu machen und um Seiten Ladegeschwindigkeit zu berechnen",
        "description" => "Google PageSpeed Insights ist ein Tool, das die Geschwindigkeit und Leistung Ihrer Website auf Desktop- und mobilen Geräten analysiert. Es bietet praktische Vorschläge zur Verbesserung der Ladezeiten und des Benutzererlebnisses.",
        "instruction" => "Um Google PageSpeed Insights zu verwenden, folgen Sie diesen Schritten:<ol><li>Gehen Sie zu <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Melden Sie sich bei Bedarf bei Ihrem Google-Konto an.</li><li>Erstellen Sie einen neuen API-Schlüssel, indem Sie auf \"Schlüssel holen\" klicken.</li><li>Wählen Sie ein bestehendes Projekt aus oder erstellen Sie ein neues und klicken Sie auf \"Weiter\".</li><li>Sobald der API-Schlüssel erstellt wurde, wird er auf dem Bildschirm angezeigt. Kopieren Sie diesen Schlüssel und verwenden Sie ihn um Google PageSpeed Insights zu integrieren.</li></ol>",
        "fields" => [
            "api-key" => [
                "label" => "API-Schlüssel",
                "placeholder" => "API-Schlüssel eingeben..."
            ]
        ]
    ],
    LetsEncrypt::class => [
        "subtitle" => "Wird verwendet, um SSL-Zertifikate für Instanzen auszustellen",
        "description" => "Let's Encrypt ist eine freie, automatisierte und offene Zertifizierungsstelle, die HTTPS-Verschlüsselung für Webseiten bereitstellt. Es ist einfach zu installieren und zu benutzen, und es sorgt dafür, dass Ihre Website sicher und für jedermann zugänglich ist.",
        "instruction" => "Um Let's Encrypt nutzen zu können, sollten Sie folgende Schritte verfolgen:<ol><li>Geben Sie Ihre E-Mail-Adresse in das Feld Kontakt E-Mail ein.</li><li>Lesen Sie die \"Let's Encrypt Subscriber Agreement\" sorgfältig und akzeptieren Sie die Nutzungsbedingungen.</li><li>Ihr Konto wird dann erstellt und die Integration des SSL-Zertifikats wird automatisch aktiviert.</li><li>Gehen Sie zu Konfiguration > Automatischer SSL und setzen Sie den automatischen SSL-Provider auf \"Let's Encrypt\".</li><li>Encrypt wird von nun an automatisch SSL-Zertifikate ausstellen.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "Lass uns das Konto verschlüsseln",
                "placeholder" => "Konto wird nach dem Speichern von Änderungen generiert"
            ],
            "contact-email" => [
                "label" => "Kontakt-E-Mail",
                "placeholder" => "E-Mail eingeben..."
            ],
            "tos-accepted" => [
                "label" => "Nutzungsbedingungen akzeptieren"
            ]
        ]
    ],
    Matomo::class => [
        "subtitle" => "Für Website-Traffic Datenerfassung und -Analyse beschäftigt",
        "description" => "Matomo Analytics ist eine privat ausgerichtete Webanalyseplattform, die dazu beiträgt, Website-Traffic und Nutzerverhalten zu verfolgen. Es ist anpassbar und bietet detaillierte Einblicke bei gleichzeitiger Sicherheit der Benutzerdaten.",
        "instruction" => "Matomo verwenden folgen Sie diesen Schritten:<ol><li>Gehen Sie zur Matomo URL: <a href=\"{{\\$url}}\" target=\"_blank\">{{\\$url}}</a></li><li>Gehen Sie durch die Matomo Installation.</li><li>Bei Matomo anmelden.</li><li>Navigieren Sie zur Konfiguration &gt; Persönliche &gt; Sicherheit.</li><li>Am unteren Rand der Seite klicken Sie auf \"Neues Token erstellen\", um ein neues Token zu generieren.</li><li>Zurück zu PanelAlpha und geben Sie das API Token ein.</li></ol>",
        "fields" => [
            "url" => [
                "label" => "URL",
                "placeholder" => "Matomo URL eingeben"
            ],
            "api-token" => [
                "label" => "API Token",
                "placeholder" => "API-Token eingeben"
            ]
        ]
    ],
    Extendify::class => [
        "subtitle" => "Wird für Super Quick Onboarding der Instanz verwendet",
        "description" => "Extendify bietet Ihren Endkunden ein web-builder-ähnliches Onboarding-Erlebnis an. Verbessern Sie Ihre Hosting-Kunden in wenigen Minuten schöne, professionell aussehende Websites mit den neuesten AI-Technologien nativ in WordPress.",
        "instruction" => "Um <b>Extendify</b>zu verwenden, verwenden Sie bitte die \"Super Quick Onboarding\" Methode in Ihren Paketen.<br>Sie haben noch kein Konto? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">Richten Sie Ihr Konto</a> ein.",
        "fields" => [
            "partner_id" => [
                "label" => "Partner-ID",
                "placeholder" => "Partner-ID eingeben"
            ]
        ]
    ],
    GoogleAnalytics::class => [
        "subtitle" => "Angestellt für das Sammeln und Analysieren von Website-Traffic Daten",
        "description" => "Google Analytics bietet kostenlose Tools zur Konsolidierung und Analyse der Daten Ihres Unternehmens an, so dass der Entscheidungsprozess datenorientiert sein kann",
        "instruction" => "Um Google Analytics zu nutzen, folgen Sie diesen Schritten:<ol><li>Gehen Sie zur Google Analytics Website: <a href=\"https://analytics.google.com\" target=\"_blank\">https://analytics. oogle.com/</a></li><li>Melden Sie sich bei Ihrem Google-Konto an, wenn Sie noch nicht angemeldet sind.</li><li>Erstellen Sie ein Google Analytics-Konto.</li><li>Gehen Sie zu Administration > Kontoeinstellungen > Kontodaten und finden Sie Ihre Konto-ID.</li><li>Kopieren und fügen Sie die Eigenschaften-ID in das untenstehende Formular ein.</li><li>Erstellen Sie eine JSON-Datei als <a href=\"https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file\" target=\"_blank\">in der Dokumentation</a>beschrieben.</li><li>Fügen Sie die JSON-Datei im Feld Service Account Credentials unten hinzu.</li></ol><br>Warnung! Diese Integration funktioniert basierend auf Javascript-Code, der automatisch auf Kundeninstanzen installiert wird. Der Benutzer kann diesen Code entfernen und die Integration wird nicht mehr funktionieren.",
        "fields" => [
            "account-id" => [
                "label" => "Konto-ID",
                "placeholder" => "Konto-ID eingeben"
            ],
            "service-account-credentials-json" => [
                "label" => "Zugangsdaten für Service Account",
                "placeholder" => "JSON-Datei anhängen"
            ]
        ]
    ],
];

