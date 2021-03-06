<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wartburgia vrijwilligers</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" />

        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" />
    </head>
    <body>
        <div class="container-fluid" style="height: 10em;text-align: center;background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/wb-vrijwilligers-header.png');background-position: 50% 50%;">
        </div>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Vrijwilligers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="functie.php">Functies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Informatie</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <p>Neem direct zelf contact op via de gegevens hiernaast, of vul het formulier hieronder in, dan neemt
                        iemand van het bestuur zo snel mogelijk contact met je op.</p>
                    <form>
                        <div class="form-group">
                            <label for="input-name">Naam</label>
                            <input type="text" class="form-control" id="input-name" placeholder="Volledige naam">
                        </div>
                        <div class="form-group">
                            <label for="input-email">E-mailadres</label>
                            <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="email@domein.nl">
                            <small id="emailHelp" class="form-text text-muted">Je e-mailadres wordt alleen gebruikt om je een bericht terug te kunnen sturen.</small>
                        </div>
                        <div class="form-group">
                            <label for="input-phone">Telefoonnummer</label>
                            <input type="text" class="form-control" id="input-phone" aria-describedby="phoneHelp" placeholder="06-12345678">
                            <small id="phoneHelp" class-"form-text text-muted">Je telefoonnummer wordt alleen gebruikt om contact met je te kunnen opnemen over je verstuurde bericht.</small>
                        </div>
                        <div class="form-group">
                            <label for="input-subject">Onderwerp</label>
                            <select class="form-control" id="input-subject">
                                <option>Functie verenigingszaken bestuurslid</option>
                                <option>Functie 2</option>
                                <option>Andere vraag</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-description">Omschrijving</label>
                            <textarea class="form-control" id="input-description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Versturen</button>
                    </form>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
        

        <div class="container-fluid footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <strong>&copy; Wartburgia 2017</strong><br/><br/>
                        <a href="functie.php">Vacatures</a><br/>
                        <a href="index.php">Informatie</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>