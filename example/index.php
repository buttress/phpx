<?php
require_once __DIR__ . '/../vendor/autoload.php';

$features = [
    'Prevents XSS like <img src="" onerror="alert(window.location)" /> by default',
    'Supports all HTML5 elements',
    'Lightweight pure PHP',
    'PHP 8+'
];

$x = new Buttress\PHPX();

$icon = $x->render($x->svg(xmlns: 'http://www.w3.org/2000/svg', viewBox: '0 0 24 24', fill: 'white', c: [
    $x->path(fill_rule: 'evenodd', clip_rule: 'evenodd', d: 'M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z')
]));

// Call methods to create tags
$x->out($x->html(c: [
    $x->head(c: [
        $x->meta(charset: 'UTF-8'),
        $x->meta(name: 'viewport', content: 'width=device-width, initial-scale=1.0'),
        $x->link(rel: 'stylesheet', href: './styles.css'),
        $x->link(rel: 'icon', type: 'image/svg+xml', href: 'data:image/svg+xml,' . $icon),
        $x->title(c: 'PHPX: PHP DOM but fluent'),
    ]),
    $x->body(c: [
        $x->div(class: 'flex', c: [
            // Introduction half
            $x->div(class: 'w-1/2 prose max-w-none flex flex-column items-center justify-center', c: $x->div(c: [
                $x->h1(class: 'mb-0 text-3xl', c: 'PHPX'),
                $x->sup(class: 'mb-2', c: $x->em(c: 'PHP DOM but fluent')),
                $x->ul(class: 'list-disc', c: [
                    // Supports loops
                    ...$x->foreach($features, fn($feature) => $x->li(c: $feature)),

                    // Supports conditionals
                    ...$x->if(
                        date('A') === 'am',
                        fn() => $x->li(c: 'Great for mornings'),
                        fn() => $x->li(c: 'Great for afternoons'),
                    ),
                ]),
            ])),

            // Source code half
            $x->div(class: 'w-1/2 text-sm bg-gray-200 min-h-screen w-50 flex flex-column items-center font-mono', c: [

                $x->div(class: 'flex mr-2 overflow-scroll h-screen', c: [
                    // Convenient fluent variable capture method
                    ...$x->with(file_get_contents(__FILE__), fn(string $contents) => [
                        $x->div(class: 'text-gray-400 mr-2 text-right px-1 h-screen', c: $x->foreach(
                            range(1, count(explode("\n", $contents))),
                            fn ($line) => $x->div(c: "{$line}")
                        )),
                        $x->raw(str_replace(
                            '$x',
                            $x->render($x->strong(class: 'bg-purple-200 text-purple-900', c: '$x')),
                            highlight_string($contents, true)
                        )),
                    ])
                ]),
            ])
        ]),
    ])
]));