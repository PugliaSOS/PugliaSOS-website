<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="navbar">
      <ul>
        <li><jdoc:include type="modules" name="logo"/></li>
        <li><button><jdoc:include type="modules" name="button-1"/></button></li>
      </ul>
    </div>
  </div>
</body>
</html>
