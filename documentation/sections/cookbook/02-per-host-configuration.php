<h2><a name="cookbook-per-host-config"></a>Per Host Configuration</h2>
<div>
    <p>
    Sometimes you may want to change a little bit of configuration for a particular host, perhaps the deploy path, the user, or change the tasks to be executed, etc. Well, in Magallanes you can have a configuration per host, and this is how:
    </p>

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
                    <li><span class="parameter"></span> 172.16.0.102:
                        <ul>
                            <li><span class="parameter">deployment:</span>
                                <ul>
                                    <li><span class="parameter">to:</span> /home/sites/example.com/www</li>
                                    <li><span class="parameter">user:</span> legacy</li>
                                </ul>
                            </li>
                            <li><span class="parameter">releases:</span>
                                <ul>
                                    <li><span class="parameter">max:</span> 5</li>
                                    <li><span class="parameter">symlink:</span> httpdocs</li>
                                </ul>
                            </li>
                            <li><span class="parameter">tasks:</span>
                                <ul>
                                    <li><span class="parameter">on-deploy:</span>
                                        <ul>
                                            <li><span class="parameter">-</span> custom-cache-warmup</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
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
    As you can see, for the host <em>172.16.0.102</em> we have overwritten some configurations. For example, the user and directory for the deployment are different; also the release symlink and maximum stored releases are also different. Finally the on-deploy tasks is different; the tasks are completely overwritten, these are not added to the others, and only the <em>on-deploy</em> and <em>post-release</em> stages can be overwritten.
    </p>
</div>
