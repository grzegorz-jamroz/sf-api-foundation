# Changelog
## [v7.0.0] - 2025.10.26
### Add
- use Ifrost\ApiBundle\Traits\WithFindClassTrait in AbstractAnnotationFileLoader
- Add docker support for development environment

### Change
- Rename `Ifrost\ApiFoundation\Attribute\Api` attribute to `Ifrost\ApiFoundation\Attribute\ApiController` for better clarity
- update sf-api-bundle to [v7.0.1](https://github.com/grzegorz-jamroz/sf-api-bundle/releases/tag/v7.0.1))

# Changelog
## [v6.3.0] - 2023.12.14
### Add
- Support Symfony 7
  - update dependencies

## [v6.2.0] - 2023.11.27
### Add
- [RequestDataConstructable](src/Entity/RequestDataConstructable.php)

### Change
- [ApiEntityInterface](src/Entity/ApiEntityInterface.php)
  - extend with [RequestDataConstructable](src/Entity/RequestDataConstructable.php)

## [v6.1.3] - 2022.12.07
### Add
- Extend Api attribute
- Add Action enum
- Add ApiEntityInterface
- Add ApiControllerTrait
- Add routing features

[v7.0.0]: https://github.com/grzegorz-jamroz/sf-api-foundation/releases/tag/7.0.0
[v6.3.0]: https://github.com/grzegorz-jamroz/sf-api-foundation/releases/tag/6.3.0
[v6.2.0]: https://github.com/grzegorz-jamroz/sf-api-foundation/releases/tag/6.2.0
[v6.1.3]: https://github.com/grzegorz-jamroz/sf-api-foundation/releases/tag/6.1.3
