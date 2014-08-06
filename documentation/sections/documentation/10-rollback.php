<h2><a name="rollback"></a>Rollback a Release</h2>
<div>
    <p>
        Sometimes mistakes are made, either willingly (deploying a feature not approved to production) or not (a plain old bug).
        This means we need to be able to go back to the previous release in an easy manner. Of course this could be fixed by disabling the unwanted feature in the repository and deploying again,
        but this flow is not efficient: you are leaving an "unwanted deploy" and also change back the code that you will have to change again later.
    </p>

    <p>
        This is where the <strong>rollback</strong> command comes in action. Similar to a deploy, you have to indicate in which environment you want to do the rollback,
        and then to specify to which release you want to rollback to. The environment is indicated like in any other command <em>to:environment</em>, and then in the <strong>release</strong> parameter you specify the RelaseId you want to change to.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> releases rollback --release=<span class="command-string">20120101172148</span> to:<span class="command-string">production</span>
    </p>

    <p>
        Given that the Release ID is a very big number, and they tend to look alike, it's easier to use a shortcut. If the release options is a negative number or zero, then it will be rolled back to that release index.
        Zero being the last release, -1 being the penultimate, -2 the antepenultimate, and so forth.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> releases rollback --release=<span class="command-string">-1</span> to:<span class="command-string">production</span><br />
        <span class="command-mage">mage</span> releases rollback --release=<span class="command-string">-2</span> to:<span class="command-string">production</span><br />
        <span class="command-mage">mage</span> releases rollback --release=<span class="command-string">-3</span> to:<span class="command-string">production</span>
    </p>

    <p>
        So if you want to revert to the previous release before then use <strong>--release=-1</strong>, and if you want to go back to the last release deployed, use <strong>--release=0</strong>.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> releases rollback --release=<span class="command-string">0</span> to:<span class="command-string">production</span>
    </p>

    <br />

    <p>
        When a rollback is executed, the tasks you have defined are skipped unless you implement the <strong>Mage\Task\Releases\RollbackAware</strong> interface.
    </p>

    <p>
        It's a common case when you deploy and the app fails, dreadfully fails, so you have to rollback. Ok, we have seen that that is easy. But you now have a broken release at "index 0". With the flag <em>--deleteCurrent</em> on the rollback command, you can delete that broken release.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> releases rollback --release=<span class="command-string">-1</span> to:<span class="command-string">production</span> --deleteCurrent<br />
    </p>

    <p>
        One last thing. A shortcut. Instead of calling the <em>release rollback --release=XYZ</em> command, you can just use <em>rollback XYZ</em>, it will be just the same, it's just a shortcut.
    </p>

    <p class="bash">
        <span class="command-mage">mage</span>rollback <span class="command-string">-1</span> to:<span class="command-string">production</span> --deleteCurrent<br />
    </p>

    <br />
</div>