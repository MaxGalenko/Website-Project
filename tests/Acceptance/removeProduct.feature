Feature: Remove a Product as Admin
	In order to stop selling a specific product
	As an Admin
	I want to remove a product

	Scenario: Remove a Product Successfully
		Given I am logged in as an Admin
		And I am on the main page
		And there is an existing product that I want to remove
		When I click on the "Remove" button for that product
		And confirm the action
		Then I should see a success message indicating that the product was removed
		And the product should no longer be displayed on the main page

	Scenario: Cancel Removing a Product
		Given I am logged in as an Admin
		And I am on the main page
		And there is an existing product that I want to remove
		When I click on the "Remove" button for that product
		And cancel the action
		Then the product should still be displayed on the main page
		And there should be no change to the product information