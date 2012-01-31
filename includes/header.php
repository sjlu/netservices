<?php
   $info = pathinfo($_SERVER['PHP_SELF']);
   $filename = basename($_SERVER['PHP_SELF'], '.' . $info['extension']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
   <?php if (file_exists('resources/css/' . $filename . '.css')): ?>
   <link rel="stylesheet" type="text/css" media="screen" href="resources/css/<?= $filename ?>.css" />
   <?php else: ?>
   <link rel="stylesheet" type="text/css" media="screen" href="resources/css/style.css" />
   <?php endif ?>

   <link rel="stylesheet" href="resources/css/validationEngine.jquery.css" type="text/css" />

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
   <script type="text/javascript" src="resources/js/jquery.form.js"></script>
   <script type="text/javascript" src="resources/js/forms.call.js"></script>
   <script type="text/javascript" src="resources/js/forms.message.js"></script>
   <script type="text/javascript" src="resources/js/background-scroller.js"></script>
   <script type="text/javascript" src="resources/js/png-fix.js"></script>
   <script type="text/javascript">
      DD_belatedPNG.fix('.png-fix');
   </script>
   <script type="text/javascript" src="resources/js/jquery.validationEngine-en.js" charset="utf-8"></script>
   <script type="text/javascript" src="resources/js/jquery.validationEngine.js" charset="utf-8"></script>

   <?php if (file_exists('' . $filename . '.meta')) include '' . $filename . '.meta'; else { ?>
   <title>TheNetServices.com</title>
   <meta name="author" content="NetServices, LLC" />
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <?php } ?>
</head>
