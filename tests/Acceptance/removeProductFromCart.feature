Feature: Remove Product from Cart
	As a registered user of the system
	In order to remove products from my cart
	I want to be able to remove products that I no longer wish to purchase

	Scenario: Successfully removing product from cart
		Given I am logged into the system and I have products in my cart
		When I am on the "Cart" page
		And I click on the "Remove" button for a product
		Then that product should be removed from my cart
		And a message should be displayed indicating that the product has been removed from my cart
		And the "View Cart" button should show the updated number of products in my cart

	Scenario: Removing the last product from cart
		Given I am logged into the system and I have only one product in my cart
		When I am on the "Cart" page
		And I click on the "Remove" button for that product
		Then that product should be removed from my cart
		And I should be redirected to the main page where I can continue to browse products
		And a message should be displayed indicating that the product has been removed from my cart
		And the "View Cart" button should show 0 products in my cart

	Scenario: Removing all products from cart
		Given I am logged into the system and I have multiple products in my cart
		When I am on the "Cart" page
		And I click on the "Remove" button for all products
		Then all products should be removed from my cart
		And a message should be displayed indicating that all products have been removed from my cart
		And the "View Cart" button should show 0 products in my cart.