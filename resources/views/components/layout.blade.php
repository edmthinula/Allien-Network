<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allien Network</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Allien Network</h1>
            <a href="/areas">All Areas</a>
            <a href="/areas/create">Create New Area</a>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>