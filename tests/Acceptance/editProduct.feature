Feature: Edit existing Product as Admin
	In order to update product information
	As an Admin
	I want to edit a product

	Scenario: Edit a product as an Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Edit Product" button for an existing product
		And change the name, description, price or quantity
		And click on the "Save" button
		Then I should see a success message indicating that the product was updated with the new information
		And the updated product information should be displayed on the main page for customers to see.

	Scenario: Edit a product with missing information as an Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Edit Product" button for an existing product
		And remove the name, description, price or quantity
		And click on the "Save" button
		Then I should see an error message indicating that the name, description, price or quantity is missing
		And the product information should not be updated.

	Scenario: Edit a product with invalid information as an Admin
		Given I am logged in as an Admin
		And I am on the main page
		When I click on the "Edit Product" button for an existing product
		And change the name, price or quantity to an invalid value
		And click on the "Save" button
		Then I should see an error message indicating that the name is invalid
		And the product information should not be updated.
