<h2><a name="cookbook-custom-commands"></a>Custom Commands</h2>
<div>
    <p>
    Sometime you may need to create a new Command, with Magallanes this is very easy to do, just as easy as a task.
    </p>

    <p>
    Every custom command must be stored in your <em>.mage/commands</em> directory (not created by default). The Class can have any valid name, and extend the <strong>Mage\Command\AbstractCommand</strong> class and be inside the <strong>Command</strong> namespace.
    <br />
    Then you have to implement one method:
    <ul>
        <li><em>run</em> - this method does the actual work of the command.</li>
    </ul>
    And that's it! Then you can invoke your command from the command line.
    </p>

    <p>
    Here is a simple example:
    </p>
    <div class="php">
<span style="color: #c00;">&lt;?php</span><br />

<span style="color: #BA42C7;">namespace</span> Command;<br />
<br />
<span style="color: #BA42C7;">use</span> Mage\Command\AbstractCommand;<br />
<span style="color: #BA42C7;">use</span> Mage\Console;<br />
<br />
<span style="color: #BA42C7;">class</span> HelloWorld <span style="color: #BA42C7;">extends</span> AbstractCommand<br />
{<br />
    <span style="color: #BA42C7; padding-left: 30px;">public function</span> run()<br />
    <span style="padding-left: 30px;">{</span><br />
        <span style="padding-left: 60px;">Console::output(<span style="color: #3D81FF;">'Hello world'</span>, 1, 2);</span><br />
        <br />
        <span style="color: #BA42C7; padding-left: 60px;">return</span> 0;<br />
    <span style="padding-left: 30px;">}</span><br />
}<br />
    </div>

    <p>
        Then you can just invoke it as:
    </p>

    <p class="bash">
        <span class="command-mage">mage</span> hello-world</span>
    </p>

    <p>
    Built in commands have precedence over custom commands.
    <br/>
    Take a look at the <a href="http://api.magephp.com/1.0">API Documentation</a>, the examples command, and the ones already built in Magallanes to get some ideas of what kind of custom commands you can create.
    </p>
</div>
