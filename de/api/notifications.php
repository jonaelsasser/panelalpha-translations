<?php

use App\Notifications\Admin\DnsZone\CreateADnsRecordFailed;
use App\Notifications\Admin\DnsZone\DnsRecordsCreateFailed;
use App\Notifications\Admin\Instance\ImportByUserFailed;
use App\Notifications\Admin\Instance\ImportByUserFinished;
use App\Notifications\Admin\Instance\ManualImportInstanceFailed;
use App\Notifications\Admin\Instance\ManualImportInstanceFinished;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFailed;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFinished;
use App\Notifications\Admin\EmailDomain\EmailDomainCreateFailed;
use App\Notifications\Admin\EmailDomain\EmailDomainExists;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFailed;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFinished;
use App\Notifications\Admin\SslOrder\DnsPropagationExceeded;
use App\Notifications\User\Instance\UpdateWordpressFinished;
use App\Notifications\User\Instance\UpdateWordpressFailed;
use App\Notifications\User\Instance\PushToLiveFinished;
use App\Notifications\User\Instance\PushToLiveFailed;
use App\Notifications\User\Instance\InstanceInvitationReceived;
use App\Notifications\User\Instance\InstanceInstallationFinished;
use App\Notifications\User\Instance\InstanceInstallationFailed;
use App\Notifications\User\Instance\CreateStagingFinished;
use App\Notifications\User\Instance\CreateStagingFailed;
use App\Notifications\User\Plugin\UpdateFinished;
use App\Notifications\User\Plugin\UpdateFailed;
use App\Notifications\User\Plugin\InstallFinished;
use App\Notifications\User\Plugin\InstallFailed;
use App\Notifications\User\Backup\AutomaticCreateFinished;
use App\Notifications\User\Backup\AutomaticCreateFailed;
use App\Notifications\User\Backup\RestoreFinished;
use App\Notifications\User\Backup\RestoreFailed;
use App\Notifications\User\Backup\DeleteFinished;
use App\Notifications\User\Backup\DeleteFailed;
use App\Notifications\User\Backup\CreateFinished;
use App\Notifications\User\Backup\CreateFailed;
use App\Notifications\Admin\Service\ServiceUpgraded;
use App\Notifications\Admin\DnsZone\DnsZoneCreateFailed;
use App\Notifications\Admin\DnsZone\DnsZoneExists;
use App\Notifications\Admin\Service\ServiceUnsuspended;
use App\Notifications\Admin\Service\ServiceSuspended;
use App\Notifications\Admin\Queue\QueueTaskSucceeded;
use App\Notifications\Admin\Queue\QueueTaskFailed;
use App\Notifications\Admin\Updates\WordpressUpdateAvailable;
use App\Notifications\Admin\Updates\ThemeUpdateAvailable;
use App\Notifications\Admin\Updates\PluginUpdateAvailable;
use App\Notifications\Admin\System\ResetPassword;
use App\Notifications\Admin\Instance\InstanceDeletedByUser;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFailed;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFinished;
use App\Notifications\Admin\Package\InstallPackageFinished;
use App\Notifications\Admin\Package\InstallPackageFailed;
use App\Notifications\Admin\Theme\ForceUpdateThemeFinished;
use App\Notifications\Admin\Theme\ForceUpdateThemeFailed;
use App\Notifications\Admin\Plugin\ForceUpdatePluginFinished;
use App\Notifications\Admin\Plugin\ForceUpdatePluginFailed;
use App\Notifications\User\Instance\ImportFailed;
use App\Notifications\User\Instance\ImportFinished;
use App\Notifications\User\System\NewDeviceLogin;

