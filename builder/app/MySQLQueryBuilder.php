<?php 
namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {
    private array $fields = [];
    private string $table = '';
    private array $conditions = [];

    public function select(array $fields): MySQLQueryBuilder {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table): MySQLQueryBuilder {
        $this->table = $table;
        return $this;
    }

    public function where(string $field, string $operator, string $value): MySQLQueryBuilder {
        $this->conditions[] = "$field $operator '$value'";
        return $this;
    }

    public function getQuery(): string {
        $query = "SELECT " . implode(", ", $this->fields) . " FROM " . $this->table;
        if (!empty($this->conditions)) {
            $query .= " WHERE " . implode(" AND ", $this->conditions);
        }
        return $query;
    }
}
