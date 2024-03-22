<?php

namespace Tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use App\Core\Greetings;

class LearningTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $name = "Nana";
        $greeter = new Greetings();
        $greeting = $greeter->greet($name);

        // $this->assertSame('Hello, ' . $name . '!', $greeting);
        // $this->assertEquals('Hello, ' . $name . '!', $greeting);
        // $this->assertArrayHasKey('to', ['to' => 'ruhul']);
        // $this->assertContains('ruhul', ['to' => 'ruhul']);
        // $this->assertArrayNotHasKey('ruhul', ['to' => 'ruhul']);
        // $this->assertContainsEquals('ruhul', ['to' => 'ruhul']);
        // $this->assertContainsOnly('string', ['1', '2', 3]);
        // $this->assertContainsOnly('string', ['1', '2', '3']);
        // $this->assertContainsOnly('int', [1, 2]);
        // $this->assertNotContainsOnly('string', ['1', '2', 3]);

        /*
        $this->assertContainsOnlyInstancesOf(
            Greetings::class,
            [new Greetings]
        );
        */

        $this->assertObjectHasProperty('data', new Greetings);


    }

    public function test_assert_count(): void
    {
        $greeter = new Greetings();
        $this->assertCount(2, $greeter->dataList());
//        $this->assertSameSize([1, 2], [1,6]);
//        $this->assertEmpty([]);
//        $this->assertGreaterThan(2, 1);
//        $this->assertGreaterThanOrEqual(2, 1);
//        $this->assertLessThan(1, 2);
//        $this->assertLessThanOrEqual(1, 2);
    }

}