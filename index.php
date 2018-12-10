<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title> Formulaire </title>
</head>

<body>

    <section id="contact">
        <div class="section-content">
            <h1 class="section-header"> Entre <span class="content-header wow fadeIn " data-wow-delay="0.2s"
                    data-wow-duration="2s"> tes informations</span></h1>
            <h3>Bienvenue</h3>
    </div>
        <div class="contact-section">
            <div class="container">
                <form action="user.php" method="POST">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="name">Ton nom</label>
                            <input type="text "  class="form-control" name="nom" placeholder=" Entre ton nom" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Ton prénom</label>
                            <input type="text" class="form-control" name="prenom" placeholder=" Entre ton prénom" required>
                        </div>
                        <div class="form-group">
                            <label for="tEmail">Addresse email</label>
                            <input type="email" class="form-control" name="email" placeholder=" Entre ton email" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Numéro mobile</label>
                            <input type="tel" class="form-control" name="telephone" placeholder=" Entre ton numéro de mobile" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="pays">Dans quel pays habitez-vous ?</label><br />
                            <br>
                            <select name="pays" id="pays">
                                <option value="1">Belgique</option>
                                <option value="2">France</option>
                                <option value="3">Luxembourg</option>
                                <option value="4">Allemagne</option>

                            </select>
                        </div>
                    <div>

          <div class="form-check">
          <label for="genre" >Genre</label><br>
            <input class="form-check-input" type="radio" name="genre" id="genre1" value="1" checked>
            <label class="form-check-label" for="genre1">homme</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="genre" id="genre2" value="2">
            <label class="form-check-label" for="genre2">femme</label>
          </div>                            
                </div>
                        <div>
                            <form action="php_checkbox.php" required><br>
                                <label class="heading">Selectionne ton sujet:</label><br />
                                <input type="checkbox" name="checklist[]" value="1"><label> wouaw quel sujet</label>
                                <input type="checkbox" name="checklist[]" value="2"><label> sujet sympa</label>
                                <input type="checkbox" name="checklist[]" value="3"><label> beau sujet</label>
                                <input type="checkbox" name="checklist[]" value="4"><label> t'as encore beaucoup de sujet</label>
                                <input type="checkbox" name="checklist[]" value="5"><label> jamais entendu parler de ce sujet</label>
                        </div>
                    </div>
                    <!--<div>
			  				<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Envoyer message</button>
						</div>-->
            </div>
            
        </div>


        <div class="contact-section">
            <div class="container">
                
                    <div class="col-md-12 form-line">
                        
                        <div class="form-group">
                        <label for="description"> Message</label>
                            <textarea class="form-control" name="message" placeholder="Entre ton message"></textarea>
                            <input type="submit" value="Valider" />
                        </div>
                    </div>
            </div>

        </div>
        </form>
        </div>

    </section>


    <!--
<form action="user.php" method="GET">
    <p>
        Inscrivez Nom <input  type="text" name="nom" />

    </p>
    <p>
        Prénom <input type="text" name="prenom" />
        
    </p>
    <p>
        Email <input type="mail" name="mail" />
    </p>
    <p>
       <label for="commentaire">Commentaire</label><br />
       <textarea name="commentaire" id="commentaire"></textarea>
   </p>
   <select name="genre">
    <option value="homme">homme</option>
    <option value="femme">femme</option>
    <input type="submit" value="Valider" />
</select>
</form>
-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>

</html>




