Feature: View My Products as Admin
	In order to manage all products enlisted for sale
	As an Admin
	I need to be able to view all my products

	Scenario: View All Products as Admin
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "bananaking" in "username"
		And I input "12345" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I see "Products"
		And I see "Edit"

	Scenario: Search for a Product as Customer
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "banana2" in "username"
		And I input "123" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I see "add to cart"