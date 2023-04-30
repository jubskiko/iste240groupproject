<?php
function writeActiveClass($currentLink) {
  // if $activePage is not set when the lef-nav.php is being included, default to 'index'
  global $activePage;

  // The current page is the active page, then add "active" css to make it highlighted in the left nav
  if ($activePage == $currentLink) {
      echo 'class="active"';
  }
}
?>

<!-- for mobile navigation -->
<div class="mobile-nav-bar">
  <div class="mobile-logo">
    <img src="<?php echo $path;?>./assets/img/150x150.png">
  </div>
  <div>
    <button id="mobile-nav-hamburger">
      <img src="<?php echo $path;?>./assets/img/hamburger-menu.svg">
    </button>
  </div>
</div>

<nav class="nav" id="navigation-menu">

    <a href="<?php echo $path;?>./index.php"><img class="logo" src="<?php echo $path;?>./assets/img/150x150.png" alt="Team Logo Image"></a>

    <ol class="list">
        <li><a class="beginner" href="<?php echo $path;?>pages/gettingStarted.php" <?php  writeActiveClass('gettingStarted'); ?> >Getting Started</a></li>
        <li><a class="beginner" href="<?php echo $path;?>pages/commands.php" <?php  writeActiveClass('commands'); ?> >Commands</a></li>
        <li><a class="beginner" href="<?php echo $path;?>pages/userManagement.php" <?php  writeActiveClass('userManagement'); ?> >User Management</a></li>
        <li><a class="beginner" href="<?php echo $path;?>pages/fileManagement.php" <?php  writeActiveClass('fileManagement'); ?> >File Management</a></li>
        <li><a class="intermeadiate" href="<?php echo $path;?>pages/processManagement.php" <?php  writeActiveClass('processManagement'); ?> >Process Management</a></li>
        <li><a class="intermeadiate" href="<?php echo $path;?>pages/networking.php" <?php  writeActiveClass('networking'); ?> >Networking</a></li>
        <li><a class="intermeadiate" href="<?php echo $path;?>pages/systemMaintenance.php" <?php  writeActiveClass('systemMaintenance'); ?> >System Maintenance</a></li>
        <li><a class="advanced" href="<?php echo $path;?>pages/shellScripting.php" <?php  writeActiveClass('shellScripting'); ?> >Shell Scripting</a></li>
        <li><a class="advanced" href="<?php echo $path;?>pages/advancedTopics.php" <?php  writeActiveClass('advancedTopics'); ?> >Advanced Topics</a></li>
        <li><a class="advanced" href="<?php echo $path;?>pages/quiz.php" <?php  writeActiveClass('quiz'); ?> >Quiz!</a></li>
    </ol>

</nav>