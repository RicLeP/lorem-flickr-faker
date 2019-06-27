Lorem Flickr Provider
====================

## Install

Add `riclep/lorem-flickr-faker` to your composer.json or from CLI:

```
$ composer require riclep/lorem-flickr-faker
```

## Usage

```php
$faker = Faker\Factory::create();
$faker->addProvider(new RicLeP\Faker\LoremFlickrFakerProvider($faker));

// size
$url = $faker->loremFlickrImageUrl(640, 489); // https://loremflickr.com/640/480
```
