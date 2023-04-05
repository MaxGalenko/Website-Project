Feature: Search for Products
	In order to search for products
	As a registered user of the system
	I want to be able to search and get the results

	Scenario: Searching the catalog
		Given I am logged into the system
		When I type on the "search" textbox on the "Products" page
		And I click on "search" button
		Then I see products based on the search

	Scenario: Removing search from the Catalog
		Given I am logged into the system
		When I type nothing on the "search" textbox on the "Products" page
		And I click on "search"
		Then nothing happens

	Searching: Searching the catalog for something that doesnt exist
		Given I am logged into the system
		When I type "qoihgiuqe" on the "search" textbox on the "Products" page
		And I click on "search"
		Then I see "Item does not exist" prompt