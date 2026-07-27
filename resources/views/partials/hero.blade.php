            <header>
                <h1 class="hero-title">Why <span class="highlight">PHP</span> in 2026?</h1>

            <p class="subtitle">It's actually insanely good now.</p>

            <p class="hero-text-1">PHP has come a long way. Modern PHP has JIT compilation, immutability via <code>readonly</code>, enums, attributes, and a type system that rivals TypeScript.</p>

            <p class="hero-text-2">No build steps. No transpilation. No bundling. Just write code and <a href="https://cloud.laravel.com" target="_blank" rel="noopener">deploy</a>. That's the superpower everyone forgot about.</p>

            <div class="os-selector hero-tabs reveal">
                <button class="os-tab active" data-hero="value-objects">Value Objects</button>
                <button class="os-tab" data-hero="api">API</button>
                <button class="os-tab" data-hero="testing">Testing</button>
                <button class="os-tab" data-hero="generics">Generics</button>
                <button class="os-tab" data-hero="enums">Enums</button>
                <button class="os-tab" data-hero="traits">Traits</button>
            </div>

            <div class="hero-code-container">
                <div class="hero-code code-typed" id="hero-value-objects">
                    <pre><code id="typed-code"></code></pre>
                </div>

                <div class="hero-code hidden" id="hero-api">
                    <pre><code><span style="color:#e5c07b;">Route</span>::<span style="color:#61afef;">get</span>(<span style="color:#98c379;">'/books'</span>, <span style="color:#c678dd;">function</span> () {
    <span style="color:#c678dd;">return</span> <span style="color:#e5c07b;">Book</span>::<span style="color:#61afef;">query</span>()
        -><span style="color:#61afef;">where</span>(<span style="color:#98c379;">'status'</span>, <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span>)
        -><span style="color:#61afef;">with</span>(<span style="color:#98c379;">'author'</span>)
        -><span style="color:#61afef;">paginate</span>();
});</code></pre>
                </div>

                <div class="hero-code hidden" id="hero-testing">
                    <pre><code><span style="color:#61afef;">it</span>(<span style="color:#98c379;">'publishes a book'</span>, <span style="color:#c678dd;">function</span> () {
    <span style="color:#e06c75;">$book</span> = <span style="color:#e5c07b;">Book</span>::<span style="color:#61afef;">factory</span>()-><span style="color:#61afef;">create</span>();

    <span style="color:#e06c75;">$book</span>-><span style="color:#61afef;">publish</span>();

    <span style="color:#61afef;">expect</span>(<span style="color:#e06c75;">$book</span>-><span style="color:#e06c75;">status</span>)-><span style="color:#61afef;">toBe</span>(<span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span>);
});</code></pre>
                </div>

                <div class="hero-code hidden" id="hero-generics">
                    <pre><code><span style="color:#5c6370;">/** </span><span style="color:#c678dd;">@return</span><span style="color:#5c6370;"> </span><span style="color:#e5c07b;">array</span><span style="color:#5c6370;">&lt;</span><span style="color:#e5c07b;">int</span><span style="color:#5c6370;">, </span><span style="color:#e5c07b;">string</span><span style="color:#5c6370;">&gt; */</span>
