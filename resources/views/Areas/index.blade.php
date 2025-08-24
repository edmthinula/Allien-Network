<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Network | Home</title>
</head>

<body>
    <h2>
        Currently available Areas
    </h2>
    <p>
        {{ $greeting }}
    </p>
    <ul>
        <li>
            <a href="areas/{{ $areas[0]["id"] }}">
                {{ $areas[0]["name"] }}
            </a>
        </li>
                <li>
            <a href="areas/{{ $areas[1]["id"] }}">
                {{ $areas[1]["name"] }}
            </a>
        </li>
                <li>
            <a href="areas/{{ $areas[2]["id"] }}">
                {{ $areas[2]["name"] }}
            </a>
        </li>
    </ul>
</body>

</html>