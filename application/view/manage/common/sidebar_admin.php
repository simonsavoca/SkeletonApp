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
            'contents' => anchor('index3.html', 'Home', array('class' => 'nav-link')),
        ),
        'contact' => array(
            'li_attributes' => array('class' =>'nav-item d-none d-sm-inline-block'),
            'contents' => anchor('index3.html', 'Contact', array('class' => 'nav-link')),
        )
    );
    //echo ul($list, $attributes);
?>
          <li class="nav-item has-treeview menu-open">
            <? echo anchor('#','<i class="nav-icon fas fa-cog"></i><p>Administration<i class="right fas fa-angle-left"></i></p>',array('class' => 'nav-link active')); ?>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <? echo anchor(base_url('manage/users'), '<i class="fas fa-users nav-icon"></i><p>Users</p>', array('class' => 'nav-link')); ?>
              </li>
              <li class="nav-item">
                <? echo anchor(base_url('manage/events'), '<i class="far fa-calendar-alt nav-icon"></i><p>Events</p>', array('class' => 'nav-link')); ?>
              </li>
              <li class="nav-item">
                <? echo anchor(base_url('manage/photos'), '<i class="far fa-images nav-icon"></i><p>Photos</p>', array('class' => 'nav-link')); ?>
              </li>
            </ul>
          </li>
