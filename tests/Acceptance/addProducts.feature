Feature: Add Product as Admin
	In order to offer new products to my customers
	As an Admin
	I need to be able to add a new product

	Scenario: Add a New Product with some Fields as Admin
		Given I am on "http://localhost/" page
		When I click ".bi-door-closed"
		Then I am on "http://localhost/User/index" page
		And I input "bananaking" in "username"
		And I input "12345" in "password"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I click ".bi-plus-square"
		Then I am on "http://localhost/Product/create" page
		And I input "Alienware 24 inch" in "title"
		And I input "Flatscreen TV" in "type"
		And I input "Flatscreen TV from alienware, Limited Edition, matte black, and wireless!!!" in "description"
		And I input "2599.99" in "unit_price"
		And I input "13" in "quantity"
		And I click "action"
		Then I am on "http://localhost/Main/index" page
		And I see "Alienware"