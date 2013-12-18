<h2><a name="composer"></a>Using composer</h2>
<div>
    <p>
        If you want to have all your tools defined in your project, now you can configure composer to install Magallanes! It's quite simple, just add the requirement line below.
        Also <em>mage</em> is declared as a vendor binary, so you can invoke Magallanes using <em>bin/mage</em>. Pretty neat, right?!
    </p>

    <div class="json">
        <ul>
            <li>{</li>
            <li>
                <ul>
                    <li>"require": {</li>
                    <li>
                        <ul>
                            <li>"andres-montanez/magallanes": "1.0.*"</li>
                        </ul>
                    </li>
                    <li>}</li>
                </ul>
            </li>
            <li>}</li>
        </ul>
    </div>

    <br />

    <p class="bash">
        <span class="command-mage">bin/mage</span> version
    </p>

    <br />

</div>