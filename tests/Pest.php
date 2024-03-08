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

expect()->extend('toTakeLessThan', function (float $seconds, int $iterations = 1) {
    $ms = max(0.0001, $seconds);
    $i = $iterations;
    $total = 0;

    while ($i-- > 0) {
        ob_start();
        $took = -hrtime(true);
        ($this->value)();
        $took += hrtime(true);
        $total += $took / 1e6;
        ob_end_clean();
    }

    $avg = $total / $iterations;

    echo sprintf("Took <info>%s</> on average.", format_ms($avg));
    return expect($avg < $ms)->toBeTrue(sprintf(
        'Callable required more than %s. Took %f%% more time (%s)',
        format_ms($ms),
        (($avg / $ms) * 100) - 100,
        format_ms($avg)
    ));
});

function format_ms(float $ms)
{
    $unit = 'ms';
    if ($ms > 1000) {
        $unit = 's';
        $ms /= 1000;
    } elseif ($ms < 1) {
        $unit = 'μs';
        $ms *= 1000;
    }

    return round($ms, 3) . $unit;
}

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

function something()
{
    // ..
}
