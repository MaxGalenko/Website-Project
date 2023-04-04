Feature: View My Products as Admin
	In order to manage all products enlisted for sale
	As an Admin
	I need to be able to view all my products

	Scenario: View All Products as Admin
		Given I am logged in as an Admin
		And I am on the "Main Page"
		When I click on the "View Products" button
		Then I should see a list of all products enlisted for sale
		And I should be able to view the details of each product, including name, price, quantity, and description.

	Scenario: Search for a Product as Admin
		Given I am logged in as an Admin
		And I am on the "Main Page"
		When I enter a search query in the search bar
		And click on the "Search" button
		Then I should see a list of products that match the search query
		And I should be able to view the details of each product, including name, price, quantity, and description.