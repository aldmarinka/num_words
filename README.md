#Cклонение слова после числительного

Склоняет слова, записанные после числительного

##Требования
- PHP 7.4

##Установка
```bash
$ composer require aldmarinka/num_words
```

##Использование
```php
echo (new WordProcessor())->getNumWords(5, ['арбуз', 'арбуза', 'арбузов'])
```