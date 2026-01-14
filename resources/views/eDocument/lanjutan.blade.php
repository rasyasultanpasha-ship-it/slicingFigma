<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Approved Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fa;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        .card-header {
            padding: 10px 15px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .approver {
            background: #d9eef5;
        }

        .recipient {
            background: #e4f4dd;
        }

        .history {
            background: #f7e1e1;
        }

        .card-body {
            padding: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px 10px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        th {
            text-align: left;
            color: #555;
        }

        .badge {
            background: #1e88e5;
            color: #fff;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 12px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

<!-- APPROVER -->
<div class="card">
    <div class="card-header approver">Approver</div>
    <div class="card-body">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Signee</th>
                    <th>Status</th>
                    <th>Comment</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Agranata Octafha</td>
                    <td><span class="badge">APPROVED</span></td>
                    <td>-</td>
                    <td>24-11-2025 17:31</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Beny Irawan</td>
                    <td><span class="badge">APPROVED</span></td>
                    <td>-</td>
                    <td>25-11-2025 09:15</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- RECIPIENT -->
<div class="card">
    <div class="card-header recipient">Recipient</div>
    <div class="card-body">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Recipient</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Internal Audit Officer</td></tr>
                <tr><td>2</td><td>Destya Anggraini</td></tr>
                <tr><td>3</td><td>Alvionita Yeremia</td></tr>
            </tbody>
        </table>
    </div>
</div>

<!-- APPROVAL HISTORY -->
<div class="card">
    <div class="card-header history">Approval History</div>
    <div class="card-body">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Signee</th>
                    <th>Status</th>
                    <th>Comment</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center">No records to display.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>