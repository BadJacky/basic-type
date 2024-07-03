<?php

namespace BadJacky\BasicType;

use AllowDynamicProperties;

class BasicType
{
    protected mixed $value;

    public function asInt(): int
    {
        if ('integer' !== gettype($this->value)) {
            throw new \TypeError('Value is not an integer');
        }
        return $this->value;
    }

    public function asString(): string
    {
        if ('string' !== gettype($this->value)) {
            throw new \TypeError('Value is not a string');
        }
        return $this->value;
    }

    public function asFloat(): float
    {
        if ('double' !== gettype($this->value)) {
            throw new \TypeError('Value is not a float');
        }
        return $this->value;
    }

    public function asArray(): array
    {
        if ('array' !== gettype($this->value)) {
            throw new \TypeError('Value is not an array');
        }
        return $this->value;
    }

    public function asBool(): bool
    {
        if ('boolean' !== gettype($this->value)) {
            throw new \TypeError('Value is not a bool');
        }
        return $this->value;
    }

    public function asObject(): object
    {
        if ('object' !== gettype($this->value)) {
            throw new \TypeError('Value is not an object');
        }
        return $this->value;
    }

    public function asNull(): null
    {
        if (false === is_null($this->value)) {
            throw new \TypeError('Value is not null');
        }
        return null;
    }

    public function asCallable(): callable
    {
        if (false === is_callable($this->value)) {
            throw new \TypeError('Value is not callable');
        }
        return $this->value;
    }

    public function asIterable(): iterable
    {
        if (false === is_iterable($this->value)) {
            throw new \TypeError('Value is not iterable');
        }
        return $this->value;
    }

    public function setValue(mixed $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function asInsteadOf(mixed $value): mixed
    {
        if (is_object($value)) {
            $value = get_class($value);
        }
        if (false === $this->value instanceof $value) {
            throw new \TypeError('Value is not an instance of ' . $value);
        }
        return $this->value;
    }
}
