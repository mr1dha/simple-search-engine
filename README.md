# simple-search-engine
<p>Muhammad Ridha | 1808107010023</p>
Build simple search engine using information retrieval concept. 
<p>This project tested on Ubuntu 18.04 LTS</p>

<ol start="1">
<li>Pre-requisite</li>
<ul>
<li>Python</li>
<li>PHP</li>
<ul>
</ol>


<ol start="2">
<li>Clone Repository to Localhost</li>
</ol>
<pre><code>  $ git clone https://github.com/mr1dha/simple-search-engine.git </code></pre>

<ol start="3">
<li>Configuration for Windows user</li>
<p>If you are using Windows, change /core/engine.php on part "shell_exec("python core/query.py ".$n." ".$q);" on line 5 to:</p>
</ol>
<pre><code>  shell_exec("py core\query.py ".$n." ".$q); </code></pre>

<ol start="4">
<li>Run your Web server</li>
</ol>
<p>The next step is you need to run your web server such as Apache, Nginx, etc.</p>

<ol start="5">
<li>Open the website from localhost</li>
</ol>
<pre><code>  http://localhost/simple-search-engine </code></pre>
