<h2><a name="stages"></a>Stages</h2>
<div>
    <p>
        Back when we discussed the <a href="#config-environment">Configuration of an environment</a>, when a deployment runs, there are several stages in which the tasks are being executed.
    </p>

    <h3>Pre-Deploy</h3>
    <p>
        These tasks are executed on your local copy of the code. For example you can update your SCM Repository, change branches, compile assets, etc. All the heavy lifting -that doesn't require the code being in the final destination- should be done here.
    </p>

    <h3>On-Deploy</h3>
    <p>
        These tasks are executed on every host, this is where the actual deployment is done. The Deployment Strategy is executed here (rsync, tar, etc). These tasks will be executed on the remote code, for every host, but before being released. Cache warmups can be executed here.
    </p>

    <h3>Post-Release</h3>
    <p>
        After all the hosts had been deployed successfully, then the new code is released. These tasks are executed on every host after the release symlink is changed to the new code. You can use tasks here to cleanup APC cache or whatever you want. These tasks are only executed on each host, and only if you are using releases.
    </p>

    <h3>Post-Deploy</h3>
    <p>
        Finally, after the deployment is done, these tasks get to be executed. You can cleanup your local copy, or purge some general cache (like varnish). These tasks are executed locally.
    </p>

    <br />
</div>