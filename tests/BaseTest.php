<?php

it('renders elements', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(class: 'foo', c: $x->i(c: 'test'))))
        ->toBe('<div class="foo"><i>test</i></div>');
});

it('handles foreach loops', function () {
    $x = new \Buttress\PHPX();

    expect($x->render(
        $x->ul(c: [
            ...$x->foreach(
                range(1, 3),
                fn($i) => $x->li(c: "Item {$i}")
            )
        ]))
    )->toBe('<ul><li>Item 1</li><li>Item 2</li><li>Item 3</li></ul>');
});

it('handles conditionals', function () {
    $x = new \Buttress\PHPX();

    expect($x->render(
        $x->div(c: [
            ...$x->if(true, fn() => $x->span(c: 'worked'), fn() => $x->span(c: 'failed')),
            ...$x->if(false, fn() => $x->span(c: 'failed'), fn() => $x->span(c: 'worked')),
        ]),
    ))->toBe('<div><span>worked</span><span>worked</span></div>');
});

it('handles data and aria', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(data: ['foo' => 'baz'], aria: ['baz' => 'foo'])))
        ->toBe('<div data-foo="baz" aria-baz="foo"></div>');
});

it('corrects hyphenated attributes', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(foo_baz: 'bar', http_equiv: 'foo')))
        ->toBe('<div foo_baz="bar" http-equiv="foo"></div>');
});

it('supports vue style attributes', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(attributes: ['v-bind:click' => 'foo', 'v-slot:baz' => 'test'])))
        ->toBe('<div v-bind:click="foo" v-slot:baz="test"></div>');
});

it('supports raw text', function (string $text) {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(c: $x->raw($text))))
        ->toBe('<div>' . $text . '</div>');
})->with([
    '<',
    '%nbsp;',
    ''
]);

it('supports comments', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(c: $x->comment('foo'))))
        ->toBe('<div><!--foo--></div>');
});

it('supports variable capture', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(c: $x->with(2 + 3, fn($value) => $x->span(c: "{$value}")))))
        ->toBe('<div><span>5</span></div>');
});

it('handles converting booleans', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->div(test: true)))->toBe('<div test="true"></div>');
});

it('includes doctype with html', function () {
    $x = new \Buttress\PHPX();
    expect($x->render($x->html()))->toBe("<!DOCTYPE html>\n<html></html>\n");
});

it('outputs', function () {
    $x = new \Buttress\PHPX();
    ob_start();
    $x->out($x->div());
    expect(ob_get_clean())->toBe('<div></div>');
});