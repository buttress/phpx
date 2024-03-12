<?php

use Buttress\Phpx\Phpx;

$readme = file_get_contents(__DIR__ . '/../README.md');

// Readme fixture
class Product
{
    public function __construct(public string $title, public string $description) {}
}

// Readme getter
function getProduct()
{
    return new Product('Title', 'Description');
}

dataset('all_blocks', function () use ($readme) {
    preg_match_all('~```php(.+?)```~s', $readme, $matches);
    foreach ($matches[1] as $key => $match) {
        $match = trim($match);
        $lines = array_filter(explode("\n", $match));
        $firstLine = $lines[0] === '/**' ? $lines[1] : $lines[0];
        yield sprintf("#%d %s...", $key + 1, $firstLine) => [$match, $matches];
    }
});

test('all code blocks render', function (string $block) {
    $x = new Phpx();
    $test = true;

    ob_start();
    eval($block);
    ob_end_clean();

    $this->addToAssertionCount(1);
})->with('all_blocks');

test('main block is accurate', function () use ($readme) {
    expect(preg_match('~```php(.*?)```\s+becomes\s+```html(.+?)```~s', $readme, $matches))->toBe(1);
    [, $php, $html] = $matches;

    ob_start();
    eval($php);
    expect(ob_get_clean())->toBe(preg_replace('/\n\s*/', '', $html));
});

it('looks basically right', function () use ($readme) {
    expect($readme)
        ->toContain('composer require phpx/phpx')
        ->toContain('[PHPX Compile](https://github.com/buttress/phpx-compile)')
        ->toContain('[PHPX Templates](https://github.com/buttress/phpx-templates)');
});
