# _Programming Track Suggester_

#### _A web page which suggests which coding track to take based on user inputs, August 12, 2016_

#### By _**Stephen Burden**_

## Description
_This is a web page which suggests which coding track to take based on user inputs. It contains forms and some form validation._


## Specifications
| Behavior | Input Ex. | Output Ex. |
| --- | --- | --- |
| Numbers 0-19 have their own unique names |  9 |  "nine" |
| Numbers 1-9 are used as suffixes in proceeding numbers, but not number 0| 34| thirty-four|
| Multiples of ten have unique IDs|20, 30, 40, etc | twenty, thirty, forty, etc.|
| Double digit numbers, 21-99, are a concatination of the first digit's ID plus the name of the multiple of ten|  93 |  "ninety-three" |
|At three digits, the first number name is followed "hundred"| 935|"nine hundred thirty-five"|
| At four digit, the first number name is followed by "thousand"  |  9,350 |  "nine thousand, three hundred fifty" |
|At five digits, the first two numbers follow the rules for two digit number names, plus the word "thousand"  |  93501 |  "ninety-three thousand, five hundred one" |
| At six digit, the first three numbers follow the rules for three digit number names, plus the word thousand |  935,014 |  "nine hundred thirty-five thousand, fourteen" |
| One million(7-9 digits), one billon(10-12 digits), and one trillion(13-16) follow the same rules for groups of three numbers plus their quantity name |  9350146 |  "nine million, three hundred fifty thousand, one hundred forty-six" |


///testing
| Determine Eight Digit Numbers |  93501469 |  "ninety-three million, five hundred one thousand, four hundred sixty-nine" |
| Determine nine Digit Numbers |  935014699 |  "nine hundred thirty-five million, fourteen thousand, six hundred ninety-nine
" |
| Determine Ten Digit Numbers |  9350146997 |  "nine billion, three hundred fifty million, one hundred forty-six thousand, nine hundred ninety-seven" |
| Determine Eleven Digit Numbers |  93501469978 |  "ninety-three billion, five hundred one million, four hundred sixty-nine thousand, nine hundred seventy-eight" |
| Determine Twelve Digit Numbers |  935014699780 |  "nine hundred thirty-five billion, fourteen million, six hundred ninety-nine thousand, seven hundred eighty" |

///OPTIONAL
| Determine Thirteen Digit Numbers |  9350146997802 |  "nine trillion, three hundred fifty billion, one hundred forty-six million, nine hundred ninety-seven thousand, eight hundred two" |
| Determine Fourteen Digit Numbers |  93501469978021 |  "ninety-three trillion, five hundred one billion, four hundred sixty-nine million, nine hundred seventy-eight thousand, twenty-one" |
| Determine Fifteen Digit Numbers |  935014699780210 |  "nine hundred thirty-five trillion, fourteen billion, six hundred ninety-nine million, seven hundred eighty thousand, two hundred ten" |

## Setup/Installation Requirements
* _Clone this repository to your desktop_
* _Open index.html in the browser of your choosing_

## Link
https://spburden.github.io/track-suggester/

## Known Bugs
_None yet_

## Support and contact details
_spburden@hotmail.com_

## Technologies Used
_HTML,
CSS,
Bootstrap,
JS,
jQuery_

### License
The MIT License (MIT)

Copyright (c) 2016 **_Stephen Burden_**
