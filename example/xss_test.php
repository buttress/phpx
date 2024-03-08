<?php

require_once __DIR__ . '/../vendor/autoload.php';


$defaultXss = base64_encode('<img src="" onerror="alert(window.location)" />');
$xss = base64_decode($_POST['data'] ?? $defaultXss);

$x = new Buttress\PHPX();

$icon = $x->render($x->svg(xmlns: 'http://www.w3.org/2000/svg', viewBox: '0 0 24 24', fill: 'white', c: [
    $x->path(fill_rule: 'evenodd', clip_rule: 'evenodd', d: 'M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z')
]));

// Call methods to create tags
$x->out($x->html(c: [
    $x->head(c: [
        $x->meta(charset: 'UTF-8'),
        $x->meta(name: 'viewport', content: 'width=device-width, initial-scale=1.0'),
        $x->script(src: 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp'),
        $x->link(rel: 'icon', type: 'image/svg+xml', href: 'data:image/svg+xml,' . $icon),
        $x->title(c: 'PHPX: XSS Test'),
    ]),
    $x->body(c: [
        $x->div(class: 'flex', c: [
            // Introduction half
            $x->div(class: 'w-1/2 prose max-w-none flex flex-column items-center justify-center', c: $x->div(c: [
                $x->form(class: 'text-center', method: 'POST', action: '', c: [
                    $x->h2(class: 'mb-1', c: 'Attempt XSS'),
                    $x->input(type: 'hidden', name: 'data', id: 'xssfield', value: $_POST['data'] ?? $defaultXss),
                    $x->div(c: [
                        $x->textarea(class: 'w-96 h-32', type: 'text', onkeyup: 'xssfield.value = btoa(this.value)', c: $xss)
                    ]),
                    $x->button(class: 'px-3 border border-blue-800 text-blue-800 hover:text-white transition-colors hover:bg-blue-700 focus:bg-blue-600', type: 'submit', c: 'Submit'),
                ]),

                $x->div(class: 'text-center text-gray-300 my-3 ', c: str_repeat('--**__', 3)),

                $x->div(class: 'leading-5 text-center w-full', c: [
                    'Your XSS gets injected into',
                    $x->br(),
                    'the template using PHPX:',
                    $x->br(),
                    $x->code(alt:'', c: '$x->div(c: $xss)')
                ]),
            ])),

            // XSS half
            $x->div(class: 'w-1/2 text-sm bg-gray-200 min-h-screen w-50 flex flex-col items-start font-mono', c: [
                $x->div(class: 'bg-gray-300 w-full py-3 text-center', c: 'XSS Attempt'),
                $x->div(class: 'h-full w-full flex items-center justify-center', c: $xss),
            ])
        ]),
    ])
]));
