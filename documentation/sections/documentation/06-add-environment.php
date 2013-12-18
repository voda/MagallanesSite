<h2><a name="add-environment"></a>Add an Environment</h2>
<div>
    <p>
        Now the fun begins. We have our project initiated so now is it's time to add an environment. An environment is to where we want to deploy our code and what to do with it.
        So an environment will store the configuration of to <u>where</u> to copy the application and <u>what to do</u> with it once deployed.
        <br />
        Also we can configure our environment to work with releases, imagine it as a rudimentary <em>versioning</em> of our deployments.
        <br />
        We will talk about <a href="#releases">releases</a> in a bit.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> add environment --name=<span class="command-string">"production"</span> --enableReleases
    </p>

    <br />

    <p>
        With that last command we have just created a new environment named <em>production</em>.
        <br />
        This will create the configuration file <strong>.mage/config/environments/production.yml</strong>. We must edit that file in order to configure the environment.
    </p>

    <br />

    <div class="yaml">
        <ul>
            <li class="comment"># production environment</li>

            <li><span class="parameter">deployment:</span>
                <ul>
                    <li><span class="parameter">user:</span> dummy</li>
                    <li><span class="parameter">from:</span> ./</li>
                    <li><span class="parameter">to:</span> /var/www/vhosts/example.com/www</li>
                    <li><span class="parameter">excludes:</span>
                        <ul>
                            <li><span class="parameter">-</span> app/cache/*</li>
                            <li><span class="parameter">-</span> web/bundles/*</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><span class="parameter">releases:</span>
                <ul>
                    <li><span class="parameter">enabled:</span> <span class="boolean">true</span></li>
                    <li><span class="parameter">max:</span> 10</li>
                    <li><span class="parameter">symlink:</span> current</li>
                    <li><span class="parameter">directory:</span> releases</li>
                </ul>
            </li>
            <li><span class="parameter">hosts:</span>
                <ul>
                    <li><span class="parameter">-</span> 172.16.0.101</li>
                    <li><span class="parameter">-</span> 172.16.0.102</li>
                    <li><span class="parameter">-</span> 172.16.0.201:2222</li>
                </ul>
            </li>
            <li><span class="parameter">tasks:</span>
                <ul>
                    <li><span class="parameter">pre-deploy:</span>
                        <ul>
                            <li><span class="parameter">-</span> scm/update</li>
                        </ul>
                    </li>
                    <li><span class="parameter">on-deploy:</span>
                        <ul>
                            <li><span class="parameter">-</span> symfony2/cache-warmup: {env: prod}</li>
                        </ul>
                    </li>
                    <li><span class="parameter">post-release:</span>
                        <ul>
                            <li><span class="parameter">-</span> purge-apc-cache</li>
                        </ul>
                    </li>
                    <li><span class="parameter">post-deploy:</span>
                        <ul>
                            <li><span class="parameter">-</span> purge-varnish-cache</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <br />

    <p>
        Also if you want to know which environments you have already configured, you can run the following command and it will display the existing environments.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> list environments
    </p>
</div>
