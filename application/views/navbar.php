<!-- Navigation -->
<html>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item m-2">
                        <a class="nav-link" href="<?php echo site_url('home')?>">Home</a>
                    </li>
                    <li class="nav-item m-2 dropdown">
                        <a class="nav-link dropdown-toggle"id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true">
                            dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url('')?>">something</a>
                        </div>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>