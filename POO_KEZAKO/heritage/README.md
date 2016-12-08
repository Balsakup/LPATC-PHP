## L'héritage en PHP

Pour tester le programme, il suffit de faire `php test.php`

Ici, la classe mère est `Vehicule`, les classes `Voiture`, `Moto` et `Avion` héritent de `Vehicule`

la méthode `__toString()` est appelée automatiquement lors de l'affichage d'une instance

```php
class Test {

    public function __toString() {
        return 'Hello World';
    }

}

$test = new Test();
echo "$test\n"; // Affiche: Hello World
```
