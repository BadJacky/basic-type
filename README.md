
# Basic Type Assert

Basic Type Assert is a PHP package designed to simplify and enhance type assertions in your applications.

## Installation

Install the package via Composer:

```bash
composer require badjacky/basic-type
```

## Usage

Here is a basic usage example:

```php
use function BadJacky\BasicType\type;


// Example usage
type(1)->asInt(); // 1
type(['a'])->asArray(); // ['a']
type('string')->asString(); // 'string'
type(1.1)->asFloat(); // 1.1
type(true)->asBool(); // true
type(null)->asNull(); // null
type(new stdClass())->asObject(); // stdClass

```

## Testing

To run tests, use the following command:

```bash
composer test
```

## Changelog

See [CHANGELOG](CHANGELOG.md) for recent updates.

## Contributing

See [CONTRIBUTING](CONTRIBUTING.md) for contribution guidelines.

## Security

If you find any security-related issues, please email zhangqi.chen.cn@gmail.com instead of using the issue tracker.

## Credits

- [BadJacky](https://github.com/BadJacky)
- All contributors

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE.md) file for details.

## Acknowledgments

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