<span style="color:#c678dd;">public function</span> <span style="color:#61afef;">titles</span>(): <span style="color:#e5c07b;">array</span>
{
    <span style="color:#c678dd;">return</span> <span style="color:#e5c07b;">Book</span>::<span style="color:#61afef;">all</span>()
        -><span style="color:#61afef;">filter</span>(<span style="color:#c678dd;">fn</span> (<span style="color:#e5c07b;">Book</span> <span style="color:#e06c75;">$book</span>): <span style="color:#e5c07b;">bool</span> => <span style="color:#e06c75;">$book</span>-><span style="color:#61afef;">isPublished</span>())
        -><span style="color:#61afef;">map</span>(<span style="color:#c678dd;">fn</span> (<span style="color:#e5c07b;">Book</span> <span style="color:#e06c75;">$book</span>): <span style="color:#e5c07b;">string</span> => <span style="color:#e06c75;">$book</span>-><span style="color:#e06c75;">title</span>)
        -><span style="color:#61afef;">toArray</span>();
}</code></pre>
                </div>

                <div class="hero-code hidden" id="hero-enums">
                    <pre><code><span style="color:#c678dd;">enum</span> <span style="color:#e5c07b;">Status</span>: <span style="color:#e5c07b;">string</span>
{
    <span style="color:#c678dd;">case</span> <span style="color:#e06c75;">Draft</span> = <span style="color:#98c379;">'draft'</span>;
    <span style="color:#c678dd;">case</span> <span style="color:#e06c75;">Published</span> = <span style="color:#98c379;">'published'</span>;

    <span style="color:#c678dd;">public function</span> <span style="color:#61afef;">label</span>(): <span style="color:#e5c07b;">string</span>
    {
        <span style="color:#c678dd;">return</span> <span style="color:#c678dd;">match</span> (<span style="color:#e06c75;">$this</span>) {
            <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Draft</span> => <span style="color:#98c379;">'Working on it'</span>,
            <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span> => <span style="color:#98c379;">'Ready to read'</span>,
        };
    }
}</code></pre>
                </div>

                <div class="hero-code hidden" id="hero-traits">
                    <pre><code><span style="color:#c678dd;">trait</span> <span style="color:#e5c07b;">HasTimestamps</span>
{
    <span style="color:#c678dd;">public function</span> <span style="color:#61afef;">wasRecentlyCreated</span>(): <span style="color:#e5c07b;">bool</span>
    {
        <span style="color:#c678dd;">return</span> <span style="color:#e06c75;">$this</span>-><span style="color:#e06c75;">createdAt</span>-><span style="color:#61afef;">isToday</span>();
    }
}

