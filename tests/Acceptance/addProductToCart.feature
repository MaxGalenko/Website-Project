Feature: Add Product to Cart
	As a registered user of the system
	In order to purchase a product
	I want to be able to add a product to my cart

	Scenario: Successfully adding product to cart
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "banana2" in "username"
		And I input "123" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I click "#p11"
		And I click ".bi-cart3"
		Then I am on "http://localhost/Cart/index" page
		And I see "Home Desktop"