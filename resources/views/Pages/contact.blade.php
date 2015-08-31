<!DOCTYPE html>

<html>
    <head>

        <title>Page de Contact</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

   </head>

    <body>

        <div class="container">

            <div class="content">

                <div class="title">Page de Contact</div>
                <form>
                    <label for="sujet">Sujet</label><input id ="sujet" type ="text">
                    <label for="email">Email</label><input id ="email" type ="text">
                    <label for="message">Message</label><textarea id ="message"></textarea>
                    <button type ="submit">Envoyer le message </button>
                </form>

             </div>

        </div>

    </body>

</html>
