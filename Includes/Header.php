<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mozziconacci robert-teyssier</title>
    <link rel="stylesheet" href="/assets/style.css">
  </head>
  <body>
    <header>
        <style>
            header{
                font-size: 28px;

                > div {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: var(--margin-size);
                    border-bottom: 2px solid var(--main);

                    > a.gauche h1 {
                        font-family: 'picnic', serif;
                    }
                }

                > nav {
                    display: flex;
                    justify-content: space-between;
                    padding: calc(var(--margin-size)/2) var(--margin-size);
                    border-bottom: 2px solid var(--main);

                    > a {
                        text-decoration: none;
                        color: var(--main);
                    }
                }
            }
        </style>
        <div>
            <a class="gauche" href="/"><h1>MRT</h1></a>
            <a class="droite" href="/"><h1>mozziconacci robert-teyssier</h1></a>
        </div>
        <nav>
            <a href="texte.php">texte</a>
            <a href="video.php">vidéo</a>
            <a href="publication.php">publication</a>
            <a href="#">portfolio</a>
            <a href="biographie.php">biographie</a>
        </nav>
    </header>