<h2><a name="init"></a>Initiating a new Project</h2>
<div>
    <p>
        In order to use Magallanes we have to initialize a project. This is done with the <em>init</em> command. Similar to git this will create a <em>.mage</em> directory where all the configuration, environments, custom tasks, and logs are stored.
        <br /><br />
        Inside this directory there are a total of four directories:
        <ul>
            <li><strong><em>.mage</em>/config</strong> - the main <em>general.yml</em> configuration file is stored here.</li>
            <li><strong><em>.mage</em>/config/environments</strong> - the environments configuration files are here.</li>
            <li><strong><em>.mage</em>/logs</strong> - logs (if enabled) are saved there.</li>
            <li><strong><em>.mage</em>/tasks</strong> - and custom tasks are stored over here.</li>
        </ul>
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> init --name=<span class="command-string">"My fantastic app"</span> --email=<span class="command-string">"notifications@my.app"</span>
    </p>

    <br />

    <p>
        Right now the most important file is <em>.mage/confg/general.yml</em>. In there is stored the project name and notification email, and also if notification delivery and logging are enabled.
        The log files store everything Magallanes does, all commands and results, so if you need to debug something that's the place to start with.
        The <em>maxlogs</em> indicates how many logfiles are saved, when reached the older logs are deleted. These are quantity of files not days.
    </p>

    <div class="yaml">
        <ul>
            <li class="comment"># global settings</li>
            <li><span class="parameter">name:</span> My fantastic app</li>
            <li><span class="parameter">email:</span> notifications@my.app</li>
            <li><span class="parameter">notifications:</span> <span class="boolean">true</span></li>
            <li><span class="parameter">logging:</span> <span class="boolean">true</span></li>
            <li><span class="parameter">maxlogs:</span> <span class="boolean">30</span></li>
        </ul>
    </div>

    <br />

</div>