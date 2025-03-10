<?php

namespace App;

interface QueryBuilderInterface {
    public function select(array $fields): QueryBuilderInterface;
    public function where(string $field, string $operator, string $value): QueryBuilderInterface;
    public function from(string $table): QueryBuilderInterface;
    public function getQuery(): string;
}