return [
    ForceUpdatePluginFailed::class => [
        "name" => "Update Plugin erzwingen fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, ein Update-Plugin in der Instanz zu erzwingen, fehlgeschlagen ist. Die Benachrichtigung kann Details über das Plugin und die zugehörige Instanz sowie weitere Schritte beinhalten."
    ],
    ForceUpdatePluginFinished::class => [
        "name" => "Update Plugin erzwingen beendet",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Update-Plugin in der Instanz zu erzwingen, erfolgreich beendet wurde. Die Benachrichtigung kann Details über das Plugin und die zugehörige Instanz sowie weitere Schritte beinhalten."
    ],
    ForceUpdateThemeFailed::class => [
        "name" => "Update erzwingen fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, ein Update-Theme in der Instanz zu erzwingen, fehlgeschlagen ist. Die Benachrichtigung kann Details über das Thema und die zugehörige Instanz sowie weitere Schritte beinhalten."
    ],
    ForceUpdateThemeFinished::class => [
        "name" => "Update Thema erzwingen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Update-Theme in der Instanz zu erzwingen, erfolgreich abgeschlossen wurde. Die Benachrichtigung kann Details über das Thema und die zugehörige Instanz sowie weitere Schritte beinhalten."
    ],
    InstallPackageFailed::class => [
        "name" => "Installationspaket fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, Plugins und Themes aus Paketen zu installieren und zu aktivieren, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten über die betreffende Instanz und alle weiteren Schritte enthalten, die unternommen werden sollten."
    ],
    InstallPackageFinished::class => [
        "name" => "Installationspaket abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, Plugins und Themes aus Instanzpaketen zu installieren und zu aktivieren, erfolgreich beendet wurde. Die Benachrichtigung kann Einzelheiten über die betreffende Instanz und alle weiteren Schritte enthalten, die unternommen werden sollten."
    ],
    InstanceInstallationByUserFinished::class => [
        "name" => "Instanz-Installation nach Benutzer beendet",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Installation einer neuen WordPress-Instanz durch den Benutzer beendet ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, wer die Instanz erstellt hat, den Ort der Instanz und alle weiteren Schritte, die durchgeführt werden sollten."
    ],
    InstanceInstallationByUserFailed::class => [
        "name" => "Instanz-Installation nach Benutzer fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Installation einer neuen WordPress-Instanz durch den Benutzer fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz erstellt hat, den Ort der Instanz Informationen über Fehler und alle weiteren Schritte, die unternommen werden sollten."
    ],
    InstanceDeletedByUser::class => [
        "name" => "Instanz gelöscht von Benutzer",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz von einem Benutzer gelöscht wurde. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz, den Instanznamen und alle weiteren Schritte gelöscht hat."
    ],
    ResetPassword::class => [
        "name" => "Passwort zurücksetzen",
        "description" => "Eine Passwort-Rücksetzungs-E-Mail ist eine automatisierte Nachricht an die E-Mail-Adresse eines Benutzers, wenn er das Passwort für ein Konto zurücksetzen möchte. Die E-Mail enthält in der Regel einen Link oder eine Anleitung zum Zurücksetzen des Passworts sowie ein Zeitlimit für die Gültigkeit."
    ],
    PluginUpdateAvailable::class => [
        "name" => "Plugin-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Plugin, das sie verwenden, auf ihrer WordPress-Website verfügbar ist. Das Update enthält Fehlerkorrekturen und neue Funktionen, die die Performance und Funktionalität des Plugins insgesamt verbessern."
    ],
    ThemeUpdateAvailable::class => [
        "name" => "Theme Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Thema, das sie verwenden, auf seiner WordPress-Website verfügbar ist. Das Update enthält Fehlerkorrekturen und neue Funktionen, die die Gesamtleistung und Funktionalität des Themes verbessern."
    ],
    WordpressUpdateAvailable::class => [
        "name" => "WordPress-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ihre WordPress-Website verfügbar ist. Das Update enthält wichtige Sicherheitskorrekturen und neue Features, die die Gesamtleistung und Funktionalität der Website verbessern."
    ],
    QueueTaskFailed::class => [
        "name" => "Warteschlange fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Aufgabe in der Warteschlange fehlgeschlagen ist. Die Benachrichtigung kann Details der Aufgabe, der zugehörigen Instanz und des Fehlers enthalten."
    ],
    QueueTaskSucceeded::class => [
        "name" => "Warteschlange erfolgreich",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Aufgabe in der Warteschlange erfolgreich war. Die Benachrichtigung kann Details der Aufgabe und der zugehörigen Instanz enthalten."
    ],
    ServiceSuspended::class => [
        "name" => "Dienst unterbrochen",
        "description" => "In der Mitteilung wird der Empfänger darüber informiert, dass sein Dienst ausgesetzt wurde. Die Benachrichtigung kann Informationen über die gesperrte Domain und einen Link zur Wiederherstellung des Dienstes enthalten."
    ],
    ServiceUnsuspended::class => [
        "name" => "Dienst nicht gesperrt",
        "description" => "In der Mitteilung wird der Empfänger darüber informiert, dass sein Dienst aufgehoben wurde. Die Benachrichtigung kann Informationen über die nicht unterbrochene Domäne und weitere Schritte beinhalten."
    ],
    DnsZoneExists::class => [
        "name" => "DNS-Zone existiert",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der DNS-Zonenerstellungsversuch fehlgeschlagen ist, weil die DNS-Zone bereits existiert. Die Benachrichtigung kann Details über die vorhandene DNS-Zone, den betroffenen Dienst und den betreffenden DNS-Server enthalten."
    ],
    DnsZoneCreateFailed::class => [
        "name" => "DNS-Zonenerstellung fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der DNS-Zonenerstellungsversuch fehlgeschlagen ist. Die Nachricht kann Informationen über die versuchte DNS-Zone, den verwendeten Dienst und den Server, auf dem die Erstellung fehlgeschlagen ist, liefern."
    ],
    ServiceUpgraded::class => [
        "name" => "Service aktualisiert",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass sein Dienst aktualisiert wurde. Die Benachrichtigung kann Informationen über die aktualisierte Domain und alle weiteren Schritte enthalten, die unternommen werden sollten."
    ],
    CreateFailed::class => [
        "name" => "Backup erstellen fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website oder seines Systems nicht erstellt wurde. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Sicherung fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    CreateFinished::class => [
        "name" => "Backup erstellen abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website oder seines Systems erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo das Backup gespeichert wird und wie man darauf zugreift."
    ],
    DeleteFailed::class => [
        "name" => "Löschen fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website nicht gelöscht werden konnte. Die Mitteilung kann Einzelheiten darüber enthalten, warum die Löschung fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    DeleteFinished::class => [
        "name" => "Löschen der Sicherung abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website erfolgreich gelöscht wurde. Die Benachrichtigung kann Details enthalten, über die Sicherungskopien gelöscht wurden, und alle weiteren Schritte, die unternommen werden sollen."
    ],
    RestoreFailed::class => [
        "name" => "Backup-Wiederherstellung fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, ein Backup seiner Website wiederherzustellen, fehlgeschlagen ist. Die Mitteilung kann Einzelheiten darüber enthalten, warum die Wiederherstellung fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    RestoreFinished::class => [
        "name" => "Backup-Wiederherstellung abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website erfolgreich wiederhergestellt wurde. Die Benachrichtigung kann Details enthalten, über die Sicherungskopien wiederhergestellt wurden und weitere Schritte unternommen werden sollten."
    ],
    AutomaticCreateFailed::class => [
        "name" => "Automatisches Backup fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein automatisches Backup seiner Website oder seines Systems nicht erstellt werden konnte. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Sicherung fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    AutomaticCreateFinished::class => [
        "name" => "Automatische Sicherung erstellen abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein automatisches Backup seiner Website oder seines Systems erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo das Backup gespeichert wird und wie man darauf zugreift."
    ],
    InstallFailed::class => [
        "name" => "Plugin-Installation fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, ein Plugin für seine WordPress-Website zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    InstallFinished::class => [
        "name" => "Plugin-Installation abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Plugin für seine WordPress-Website erfolgreich installiert wurde. Die Benachrichtigung kann Details über das installierte Plugin und weitere Schritte beinhalten."
    ],
    UpdateFailed::class => [
        "name" => "Plugin Update fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, ein Plugin für ihre WordPress-Website zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Aktualisierung fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    UpdateFinished::class => [
        "name" => "Plugin-Installation abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Plugin für seine WordPress-Website erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Plugin aktualisiert wurde, und alle weiteren Schritte, die unternommen werden sollten."
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        "name" => "Theme-Installation fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, ein Theme für seine WordPress-Website zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        "name" => "Theme-Installation abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Theme für seine WordPress-Website erfolgreich installiert wurde. Die Benachrichtigung kann Details enthalten, auf denen das Theme installiert wurde und weitere Schritte unternommen werden sollten."
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        "name" => "Theme-Update fehlgeschlagen",
        "description" => "Die Benachrichtigung teilt dem Empfänger mit, dass ein Versuch, ein Theme für seine WordPress-Website zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Aktualisierung fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        "name" => "Theme-Update abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Theme für seine WordPress-Website erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details enthalten, zu welchem Thema aktualisiert wurde und weitere Schritte unternommen werden sollten."
    ],
    CreateStagingFailed::class => [
        "name" => "Staging erstellen fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, eine Staging-Instanz ihrer Website zu erstellen, fehlgeschlagen ist. Die Mitteilung kann Einzelheiten darüber enthalten, warum die Erstellung gescheitert ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    CreateStagingFinished::class => [
        "name" => "Staging erstellen abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine Staging-Instanz ihrer Website erfolgreich erstellt wurde. Die Benachrichtigung kann Details über den Zugriff auf die Staging-Instanz und weitere Schritte beinhalten."
    ],
    InstanceInstallationFailed::class => [
        "name" => "Instanz-Installation fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, eine WordPress-Instanz zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    InstanceInstallationFinished::class => [
        "name" => "Instanz-Installation abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz erfolgreich installiert wurde. Die Benachrichtigung kann Details über den Zugriff auf die Instanz und weitere Schritte beinhalten."
    ],
    ImportFailed::class => [
        "name" => "Import fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, eine WordPress-Instanz zu importieren, fehlgeschlagen ist. Die Mitteilung kann Einzelheiten darüber enthalten, warum der Import fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    ImportFinished::class => [
        "name" => "Instanz Import abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz erfolgreich importiert wurde. Die Benachrichtigung kann Details über den Zugriff auf die Instanz und weitere Schritte beinhalten."
    ],
    InstanceInvitationReceived::class => [
        "name" => "Einladung der Instanz erhalten",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass er eine Einladung zur Verwaltung einer bestimmten Instanz erhalten hat. Die Benachrichtigung kann Details darüber enthalten, wer die Einladung gesendet hat, die zu verwaltende Instanz und die Aktionen, die auf der Instanz ausgeführt werden können."
    ],
    NewDeviceLogin::class => [
        "name" => "Anmelden von neuem Gerät",
        "description" => "Benachrichtigung ist eine Warnung, die generiert wird, wenn sich ein neues Gerät oder ein neuer Browser oder eine neue IP-Adresse, auf der Website anmelden. Die Benachrichtigung enthält in der Regel Informationen über das Gerät, wie seine IP-Adresse und Datum und Uhrzeit der Verbindung."
    ],
    PushToLiveFailed::class => [
        "name" => "Push to Live fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, die an der Staging-Instanz vorgenommenen Änderungen auf die Live-Version der Website zu schieben, fehlgeschlagen ist. Die Mitteilung kann Einzelheiten darüber enthalten, warum das Push-Verfahren gescheitert ist und welche Schritte unternommen werden sollten, um das Problem zu lösen."
    ],
    PushToLiveFinished::class => [
        "name" => "Push to Live abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die an der Staging-Instanz vorgenommenen Änderungen erfolgreich in die Live-Version der Website oder des Systems verschoben wurden. Die Mitteilung kann Einzelheiten darüber enthalten, welche Änderungen vorgenommen wurden und welche weiteren Schritte unternommen werden sollten."
    ],
    UpdateWordpressFailed::class => [
        "name" => "WordPress-Update fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Versuch, die WordPress-Instanz zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Aktualisierung fehlgeschlagen ist und welche Schritte zur Lösung des Problems unternommen werden sollten."
    ],
    UpdateWordpressFinished::class => [
        "name" => "WordPress-Update abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die WordPress-Instanz erfolgreich aktualisiert wurde. Die Benachrichtigung kann Einzelheiten darüber enthalten, welche Änderungen an der Instanz vorgenommen wurden und welche weiteren Schritte unternommen werden sollten."
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        "name" => "Passwort zurücksetzen",
        "description" => "Eine Passwort-Rücksetzungs-E-Mail ist eine automatisierte Nachricht an die E-Mail-Adresse eines Benutzers, wenn er das Passwort für ein Konto zurücksetzen möchte. Die E-Mail enthält in der Regel einen Link oder eine Anleitung zum Zurücksetzen des Passworts sowie ein Zeitlimit für die Gültigkeit."
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        "name" => "Plugin-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Plugin, das sie verwenden, auf ihrer WordPress-Website verfügbar ist. Das Update enthält Fehlerkorrekturen und neue Funktionen, die die Performance und Funktionalität des Plugins insgesamt verbessern."
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        "name" => "Theme Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Thema, das sie verwenden, auf seiner WordPress-Website verfügbar ist. Das Update enthält Fehlerkorrekturen und neue Funktionen, die die Gesamtleistung und Funktionalität des Themes verbessern."
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        "name" => "WordPress-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ihre WordPress-Website verfügbar ist. Das Update enthält wichtige Sicherheitskorrekturen und neue Features, die die Gesamtleistung und Funktionalität der Website verbessern."
    ],
    DnsPropagationExceeded::class => [
        "name" => "DNS-Ausbreitung für SSL-Bestellung überschritten",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die zugewiesene Zeit für die DNS-Weitergabe im Verhältnis zu ihrer SSL-Zertifikatsbestellung überschritten wurde."
    ],
    CreateADnsRecordFailed::class => [
        "name" => "Erstellung eines DNS-Datensatzes fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Erstellung des DNS-Datensatzes A fehlgeschlagen ist.'
    ],
    InstanceTemplateCreateFailed::class => [
        "name" => "Erstellen der Instanzvorlage fehlgeschlagen",
        "description" => 'Benachrichtigung informiert den Empfänger, dass die Instanzvorlage nicht erstellt wurde.'
    ],
    InstanceTemplateCreateFinished::class => [
        "name" => "Instanzvorlagenerstellung beendet",
        "description" => 'Benachrichtigung informiert den Empfänger, dass die Instanzvorlage erfolgreich erstellt wurde.'
    ],
    EmailDomainCreateFailed::class => [
        "name" => "Erstellen der E-Mail-Domain fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Erstellung der E-Mail-Domäne fehlgeschlagen ist.'
    ],
    EmailDomainExists::class => [
        "name" => "E-Mail-Domain existiert",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die E-Mail-Domäne bereits auf dem E-Mail-Server existiert.'
    ],
    SyncReportProvidersFailed::class => [
        "name" => "Sync-Berichtsanbieter fehlgeschlagen",
        "description" => 'Eine Benachrichtigung informiert den Empfänger, dass die Synchronisierung von Berichtanbietern fehlgeschlagen ist. Die Benachrichtigung kann Informationen über die Instanz und die Fehlermeldung enthalten.'
    ],
    SyncReportProvidersFinished::class => [
        "name" => "Sync-Berichtsanbieter abgeschlossen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Synchronisierung von Berichtsanbietern abgeschlossen ist. Die Benachrichtigung kann Instanzinformationen enthalten.'
    ],
    DnsRecordsCreateFailed::class => [
        "name" => "Erstellung von DNS-Datensätzen fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die aufgelisteten DNS-Datensätze nicht für die Zone erstellt wurden. Die Benachrichtigung kann Informationen über DNS-Datensätze oder DNS-Zone enthalten.'
    ],
    ImportByUserFailed::class => [
        "name" => "Instanz-Import nach Benutzer fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass der Import der Instanz durch den Benutzer fehlgeschlagen ist.'
    ],
    ImportByUserFinished::class => [
        "name" => "Instanz-Import nach Benutzer beendet",
        "description" => 'Benachrichtigung teilt dem Empfänger mit, dass der Import der Instanz durch den Benutzer erfolgreich war.'
    ],
    ManualImportInstanceFailed::class => [
        "name" => "Manuelle Import-Instanz fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass der manuelle Import durch Admin fehlgeschlagen ist.'
    ],
    ManualImportInstanceFinished::class => [
        "name" => "Manuelle Import-Instanz abgeschlossen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass der manuelle Import durch Admin erfolgreich war.'
    ]
];

