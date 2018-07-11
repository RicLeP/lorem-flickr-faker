<?php


namespace Faker\Provider;
use Faker\Generator;
use Faker\Provider\Base;


class LoremFlickrFaker extends Base
{
	/**
	 * Generate the URL that will return a random image
	 *
	 * Set randomize to false to remove the random GET parameter at the end of the url.
	 *
	 * @example 'https://loremflickr.com/640/480/?12345'
	 *
	 * @param integer $width
	 * @param integer $height
	 * @param string|array|null $category
	 * @param bool $all
	 * @param bool $lock
	 * @param bool $randomize

	 *
	 * @return string
	 */
	public static function loremFlickrImageUrl($width = 640, $height = 480, $category = null, $all = false, $lock = true, $randomize = true)
	{
		$baseUrl = "https://loremflickr.com";
		$url = "{$width}/{$height}/";


		if ($category) {
			if (is_array($category)) {
				$category = implode(',', $category);
			}

			$url .= "{$category}/";
		}

		if ($all) {
			$url .= "all/";
		}

		if ($lock) {
			$url .= '?lock=' . static::randomNumber(5, true);
		}

		// has to be lock or random
		if (!$lock && $randomize) {
			$url .= '?random=' . static::randomNumber(5, true);
		}

		return $baseUrl . $url;
	}
}