<span style="color:#c678dd;">final class</span> <span style="color:#e5c07b;">Book</span>
{
    <span style="color:#c678dd;">use</span> <span style="color:#e5c07b;">HasTimestamps</span>;
}</code></pre>
                </div>
            </div>
            </header>

            <div class="trusted-section reveal">
                <p class="trusted-label">Trusted by thousands of companies around the world</p>
                <div class="trusted-logos">
                    <!-- OpenAI -->
                    <svg width="100" height="28" viewBox="0 0 144 40" xmlns="http://www.w3.org/2000/svg"><path d="M44.84 19.23c0 6.54 4.1 11.1 9.78 11.1s9.78-4.56 9.78-11.1-4.1-11.1-9.78-11.1-9.78 4.56-9.78 11.1zm15.82 0c0 4.68-2.49 7.71-6.04 7.71s-6.03-3.03-6.03-7.71 2.49-7.71 6.03-7.71 6.04 3.03 6.04 7.71zM74.96 30.33c4.31 0 6.77-3.72 6.77-8.19s-2.46-8.19-6.77-8.19c-1.99 0-3.46.81-4.42 1.98v-1.68h-3.51v21.15h3.51v-7.05c.97 1.17 2.43 1.98 4.42 1.98zm-4.51-8.64c0-2.97 1.64-4.59 3.81-4.59 2.55 0 3.92 2.04 3.92 5.04s-1.37 5.04-3.92 5.04c-2.17 0-3.81-1.65-3.81-4.56v-.93zM91.24 30.33c3.08 0 5.51-1.65 6.59-4.41l-3.02-1.17c-.47 1.62-1.85 2.52-3.57 2.52-2.26 0-3.84-1.65-4.1-4.35h10.78v-1.2c0-4.32-2.37-7.77-6.82-7.77s-7.32 3.57-7.32 8.19c0 4.86 3.08 8.19 7.46 8.19zm-.18-13.35c2.23 0 3.28 1.5 3.31 3.24h-7.06c.53-2.13 1.93-3.24 3.75-3.24zM100.55 30h3.51v-9.24c0-2.25 1.61-3.45 3.19-3.45 1.93 0 2.69 1.41 2.69 3.36V30h3.52v-10.38c0-3.39-1.93-5.67-5.16-5.67-1.99 0-3.37.93-4.24 1.98v-1.68h-3.51V30zM123.76 8.46l-7.97 21.54h3.72l1.79-4.92h9.08l1.82 4.92h3.78l-7.97-21.54h-4.25zm2.05 4.26l3.34 9h-6.62l3.28-9zM142.01 8.52h-3.75v21.54h3.75V8.52zM36.25 16.37c.89-2.72.58-5.71-.84-8.18-2.13-3.8-6.41-5.76-10.6-4.84-1.86-2.15-4.53-3.37-7.33-3.35-4.28-.01-8.07 2.81-9.39 6.98-2.75.58-5.12 2.34-6.5 4.83-2.15 3.79-1.66 8.57 1.2 11.82-.89 2.72-.58 5.71.84 8.18 2.13 3.8 6.41 5.76 10.6 4.84 1.86 2.15 4.53 3.36 7.33 3.35 4.28.01 8.08-2.81 9.39-6.98 2.75-.58 5.12-2.34 6.51-4.83 2.14-3.79 1.65-8.57-1.21-11.82zm-14.68 21.02c-1.71 0-3.37-.61-4.68-1.74l.23-.13 7.78-4.49c.4-.23.64-.66.64-1.12V18.55l3.29 1.9v9.4c0 4.13-3.27 7.53-7.26 7.54zM5.85 30.51c-.86-1.52-1.17-3.3-.88-5.02l.23.15 7.78 4.6c.39.24.87.24 1.28 0l9.49-5.62v3.9l-7.86 4.65c-3.5 2.07-8.02.79-10.04-2.66zM3.8 13.12c.86-1.52 2.2-2.68 3.81-3.29v9.28c0 .47.24.9.64 1.13l9.49 5.61-3.29 1.94-7.86-4.65c-3.49-2.07-4.69-6.65-2.79-10.02zm27 6.44l-9.49-5.61 3.29-1.94 7.86 4.65c3.5 2.07 4.7 6.66 2.79 10.02-.86 1.52-2.21 2.68-3.82 3.29v-9.29c0-.47-.24-.9-.63-1.12zm3.27-5.04l-.23-.14-7.78-4.6c-.39-.24-.87-.24-1.28 0l-9.49 5.62v-3.9l7.86-4.65c3.5-2.07 8.02-.79 10.04 2.66.85 1.52 1.16 3.3.88 5.01zm-20.56 6.94l-3.29-1.94v-9.4c0-4.14 3.28-7.54 7.27-7.53 1.71 0 3.37.61 4.68 1.74l-.23.13-7.78 4.49c-.4.23-.64.66-.64 1.12l-.01 11.39zm1.79-3.96l4.23-2.5 4.23 2.5v5l-4.23 2.5-4.23-2.5v-5z"/></svg>
                    <!-- Nike -->
                    <svg width="70" height="25" viewBox="0 0 121 43" xmlns="http://www.w3.org/2000/svg"><path d="M13.35 42.98c-3.61-.14-6.56-1.12-8.86-2.95-.44-.35-1.49-1.4-1.84-1.84-.94-1.17-1.57-2.31-2-3.58-1.3-3.9-.63-9.01 1.92-14.63 2.19-4.81 5.56-9.57 11.45-16.17.87-.97 3.45-3.81 3.47-3.81.01 0-.13.24-.31.54-1.53 2.56-2.84 5.57-3.56 8.18-1.15 4.18-1.01 7.77.41 10.56.98 1.92 2.65 3.58 4.53 4.5 3.29 1.61 8.11 1.74 13.99.33.4-.09 20.47-6.5 44.59-12.9 24.12-6.4 43.86-11.63 43.86-11.63.01.01-56.05 23.92-85.14 36.33-4.61 1.96-5.84 2.46-8.01 3.22-5.54 1.94-10.53 2.86-14.5 2.85z"/></svg>
                    <!-- NASA -->
                    <svg width="100" height="28" viewBox="0 0 173 48" xmlns="http://www.w3.org/2000/svg"><path d="M32.03 35.46c.53 2.02 1.39 2.8 2.91 2.8 1.58 0 2.4-.95 2.4-2.8V1.08h9.88v34.37c0 4.85-.63 6.95-3.08 9.4-1.77 1.77-5.04 3.14-9.16 3.14-3.33 0-6.52-1.1-8.55-3.14-1.78-1.79-2.76-3.62-4.29-9.4L16.09 12.54c-.53-2.02-1.39-2.8-2.91-2.8-1.58 0-2.4.95-2.4 2.8v34.38H.89V12.54c0-4.84.63-6.94 3.09-9.4C5.75 1.37 9.01 0 13.13 0c3.33 0 6.52 1.1 8.55 3.14 1.78 1.79 2.76 3.62 4.29 9.4l6.06 22.92zM162.68 46.92l-11.41-35.71c-.13-.39-.25-.73-.43-.95-.31-.38-.75-.58-1.33-.58s-1.02.2-1.33.58c-.18.22-.31.56-.43.95l-11.41 35.71h-10.21l12.46-39.01c.65-2.03 1.58-3.76 2.75-4.91 2.02-1.97 4.4-3 8.16-3s6.14 1.03 8.16 3c1.18 1.15 2.1 2.88 2.75 4.91l12.46 39.01h-10.19zM112.2 46.92c6.47 0 9.63-1.38 12.12-3.86 2.76-2.74 4.08-5.75 4.08-10.23 0-3.96-1.45-7.63-3.66-9.83-2.88-2.87-6.47-3.78-12.31-3.78h-8.19c-3.13 0-4.37-.38-5.36-1.35-.68-.66-1-.65-1-1.82 0-1.21.29-2.4 1.12-3.21.73-.72 1.74-1.05 3.66-1.05h23.66V1.08h-21.85c-6.47 0-9.63 1.38-12.12 3.86-2.76 2.74-4.08 5.74-4.08 10.23 0 3.96 1.45 7.63 3.66 9.83 2.89 2.87 6.47 3.78 12.32 3.78h8.19c3.13 0 4.37.38 5.36 1.35.68.67 1 1.65 1 1.82 0 1.2-.29 2.39-1.12 3.2-.73.72-1.74 1.05-3.66 1.05H89.61l-9.36-29.3c-.65-2.03-1.57-3.76-2.75-4.91-2.02-1.97-4.4-3-8.16-3s-6.14 1.03-8.16 3c-1.18 1.15-2.1 2.88-2.76 4.91L45.96 46.92h10.21l11.41-35.71c.13-.39.25-.73.43-.95.31-.38.75-.58 1.33-.58s1.02.2 1.33.58c.18.22.3.56.43.95l11.41 35.71H112.2z"/></svg>
                    <!-- Apple -->
                    <svg width="24" height="28" viewBox="0 0 62 76" xmlns="http://www.w3.org/2000/svg"><path d="M60.03 25.91c-.44.34-8.24 4.73-8.24 14.48 0 11.28 9.92 15.27 10.22 15.37-.05.24-1.58 5.46-5.23 10.78-3.26 4.68-6.67 9.36-11.85 9.36s-6.51-2.9-12.49-2.9c-5.83 0-7.9 3.1-12.64 3.1s-8.04-4.29-11.84-9.61C3.56 60.09 0 50.39 0 41.18 0 26.4 9.63 18.57 19.1 18.57c5.04 0 9.23 3.3 12.4 3.3 3-0 7.7-3.5 13.42-3.5 2.17 0 9.97.2 15.1 7.54zM42.2 12.11c2.37-2.81 4.04-6.7 4.04-10.59 0-.54-.04-1.09-.14-1.53-3.85.15-8.44 2.56-11.2 5.76-2.17 2.47-4.2 6.36-4.2 10.3 0 .6.1 1.19.15 1.38.24.05.64.1 1.03.1 3.46 0 7.81-2.31 10.32-5.42z"/></svg>
                    <!-- Marvel -->
                    <svg width="71" height="28" viewBox="0 0 125 49" xmlns="http://www.w3.org/2000/svg"><path d="M105.782 11.4189V3.91893H84.3544L80.8305 28.9749L77.3435 3.91905H69.6164L70.482 10.6048C69.5895 8.89206 66.4259 3.91905 59.4637 3.91905C59.4179 3.91613 51.7261 3.91905 51.7261 3.91905L51.6965 40.4401L46.0644 3.91905L35.9445 3.91333L30.118 41.7541L30.121 3.91881H20.4356L16.944 25.1741L13.543 3.91905H3.85449V45.0582H11.484V25.2292L14.9545 45.0577H19.0106L22.4324 25.2292V45.0577H37.1407L38.0332 38.7275H43.955L44.8445 45.0577L59.2846 45.0664H59.2964V45.0577H59.3054H59.3144V31.7039L61.0846 31.4527L64.7495 45.0664H64.7585H72.2097H72.2185L72.2155 45.0577H72.2287H72.2377L67.4284 29.1019C69.8656 27.346 72.6175 22.887 71.8851 18.6214V18.6186C71.8939 18.6763 76.4246 45.084 76.4246 45.084L85.3077 45.0577L91.3776 7.76846V45.0578H105.782V37.6589H98.9446V28.224H105.782V20.7124H98.9446V11.4189H105.782ZM38.932 32.2037L41.0267 14.616L43.2017 32.2037H38.932ZM61.1094 24.0827C60.5222 24.3601 59.91 24.4987 59.314 24.4987V11.2659C59.3244 11.2659 59.3364 11.2632 59.3511 11.2632C59.9486 11.2603 64.4035 11.4393 64.4035 17.8101C64.4035 21.1426 62.8884 23.2424 61.1094 24.0827ZM121.154 37.6532V45.052H107.103V3.91333H114.668V37.6532H121.154Z"/></svg>
                </div>
            </div>
