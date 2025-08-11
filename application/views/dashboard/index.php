<!-- filepath: c:\xampp\htdocs\shipment_remake\application\views\dashboard\index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .stats { display: flex; gap: 30px; margin-bottom: 30px; }
        .stat-box { background: #f5f5f5; padding: 20px; border-radius: 8px; min-width: 180px; text-align: center; }
        .stat-title { font-size: 1.1em; color: #555; margin-bottom: 8px; }
        .stat-value { font-size: 2em; color: #222; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #f0f0f0; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>

    <div class="stats">
        <div class="stat-box">
            <div class="stat-title">Total Shipments</div>
            <div class="stat-value"><?= isset($total_shipments) ? $total_shipments : 0 ?></div>
        </div>
        <div class="stat-box">
            <div class="stat-title">Pending Shipments</div>
            <div class="stat-value"><?= isset($pending_shipments) ? $pending_shipments : 0 ?></div>
        </div>
        <div class="stat-box">
            <div class="stat-title">Delivered Shipments</div>
            <div class="stat-value"><?= isset($delivered_shipments) ? $delivered_shipments : 0 ?></div>
        </div>
    </div>

    <h2>Recent Shipments</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Recipient</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($recent_shipments)): ?>
                <?php foreach ($recent_shipments as $shipment): ?>
                    <tr>
                        <td><?= htmlspecialchars($shipment['id']) ?></td>
                        <td><?= htmlspecialchars($shipment['recipient'] ?? '-') ?></td>
                        <td><?= htmlspecialchars($shipment['status']) ?></td>
                        <td><?= htmlspecialchars($shipment['date'] ?? '-') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center;">No recent shipments found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>