<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <title>Why PHP in 2026? Modern PHP is Type-Safe, Fast & Beautiful | whyphp.dev</title>
        <meta name="title" content="Why PHP in 2026? Modern PHP is Type-Safe, Fast & Beautiful">
        <meta name="description" content="PHP powers 77% of the web and has been completely reborn. Modern PHP features JIT compilation, enums, readonly properties, fibers, and TypeScript-level type safety. Learn why developers are choosing PHP in 2026.">
        <meta name="keywords" content="PHP, modern PHP, PHP 8, PHP 8.5, Laravel, Symfony, web development, programming language, type-safe PHP, PHP tutorial, learn PHP, PHP framework, Composer, PHPStan, Pest">
        <meta name="author" content="Nuno Maduro">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="googlebot" content="index, follow">
        <meta name="language" content="English">
        <meta name="revisit-after" content="7 days">

        <!-- Canonical -->
        <link rel="canonical" href="https://whyphp.dev">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://whyphp.dev">
        <meta property="og:site_name" content="Why PHP">
        <meta property="og:title" content="Why PHP in 2026? Modern PHP is Type-Safe, Fast & Beautiful">
        <meta property="og:description" content="PHP powers 77% of the web and has been completely reborn. Modern PHP features JIT compilation, enums, readonly properties, and TypeScript-level type safety.">
        <meta property="og:image" content="https://whyphp.dev/og-image.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Why PHP in 2026? - Modern PHP is Type-Safe, Fast & Beautiful">
        <meta property="og:locale" content="en_US">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@@enunomaduro">
        <meta name="twitter:creator" content="@@enunomaduro">
        <meta name="twitter:url" content="https://whyphp.dev">
        <meta name="twitter:title" content="Why PHP in 2026? Modern PHP is Type-Safe, Fast & Beautiful">
        <meta name="twitter:description" content="PHP powers 77% of the web and has been completely reborn. Modern PHP features JIT compilation, enums, readonly properties, and TypeScript-level type safety.">
        <meta name="twitter:image" content="https://whyphp.dev/og-image.png">
        <meta name="twitter:image:alt" content="Why PHP in 2026? - Modern PHP is Type-Safe, Fast & Beautiful">

        <!-- Structured Data / JSON-LD -->
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "WebSite",
            "name": "Why PHP",
            "alternateName": ["whyphp.dev", "Why PHP in 2026"],
            "url": "https://whyphp.dev",
            "description": "PHP powers 77% of the web and has been completely reborn. Modern PHP features JIT compilation, enums, readonly properties, and TypeScript-level type safety.",
            "author": {
                "@@type": "Person",
                "name": "Nuno Maduro",
                "url": "https://twitter.com/enunomaduro"
            },
            "about": {
                "@@type": "ComputerLanguage",
                "name": "PHP",
                "url": "https://php.net"
            },
            "keywords": "PHP, modern PHP, PHP 8, Laravel, Symfony, web development, programming"
        }
        </script>
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "FAQPage",
            "mainEntity": [
                {
                    "@@type": "Question",
                    "name": "Why should I use PHP in 2026?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Modern PHP has been completely reborn with JIT compilation, fibers, enums, attributes, readonly properties, and a type system that rivals TypeScript. It powers 77% of the web including WordPress, Laravel, and Symfony."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Is PHP still relevant?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Absolutely. PHP powers 77% of the web. Modern PHP features TypeScript-level type safety, Jest-level testing with Pest, and Rust-level tooling. Major platforms like WordPress, Facebook, and Wikipedia run on PHP."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "How do I install PHP?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Visit php.new for one-command installation on macOS, Windows, or Linux. Then use Laravel, the most popular PHP framework, to build your first application."
                    }
                }
            ]
        }
        </script>

        <!-- Theme -->
        <meta name="theme-color" content="#7A86E8">
        <meta name="msapplication-TileColor" content="#7A86E8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700&family=jetbrains-mono:400,700" rel="stylesheet" />

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Space Grotesk', system-ui, sans-serif;
                background: #09090b;
                color: #d4d4d8;
                line-height: 1.8;
                font-size: 1.125rem;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 3rem 2rem 6rem;
            }

            .nav {
                display: flex;
                gap: 2rem;
                margin-bottom: 4rem;
                font-size: 0.875rem;
                font-family: 'JetBrains Mono', monospace;
            }

            .nav a {
                color: #71717a;
                text-decoration: none;
                transition: color 0.2s;
            }

            .nav a:hover {
                color: #7A86E8;
            }

            .nav-sep {
                color: #3f3f46;
            }

            h1 {
                font-size: clamp(3rem, 10vw, 5rem);
                font-weight: 700;
                line-height: 1.1;
                margin-bottom: 1rem;
                color: #fafafa;
                letter-spacing: -0.02em;
            }

            h1 .highlight {
                color: #7A86E8;
            }

            .subtitle {
                font-size: 1.25rem;
                color: #71717a;
                margin-bottom: 3rem;
            }

            h2 {
                font-size: 1.75rem;
                font-weight: 600;
                margin-top: 4rem;
                margin-bottom: 1.5rem;
                color: #fafafa;
            }

            h3 {
                font-size: 1.25rem;
                font-weight: 600;
                color: #fafafa;
                margin-top: 2rem;
                margin-bottom: 0.75rem;
            }

            p {
                margin-bottom: 1.5rem;
            }

            a {
                color: #7A86E8;
                text-decoration: underline;
                text-underline-offset: 3px;
            }

            a:hover {
                text-decoration: none;
            }

            hr {
                border: none;
                height: 1.5rem;
                margin: 4rem 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            hr::before {
                content: '•   •   •';
                color: #3f3f46;
                font-size: 1rem;
                letter-spacing: 0.25rem;
            }

            blockquote {
                border-left: 3px solid #7A86E8;
                padding-left: 1.5rem;
                margin: 2rem 0;
                font-style: italic;
                color: #a1a1aa;
            }

            code {
                font-family: 'JetBrains Mono', monospace;
                background: #18181b;
                padding: 0.2rem 0.5rem;
                border-radius: 4px;
                font-size: 0.9em;
            }

            pre {
                font-family: 'JetBrains Mono', monospace;
                background: #18181b;
                padding: 1.5rem;
                border-radius: 8px;
                overflow-x: auto;
                margin: 2rem 0;
                font-size: 0.875rem;
                line-height: 1.6;
            }

            pre code {
                background: none;
                padding: 0;
            }

            strong {
                color: #fafafa;
                font-weight: 600;
            }

            .tools {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
                margin: 2rem 0;
            }

            .tool {
                display: block;
                padding: 1rem;
                background: #18181b;
                border-radius: 8px;
                border: 1px solid #27272a;
                text-decoration: none;
                transition: border-color 0.2s, background 0.2s;
            }

            .tool:hover {
                border-color: #7A86E8;
                background: #1f1f23;
            }

            .tool strong {
                display: block;
                margin-bottom: 0.25rem;
                color: #fafafa;
            }

            .tool span {
                font-size: 0.875rem;
                color: #71717a;
            }

            .os-selector {
                display: flex;
                gap: 0.5rem;
                margin: 1.5rem 0 1rem;
            }

            .os-tab {
                padding: 0.5rem 1rem;
                background: transparent;
                border: 1px solid #27272a;
                border-radius: 6px;
                color: #71717a;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.875rem;
                cursor: pointer;
                transition: all 0.2s;
            }

            .os-tab:hover {
                border-color: #3f3f46;
                color: #a1a1aa;
            }

            .os-tab.active {
                background: #7A86E8;
                border-color: #7A86E8;
                color: #fff;
            }

            .os-commands {
                margin: 1rem 0;
            }

            .os-commands.hidden {
                display: none;
            }

            .command-step {
                margin: 1rem 0;
            }

            .step-label {
                display: block;
                font-size: 0.875rem;
                color: #71717a;
                margin-bottom: 0.5rem;
            }

            .code-block {
                position: relative;
            }

            .code-block pre {
                margin: 0;
            }

            .copy-btn {
                position: absolute;
                top: 0.75rem;
                right: 0.75rem;
                padding: 0.4rem 0.6rem;
                background: #27272a;
                border: 1px solid #3f3f46;
                border-radius: 4px;
                color: #71717a;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.75rem;
                cursor: pointer;
                transition: all 0.2s;
            }

            .copy-btn:hover {
                background: #3f3f46;
                color: #a1a1aa;
            }

            .copy-btn.copied {
                background: #7A86E8;
                border-color: #7A86E8;
                color: #fff;
            }

            .directory {
                margin: 3rem 0;
            }

            .directory h3 {
                margin-bottom: 1rem;
            }

            .directory-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 0.5rem 2rem;
                font-size: 0.9rem;
            }

            .directory-grid a {
                color: #71717a;
                text-decoration: none;
                transition: color 0.2s;
            }

            .directory-grid a:hover {
                color: #7A86E8;
            }

            .share-section {
                display: flex;
                align-items: center;
                gap: 1rem;
                margin: 2rem 0;
                flex-wrap: wrap;
            }

            .share-label {
                font-size: 0.875rem;
                color: #71717a;
                font-family: 'JetBrains Mono', monospace;
            }

            .share-btn {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.5rem 1rem;
                background: #18181b;
                border: 1px solid #27272a;
                border-radius: 6px;
                color: #a1a1aa;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.875rem;
                line-height: 1.5;
                text-decoration: none;
                cursor: pointer;
                transition: all 0.2s;
            }

            .share-btn:hover {
                border-color: #7A86E8;
                color: #fff;
                background: #1f1f23;
            }

            .share-btn svg {
                width: 16px;
                height: 16px;
                fill: currentColor;
            }

            .share-btn.copied {
                border-color: #7A86E8;
                background: #7A86E8;
                color: #fff;
            }

            @media (max-width: 640px) {
                .directory-grid {
                    grid-template-columns: 1fr;
                }
            }

            .video-embed {
                position: relative;
                width: 100%;
                padding-bottom: 56.25%;
                margin: 2rem 0;
                border-radius: 8px;
                overflow: hidden;
            }

            .video-embed iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: none;
            }

            footer {
                margin-top: 6rem;
                padding-top: 2rem;
                border-top: 1px solid #27272a;
                font-size: 0.875rem;
                color: #52525b;
                font-family: 'JetBrains Mono', monospace;
            }

            footer a {
                color: #71717a;
                text-decoration: none;
            }

            footer a:hover {
                color: #7A86E8;
            }

            .footer-row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                gap: 1rem;
            }

            .footer-links {
                display: flex;
                gap: 1.5rem;
                flex-wrap: wrap;
            }

            @media (max-width: 640px) {
                .tools {
                    grid-template-columns: 1fr;
                }
                .nav {
                    gap: 1rem;
                    flex-wrap: wrap;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="nav">
                <a href="#ecosystem">Ecosystem</a>
                <span class="nav-sep">·</span>
                <a href="#watch-this">Watch this</a>
                <span class="nav-sep">·</span>
                <a href="#examples">Real examples</a>
                <span class="nav-sep">·</span>
                <a href="#start">Start today</a>
            </nav>

            <h1>Why <span class="highlight">PHP</span> in 2026?</h1>
            <p class="subtitle">The language that powers 77% of the web has been completely reborn.</p>

            <p>Stop pretending PHP is still the language from 2004. It's not. Modern PHP has JIT compilation, immutability by default via <code>readonly</code>, enums, attributes, and a type system that rivals TypeScript.</p>

            <p>No build steps. No transpilation. No bundling. No 900MB <code>node_modules</code>. Just write code and <a href="https://cloud.laravel.com" target="_blank">deploy</a>. That's the superpower everyone forgot about.</p>

            <pre><code><span style="color:#c678dd;">final</span> <span style="color:#c678dd;">readonly</span> <span style="color:#c678dd;">class</span> <span style="color:#e5c07b;">Book</span>
{
    <span style="color:#c678dd;">public function</span> <span style="color:#61afef;">__construct</span>(
        <span style="color:#c678dd;">public</span> <span style="color:#e5c07b;">Status</span> <span style="color:#e06c75;">$status</span>,
        <span style="color:#c678dd;">public</span> <span style="color:#e5c07b;">string</span> <span style="color:#e06c75;">$title</span>,
    ) {}

    <span style="color:#c678dd;">public function</span> <span style="color:#61afef;">label</span>(): <span style="color:#e5c07b;">string</span>
    {
        <span style="color:#c678dd;">return</span> <span style="color:#c678dd;">match</span> (<span style="color:#e06c75;">$this</span>-><span style="color:#e06c75;">status</span>) {
            <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Draft</span> => <span style="color:#98c379;">'Working on it'</span>,
            <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span> => <span style="color:#98c379;">'Ready to read'</span>,
        };
    }
}</code></pre>

            <div class="share-section">
                <span class="share-label">Spread the word:</span>
                <a href="#" class="share-btn" id="share-twitter" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    Twitter
                </a>
                <a href="#" class="share-btn" id="share-linkedin" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    LinkedIn
                </a>
                <button class="share-btn" id="share-copy">
                    <svg viewBox="0 0 24 24"><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>
                    Copy link
                </button>
            </div>

            <hr>

            <section id="ecosystem">
                <h2>Ecosystem</h2>

                <p>Modern PHP isn't just better. It's unrecognizable from its past.</p>

                <div class="tools">
                    <a href="https://laravel.com" target="_blank" class="tool">
                        <strong>Laravel</strong>
                        <span>Rails/Next.js for PHP</span>
                    </a>
                    <a href="https://getcomposer.org" target="_blank" class="tool">
                        <strong>Composer</strong>
                        <span>Cargo/npm for PHP</span>
                    </a>
                    <a href="https://phpstan.org" target="_blank" class="tool">
                        <strong>PHPStan</strong>
                        <span>TypeScript-like type safety</span>
                    </a>
                    <a href="https://pestphp.com" target="_blank" class="tool">
                        <strong>Pest</strong>
                        <span>Jest-style testing</span>
                    </a>
                    <a href="https://laravel.com/docs/pint" target="_blank" class="tool">
                        <strong>Pint</strong>
                        <span>Code style fixer</span>
                    </a>
                    <a href="https://getrector.com" target="_blank" class="tool">
                        <strong>Rector</strong>
                        <span>Automated refactoring</span>
                    </a>
                </div>

                <p>The PHP ecosystem in 2026 rivals anything out there. TypeScript-level type safety. Jest-level testing. Rust-level tooling. This isn't your grandfather's PHP.</p>
            </section>

            <hr>

            <section id="watch-this">
                <h2>Still think PHP is a joke?</h2>

                <p>So did we. Then we actually looked at it. Type-safe. Expressive. Modern. It just works. <strong>Watch me explain it.</strong></p>

                <div class="video-embed">
                    <iframe src="https://www.youtube.com/embed/PLkLhIwVfMk" title="Why PHP?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="share-section">
                    <span class="share-label">Share the video:</span>
                    <a href="#" class="share-btn" id="share-video-twitter" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        Twitter
                    </a>
                    <a href="#" class="share-btn" id="share-video-linkedin" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                    <button class="share-btn" id="share-video-copy">
                        <svg viewBox="0 0 24 24"><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>
                        Copy link
                    </button>
                </div>

                <hr>

                <h2 id="examples">Code That Ships</h2>
                <p>This is what PHP looks like in production.</p>

                <h3>API with Laravel</h3>
                <pre><code><span style="color:#e5c07b;">Route</span>::<span style="color:#61afef;">get</span>(<span style="color:#98c379;">'/books'</span>, <span style="color:#c678dd;">function</span> () {
    <span style="color:#c678dd;">return</span> <span style="color:#e5c07b;">Book</span>::<span style="color:#61afef;">query</span>()
        -><span style="color:#61afef;">where</span>(<span style="color:#98c379;">'status'</span>, <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span>)
        -><span style="color:#61afef;">with</span>(<span style="color:#98c379;">'author'</span>)
        -><span style="color:#61afef;">paginate</span>();
});</code></pre>

                <h3>Testing with Pest</h3>
                <pre><code><span style="color:#61afef;">it</span>(<span style="color:#98c379;">'publishes a book'</span>, <span style="color:#c678dd;">function</span> () {
    <span style="color:#e06c75;">$book</span> = <span style="color:#e5c07b;">Book</span>::<span style="color:#61afef;">factory</span>()-><span style="color:#61afef;">create</span>();

    <span style="color:#e06c75;">$book</span>-><span style="color:#61afef;">publish</span>();

    <span style="color:#61afef;">expect</span>(<span style="color:#e06c75;">$book</span>-><span style="color:#e06c75;">status</span>)-><span style="color:#61afef;">toBe</span>(<span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span>);
});</code></pre>

                <h3>Generics with PHPStan</h3>
                <pre><code><span style="color:#5c6370;">/** </span><span style="color:#c678dd;">@return</span><span style="color:#5c6370;"> </span><span style="color:#e5c07b;">array</span><span style="color:#5c6370;">&lt;</span><span style="color:#e5c07b;">int</span><span style="color:#5c6370;">, </span><span style="color:#e5c07b;">string</span><span style="color:#5c6370;">&gt; */</span>
<span style="color:#c678dd;">public function</span> <span style="color:#61afef;">names</span>(): <span style="color:#e5c07b;">array</span>
{
    <span style="color:#c678dd;">return</span> <span style="color:#e5c07b;">User</span>::<span style="color:#61afef;">all</span>()
        -><span style="color:#61afef;">filter</span>(<span style="color:#c678dd;">fn</span> (<span style="color:#e5c07b;">User</span> <span style="color:#e06c75;">$user</span>): <span style="color:#e5c07b;">bool</span> => <span style="color:#e06c75;">$user</span>-><span style="color:#61afef;">isActive</span>())
        -><span style="color:#61afef;">map</span>(<span style="color:#c678dd;">fn</span> (<span style="color:#e5c07b;">User</span> <span style="color:#e06c75;">$user</span>): <span style="color:#e5c07b;">string</span> => <span style="color:#e06c75;">$user</span>-><span style="color:#e06c75;">name</span>)
        -><span style="color:#61afef;">toArray</span>();
}</code></pre>
            </section>

            <hr>

            <section id="start">
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

            <footer>
                <div class="footer-row">
                    <span>Made by <a href="https://x.com/enunomaduro" target="_blank">Nuno Maduro</a></span>
                    <div class="footer-links">
                        <a href="https://php.net" target="_blank">php.net</a>
                        <a href="https://thephp.foundation" target="_blank">PHP Foundation</a>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            document.querySelectorAll('.os-tab').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.os-tab').forEach(t => t.classList.remove('active'));
                    document.querySelectorAll('.os-commands').forEach(c => c.classList.add('hidden'));

                    tab.classList.add('active');
                    document.getElementById('os-' + tab.dataset.os).classList.remove('hidden');
                });
            });

            document.querySelectorAll('.copy-btn').forEach(btn => {
                btn.addEventListener('click', async () => {
                    const text = btn.dataset.copy;
                    await navigator.clipboard.writeText(text);
                    btn.textContent = 'copied';
                    btn.classList.add('copied');
                    setTimeout(() => {
                        btn.textContent = 'copy';
                        btn.classList.remove('copied');
                    }, 1000);
                });
            });

            // Share functionality
            const shareUrl = 'https://whyphp.dev';
            const shareText = `Why PHP? JIT compilation, immutability by default via readonly, enums, attributes, and a type system that rivals TypeScript.

Check this out:`;

            document.getElementById('share-twitter').href =
                `https://twitter.com/intent/tweet?text=${encodeURIComponent(shareText)}&url=${encodeURIComponent(shareUrl)}`;

            document.getElementById('share-linkedin').href =
                `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`;

            document.getElementById('share-copy').addEventListener('click', async () => {
                await navigator.clipboard.writeText(shareUrl);
                const btn = document.getElementById('share-copy');
                btn.classList.add('copied');
                btn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Copied!';
                setTimeout(() => {
                    btn.classList.remove('copied');
                    btn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg> Copy link';
                }, 2000);
            });

            // Video share functionality
            const videoUrl = 'https://www.youtube.com/watch?v=PLkLhIwVfMk';
            const videoShareText = 'Why PHP in 2026? Watch this...';

            document.getElementById('share-video-twitter').href =
                `https://twitter.com/intent/tweet?text=${encodeURIComponent(videoShareText)}&url=${encodeURIComponent(videoUrl)}`;

            document.getElementById('share-video-linkedin').href =
                `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(videoUrl)}`;

            document.getElementById('share-video-copy').addEventListener('click', async () => {
                await navigator.clipboard.writeText(videoUrl);
                const btn = document.getElementById('share-video-copy');
                btn.classList.add('copied');
                btn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Copied!';
                setTimeout(() => {
                    btn.classList.remove('copied');
                    btn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg> Copy link';
                }, 2000);
            });
        </script>
    </body>
</html>
