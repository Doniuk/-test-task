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
