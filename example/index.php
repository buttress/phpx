<?php

require_once __DIR__ . '/../vendor/autoload.php';

$features = [
    'Prevents XSS like <img src="" onerror="alert(window.location)" /> by default',
    'Supports all HTML5 elements',
    'Lightweight pure PHP',
    'PHP 8+'
];

$x = new Buttress\PHPX();

$favIcon = $x->render($x->svg(xmlns: 'http://www.w3.org/2000/svg', viewBox: '0 0 24 24', fill: 'white', c: $x->path(fill_rule: 'evenodd', clip_rule: 'evenodd', d: 'M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z')));
$githubIcon = $x->render($x->svg(xmlns: 'http://www.w3.org/2000/svg', viewBox: '0 0 24 24', fill: 'currentColor', c: $x->path(d: 'M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12')));

// Call methods to create tags
$x->out($x->html(c: [
    $x->head(c: [
        $x->meta(charset: 'UTF-8'),
        $x->meta(name: 'viewport', content: 'width=device-width, initial-scale=1.0'),
        $x->link(rel: 'stylesheet', href: './styles.css'),
        $x->link(rel: 'icon', type: 'image/svg+xml', href: 'data:image/svg+xml,' . $favIcon),
        $x->title(c: 'PHPX: PHP DOM but fluent'),
    ]),
    $x->body(c: [
        $x->div(class: 'flex', c: [
            // Introduction half
            $x->div(class: 'lg:w-1/2 w-full prose max-w-none flex flex-column items-center justify-center', c: $x->div(c: [
                $x->h1(class: 'mb-0 text-3xl flex items-center justify-between', c: [
                    'PHPX',
                    $x->a(class: 'hover:text-purple-900 hover:box-shadow transition-all', href: 'https://github.com/buttress/phpx', c: [
                        $x->div(class: 'w-6', c: $x->raw($githubIcon))
                    ]),
                ]),
                $x->sup(class: 'mb-2', c: $x->em(c: 'PHP DOM but fluent')),
                $x->ul(class: 'list-disc', c: [
                    // Supports loops
                    ...$x->foreach($features, fn($feature) => $x->li(c: $feature)),

                    // Supports conditionals
                    ...$x->if(
                        date('w') % 6 === 0,
                        fn() => $x->li(c: 'Great for writing code on the weekend'),
                        fn() => $x->li(c: 'Great for writing code during the week'),
                    ),
                ]),
            ])),

            // Source code half
            $x->div(class: 'lg:w-1/2 w-full text-sm bg-gray-200 min-h-screen w-50 flex items-center font-mono', c: [

                $x->div(class: 'flex mr-2 overflow-scroll h-screen', c: [
                    // Convenient fluent variable capture method
                    ...$x->with(trim(file_get_contents(__FILE__)), fn(string $contents) => [
                        $x->div(class: 'text-gray-400 mr-2 text-right px-1 h-screen', c: $x->foreach(
                            range(1, count(explode("\n", $contents))),
                            fn($line) => $x->div(c: "{$line}")
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
