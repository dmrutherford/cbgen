<?php
    // WORD POOLS
    // attributive
    $attributives = file('attributives.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $attributive = $attributives[array_rand($attributives)];
    // adjective
    $adjectives = file('adjectives.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $adjective = $adjectives[array_rand($adjectives)];
    // noun
    $nouns = file('nouns.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $noun = $nouns[array_rand($nouns)];
    // LOGIC
    // generate title
    $title = 'The ' . $attributive . ' ' . $adjective . ' ' . $noun;
    // generate sharelink
    $share = rawurlencode($title);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Children&rsquo;s Book Title Generator</title>
    <meta name="description" content="A children&rsquo;s book title generator. Or niche erotica title generator. I&rsquo;m honestly not sure." />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css" />
    <style>
html {
    background: #f60;
    margin: 0;
    padding: 8em 0;
}
body {
    background: white;
    margin: 0;
    padding: 6em 2em;
    font-family: "Lato", sans-serif;
    font-weight: 300;
    text-align: center;
}
.container {
    margin: 0 auto;
    max-width: 30em;
}
.title {
    font-size: 2em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin: 0 0 1em;
}
h1 {
    font-size: 1em;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin: 2em 0;
}
.links {
    margin: 2em 0 0;
}
a {
    color: blue;
    text-decoration: none;
}
hr {
    border: 0;
    height: 2px;
    width: 4em;
    background: #f60;
}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <div class="container">
    <p class="title"><?php echo $title; ?></p>
    <hr />
    <h1>A Children&rsquo;s Book Title Generator by D&nbsp;M&nbsp;Rutherford</h1>
    <hr />
    <p class="links"><a href="https://twitter.com/share?text=‘<?php echo $share; ?>’&url=https%3A%2F%2Fwww.dmrutherford.com%2Fcbgen%2F&via=dmrutherford" title="Tweet this title">Tweet It</a>&emsp; &middot; &emsp;<a href="javascript:window.location.reload();" title="Get another title">Get Another</a></p>
    </div>
</body>
</html>
