<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="" />
<meta name="description" content="" />
 
<title>weblog</title>
 
<?php echo
  html::style('media/stylesheets/stylesheets/print.css', array('media' => 'print')),
  html::style('media/stylesheets/screen.css', array('media' => 'screen')),
  html::style('media/stylesheets/ie.css', array('media' => 'screen')) ?>
 
<script type="text/javascript">
  // Base URL of the application
  var base_url = '<?php echo url::base() ?>';
</script>
<?php echo
  html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js')?>
 
</head>
<body class="blueprint two-column">
<div class="container">

 <div id="header">
   <h1>weblog</h1>
    <ul id="links">
      <li><a href="#" title="">login</a></li>
      <li><a href="#" title="">Impressum</a></li>
    </ul>
 </div>

   <div id="content">
  content
  </div>
    <div id="sidenav">
  sidenav
  </div>
  <div id="footer">
footer
  </div>
 
</div>
</body>
</html>