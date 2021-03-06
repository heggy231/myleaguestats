<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My League Stats :: League</title>

<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

<div class="wrapper">
{if isset($userLoggedIn)}
	{include file='headerloggedin.tpl'}
{else}
	{include file='header.tpl'}
{/if}

<div class="content">

<div class="primary">
   
   <ul class="breadcrumb">
      <li><a href="index.php">Home  &#8594;</a></li>
      <li><a href="user.php?u_id={$league->getUserID()}">{$league->getName()}  &#8594;</a></li>
      <li>{$league->getName()}</li>
   </ul>
   
   <div class="clear"></div>
   
   <h2>{$league->getName()}</h2>  

   <h3>Seasons</h3>

   <ul>
   {foreach item=season from=$leagueSeasons key=k}
         <li><a href="season.php?s_id={$season->getSeasonID()}">{$season->getName()}</a></li>
   {/foreach}
   </ul>
   
</div>

<div class="secondary">
{if $user_id neq ''}
	{include file='navigationloggedin.tpl'}
{else}
	{include file='navigation.tpl'}
{/if}

{include file='promo.tpl'}

</div>

</div>

{include file='footer.tpl'}

</div>

<!--analytics code-->
{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30483345-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{/literal}

</body>
</html>