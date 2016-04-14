<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body>
  <div class="container">
   <div class="section-1">
    <div class="navbar">
      <ul>
        <li style="float:left" class="Logo"><jdoc:include type="modules" name="logo"/></li>
        <li><button class="Rectangle-5"><jdoc:include type="modules" name="button-1"/></button></li>
        <li><button><jdoc:include type="modules" name="button-2"/></button></li>
        <li><button><jdoc:include type="modules" name="button-3"/></button></li>
        <li><button><jdoc:include type="modules" name="button-4"/></button></li>
      </ul>
    </div>
    <div>
       <button class="Arrow"><jdoc:include type="modules" name="arrow"/></button>
    </div>
   </div>
  </div>
</body>
</html>
