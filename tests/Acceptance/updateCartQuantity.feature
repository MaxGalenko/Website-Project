Feature: Update Quantity of Item in Cart
	As a registered user of the system
	In order to change the quantity of a product in my cart
	I want to be able to update the quantity of that product

	Scenario: Successfully updating the quantity of a product
		Given I am logged into the system and I have a product in my cart
		When I am on the "Cart" page
		And I change the quantity of the product to a new value
		And I click the "Update" button
		Then the quantity of the product in my cart should be updated to the new value
		And a message should be displayed indicating that the quantity has been updated
		And the "View Cart" button should show the updated number of products in my cart

	Scenario: Updating the quantity of the last product in cart
		Given I am logged into the system and I have only one product in my cart
		When I am on the "Cart" page
		And I change the quantity of the product to a new value
		And I click the "Update" button
		Then the quantity of the product in my cart should be updated to the new value
		And a message should be displayed indicating that the quantity has been updated
		And the "View Cart" button should show the updated number of products in my cart

	Scenario: Updating the quantity of a product to an invalid value
		Given I am logged into the system and I have a product in my cart
		When I am on the "Cart" page
		And I change the quantity of the product to an invalid value (e.g. a negative number, a decimal number, or a non-numeric value)
		And I click the "Update" button
		Then the quantity of the product in my cart should not be updated
		And an error message should be displayed indicating that the quantity value is invalid.