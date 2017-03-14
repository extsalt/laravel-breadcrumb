<?php

namespace Mateusjatenee\Breadcumb\Tests;

class BreadcumbGeneratorTest extends TestCase
{

    /** @test */
    public function it_sets_the_correct_depth()
    {
        $generator = app('breadcumbGenerator');

        $generator->set('users.show');

        $this->assertEquals([
            'Users', 'Show',
        ], $generator->toArray());
    }

    /** @test */
    public function it_transforms_underlines_into_spaces()
    {
        $generator = app('breadcumbGenerator');

        $generator->set('users.new_user');

        $this->assertEquals([
            'Users', 'New User',
        ], $generator->toArray());
    }
}
