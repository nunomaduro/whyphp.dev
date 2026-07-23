<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <title>Why PHP in 2026?</title>
        <meta name="title" content="Why PHP in 2026? It's Actually Insanely Good Now">
        <meta name="description" content="PHP is actually insanely good now. TypeScript-level types, no build steps, immutability via readonly, enums, and more. Just write code and deploy.">
        <meta name="keywords" content="PHP, modern PHP, PHP 8, PHP 8.5, Laravel, Symfony, web development, programming language, type-safe PHP, PHP tutorial, learn PHP, PHP framework, Composer, PHPStan, Pest, readonly, enums">
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
        <meta property="og:title" content="Why PHP in 2026? It's Actually Insanely Good Now">
        <meta property="og:description" content="PHP is actually insanely good now. TypeScript-level types, no build steps, immutability via readonly, enums, and more. Just write code and deploy.">
        <meta property="og:image" content="https://whyphp.dev/images/og-1200x630.png">
        <meta property="og:image:secure_url" content="https://whyphp.dev/images/og-1200x630.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Why PHP in 2026? It's actually insanely good now.">
        <meta property="og:locale" content="en_US">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@enunomaduro">
        <meta name="twitter:creator" content="@enunomaduro">
        <meta name="twitter:url" content="https://whyphp.dev">
        <meta name="twitter:title" content="Why PHP in 2026? It's Actually Insanely Good Now">
        <meta name="twitter:description" content="PHP is actually insanely good now. TypeScript-level types, no build steps, immutability via readonly, enums, and more. Just write code and deploy.">
        <meta name="twitter:image" content="https://whyphp.dev/images/og-twitter-1200x600.png">
        <meta name="twitter:image:alt" content="Why PHP in 2026? - PHP is actually good now">

        <!-- Structured Data / JSON-LD -->
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "WebSite",
            "name": "Why PHP",
            "alternateName": ["whyphp.dev", "Why PHP in 2026"],
            "url": "https://whyphp.dev",
            "description": "PHP is actually insanely good now. TypeScript-level types, no build steps, immutability via readonly, enums, and more.",
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
            "keywords": "PHP, modern PHP, PHP 8, Laravel, Symfony, web development, readonly, enums, type safety"
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
                        "text": "PHP is actually insanely good now. TypeScript-level types, no build steps, immutability via readonly, enums, and a type system that rivals TypeScript. Just write code and deploy."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Is PHP still relevant?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Absolutely. PHP is actually insanely good now. TypeScript-level type safety, Jest-level testing with Pest, and no build steps. Major platforms like WordPress, Facebook, and Wikipedia run on PHP."
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
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "VideoObject",
            "name": "Why PHP in 2026?",
            "description": "PHP in 2026 is so good. Watch me explain why PHP is actually insanely good now.",
            "thumbnailUrl": "https://img.youtube.com/vi/PLkLhIwVfMk/maxresdefault.jpg",
            "uploadDate": "2024-12-01",
            "contentUrl": "https://www.youtube.com/watch?v=PLkLhIwVfMk",
            "embedUrl": "https://www.youtube.com/embed/PLkLhIwVfMk",
            "duration": "PT10M",
            "author": {
                "@@type": "Person",
                "name": "Nuno Maduro",
                "url": "https://twitter.com/enunomaduro"
            }
        }
        </script>

        <!-- Theme & Icons -->
        <meta name="theme-color" content="#7A86E8">
        <meta name="msapplication-TileColor" content="#7A86E8">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/og-1200x630.png">
        <link rel="apple-touch-icon" href="/images/og-1200x630.png">

        <!-- Preconnect & DNS Prefetch for Performance -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://www.youtube.com">
        <link rel="preconnect" href="https://img.youtube.com">
        <link rel="dns-prefetch" href="https://fonts.bunny.net">
        <link rel="dns-prefetch" href="https://www.youtube.com">
        <link rel="dns-prefetch" href="https://img.shields.io">
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
                background: linear-gradient(135deg, #4F8FE8 0%, #60A5FA 35%, #38BDF8 65%, #4F8FE8 100%);
                background-size: 200% 200%;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: gradientShift 3s ease infinite;
                filter: drop-shadow(0 0 30px rgba(79, 143, 232, 0.6));
            }

            @keyframes gradientShift {
                0%, 100% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
            }

            .subtitle {
                font-size: 1.25rem;
                color: #71717a;
                margin-bottom: 3rem;
                opacity: 0;
                animation: fadeInUp 0.8s ease forwards 0.15s;
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

            .os-selector {
                display: flex;
                gap: 0.5rem;
                margin: 1.5rem 0 1rem;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .os-selector::-webkit-scrollbar {
                display: none;
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
                white-space: nowrap;
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

            .os-commands.hidden,
            .example-commands.hidden,
            .badge-commands.hidden,
            .hero-code.hidden {
                display: none;
            }

            .hero-code,
            .hero-code * {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
                animation: none !important;
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

            /* Animated Terminal */
            .terminal-container {
                margin: 3rem 0;
                border-radius: 16px;
                overflow: hidden;
                background: rgba(15, 15, 20, 0.95);
                backdrop-filter: blur(20px);
                box-shadow:
                    0 0 0 1px rgba(30, 40, 60, 0.3),
                    0 25px 50px -12px rgba(0, 0, 0, 0.6);
                border: 1px solid rgba(40, 50, 70, 0.4);
                position: relative;
            }

            .terminal-container::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 1px;
                background: linear-gradient(90deg, transparent, rgba(50, 60, 80, 0.5), transparent);
            }

            .terminal-header {
                background: rgba(20, 20, 28, 0.8);
                padding: 0.875rem 1.25rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            }

            .terminal-title {
                flex: 1;
                text-align: center;
                font-size: 0.75rem;
                color: #52525b;
                font-family: 'JetBrains Mono', monospace;
                letter-spacing: 0.5px;
            }

            .terminal-body {
                padding: 1.5rem 1.75rem;
                height: 320px;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.8125rem;
                line-height: 1.7;
                background: linear-gradient(180deg, rgba(15, 15, 20, 0.5) 0%, rgba(10, 10, 15, 0.8) 100%);
                overflow-y: auto;
            }

            .terminal-line {
                margin-bottom: 0.125rem;
                opacity: 0;
                transform: translateY(5px);
                animation: terminalFadeIn 0.3s ease forwards;
                white-space: pre;
            }

            .terminal-line.prompt {
                color: #71717a;
            }

            .terminal-line .dollar {
                color: #27ca40;
                margin-right: 0.5rem;
            }

            .terminal-line .cmd {
                color: #7A86E8;
                font-weight: 500;
            }

            .terminal-line .arg {
                color: #fbbf24;
            }

            .terminal-line.output {
                color: #52525b;
            }

            .terminal-line.success {
                color: #34d399;
            }

            .terminal-line.info {
                color: #7A86E8;
            }

            .terminal-line.ascii {
                color: #7A86E8;
                line-height: 1.15;
            }

            .terminal-line .version {
                color: #c084fc;
            }

            .terminal-line .number {
                color: #fbbf24;
            }

            .terminal-line .path {
                color: #38bdf8;
            }

            .terminal-line .checkmark {
                color: #34d399;
            }

            .terminal-line .error-count {
                color: #f87171;
            }

            .terminal-line .progress {
                color: #34d399;
            }

            .terminal-cursor {
                display: inline-block;
                width: 8px;
                height: 15px;
                background: #7A86E8;
                animation: cursorBlink 1.2s ease-in-out infinite;
                vertical-align: middle;
                margin-left: 2px;
                border-radius: 1px;
            }

            @keyframes cursorBlink {
                0%, 40% { opacity: 1; }
                50%, 90% { opacity: 0; }
                100% { opacity: 1; }
            }

            @keyframes terminalFadeIn {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .terminal-tabs {
                display: flex;
                justify-content: center;
                gap: 0.25rem;
                padding: 0.75rem 1rem;
                background: rgba(10, 10, 15, 0.9);
                border-top: 1px solid rgba(255, 255, 255, 0.03);
            }

            .terminal-tab {
                padding: 0.5rem 1rem;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.75rem;
                color: #52525b;
                background: transparent;
                border: 1px solid transparent;
                border-radius: 6px;
                cursor: pointer;
                transition: all 0.25s ease;
            }

            .terminal-tab:hover {
                color: #a1a1aa;
                background: rgba(255, 255, 255, 0.03);
            }

            .terminal-tab.active {
                color: #fff;
                background: rgba(40, 50, 70, 0.4);
                border-color: rgba(50, 60, 80, 0.5);
            }

            .terminal-info {
                padding: 1rem 1.5rem;
                background: rgba(10, 10, 15, 0.95);
                border-top: 1px solid rgba(255, 255, 255, 0.03);
                text-align: center;
            }

            .terminal-info a {
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                color: #a1a1aa;
                text-decoration: none;
                transition: all 0.2s ease;
                padding: 0.5rem 1rem;
                border-radius: 8px;
            }

            .terminal-info a:hover {
                color: #fff;
                background: rgba(40, 50, 70, 0.3);
            }

            .terminal-info strong {
                color: #fff;
                font-size: 0.9375rem;
            }

            .terminal-info span {
                font-size: 0.8125rem;
                color: #52525b;
            }

            .terminal-info a:hover span {
                color: #71717a;
            }

            .terminal-info .arrow {
                color: #7A86E8;
                transition: transform 0.2s ease;
            }

            .terminal-info a:hover .arrow {
                transform: translateX(3px);
            }

            @media (max-width: 640px) {
                .terminal-body {
                    padding: 1rem;
                    font-size: 0.75rem;
                    height: 280px;
                }
                .terminal-tabs {
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                    scrollbar-width: none;
                    -ms-overflow-style: none;
                    justify-content: flex-start;
                    padding: 0.75rem 0.5rem;
                }
                .terminal-tabs::-webkit-scrollbar {
                    display: none;
                }
                .terminal-tab {
                    padding: 0.4rem 0.75rem;
                    font-size: 0.7rem;
                    flex-shrink: 0;
                }
                .terminal-info {
                    padding: 0.75rem 1rem;
                }
                .terminal-info a {
                    flex-direction: column;
                    gap: 0.25rem;
                }
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
                .nav {
                    gap: 1rem;
                    flex-wrap: wrap;
                }
            }

            /* ===== ANIMATIONS ===== */

            /* Keyframes */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes blink {
                0%, 50% { opacity: 1; }
                51%, 100% { opacity: 0; }
            }

            @keyframes glow {
                0%, 100% { box-shadow: 0 0 20px rgba(122, 134, 232, 0.1); }
                50% { box-shadow: 0 0 30px rgba(122, 134, 232, 0.25); }
            }

            /* Hero entrance animations */
            .hero-title {
                animation: fadeInUp 0.8s ease forwards;
            }

            .hero-subtitle {
                opacity: 0;
                animation: fadeInUp 0.8s ease forwards 0.15s;
            }

            .hero-text-1 {
                opacity: 0;
                animation: fadeInUp 0.8s ease forwards 0.3s;
            }

            .hero-text-2 {
                opacity: 0;
                animation: fadeInUp 0.8s ease forwards 0.45s;
            }

            .hero-code {
                opacity: 0;
                animation: fadeInUp 0.8s ease forwards 0.6s;
            }

            /* PHP highlight */
            .highlight {
                display: inline-block;
            }

            /* Scroll reveal */
            .reveal {
                opacity: 0;
                transform: translateY(40px);
                transition: opacity 0.7s cubic-bezier(0.4, 0, 0.2, 1),
                            transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .reveal.visible {
                opacity: 1;
                transform: translateY(0);
            }


            /* Share button enhanced hover */
            .share-btn {
                position: relative;
                overflow: hidden;
                transform: translateY(0);
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .share-btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 25px rgba(122, 134, 232, 0.25);
            }

            .share-btn:active {
                transform: translateY(-1px);
            }

            /* OS tab animations */
            .os-tab {
                transform: scale(1);
                transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .os-tab:hover:not(.active) {
                transform: scale(1.05);
                border-color: #52525b;
            }

            .os-tab.active {
                box-shadow: 0 4px 20px rgba(122, 134, 232, 0.4);
            }

            /* Code block enhancements */
            pre {
                position: relative;
                transition: box-shadow 0.3s ease, transform 0.3s ease;
            }

            pre:hover {
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
                transform: translateY(-2px);
            }

            /* Typing effect container */
            .code-typed pre {
                height: 380px;
                overflow: hidden;
            }

            .typing-cursor {
                display: inline-block;
                width: 2px;
                height: 1.1em;
                background: #7A86E8;
                margin-left: 2px;
                animation: blink 0.8s infinite;
                vertical-align: text-bottom;
            }

            /* Nav link underline animation */
            .nav a {
                position: relative;
            }

            .nav a::after {
                content: '';
                position: absolute;
                bottom: -4px;
                left: 0;
                width: 0;
                height: 2px;
                background: #7A86E8;
                transition: width 0.3s ease;
            }

            .nav a:hover::after {
                width: 100%;
            }

            /* Video embed hover */
            .video-embed {
                transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                            box-shadow 0.4s ease;
            }

            .video-embed:hover {
                transform: scale(1.02);
                box-shadow: 0 25px 60px rgba(122, 134, 232, 0.2);
            }

            /* Copy button pulse on hover */
            .copy-btn {
                transition: all 0.2s ease;
            }

            .copy-btn:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            }

            /* Section dividers fade in */
            hr {
                opacity: 0;
                transition: opacity 0.6s ease;
            }

            hr.visible {
                opacity: 1;
            }

            /* Footer reveal */
            footer {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }

            footer.visible {
                opacity: 1;
                transform: translateY(0);
            }

            /* Badge section */
            .badge-showcase {
                display: flex;
                justify-content: center;
                margin: 2rem 0;
            }

            .badge-preview {
                display: inline-block;
                transition: transform 0.3s ease;
            }

            .badge-preview:hover {
                transform: scale(1.05);
            }

            .badge-preview svg {
                display: block;
            }

            .badge-code {
                margin: 1.5rem 0;
            }

            .badge-code pre {
                font-size: 0.8rem;
                word-break: break-all;
                white-space: pre-wrap;
            }

            .badge-preview-result {
                margin: 1.5rem 0;
            }

            .badge-preview-result a {
                display: inline-block;
                transition: transform 0.2s ease;
            }

            .badge-preview-result a:hover {
                transform: scale(1.1);
            }

            .badge-preview-result img {
                display: block;
            }

            /* Floating badge CTA */
            .floating-cta {
                position: fixed;
                bottom: 2rem;
                right: 2rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.75rem 1.25rem;
                background: linear-gradient(135deg, #7A86E8 0%, #60A5FA 100%);
                border: none;
                border-radius: 50px;
                color: #fff;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.875rem;
                font-weight: 600;
                text-decoration: none;
                cursor: pointer;
                box-shadow: 0 4px 20px rgba(122, 134, 232, 0.4);
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                z-index: 1000;
                animation: floatIn 0.6s ease forwards 1s;
                opacity: 0;
                transform: translateY(20px);
            }

            @keyframes floatIn {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .floating-cta:hover {
                transform: translateY(-3px) scale(1.05);
                box-shadow: 0 8px 30px rgba(122, 134, 232, 0.6);
            }

            .floating-cta:active {
                transform: translateY(-1px) scale(1.02);
            }

            .floating-cta svg {
                width: 18px;
                height: 18px;
                fill: currentColor;
            }

            .floating-cta-left {
                position: fixed;
                bottom: 2rem;
                left: 2rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.625rem 1rem;
                background: rgba(24, 24, 27, 0.9);
                backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 50px;
                color: #a1a1aa;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.8rem;
                text-decoration: none;
                cursor: pointer;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                z-index: 1000;
                animation: floatIn 0.6s ease forwards 1.2s;
                opacity: 0;
                transform: translateY(20px);
            }

            .floating-cta-left:hover {
                background: rgba(39, 39, 42, 0.95);
                border-color: rgba(122, 134, 232, 0.3);
                color: #fff;
                transform: translateY(-2px);
            }

            .floating-cta-left svg {
                width: 16px;
                height: 16px;
                fill: currentColor;
            }

            @media (max-width: 640px) {
                .container {
                    padding-bottom: 8rem;
                }
                .floating-cta {
                    bottom: 1rem;
                    right: 1rem;
                    padding: 0.6rem 1rem;
                    font-size: 0.8rem;
                }
                .floating-cta-left {
                    bottom: 1rem;
                    left: 1rem;
                    padding: 0.5rem 0.875rem;
                    font-size: 0.75rem;
                }
            }

            /* Share Modal */
            .share-modal-overlay {
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.8);
                backdrop-filter: blur(4px);
                z-index: 2000;
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }

            .share-modal-overlay.active {
                opacity: 1;
                visibility: visible;
            }

            .share-modal {
                background: #18181b;
                border: 1px solid #27272a;
                border-radius: 16px;
                padding: 2rem;
                max-width: 360px;
                width: 90%;
                transform: scale(0.9) translateY(20px);
                transition: transform 0.3s ease;
            }

            .share-modal-overlay.active .share-modal {
                transform: scale(1) translateY(0);
            }

            .share-modal h3 {
                margin: 0 0 1.5rem 0;
                font-size: 1.25rem;
                text-align: center;
                color: #fff;
            }

            .share-modal-options {
                display: flex;
                flex-direction: column;
                gap: 0.75rem;
            }

            .share-modal-option {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                padding: 0.875rem 1rem;
                background: #27272a;
                border: 1px solid #3f3f46;
                border-radius: 10px;
                color: #fff;
                font-family: 'JetBrains Mono', monospace;
                font-size: 0.875rem;
                text-decoration: none;
                cursor: pointer;
                transition: all 0.2s ease;
            }

            .share-modal-option:hover {
                background: #3f3f46;
                border-color: #7A86E8;
                transform: translateX(4px);
            }

            .share-modal-option svg {
                width: 20px;
                height: 20px;
                flex-shrink: 0;
            }

            .share-modal-close {
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: none;
                border: none;
                color: #71717a;
                cursor: pointer;
                padding: 0.5rem;
                transition: color 0.2s ease;
            }

            .share-modal-close:hover {
                color: #fff;
            }

            /* Reduce motion for accessibility */
            @media (prefers-reduced-motion: reduce) {
                *, *::before, *::after {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            }

            /* Trusted by section */
            .trusted-section {
                margin-top: 4rem;
                text-align: center;
            }

            .trusted-label {
                font-size: 0.75rem;
                color: #52525b;
                text-transform: uppercase;
                letter-spacing: 0.1em;
                margin-bottom: 1.5rem;
                font-family: 'JetBrains Mono', monospace;
            }

            .trusted-logos {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 2rem;
                flex-wrap: wrap;
            }

            .trusted-logos svg {
                height: 24px;
                width: auto;
                fill: #71717a;
                transition: fill 0.2s ease;
            }

            .trusted-logos svg:hover {
                fill: #a1a1aa;
            }

            @media (max-width: 640px) {
                .trusted-logos {
                    gap: 1.5rem;
                }
                .trusted-logos svg {
                    height: 18px;
                }
            }

            .feature-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
                margin: 2rem 0;
            }

            .feature-card {
                border: 1px solid #27272a;
                border-radius: 12px;
                padding: 1.5rem;
                background: rgba(24, 24, 27, 0.4);
                transition: border-color 0.25s ease, transform 0.25s ease;
            }

            .feature-card:hover {
                border-color: #3f3f46;
                transform: translateY(-3px);
            }

            .feature-card h3 {
                margin-top: 0;
                margin-bottom: 0.5rem;
            }

            .feature-card p {
                font-size: 0.95rem;
                color: #a1a1aa;
                margin-bottom: 1rem;
            }

            .feature-card pre {
                margin: 0;
                font-size: 0.8rem;
            }

            @media (max-width: 640px) {
                .feature-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body>
        <main class="container">
            <nav class="nav" aria-label="Main navigation">
                <a href="#features">Features</a>
                <span class="nav-sep" aria-hidden="true">·</span>
                <a href="#ecosystem">Ecosystem</a>
                <span class="nav-sep" aria-hidden="true">·</span>
                <a href="#watch-this">Watch this</a>
                <span class="nav-sep" aria-hidden="true">·</span>
                <a href="#start">Start today</a>
                <span class="nav-sep" aria-hidden="true">·</span>
                <a href="#badge">Badge</a>
            </nav>

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

            <hr>

            <section id="features" class="reveal">
                <h2>The features that make PHP shine</h2>

                <p>Not one trick. A whole toolkit for code that's type-safe, expressive, and a joy to maintain.</p>

                <div class="feature-grid">
                    <div class="feature-card">
                        <h3>Enums</h3>
                        <p>Type-safe constants that carry values and behavior.</p>
                        <pre><code><span style="color:#c678dd;">enum</span> <span style="color:#e5c07b;">Status</span>: <span style="color:#e5c07b;">string</span>
{
    <span style="color:#c678dd;">case</span> <span style="color:#e06c75;">Published</span> = <span style="color:#98c379;">'published'</span>;
}</code></pre>
                    </div>
                    <div class="feature-card">
                        <h3>Traits</h3>
                        <p>Compose reusable behavior across unrelated classes.</p>
                        <pre><code><span style="color:#c678dd;">final class</span> <span style="color:#e5c07b;">Book</span>
{
    <span style="color:#c678dd;">use</span> <span style="color:#e5c07b;">HasTimestamps</span>, <span style="color:#e5c07b;">HasSlug</span>;
}</code></pre>
                    </div>
                    <div class="feature-card">
                        <h3>match</h3>
                        <p>Exhaustive, strict branching with no fall-through.</p>
                        <pre><code><span style="color:#e06c75;">$label</span> = <span style="color:#c678dd;">match</span> (<span style="color:#e06c75;">$status</span>) {
    <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Draft</span> => <span style="color:#98c379;">'Draft'</span>,
    <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span> => <span style="color:#98c379;">'Live'</span>,
};</code></pre>
                    </div>
                    <div class="feature-card">
                        <h3>readonly</h3>
                        <p>Immutability enforced by the language, not convention.</p>
                        <pre><code><span style="color:#c678dd;">final readonly class</span> <span style="color:#e5c07b;">Money</span>
{
    <span style="color:#c678dd;">public function</span> <span style="color:#61afef;">__construct</span>(
        <span style="color:#c678dd;">public</span> <span style="color:#e5c07b;">int</span> <span style="color:#e06c75;">$amount</span>,
    ) {}
}</code></pre>
                    </div>
                    <div class="feature-card">
                        <h3>Named arguments</h3>
                        <p>Order-free, self-documenting calls.</p>
                        <pre><code><span style="color:#c678dd;">new</span> <span style="color:#e5c07b;">Book</span>(
    title: <span style="color:#98c379;">'Modern PHP'</span>,
    status: <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Draft</span>,
);</code></pre>
                    </div>
                    <div class="feature-card">
                        <h3>Nullsafe</h3>
                        <p>Chain through possibly-null values without nested checks.</p>
                        <pre><code><span style="color:#e06c75;">$country</span> = <span style="color:#e06c75;">$user</span>?-><span style="color:#e06c75;">address</span>?-><span style="color:#e06c75;">country</span>;</code></pre>
                    </div>
                    <div class="feature-card">
                        <h3>Attributes</h3>
                        <p>Structured, first-class metadata read at runtime.</p>
                        <pre><code><span style="color:#5c6370;">#[</span><span style="color:#e5c07b;">Route</span>(<span style="color:#98c379;">'/books'</span>, methods: [<span style="color:#98c379;">'GET'</span>])<span style="color:#5c6370;">]</span>
<span style="color:#c678dd;">public function</span> <span style="color:#61afef;">index</span>(): <span style="color:#e5c07b;">View</span></code></pre>
                    </div>
                </div>
            </section>

            <hr>

            <section id="ecosystem" class="reveal">
                <h2>Ecosystem</h2>

                <p>Modern PHP isn't just better. It's unrecognizable from its past.</p>

                <div class="terminal-container">
                    <div class="terminal-header">
                        <div class="terminal-title">~/projects/myapp</div>
                    </div>
                    <div class="terminal-body" id="terminal-output">
                        <div class="terminal-line prompt"><span class="dollar">$</span> <span class="cmd">laravel</span> <span class="arg">new myapp</span></div>
                        <div class="terminal-line output"></div>
                        <div class="terminal-line ascii">   <span class="info">_                               _</span></div>
                        <div class="terminal-line ascii">  <span class="info">| |                             | |</span></div>
                        <div class="terminal-line ascii">  <span class="info">| |     __ _ _ __ __ ___   _____| |</span></div>
                        <div class="terminal-line ascii">  <span class="info">| |    / _` | '__/ _` \ \ / / _ \ |</span></div>
                        <div class="terminal-line ascii">  <span class="info">| |___| (_| | | | (_| |\ V /  __/ |</span></div>
                        <div class="terminal-line ascii">  <span class="info">|______\__,_|_|  \__,_| \_/ \___|_|</span></div>
                        <div class="terminal-line output"></div>
                        <div class="terminal-line output">  Creating a <span class="version">laravel/laravel</span> project...</div>
                        <div class="terminal-line output"></div>
                        <div class="terminal-line success">  <span class="checkmark">✓</span> Application ready in <span class="path">[myapp]</span>.</div>
                        <div class="terminal-line success">  <span class="checkmark">✓</span> Built with love.</div>
                        <div class="terminal-line prompt"><span class="terminal-cursor"></span></div>
                    </div>
                    <div class="terminal-tabs">
                        <button class="terminal-tab active" data-terminal="laravel">Laravel</button>
                        <button class="terminal-tab" data-terminal="symfony">Symfony</button>
                        <button class="terminal-tab" data-terminal="composer">Composer</button>
                        <button class="terminal-tab" data-terminal="phpstan">PHPStan</button>
                        <button class="terminal-tab" data-terminal="pest">Pest</button>
                        <button class="terminal-tab" data-terminal="phpunit">PHPUnit</button>
                        <button class="terminal-tab" data-terminal="pint">Pint</button>
                        <button class="terminal-tab" data-terminal="rector">Rector</button>
                    </div>
                    <div class="terminal-info" id="terminal-info">
                        <a href="https://laravel.com" target="_blank" rel="noopener" id="terminal-link">
                            <strong id="terminal-tool-name">Laravel</strong>
                            <span id="terminal-tool-desc">Rails/Next.js for PHP</span>
                            <span class="arrow">→</span>
                        </a>
                    </div>
                </div>
            </section>

            <hr>

            <section id="watch-this" class="reveal">
                <h2>Ready to see modern PHP?</h2>

                <p>Type-safe. Expressive. Modern. It just works. <strong>Watch me explain it.</strong></p>

                <div class="video-embed">
                    <iframe src="https://www.youtube.com/embed/PLkLhIwVfMk" title="Why PHP?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </section>

            <hr>

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

            <hr>

            <section id="badge" class="reveal">
                <h2>Show Your Support</h2>

                <p>Add this badge to your README. Let the mass know.</p>

                <div class="badge-showcase">
                    <a href="https://whyphp.dev" target="_blank" class="badge-preview" id="badge-preview-img">
                        <img src="https://img.shields.io/badge/Why_PHP-in_2026-7A86E8?style=flat-square&labelColor=18181b" alt="Why PHP in 2026">
                    </a>
                </div>

                <div class="os-selector">
                    <button class="os-tab active" data-format="md">Markdown</button>
                    <button class="os-tab" data-format="html">HTML</button>
                </div>

                <div class="os-selector">
                    <button class="os-tab active" data-style="flat-square">Flat Square</button>
                    <button class="os-tab" data-style="flat">Flat</button>
                    <button class="os-tab" data-style="for-the-badge">For the Badge</button>
                </div>

                <div class="code-block">
                    <button class="copy-btn" id="badge-copy-btn">copy</button>
                    <pre><code id="badge-code-output">[![Why PHP](https://img.shields.io/badge/Why_PHP-in_2026-7A86E8?style=flat-square&labelColor=18181b)](https://whyphp.dev)</code></pre>
                </div>
            </section>

            <footer>
                <div class="footer-row">
                    <span>Made by <a href="https://x.com/enunomaduro" target="_blank" rel="noopener">Nuno Maduro</a></span>
                    <div class="footer-links">
                        <a href="https://php.net" target="_blank" rel="noopener">php.net</a>
                        <a href="https://thephp.foundation" target="_blank" rel="noopener">PHP Foundation</a>
                    </div>
                </div>
            </footer>
        </main>

        <a href="https://github.com/nunomaduro/whyphp.dev" target="_blank" rel="noopener" class="floating-cta-left" aria-label="Edit this site on GitHub">
            <svg viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            Edit this site
        </a>

        <button class="floating-cta" id="share-btn" aria-label="Share this page">
            <svg viewBox="0 0 24 24"><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/></svg>
            Spread the word
        </button>

        <div class="share-modal-overlay" id="share-modal">
            <div class="share-modal">
                <h3>Spread the word</h3>
                <div class="share-modal-options">
                    <a href="#" class="share-modal-option" id="modal-share-twitter" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        Twitter / X
                    </a>
                    <a href="#" class="share-modal-option" id="modal-share-bluesky" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 10.8c-1.087-2.114-4.046-6.053-6.798-7.995C2.566.944 1.561 1.266.902 1.565.139 1.908 0 3.08 0 3.768c0 .69.378 5.65.624 6.479.815 2.736 3.713 3.66 6.383 3.364.136-.02.275-.039.415-.056-.138.022-.276.04-.415.056-3.912.58-7.387 2.005-2.83 7.078 5.013 5.19 6.87-1.113 7.823-4.308.953 3.195 2.05 9.271 7.733 4.308 4.267-4.308 1.172-6.498-2.74-7.078a8.741 8.741 0 0 1-.415-.056c.14.017.279.036.415.056 2.67.297 5.568-.628 6.383-3.364.246-.828.624-5.79.624-6.478 0-.69-.139-1.861-.902-2.206-.659-.298-1.664-.62-4.3 1.24C16.046 4.748 13.087 8.687 12 10.8z"/></svg>
                        Bluesky
                    </a>
                    <a href="#" class="share-modal-option" id="modal-share-linkedin" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                    <button class="share-modal-option" id="modal-share-copy">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                        Copy link
                    </button>
                </div>
            </div>
        </div>

        <script>
            // ===== SCROLL REVEAL =====
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            document.querySelectorAll('.reveal, .stagger-children, hr, footer').forEach(el => {
                revealObserver.observe(el);
            });

            // ===== TYPING EFFECT =====
            const codeToType = `final readonly class Book
{
    public function __construct(
        public Status $status,
        public string $title,
    ) {}

    public function label(): string
    {
        return match ($this->status) {
            Status::Draft => 'Working on it',
            Status::Published => 'Ready to read',
        };
    }
}`;

            const syntaxHighlight = (code) => {
                return code
                    .replace(/\b(final|readonly|class|public|function|return|match)\b/g, '<span style="color:#c678dd;">$1</span>')
                    .replace(/\b(Status|Book|string)\b/g, '<span style="color:#e5c07b;">$1</span>')
                    .replace(/(__construct|label)/g, '<span style="color:#61afef;">$1</span>')
                    .replace(/(\$\w+)/g, '<span style="color:#e06c75;">$1</span>')
                    .replace(/(Status)::(Draft|Published)/g, '<span style="color:#e5c07b;">$1</span>::<span style="color:#e06c75;">$2</span>')
                    .replace(/'([^']+)'/g, '<span style="color:#98c379;">\'$1\'</span>');
            };

            const typedCodeEl = document.getElementById('typed-code');
            let charIndex = 0;
            let typingStarted = false;

            const typeCode = () => {
                if (charIndex < codeToType.length) {
                    const currentText = codeToType.substring(0, charIndex + 1);
                    typedCodeEl.innerHTML = syntaxHighlight(currentText) + '<span class="typing-cursor"></span>';
                    charIndex++;
                    const delay = codeToType[charIndex - 1] === '\n' ? 25 : Math.random() * 8 + 4;
                    setTimeout(typeCode, delay);
                } else {
                    typedCodeEl.innerHTML = syntaxHighlight(codeToType);
                }
            };

            // Start typing when hero code block is visible
            const heroCodeObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !typingStarted) {
                        typingStarted = true;
                        setTimeout(typeCode, 300);
                    }
                });
            }, { threshold: 0.5 });

            heroCodeObserver.observe(document.getElementById('hero-value-objects'));

            // ===== OS TABS =====
            document.querySelectorAll('.os-tab[data-os]').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.os-tab[data-os]').forEach(t => t.classList.remove('active'));
                    document.querySelectorAll('.os-commands').forEach(c => c.classList.add('hidden'));

                    tab.classList.add('active');
                    document.getElementById('os-' + tab.dataset.os).classList.remove('hidden');
                });
            });

            // ===== HERO CODE TABS =====
            document.querySelectorAll('.os-tab[data-hero]').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.os-tab[data-hero]').forEach(t => t.classList.remove('active'));
                    document.querySelectorAll('.hero-code').forEach(c => c.classList.add('hidden'));

                    tab.classList.add('active');
                    document.getElementById('hero-' + tab.dataset.hero).classList.remove('hidden');
                });
            });

            // ===== BADGE TABS =====
            let currentFormat = 'md';
            let currentStyle = 'flat-square';

            const updateBadgeCode = () => {
                const baseUrl = 'https://img.shields.io/badge/Why_PHP-in_2026-7A86E8';
                const imgUrl = `${baseUrl}?style=${currentStyle}&labelColor=18181b`;
                const linkUrl = 'https://whyphp.dev';

                // Update preview image
                document.querySelector('#badge-preview-img img').src = imgUrl;

                // Generate code based on format
                let code;
                if (currentFormat === 'md') {
                    code = `[![Why PHP](${imgUrl})](${linkUrl})`;
                } else {
                    code = `<a href="${linkUrl}"><img src="${imgUrl}" alt="Why PHP in 2026"></a>`;
                }

                document.getElementById('badge-code-output').textContent = code;
                document.getElementById('badge-copy-btn').dataset.copy = code;
            };

            document.querySelectorAll('.os-tab[data-format]').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.os-tab[data-format]').forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    currentFormat = tab.dataset.format;
                    updateBadgeCode();
                });
            });

            document.querySelectorAll('.os-tab[data-style]').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.os-tab[data-style]').forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    currentStyle = tab.dataset.style;
                    updateBadgeCode();
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

            // ===== ANIMATED TERMINAL =====
            const terminalTools = {
                laravel: {
                    name: 'Laravel',
                    desc: 'Rails/Next.js for PHP',
                    url: 'https://laravel.com',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">laravel</span> <span class="arg">new myapp</span>' },
                        { type: 'output', text: '' },
                        { type: 'ascii', text: '   <span class="info">_                               _</span>' },
                        { type: 'ascii', text: '  <span class="info">| |                             | |</span>' },
                        { type: 'ascii', text: '  <span class="info">| |     __ _ _ __ __ ___   _____| |</span>' },
                        { type: 'ascii', text: '  <span class="info">| |    / _` | \'__/ _` \\ \\ / / _ \\ |</span>' },
                        { type: 'ascii', text: '  <span class="info">| |___| (_| | | | (_| |\\ V /  __/ |</span>' },
                        { type: 'ascii', text: '  <span class="info">|______\\__,_|_|  \\__,_| \\_/ \\___|_|</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  Creating a <span class="version">laravel/laravel</span> project...' },
                        { type: 'output', text: '' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> Application ready in <span class="path">[myapp]</span>.' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> Built with love.' },
                        { type: 'cursor', text: '' }
                    ]
                },
                symfony: {
                    name: 'Symfony',
                    desc: 'Build with confidence at any scale',
                    url: 'https://symfony.com',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">symfony</span> <span class="arg">new myapp</span>' },
                        { type: 'output', text: '' },
                        { type: 'ascii', text: '  <span class="info">* Creating a new Symfony project with Composer</span>' },
                        { type: 'ascii', text: '  <span class="info">* Setting up the project under Git version control</span>' },
                        { type: 'ascii', text: '  <span class="info">(running git init /Projects/myapp)</span>' },
                        { type: 'ascii', text: '  <span class="info"></span>' },
                        { type: 'ascii', text: '  <span class="info">[OK] Your project is now ready in /Projects/myapp     </span>' },
                        { type: 'output', text: '' },
                        { type: 'cursor', text: '' }
                    ]
                },
                composer: {
                    name: 'Composer',
                    desc: 'Cargo/npm for PHP',
                    url: 'https://getcomposer.org',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">composer</span> <span class="arg">require laravel/sanctum</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="path">./composer.json</span> has been updated' },
                        { type: 'output', text: '  Running composer update <span class="version">laravel/sanctum</span>' },
                        { type: 'output', text: '  Loading composer repositories with package information' },
                        { type: 'output', text: '  Updating dependencies' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  Lock file operations: <span class="number">1</span> install, <span class="number">0</span> updates, <span class="number">0</span> removals' },
                        { type: 'success', text: '    - Locking <span class="version">laravel/sanctum</span> (<span class="number">v4.0.6</span>)' },
                        { type: 'output', text: '' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> Package <span class="version">laravel/sanctum</span> installed successfully' },
                        { type: 'cursor', text: '' }
                    ]
                },
                phpstan: {
                    name: 'PHPStan',
                    desc: 'TypeScript-like type safety',
                    url: 'https://phpstan.org',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">./vendor/bin/phpstan</span> <span class="arg">analyse</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="number">42</span>/<span class="number">42</span> <span class="progress">[▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓]</span> 100%' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  ───────────────────────────────────────────────────' },
                        { type: 'output', text: '' },
                        { type: 'success', text: '  <span class="checkmark">[OK]</span> No errors' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="output">💡 Tip: PHPStan is at level 9 — maximum strictness</span>' },
                        { type: 'cursor', text: '' }
                    ]
                },
                pest: {
                    name: 'Pest',
                    desc: 'Jest-style testing',
                    url: 'https://pestphp.com',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">./vendor/bin/pest</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="version">PEST</span>  <span class="output">v4.0</span>' },
                        { type: 'output', text: '' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it can create a book                     <span class="output">0.02s</span>' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it can publish a book                    <span class="output">0.01s</span>' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it validates required fields             <span class="output">0.01s</span>' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it belongs to an author                  <span class="output">0.02s</span>' },
                        { type: 'output', text: '' },
                        { type: 'success', text: '  Tests:    <span class="number">4 passed</span> (<span class="number">12</span> assertions)' },
                        { type: 'output', text: '  Duration: <span class="number">0.06s</span>' },
                        { type: 'cursor', text: '' }
                    ]
                },
                phpunit: {
                    name: 'PHPUnit',
                    desc: 'programmer-oriented testing framework',
                    url: 'https://phpunit.de/',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">./vendor/bin/phpunit --testdox</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '<span class="version">PHPUnit 12.5.4 by Sebastian Bergmann and contributors.</span>' },
                        { type: 'output', text: '' },
                        { type: 'success', text: 'Book (Vendor\App\Tests\Unit\Domain\Model\Book)' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it can create a book' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it can publish a book' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it validates required fields' },
                        { type: 'success', text: '  <span class="checkmark">✓</span> it belongs to an author' },
                        { type: 'output', text: '' },
                        { type: 'success', text: 'Tests: 4, Assertions: 12, Skipped: 0' },
                        { type: 'cursor', text: '' }
                    ]
                },
                pint: {
                    name: 'Pint',
                    desc: 'Code style fixer',
                    url: 'https://laravel.com/docs/pint',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">./vendor/bin/pint</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="version">PINT</span>  <span class="output">v1.18</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="checkmark">✓</span> <span class="path">app/Models/Book.php</span>                    <span class="output">fixed</span>' },
                        { type: 'output', text: '  <span class="checkmark">✓</span> <span class="path">app/Http/Controllers/BookController.php</span> <span class="output">fixed</span>' },
                        { type: 'output', text: '  <span class="checkmark">✓</span> <span class="path">tests/Feature/BookTest.php</span>             <span class="output">fixed</span>' },
                        { type: 'output', text: '' },
                        { type: 'success', text: '  <span class="number">3</span> files fixed' },
                        { type: 'cursor', text: '' }
                    ]
                },
                rector: {
                    name: 'Rector',
                    desc: 'Automated refactoring',
                    url: 'https://getrector.com',
                    lines: [
                        { type: 'prompt', text: '<span class="dollar">$</span> <span class="cmd">./vendor/bin/rector</span> <span class="arg">--dry-run</span>' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="number">12</span>/<span class="number">12</span> <span class="progress">[▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓]</span> 100%' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="number">3</span> files would have been changed:' },
                        { type: 'output', text: '' },
                        { type: 'output', text: '  <span class="checkmark">↳</span> <span class="version">AddVoidReturnTypeWhereNoReturnRector</span>' },
                        { type: 'output', text: '  <span class="checkmark">↳</span> <span class="version">ReadOnlyClassRector</span>' },
                        { type: 'output', text: '  <span class="checkmark">↳</span> <span class="version">TypedPropertyFromStrictConstructorRector</span>' },
                        { type: 'output', text: '' },
                        { type: 'success', text: '  <span class="checkmark">[OK]</span> Rector is done! <span class="number">3</span> files with changes' },
                        { type: 'cursor', text: '' }
                    ]
                }
            };

            function renderTerminal(tab) {
                const tool = terminalTools[tab];
                const output = document.getElementById('terminal-output');
                output.innerHTML = '';

                tool.lines.forEach((line, index) => {
                    const div = document.createElement('div');
                    div.className = 'terminal-line ' + line.type;
                    div.style.animationDelay = (index * 0.08) + 's';

                    if (line.type === 'cursor') {
                        div.classList.add('prompt');
                        div.innerHTML = '<span class="terminal-cursor"></span>';
                    } else {
                        div.innerHTML = line.text;
                    }

                    output.appendChild(div);
                });

                document.getElementById('terminal-link').href = tool.url;
                document.getElementById('terminal-tool-name').textContent = tool.name;
                document.getElementById('terminal-tool-desc').textContent = tool.desc;
            }

            document.querySelectorAll('.terminal-tab').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.terminal-tab').forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    renderTerminal(tab.dataset.terminal);
                });
            });

            // ===== SHARE MODAL =====
            const shareModal = document.getElementById('share-modal');
            const shareBtn = document.getElementById('share-btn');
            const modalShareText = 'Why PHP in 2026? TypeScript-level types, no build steps, immutability by default via readonly, enums, and more.';
            const modalShareUrl = 'https://whyphp.dev';

            // Set share links
            document.getElementById('modal-share-twitter').href =
                `https://twitter.com/intent/tweet?text=${encodeURIComponent(modalShareText)}&url=${encodeURIComponent(modalShareUrl)}`;
            document.getElementById('modal-share-bluesky').href =
                `https://bsky.app/intent/compose?text=${encodeURIComponent(modalShareText + ' ' + modalShareUrl)}`;
            document.getElementById('modal-share-linkedin').href =
                `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(modalShareUrl)}`;

            shareBtn.addEventListener('click', () => {
                shareModal.classList.add('active');
            });

            shareModal.addEventListener('click', (e) => {
                if (e.target === shareModal) {
                    shareModal.classList.remove('active');
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    shareModal.classList.remove('active');
                }
            });

            document.getElementById('modal-share-copy').addEventListener('click', async () => {
                await navigator.clipboard.writeText(modalShareUrl);
                const btn = document.getElementById('modal-share-copy');
                btn.innerHTML = '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Copied!';
                setTimeout(() => {
                    btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg> Copy link';
                    shareModal.classList.remove('active');
                }, 1500);
            });
        </script>
    </body>
</html>
