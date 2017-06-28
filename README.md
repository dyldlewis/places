# _Places_

#### _PHP Silex & Twig Practice, 06.28.2017_

#### By _**Dylan Lewis, Steve Spitz, Nathan Stewart**_

## Description

_This PHP exercise allows the user to enter cities that create a viewable Places you have been, as well as empty the list._

## Setup Requirements

* Open GitHub site on your browser: https://github.com/GStewartN/places
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then copy the repository link and press enter
  * type 'cd places' to access the path on your computer
  * type 'composer install' in terminal to download dependencies
  * type 'cd web' to enter the web folder, then type 'php -S localhost:8000' to open local server
* In your browser, enter 'localhost:8000' to view the webpage on your browser
* Enter in places to see the list, and empty the list when complete!

## Specifications
* It returns a list of places with images that the user enters.
  * Example Input: ('Portland', img/url), ('Dubai', img/url)
  * Example Output:
    * Portland - image
    * Dubai - image
* It clears the list when the clear button is pressed.
  * Example Input: *clear button pressed*
  * Example Output: List is cleared

## Technologies Used

* _PHP_
* _HTML_
* _Silex_
* _Twig_
* _Composer_

### License

Copyright &copy; 2017 Dylan Lewis, Steve Spitz, Nathan Stewart

This software is licensed under the MIT license.
