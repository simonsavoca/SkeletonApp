<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <?
        $attributes = array(
            'class' => 'navbar-nav',
        );

        $list = array(
            'menu' => array(
                'li_attributes' => array('class' =>'nav-item'),
                'contents' => anchor('#', '<i class="fas fa-bars"></i>', array('class' => 'nav-link', 'data-widget' => 'pushmenu')),
            ),
            'home' => array(
                'li_attributes' => array('class' =>'nav-item d-none d-sm-inline-block'),
                'contents' => anchor(base_url(), 'Home', array('class' => 'nav-link')),
            ),
            'contact' => array(
                'li_attributes' => array('class' =>'nav-item d-none d-sm-inline-block'),
                'contents' => anchor('index3.html', 'Contact', array('class' => 'nav-link')),
            )
        );
        echo ul($list, $attributes);
    ?>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <?
        $attributes = array(
            'class' => 'navbar-nav ml-auto',
        );
        $list = array(
            'menu' => array(
                'li_attributes' => array('class' =>'nav-item dropdown'),
                'contents' => anchor('#', '<i class="far fa-comments"></i><span class="badge badge-danger navbar-badge">3</span>', array('class' => 'nav-link', 'data-toggle' => 'dropdown')),
            ),

        );
        //echo ul($list, $attributes);

    ?>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <? echo anchor('#', '<i class="far fa-comments"></i><span class="badge badge-danger navbar-badge">3</span>', array('class' => 'nav-link', 'data-toggle' => 'dropdown')); ?>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <? echo img('assets/AdminLTE-3.0.0-beta.1/dist/img/user1-128x128.jpg', FALSE, array('alt' => 'User Avatar', 'class' => 'img-size-50 mr-3 img-circle')); ?>
              <div class="media-body">
                  <? echo heading('Brad Diesel<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>', 3, array ('class' => 'dropdown-item-title')); ?>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <? echo img('assets/AdminLTE-3.0.0-beta.1/dist/img/user8-128x128.jpg', FALSE, array('alt' => 'User Avatar', 'class' => 'img-size-50 mr-3 img-circle')); ?>
              <div class="media-body">
                <? echo heading('John Pierce<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>', 3, array ('class' => 'dropdown-item-title')); ?>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <? echo img('assets/AdminLTE-3.0.0-beta.1/dist/img/user3-128x128.jpg', FALSE, array('alt' => 'User Avatar', 'class' => 'img-size-50 mr-3 img-circle')); ?>
              <div class="media-body">
                <? echo heading('Nora Silvester<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>', 3, array ('class' => 'dropdown-item-title')); ?>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <? echo anchor('#', 'See All Messages', array('class' => 'dropdown-item dropdown-footer')); ?>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <? echo anchor('#', 'See All Notifications', array('class' => 'dropdown-item dropdown-footer')); ?>
        </div>
      </li>
      <li class="nav-item">
        <? echo anchor('#', '<i class="fas fa-th-large"></i>', array('class' => 'nav-link', 'data-widget' => 'control-sidebar', 'data-slide' => 'true')); ?>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
