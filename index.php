<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wreck-It Ralph</title>
    <link rel="stylesheet" type="text/css" href="css/hero.css">
    <style>
        /* Add futuristic CSS styles here */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #0a0a0a;
            color: #fff;
            margin: 0;
            padding: 0;
            text-transform: uppercase;
        }

        .wrapper {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 152, 0, 0.5);
        }

        header {
            text-align: center; /* Center the header */
        }

        .header-container {
            padding: 30px 0;
            background: linear-gradient(45deg, #ff9800, #ff5733); /* Gradient background */
            border-radius: 50%; /* Make it circular */
            display: inline-block; /* To constrain the size of the container to its content */
            border: 2px solid #ff9800; /* Add a border */
            padding: 20px; /* Add padding inside the circle */
        }

        header img {
            max-width: 100%;
            height: auto;
            border-radius: 50%; /* Make the image circular */
        }

        header h1 {
            font-size: 48px;
            margin-top: 10px;
            letter-spacing: 3px;
            color: #fff;
        }

        .content {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 152, 0, 0.3);
        }

        h2 {
            font-size: 28px;
            border-bottom: 2px solid #ff9800;
            padding-bottom: 10px;
            margin-top: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        ol, ul {
            font-size: 18px;
            margin-left: 20px;
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        img.big-image {
            width: 100%;
            max-width: 800px;
            height: auto;
            display: block;
            margin: 20px auto;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 152, 0, 0.3);
        }

        p.caption {
            text-align: center;
            color: #ff9800;
            font-style: italic;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #ff9800;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer li {
            font-size: 14px;
            margin-bottom: 10px;
        }

        footer a {
            text-decoration: none;
            color: #ff9800;
            transition: color 0.3s;
            font-weight: bold;
        }

        footer a:hover {
            color: #fff;
            text-shadow: 1px 1px 3px #ff9800;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="header-container">
            <img src="images/ralph1.jpg" alt="Wreck-It Ralph">
        </div>
        <h1>Wreck-It Ralph</h1>
    </header>
    <div class="content">
        <h2>About Ralph</h2>
        <p>An 8-bit video-game bad guy who travels the length of the arcade to prove that he's a good guy.</p>
        <h2>Ralph's characteristics</h2>
        <ol>
            <li>He's super cool</li>
            <li>He's treated as bad-ass</li>
            <li>He's friendly to glitchy-girl game characters</li>
        </ol>
        <img class="big-image" src="images/ralph3.jpg" alt="Ralph in action">
        <p class="caption">This is Ralph in action</p>
        <h2>Ralph's friends</h2>

        <ul>
            <li><a href="https://wreckitralph.fandom.com/wiki/Vanellope_von_Schweetz" target="_blank"
                   title="Visit Vanellope's page">Vanellope</a> from Wreck-it Ralph
            </li>
            <li><a href="URL_FOR_FIX_IT_FELIX_JR" target="_blank">Fix-It Felix, Jr.</a></li>
            <li><a href="URL_FOR_RANCIS_FLUGGERBUTTER" target="_blank">Rancis Fluggerbutter</a></li>
            <li><a href="URL_FOR_SERGEANT_CALHOUN" target="_blank">Sergeant Calhoun</a></li>
            <li><a href="URL_FOR_SHANK" target="_blank">Shank</a></li>
            <li><a href="URL_FOR_SORA" target="_blank">Sora. Sora is the main character of the Kingdom Hearts
                    series.</a></li>
            <li><a href="URL_FOR_SOUR_BILL" target="_blank">Sour Bill</a></li>
            <li><a href="URL_FOR_TAFFYTA_MUTTONFUDGE" target="_blank">Taffyta Muttonfudge</a></li>
        </ul>

    </div>
    <footer>
        <ul>
            <li>Made by <a href="https://www.facebook.com/abher.aguilar.96?mibextid=ZbWKwL" target="_blank"
                           title="View Abe's FB page">Armando Aguilar Jr.</a></li>
            <li>&copy; 2023</li>
        </ul>
    </footer>
</div>
</body>
</html>
