<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><?= lnxmcp()->getResource("def"); ?></a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php foreach (lnxmcp()->getResource("topmenu") as $menulabel => $menuval) : ?>
                    <?php if (is_array($menuval)) : ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $menulabel; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php foreach ($menuval as $smlabel => $smval) : ?>
                            <li><a href="<?= $smval; ?>"><?= $smlabel; ?> </a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php else : ?>
                    <li><a href="<?= $menuval; ?>"><?= $menulabel; ?> </a></li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>