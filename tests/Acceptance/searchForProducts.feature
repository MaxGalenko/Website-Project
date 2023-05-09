Feature: Search for Products
	In order to search for products
	As a registered user of the system
	I want to be able to search and get the results

	Scenario: try searching for Gaming
		Given I am on "http://localhost/Main/index" page
		And I input "Gaming" in "search_term"
		When I click "search"
		Then I see "Gaming PC"

	Scenario: try searching 
		Given I am on "http://localhost/Main/index" page
		And I input "Banana" in "search_term"
		When I click "search"
		Then I don't see "Banana"