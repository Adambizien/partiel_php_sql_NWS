<?php

?>
<div class="container">

    <div class="container-fluid text-center">
        <label for="tri">Trier par pourcentage :</label>
    </div>
    
    <div class="container-fluid text-center col-4">
        <form class="d-flex mx-auto" method="post" action="#">
            
            <select class="form-control" name="tri" id="tri">
                <option value="croissant" <?php echo isset($_POST['tri']) && $_POST['tri'] ==='croissant' ? 'selected' : '';  ?>>Croissant</option>
                <option value="decroissant" <?php echo isset($_POST['tri']) && $_POST['tri'] ==='decroissant' ? 'selected' : '';  ?>>Décroissant</option>
            </select>
            <button class="btn btn-outline-success" type="submit">Trier</button>
        </form>
    </div>
</div>
<?php
fromInc('accueil');

