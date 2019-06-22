<nav id="sidebar">
    <div class="sidebar-header">
        <span class="title">Sistem Informasi Rumah Sakit</span>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="<?= site_url('home/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li>
            <a href="#admin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user"></i> Menu User</a>
            <ul class="collapse list-unstyled" id="admin">
                <li>
                    <a href="<?= site_url('user') ?>">> Data User</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?= site_url('') ?>"><i class="fas fa-book"></i> asd</a>
        </li>
    </ul>
    <p style="font-size:0.8em; padding:10px;">
        Copyright &copy; 2019 Naufal Rivaldi. All Rights Reserved.
    </p>
</nav>