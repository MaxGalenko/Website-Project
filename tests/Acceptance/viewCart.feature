Feature: View Cart
	As a registered user of the system
	In order to review my selected products
	I want to be able to view my cart

	Scenario: Successfully viewing cart
		Given I am logged into the system
		When I click on the "View Cart" button
		Then I should be taken to the "Cart" page
		And I should be able to see all the products I have added to my cart
		And I should be able to see the name, quantity, price, and total price of each product in my cart
		And I should be able to see the subtotal, tax, and total amount of my cart

	Scenario: Empty cart
		Given I am logged into the system
		When I click on the "View Cart" button
		Then I should be taken to the "Cart" page
		And I should see a message indicating that my cart is empty
		And I should not see any products in my cart

	Scenario: Continue shopping
		Given I am logged into the system and I have items in my cart
		When I am on the "Cart" page
		And I click on the "Continue Shopping" button
		Then I should be taken to the main page where I can continue to browse and add more products to my cart.