Feature: Edit existing Product as Admin
	In order to update product information
	As an Admin
	I want to edit a product

	Scenario: Edit a product as an Admin
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "bananaking" in "username"
		And I input "12345" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I click "#e13"
		Then I am on "http://localhost/Product/edit/13" page
		And I input "I was just joking this computer is top notch!" in "description"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I click "#v13"
		Then I am on "http://localhost/Product/details/13" page
		And I see "joking"