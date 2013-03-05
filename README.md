Companies House Public API
==========================

Simple PHP Class or Wrapper built around the [Companies House Public API](http://www.companieshouse.gov.uk/about/miscellaneous/URI.shtml).

Available Methods
--------------------------

**search($int)**

Enables you to search the Companies House API.

Parameters:

* Company Number ($int) - Company Registration/Incorporation No.

Sample Output:

```
object(stdClass)#1 (1) {
  ["primaryTopic"]=>
  object(stdClass)#2 (12) {
    ["CompanyName"]=>
    string(16) "BOOTS UK LIMITED"
    ["CompanyNumber"]=>
    string(8) "00928555"
    ["RegAddress"]=>
    object(stdClass)#3 (2) {
      ["AddressLine2"]=>
      string(10) "NOTTINGHAM"
      ["Postcode"]=>
      string(7) "NG2 3AA"
    }
    ["CompanyCategory"]=>
    string(23) "Private Limited Company"
    ["CompanyStatus"]=>
    string(6) "Active"
    ["CountryOfOrigin"]=>
    string(14) "United Kingdom"
    ["IncorporationDate"]=>
    string(10) "11/03/1968"
    ["PreviousNames"]=>
    array(1) {
      [0]=>
      object(stdClass)#4 (2) {
        ["CONDate"]=>
        string(10) "01/10/2007"
        ["CompanyName"]=>
        string(26) "BOOTS THE CHEMISTS LIMITED"
      }
    }
    ["Accounts"]=>
    object(stdClass)#5 (5) {
      ["AccountRefDay"]=>
      string(2) "31"
      ["AccountRefMonth"]=>
      string(2) "03"
      ["NextDueDate"]=>
      string(10) "31/12/2013"
      ["LastMadeUpDate"]=>
      string(10) "31/03/2012"
      ["AccountCategory"]=>
      string(4) "FULL"
    }
    ["Returns"]=>
    object(stdClass)#6 (2) {
      ["NextDueDate"]=>
      string(10) "05/10/2013"
      ["LastMadeUpDate"]=>
      string(10) "07/08/2012"
    }
    ["Mortgages"]=>
    object(stdClass)#7 (4) {
      ["NumMortCharges"]=>
      string(1) "3"
      ["NumMortOutstanding"]=>
      string(1) "2"
      ["NumMortPartSatisfied"]=>
      string(1) "0"
      ["NumMortSatisfied"]=>
      string(1) "1"
    }
    ["SICCodes"]=>
    object(stdClass)#8 (1) {
      ["SicText"]=>
      array(2) {
        [0]=>
        string(51) "47190 - Other retail sale in non-specialised stores"
        [1]=>
        string(48) "47730 - Dispensing chemist in specialised stores"
      }
    }
  }
}
```

Credits
--------------------------

Developed by [Prashant Sugand](http://prashant.es) for [Sprinted](http://sprinted.co.uk).
