<?php /* Smarty version 2.6.26, created on 2014-10-15 23:54:50
         compiled from league.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My League Stats::League</title>

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/forms-nr-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/buttons-min.css">

</head>

<body>

<div class="wrapper">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'headerloggedin.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="content">

<div class="primary">

<ul class="breadcrumb">
      <li><a href="index.php"><?php echo $this->_tpl_vars['userLoggedIn']->getName(); ?>
  &#8594;</a></li>
      <li><?php echo $this->_tpl_vars['league']->getName(); ?>
</li>
   </ul>
   
   <div class="clear"></div>

<h1><?php echo $this->_tpl_vars['league']->getName(); ?>
</h1>
<h3>League ID: <?php echo $this->_tpl_vars['league']->getLeagueID(); ?>
</h3>

<ul class="editmenu">
	<li><a href="editleague.php?u_id=<?php echo $this->_tpl_vars['userLoggedIn']->getUserID(); ?>
&&l_id=<?php echo $this->_tpl_vars['league']->getLeagueID(); ?>
">Edit</a></li>
</ul>

<h2>Seasons</h2>

   <ul>
   <?php $_from = $this->_tpl_vars['league_seasons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['season']):
?>
         <li><a href="season.php?s_id=<?php echo $this->_tpl_vars['season']->getSeasonID(); ?>
"><?php echo $this->_tpl_vars['season']->getName(); ?>
</a></li>
   <?php endforeach; else: ?>
   		<p class="errormsg">You do not have any seasons yet. Please add a season using the "add a season" link below.</p>
   <?php endif; unset($_from); ?>
   </ul>
   
   <p class="form-buttons"><a href="insertseason.php?u_id=<?php echo $this->_tpl_vars['userLoggedIn']->getUserID(); ?>
&&l_id=<?php echo $this->_tpl_vars['league']->getLeagueID(); ?>
" class="pure-button pure-button-primary">Add a Season</a></p>

</div>

<div class="secondary">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'navigationloggedin.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'promo.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>

<!--analytics code-->
<?php echo '
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-30483345-1\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
'; ?>


</body>
</html>