<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

// uses(Tests\TestCase::class)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/
expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

expect()->extend('toBeFasterThan', function (float $expected) {
    /** @var \Pest\Expectation $this */
    $this->toBeLessThanOrEqual($expected, timing_error($expected, $this->value));
    return $this;
});


/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

/**
 * @param callable $test
 * @param positive-int $iterations
 * @return float
 */
function timing_us(callable $test, int $iterations = 1): float
{
    $i = $iterations;
    $total = 0.0;

    while ($i-- > 0) {
        ob_start();
        $took = -hrtime(true);
        $test();
        $took += hrtime(true);
        $total += $took / 1e6;
        ob_end_clean();
    }

    $avg = $total / $iterations;
    return $avg * 1000;
}

function timing_error(float $expectedUs, float $actualUs): string
{
    return sprintf(
        'Took <info>%s</> (<info>%s%%</> more than allowed)',
        format_us($actualUs),
        round(($actualUs / $expectedUs - 1) * 100, 2),
    );
}

function format_us(float $ms): string
{
    $unit = 'μs';
    if ($ms > 1000) {
        $unit = 'ms';
        $ms /= 1000;
    }
    if ($ms > 1000) {
        $unit = 's';
        $ms /= 1000;
    }

    return round($ms, 3) . $unit;
}
