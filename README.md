# abstract-interface-namespace
abstract interface namespace

- test 1

```
Создать класс Figure в пространстве имён My\Abstract с методами вычисления площади и
периметра, а также методом, выводящим информацию о фигуре на экран (тип, площадь, периметр).
Создать производные классы в пространстве имён My\Concrete\ : Rectangle(прямоугольник),
Circle(круг), Triangle(треугольник) со своими методами вычисления площади и периметра. 
Создать массив n фигур и вывести полную информацию о фигурах на экран.
```

- test 2
```
Создать Интерфейс Operation с методом calculate. Создать классы имплементирующие этот
Интерфейс(Plus, Minus, Mult, Div), каждый класс в конструктор принимает 2 числа и
каждый класс реализует метод calculate по своему. Создать класс Calculator устроенный
согласно шаблона Fluent Interface. Сделать так что-бы код из примера заработал. 
Допиши свои тесты:

$calculator = new Calculator();
assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 4
);
```

- test 2.1
```
Решено без промежуточных классов: не по заданию.
```

- test 2.2
```
Тоже не по заданию: использовал trait. Эксперимент, не доделан!
```

- test 2.3
```
Решено!

assert(
    $calculator->firstNumber(3)
        ->secondNumber(2)
        ->operation(Plus::class)
        ->result() == 5);
```