<h2><a name="builtin-scm"></a>SCM - Software Change Manager</h2>
<div>
    <p>
        Currently only <strong>GIT</strong> is supported. The following tasks are available:
        <ul>
            <li><strong>scm/update</strong> - Updates the current working copy. Useful as a <em>pre-deploy</em> task for pull all changes before deploying.</li>
            <li><strong>scm/force-update</strong> - UDownloads the latest from remote without trying to merge or rebase anything. Resets the master branch to what you just fetched. Changes all the files in your working tree to match the files in origin/master, so if you have any local changes, they will be lost.</li>
        </ul>
    </p>
</div>
