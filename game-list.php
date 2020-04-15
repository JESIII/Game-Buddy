<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Game Buddy</title>
        <script src="https://unpkg.com/react@16.7.0/umd/react.production.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
        <link href="./styles/game-cards.css" rel="stylesheet">
        <link href="./styles/rating.css" rel="stylesheet">
        <link href="./main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        require 'components/navbar.php';
        ?>
        <!-- Main Body -->
        <div class="form-group">
            <label for="sortSelect">Sort</label>
            <select class="form-control" id="sortSelect" onChange="sortGames()">
                <option selected="">Default</option>
                <option value="1">Newest</option>
                <option value="2">Oldest</option>
                <option value="3">Name</option>
                <option value="4">Rating</option>
            </select>
          </div>
          <div class="form-group" id="filteredBy" onChange="sortGames()">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                <label class="custom-control-label" for="customCheck1">None</label>
              </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2" disabled="">
              <label class="custom-control-label" for="customCheck2">PC</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3" disabled="">
              <label class="custom-control-label" for="customCheck3">Xbox One</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck4" disabled="">
                <label class="custom-control-label" for="customCheck4">PS4</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck5" disabled="">
                <label class="custom-control-label" for="customCheck5">Switch</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck6" disabled="">
                <label class="custom-control-label" for="customCheck6">MacOS</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck7" disabled="">
                <label class="custom-control-label" for="customCheck7">Linux</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck8" disabled="">
                <label class="custom-control-label" for="customCheck8">iOS</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck9" disabled="">
                <label class="custom-control-label" for="customCheck9">Android</label>
            </div>
          </div>
        <div id="game-card-list"></div>
        <script src="./scripts/game-cards.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
