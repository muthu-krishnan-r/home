<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Learning Portal</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #0f172a;
    color: #fff;
}

/* Sidebar */
.sidebar {
    width: 250px;
    height: 100vh;
    position: fixed;
    background: #111827;
    padding: 20px;
}

.sidebar h2 {
    color: #38bdf8;
}

.sidebar a {
    display: block;
    color: #cbd5f5;
    padding: 10px;
    text-decoration: none;
    border-radius: 6px;
    margin-bottom: 5px;
}

.sidebar a:hover {
    background: #1f2937;
}

/* Main */
.main {
    margin-left: 260px;
    padding: 20px;
}

.header {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Cards */
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.card {
    background: #1e293b;
    padding: 20px;
    border-radius: 12px;
    transition: 0.3s;
    cursor: pointer;
}

.card:hover {
    transform: scale(1.05);
    background: #334155;
}

.card h3 {
    margin: 0;
    color: #38bdf8;
}

.card p {
    font-size: 14px;
    color: #cbd5f5;
}
</style>

</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>📊 Portal</h2>

    <a href="#">Dashboard</a>

    <h4>Observability</h4>
    <a href="pages/observability/dynatrace/day1.php">Dynatrace</a>
    <a href="pages/observability/zabbix/day1.php">Zabbix</a>
    <a href="pages/observability/grafana/day1.php">Grafana</a>

    <h4>Cloud</h4>
    <a href="pages/cloud/gcp/day1.php">GCP</a>
    <a href="pages/cloud/aws/day1.php">AWS</a>
    <a href="pages/cloud/azure/day1.php">Azure</a>
    <a href="pages/cloud/oci/day1.php">OCI</a>

    <h4>Database</h4>
    <a href="pages/database/mysql/day1.php">MySQL</a>
    <a href="pages/database/mssql/day1.php">MSSQL</a>
    <a href="pages/database/oracle/day1.php">Oracle</a>
    <a href="pages/database/psql/day1.php">PostgreSQL</a>

    <h4>Scripts</h4>
    <a href="#">HTML/JS/CSS/PHP</a>
    <a href="#">Shell</a>
    <a href="#">Python</a>
    <a href="#">PowerShell</a>
    <a href="#">Selenium</a>
</div>

<!-- Main Content -->
<div class="main">

    <div class="header">🚀 Observability Learning Dashboard</div>

    <div class="grid">

        <div class="card" onclick="location.href='pages/observability/zabbix/day1.php'">
            <h3>Zabbix</h3>
            <p>Monitoring, Scripts, Automation</p>
        </div>

        <div class="card" onclick="location.href='pages/observability/dynatrace/day1.php'">
            <h3>Dynatrace</h3>
            <p>APM, AI Monitoring</p>
        </div>

        <div class="card" onclick="location.href='pages/observability/grafana/day1.php'">
            <h3>Grafana</h3>
            <p>Dashboards, Metrics</p>
        </div>

        <div class="card" onclick="location.href='pages/cloud/aws/day1.php'">
            <h3>AWS</h3>
            <p>Cloud Monitoring</p>
        </div>

        <div class="card" onclick="location.href='pages/cloud/gcp/day1.php'">
            <h3>GCP</h3>
            <p>Cloud Services</p>
        </div>

        <div class="card" onclick="location.href='pages/database/mysql/day1.php'">
            <h3>MySQL</h3>
            <p>DB Monitoring</p>
        </div>

        <div class="card" onclick="location.href='pages/scripts/python/'">
            <h3>Python</h3>
            <p>Automation Scripts</p>
        </div>

        <div class="card" onclick="location.href='pages/scripts/shell/'">
            <h3>Shell</h3>
            <p>Linux Scripts</p>
        </div>

    </div>

</div>

</body>
</html>