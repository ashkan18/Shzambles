<div id="menu">
<ul>
    <li <?php if($selectedMenuItem == "login") echo "class=\"current_page_item\""; ?> >
        <?php echo link_to('Login', 'login/index'); ?>
    </li>
    <li <?php if($selectedMenuItem == "disks") echo "class=\"current_page_item\""; ?> >
        <?php echo link_to('Disks', 'login/disks'); ?>
    </li>
    <li <?php if($selectedMenuItem == "backup") echo "class=\"current_page_item\""; ?> >
        <?php echo link_to('Backup', 'login/backup'); ?>
    </li>
    <li <?php if($selectedMenuItem == "Music") echo "class=\"current_page_item\""; ?> >
        <?php echo link_to('Music', 'login/music'); ?>
    </li>
    <li <?php if($selectedMenuItem == "about") echo "class=\"current_page_item\""; ?> >
        <?php echo link_to('About', 'login/about'); ?>
    </li>
    <li <?php if($selectedMenuItem == "links") echo "class=\"current_page_item\""; ?> >
        <?php echo link_to('Links', 'login/links'); ?>
    </li>
    <li <?php if($selectedMenuItem == "backup") echo "class=\"current_page_item\""; ?> >
        <?php echo link_to('Logout', 'login/logout'); ?>
    </li>
</ul>
</div>
