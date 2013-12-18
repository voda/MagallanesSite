<h2><a name="install"></a>Installation &amp; Upgrade</h2>
<div>
    <p>
        In order to install and use Magallanes, you will need to meet the following requirements:
        <ul>
            <li><strong>Shell Access</strong> - Magallanes is a command line utility, therefore you will need access to a shell/terminal environment.</li>
            <li><strong>PHP 5.3</strong> - Yes, it's time to grow up. Make sure that the PHP binary is on your shell path.</li>
        </ul>

        The installation is very simple, just download the latest version and install it using it's own command. Also you can use composer and set Magallanes as a vendor on your project.
    </p>

    <br />

    <p class="bash">
        <span class="command-bash">wget</span> http://download.magephp.com/magallanes.latest.tar.gz -O magallanes.tar.gz<br />
        <span class="command-bash">tar</span> xfz magallanes.tar.gz
    </p>

    <br />

    <p class="bash">
        <span class="command-bash">cd</span> magallanes<br />
        <span class="command-mage">bin/mage</span> install --systemWide --installDir=<span class="command-string">/opt/magallanes</span>
    </p>

    <p>
        The <em>install</em> command will copy the downloaded version to the configured <em>--installDir</em>.
        If you want to make it available to all users, then you can perform a <em>--systemWide</em> installation,
        this will create a symbolic link in <em>/usr/bin/mage</em> to the installation's executable; you have to be root to perform a system wide install.
    </p>

    <p>
        Also, if you would like to take Magallanes with you, you can also compile into a <em>PHAR</em> your currnet install, with the compile command, which will create a <strong>mage.phar</strong> file. In order for this to work, you must set the <strong>phar.readonly</strong> <em>php.ini</em> variable to <strong>Off</strong>, at least on your <em>cli</em> configuration.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> compile<br />
        <span class="command-bash">./mage.phar</span> version
    </p>

</div>