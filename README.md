<p align="center">
    <code lang="html">&lt;PHPX/&gt;</code><br><br>
    An intuitive DOMDocument wrapper that makes it easy to write safe valid HTML in plain PHP.
</p>

---

```php
$x = new Buttress\Phpx\Phpx();

$github = 'https://github.com/buttress/phpx';

echo $x->render(
    $x->main(class: 'content', c: [
        $x->h1(id: 'title', c: 'Hello World!'),
        $x->p(c: [
            'Brought to you by ',
            $x->a(href: $github, c: 'PHPX')
        ]),
    ])
);
```

becomes

```html
<main class="content">
    <h1 id="title">Hello World!</h1>
    <p>
        Brought to you by <a href="https://github.com/buttress/phpx">PHPX</a>
    </p>
</main>
```

## Installation

To install PHPX, use composer:

```bash
composer require phpx/phpx
```

## Usage

```php
/** Basic Usage */

// <span>foo</span>
$x->render($x->span(c: 'Foo'));

// <a href='#'>foo</span>
$x->render($x->a(href: '#', c: 'Foo'));

// <div><span>Hello</span><strong>world</strong></div>
$x->render($x->div(c: [
    $x->span(c: 'Hello'),
    $x->strong(c: 'world'),
]));

// Context specific XSS protection
$xss = '\'"<>"';

// <span title="'&quot;&lt;&gt;&quot;">'"&lt;&gt;"</span>
$x->render($x->span(title: $xss, c: $xss));
```

### Advanced Usage
```php
/**
 * $x->if : Conditional
 */

// Renders either: <div>There are <strong>100</strong> items</div>
// or <div>No items found</div>

$total = 100;
$result = $x->render(
    ...$x->if(
        $total > 0,
        // if
        fn() => $x->div(c: ['There are ', $x->strong(c: (string) $total), ' items']),
        // else
        fn() => $x->div(c: 'No items found.')
    )
);


/**
 * $x->foreach : Loop over a set of items
 */

$features = ['safe', 'valid', 'simple'];
// <li>safe</li><li>valid</li><li>simple</li>
$result = $x->render(
    ...$x->foreach($features, fn(string $feature) => $x->li(c: ucfirst($feature)))
);

/**
 * $x->with : Capture a variable
 */

// Only run `getProduct()` when `$test` is true
$result = $x->render(
    $x->div(c: [
        ...$x->if($test, fn() => $x->with(getProduct(), fn(Product $product) => [
            $x->h3(c: $product->title),
            $x->p(c: $product->description)
        ]))
    ])
);

/**
 * Mix HTML and PHPX
 */
?>
<div class='container'>
    <?= $x->render($x->h1(c: getProduct()->title)) ?>
    <span>The best product around</span>
</div>
```

## Related Projects
- [PHPX Compile](https://github.com/buttress/phpx-compile) An experimental compiler for PHPX. Significantly reduces function calls.
- [PHPX Templates](https://github.com/buttress/phpx-templates) An experimental template engine built around PHPX and PHPX Compile.

## Contributing

Contributions to PHPX are always welcome! Feel free to fork the repository and submit a pull request.

## License

PHPX is released under the MIT License.

## Githooks
To add our githooks and run tests before commit:
```bash
git config --local core.hooksPath .githooks
```

## Support

If you encounter any problems or have any questions, please open an issue on GitHub.

Thanks for checking out PHPX ❤️