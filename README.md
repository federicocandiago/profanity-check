# Profanity Check

This package's ```isClean()``` function returns a boolean value according to whether the input string contains any blacklisted words or word parts. It's been designed to work with [Laravel\Lumen 7.x](https://github.com/laravel/lumen-framework).


This code is based on [sworup/ProfanityFilter](https://github.com/sworup/ProfanityFilter) which is on turn based on [Fastwebmedia/Profanity-Filter](https://github.com/fastwebmedia/Profanity-Filter). 
## Install

Please refer to the [composer documentation](https://getcomposer.org/doc/05-repositories.md)

## Usage

``` php
$profanity_filter = new sworup\ProfanityFilter();
echo $profanity_filter->isClean('hello world');
```

The above code would return:

``` php
>> true
```

## Credits

For the original version: 

- [Sworup Shakya](https://github.com/sworup/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

