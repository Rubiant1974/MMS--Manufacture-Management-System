<?php

declare(strict_types=1);

$appConfig = require __DIR__ . '/config/app.php';
$dbConfig = require __DIR__ . '/config/database.php';

date_default_timezone_set($appConfig['timezone']);

$moduleMap = [
    'dashboard' => null,
    'auth' => __DIR__ . '/modules/auth/index.php',
    'engineering' => __DIR__ . '/modules/engineering/index.php',
    'system' => __DIR__ . '/modules/system/index.php',
    'master' => __DIR__ . '/modules/master/index.php',
    'marketing' => __DIR__ . '/modules/marketing/index.php',
    'produksi' => __DIR__ . '/modules/produksi/index.php',
    'inventory' => __DIR__ . '/modules/inventory/index.php',
    'qc' => __DIR__ . '/modules/qc/index.php',
    'finance' => __DIR__ . '/modules/finance/index.php',
    'accounting' => __DIR__ . '/modules/accounting/index.php',
    'hris' => __DIR__ . '/modules/hris/index.php',
    'laporan' => __DIR__ . '/modules/laporan/index.php',
];

$currentModule = strtolower((string) ($_GET['module'] ?? 'dashboard'));
if (!array_key_exists($currentModule, $moduleMap)) {
    http_response_code(404);
    $currentModule = 'dashboard';
}

require __DIR__ . '/layout/header.php';
?>
<div class="md:flex">
    <?php require __DIR__ . '/layout/sidebar.php'; ?>

    <main class="flex-1 p-4 md:p-6">
        <?php require __DIR__ . '/layout/notifications.php'; ?>

        <section class="grid gap-4 md:grid-cols-3 mb-6">
            <article class="bg-white p-4 rounded-xl border shadow-sm">
                <h3 class="font-semibold text-slate-700">Business Flow</h3>
                <p class="text-sm text-slate-600 mt-2">Sales → Engineering → PPIC → Produksi → QC → Gudang → Finance/Accounting.</p>
            </article>
            <article class="bg-white p-4 rounded-xl border shadow-sm">
                <h3 class="font-semibold text-slate-700">Tech Stack</h3>
                <p class="text-sm text-slate-600 mt-2">PHP Native, MySQL/MariaDB, Tailwind CDN, Chart.js, Select2, html5-qrcode, Signature Pad.</p>
            </article>
            <article class="bg-white p-4 rounded-xl border shadow-sm">
                <h3 class="font-semibold text-slate-700">DB Target</h3>
                <p class="text-sm text-slate-600 mt-2">SPK Assembly, Start-Hold-Close logs, Digital QC & NCR, Material Return loop.</p>
            </article>
        </section>

        <?php if ($currentModule === 'dashboard'): ?>
            <section class="bg-white rounded-xl shadow-sm border p-4 md:p-6">
                <h2 class="text-xl font-semibold mb-3">Dashboard Inisiasi PRO-SYS v2.1</h2>
                <p class="text-sm text-slate-600 mb-3">Fondasi awal telah siap. Lanjutkan implementasi modul Engineering, Shop Floor logic, dan Digital Signature chain.</p>
                <div class="text-xs text-slate-500 space-y-1">
                    <p>App: <?= htmlspecialchars($appConfig['app_name'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p>Environment: <?= htmlspecialchars((string) $appConfig['environment'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p>DB: <?= htmlspecialchars($dbConfig['host'] . ':' . $dbConfig['port'] . '/' . $dbConfig['database'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </section>
        <?php else: ?>
            <?php require $moduleMap[$currentModule]; ?>
        <?php endif; ?>
    </main>
</div>
<?php require __DIR__ . '/layout/footer.php'; ?>
