            <section id="start" class="reveal">
                <h2>Start Today</h2>

                <p>One command. Zero config. Production-ready.</p>

                <div class="os-selector">
                    <button class="os-tab active" data-os="mac">macOS</button>
                    <button class="os-tab" data-os="windows">Windows</button>
                    <button class="os-tab" data-os="linux">Linux</button>
                </div>

                <div class="os-commands" id="os-mac">
                    <div class="command-step">
                        <span class="step-label">Install PHP</span>
                        <div class="code-block">
                            <button class="copy-btn" data-copy='/bin/bash -c "$(curl -fsSL https://php.new/install/mac)"'>copy</button>
                            <pre><code>/bin/bash -c "$(curl -fsSL https://php.new/install/mac)"</code></pre>
                        </div>
                    </div>
                    <div class="command-step">
                        <span class="step-label">Create a Laravel app and run it</span>
                        <div class="code-block">
                            <button class="copy-btn" data-copy="laravel new my-app&#10;cd my-app&#10;composer run dev">copy</button>
                            <pre><code>laravel new my-app
cd my-app
composer run dev <span style="color:#5c6370;"># visit http://localhost:8000</span></code></pre>
                        </div>
                    </div>
                </div>

                <div class="os-commands hidden" id="os-windows">
                    <div class="command-step">
                        <span class="step-label">Install PHP</span>
                        <div class="code-block">
                            <button class="copy-btn" data-copy="Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows'))">copy</button>
                            <pre><code>Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows'))</code></pre>
                        </div>
                    </div>
                    <div class="command-step">
                        <span class="step-label">Create a Laravel app and run it</span>
                        <div class="code-block">
                            <button class="copy-btn" data-copy="laravel new my-app&#10;cd my-app&#10;composer run dev">copy</button>
                            <pre><code>laravel new my-app
cd my-app
composer run dev <span style="color:#5c6370;"># visit http://localhost:8000</span></code></pre>
                        </div>
                    </div>
                </div>

                <div class="os-commands hidden" id="os-linux">
                    <div class="command-step">
                        <span class="step-label">Install PHP</span>
                        <div class="code-block">
                            <button class="copy-btn" data-copy='/bin/bash -c "$(curl -fsSL https://php.new/install/linux)"'>copy</button>
                            <pre><code>/bin/bash -c "$(curl -fsSL https://php.new/install/linux)"</code></pre>
                        </div>
                    </div>
                    <div class="command-step">
                        <span class="step-label">Create a Laravel app and run it</span>
                        <div class="code-block">
                            <button class="copy-btn" data-copy="laravel new my-app&#10;cd my-app&#10;composer run dev">copy</button>
                            <pre><code>laravel new my-app
cd my-app
composer run dev <span style="color:#5c6370;"># visit http://localhost:8000</span></code></pre>
                        </div>
                    </div>
                </div>
            </section>
