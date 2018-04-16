<?php /* Smarty version 2.6.26, created on 2014-11-17 19:47:30
         compiled from success.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My League Stats:: Welcome</title>

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

   <h1><?php echo $this->_tpl_vars['userLoggedIn']->getName(); ?>
</h1>
   <h3>User Id: <?php echo $this->_tpl_vars['userLoggedIn']->getUserID(); ?>
</h3>
   <ul class="editmenu">
      <li><a href="edituser.php?u_id=<?php echo $this->_tpl_vars['userLoggedIn']->getUserID(); ?>
">Edit User Info</a></li>
   </ul>
   <div class="clear"></div>

   <div class="leaguelist">
   	<p class="successpagebuttons"><a href="insertleague.php?u_id=<?php echo $this->_tpl_vars['userLoggedIn']->getUserID(); ?>
" class="pure-button pure-button-primary">Add a League</a>
   	<a href="leagues.php" class="pure-button pure-button-primary">Manage Leagues</a></p>
   
   	<h2>My Leagues</h2>
   	
   	<ul>
   		<?php $_from = $this->_tpl_vars['userLeagues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['league']):
?>
         	<li><a href="league.php?l_id=<?php echo $this->_tpl_vars['league']->getLeagueID(); ?>
"><?php echo $this->_tpl_vars['league']->getName(); ?>
</a></li>
   		<?php endforeach; else: ?>
   			<p class="errormsg">You do not have any leagues yet. Please add a league using the "add a league" link abov.</p>
   		<?php endif; unset($_from); ?>
   	</ul>
   
  		
   </div>
   
   <div class="teamlist">
  
   	<p class="successpagebuttons"><a href="insertteam.php?u_id=<?php echo $this->_tpl_vars['userLoggedIn']->getUserID(); ?>
" class="pure-button pure-button-primary">Add a Team</a>
   	<a href="teams.php" class="pure-button pure-button-primary">Manage Teams</a></p>
   	
   	<h2>My Teams</h2>
   	
   	<p>Note: in order to be able to use this web site, you need to have a minimum of two teams in the database.</p>
   	
   	<ul>
   		<?php $_from = $this->_tpl_vars['userTeams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['team']):
?>
        		<li><a href="team.php?t_id=<?php echo $this->_tpl_vars['team']->getTeamID(); ?>
"><?php echo $this->_tpl_vars['team']->getName(); ?>
</a></li>
   		<?php endforeach; else: ?>
   			<p class="errormsg">You do not have any teams yet. Please add a team using the "add a team" link above.</p>
   		<?php endif; unset($_from); ?>
   	</ul>
   	
	</div>
   
   <div class="clear"></div>
   
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