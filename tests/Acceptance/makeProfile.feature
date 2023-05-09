Feature: makeProfile
  In order to create a profile
  As a user of the system
  I want to be able to log in

  Scenario: register
    Given I am on "http://localhost/" page
    When I click ".bi-door-closed"
    Then I am on "http://localhost/User/index" page
    And I click "Register."
    Then I am on "http://localhost/User/register" page
    And I input "BananaJoe" in "username"
    And I input "123" in "password"
    And I click "action"
    Then I am on "http://localhost/Profile/registerPersonalInformation" page
    And I input "Bryan" in "first_name"
    And I input "J." in "middle_name"
    And I input "Garcia" in "last_name"
    And I input "VeryCoolPerson@gmail.com" in "email"
    And I input "(123) 157-1693" in "phone_number"
    And I click "action"
    Then I am on "http://localhost/Profile/registerAddressInformation" page
    And I input "Scare st." in "street_address"
    And I input "H2D 1G2" in "postal_code"
    And I input "Arcadia" in "city"
    And I input "Jingleling" in "country"
    And I click "action"
    Then I am on "http://localhost/User/index" page
