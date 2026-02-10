<?php

declare(strict_types=1);

$alerts = [
    [
        'type' => 'info',
        'message' => 'Roadmap aktif: Engineering Gatekeeper, Shop Floor Timer, dan Digital Signature.',
    ],
    [
        'type' => 'warning',
        'message' => 'Reminder: Order COD wajib validasi Finance sebelum Delivery Order.',
    ],
];
?>
<div class="space-y-2 mb-4">
    <?php foreach ($alerts as $alert): ?>
        <?php $style = $alert['type'] === 'warning' ? 'bg-amber-100 text-amber-800 border-amber-300' : 'bg-blue-100 text-blue-800 border-blue-300'; ?>
        <div class="border rounded-lg px-4 py-3 text-sm <?= $style ?>">
            <?= htmlspecialchars($alert['message'], ENT_QUOTES, 'UTF-8') ?>
        </div>
    <?php endforeach; ?>
</div>
