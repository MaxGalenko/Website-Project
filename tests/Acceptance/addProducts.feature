Feature: Add Product as Admin
	In order to offer new products to my customers
	As an Admin
	I need to be able to add a new product

	Scenario: Add a New Product with All Required Fields as Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Add Product" button
		And fill out all the required fields for a new product, including name, description, price, and quantity
		And click on the "Save" button
		Then I should see a success message showing that the product was added
		And the new product should be displayed in the list of products on the main page.

	Scenario: Add a New Product with Invalid or Missing Fields as Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Add Product" button
		And fill out some or all of the fields for a new product with invalid or missing information
		And click on the "Save" button
		Then I should see an error message showing that the product was not added
		And the new product should not be displayed in the list of products on the main page.