<html>
<head>
    <title>Magallanes &mdash; A PHP Deployment Tool</title>
    <link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300" rel="stylesheet" type="text/css" />
    <link href="/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="page">
        <div id="menu">
            <div id="logo">
                <img src="/magallanes-logo.png" />
                <span id="title">Magallanes</span>
            </div>

            <h3>Documentation</h3>
            <ul class="menu">
                <li><a href="#overview">Overview</a></li>
                <li><a href="#install">Installation</a></li>
                <li><a href="#upgrade">Upgrade</a></li>
                <li><a href="#composer">Using composer</a></li>
                <li><a href="#init">Initiating a new Project</a></li>
                <li><a href="#add-environment">Add an Environment</a></li>
                <li><a href="#config-environment">Configuring an Environment</a></li>
                <li><a href="#deploy">Deployment</a></li>
                <li><a href="#releases">Working with Releases</a></li>
                <li><a href="#rollback">Rollback a Release</a></li>
                <li><a href="#stages">Stages</a></li>
            </ul>

            <h3>Built In Tasks</h3>
            <ul class="menu">
                <li><a href="#builtin-scm">SCM - Software Change Manager</a></li>
                <li><a href="#builtin-symfony2">Symfony 2</a></li>
                <li><a href="#builtin-magento">Magento</a></li>
                <li><a href="#builtin-composer">Composer</a></li>
            </ul>

            <h3>Cookbook</h3>
            <ul class="menu">
                <li><a href="#cookbook-custom-tasks">Custom Tasks</a></li>
                <li><a href="#cookbook-custom-commands">Custom Commands</a></li>
                <li><a href="#cookbook-per-host-config">Per Host Configuration</a></li>
                <li><a href="#cookbook-task-configuration">Task Configuration</a></li>
            </ul>

            <h3>Extras</h3>
            <ul class="menu">
                <li><a href="http://download.magephp.com/Mage-Cheat-Sheet-v1.x.pdf" target="_blank">Cheat Sheet (Color)</a></li>
                <li><a href="http://download.magephp.com/Mage-Cheat-Sheet-v1.x-PrintFriendly.pdf" target="_blank">Cheat Sheet (Print Friendly)</a></li>
                <li><a href="http://api.magephp.com/1.0" target="_blank">API</a></li>
                <li><a href="https://github.com/andres-montanez/Magallanes/" target="_blank">GitHub</a></li>
                <li><a href="http://twitter.com/MagePHP" target="_blank">@MagePHP</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="imageHeader"><img src="/magallanes-header.jpg" /></div>

            <!-- Documentation -->

            <h1>Documentation</h1>

            <?php include 'sections/documentation/01-overview.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/02-install.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/03-upgrade.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/04-composer.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/05-init.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/06-add-environment.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/07-config-environment.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/08-deploy.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/09-releases.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/10-rollback.php'; ?>

            <br /><br />

            <?php include 'sections/documentation/11-stages.php'; ?>

            <!-- Built In Tasks -->

            <br /><hr />

            <h1>Built In Tasks</h1>

            <?php include 'sections/builtin/01-scm.php'; ?>

            <br />

            <?php include 'sections/builtin/02-symfony2.php'; ?>

            <br />

            <?php include 'sections/builtin/03-magento.php'; ?>

            <br />

            <?php include 'sections/builtin/04-composer.php'; ?>

            <!-- Cookbook -->

            <br /><hr />

            <h1>Cookbook</h1>

            <?php include 'sections/cookbook/01-custom-tasks.php'; ?>

            <br />

            <?php include 'sections/cookbook/01-custom-commands.php'; ?>

            <br />

            <?php include 'sections/cookbook/02-per-host-configuration.php'; ?>

            <br />

            <?php include 'sections/cookbook/03-task-configuration.php'; ?>

            <br />

        </div>

        <div class="clear"></div>

        <div id="footer">
            Magallanes is an open source tool developed by <a target="_blank" href="http://andresmontanez.com">Andr&eacute;s Monta&ntilde;ez</a>, and currently maintained by <a target="_blank" href="https://github.com/eps90">Kuba Turek</a> and <a target="_blank" href="https://github.com/andres-montanez">Andr&eacute;s Monta&ntilde;ez</a> (among many other <a target="_blank" href="https://github.com/andres-montanez/Magallanes/contributors">contributors</a>) and completely written in <a target="_blank" href="http://php.net">PHP</a>.<br />
            Special thanks to my team mates in <a target="_blank" href="http://acilia.es">Acilia Internet</a> for they continued support, ideas, and challenges that made this tool come to be.
        </div>

    </div>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21854256-2', 'magephp.com');
  ga('send', 'pageview');

</script>
</body>
</html>
