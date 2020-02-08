<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
        <a href="<?php echo $this->Url->build('/'); ?>">
            <i class="fa fa-home"></i> <span>Inicio</span>
        </a>
    </li>
    <li>
        <a href="<?php echo $this->Url->build(['controller' => 'posts', 'action' => 'index']); ?>">
            <i class="fa fa-th"></i> <span>Posts</span>
        </a>
    </li>
</ul>