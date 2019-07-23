# How to run search command John and Mary:

* Open cmd
* Select folder with this files with "cd path" example: cd desktop\test-task
* Use command php bin/console app:search "text with John and Mary"
If result is 1, names John and Mary are found the same number of times inside the provided text
if not it will return 0


# How to test search command John and Mary:
* Open cmd
* Select folder with this files with "cd path" example: cd desktop\test-task
* Use command php bin/phpunit

If is ok one test is complete with 3 assertions
First: ten times john and mary with every possible combination of uppercase letters and one another word for test
result: 1
Secound: this same but with nine times john
result: 0
Third: Another names but without John and Mary
result: 1 because 0 times john and mary

# How to run Sorting array of JSON:
* Open cmd
* Select folder with this files with "cd path" example: cd desktop\test-task
* Use command php bin/console app:json "Select folder with json array" example: php bin/console app:json array.json

Sample JSON parameter: 
```
[	
	{
		"title": "H&M T-Shirt White",
		"price": 10.99,
		"inventory": 10
	},
	{
		"title": "Magento Enterprise License",
		"price": 1999.99,
		"inventory": 9999
	},
	{
		"title": "iPad 4 Mini",
		"price": 500.01,
		"inventory": 2
	},
	{
		"title": "iPad Pro",
		"price": 990.20,
		"inventory": 2
	},
	{
		"title": "Garmin Fenix 5",
		"price": 789.67,
		"inventory": 34
	},
	{
		"title": "Garmin Fenix 3 HR Sapphire Performer Bundle",
		"price": 789.67,
		"inventory": 12
	}
]
```

Result will be Sorted array of JSON string without whitespace.
If you want to see array better, open test-task\src\Service\Json.php in text editor and change last line from  return $json; to return $text;

Created by Rafał Doniec&copy;
