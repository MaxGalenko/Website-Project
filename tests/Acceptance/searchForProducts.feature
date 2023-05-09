Feature: Search for Products
	In order to search for products
	As a registered user of the system
	I want to be able to search and get the results

	Scenario: try searching the catalog
		Given I am on "http://localhost/Main/index"
		When I enter "Macbook" in the search box
		And I press "search" button
		Then I see "Macbook"

	Scenario: try searching the catalog for something that doesnt exist
		Given I am on "http://localhost/Main/index"
		When I enter "Banana" in the search box
		And I press "search" button
		Then I don't see "Macbook"