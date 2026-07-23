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
