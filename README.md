# Scrabble Score Webpage

#### _A webpage that displays the scrabble score for a word, 16 February 2017_

#### By _**Erica Wright & Brendan Grubb**_

## Description

This webpage will allow a user to input a word and will display the score in scrabble for that word.

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub]https://github.com/ericaw21/scrabble-score.
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Program searches for letters within a single array and returns a score | "rat" | 3 |
| Program searches for letters within multiple arrays and returns a score | "fat" | 6 |

## Known Bugs

No known bugs.

## Support and contact details

Please contact ericaw21@gmail.com or brendangrubb@gmail.com with questions or concerns.

## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 {**Erica Wright & Brendan Grubb**} All Rights Reserved.
