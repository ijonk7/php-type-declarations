<?php
class Person {
    // Properties
    public string $var_string_1;
    public int $var_int_1;
    public float $var_float_1;
    public bool $var_bool_1;
    public array $var_array_1;
    public Car $var_object_person_1;
    // public null $var_null_1;   // Null can not be used as a standalone type

    // Methods
    public function string_1(string $param_1): string {
        $this->var_string_1 = $param_1;
        return $this->var_string_1;
    }

    public function integer_1(int $param_1): int {
        $this->var_int_1 = $param_1;
        return $this->var_int_1;
    }

    public function float_1(float $param_1): float {
        $this->var_float_1 = $param_1;
        return $this->var_float_1;
    }

    public function bool_1(bool $param_1): bool {
        $this->var_bool_1 = $param_1;
        return $this->var_bool_1;
    }

    public function array_1(array $param_1): array {
        $this->var_array_1 = $param_1;
        return $this->var_array_1;
    }

    public function object_1(Car $param_1): Car {
        $object_car_1 = $param_1;
        $this->var_object_person_1 = $object_car_1;
        return $this->var_object_person_1;
    }
}

$person = new Person();

// Type Declarations String
echo $person->string_1('STRING');   // Print: STRING
echo "<br />";
echo gettype($person->string_1('STRING'));      // Print: string
echo "<br />";

// Type Declarations Integer
echo $person->integer_1(2068);       // Print: 2068
echo "<br />";
echo gettype($person->integer_1(2068));      // Print: integer
echo "<br />";

// Type Declarations Float
echo $person->float_1(20.68);        // Print: 20.68
echo "<br />";
echo gettype($person->float_1(20.68));       // Print: double
echo "<br />";

// Type Declarations Boolean
echo $person->bool_1(true);      // Print: 1
echo "<br />";
echo gettype($person->bool_1(true));     // Print: boolean
echo "<br />";

// Type Declarations Array
$array_1 = $person->array_1(array("Volvo", "BMW", "Toyota"));
echo $array_1[0];        // Print: Volvo
echo "<br />";
echo gettype($array_1);      // Print: array
echo "<br />";

class Car {
    // Properties
    public $name;
    public $color;

    // Methods
    public function get_name() {
        return $this->name = 'Honda';
    }
    public function get_color() {
        return $this->color = 'Black';
    }
}

class Motor {
    // Properties
    public $name;
    public $color;

    // Methods
    public function get_name() {
        return $this->name = 'Yamaha';
    }
    public function get_color() {
        return $this->color = 'Yellow';
    }
}

// Type Declarations Object
$object_car_1 = $person->object_1(new Car);
echo "<br />";
echo print_r($object_car_1);     // Print: Car Object ( [name] => [color] => ) 1
echo "<br />";
echo gettype($object_car_1);     // Print: object
?>
