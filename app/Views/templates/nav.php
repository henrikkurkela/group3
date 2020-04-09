<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"> StonkHub</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php
      foreach ($navItems as $navLink => $navItem){
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="'.base_url("/".$navLink).'">'.$navItem.'</a>';
        echo '</li>';
      }
      if($balance >= 0){
        echo '<li class="nav-item">';
        echo '<a class="nav-link text-success" href="'.base_url("/wallet").'">Balance: '.$balance.'</a>';
        echo '</li>';
        echo '<li class="nav-item">';
        echo '<form action="'.base_url("/account/logout").'" method="post" accept-charset="utf-8">';
        echo '<a class="nav-link" href="#" onclick="this.parentNode.submit()">Log out</a>';
        echo '</form>';
        echo '</li>';
      }
      ?>        
        </ul>
    </div>
</nav>