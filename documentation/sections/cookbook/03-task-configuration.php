<h2><a name="cookbook-task-configuration"></a>Task Configuration</h2>
<div>
    <p>
    You may want to pass some parameters to your tasks, perhaps an environment option, a path, a password, anything. Luckily this is very easy to do in Magallanes, just pass along a YAML array on the task definition.
    </p>

    <div class="yaml">
        <ul>
            <li><span class="parameter">tasks:</span>
                <ul>
                    <li><span class="parameter">on-deploy:</span>
                        <ul>
                            <li><span class="parameter">-</span> symfony2/cache-warmup: {env: prod}</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <br />

    <div class="yaml">
        <ul>
            <li><span class="parameter">tasks:</span>
                <ul>
                    <li><span class="parameter">on-deploy:</span>
                        <ul>
                            <li><span class="parameter">-</span> symfony2/cache-warmup: {env: test}</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <br />

    <div class="yaml">
        <ul>
            <li><span class="parameter">tasks:</span>
                <ul>
                    <li><span class="parameter">on-deploy:</span>
                        <ul>
                            <li><span class="parameter">-</span> my-custom-task: {param: value}</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <p>Then you can retrieve the value in your task like this:</p>

    <div class="php">
        $env = $this->getParameter(<span style="color: #3D81FF;">'env'</span>, <span style="color: #3D81FF;">'dev'</span>);
    </div>

    <p>
        Where <strong>env</strong> is your parameter name, and in this example, <strong>dev</strong> is your default value.
    </p>

</div>
