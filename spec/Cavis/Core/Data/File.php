<?php

namespace spec\Cavis\Core\Data;

use PHPSpec2\ObjectBehavior;

class File extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Cavis\Core\Data\File');
    }

    function it_should_have_a_name_attribute()
    {
        $this->name->shouldBe(NULL);
    }

    function it_should_have_an_tmp_name_attribute()
    {
        $this->tmp_name->shouldBe(NULL);
    }

    function it_should_have_a_mimetype_attribute()
    {
        $this->mimetype->shouldBe(NULL);
    }

    function it_should_have_a_filesize_attribute()
    {
        $this->filesize_in_bytes->shouldBe(NULL);
    }

    function it_should_have_an_error_attribute()
    {
        $this->error_code->shouldBe(NULL);
    }

    function it_should_have_a_full_path()
    {
        $this->full_path->shouldBe(NULL);
    }
}
