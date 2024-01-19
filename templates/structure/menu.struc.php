<header class="p-2 <?php echo isset($_GET['page']) && $_GET['page'] !=='adminMod'? "mb-3" : "mb-0"; ?> border-bottom bg-dark" <?php echo isset($_GET['page']) && $_GET['page'] ==='adminMod'?  'style=" position: fixed; width:100% ;  z-index: 1000;"':'';?> >
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="./?page=accueil&layout=html" class="d-flex align-items-center m-1  link-light text-decoration-none">
                <span class="navbar-brand ">Escape Game</span>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="./?page=accueil&layout=html" class="nav-link px-2 link-<?php echo isset($_GET['page']) && $_GET['page']==='accueil'? 'primary' :'light'; ?>">Accueil</a>
                </li>
                <li>
                    <a href="./?page=ajouterQuestion&layout=html" class="nav-link px-2 link-<?php echo isset($_GET['page']) && $_GET['page']==='ajouterQuestion'? 'primary' :'light'; ?>">Ajouter</a>
                </li>
            </ul>
        </div>
    </div>
</header>
  