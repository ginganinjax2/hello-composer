<?php
declare(strict_types=1);

namespace ginganinjax2\HelloComposer;

class Zingo
{
    private string $text;

    public function __construct(string $text = '')
    {
        $this->text = $text;
    }

    public function __toString(): string
    {
        return $this->text ?? '';
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
