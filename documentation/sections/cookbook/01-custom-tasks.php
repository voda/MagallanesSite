<h2><a name="cookbook-custom-tasks"></a>Custom Tasks</h2>
<div>
    <p>
    Creating new tasks is a very important part of any good deployment tool. Every project has it's own necessities, so making custom tasks is essential. Luckily this is very easy with Magallanes.
    </p>

    <p>
    Every custom task must be stored in your <em>.mage/tasks</em> directory. The Class can have any valid name, and extend the <strong>Mage\Task\AbstractTask</strong> class.
    <br />
    Then you have to implement two methods:
    <ul>
        <li><em>getName</em> - this method returns the name of the task to be displayed while you run Magallanes.</li>
        <li><em>run</em> - this method does the actual work of the task.</li>
    </ul>
    And that's it! Then you can add your task to your environments, just by they class name: <em>Permissions</em> would be <em>permissions</em>, and <em>DumpAssets</em> would be <em>dump-assets</em>.
    </p>

    <p>
    Here is a simple example:
    </p>
    <div class="php">
<span style="color: #c00;">&lt;?php</span><br />

<span style="color: #BA42C7;">namespace</span> Task;<br />
<br />
<span style="color: #BA42C7;">use</span> Mage\Task\AbstractTask;<br />
<br />
<span style="color: #BA42C7;">class</span> Permissions <span style="color: #BA42C7;">extends</span> AbstractTask<br />
{<br />
    <span style="color: #BA42C7; padding-left: 30px;">public function</span> getName()<br />
    <span style="padding-left: 30px;">{</span><br />
        <span style="color: #BA42C7; padding-left: 60px;">return</span> 'Fixing file permissions';<br />
    <span style="padding-left: 30px;">}</span><br />
<br />
    <span style="color: #BA42C7; padding-left: 30px;">public function</span> run()<br />
    <span style="padding-left: 30px;">{</span><br />
        <span style="padding-left: 60px;">$command = <span style="color: #3D81FF;">'chmod 755 . -R'</span>;</span><br />
        <span style="padding-left: 60px;">$result = $this->runCommandRemote($command);</span><br />
<br />
        <span style="color: #BA42C7; padding-left: 60px;">return</span> $result;<br />
    <span style="padding-left: 30px;">}</span><br />
}<br />
    </div>

    <p>
    Take a look at the <a href="http://api.magephp.com/1.0">API Documentation</a>, the examples tasks, and the ones already built in Magallanes to get some ideas of what kind of custom tasks you can create.
    But basically you can execute any command in your local copy of code and in the remote copy.
    </p>
</div>
