Feature: Add Product to Cart
	As a registered user of the system
	In order to purchase a product
	I want to be able to add a product to my cart

	Scenario: Successfully adding product to cart
		Given I am logged into the system and I am on the product page
		When I click on the "Add to Cart" button
		Then the product should be added to my cart with a quantity of 1
		And a message should be displayed confirming that the product has been added to my cart
		And the "View Cart" button should show the updated number of products in my cart

	Scenario: Adding a product that is already in cart
		Given I am logged into the system and I have already added a product to my cart
		When I am on the product page for that product
		And I click on the "Add to Cart" button
		Then the quantity of the product in my cart should increase by 1
		And a message should be displayed confirming that the quantity of the product has been updated in my cart
		And the "View Cart" button should show the updated number of products in my cart

	Scenario: Adding an out of stock product to cart
		Given I am logged into the system and I am on the product page for an out of stock product
		When I click on the "Add to Cart" button
		Then a message should be displayed indicating that the product is out of stock and cannot be added to my cart