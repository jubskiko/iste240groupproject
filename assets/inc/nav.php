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
  <a href="<?php echo $path;?>./index.php"><img src="<?php echo $path;?>./assets/img/150x150.png" alt="Team Logo Image"></a>
  </div>
  <div>
    <button id="mobile-nav-hamburger">
      <img src="<?php echo $path;?>./assets/img/hamburger-menu.svg" alt="Mobile menu">
    </button>
  </div>
</div>

<nav class="nav" id="navigation-menu">

    <a href="<?php echo $path;?>./index.php"><img class="logo" src="<?php echo $path;?>./assets/img/150x150.png" alt="Team Logo Image"></a>

    <ol class="list">
        <li><a class="home" href="<?php echo $path;?>index.php"><span <?php  writeActiveClass('index'); ?> >Home</span></a></li>
        <li><a class="beginner" href="<?php echo $path;?>pages/gettingStarted.php"><span <?php  writeActiveClass('gettingStarted'); ?> >Getting Started</span></a></li>
        <li><a class="beginner" href="<?php echo $path;?>pages/commands.php"><span <?php  writeActiveClass('commands'); ?> >Commands</span></a></li>
        <li><a class="beginner" href="<?php echo $path;?>pages/userManagement.php"><span <?php  writeActiveClass('userManagement'); ?> >User Management</span></a></li>
        <li><a class="beginner" href="<?php echo $path;?>pages/fileManagement.php"><span <?php  writeActiveClass('fileManagement'); ?> >File Management</span></a></li>
        <li><a class="intermeadiate" href="<?php echo $path;?>pages/processManagement.php"><span <?php  writeActiveClass('processManagement'); ?> >Process Management</span></a></li>
        <li><a class="intermeadiate" href="<?php echo $path;?>pages/networking.php"><span <?php  writeActiveClass('networking'); ?> >Networking</span></a></li>
        <li><a class="intermeadiate" href="<?php echo $path;?>pages/systemMaintenance.php"><span <?php  writeActiveClass('systemMaintenance'); ?> >System Maintenance</span></a></li>
        <li><a class="advanced" href="<?php echo $path;?>pages/shellScripting.php"><span <?php  writeActiveClass('shellScripting'); ?> >Shell Scripting</span></a></li>
        <li><a class="advanced" href="<?php echo $path;?>pages/advancedTopics.php"><span <?php  writeActiveClass('advancedTopics'); ?> >Advanced Topics</span></a></li>
        <li><a class="advanced" href="<?php echo $path;?>pages/quiz.php"><span <?php  writeActiveClass('quiz'); ?> >Quiz!</span></a></li>
    </ol>

</nav>