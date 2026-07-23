            <section id="features" class="reveal">
                <h2>The features that make PHP shine</h2>

                <p>Not one trick. A whole toolkit for code that's type-safe, expressive, and a joy to maintain.</p>

                <div class="feature-grid">
                    <x-feature-card title="Enums" description="Type-safe constants that carry values and behavior.">
<pre><code><span style="color:#c678dd;">enum</span> <span style="color:#e5c07b;">Status</span>: <span style="color:#e5c07b;">string</span>
{
    <span style="color:#c678dd;">case</span> <span style="color:#e06c75;">Published</span> = <span style="color:#98c379;">'published'</span>;
}</code></pre>
                    </x-feature-card>
                    <x-feature-card title="Traits" description="Compose reusable behavior across unrelated classes.">
<pre><code><span style="color:#c678dd;">final class</span> <span style="color:#e5c07b;">Book</span>
{
    <span style="color:#c678dd;">use</span> <span style="color:#e5c07b;">HasTimestamps</span>, <span style="color:#e5c07b;">HasSlug</span>;
}</code></pre>
                    </x-feature-card>
                    <x-feature-card title="match" description="Exhaustive, strict branching with no fall-through.">
<pre><code><span style="color:#e06c75;">$label</span> = <span style="color:#c678dd;">match</span> (<span style="color:#e06c75;">$status</span>) {
    <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Draft</span> => <span style="color:#98c379;">'Draft'</span>,
    <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Published</span> => <span style="color:#98c379;">'Live'</span>,
};</code></pre>
                    </x-feature-card>
                    <x-feature-card title="readonly" description="Immutability enforced by the language, not convention.">
<pre><code><span style="color:#c678dd;">final readonly class</span> <span style="color:#e5c07b;">Money</span>
{
    <span style="color:#c678dd;">public function</span> <span style="color:#61afef;">__construct</span>(
        <span style="color:#c678dd;">public</span> <span style="color:#e5c07b;">int</span> <span style="color:#e06c75;">$amount</span>,
    ) {}
}</code></pre>
                    </x-feature-card>
                    <x-feature-card title="Named arguments" description="Order-free, self-documenting calls.">
<pre><code><span style="color:#c678dd;">new</span> <span style="color:#e5c07b;">Book</span>(
    title: <span style="color:#98c379;">'Modern PHP'</span>,
    status: <span style="color:#e5c07b;">Status</span>::<span style="color:#e06c75;">Draft</span>,
);</code></pre>
                    </x-feature-card>
                    <x-feature-card title="Nullsafe" description="Chain through possibly-null values without nested checks.">
<pre><code><span style="color:#e06c75;">$country</span> = <span style="color:#e06c75;">$user</span>?-><span style="color:#e06c75;">address</span>?-><span style="color:#e06c75;">country</span>;</code></pre>
                    </x-feature-card>
                    <x-feature-card title="Attributes" description="Structured, first-class metadata read at runtime.">
<pre><code><span style="color:#5c6370;">#[</span><span style="color:#e5c07b;">Route</span>(<span style="color:#98c379;">'/books'</span>, methods: [<span style="color:#98c379;">'GET'</span>])<span style="color:#5c6370;">]</span>
<span style="color:#c678dd;">public function</span> <span style="color:#61afef;">index</span>(): <span style="color:#e5c07b;">View</span></code></pre>
                    </x-feature-card>
                </div>
            </section>
