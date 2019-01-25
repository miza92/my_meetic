<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="./css/styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
<script src="./js/jquery1.js"></script>
<style>
      #toggle{height:auto; background:#eee; border:1px solid #900; margin:1em;text-align:center}
      #toggle p{text-align:center;padding:0}
</style>
</head>
<p><a href="#" class="btn btn-primary btn-md active" id="edit_account">Tweeter</a></p>
<script>
       jQuery(document).ready(function()
       {
          // On cache la zone de texte
          jQuery('#edit').hide();
          // toggle() lorsque le lien avec l'ID #edit_account est cliqué
          jQuery('a#edit_account').click(function()
         {
             jQuery('#edit').show(400);
             return false;
          });
       });
</script>
<div id="edit">
<div class="container">
<form class="form-horizontal" role="form" method="POST" action="">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2>Write a new Tweet</h2>
<hr>
<textarea name="commentaire" minlength="2" maxlength="140" rows="4" cols="50"></textarea>
<br />
<input type="hidden" name="invisible" value="140" /><br />
<input type="submit" class="btn btn-primary btn-sm active" name="soumettre" value="OK" />
<input type="reset" class="btn btn-primary btn-sm active" name="effacer" value="wipe off" />
<input type="button" class="btn btn-primary btn-sm active" name="action" value="Cancel" /></div>
</div>
<div class="row">
<div class="col-md-3 field-label-responsive">
</div>
</div>
</form>
</div>
</div>
</html>