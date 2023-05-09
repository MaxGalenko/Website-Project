Feature: Filter From Catalog
	In order to filter the catalog
	As a registered user of the system
	I want to be able to filter the catalog and get the results

	Scenario: Filtering the Catalog without being logged in
		Given I am on "http://localhost/Main/index"
		When I click on "filter"
		Then I click Search "Price Ascending"
		Then I should see the prods in this order:
			| Project A |
			| Project B |
			| Project C |

	Scenario Outline: Removing filter from the Catalog
		Given I am logged into the system
		When I click on "Products" in the "Menu" bar
		And I click on "filter" near the "search" button
		Then I see a list of "<filter>" drop down
		And I click "none" filter
		Then I see the catalog give me results based on the latest product
		
		Examples: filter
		 | Price: Lowest to Highest |
		 | Price: Highest to Lowest |