<?php

use App\Jobs\Admin\ManualImportInstance;
use App\Jobs\Admin\SyncReportProviders;
use App\Jobs\System\AdminSendAvailableUpdateNotification;
use App\Jobs\System\InstanceHealthCheck;
use App\Jobs\Admin\ConvertInstanceToTemplate;
use App\Jobs\System\PostInstallInstanceSteps;
use App\Jobs\System\CreateAutomaticBackup;
use App\Jobs\System\CacheInstancePageSpeed;
use App\Jobs\System\CacheInstanceDetails;
use App\Jobs\System\PostStagingSteps;
use App\Jobs\System\SyncInstanceSiteName;
use App\Jobs\System\UserSendAvailableUpdateNotification;
use App\Jobs\User\ImportInstance;
use App\Jobs\System\ImportVisitors;
use App\Jobs\System\InstallTheme;
use App\Jobs\System\InstallAndActivatePlugin;
use App\Jobs\System\RefreshReportData;
use App\Jobs\System\ProcessSslOrder;
use App\Jobs\System\ScanPluginsAndThemes;
use App\Jobs\Admin\ForceUpdateTheme;
use App\Jobs\Admin\ForceUpdatePlugin;
use App\Jobs\Admin\InstallPackage;
use App\Jobs\User\CreateBackup;
use App\Jobs\User\DeleteBackup;
use App\Jobs\User\RestoreBackup;
use App\Jobs\User\CreateStaging;
use App\Jobs\User\PushToLive;
use App\Jobs\User\InstallInstance;
use App\Jobs\User\InstallPlugin;
use App\Jobs\User\UpdatePlugin;
use App\Jobs\User\InstallTheme as UserInstallTheme;
use App\Jobs\User\UpdateTheme;
use App\Jobs\User\UpdateWordpress;

return [
    InstallPackage::class => "Paket installieren: :name",
    ForceUpdatePlugin::class => "Update Plugin erzwingen: :name",
    ForceUpdateTheme::class => "Update Theme: :name erzwingen",
    ScanPluginsAndThemes::class => "Plugins und Themes durchsuchen",
    ProcessSslOrder::class => "Prozess SSL-Order: :name",
    RefreshReportData::class => "Berichtsdaten aktualisieren",
    InstallAndActivatePlugin::class => "Plugin installieren: :name",
    InstallTheme::class => "Theme installieren: :name",
    ImportVisitors::class => "Besucher importieren",
    CreateBackup::class => "Backup erstellen",
    DeleteBackup::class => "Backup löschen",
    RestoreBackup::class => "Backup wiederherstellen",
    CreateStaging::class => "Staging erstellen",
    PushToLive::class => "Push to Live",
    ImportInstance::class => "Importiere Instanz",
    InstallInstance::class => "Instanz erstellen",
    InstallPlugin::class => "Plugin installieren: :name",
    UpdatePlugin::class => "Plugin aktualisieren: :name",
    UserInstallTheme::class => "Theme installieren: :name",
    UpdateTheme::class => "Theme aktualisieren: :name",
    UpdateWordpress::class => "WordPress aktualisieren",
    CacheInstanceDetails::class => "Cache-Details",
    CacheInstancePageSpeed::class => "Cache-Instanz Seitengeschwindigkeit",
    CreateAutomaticBackup::class => "Automatische Sicherung erstellen",
    PostInstallInstanceSteps::class => "Installierte Instanz konfigurieren",
    PostStagingSteps::class => "Installierte Staging konfigurieren",
    SyncInstanceSiteName::class => "Sync-Site-Name",
    SyncReportProviders::class => "Berichtsanbieter synchronisieren",
    InstanceHealthCheck::class => 'Gesundheitscheck',
    ConvertInstanceToTemplate::class => "Instanzvorlage erstellen: :name",
    UserSendAvailableUpdateNotification::class => "Benutzerbenachrichtigung über verfügbare Updates",
    AdminSendAvailableUpdateNotification::class => "Admin-Benachrichtigung über verfügbare Updates",
    ManualImportInstance::class => "Manuelle Import-Instanz",
];

