<?php

declare(strict_types=1);

$menus = [
    'auth' => ['icon' => 'fa-right-to-bracket', 'label' => 'Auth'],
    'engineering' => ['icon' => 'fa-gears', 'label' => 'Engineering'],
    'system' => ['icon' => 'fa-sliders', 'label' => 'System'],
    'master' => ['icon' => 'fa-database', 'label' => 'Master'],
    'marketing' => ['icon' => 'fa-bullhorn', 'label' => 'Marketing'],
    'produksi' => ['icon' => 'fa-industry', 'label' => 'Produksi'],
    'inventory' => ['icon' => 'fa-warehouse', 'label' => 'Inventory'],
    'qc' => ['icon' => 'fa-magnifying-glass', 'label' => 'QC'],
    'finance' => ['icon' => 'fa-wallet', 'label' => 'Finance'],
    'accounting' => ['icon' => 'fa-book', 'label' => 'Accounting'],
    'hris' => ['icon' => 'fa-users', 'label' => 'HRIS'],
    'laporan' => ['icon' => 'fa-chart-line', 'label' => 'Laporan'],
];
?>
<div class="bg-slate-900 text-slate-100 p-4 md:w-72 w-full">
    <div class="mb-4">
        <h1 class="font-bold text-lg">PRO-SYS v2.1</h1>
        <p class="text-xs text-slate-300">One Gate, One Truth</p>
    </div>
    <nav class="grid grid-cols-2 md:grid-cols-1 gap-2">
        <?php foreach ($menus as $key => $menu): ?>
            <a
                href="?module=<?= urlencode($key) ?>"
                class="rounded-lg px-3 py-2 text-sm transition <?= $currentModule === $key ? 'bg-emerald-500 text-white' : 'bg-slate-800 hover:bg-slate-700' ?>"
            >
                <i class="fa-solid <?= htmlspecialchars($menu['icon'], ENT_QUOTES, 'UTF-8') ?> mr-2"></i>
                <?= htmlspecialchars($menu['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
        <?php endforeach; ?>
    </nav>
</div>
