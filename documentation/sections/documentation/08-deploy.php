<h2><a name="deploy"></a>Deployment</h2>
<div>
    <p>
        Deployment is the core functionality of Magallanes, so it should be the most simple thing to do.
    </p>
    <p class="bash">
        <span class="command-mage">mage</span> deploy to:<span class="command-string">production</span>
    </p>

    <p>
        And that's it! You just have to say to what environment to want to deploy to, and Magallanes does the rest, based on the environment's configuration of course.
    </p>

    <p>
        Behind that command Magallanes performs an rsync between the local files and the remote servers. This means that only the needed files will be synced, but if you use releases (which is recommended) all the files will be synced again, so this may be a little inefficient, so Magallanes realizes that and uses another strategy, creates a tar.gz file and only copies that, which is faster than rsync.
    </p>

    <p>
        You can choose between both strategies by configuring it in the environment configuration, with the <strong>strategy</strong> parameter, which currently takes four options: <em>rsync</em>, <em>targz</em>, <em>git-rebase</em>, or <em>disabled</em>:
    </p>

    <div class="yaml">
        <ul>
            <li><span class="parameter">deployment:</span>
                <ul>
                    <li><span class="parameter">strategy:</span> rsync</li>
                </ul>
            </li>
        </ul>
    </div>

    <br /><br />

    <div class="yaml">
        <ul>
            <li><span class="parameter">deployment:</span>
                <ul>
                    <li><span class="parameter">strategy:</span> targz</li>
                </ul>
            </li>
        </ul>
    </div>

    <br /><br />

    <div class="yaml">
        <ul>
            <li><span class="parameter">deployment:</span>
                <ul>
                    <li><span class="parameter">strategy:</span> git-rebase</li>
                </ul>
            </li>
        </ul>
    </div>

    <br /><br />

    <div class="yaml">
        <ul>
            <li><span class="parameter">deployment:</span>
                <ul>
                    <li><span class="parameter">strategy:</span> disabled</li>
                </ul>
            </li>
        </ul>
    </div>

    <p>
        By default it is not configured, so Magallanes chooses <strong>targz</strong> over <strong>rsync</strong> when using releases. But you can play with the configuration and test which works better for you.
    </p>
    <p>
        The <strong>disabled</strong> strategy doesn't copy any files at all, this can be useful if you want to performance other tasks without moving any files around.
        <br />
        The <strong>git-rebase</strong> strategy assumes that in your hosts there is a working copy of a Git repository, and will perform a remote pull, conserving all files that might be untracked.
    </p>
</div>